<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_model_m extends CI_Model {

	public function fetch_model()
	{
		$this->db->select('*');
		$this->db->from('model');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_brand_name($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('brand_id',$brand_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_model_id($del_model_id){
		$this->db->where('model_id', $del_model_id);
		$this->db->delete('model');
		return true;
	}
	
}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */