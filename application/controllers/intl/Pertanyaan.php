<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
		$this->load->helper('main_helper');
		$this->load->library('main_library');
		$this->main_library->check_login();
	}

	public function index(){
		$data = array(
				'title' 	=> 'Pertanyaan | Website Kuesioner',
				'pertanyaan' 	=> $this->kuesioner_app->get_data_pertanyaan()
				);

		$this->load->view('dashboard/pages/header', $data);
		$this->load->view('dashboard/pages/navbar');
		$this->load->view('dashboard/pages/sidebar');
		$this->load->view('dashboard/pertanyaan/index', $data);
		$this->load->view('dashboard/pages/footer');
	}

	public function form_add(){
		$data = array(
				'title' => 'From add pertanyaan | Website Kuesioner',
				'kategori' => $this->kuesioner_app->get_data_kategori()
				);

		$this->load->view('dashboard/pages/header', $data);
		$this->load->view('dashboard/pages/navbar');
		$this->load->view('dashboard/pages/sidebar');
		$this->load->view('dashboard/pertanyaan/form_add', $data);
		$this->load->view('dashboard/pages/footer');	
	}

	public function pertanyaan_add(){
		$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");

		if($this->form_validation->run() == FALSE){
			$data = array(
				'title' => 'From add users | Website Kuesioner',
				'kategori' => $this->kuesioner_app->get_data_kategori()
				);

			$this->load->view('dashboard/pages/header', $data);
			$this->load->view('dashboard/pages/navbar');
			$this->load->view('dashboard/pages/sidebar');
			$this->load->view('dashboard/pertanyaan/form_add', $data);
			$this->load->view('dashboard/pages/footer');
		}else{
			$id_kategori 	= $this->input->post('id_kategori', TRUE);
			$pertanyaan 	= $this->input->post('pertanyaan', TRUE);

			$data = array(
					'id_kategori' 	=> $id_kategori,
					'pertanyaan' 	=> $pertanyaan
					);

			$query = $this->kuesioner_app->pertanyaan_add_process($data);

			redirect(base_url('dashboard/pertanyaan/index'));
		}

	}

}

/* End of file Pertanyaan.php */
/* Location: ./application/controllers/dashboard/Pertanyaan.php */