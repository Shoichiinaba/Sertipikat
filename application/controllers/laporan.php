<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('list_m');
		
		}
		function index()
	{
    
	}		

    function laprec($no)
    {
     
        

        $data = $this->list_m->get_baris($no);

        if($data != 'NO_DATA_QUERY'){
            $no_sertipikat = $data[0]['no_sertipikat'];
            $tanggal = $data[0]['tanggal'];
            $nm_penjual = $data[0]['nm_penjual'];
            $nm_pembeli = $data[0]['nm_pembeli'];
            $almt_pembeli = $data[0]['almt_pembeli'];
            $kategori = $data[0]['kategori'];
            $proses = $data[0]['proses'];

            $this->load->library('pdf');
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);

        $pdf->Cell(25);
        $pdf->Cell(0,0,'Laporan Transaksi Client',0,0,'C');
        $pdf->Ln();
        $pdf->Cell(0, 4, " ", "B");
        $pdf->Ln(10);

        $pdf->Cell(35, 4, 'No.SHM', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$no_sertipikat, 0, 0, 'L');
        $pdf->Ln(7);
        $pdf->Cell(35, 4, 'Tanggal', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$tanggal, 0, 0, 'L');
        $pdf->Ln(7);
        $pdf->Cell(35, 4, 'Nama Penjual', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$nm_penjual, 0, 0, 'L');
        $pdf->Ln(7);
        $pdf->Cell(35, 4, 'Nama Pembeli', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$nm_pembeli, 0, 0, 'L');
        $pdf->Ln(7);
        $pdf->Cell(35, 4, 'Letak Tanah', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$almt_pembeli, 0, 0, 'L');
        $pdf->Ln(7);
        $pdf->Cell(35, 4, 'Kategori', 0, 0, 'L'); 
        $pdf->Cell(85, 4,': '.$kategori, 0, 0, 'L');
        $pdf->Ln(7);
        $pdf->Cell(0, 2, " ", "B");
        $pdf->Ln(10);

        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(237,138,236);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(242,37,240);
        $header = array('Proses Tahapan Transaksi');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
       $w = array(190);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
        $pdf->Cell(190,6,$proses, 'LR', 0, 'C',$fill);
        //$pdf->Cell($w[4],6,$proses,'LR',0,'C',$fill);

        $pdf->Ln();
        $fill = !$fill;
        $pdf->Cell(array_sum($w),0,'','T');
   
        $pdf->Output();
        
        }
    }
}