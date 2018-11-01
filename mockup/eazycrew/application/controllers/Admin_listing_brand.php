<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_brand extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_brand_m');
		$data['brand_fetch'] = $this->admin_listing_brand_m->fetch_brand();
		$this->load->view('admin_listing_brand',$data);
	}

	public function dlt_brand()
	{
		$this->load->model('admin_listing_brand_m');
		$brand_id = $this->uri->segment(3);
		$dlt_brand = $this->admin_listing_brand_m->brand_dlt($brand_id);
		if($dlt_brand)
		{
			$this->session->set_flashdata("success", "You have successfully delete the brand!");
			redirect('admin_listing_brand');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_brand');
		}

	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */