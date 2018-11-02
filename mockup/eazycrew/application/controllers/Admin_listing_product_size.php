<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_size extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_product_size_m');
		$data['product_size_fetch'] = $this->admin_listing_product_size_m->fetch_product_size();
		$this->load->view('admin_listing_product_size',$data);
	}
	public function dlt_product_size()
	{
		$this->load->model('admin_listing_product_size_m');
		$product_size_id = $this->uri->segment(3);
		$dlt_product_size = $this->admin_listing_product_size_m->product_size_dlt($product_size_id);
		if($dlt_product_size)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the product size!");
			redirect('admin_listing_product_size');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_product_size');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */