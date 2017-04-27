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

				//temp mp1
				$temp_ti1a = $row['ti1_a'];
				$temp_ti1b = $row['ti1_b'];
				$temp_ti1c = $row['ti1_c'];
				$temp_ti1d = $row['ti1_d'];

				//temp mp2
				$temp_ti2a = $row['ti2_a'];
				$temp_ti2b = $row['ti2_b'];
				$temp_ti2c = $row['ti2_c'];
				$temp_ti2d = $row['ti2_d'];

				//temp mp3
				$temp_ti3a = $row['ti3_a'];
				$temp_ti3b = $row['ti3_b'];
				$temp_ti3c = $row['ti3_c'];
				$temp_ti3d = $row['ti3_d'];

				//temp mp4
				$temp_ti4a = $row['ti4_a'];
				$temp_ti4b = $row['ti4_b'];
				$temp_ti4c = $row['ti4_c'];
				$temp_ti4d = $row['ti4_d'];

				//temp mp5
				$temp_ti5a = $row['ti5_a'];
				$temp_ti5b = $row['ti5_b'];
				$temp_ti5c = $row['ti5_c'];
				$temp_ti5d = $row['ti5_d'];

				//temp mp6
				$temp_ti6a = $row['ti6_a'];
				$temp_ti6b = $row['ti6_b'];
				$temp_ti6c = $row['ti6_c'];
				$temp_ti6d = $row['ti6_d'];

				//temp mp7
				$temp_ti7a = $row['ti7_a'];
				$temp_ti7b = $row['ti7_b'];
				$temp_ti7c = $row['ti7_c'];
				$temp_ti7d = $row['ti7_d'];

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

				//persen mp1
				$persen_ti1a 	= round($temp_ti1a/$temp_total*100);
				$persen_ti1b 	= round($temp_ti1b/$temp_total*100);
				$persen_ti1c 	= round($temp_ti1c/$temp_total*100);
				$persen_ti1d 	= round($temp_ti1d/$temp_total*100);

				//persen mp2
				$persen_ti2a 	= round($temp_ti2a/$temp_total*100);
				$persen_ti2b 	= round($temp_ti2b/$temp_total*100);
				$persen_ti2c 	= round($temp_ti2c/$temp_total*100);
				$persen_ti2d 	= round($temp_ti2d/$temp_total*100);

				//persen mp3
				$persen_ti3a 	= round($temp_ti3a/$temp_total*100);
				$persen_ti3b 	= round($temp_ti3b/$temp_total*100);
				$persen_ti3c 	= round($temp_ti3c/$temp_total*100);
				$persen_ti3d 	= round($temp_ti3d/$temp_total*100);

				//persen mp4
				$persen_ti4a 	= round($temp_ti4a/$temp_total*100);
				$persen_ti4b 	= round($temp_ti4b/$temp_total*100);
				$persen_ti4c 	= round($temp_ti4c/$temp_total*100);
				$persen_ti4d 	= round($temp_ti4d/$temp_total*100);

				//persen mp5
				$persen_ti5a 	= round($temp_ti5a/$temp_total*100);
				$persen_ti5b 	= round($temp_ti5b/$temp_total*100);
				$persen_ti5c 	= round($temp_ti5c/$temp_total*100);
				$persen_ti5d 	= round($temp_ti5d/$temp_total*100);

				//persen mp6
				$persen_ti6a 	= round($temp_ti6a/$temp_total*100);
				$persen_ti6b 	= round($temp_ti6b/$temp_total*100);
				$persen_ti6c 	= round($temp_ti6c/$temp_total*100);
				$persen_ti6d 	= round($temp_ti6d/$temp_total*100);

				//persen mp7
				$persen_ti7a 	= round($temp_ti7a/$temp_total*100);
				$persen_ti7b 	= round($temp_ti7b/$temp_total*100);
				$persen_ti7c 	= round($temp_ti7c/$temp_total*100);
				$persen_ti7d 	= round($temp_ti7d/$temp_total*100);


				$json[] = array(
					'total' 		=> $temp_total,
					'mp1_a'			=> $temp_mp1a,
					'mp1_b'			=> $temp_mp1b,
					'mp1_c'			=> $temp_mp1c,
					'mp1_d'			=> $temp_mp1d,
					'mp2_a'			=> $temp_mp2a,
					'mp2_b'			=> $temp_mp2b,
					'mp2_c'			=> $temp_mp2c,
					'mp2_d'			=> $temp_mp2d,
					'mp3_a'			=> $temp_mp3a,
					'mp3_b'			=> $temp_mp3b,
					'mp3_c'			=> $temp_mp3c,
					'mp3_d'			=> $temp_mp3d,
					'mp4_a'			=> $temp_mp4a,
					'mp4_b'			=> $temp_mp4b,
					'mp4_c'			=> $temp_mp4c,
					'mp4_d'			=> $temp_mp4d,
					'mp5_a'			=> $temp_mp5a,
					'mp5_b'			=> $temp_mp5b,
					'mp5_c'			=> $temp_mp5c,
					'mp5_d'			=> $temp_mp5d,
					'mp6_a'			=> $temp_mp6a,
					'mp6_b'			=> $temp_mp6b,
					'mp6_c'			=> $temp_mp6c,
					'mp6_d'			=> $temp_mp6d,
					'mp7_a'			=> $temp_mp7a,
					'mp7_b'			=> $temp_mp7b,
					'mp7_c'			=> $temp_mp7c,
					'mp7_d'			=> $temp_mp7d,
					'ti1_a'			=> $temp_ti1a,
					'ti1_b'			=> $temp_ti1b,
					'ti1_c'			=> $temp_ti1c,
					'ti1_d'			=> $temp_ti1d,
					'ti2_a'			=> $temp_ti2a,
					'ti2_b'			=> $temp_ti2b,
					'ti2_c'			=> $temp_ti2c,
					'ti2_d'			=> $temp_ti2d,
					'ti3_a'			=> $temp_ti3a,
					'ti3_b'			=> $temp_ti3b,
					'ti3_c'			=> $temp_ti3c,
					'ti3_d'			=> $temp_ti3d,
					'ti4_a'			=> $temp_ti4a,
					'ti4_b'			=> $temp_ti4b,
					'ti4_c'			=> $temp_ti4c,
					'ti4_d'			=> $temp_ti4d,
					'ti5_a'			=> $temp_ti5a,
					'ti5_b'			=> $temp_ti5b,
					'ti5_c'			=> $temp_ti5c,
					'ti5_d'			=> $temp_ti5d,
					'ti6_a'			=> $temp_ti6a,
					'ti6_b'			=> $temp_ti6b,
					'ti6_c'			=> $temp_ti6c,
					'ti6_d'			=> $temp_ti6d,
					'ti7_a'			=> $temp_ti7a,
					'ti7_b'			=> $temp_ti7b,
					'ti7_c'			=> $temp_ti7c,
					'ti7_d'			=> $temp_ti7d,
					'hasil_mp1a' 	=> $persen_mp1a,
					'hasil_mp1b' 	=> $persen_mp1b,
					'hasil_mp1c' 	=> $persen_mp1c,
					'hasil_mp1d'	=> $persen_mp1d,
					'hasil_mp2a' 	=> $persen_mp2a,
					'hasil_mp2b' 	=> $persen_mp2b,
					'hasti_mp2c' 	=> $persen_mp2c,
					'hasil_mp2d' 	=> $persen_mp2d,
					'hasil_mp3a' 	=> $persen_mp3a,
					'hasil_mp3b' 	=> $persen_mp3b,
					'hasil_mp3c' 	=> $persen_mp3c,
					'hasil_mp3d' 	=> $persen_mp3d,
					'hasil_mp4a' 	=> $persen_mp4a,
					'hasil_mp4b' 	=> $persen_mp4b,
					'hasil_mp4c' 	=> $persen_mp4c,
					'hasil_mp4d' 	=> $persen_mp4d,
					'hasil_mp5a' 	=> $persen_mp5a,
					'hasil_mp5b' 	=> $persen_mp5b,
					'hasil_mp5c' 	=> $persen_mp5c,
					'hasil_mp5d' 	=> $persen_mp5d,
					'hasil_mp6a' 	=> $persen_mp6a,
					'hasil_mp6b' 	=> $persen_mp6b,
					'hasil_mp6c' 	=> $persen_mp6c,
					'hasil_mp6d' 	=> $persen_mp6d,
					'hasil_mp7a' 	=> $persen_mp7a,
					'hasil_mp7b' 	=> $persen_mp7b,
					'hasil_mp7c' 	=> $persen_mp7c,
					'hasil_mp7d' 	=> $persen_mp7d,
					'hasil_ti1a' 	=> $persen_ti1a,
					'hasil_ti1b' 	=> $persen_ti1b,
					'hasil_ti1c' 	=> $persen_ti1c,
					'hasil_ti1d'	=> $persen_ti1d,
					'hasil_ti2a' 	=> $persen_ti2a,
					'hasil_ti2b' 	=> $persen_ti2b,
					'hasil_ti2c' 	=> $persen_ti2c,
					'hasil_ti2d'	=> $persen_ti2d,
					'hasil_ti3a' 	=> $persen_ti3a,
					'hasil_ti3b' 	=> $persen_ti3b,
					'hasil_ti3c' 	=> $persen_ti3c,
					'hasil_ti3d'	=> $persen_ti3d,
					'hasil_ti4a' 	=> $persen_ti4a,
					'hasil_ti4b' 	=> $persen_ti4b,
					'hasil_ti4c' 	=> $persen_ti4c,
					'hasil_ti4d'	=> $persen_ti4d,
					'hasil_ti5a' 	=> $persen_ti5a,
					'hasil_ti5b' 	=> $persen_ti5b,
					'hasil_ti5c' 	=> $persen_ti5c,
					'hasil_ti5d'	=> $persen_ti5d,
					'hasil_ti6a' 	=> $persen_ti6a,
					'hasil_ti6b' 	=> $persen_ti6b,
					'hasil_ti6c' 	=> $persen_ti6c,
					'hasil_ti6d'	=> $persen_ti6d,
					'hasil_ti7a' 	=> $persen_ti7a,
					'hasil_ti7b' 	=> $persen_ti7b,
					'hasil_ti7c' 	=> $persen_ti7c,
					'hasil_ti7d'	=> $persen_ti7d,
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