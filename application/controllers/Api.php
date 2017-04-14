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
		$data = $this->kuesioner_app->get_json_hasil();

		if(!empty($data)){
			foreach ($data as $row) {
				//temp total
				$temp_total = $row['total'];

				//temp mp1
				$temp_mp1a = $row['mp1_a'];
				$temp_mp1b = $row['mp1_b'];
				$temp_mp1c = $row['mp1_c'];
				$temp_mp1d = $row['mp1_d'];

				//temp mp2
				$temp_mp2a = $row['mp2_a'];
				$temp_mp2b = $row['mp2_b'];
				$temp_mp2c = $row['mp2_c'];
				$temp_mp2d = $row['mp2_d'];

				//temp mp3
				$temp_mp3a = $row['mp3_a'];
				$temp_mp3b = $row['mp3_b'];
				$temp_mp3c = $row['mp3_c'];
				$temp_mp3d = $row['mp3_d'];

				//temp mp4
				$temp_mp4a = $row['mp4_a'];
				$temp_mp4b = $row['mp4_b'];
				$temp_mp4c = $row['mp4_c'];
				$temp_mp4d = $row['mp4_d'];

				//temp mp5
				$temp_mp5a = $row['mp5_a'];
				$temp_mp5b = $row['mp5_b'];
				$temp_mp5c = $row['mp5_c'];
				$temp_mp5d = $row['mp5_d'];

				//temp mp6
				$temp_mp6a = $row['mp6_a'];
				$temp_mp6b = $row['mp6_b'];
				$temp_mp6c = $row['mp6_c'];
				$temp_mp6d = $row['mp6_d'];

				//temp mp7
				$temp_mp7a = $row['mp7_a'];
				$temp_mp7b = $row['mp7_b'];
				$temp_mp7c = $row['mp7_c'];
				$temp_mp7d = $row['mp7_d'];

				//persen mp1
				$persen_mp1a 	= round($temp_mp1a/$temp_total*100);
				$persen_mp1b 	= round($temp_mp1b/$temp_total*100);
				$persen_mp1c 	= round($temp_mp1c/$temp_total*100);
				$persen_mp1d 	= round($temp_mp1d/$temp_total*100);

				//persen mp2
				$persen_mp2a 	= round($temp_mp2a/$temp_total*100);
				$persen_mp2b 	= round($temp_mp2b/$temp_total*100);
				$persen_mp2c 	= round($temp_mp2c/$temp_total*100);
				$persen_mp2d 	= round($temp_mp2d/$temp_total*100);

				//persen mp3
				$persen_mp3a 	= round($temp_mp3a/$temp_total*100);
				$persen_mp3b 	= round($temp_mp3b/$temp_total*100);
				$persen_mp3c 	= round($temp_mp3c/$temp_total*100);
				$persen_mp3d 	= round($temp_mp3d/$temp_total*100);

				//persen mp4
				$persen_mp4a 	= round($temp_mp4a/$temp_total*100);
				$persen_mp4b 	= round($temp_mp4b/$temp_total*100);
				$persen_mp4c 	= round($temp_mp4c/$temp_total*100);
				$persen_mp4d 	= round($temp_mp4d/$temp_total*100);

				//persen mp5
				$persen_mp5a 	= round($temp_mp5a/$temp_total*100);
				$persen_mp5b 	= round($temp_mp5b/$temp_total*100);
				$persen_mp5c 	= round($temp_mp5c/$temp_total*100);
				$persen_mp5d 	= round($temp_mp5d/$temp_total*100);

				//persen mp6
				$persen_mp6a 	= round($temp_mp6a/$temp_total*100);
				$persen_mp6b 	= round($temp_mp6b/$temp_total*100);
				$persen_mp6c 	= round($temp_mp6c/$temp_total*100);
				$persen_mp6d 	= round($temp_mp6d/$temp_total*100);

				//persen mp7
				$persen_mp7a 	= round($temp_mp7a/$temp_total*100);
				$persen_mp7b 	= round($temp_mp7b/$temp_total*100);
				$persen_mp7c 	= round($temp_mp7c/$temp_total*100);
				$persen_mp7d 	= round($temp_mp7d/$temp_total*100);


				$json[] = array(
					'total' => $temp_total,
					'hasil_mp1a' => $persen_mp1a,
					'hasil_mp1b' => $persen_mp1b,
					'hasil_mp1c' => $persen_mp1c,
					'hasil_mp1d' => $persen_mp1d,
					'hasil_mp2a' => $persen_mp2a,
					'hasil_mp2b' => $persen_mp2b,
					'hasil_mp2c' => $persen_mp2c,
					'hasil_mp2d' => $persen_mp2d,
					'hasil_mp3a' => $persen_mp3a,
					'hasil_mp3b' => $persen_mp3b,
					'hasil_mp3c' => $persen_mp3c,
					'hasil_mp3d' => $persen_mp3d,
					'hasil_mp4a' => $persen_mp4a,
					'hasil_mp4b' => $persen_mp4b,
					'hasil_mp4c' => $persen_mp4c,
					'hasil_mp4d' => $persen_mp4d,
					'hasil_mp5a' => $persen_mp5a,
					'hasil_mp5b' => $persen_mp5b,
					'hasil_mp5c' => $persen_mp5c,
					'hasil_mp5d' => $persen_mp5d,
					'hasil_mp6a' => $persen_mp6a,
					'hasil_mp6b' => $persen_mp6b,
					'hasil_mp6c' => $persen_mp6c,
					'hasil_mp6d' => $persen_mp6d,
					'hasil_mp7a' => $persen_mp7a,
					'hasil_mp7b' => $persen_mp7b,
					'hasil_mp7c' => $persen_mp7c,
					'hasil_mp7d' => $persen_mp7d
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