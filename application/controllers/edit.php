<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
var $template='template/index';


	function ind(){
		$q = $this->db->get('pem_sertipikat');
		if($q->num_rows() < 1){
			$this->load->view('error_data');
		}else{
			$data['table'] = $q->result_array();
			$data['content'] = 'table';
			$this->load->view($this->template, $data);	
		}

	}
    function get_edit($id){
        $like = "(no_sertipikat = '$id')";
		$this->db->where($like);
		$query = $this->db->get('pem_sertipikat');

		$data['data'] = $query->result_array();
        $data['content'] = 'edit';
        $this->load->view($this->template, $data);	
    }
    function editor(){
    	$this->load->helper('form');
    	$Sertipikat = $this->input->post('no_sertipikat',true);
    	$P = $this->input->post('proses',true);

    	$params = array('proses'=>$P); 
		$this->db->where('no_sertipikat',$Sertipikat);
		$exe = $this->db->update('pem_sertipikat',$params);
		if($exe){
			redirect('list_c');
		}else{
			redirect('edit/get_edit/'.$No_shm);
		}
    }
    
}
