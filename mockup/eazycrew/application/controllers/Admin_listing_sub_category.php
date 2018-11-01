<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_sub_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_sub_category_m');
		$data['sub_category_fetch'] = $this->admin_listing_sub_category_m->fetch_sub_category();	
		$this->load->view('admin_listing_sub_category',$data);
	}
	public function dlt_sub_category()
	{
		$this->load->model('admin_listing_sub_category_m');
		$sub_category_id = $this->uri->segment(3);
		$dlt_sub_category = $this->admin_listing_sub_category_m->sub_cat_dlt($sub_category_id);
		if($dlt_sub_category)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the subcategory!");
			redirect('admin_listing_sub_category');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_sub_category');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */