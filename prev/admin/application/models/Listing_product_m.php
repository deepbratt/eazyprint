<?php

/**
 * @Author: DEBASHIS NATH
 * @Date:   2018-09-13 23:59:21
 * @Last Modified by:   DEBASHIS NATH
 * @Last Modified time: 2018-09-14 00:15:16
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_product_m extends CI_Model {

	public function fetch_products()
	{
		$this->db->select('*');
		$this->db->from('product');
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
	public function get_model_name($model_id)
	{
		$this->db->select('*');
		$this->db->from('model');
		$this->db->where('model_id',$model_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function delete_product_id($del_product_id){
		$this->db->where('product_id', $del_product_id);
		$this->db->delete('product');
		return true;
	}
	

}

/* End of file Listing_product_m.php */
/* Location: ./application/models/Listing_product_m.php */