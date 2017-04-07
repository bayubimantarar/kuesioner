<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_kuesioner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
	}

	public function index(){
		$data = array(
				'title' => 'Form Kuesioner',
				'pertanyaan' => $this->kuesioner_app->get_data_pertanyaan()
				);

		$this->load->view('pages/header', $data);
		$this->load->view('pages/navbar');
		$this->load->view('form_kuesioner', $data);
	}

	public function kirim(){

		$this->form_validation->set_rules('nim', 'NIM', 'required|callback_nim_check');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_message('required', '%s harap diisi!');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div>");
		
		if($this->form_validation->run() == FALSE){
			$data = array(
				'title' => 'Form Kuesioner' 
				);

			$this->load->view('pages/header', $data);
			$this->load->view('pages/navbar');
			$this->load->view('form_kuesioner');
		}else{
			$nim 		= $this->input->post('nim');
			$nama 		= $this->input->post('nama');
			$lulus 		= $this->input->post('lulus');
			$no_hp 		= $this->input->post('no_hp');
			$email 		= $this->input->post('email');
			$alamat 	= $this->input->post('alamat');
			$kegiatan 	= $this->input->post('kegiatan');

			if($kegiatan==1){
				$nama_perusahaan_bekerja 		= $this->input->post('nama_perusahaan_bekerja');
				$alamat_perusahaan_bekerja 		= $this->input->post('alamat_perusahaan_bekerja');
				$sektor_perusahaan_bekerja 		= $this->input->post('sektor_perusahaan_bekerja');
				$tahun_masuk 					= $this->input->post('tahun_masuk');
				$gaji_pertama 					= $this->input->post('gaji_pertama');
				$informasi_lowongan 			= $this->input->post('informasi_lowongan');
				$informasi_lowongan_lainnya		= $this->input->post('informasi_lowongan_lainnya');
				$skala_relevan 					= $this->input->post('skala_relevan');
				$pengetahuan_relevan 			= $this->input->post('pengetahuan_relevan');

				if(!empty($informasi_lowongan)){
					$data_identitas = array(
									'nim' 		=> $nim,
									'nama' 		=> $nama,
									'lulus' 	=> $lulus,
									'no_hp'		=> $no_hp,
									'email'		=> $email,
									'alamat'	=> $alamat,
									'kegiatan'	=> $kegiatan
								);

					$data_bekerja 	= array(
										'nim' 					=> $nim,
										'nama_perusahaan' 		=> $nama_perusahaan_bekerja,
										'alamat_perusahaan' 	=> $alamat_perusahaan_bekerja,
										'sektor_perusahaan' 	=> $sektor_perusahaan_bekerja,
										'tahun_masuk' 			=> $tahun_masuk,
										'gaji_pertama'			=> $gaji_pertama,
										'informasi_lowongan' 	=> $informasi_lowongan,
										'skala_relevan' 		=> $skala_relevan,
										'pengetahuan_relevan' 	=> $pengetahuan_relevan
								);

					$query_identitas 	= $this->kuesioner_app->alumni_add_process($data_identitas);
					$query_bekerja 		= $this->kuesioner_app->bekerja_add_process($data_bekerja);

					$this->session->set_flashdata('notif', 'Terima Kasih Anda telah mengirimkan kuesioner!');
					redirect(base_url('form_kuesioner/'));
				}else{
					$data_identitas = array(
									'nim' 		=> $nim,
									'nama' 		=> $nama,
									'lulus' 	=> $lulus,
									'no_hp'		=> $no_hp,
									'email'		=> $email,
									'alamat'	=> $alamat,
									'kegiatan'	=> $kegiatan
								);

					$data_bekerja 	= array(
										'nim' 					=> $nim,
										'nama_perusahaan' 		=> $nama_perusahaan_bekerja,
										'alamat_perusahaan' 	=> $alamat_perusahaan_bekerja,
										'sektor_perusahaan' 	=> $sektor_perusahaan_bekerja,
										'tahun_masuk' 			=> $tahun_masuk,
										'gaji_pertama'			=> $gaji_pertama,
										'informasi_lowongan' 	=> $informasi_lowongan_lainnya,
										'skala_relevan' 		=> $skala_relevan,
										'pengetahuan_relevan' 	=> $pengetahuan_relevan
								);

				print_r($data_bekerja);

				$query_identitas 	= $this->kuesioner_app->alumni_add_process($data_identitas);
				$query_bekerja 		= $this->kuesioner_app->bekerja_add_process($data_bekerja);

				$this->session->set_flashdata('notif', 'Terima Kasih Anda telah mengirimkan kuesioner!');
				redirect(base_url('form_kuesioner/'));

				}

				

			}else if($kegiatan == 2){
				$nama_usaha 			= $this->input->post('nama_usaha');
				$alamat_usaha 			= $this->input->post('alamat_usaha');
				$bidang_usaha 			= $this->input->post('bidang_usaha');
				$jumlah_karyawan 		= $this->input->post('jumlah_karyawan');
				$omzet_perbulan 		= $this->input->post('omzet_perbulan');
				$pengeluaran_perbulan 	= $this->input->post('pengeluaran_perbulan');
				$skala_relevan_usaha 	= $this->input->post('skala_relevan_usaha');

				$data_identitas = array(
									'nim' 		=> $nim,
									'nama' 		=> $nama,
									'lulus' 	=> $lulus,
									'no_hp'		=> $no_hp,
									'email'		=> $email,
									'alamat'	=> $alamat,
									'kegiatan'	=> $kegiatan
								);

				$data_usaha 	= array(
									'nim' => $nim,
									'nama_usaha' => $nama_usaha,
									'alamat_usaha' => $alamat_usaha,
									'bidang_usaha' => $bidang_usaha,
									'omzet_perbulan' => $omzet_perbulan,
									'pengeluaran_perbulan' => $pengeluaran_perbulan,
									'skala_relevan' => $skala_relevan_usaha
								);

				$query_identitas 	= $this->kuesioner_app->alumni_add_process($data_identitas);
				$query_usaha 		= $this->kuesioner_app->usaha_add_process($data_usaha);

				$this->session->set_flashdata('notif', 'Terima Kasih Anda telah mengirimkan kuesioner!');
				redirect(base_url('form_kuesioner/'));
			}else{
				$kegiatan_belum_bekerja 	= $this->input->post('kegiatan_belum_bekerja');
				$saran_pekerjaan 			= $this->input->post('saran_pekerjaan');
				$saran_kampus 				= $this->input->post('saran_kampus');

				$data_identitas 	= array(
										'nim' 		=> $nim,
										'nama' 		=> $nama,
										'lulus' 	=> $lulus,
										'no_hp'		=> $no_hp,
										'email'		=> $email,
										'alamat'	=> $alamat,
										'kegiatan'	=> $kegiatan
									);

				$data_belum_bekerja = array(
										'nim' 						=> $nim,
										'kegiatan_belum_bekerja' 	=> $kegiatan_belum_bekerja,
										'saran_pekerjaan'			=> $saran_pekerjaan,
										'saran_kampus'				=> $saran_kampus
									);

				$query_identitas 			= $this->kuesioner_app->alumni_add_process($data_identitas);
				$query_belum_bekerja 		= $this->kuesioner_app->belum_bekerja_add_process($data_belum_bekerja);
				
				$this->session->set_flashdata('notif', 'Terima Kasih Anda telah mengirimkan kuesioner!');
				redirect(base_url('form_kuesioner/'));
			}

		}
		
	}

	public function nim_check($str){
		if ($this->kuesioner_app->alumni_row_check('nim', $str) > 0){
			$this->form_validation->set_message('nim_check', 'NIM yang dipakai sudah digunakan!');
			return FALSE;
		}else{
			return TRUE;
		}
	}

}

/* End of file Form_kuesioner.php */
/* Location: ./application/controllers/dashboard/Form_kuesioner.php */