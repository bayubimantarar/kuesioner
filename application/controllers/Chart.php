<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->check_login();
	}

	public function index(){
		$data = array(
					'title' => 'Chart', 
					);
		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('chart/index');
		$this->load->view('pages/footer');
	}

}

/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */