<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_app extends CI_Model {

	public function get_data_users(){
		$query = $this->db->get('users')->result_array();

		return $query;
	}

	public function get_users_detail($username){
		$this->db->where('username', $username);
		$query = $this->db->get('users');

		if($query->num_rows() > 0){
			$data = $query->row();
			$query->free_result();
		}else{
			$data = NULL;
		}

		return $data;
	}

	public function get_json(){
		$query = $this->db->query('
							SELECT
							(SELECT COUNT(status) FROM alumni WHERE status=1) as total_kerja,
							(SELECT COUNT(status) FROM alumni WHERE status=2) as belum_kerja,
							(SELECT COUNT(status) FROM alumni WHERE status=3) as buka_usaha')->result_array();

		return $query;
	}

	public function count_alumni(){
		$query = $this->db->get('alumni')->num_rows();

		return $query;
	}

	public function users_add_process($data){
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function users_row_check($field, $str){
		$query = $this->db->get_where('users', array($field, $str))->num_rows();

		return $query;
	}
	
}

/* End of file Kuesioner_app.php */
/* Location: ./application/models/Kuesioner_app.php */