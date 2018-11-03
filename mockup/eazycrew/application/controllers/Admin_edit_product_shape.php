<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_shape extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_product_shape_m');
		$product_shape_id = $this->uri->segment(2);
		$data['product_shape_fetch'] = $this->admin_edit_product_shape_m->fetch_product_shape($product_shape_id);
		$this->load->view('admin_edit_product_shape',$data);
	}
	public function edit_product_shape()
	{
		$this->load->model('admin_edit_product_shape_m');
		$sub_category_name = $this->input->post('sub_category');
		$product_shape_name = $this->input->post('product_shape');
		$cat_sub_id = $this->input->post('sub_cat_id');
		$records=array('product_shapetype_name'=>$product_shape_name,'sub_category_id'=>$sub_category_name);
		$update_product_shape = $this->admin_edit_product_shape_m->product_shape_update($records,$cat_sub_id);
		if($update_product_shape)
		{
			$this->session->set_flashdata("success", "You have successfully updated the product shape!");
			redirect('admin_edit_product_shape/'.$cat_sub_id);	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_product_shape/'.$cat_sub_id);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */