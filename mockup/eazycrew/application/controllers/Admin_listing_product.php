<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_listing_product_m');
		$data['get_products'] = $this->admin_listing_product_m->get_products();
		$this->load->view('admin_listing_product',$data);
	}

	public function delete_product()
	{
		$this->load->model('admin_listing_product_m');
		$product_id = $this->uri->segment(3);
		$delete_query = array('product_status' => '0');
		$delete_product = $this->admin_listing_product_m->delete_product($delete_query,$product_id);
		$this->session->set_flashdata("success", "Product Deleted!");
		redirect('admin_listing_product');
	}

}

/* End of file Admin_listing_product.php */
/* Location: ./application/controllers/Admin_listing_product.php */