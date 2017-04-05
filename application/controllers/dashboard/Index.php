<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->check_login();
	}
	
	/**
		Start function view table
		Author 	: Bayu Bimantara
		Date 	: 24/3/2017
	**/ 
	public function index(){
		$data = array(
				'title' => 'Dashboard | Website Kuesioner'
				);

		$this->load->view('dashboard/pages/header', $data);
		$this->load->view('dashboard/pages/navbar');
		$this->load->view('dashboard/pages/sidebar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('dashboard/pages/footer');
	}
	/**
		End function view table
	**/

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('dashboard/login'));
	}

	// public function chart(){
	// 	$this->load->view('pages/header');
	// 	$this->load->view('pages/navbar');
	// 	$this->load->view('pages/sidebar');
	// 	$this->load->view('chart');
	// 	$this->load->view('pages/footer');	
	// }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */