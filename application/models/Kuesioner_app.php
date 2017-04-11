<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_app extends CI_Model {

	/**
		Author: Bayu Bimantara
		Function: get data (query builder, raw query)
		========================================================================
	**/
	public function get_data_users(){
		$query = $this->db->get('users')->result_array();

		return $query;
	}

	public function get_data_alumni(){
		$query = $this->db->query('SELECT * FROM alumni ORDER BY nim ASC')->result_array();

		return $query;
	}
	

	public function get_data_kategori(){
		$query = $this->db->get('kategori_pertanyaan')->result_array();

		return $query;
	}

	public function get_alumni_detail($nim){
		$this->db->where('nim', $nim);
		$query = $this->db->get('alumni');

		if($query->num_rows() > 0){
			$data = $query->row();
			$query->free_result();
		}else{
			$data = NULL;
		}

		return $data;
	}

	public function get_alumni_byid($nim){
		$query = $this->db->get_where('alumni', array('nim' => $nim))->result_array();
		
		return $query;	
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
	/**
		========================================================================
	**/

	/**
		Author: Bayu Bimantara
		Function: Row Check
		========================================================================
	**/
	public function users_row_check($field, $str){
		$query = $this->db->get_where('users', array($field => $str))->num_rows();

		return $query;
	}

	public function alumni_row_check($field, $str){
		$query = $this->db->get_where('alumni', array($field => $str))->num_rows();

		return $query;
	}
	/**
		========================================================================
	**/

	/**
		Author: Bayu Bimantara
		Function: add process (insert data)
		========================================================================
	**/
	public function users_add_process($data){
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function alumni_add_process($data){
		$query = $this->db->insert('alumni', $data);

		return $query;
	}

	public function token_add_process($data){
		$query = $this->db->insert('token', $data);

		return $query;
	}
	/**
		========================================================================
	**/
	
}

/* End of file Kuesioner_app.php */
/* Location: ./application/models/Kuesioner_app.php */