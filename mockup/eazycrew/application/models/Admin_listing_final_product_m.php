<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_final_product_m extends CI_Model {

	public function get_products()
	{
		$this->db->select('*');
		$this->db->from('final_products');
		$this->db->where('f_product_status' , '1');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_design($design_id)
	{
		$this->db->select('*');
		$this->db->from('designs');
		$this->db->where('design_id' , $design_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_designer($designed_by)
	{
		$this->db->select('*');
		$this->db->from('creators');
		$this->db->where('creator_id' , $designed_by);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_product($delete_query,$product_id)
	{
		$this->db->where("f_product_id", $product_id);
		$query = $this->db->update('final_products', $delete_query);
		return true;
	}

}

/* End of file Admin_listing_final_product_m.php */
/* Location: ./application/models/Admin_listing_final_product_m.php */