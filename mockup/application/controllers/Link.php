<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function index()
	{
		$fetch_cat_id = $this->uri->segment(2);
		$_SESSION['product_sidebar']['cat_id'] = $fetch_cat_id;
		redirect('product');
	}

}

/* End of file Link.php */
/* Location: ./application/controllers/Link.php */