<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_InputDenda extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_InputDenda');
	}

	public function index()
	{
		$content['main_view'] = 'View_InputDenda';
		$content['title'] = 'Pustakawan | Input Denda';

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
		$this->updateDenda($idDenda, $data);

		echo json_encode($kesuksesan);

	}
	
	private function hitungDenda($denda,$hariterlambat)
    {
        if ($hariterlambat < 5){
            return $denda * $hariterlambat;
        }
        else if (($hariterlambat >= 5) && ($hariterlambat < 10)){
            return $denda * $hariterlambat *1.5;
        }
        else if ($hariterlambat >= 10) {
            return $denda * $hariterlambat *2;
        }
    }

	public function addDenda($idDenda){
		$hari = $this->Model_InputDenda->getTotalHari();
		$total = $this->hitungDenda(1000, $hari);
		$idDenda = $idDenda+1;
		$data = [
			'idDenda' => $idDenda,
			'Hari' => $hari,
			'TotalDenda' => $total
		];
		$this->Model_InputDenda->tambahDenda($data);
		$this->Model_InputDenda->updateKembaliIdDenda($this->input->post('idPeminjaman'), $this->input->post('NIM'), $idDenda);
		redirect('Controller_Laporan/DendaMahasiswa');
	}

	public function hapusDenda($idDenda) {

		if(!isset($idDenda)) show_404();
		var_dump($idDenda);
		if($this->Model_InputDenda->deleteDenda($idDenda)) {
			redirect('/Controller_Laporan/DendaMahasiswa');
		}
	}
	
}