<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Buku extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Buku');
		$this->load->model('Model_Mahasiswa');
	}

	public function Peminjaman()
	{
		$content['main_view'] = 'View_PeminjamanBuku';
		$content['title'] = 'Mahasiswa | Peminjaman';

		$this->load->view('View_Page', $content);
	}

	public function Pengembalian()
	{
		$content['main_view'] = 'View_PengembalianBuku';
		$content['title'] = 'Mahasiswa | Pengembalian';

		$this->load->view('View_Page', $content);
	}

	public function Denda()
	{
		$content['main_view'] = 'View_PemberitahuanDenda';
		$content['title'] = 'Mahasiswa | Denda';
		$content['data'] = $this->Model_Mahasiswa->getDenda($this->session->userdata("NIM"));
		$this->load->view('View_Page', $content);
	}

	public function updateBuku($KodeBuku)
	{

		$cekkode = $this->Model_Buku->getBukuByKodeBuku($KodeBuku);
		if (count($cekkode) <= 0){
			$data = [

			"Judul" => $this->input->post('JudulB'),
			"Penerbit" => $this->input->post('PenerbitB'),
			"Stock" => $this->input->post('StockB')

			];

			$this->Model_Buku->updateBuku($KodeBuku, $data);
			redirect('/Controller_Kelola');

		}

		else{
			redirect('/Controller_Kelola');
		}
	
	}
}