<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_tshirt_m extends CI_Model {

	public function fetch_pro_tshirt($user_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_mat_info($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id', $raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_tshirt($raw_id,$raw_image_name,$raw_meta_image_name)
	{
		unlink("uploads/product_images/t_shirt/".$raw_image_name);
		unlink("uploads/meta_images/".$raw_meta_image_name);
		$query = $this->db->query("delete from raw_materials where raw_id='".$raw_id."'");
		return true;
	}

	public function update_status($raw_id,$update_array)
	{
		$this->db->where('raw_id', $raw_id);
		$this->db->update('raw_materials', $update_array);
		return true;
	}
}