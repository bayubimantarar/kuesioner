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
		// Query from m_api.php
		$data = $this->kuesioner_app->get_json();

		if(!empty($data)){
			foreach ($data as $row) {
				// data array from database
				$json[] = array(
					'total_kerja' 		=> $row['total_kerja'],
					'belum_kerja' 		=> $row['belum_kerja'],
					'buka_usaha' 		=> $row['buka_usaha']
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