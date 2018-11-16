<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_final_product_m extends CI_Model {

	public function fetch_final_product($product_id)
	{
		$this->db->select('*');
		$this->db->from('final_products');
		$this->db->where('f_product_id', $product_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_product($records,$final_product_id)
	{
		$this->db->where("f_product_id", $final_product_id);
		$query = $this->db->update('final_products', $records);
		return true;
	}

}

/* End of file Admin_edit_final_product_m.php */
/* Location: ./application/models/Admin_edit_final_product_m.php */