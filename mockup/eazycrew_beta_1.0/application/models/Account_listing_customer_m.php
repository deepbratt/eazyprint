<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_listing_customer_m extends CI_Model {

	public function fetch_customer(){
		$this->db->select('*');
		$this->db->from('customers');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_product($delete_query,$customer_id)
	{
		$this->db->where("customer_id", $customer_id);
		$query = $this->db->update('customers', $delete_query);
		return true;
	}

	public function update_status($customer_id,$update_array)
	{
		$this->db->where('customer_id', $customer_id);
		$this->db->update('customers', $update_array);
		return true;
	}


}

/* End of file Account_listing_customer_m.php */
/* Location: ./application/models/Account_listing_customer_m.php */