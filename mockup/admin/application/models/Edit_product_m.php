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

	public function get_brand()
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->group_by('raw_brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_pro_img($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$product_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_raw($raw_brand)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_brand',$raw_brand);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_product($product_id,$records)
	{
		$this->db->where('product_id', $product_id);
		$this->db->update('products', $records);
		return $product_id;
	}

	public function update_pro_img($record)
	{
		$this->db->insert('product_image',$record);
		return $record;
	}

	public function delete_image($image_id,$image_name){

		unlink("uploads/product_images/".$image_name);
		$this->db->where('product_image_id', $image_id);
		$this->db->delete('product_image');
		return true;
	}

	public function fetch_pro_img_info($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_image_id',$product_id);
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Edit_dealer_m.php */
/* Location: ./application/models/Edit_dealer_m.php */