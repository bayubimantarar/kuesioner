<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
		$this->load->model('kuesioner_app');
	}

	public function index(){
		
	}

	public function kegiatan_alumni(){
		// Query from m_api.php
		$data = $this->kuesioner_app->get_kegiatan_alumni();

		if(!empty($data)){
			foreach ($data as $row) {
				$bekerja = $row['bekerja'];
				$buka_usaha = $row['buka_usaha'];
				$belum_bekerja = $row['belum_bekerja'];
				$total_alumni = $bekerja+$buka_usaha+$belum_bekerja;

				$hitung_bekerja 		= round($bekerja/$total_alumni*100);
				$hitung_buka_usaha 		= round($buka_usaha/$total_alumni* 100); 
				$hitung_belum_bekerja 	= round($belum_bekerja/$total_alumni* 100); 

				// $total_alumni = $'bekerja']+$row['buka_usaha']+$row['belum_bekerja'];

				$persen_bekerja = $hitung_bekerja*30;
				$persen_buka_usaha = $hitung_buka_usaha*30;
				$persen_belum_bekerja = $hitung_belum_bekerja*30;

				$json[] = array(
					'total_alumni' => $total_alumni,
					'bekerja' => $hitung_bekerja,
					'buka_usaha' => $hitung_buka_usaha,
					'belum_bekerja' => $hitung_belum_bekerja
				);
			}
		}else{
			$json = array();
		}
		
		// Print with json_encode()
		echo json_encode($json);
	}

	public function total_alumni(){
		// Query from m_api.php
		$data = $this->kuesioner_app->get_total_alumni_chart();

		if(!empty($data)){
			foreach ($data as $row) {
				// data array from database
				$json[] = array(
					'1993'	=> $row['ak1993'],
					'1994' 	=> $row['ak1994'],
					'1995' 	=> $row['ak1995']
				);
			}
		}else{
			$json = array();
		}
		
		// Print with json_encode()
		echo json_encode($json);
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */