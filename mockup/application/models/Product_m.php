<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_m extends CI_Model {
	
	public function get_all_products()
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_image', 'product_image.product_id = products.product_id');
		$this->db->join('category', 'category.cat_id = products.product_category_id');
		//$this->db->where('orders.orders_id',$order_id);
		//$this->db->order_by('category_name');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_supplier_service($more_service_data)
	{
	  $query = $this->db->update_batch('supplier_service',$more_service_data,'supplier_service_id');
	  return true;
	}
}
