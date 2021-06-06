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
		$content['title'] = 'Mahasiswa';

		$this->load->view('View_Page', $content);
	}

	public function Pengembalian()
	{
		$content['main_view'] = 'View_PengembalianBuku';
		$content['title'] = 'Mahasiswa';

		$this->load->view('View_Page', $content);
	}

	public function Denda()
	{
		$content['main_view'] = 'View_PemberitahuanDenda';
		$content['title'] = 'Mahasiswa';

		$this->load->view('View_Page', $content);
	}

	public function updateBuku($KodeBuku)
	{
		foreach ($_POST as $key => $value) {
			$post[$key] = $value;
		}

		$data = [

			"Judul" => $post['JudulB'],
			"Penerbit" => $post['PenerbitB'],
			"Stock" => $post['StockB']

		];

		$kesuksesan['sukses'] = true;
		$this->updateBuku($KodeBuku, $data);

		echo json_encode($kesuksesan);

	}
}