<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_final_product_m extends CI_Model {

	public function get_product()
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_status', '1');
		$query = $this->db->get();
		return $query->result();		
	}

	public function product_details($product_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		return $query->row();		
	}

	public function get_design($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('designs');
		$this->db->where('sub_category_id', $sub_cat_id);
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();		
	}

	public function show_design($design_id)
	{
		$this->db->select('*');
		$this->db->from('designs');
		$this->db->where('design_id', $design_id);
		$query = $this->db->get();
		return $query->row();		
	}

	public function insert_product($records)
	{
		$this->db->insert('final_products', $records);
		return true;
	}

}

/* End of file Admin_add_final_product_m.php */
/* Location: ./application/models/Admin_add_final_product_m.php */