<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_inventory_m extends CI_Model {

	public function stock_data(){
		$this->db->select('*');
		$this->db->from('eazyprint_inventory');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_quantity($inventory_id,$update_array)
	{
		$this->db->where('inventory_id', $inventory_id);
		$this->db->update('eazyprint_inventory', $update_array);
		return true;
	}

}

/* End of file Inventory_m.php */
/* Location: ./application/models/Inventory_m.php */