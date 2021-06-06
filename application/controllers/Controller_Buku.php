<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Buku extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Model_Mahasiswa');
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

		$this->load->view('View_Page', $content);
	}
}