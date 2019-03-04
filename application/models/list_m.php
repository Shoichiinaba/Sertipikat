<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class list_m extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

    function cetak(){
         
        $query = $this->db->get('pem_sertipikat');
        return $query->result();
    }

    
    function getsertipikat($sampai,$dari){
        $query = $this->db->get('pem_sertipikat',$sampai,$dari);
        return $query->result_array();
    }
    function hapus($params =''){
        $sql = "DELETE  FROM pem_sertipikat WHERE no_sertipikat = ? ";
        return $this->db->query($sql, $params);
    }

    function insert($params =''){
        $sql = "INSERT INTO pem_sertipikat (no_sertipikat, nm_penjual, nm_pembeli, almt_pembeli, kategori, proses, tanggal) VALUES (?, ?, ?, ?, ?, 'pn_dokumen', CURRENT_TIMESTAMP)"; // perintah query insert data.
        return $this->db->query($sql,$params);

    }
    function get_baris($no)
    {
        $this->db->where('no_sertipikat',$no);
        $query = $this->db->get('pem_sertipikat');
        return ($query->num_rows() < 1)?'NO_DATA_QUERY':$query->result_array();

    }
    function simpan($params =''){

        $sql = "INSERT INTO pembeli  (id_pembeli, nm_pembeli, alamat, no_tel) VALUES (?, ?, ?, ?)";
        return $this->db->query($sql,$params);


    }
    function del($params =''){
        $sql = "DELETE  FROM pembeli WHERE id_pembeli = ? ";
        return $this->db->query($sql, $params);
    }

    function ubah($id_pembeli,$troop_) 
    {
        
        $this->db->where('id_pembeli', $id_pembeli);
        $this->db->update('pembeli', $troop_);
    }
    
    function edit_view($param){
        $sql = "SELECT * FROM pembeli WHERE id_pembeli = ?";
        $query = $this->db->query($sql, $param);
        if($query->num_rows() == 1){
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return false;
        }
    }

}