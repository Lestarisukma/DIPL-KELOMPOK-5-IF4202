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
	public function index()
	{
		session_destroy();
		$data['main_view'] = 'View_Login';
		$data['title'] = 'Login';
		$this->load->view('View_Page', $data);
	}

	public function vmahasiswa()
	{
		$data['main_view'] = 'View_Home';
		$data['title'] = 'Home';
		$this->load->view('View_Page', $data);
	}

	public function login()
	{
		$this->form_validation->set_rules('Email', 'email', 'required');
		$this->form_validation->set_rules('Password', 'password', 'required');

		$data['main_view'] = 'View_Login';
		$data['title'] = 'Login';

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('View_Page', $data);
			return;
		} 
		
		$email = $this->input->post('Email');
		$password = $this->input->post('Password');

		$peran = ' ';
		$query = $this->db->get_where('mahasiswa', ['Email' => $email])->row_array();

		//Jika email terdeteksi di table mahasiswa
		if ($query != null) {
			$peran = 'mahasiswa';
		} 
		else {
			$query = $this->db->get_where('pustakawan', ['Email' => $email])->row_array();

			//Jika username terdeteksi di table pustakawan
			if ($query != null) {
				$peran = 'pustakawan';
			} 
		}
		
		//Jika username valid di mahasiswa
		if ($peran == 'mahasiswa') {

			if ($password == $query['Password']) {
				$data = [
					'NIM' => $query['NIM'],
					'NamaMhs' => $query['NamaMhs'],
					'peran' => $peran
				];
				
				$this->session->set_userdata('nama', $query['NamaMhs']);
				$data['main_view'] = 'View_Home';
				$data['title'] = 'Mahasiswa';
				$this->load->view('View_Page', $data);

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
				redirect('Welcome/View_Login');
			}
		}
		else if ($peran == 'pustakawan') {
			if ($password == $query['Password']) {
				$data = [
					'NIP' => $query['NIP'],
					'Nama' => $query['Nama'],
					'peran' => $peran
				];
				
				$this->session->set_userdata($data);
				$data['main_view'] = 'View_Home';
				$data['title'] = 'Pustakawan';
				$this->load->view('View_Home', $data);

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
				redirect('Welcome/View_Login');
			}
		}
	}
}
