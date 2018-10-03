<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_brand_m extends CI_Model {

	public function add_new_brand($records)
	{
		$this->db->insert('brand', $records);
		return true;
	}
}

/* End of file Add_brand_m.php */
/* Location: ./application/models/Add_brand_m.php */