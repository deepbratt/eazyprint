<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link_m extends CI_Model {

	public function fetch_raw_data($raw_id,$cat_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$this->db->where('raw_category',$cat_id);
		$query = $this->db->get();
		return $query->row();

	}

}

/* End of file Link_m.php */
/* Location: ./application/models/Link_m.php */