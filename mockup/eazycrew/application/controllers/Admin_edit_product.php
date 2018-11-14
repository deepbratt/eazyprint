<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_product_m');
		$product_id = $this->uri->segment(2);
	}

}

/* End of file Admin_edit_product.php */
/* Location: ./application/controllers/Admin_edit_product.php */