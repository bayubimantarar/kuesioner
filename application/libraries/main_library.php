<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_library{

	public function check_login(){
		$_this =& get_instance();
		if($_this->session->userdata('login_status') != TRUE){
			redirect(base_url('login'));
		}
	}

	

}

/* End of file main_library.php */
/* Location: ./application/libraries/main_library.php */