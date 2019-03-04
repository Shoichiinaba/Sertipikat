<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_c extends CI_Controller {
var $template='template/index';


	function index(){
		$q = $this->db->get('pem_sertipikat');
		if($q->num_rows() < 1){
			$this->load->view('error_data');
		}else{
			$data['table'] = $q->result_array();
			$data['content'] = 'table';
			$this->load->view($this->template, $data);	
		}

	}

}
