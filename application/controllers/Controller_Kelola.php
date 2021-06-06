<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Kelola extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Model_Mahasiswa');
	}

	public function index()
	{
		$content['main_view'] = 'View_Pengelolaan';
		$content['title'] = 'Pustakawan|Pengelolaan';

		$this->load->view('View_Page', $content);
	}

}