<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_customer_m extends CI_Model {

	public function fetch_customer()
	{
		$this->db->select('*');
		$this->db->from('customers');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_customer($customer_id,$update_array)
	{
		$this->db->where('customer_id', $customer_id);
		$this->db->update('customers', $update_array);
		return true;
	}

}

/* End of file Admin_listing_customer_m.php */
/* Location: ./application/models/Admin_listing_customer_m.php */