<?php

/**
 * @Author: DEBASHIS NATH
 * @Date:   2018-09-13 23:39:32
 * @Last Modified by:   DEBASHIS NATH
 * @Last Modified time: 2018-09-13 23:51:20
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product_m extends CI_Model {

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

	public function add_new_productz($product_info)
	{
		$this->db->insert('product', $product_info);
		return true;
	}

}

/* End of file Add_product_m.php */
/* Location: ./application/models/Add_product_m.php */