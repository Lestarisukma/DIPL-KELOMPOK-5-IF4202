<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Ruangan extends CI_Model {

	public function getRuangan(){
		return $this->db->get('ruangan')->result_array();
	}

	public function tambahDataRuangan($data){
		return $this->db->insert('peminjaman', $data);
		
	}

	public function getRuanganByKodeRuangan($KodeRuangan)
	{
		$this->db->where('KodeRuangan', $KodeRuangan);
		return $this->db->get('ruangan')->row();
	}

	public function updateRuangan($KodeRuangan, $data)
	{
		$this->db->where('KodeRuangan', $KodeRuangan);
		return $this->db->update('ruangan', $data);
	}

	public function deleteDataRuangan($KodeRuangan){
		$this->db->where('KodeRuangan', $KodeRuangan);
		return $this->db->delete('ruangan');
	}
	
}