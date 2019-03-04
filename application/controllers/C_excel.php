 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('exel_m');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
          
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array( 'title' => 'Exel  | Laporan Daftar Transaksi Client',
                'buku' => $this->exel_m->getAll());
 
           $this->load->view('laporan_excelV',$data);
      }
 
 }