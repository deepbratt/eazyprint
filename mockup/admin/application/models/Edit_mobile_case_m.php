<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_mobile_case_m extends CI_Model {

	public function fetch_pro_mobile($raw_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update_mobile($raw_id,$records,$pre_img,$image_status,$pre_meta,$meta_status)
	{
		
		$this->db->where('raw_id', $raw_id);
		if($image_status == '1')
		{
			unlink("uploads/product_images/mobile_case/".$pre_img);
		}
		if($meta_status == '1'){
			unlink("uploads/meta_images/".$pre_meta);
		}
		$this->db->update('raw_materials', $records);
		return true;
	}

}

/* End of file Edit_dealer_m.php */
/* Location: ./application/models/Edit_dealer_m.php */