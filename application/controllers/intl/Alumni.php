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
				'title' 	=> 'Alumni | Website Kuesioner',
				'alumni' 	=> $this->kuesioner_app->get_data_alumni()
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('alumni/index', $data);
		$this->load->view('pages/footer');
	}

	public function form_add(){
		$data = array(
				'title' => 'From add Alumni | Website Kuesioner'
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('alumni/form_add');
		$this->load->view('pages/footer');
	}

	public function add_process(){
		$this->form_validation->set_rules('nim', 'NIM', 'required|callback_nim_check');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_message('matches', 'Password tidak sama!');
		$this->form_validation->set_message('valid_email', 'Email tidak valid!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$data = array(
				'title' => 'From add Alumni | Website Kuesioner'
				);

			$this->load->view('pages/header', $data);
			$this->load->view('pages/navbar');
			$this->load->view('pages/sidebar');
			$this->load->view('alumni/form_add');
			$this->load->view('pages/footer');
		}else{
			$nim 		= $this->input->post('nim', TRUE);
			$nama 		= $this->input->post('nama', TRUE);
			$password 	= bcrypt($this->input->post('password', TRUE), 12);
			$jurusan 	= $this->input->post('jurusan', TRUE);
			$email 		= $this->input->post('email', TRUE);
			$alamat 	= $this->input->post('alamat', TRUE);

			$data = array(
						'nim' 		=> $nim,
						'nama'		=> $nama,
						'password' 	=> $password,
						'jurusan' 	=> $jurusan,
						'email'		=> $email,
						'alamat'	=> $alamat,
					);

			// print_r($data);

			$query = $this->kuesioner_app->alumni_add_process($data);

			redirect(base_url('alumni/form_add'));
		}
	}

	public function nim_check($str){
		if ($this->kuesioner_app->alumni_row_check('nim', $str) > 0){
			$this->form_validation->set_message('nim_check', 'NIM Sudah Digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function email_check($str){
		if ($this->kuesioner_app->alumni_row_check('email', $str) > 0){
			$this->form_validation->set_message('email_check', 'Email Sudah Digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

}

/* End of file Alumni.php */
/* Location: ./application/controllers/dashboard/Alumni.php */