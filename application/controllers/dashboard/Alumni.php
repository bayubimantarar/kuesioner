<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->check_login();
	}

	public function index(){
		$data = array(
				'title' 		=> 'Alumni | Website Kuesioner',
				'identitas' 	=> $this->kuesioner_app->get_data_identitas()
				);

		$this->load->view('dashboard/pages/header', $data);
		$this->load->view('dashboard/pages/navbar');
		$this->load->view('dashboard/pages/sidebar');
		$this->load->view('dashboard/identitas/index', $data);
		$this->load->view('dashboard/pages/footer');
	}

	public function kegiatan_alumni(){
		$data = array(
				'title' => 'Kegiatan Alumni' 
				);

		$this->load->view('dashboard/pages/header', $data);
		$this->load->view('dashboard/pages/navbar');
		$this->load->view('dashboard/pages/sidebar');
		$this->load->view('dashboard/chart');
		$this->load->view('dashboard/pages/footer');	
	}

}

/* End of file Alumni.php */
/* Location: ./application/controllers/dashboard/Alumni.php */