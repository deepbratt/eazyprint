<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_customer_m extends CI_Model {

	public function check_customer($email,$phone)
	{
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('customer_email', $email);
		$this->db->where('customer_phone', $phone);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_customer($insert_array)
	{
		$this->db->insert('customers', $insert_array);
		return true;
	}

}

/* End of file Admin_add_customer_m.php */
/* Location: ./application/models/Admin_add_customer_m.php */