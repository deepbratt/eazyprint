<?php

/**
 * @Author: DEBASHIS NATH
 * @Date:   2018-09-13 19:29:01
 * @Last Modified by:   DEBASHIS NATH
 * @Last Modified time: 2018-09-13 20:17:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_model_m extends CI_Model {

	public function fetch_brands()
	{
		$this->db->select('*');
		$this->db->from('brand');
		$query = $this->db->get();
		return $query->result();
	}
	public function fetch_models($model_id)
	{
		$this->db->select('*');
		$this->db->from('model');
		$this->db->where('model_id',$model_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function update_new_model($model_id,$records)
	{
		$condition  = array('model_id' => $model_id);
		$this->db->where($condition);
		$query = $this->db->update('model', $records);
		return $query;
	}
	

}

/* End of file Edit_model_m.php */
/* Location: ./application/models/Edit_model_m.php */