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
		$nim 				= $this->input->post('nim');
		$jurusan 			= $this->input->post('jurusan');
		$id_token 			= $this->input->post('id_token');
		$token 				= $this->input->post('token');
		$nama_perusahaan 	= $this->input->post('nama_perusahaan');
		$bidang 			= $this->input->post('bidang');
		$tahun_masuk 		= $this->input->post('tahun_masuk');
		$sebagai 			= $this->input->post('sebagai');
		$tanggal_kuesioner 	= $this->input->post('tanggal_kuesioner');

		if($bidang==1){
			$mp1 = $this->input->post('mp1');
			$mp2 = $this->input->post('mp2');
			$mp3 = $this->input->post('mp3');
			$mp4 = $this->input->post('mp4');
			$mp5 = $this->input->post('mp5');
			$mp6 = $this->input->post('mp6');
			$mp7 = $this->input->post('mp7');
			$ti1 = $this->input->post('ti1');
			$ti2 = $this->input->post('ti2');
			$ti3 = $this->input->post('ti3');
			$ti4 = $this->input->post('ti4');
			$ti5 = $this->input->post('ti5');
			$ti6 = $this->input->post('ti6');
			$ti7 = $this->input->post('ti7');

			$data = array(
						'nim' => $nim,
						'jurusan' => $jurusan,
						'token' => $token,
						'nama_perusahaan' => $nama_perusahaan,
						'bidang' => $bidang,
						'sebagai' => $sebagai,
						'tahun_masuk' => $tahun_masuk,
						'tanggal_kuesioner' => $tanggal_kuesioner,
						'mp1' => $mp1,
						'mp2' => $mp2,
						'mp3' => $mp3,
						'mp4' => $mp4,
						'mp5' => $mp5,
						'mp6' => $mp6,
						'mp7' => $mp7,
						'ti1' => $ti1,
						'ti2' => $ti2,
						'ti3' => $ti3,
						'ti4' => $ti4,
						'ti5' => $ti5,
						'ti6' => $ti6,
						'ti7' => $ti7
					);

			print_r($data);

			$data_token = array(
							'status' => 1 
						);

			$query = $this->kuesioner_app->kuesioner_add_process($data);
			$query_token = $this->kuesioner_app->token_update_process($data_token, $id_token);

			redirect(base_url('form_kuesioner/success'));
		}else{
			$mp1 = $this->input->post('mp1');
			$mp2 = $this->input->post('mp2');
			$mp3 = $this->input->post('mp3');
			$mp4 = $this->input->post('mp4');
			$mp5 = $this->input->post('mp5');
			$mp6 = $this->input->post('mp6');
			$mp7 = $this->input->post('mp7');

			$data = array(
						'nim' => $nim,
						'jurusan' => $jurusan,
						'token' => $token,
						'nama_perusahaan' => $nama_perusahaan,
						'bidang' => $bidang,
						'sebagai' => $sebagai,
						'tahun_masuk' => $tahun_masuk,
						'mp1' => $mp1,
						'mp2' => $mp2,
						'mp3' => $mp3,
						'mp4' => $mp4,
						'mp5' => $mp5,
						'mp6' => $mp6,
						'mp7' => $mp7,
					);

			$data_token = array(
							'status' => 1 
						);

			$query = $this->kuesioner_app->kuesioner_add_process($data);
			$query_token = $this->kuesioner_app->token_update_process($data_token, $id_token);

			redirect(base_url('form_kuesioner/success'));
		}
	}

	public function success(){
		$this->load->view('pages/success');
	}


}

/* End of file Form_kuesioner.php */
/* Location: ./application/controllers/Form_kuesioner.php */