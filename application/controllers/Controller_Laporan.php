<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Laporan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Denda');
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
		$content['dataDenda'] = $this->Model_Denda->getDenda();

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

}