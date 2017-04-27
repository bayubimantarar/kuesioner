<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->int_check_login();
	}

	public function index(){
		$data = array(
				'title' 	=> 'Dashboard | Website Kuesioner',
				'users' 	=> $this->kuesioner_app->get_data_users()
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/users/index', $data);
		$this->load->view('int/pages/footer');
	}

	public function form_add(){
		$data = array(
				'title' => 'From add users | Website Kuesioner'
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/users/form_add');
		$this->load->view('int/pages/footer');		
	}

	public function form_edit(){
		$id = $this->uri->segment(4);

		$data = array(
				'title' => 'From add users | Website Kuesioner',
				'users' => $this->kuesioner_app->get_users_byid($id)
				);

		$this->load->view('int/pages/header', $data);
		$this->load->view('int/pages/navbar');
		$this->load->view('int/pages/sidebar');
		$this->load->view('int/users/form_edit', $data);
		$this->load->view('int/pages/footer');	
	}

	public function users_add(){
		$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_message('matches', 'Password tidak sama!');
		$this->form_validation->set_message('valid_email', 'Email tidak valid!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$data = array(
				'title' => 'From add users | Website Kuesioner'
				);

			$this->load->view('int/pages/header', $data);
			$this->load->view('int/pages/navbar');
			$this->load->view('int/pages/sidebar');
			$this->load->view('int/users/form_add');
			$this->load->view('int/pages/footer');
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

			redirect(base_url('int/users/index'));
		}
	}

	public function edit_process(){
		$id 		= $this->input->post('id');
		$username 	= $this->input->post('username');
		$password 	= bcrypt($this->input->post('password', TRUE), 12);
		$email 		= $this->input->post('email');

		if(!empty($password)){
			$data = array(
						'id' => $id,
						'username' 	=> $username,
						'password' 	=> $password,
						'email' 	=> $email 
					);

			$query = $this->kuesioner_app->users_update_process($data, $id);

			print_r($query);

			$this->session->set_flashdata('notif', 'Berhasil mengedit data!');

			redirect(base_url('int/users/index'));
		}else{
			$data = array(
						'id' => $id,
						'username' 	=> $username,
						'email' 	=> $email 
					);

			$query = $this->kuesioner_app->users_update_process($data, $id);

			$this->session->set_flashdata('notif', 'Berhasil mengedit data!');

			redirect(base_url('int/users/index'));
		}
	}

	public function users_delete(){
		$id = $this->uri->segment(4);

		$query = $this->kuesioner_app->users_delete_process($id);

		redirect(base_url('int/users/index'));
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

}

/* End of file Users.php */
/* Location: ./application/controllers/dashboard/Users.php */