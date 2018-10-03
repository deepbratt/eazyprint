<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model_m extends CI_Model {

	public function fetch_brands()
	{
		$this->db->select('*');
		$this->db->from('brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function add_new_modelz($model_info)
	{
		$this->db->insert('model', $model_info);
		return true;
	}
	
}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */