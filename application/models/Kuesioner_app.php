<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_app extends CI_Model {

	public function get_data_users(){
		$query = $this->db->get('users')->result_array();

		return $query;
	}

	public function get_data_alumni(){
		$query = $this->db->get('alumni')->result_array();

		return $query;
	}

	public function get_data_pertanyaan(){
		$query = $this->db->get('pertanyaan')->result_array();

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

	public function get_kegiatan_alumni(){
		$query = $this->db->query('
							SELECT
							(SELECT COUNT(*) FROM alumni) as total_alumni,
							(SELECT COUNT(kegiatan) FROM alumni WHERE kegiatan=1) as bekerja,
							(SELECT COUNT(kegiatan) FROM alumni WHERE kegiatan=2) as buka_usaha,
							(SELECT COUNT(kegiatan) FROM alumni WHERE kegiatan=3) as belum_bekerja')->result_array();

		return $query;
	}

	public function get_total_alumni(){
		$query = $this->db->get('alumni')->num_rows();

		return $query;		
	}

	public function users_row_check($field, $str){
		$query = $this->db->get_where('users', array($field => $str))->num_rows();

		return $query;
	}

	public function alumni_row_check($field, $str){
		$query = $this->db->get_where('alumni', array($field => $str))->num_rows();

		return $query;
	}

	public function users_add_process($data){
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function alumni_add_process($data){
		$query = $this->db->insert('alumni', $data);

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