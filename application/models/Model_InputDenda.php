<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_InputDenda extends CI_Model {

	// public function getDenda(){
	// 	return $this->db->get('denda')->result_array();
	// }

	// public function tambahDataDenda($data){
	// 	return $this->db->insert('denda', $data);
	// }

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

	public function getDenda(){
        $this->db->select('mahasiswa.NIM, pengembalian.idPeminjaman, pengembalian.Tanggal, denda.TotalDenda, denda.idDenda');
        $this->db->from('mahasiswa');
        $this->db->join('pengembalian', 'pengembalian.NIM = mahasiswa.NIM', 'inner');
        $this->db->join('denda', 'denda.idDenda = pengembalian.idDenda', 'inner');
        $this->db->where('pengembalian.idDenda is NOT NULL', NULL, FALSE);
		$this->db->order_by('idDenda', 'ASC');
        return $this->db->get()->result_array();
	}

    public function deleteDenda($idDenda){
		$this->db->where('idDenda', $idDenda);
		return $this->db->delete('denda');
	}

    public function getTotalHari(){
      $query = $this->db->query('SELECT Pengembalian.Tanggal as TanggalPengembalian, Peminjaman.Tanggal as TanggalPeminjaman FROM Pengembalian 
      INNER JOIN Peminjaman ON Pengembalian.idPeminjaman = Peminjaman.idPeminjaman')->row();
      $diff = date_diff(date_create($query->TanggalPengembalian), date_create($query->TanggalPeminjaman))->format("%a");
      return (int)$diff;

    }

	public function tambahDenda($data){
		$this->db->insert('denda', $data);
	}

	public function updateKembaliIdDenda($idPeminjaman, $NIM, $idDenda){
		$this->db->where('NIM', $NIM);
		$this->db->where('idPeminjaman',$idPeminjaman);
		$this->db->update('pengembalian', ['idDenda'=>$idDenda]);
	}
    
	
	
	
}