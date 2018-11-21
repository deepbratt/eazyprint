<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_brand_m extends CI_Model {

	public function fetch_brand(){
		$this->db->select('*');
		$this->db->from('brands');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_category_name($category)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id',$category);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_subcategory_name($sub_category)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id',$sub_category);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function brand_dlt($brand_id)
	{
		$this->db->where('brand_id', $brand_id);
		$this->db->delete('brands');
		return true;
	}

	public function update_brand($brand_id,$update_array)
	{
		$this->db->where('brand_id', $brand_id);
		$this->db->update('brands', $update_array);
		return true;
	}
	
}

/* End of file Admin_listing_design_m.php */
/* Location: ./application/models/Admin_listing_design_m.php */