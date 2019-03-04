<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemb_c extends CI_Controller {
var $template='template/index';	
function __construct()
	{
		parent::__construct();
		$this->load->model('list_m');
	}

	function index(){
		$q = $this->db->get('pembeli');
		if($q->num_rows() < 1){
			$this->load->view('error_data');
		}else{
			$data['pem_v'] = $q->result_array();
			$data['content'] = 'pem_v';
			$this->load->view($this->template, $data);	
		}

	}
    
	function insert($params = '') {

		$this->load->helper('form');
		$data['content'] = 'form_pem';
		$id_pembeli = $this->input->post('id_pembeli');
		$nm_pembeli = $this->input->post('nm_pembeli');
		$alamat = $this->input->post('alamat');
		$no_tel = $this->input->post('no_tel');
		$params = array($id_pembeli, $nm_pembeli, $alamat, $no_tel,);
		$this->list_m->simpan($params);
		$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
		redirect('pemb_c');
		
		
	}
	function form(){
		$data['content'] = 'form_pem';
        $this->load->view($this->template, $data);
	}

	 function delete($params = '') {
        $this->list_m->del($params);
        $this->session->set_flashdata('sukses',"Data Berhasil Di Hapus");
        return redirect('pemb_c');
    }

    function edit() {
        
        $id_pembeli = $this->input->post('id_pembeli');
        $nm_pembeli = $this->input->post('nm_pembeli');
        $alamat = $this->input->post('alamat');
        $no_tel = $this->input->post('no_tel');

        $troop_ = array(
         'id_pembeli' =>  $id_pembeli,
         'nm_pembeli'  => $nm_pembeli,
         'alamat' => $alamat,
         'no_tel' => $no_tel,
         
      );
    
        
         $this->list_m->ubah($id_pembeli, $troop_);
          $this->session->set_flashdata('sukses',"Data Berhasil Di Ubah");
        return redirect('pemb_c');
    }

    function edit_view($param){
			
			$data['result'] = $this->list_m->edit_view($param);
			if($data['result'] == false){
				redirect("pemb_c");
			}else{
				$data['content'] = 'pemb_edit';
        		$this->load->view($this->template, $data);
				
			}
	}

}
