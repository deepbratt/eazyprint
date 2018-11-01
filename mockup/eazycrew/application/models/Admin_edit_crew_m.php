<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_crew_m extends CI_Model {

	public function crew_details($crew_id)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_id', $crew_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_crew($crew_id,$update_array)
	{
		$this->db->where("crew_id", $crew_id);
		$query = $this->db->update('eazycrew', $update_array);
		return true;
	}
}

/* End of file Admin_edit_crew_m.php */
/* Location: ./application/models/Admin_edit_crew_m.php */