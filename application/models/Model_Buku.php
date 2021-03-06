<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Buku extends CI_Model {

	public function getBuku(){
		return $this->db->get('buku')->result_array();
	}

	public function tambahDataBuku($data){
		return $this->db->insert('buku', $data);
	}

	public function getBukuByKodeBuku($KodeBuku)
	{
		$this->db->where('KodeBuku', $KodeBuku);
		return $this->db->get('buku')->row();
	}

	public function getBukuByKodeBuku2($KodeBuku)
	{
		$this->db->where('KodeBuku', $KodeBuku);
		return $this->db->get('buku')->result_array();
	}

	public function updateBuku($KodeBuku, $data)
	{
		$this->db->where('KodeBuku', $KodeBuku);
		return $this->db->update('buku', $data);
	}

	public function deleteDataBuku($KodeBuku){
		$this->db->where('KodeBuku', $KodeBuku);
		return $this->db->delete('buku');
	}

	public function getPeminjamanByID($idPeminjaman){
		$this->db->select('idPeminjaman, NIM');
		$this->db->where('idPeminjaman', $idPeminjaman);
		return $this->db->get('peminjaman')->row();

	}

	public function insertPengembalian($data){
		$this->db->insert('pengembalian',$data);
	}
	
}
?>