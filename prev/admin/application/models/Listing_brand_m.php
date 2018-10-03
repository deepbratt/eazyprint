<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_brand_m extends CI_Model {

	public function fetch_brands()
	{
		$this->db->select('*');
		$this->db->from('brand');
		$query = $this->db->get();
		return $query->result();
	}
	public function delete_brand_id($del_brand_id){
		$this->db->where('brand_id', $del_brand_id);
		$this->db->delete('brand');
		return true;
	}
	
}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */