<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		$this->load->view('customer/cart');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */