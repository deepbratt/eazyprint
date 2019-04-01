<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product_m extends CI_Model {

	public function get_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_brand_data($cat_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category',$cat_id);
		$this->db->group_by('raw_brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_raw_options($brand_name,$category_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_brand',$brand_name);
		$this->db->where('raw_category',$category_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_raw_materials($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_raw_materials_design_by($design_id)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_id',$design_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_pro($records)
	{
		$this->db->insert('products',$records);
		return $this->db->insert_id();
	}

	public function update_pro_img($record)
	{
		$this->db->insert('product_image',$record);
		return $record;
	}

	public function insert_design($design_array)
	{
		$this->db->insert('designs',$design_array);
		return $this->db->insert_id();
	}

	public function get_raw_data($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}
}
