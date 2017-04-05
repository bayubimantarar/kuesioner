<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_app extends CI_Model {

	public function get_data_users(){
		$query = $this->db->get('users')->result_array();

		return $query;
	}

	public function get_data_identitas(){
		$query = $this->db->get('identitas')->result_array();

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
							(SELECT COUNT(kegiatan) FROM identitas WHERE kegiatan=1) as bekerja,
							(SELECT COUNT(kegiatan) FROM identitas WHERE kegiatan=2) as buka_usaha,
							(SELECT COUNT(kegiatan) FROM identitas WHERE kegiatan=3) as belum_bekerja')->result_array();

		return $query;
	}

	public function users_row_check($field, $str){
		$query = $this->db->get_where('users', array($field => $str))->num_rows();

		return $query;
	}

	public function identitas_row_check($field, $str){
		$query = $this->db->get_where('identitas', array($field => $str))->num_rows();

		return $query;
	}

	public function users_add_process($data){
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function identitas_add_process($data){
		$query = $this->db->insert('identitas', $data);

		return $query;
	}

	public function bekerja_add_process($data){
		$query = $this->db->insert('bekerja', $data);

		return $query;
	}

	public function usaha_add_process($data){
		$query = $this->db->insert('usaha', $data);

		return $query;
	}

	public function belum_bekerja_add_process($data){
		$query = $this->db->insert('belum_bekerja', $data);

		return $query;
	}
	
}

/* End of file Kuesioner_app.php */
/* Location: ./application/models/Kuesioner_app.php */