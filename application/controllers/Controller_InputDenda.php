<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_InputDenda extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->model('Model_InputDenda');
	}
	public function index()
	{
		$content['main_view'] => 'View_InputDenda';
		$content['title'] => 'Input Denda';

		$this->load->view('View_Home', $content);
	}
	

	public function allDenda()
	{
		$data = $this->Model_InputDenda->getDenda();

		echo json_encode($data);
	}

	public function tambahDenda(){
		$data = [

			"idDenda" => $this->input->POST('idDendaM', true),
			"Denda" => $this->input->post('DendaM', true),
			"Tanggal" => $this->input->post('TanggalM', true),

		];
		$this->Model_InputDenda->tambahDataDenda($data);
		redirect('Welcome/login','refresh');
	}

	public function deleteDenda($idDenda){
		$this->Model_InputDenda->deleteDataDenda($idDenda);
	}

	public function getMahasiswaByidPeminjaman($idPeminjaman)
	{
		$data = $this->Model_InputDenda->getMahasiswaByidPeminjaman($idPeminjaman);

		echo json_encode($data);
	}

	public function updateDenda($idDenda)
	{
		foreach ($_POST as $key => $value) {
			$post[$key] = $value;
		}

		$data = [

			"idDenda" => $post['idDendaM'],
			"Denda" => $post['DendaM'],
			"Tanggal" => $post['TanggalM']

		];

		$kesuksesan['sukses'] = true;
		$this->->updateDenda($idDenda, $data);

		echo json_encode($kesuksesan);

	}

}