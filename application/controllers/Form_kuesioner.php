 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_kuesioner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kuesioner_app');
	}

	public function index(){
		
	}

}

/* End of file Form_kuesioner.php */
/* Location: ./application/controllers/Form_kuesioner.php */