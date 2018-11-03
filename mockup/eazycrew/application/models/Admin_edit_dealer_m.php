<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_dealer_m extends CI_Model {

	public function dealer_details($dealerid)
	{
		$this->db->select('*');
		$this->db->from('dealers');
		$this->db->where('dealers_id', $dealerid);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_crew($dealer_id,$update_array)
	{
		$this->db->where("dealers_id", $dealer_id);
		$query = $this->db->update('dealers', $update_array);
		return true;
	}

}

/* End of file Admin_edit_dealer_m.php */
/* Location: ./application/models/Admin_edit_dealer_m.php */