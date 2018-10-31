<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_crew_m extends CI_Model {

	public function check_crew($email)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_crew($insert_array)
	{
		$this->db->insert('eazycrew', $insert_array);
		return true;
	}

}

/* End of file Admin_add_crew_m.php */
/* Location: ./application/models/Admin_add_crew_m.php */