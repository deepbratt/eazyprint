<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_size extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_product_size_m');
		$this->load->view('admin_add_product_size');
	}
	public function add_product_size()
	{
		$this->load->model('admin_add_product_size_m');
		$sub_cat_name = $this->input->post('sub_cat');
		$product_size_name = $this->input->post('product_size');
		$dimension_name = $this->input->post('dimension');
		$sub_cat_id = "1";
		$records=array('product_size_name'=>$product_size_name,'dimension'=>$dimension_name,'sub_category_id'=>$sub_cat_name);
		$insert_product_size = $this->admin_add_product_size_m->product_size_insert($records);
		if($insert_product_size)
		{
			$this->session->set_flashdata("success", "You have successfully insert the product size!");
			redirect('admin_add_product_size');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_product_size');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */