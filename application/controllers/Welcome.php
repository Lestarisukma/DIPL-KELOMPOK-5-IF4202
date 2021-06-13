<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Buku');
	}

	public function index()
	{
		session_destroy();
		$data['main_view'] = 'View_Login';
		$data['title'] = 'Login';
		$this->load->view('View_Page', $data);
		
	}

	public function vmahasiswa()
	{
		$data['data'] = $this->Model_Buku->getBuku();
		$data['main_view'] = 'View_Home';
		$data['title'] = 'Home';
		$this->load->view('View_Page', $data);
	}

	public function login()
	{
		$this->form_validation->set_rules('Email', 'email', 'required');
		$this->form_validation->set_rules('Password', 'password', 'required');

		// $data['main_view'] = 'View_Login';
		// $data['title'] = 'Login';

		if ($this->form_validation->run() == FALSE) {
			redirect('Welcome/login');
			return;
		} 
		
		$email = $this->input->post('Email');
		$password = $this->input->post('Password');

		$peran = ' ';
		$query = $this->db->get_where('pengguna', ['Email' => $email])->row();

		//Jika email terdeteksi di table
		if (isset($query)) {
			// var_dump($query);
			$mhs = $this->db->get_where('mahasiswa', ['idPengguna' => $query->idPengguna])->row();
			if(isset($mhs)){
				$peran = 'mahasiswa';
				if ($password == $query->Password) {
					$data = [
						'NIM' => $mhs->NIM,
						'NamaMhs' => $mhs->NamaMhs,
						'peran' => $peran
					];
					
					$this->session->set_userdata('nama', $mhs->NamaMhs);
					$this->session->set_userdata('peran', $peran);
					$this->session->set_userdata('NIM', $mhs->NIM);
					// $data['main_view'] = 'View_Home';
					// $data['title'] = 'Mahasiswa';
					// $this->load->view('View_Page', $data);
					redirect('Welcome/vmahasiswa');
	
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Welcome/View_Login');
				}
			}
			else{
				$peran = 'pustakawan';
				$pstkwn = $this->db->get_where('pustakawan', ['idPengguna' => $query->idPengguna])->row();
				if ($password == $query->Password) {
					$data = [
						'NIP' => $pstkwn->NIP,
						'Nama' => $pstkwn->Nama,
						'peran' => $peran
					];
					
					$this->session->set_userdata('nama',$pstkwn->Nama);
					$this->session->set_userdata('peran', $peran);
					// $data['main_view'] = 'View_Home';
					// $data['title'] = 'Pustakawan';
					// $this->load->view('View_Page', $data);
					redirect('Welcome/vmahasiswa');
	
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Welcome/View_Login');
				}
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
			redirect('Welcome/View_Login');
		}
	}

	public function Detail($KodeBuku){
		$data = $this -> Model_Buku -> getBukuByKodeBuku($KodeBuku);
		echo json_encode($data);
	}
}
