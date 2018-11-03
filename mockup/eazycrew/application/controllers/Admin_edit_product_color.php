<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_color extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_product_color_m');
		$product_color_id = $this->uri->segment(2);
		$data['product_color_fetch'] = $this->admin_edit_product_color_m->fetch_product_color($product_color_id);
		$this->load->view('admin_edit_product_color',$data);
	}
	public function edit_product_color()
	{
		$this->load->model('admin_edit_product_color_m');
		$sub_category_name = $this->input->post('sub_category');
		$product_color_name = $this->input->post('product_color');
		$product_color_code_name = $this->input->post('color_code');
		$cat_sub_id = $this->input->post('sub_cat_id');
		$records=array('product_color_name'=>$product_color_name,'product_color_code'=>$product_color_code_name,'sub_category_id'=>$sub_category_name);
		$update_product_color = $this->admin_edit_product_color_m->product_color_update($records,$cat_sub_id);
		if($update_product_color)
		{
			$this->session->set_flashdata("success", "You have successfully updated the product color!");
			redirect('admin_edit_product_color/'.$cat_sub_id);	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_product_color/'.$cat_sub_id);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */