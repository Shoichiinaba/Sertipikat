<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	var $template='template/index';
	
    function index()
	{
		$data['content'] = 'template/dashboard';
        $this->load->view($this->template, $data);
		
	}
	function coba(){
		$dj = md5(mysql_real_escape_string('aku'));
		print_r($dj);
	}
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    function fn_(){
    	if($this->session->userdata('u_name')){
    		$id = $this->session->userdata('u_id');

    		$like = "(u_id = '$id')";
			$this->db->where($like);
			$query = $this->db->get('user');
			if($query->num_rows() == 1){
				// jika user / admin berhasil ditemukan
				$data['pass_sekarang'] = $query->result_array()[0]['u_paswd'];
				$data['id'] = $query->result_array()[0]['u_id'];
				$data['nama'] = $query->result_array()[0]['nama'];
				$data['content'] = 'edit_password';
				$this->load->view($this->template, $data);

			}else{
				// jika sistem gagal menemukan orang / admin yang bersangkutan dalam menggunakan sistem

				redirect('login');
			}
    	}else{
    		redirect('login');
    	}
    }
    function pswd(){
    	$pss_lama = $this->input->post('pss_lama');
    	$pss_baru = $this->input->post('pss_baru');
    	$pss_baru_konf = $this->input->post('pss_baru_konf');
    	$id = $this->input->post('id');

    	// lakukan pengecekan

    	if($this->session->userdata('u_name')){
    		$pass = md5($pss_lama);
    		$like = "(u_id = '$id')";
			$this->db->where($like);
			$query = $this->db->get('user');
			if($query->num_rows() == 1){
				if($query->result_array()[0]['u_paswd'] == $pass){
					if($pass_baru == $pass_baru_konf){
						// jika semuanya sukses tanpa ada masalah
							$params = array('u_paswd'=>md5(mysql_real_escape_string($pss_baru))); 
							$this->db->where('u_id',$id);
							$exe = $this->db->update('user',$params);
							if($exe){
								redirect('dashboard');
							}else{
								die('ACCESS IS DENIED..!');
							}
						// SELESAI
					}else{
						// jika tidak ditemukan kesamaan password baru dengan konfirmasi password baru
						redirect('dashboard/fn_');
					}
				}else{
					// jika tidak terdapat kesamaan antara password lama dengan password lama yang diinput ke sistem
					redirect('dashboard/fn_');
				}
			}else{
				// jika tidak ditemukan user berdasarkan dari ID nya
				redirect('login');
			}
    	}else{
    		redirect('login');
    	}

    }
  }  
