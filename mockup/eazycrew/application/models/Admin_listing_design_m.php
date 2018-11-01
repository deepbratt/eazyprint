<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_design_m extends CI_Model {

	public function fetch_designs(){
		$this->db->select('*');
		$this->db->from('designs');
		$this->db->where('status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_subcat($sub_cat_id){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id',$sub_cat_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Admin_listing_design_m.php */
/* Location: ./application/models/Admin_listing_design_m.php */