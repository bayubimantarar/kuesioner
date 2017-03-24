<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->check_login();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
	}
	

	/**
		Start function view table
		Author 	: Bayu Bimantara
		Date 	: 24/3/2017
	**/ 
	public function index(){
		$data = array(
				'title' => 'Dashboard | Website Kuesioner',
				'alumni' => $this->kuesioner_app->count_alumni()
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('pages/footer');
	}

	public function users(){
		$data = array(
				'title' 	=> 'Dashboard | Website Kuesioner',
				'users' 	=> $this->kuesioner_app->get_data_users()
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('dashboard/table_users', $data);
		$this->load->view('pages/footer');
	}
	/**
		End function view table
	**/

	public function users_form(){
		$data = array(
				'title' => 'From add users | Website Kuesioner'
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('dashboard/form_add_users');
		$this->load->view('pages/footer');		
	}

	public function users_add(){
		$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|callback_email_check');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_message('matches', 'Password tidak sama!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$data = array(
				'title' => 'From add users | Website Kuesioner'
				);

			$this->load->view('pages/header', $data);
			$this->load->view('pages/navbar');
			$this->load->view('pages/sidebar');
			$this->load->view('dashboard/form_add_users');
			$this->load->view('pages/footer');
		}else{
			$username 	= $this->input->post('username', TRUE);
			$password 	= bcrypt($this->input->post('password', TRUE), 12);
			$email 		= $this->input->post('email', TRUE);

			$data = array(
					'username' 		=> $username,
					'password' 		=> $password,
					'email' 		=> $email,
					'active_since' 	=> date('Y-m-d')
					);

			$query = $this->kuesioner_app->users_add_process($data);
		}
	}

	public function username_check($str){
		if ($this->kuesioner_app->users_row_check('username', $str) > 0){
			$this->form_validation->set_message('username_check', 'Username Sudah Digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function email_check($str){
		if ($this->kuesioner_app->users_row_check('email', $str) > 0){
			$this->form_validation->set_message('email_check', 'Email Sudah Digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

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