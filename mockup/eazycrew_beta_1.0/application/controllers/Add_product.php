<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product extends CI_Controller {

	public function index()
	{
		$this->load->view('products/Add_product');
	}

}

/* End of file Admin_add_product.php */
/* Location: ./application/controllers/Admin_add_product.php */