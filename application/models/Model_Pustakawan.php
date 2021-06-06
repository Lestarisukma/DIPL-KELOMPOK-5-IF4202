<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Pustakawan extends CI_Model {

	public function getPustakawan(){
		return $this->db->get('pustakawan')->result_array();
	}

	public function tambahDataPustakawan($data){
		return $this->db->insert('pustakawan', $data);
	}

	public function getPustakawanByNIP($NIP)
	{
		$this->db->where('NIP', $NIP);
		return $this->db->get('pustakawan')->row();
	}

	public function updatePustakawan($NIP, $data)
	{
		$this->db->where('NIP', $NIP);
		return $this->db->update('pustakawan', $data);
	}

	public function deleteDataPustakawan($NIP){
		$this->db->where('NIP', $NIP);
		return $this->db->delete('pustakawan');
	}
	
}