<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_listing_m extends CI_Model {

	public function fetch_brand_name($raw_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function brands_fetch(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category','3');
		$this->db->group_by('raw_brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_models($brand_name){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_brand',$brand_name);
		$this->db->group_by('raw_name');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Model_listing_m.php */
/* Location: ./application/models/Model_listing_m.php */