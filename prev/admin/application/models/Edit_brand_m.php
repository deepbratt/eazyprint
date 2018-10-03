<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_brand_m extends CI_Model {

	public function update_new_brand($brand_id,$records)
	{
		$condition  = array('brand_id' => $brand_id);
		$this->db->where($condition);
		$query = $this->db->update('brand', $records);
		return $query;
	}
	public function fetch_brands($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('brand_id',$brand_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Add_brand_m.php */
/* Location: ./application/models/Add_brand_m.php */