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
	
}