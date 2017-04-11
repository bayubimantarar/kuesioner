<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {

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
				'alumni'	=> $this->kuesioner_app->get_alumni_byid($this->session->userdata('nim'))
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('pages/sidebar');
		$this->load->view('kuesioner/form', $data);
		$this->load->view('pages/footer');
	}

	public function send(){
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('sebagai', 'Sebagai', 'required');
		$this->form_validation->set_rules('nama_pimpinan', 'Nama Pimpinan', 'required');
		$this->form_validation->set_rules('email_pimpinan', 'Email Pimpinan', 'required|valid_email');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_message('valid_email', 'Email tidak valid!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if ($this->form_validation->run() == FALSE){
			$data = array(
				'title' 	=> 'Alumni | Website Kuesioner',
				'alumni'	=> $this->kuesioner_app->get_alumni_byid($this->session->userdata('nim'))
				);

			$this->load->view('pages/header', $data);
			$this->load->view('pages/navbar');
			$this->load->view('pages/sidebar');
			$this->load->view('kuesioner/form', $data);
			$this->load->view('pages/footer');
		}else{
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$email_pimpinan = $this->input->post('email_pimpinan');
			$token = substr(sha1(rand()), 0, 30);
			$str = $this->base64url_encode($token);

			$message = '<p> NIM :'.$nim.'</p>
						<p> Nama :'.$nama.'</p>
						<p> LINK URL : http://localhost/kuesioner/form_kuesioner/'.$str.'</p>';
						
			$data = array(
						'nim' => $nim,
						'token' => $str,
						'created' => date('Y-m-d')
					);

			$query 	= $this->kuesioner_app->token_add_process($data);

			$result = 	$this->email
						->from('bayubimantara@gmail.com')
						->to($email_pimpinan)
						->subject("Form Kuesioner STMIK Bandung")
						->message($message)
						->send();

			redirect('kuesioner/index');
		}
	}

	public function base64url_encode($data) {   
    	return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   	}   
   
   	public function base64url_decode($data) {   
    	return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   	}   

}

/* End of file Kuesioner.php */
/* Location: ./application/controllers/intl/Kuesioner.php */