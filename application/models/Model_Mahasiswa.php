<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Mahasiswa extends CI_Model {

	public function getMahasiswa(){
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambahDataMahasiswa($data){
		return $this->db->insert('mahasiswa', $data);
	}

	public function getMahasiswaByNIM($NIM)
	{
		$this->db->where('NIM', $NIM);
		return $this->db->get('mahasiswa')->row();
	}

	public function updateMahasiswa($NIM, $data)
	{
		$this->db->where('NIM', $NIM);
		return $this->db->update('mahasiswa', $data);
	}

	public function deleteDataMahasiswa($NIM){
		$this->db->where('NIM', $NIM);
		return $this->db->delete('mahasiswa');
	}
	
	public function peminjamanBuku($data){
		return $this->db->insert('peminjaman', $data);
	}

	public function getDenda($NIM){
        $this->db->select('mahasiswa.NIM, pengembalian.idPeminjaman, pengembalian.Tanggal, denda.TotalDenda, denda.idDenda');
        $this->db->from('mahasiswa');
        $this->db->join('pengembalian', 'pengembalian.NIM = mahasiswa.NIM', 'inner');
        $this->db->join('denda', 'denda.idDenda = pengembalian.idDenda', 'inner');
        $this->db->where('pengembalian.idDenda is NOT NULL', NULL, FALSE);
		$this->db->where('mahasiswa.NIM', $NIM);
        return $this->db->get()->result_array();
	}
}