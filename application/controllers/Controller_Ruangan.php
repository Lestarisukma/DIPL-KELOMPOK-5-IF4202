<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Ruangan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Ruangan');
		
	}

	public function index()
	{
		$content['main_view'] = 'View_PinjamRuang';
		$content['title'] = 'Mahasiswa';

		$this->load->view('View_Page', $content);
	}

	public function DetailRuangan()
	{
		$this->load->view('View_InputPinjamRuang');

	}

	public function pinjamRuang()
	{
		$data = [
			'KodeRuangan' => $this->input->post('KodeRuangan'),
			'Tanggal' => date('Y-m-d',strtotime($this->input->post('Tanggal'))),
			'NIM' => $this -> session -> userdata('NIM')

		];
		$this->Model_Ruangan->tambahDataRuangan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Ruangan berhasil diupdate
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
	  		</button>
	</div>');
		redirect('Controller_Ruangan/DetailRuangan');
	}

}