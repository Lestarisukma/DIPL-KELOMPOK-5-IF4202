<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Denda extends CI_Model {
    
    public function getDenda(){
        $this->db->select('mahasiswa.NamaMhs, pengembalian.idPeminjaman, pengembalian.Judul, pengembalian.Tanggal, denda.TotalDenda, denda.idDenda');
        $this->db->from('mahasiswa');
        $this->db->join('pengembalian', 'pengembalian.NIM = mahasiswa.NIM', 'inner');
        $this->db->join('denda', 'denda.idDenda = pengembalian.idDenda', 'inner');
        $this->db->where('pengembalian.idDenda is NOT NULL', NULL, FALSE);
        return $this->db->get()->result_array();
	}

}