<?php

/**
 * @Author: DEBASHIS NATH
 * @Date:   2018-09-14 00:21:14
 * @Last Modified by:   DEBASHIS NATH
 * @Last Modified time: 2018-09-14 00:44:41
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_product_m extends CI_Model {

	public function fetch_brands()
	{
		$this->db->select('*');
		$this->db->from('brand');
		$query = $this->db->get();
		return $query->result();
	}
	public function fetch_models()
	{
		$this->db->select('*');
		$this->db->from('model');
		$query = $this->db->get();
		return $query->result();
	}
	public function fetch_product($product_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('product_id',$product_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function update_new_product($product_id,$records)
	{
		$condition  = array('product_id' => $product_id);
		$this->db->where($condition);
		$query = $this->db->update('product', $records);
		return $query;
	}
}

/* End of file Edit_product_m.php */
/* Location: ./application/models/Edit_product_m.php */