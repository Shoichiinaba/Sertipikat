<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class permalink extends CI_Controller {
var $template='template/index';

	function __construct(){
		session_start();
       parent::__construct();
       $this->load->model('list_m');
     } 
	function index(){

		$data['content'] = 'action';
        $this->load->view($this->template, $data);
	}

	function test(){
		$ket = $this->input->get('ket',true);
		$no = $this->input->get('Noshm',true);
		if($no){
			$queryUpdate = $this->buka($no).''.$ket;
			echo $this->update_data($queryUpdate,$no);
		}
		
	}
	
	function update_data($update,$noshm){
		$params = array('proses'=>$update); 
		$this->db->where('no_sertipikat',$noshm);
		$exe = $this->db->update('pem_sertipikat',$params);
		if($exe){
			return 'STATUS_SUCCESS';
		}else{
			return 'ACCESS_DENIED';
		}
	}
	function ambil_data(){
		$get = $this->input->get('cari',true);
		$like = "(no_sertipikat = '$get')";
		$this->db->where($like);
		$query = $this->db->get('pem_sertipikat');
		if($query->num_rows() == 1){
			echo json_encode($query->result_array());	
		}else{
			echo "NO_DATA_QUERY";
		}
	}

	function listd(){
		$q = $this->db->get('pem_sertipikat');
		if($q->num_rows() < 1){
			$this->load->view('error_data');
		}else{
			$data['list'] = $q->result_array();
			$data['content'] = 'table';
			$this->load->view($this->template, $data);	
		}
	}

	function buka($q){
		$get = $q;
		$like = "(no_sertipikat = '$get')";
		$this->db->where($like);
		$query = $this->db->get('pem_sertipikat');
		if($query->num_rows() == 1){
			//print_r($query->result_array());
			return $query->result_array()[0]['proses'];	
		}else{
			return "NO_DATA_QUERY";
		}
	}
    function delete($params = '') {
        $this->list_m->hapus($params);
        return redirect('list_c');
    }
    
	
}

		 
    

