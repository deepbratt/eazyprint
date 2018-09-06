<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_brand extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_brand_m');
		$data['get_all_brands'] = $this->listing_brand_m->fetch_brands();
		$this->load->view('listing_brand',$data);
	}

}
?>