<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Kelola extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Buku');
	}

	public function getBukuByKodeBuku($KodeBuku)
	{
		$data = $this->Model_Buku->getBukuByKodeBuku($KodeBuku);

		echo json_encode($data);
	}

	public function index()
	{
		$content['main_view'] = 'View_Pengelolaan';
		$content['title'] = 'Pustakawan | Pengelolaan';
		$content['data'] = $this->Model_Buku->getBuku();

		$this->load->view('View_Page', $content);

	}


	public function InsertBuku() {
		
		$config['upload_path']          = './asset';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1000;
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('uploadImage')){
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
				redirect('/Controller_Kelola');
		} 

		else {
			$cekkode = $this->Model_Buku->getBukuByKodeBuku($this->input->post('KodeBuku'));
			if (count($cekkode) <= 0){
				$data = [
					'Gambar' => $this->upload->data()['file_name'],
					'Judul' => $this->input->post('Judul'),
					'KodeBuku' => $this->input->post('KodeBuku'),
					'Penerbit' => $this->input->post('Penerbit'),
					'Stock' => $this->input->post('Stock')
				];

				$insert = $this->Model_Buku->tambahDataBuku($data);
				if(!$insert) {
					$error = array('error' => $this->upload->display_errors());
					redirect('/Controller_Kelola');
				}

				else {
					redirect('/Controller_Kelola');
				}
			}
			else {
				redirect('/Controller_Kelola');
			}
		}
	}

	public function hapusBuku($id) {

		if(!isset($id)) show_404();
		var_dump($id);
		if($this->Model_Buku->deleteDataBuku($id)) {
			redirect('/Controller_Kelola');
		}
	}

	public function editBuku($Kodebuku){
		$data = [
            "Judul" => $this->input->post('JudulB'),
            "Penerbit" => $this->input->post('PenerbitB'),
            "Stock" => $this->input->post('StockB')
        ];
		$this->Model_Buku->updateBuku($Kodebuku, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Update berhasil 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
	  		</button>
	</div>');

		redirect('/Controller_Kelola', 'refresh');
	}

}