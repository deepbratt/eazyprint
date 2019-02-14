<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_tshirt_m extends CI_Model {

	public function fetch_pro_tshirt($raw_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}



}

/* End of file Edit_dealer_m.php */
/* Location: ./application/models/Edit_dealer_m.php */