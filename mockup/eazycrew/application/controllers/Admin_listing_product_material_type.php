<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_material_type extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_product_material_type_m');
		$data['product_material_type_fetch'] = $this->admin_listing_product_material_type_m->fetch_product_material_type();
		$this->load->view('admin_listing_product_material_type',$data);
	}
	public function dlt_product_material_type()
	{
		$this->load->model('admin_listing_product_material_type_m');
		$product_material_type_id = $this->uri->segment(3);
		$dlt_product_material_type = $this->admin_listing_product_material_type_m->product_material_type_dlt($product_material_type_id);
		if($dlt_product_material_type)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the product material type!");
			redirect('admin_listing_product_material_type');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_product_material_type');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */