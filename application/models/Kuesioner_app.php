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

	public function token_validation($token){
		$query = $this->db->query("SELECT alm.*, tk.* FROM alumni alm INNER JOIN token tk ON alm.nim = tk.nim WHERE tk.token = '$token'");

		if ($query->num_rows() > 0){
			$row = $query->row();
			
			$created = $row->created;
			$created_ts = strtotime($created);  
       		$today = date('Y-m-d');   
       		$today_ts = strtotime($today);

       		$data = array(
       					'title' => 'Website Kuesioner',
       					'token' => $row->token,
       					'nim' => $row->nim,
       					'nama' => $row->nama,
       				);

       		if($created_ts != $today_ts){
       			return FALSE;
       		}
			return $data;
		}else{
			return FALSE;
		}
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

	public function kuesioner_add_process($data){
		$query = $this->db->insert('hasil', $data);

		return $query;
	}
	/**
		========================================================================
	**/

	/**
		Author: Bayu Bimantara
		Function: get json
		========================================================================
	**/
	public function get_json_hasil(){
		$query = $this->db->query('
								SELECT 
								(SELECT COUNT(*) FROM hasil) as total,
								(SELECT COUNT(mp1) FROM hasil WHERE mp1=4) as mp1_a,
								(SELECT COUNT(mp1) FROM hasil WHERE mp1=3) as mp1_b,
								(SELECT COUNT(mp1) FROM hasil WHERE mp1=2) as mp1_c,
								(SELECT COUNT(mp1) FROM hasil WHERE mp1=1) as mp1_d,
								(SELECT COUNT(mp2) FROM hasil WHERE mp2=4) as mp2_a,
								(SELECT COUNT(mp2) FROM hasil WHERE mp2=3) as mp2_b,
								(SELECT COUNT(mp2) FROM hasil WHERE mp2=2) as mp2_c,
								(SELECT COUNT(mp2) FROM hasil WHERE mp2=1) as mp2_d,
								(SELECT COUNT(mp3) FROM hasil WHERE mp3=4) as mp3_a,
								(SELECT COUNT(mp3) FROM hasil WHERE mp3=3) as mp3_b,
								(SELECT COUNT(mp3) FROM hasil WHERE mp3=2) as mp3_c,
								(SELECT COUNT(mp3) FROM hasil WHERE mp3=1) as mp3_d,
								(SELECT COUNT(mp4) FROM hasil WHERE mp4=4) as mp4_a,
								(SELECT COUNT(mp4) FROM hasil WHERE mp4=3) as mp4_b,
								(SELECT COUNT(mp4) FROM hasil WHERE mp4=2) as mp4_c,
								(SELECT COUNT(mp4) FROM hasil WHERE mp4=1) as mp4_d,
								(SELECT COUNT(mp5) FROM hasil WHERE mp5=4) as mp5_a,
								(SELECT COUNT(mp5) FROM hasil WHERE mp5=3) as mp5_b,
								(SELECT COUNT(mp5) FROM hasil WHERE mp5=2) as mp5_c,
								(SELECT COUNT(mp5) FROM hasil WHERE mp5=1) as mp5_d,
								(SELECT COUNT(mp6) FROM hasil WHERE mp6=4) as mp6_a,
								(SELECT COUNT(mp6) FROM hasil WHERE mp6=3) as mp6_b,
								(SELECT COUNT(mp6) FROM hasil WHERE mp6=2) as mp6_c,
								(SELECT COUNT(mp6) FROM hasil WHERE mp6=1) as mp6_d,
								(SELECT COUNT(mp7) FROM hasil WHERE mp7=4) as mp7_a,
								(SELECT COUNT(mp7) FROM hasil WHERE mp7=3) as mp7_b,
								(SELECT COUNT(mp7) FROM hasil WHERE mp7=2) as mp7_c,
								(SELECT COUNT(mp7) FROM hasil WHERE mp7=1) as mp7_d')->result_array();

		return $query;
	}
	/**
		========================================================================
	**/
	
}

/* End of file Kuesioner_app.php */
/* Location: ./application/models/Kuesioner_app.php */