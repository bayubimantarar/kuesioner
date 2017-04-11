<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	protected $nim_temp;

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
	}

	public function index(){
		$data = array(
				'title' => 'Login | Website Kuesioner'
				);

		$this->load->view('pages/header', $data);
		$this->load->view('login');
		$this->load->view('pages/footer');
	}

	public function check_login(){
		$this->nim_temp = @$this->input->post('nim');
		$this->form_validation->set_rules('nim', 'Username', 'required|callback_nim_check');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_password_check');
		$this->form_validation->set_message('required', '%s harus diisi!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$this->load->view('pages/header');
			$this->load->view('login');
			$this->load->view('pages/footer');
		}else{

			$nim = $this->input->post('nim');
			$query = $this->kuesioner_app->get_alumni_detail($nim);

			if(!empty($query)) {
                $login_data = array(
                		'nim' => $query->nim, 
                		'nama' => $query->nama,
                		'login_status' => TRUE 
                		);
            }

			$this->session->set_userdata($login_data);

			redirect(base_url('dashboard'));
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	public function nim_check($str){
		$nim = $this->kuesioner_app->get_alumni_detail($this->nim_temp);
		if($nim){
				return TRUE;
			}else{
				$this->form_validation->set_message('nim_check', 'NIM Tidak Ada!');
				return FALSE;
			}
	}


	public function password_check($str){
		$nim = $this->kuesioner_app->get_alumni_detail($this->nim_temp);
		if($nim){
			if($nim->password == crypt($str, $nim->password)){
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