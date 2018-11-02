<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_customer_m extends CI_Model {

	public function customer_details($customer_id)
	{
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('customer_id', $customer_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_customer($customer_id,$update_array)
	{
		$this->db->where("customer_id", $customer_id);
		$query = $this->db->update('customers', $update_array);
		return true;
	}

}

/* End of file Admin_edit_customer_m.php */
/* Location: ./application/models/Admin_edit_customer_m.php */