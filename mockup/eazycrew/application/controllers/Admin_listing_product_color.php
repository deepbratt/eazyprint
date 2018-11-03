<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_color extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_product_color_m');
		$data['product_color_fetch'] = $this->admin_listing_product_color_m->fetch_product_color();
		$this->load->view('admin_listing_product_color',$data);
	}
	public function dlt_product_color()
	{
		$this->load->model('admin_listing_product_color_m');
		$product_color_id = $this->uri->segment(3);
		$dlt_product_color = $this->admin_listing_product_color_m->product_color_dlt($product_color_id);
		if($dlt_product_color)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the product color!");
			redirect('admin_listing_product_color');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_product_color');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */