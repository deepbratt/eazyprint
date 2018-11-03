<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_shape extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_product_shape_m');
		$data['product_shape_fetch'] = $this->admin_listing_product_shape_m->fetch_product_shape();
		$this->load->view('admin_listing_product_shape',$data);
	}
	public function dlt_product_shape()
	{
		$this->load->model('admin_listing_product_shape_m');
		$product_shape_id = $this->uri->segment(3);
		$dlt_product_shape = $this->admin_listing_product_shape_m->product_shape_dlt($product_shape_id);
		if($dlt_product_shape)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the product shape!");
			redirect('admin_listing_product_shape');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_product_shape');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */