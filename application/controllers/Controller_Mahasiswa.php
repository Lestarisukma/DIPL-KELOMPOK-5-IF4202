<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Mahasiswa extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Mahasiswa');
	}
	public function index()
	{
		$content['main_view'] = 'View_Home';
		$content['title'] = 'Mahasiswa';

		$this->load->view('View_Home', $content);
	}
	

	public function allMahasiswa()
	{
		$data = $this->Model_Mahasiswa->getMahasiswa();

		echo json_encode($data);
	}

	public function tambahMahasiswa(){
		$data = [

			"NIM" => $this->input->POST('NIM', true),
			"Nama" => $this->input->post('NamaM', true),
			"Email" => $this->input->post('EmailM', true),
			"Password" => $this->input->post('PasswordM', true),

		];
		$this->Model_Mahasiswa->tambahDataMahasiswa($data);
		redirect('Welcome/login','refresh');
	}

	public function deleteMahasiswa($NIM){
		$this->Model_Mahasiswa->deleteDataMahasiswa($NIM);
	}

	public function getMahasiswaByidPeminjaman($idPeminjaman)
	{
		$data = $this->Model_Mahasiswa->getMahasiswaByidPeminjaman($idPeminjaman);

		echo json_encode($data);
	}

	public function updateMahasiswa($NIM)
	{
		foreach ($_POST as $key => $value) {
			$post[$key] = $value;
		}

		$data = [

			"NIM" => $post['NIMM'],
			"Nama" => $post['NamaM'],
			"Email" => $post['EmailM'],
			"Password" => $post['PasswordM']

		];

		$kesuksesan['sukses'] = true;
		$this->updateMahasiswa($NIM, $data);

		echo json_encode($kesuksesan);

	}

	public function peminjamanBuku()
	{
		$data = [
			"NIM" => $this-> input-> post("NIM"),
			"KodeBuku" => $this-> input-> post("KodeBuku"),
			"Tanggal" => date("Y-m-d", strtotime($this->input->post("Tanggal")))
		];
		$this -> Model_Mahasiswa -> peminjamanBuku($data);
		redirect("Controller_Buku/Peminjaman");
	}

}