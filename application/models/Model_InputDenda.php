<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_InputDenda extends CI_Model {

	public function getDenda(){
		return $this->db->get('denda')->result_array();
	}

	public function tambahDataDenda($data){
		return $this->db->insert('denda', $data);
	}

	public function getMahasiswaByidPeminjaman($idPeminjaman)
	{
		$this->db->where('idPeminjaman', $idPeminjaman);
		return $this->db->get('peminjaman')->row();
	}
	
	public function updateDenda($idDenda, $data)
	{
		$this->db->where('idDenda', $idDenda);
		return $this->db->update('denda', $data);
	}

	

	
	
}