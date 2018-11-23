<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_brand_m extends CI_Model {
	
	public function check_brands($brand_name,$brand_code)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_name', $brand_name);
		$this->db->where('brand_code', $brand_code);
		$query = $this->db->get();
		return $query->num_rows();		
	}
	public function brand_details($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_id', $brand_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function brand_edit()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status','1');
		$query = $this->db->get();
		return $query->result();
	}
	public function fetch_brand($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_id', $brand_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_something($sub_category)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id', $sub_category);
		$query = $this->db->get();
		return $query->row();
	}
	public function ajax_fetch_brand($brand_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id', $brand_id);
		$this->db->where('sub_category_status','1');
		$query = $this->db->get();
		return $query->result();
	}
	public function brand_update($records,$brand_id)
	{
		$where  = array('brand_id' => $brand_id);
		$this->db->where($where);
		$query = $this->db->update('brands', $records);
		return true;
	}
}

/* End of file Admin_edit_crew_m.php */
/* Location: ./application/models/Admin_edit_crew_m.php */