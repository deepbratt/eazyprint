<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_mobile_case_m extends CI_Model {

	public function insert_product($records)
	{
		$this->db->insert('raw_materials', $records);
		return true;
	}

	public function fetch_product_details(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_product($delete_query,$product_id)
	{
		$this->db->where("raw_id", $product_id);
		$query = $this->db->update('raw_materials', $delete_query);
		return true;
	}

	public function update_status($product_id,$update_array)
	{
		$this->db->where('raw_id', $product_id);
		$this->db->update('raw_materials', $update_array);
		return true;
	}

}

/* End of file Admin_add_mobile_case_m */
/* Location: ./application/models/Admin_add_mobile_case_m */