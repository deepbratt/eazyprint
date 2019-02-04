<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_product extends CI_Controller {

	public function index()
	{
		$this->load->view('products/Listing_product');
	}

}

/* End of file Admin_listing_product.php */
/* Location: ./application/controllers/Admin_listing_product.php */