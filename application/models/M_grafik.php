<?php
class M_grafik extends CI_Model{
 
    function chart(){
      $query=$this->db->query("SELECT * FROM  pem_sertipikat WHERE kategori='C Desa'");
      return $query;
          


 }
}
