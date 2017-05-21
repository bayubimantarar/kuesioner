<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->int_check_login();
	}

	public function index(){
		$data = array(
				'title' 		=> 'Kuesioner | Website Kuesioner',
				'kuesioner' 	=> $this->kuesioner_app->get_data_kuesioner()
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/kuesioner/index', $data);
		$this->load->view('int/pages/footer');
	}

}

/* End of file Kuesioner.php */
/* Location: ./application/controllers/int/Kuesioner.php */