<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pustakawan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Pustakawan');
	}
	public function index()
	{
		$content['main_view'] = 'View_Home';
		$content['title'] = 'Pustakawan';

		$this->load->view('View_Home', $content);
	}
	

	public function allPustakawan()
	{
		$data = $this->Model_Pustakawan->getPustakawan();

		echo json_encode($data);
	}

	public function tambahPustakawan(){
		$data = [

			"NIP" => $this->input->POST('NIP', true),
			"Nama" => $this->input->post('Nama', true),
			"Email" => $this->input->post('Email', true),
			"Password" => $this->input->post('Password', true),
		];
		$this->Model_Pustakawan->tambahPustakawan($data);
		redirect('Welcome/login','refresh');
	}

	public function deletePustakawan($NIP){
		$this->Model_Pustakawan->deletePustakawan($NIP);
	}

	public function getMahasiswaByidPeminjaman($idPeminjaman)
	{
		$data = $this->Model_Mahasiswa->getMahasiswaByidPeminjaman($idPeminjaman);

		echo json_encode($data);
	}

	public function updatePutakawan($NIP)
	{
		foreach ($_POST as $key => $value) {
			$post[$key] = $value;
		}

		$data = [

			"NIM" => $post['NIP'],
			"Nama" => $post['Nama'],
			"Email" => $post['Email'],
			"Password" => $post['Password']

		];

		$kesuksesan['sukses'] = true;
		$this->updateMahasiswa($NIP, $data);

		echo json_encode($kesuksesanP);

	}

}