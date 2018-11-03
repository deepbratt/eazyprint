<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_material_type extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_product_material_type_m');
		$this->load->view('admin_add_product_material_type');
	}
	public function add_product_material_type()
	{
		$this->load->model('admin_add_product_material_type_m');
		$sub_cat_name = $this->input->post('sub_cat');
		$product_material_type_name = $this->input->post('product_material_type');
		$sub_cat_id = "1";
		$records=array('product_material_type'=>$product_material_type_name,'sub_category_id'=>$sub_cat_name);
		$insert_product_material_type = $this->admin_add_product_material_type_m->product_material_type_insert($records);
		if($insert_product_material_type)
		{
			$this->session->set_flashdata("success", "You have successfully insert the product metarial type!");
			redirect('admin_add_product_material_type');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_product_material_type');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */