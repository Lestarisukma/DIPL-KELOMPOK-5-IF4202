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
			$this->load->view('View_Home', $data);
		}

		public function login()
		{
			$this->form_validation->set_rules('Email', 'email', 'required');
			$this->form_validation->set_rules('Password', 'password', 'required');

			$data['main_view'] = 'View_Login';
			$data['title'] = 'Login';

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('View_Home', $data);
			} else {
				$email = $this->input->post('Email');
				$password = $this->input->post('Password');
	
				$peran;
				$query = $this->db->get_where('mahasiswa', ['Email' => $email])->row_array();

				//Jika username terdeteksi di table mahasiswa
				if ($query) {
					$peran = 'mahasiswa';
				} else {
					$query = $this->db->get_where('pustakawan', ['Email' => $email])->row_array();

					//Jika username terdeteksi di table pustakawan
					if ($query) {
						$peran = 'pustakawan';
					} 
				}
		}

}
