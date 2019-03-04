<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_c extends CI_Controller {
var $template='template/index';

	function __construct(){
       parent::__construct();
       $this->load->model('list_m');
   }


	function index(){
		$data['content'] = 'form_u';
        $this->load->view($this->template, $data);
	}

function insert($params = '') {
		
		$this->load->helper('form');
		$data['content'] = 'tam_int';
		$data['no_sertipikat'] = $this->input->post('no_sertipikat', true);
		$data['nm_penjual'] = $this->input->post('nm_penjual', true);
		$data['nm_pembeli'] = $this->input->post('nm_pembeli', true);
		$data['almt_pembeli'] = $this->input->post('almt_pembeli', true);
		$data['kategori'] = $this->input->post('kategori', true);
		$data['proses'] = $this->input->post('proses',true);
        $data['tanggal'] = $this->input->post('tanggal', true);

        // d
        $this->list_m->insert(array($data['no_sertipikat'],$data['nm_penjual'],$data['nm_pembeli'],$data['almt_pembeli'],$data['kategori'],$data['proses'],$data['tanggal']));

		$this->load->view($this->template, $data);

		
	}
}
