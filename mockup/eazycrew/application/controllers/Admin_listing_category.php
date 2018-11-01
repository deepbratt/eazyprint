<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_category_m');
		$category_status = "1";
		$data['category_fetch'] = $this->admin_listing_category_m->fetch_category($category_status);
		$this->load->view('admin_listing_category',$data);
	}

	public function dlt_category()
	{
		$this->load->model('admin_listing_category_m');
		$category_id = $this->uri->segment(3);
		$dlt_category = $this->admin_listing_category_m->ct_dlt($category_id);
		if($dlt_category)
		{
			$this->session->set_flashdata("success", "You have successfully delete the category!");
			redirect('admin_listing_category');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_category');
		}

	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */