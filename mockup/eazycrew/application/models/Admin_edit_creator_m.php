<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_creator_m extends CI_Model {

	public function creator_details($creatorid)
	{
		$this->db->select('*');
		$this->db->from('creators');
		$this->db->where('creator_id', $creatorid);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_creator($creator_id,$update_array)
	{
		$this->db->where("creator_id", $creator_id);
		$query = $this->db->update('creators', $update_array);
		return true;
	}

}

/* End of file Admin_edit_creator_m.php */
/* Location: ./application/models/Admin_edit_creator_m.php */