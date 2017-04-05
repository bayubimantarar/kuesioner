<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Do your magic here
	}
	
	public function index(){
		$data = array(
				'title' => 'Website Kuesioner' 
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('index');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */