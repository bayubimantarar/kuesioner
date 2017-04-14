 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_kuesioner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
	}

	public function index($param=NULL){
		$token = $this->uri->segment(3);

		$data = array(
				'user_info' => $user_info = $this->kuesioner_app->token_validation($token)
				);

		if(!$user_info){
			$data = array(
					'message' => 'Token tidak valid atau kadaluarsa!', 
					);

			$this->load->view('pages/error_404', $data);
		}else{
			$data_form = array(
					'title' => 'Website Kuesioner', 
					);

			$this->load->view('pages/header', $data_form);
			$this->load->view('form_kuesioner', $data);
			$this->load->view('pages/footer');
		}
	}

	public function add_process(){
		// $token = $this->uri->segment(3);
		$nim = $this->input->post('nim');
		$token = $this->input->post('token');
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$bidang = $this->input->post('bidang');
		$tahun_masuk = $this->input->post('tahun_masuk');
		$mp1 = $this->input->post('mp1');
		$mp2 = $this->input->post('mp2');
		$mp3 = $this->input->post('mp3');
		$mp4 = $this->input->post('mp4');
		$mp5 = $this->input->post('mp5');
		$mp6 = $this->input->post('mp6');
		$mp7 = $this->input->post('mp7');

		$data = array(
					'nim' => $nim,
					'token' => $token,
					'nama_perusahaan' => $nama_perusahaan,
					'bidang' => $bidang,
					'tahun_masuk' => $tahun_masuk,
					'mp1' => $mp1,
					'mp2' => $mp2,
					'mp3' => $mp3,
					'mp4' => $mp4,
					'mp5' => $mp5,
					'mp6' => $mp6,
					'mp7' => $mp7
				);

		// print_r($data);

		$query = $this->kuesioner_app->kuesioner_add_process($data);
	}


}

/* End of file Form_kuesioner.php */
/* Location: ./application/controllers/Form_kuesioner.php */