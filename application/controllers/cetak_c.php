<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_c extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('list_m');
		$this->load->library('pdf');
		}
		function index()
	{
        
	}		




		function laptrx(){
            if ($this->session->userdata('login') == false){
        
        $pdf = new FPDF('L');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(100);
        $pdf->MultiCell(0,12,'Laporan Daftar Transaksi Client');
        $pdf->Cell(0, 2, " ", "B");
        $pdf->Ln(10);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(237,138,236);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(242,37,240);
        $header = array('No.SHM ', 'Nama Penjual', 'Nama Pembeli', 'Proses','Letak Tanah' ,'Tanggal', 'Kategori');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
        $w = array(23, 25, 25, 117, 35,20,35);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = true;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
    foreach ($this->list_m->cetak() as $row):
        $pdf->Cell($w[0],6,$row->no_sertipikat,'LR',0,'C',$fill); 
        $pdf->Cell($w[1],6,$row->nm_penjual,'LR',0,'C',$fill);
        $pdf->Cell($w[2],6,$row->nm_pembeli,'LR',0,'C',$fill);
        $pdf->Cell($w[3],6,$row->proses,'LR',0,'L',$fill);
        $pdf->Cell($w[4],6,$row->almt_pembeli,'LR',0,'C',$fill);
        $pdf->Cell($w[5],6,$row->kategori,'LR',0,'L',$fill);
        $pdf->Cell($w[4],6,$row->tanggal,'LR',0,'L',$fill);

        $pdf->Ln();
        $fill = !$fill;
    endforeach;
    $pdf->Cell(array_sum($w),0,'','T');
        
        $pdf->Output();
        
        }else { redirect('cetak_c'); }

    } 

    
}
