<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	protected $username_temp;

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
	}

	public function index(){
		$data = array(
				'title' => 'Login | Website Kuesioner'
				);

		$this->load->view('pages/header', $data);
		$this->load->view('dashboard/login');
		$this->load->view('pages/footer');
	}

	public function check_login(){
		$this->username_temp = @$this->input->post('username');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_password_check');
		$this->form_validation->set_message('required', '%s harus diisi!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$this->load->view('pages/header');
			$this->load->view('dashboard/login');
			$this->load->view('pages/footer');
		}else{

			$username = $this->input->post('username');
			$query = $this->kuesioner_app->get_users_detail($username);

			if(!empty($query)) {
                $login_data = array(
                		'id' => $query->id, 
                		'username' => $query->username,
                		'last_login' => date('Y-m-d H:i:s'),
                		'login_status' => TRUE 
                		);
            }

			$this->session->set_userdata($login_data);

			redirect(base_url('dashboard/index'));
		}

	}

	public function username_check($str){
		$users_detail = $this->kuesioner_app->get_users_detail($this->username_temp);
		if($users_detail){
				return TRUE;
			}else{
				$this->form_validation->set_message('username_check', 'Username Tidak Ada!');
				return FALSE;
			}
	}


	public function password_check($str){
		$users_detail = $this->kuesioner_app->get_users_detail($this->username_temp);
		if($users_detail){
			if($users_detail->password == crypt($str, $users_detail->password)){
				return TRUE;
			}else{
				$this->form_validation->set_message('password_check', 'Password Salah!');
				return FALSE;
			}
		}else{
			$this->form_validation->set_message('password_check');
			return FALSE;
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/dashboard/Login.php */