<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_history_m extends CI_Model {

	public function get_order_details($user_id){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_category_list($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->join('category', 'category.cat_id = raw_materials.raw_category');
		$this->db->where('raw_materials.raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_product_list($product_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id',$product_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Contacts_m.php */
/* Location: ./application/models/Contacts_m.php */