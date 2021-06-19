<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Laporan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_InputDenda');
		$this->load->model('Model_Buku');
	}

	public function Buku()
	{
		$content['main_view'] = 'View_PeminjamanBuku';
		$content['title'] = 'Mahasiswa';
		$content['data'] = $this->Model_Buku->getBuku();
		$this->load->view('View_Page', $content);
	}

	public function DendaMahasiswa()
	{
		$content['main_view'] = 'View_LapDenda';
		$content['title'] = 'Pustakawan | Denda Mahasiswa';
		$content['dataDenda'] = $this->Model_InputDenda->getDenda();
		$content['denda'] = $this->Model_InputDenda->getTabelDenda() ;
		$this->load->view('View_Page', $content);
	}

	public function InputBukuBaru()
	{
		$content['main_view'] = 'View_InputDataBuku';
		$content['title'] = 'Pustakawan | Input Buku';

		$this->load->view('View_Page', $content);
	}

	public function PengembalianBuku()
	{
		$content['main_view'] = 'View_PengembalianBuku';
		$content['title'] = 'Pustakawan | Pengembalian Buku';

		$this->load->view('View_Page', $content);
	}

	public function insertPengembalian(){
		$idPeminjaman = $this->input->post('idPeminjaman');
		$peminjaman = $this->Model_Buku->getPeminjamanByID($idPeminjaman);
		$data = [
			'idPeminjaman' => $idPeminjaman,
			'Tanggal' => date('Y-m-d', strtotime($this->input->post('Tanggal'))),
			'NIM' => $peminjaman->NIM
		];
		
		$this->Model_Buku->insertPengembalian($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Pengembalian buku berhasil 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
	  		</button>
	</div>');
		redirect('/Controller_Laporan/PengembalianBuku');
	}

	
}