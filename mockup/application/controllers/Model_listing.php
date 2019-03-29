<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_listing extends CI_Controller {

	public function index()
	{
		$this->load->model('model_listing_m');
		$data['raw_id'] = $this->uri->segment(2);
		$data['brand_name'] = $this->model_listing_m->fetch_brand_name($data['raw_id']);
		$data['fetch_brand_name'] = $this->model_listing_m->brands_fetch();
		$this->load->view('model_listing',$data);
	}

}

/* End of file Model_listing.php */
/* Location: ./application/controllers/Model_listing.php */