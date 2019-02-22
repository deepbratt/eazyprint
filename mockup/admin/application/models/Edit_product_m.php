<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_product_m extends CI_Model {

	public function fetch_pro($product_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id',$product_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_category_all()
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_pro_img($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$product_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_raw($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_product($product_id,$records)
	{
		$this->db->where('product_id', $product_id);
		$this->db->update('products', $records);
		return true;
	}
}

/* End of file Edit_dealer_m.php */
/* Location: ./application/models/Edit_dealer_m.php */