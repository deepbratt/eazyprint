<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_color extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_product_color_m');
		$this->load->view('admin_add_product_color');
	}
	public function add_product_color()
	{
		$this->load->model('admin_add_product_color_m');
		$sub_cat_name = $this->input->post('sub_cat');
		$product_color_name = $this->input->post('product_color');
		$color_code_name = $this->input->post('color_code');
		$sub_cat_id = "1";
		$records=array('product_color_name'=>$product_color_name,'product_color_code'=>$color_code_name,'sub_category_id'=>$sub_cat_name);
		$insert_product_color = $this->admin_add_product_color_m->product_color_insert($records);
		if($insert_product_color)
		{
			$this->session->set_flashdata("success", "You have successfully insert the product color!");
			redirect('admin_add_product_color');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_product_color');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */