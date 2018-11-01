<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_design extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_design_m');
		$data['fetch_design_info'] = $this->admin_listing_design_m->fetch_designs();
		$this->load->view('admin_listing_design',$data);
	}

}

/* End of file Admin_listing_design.php */
/* Location: ./application/controllers/Admin_listing_design.php */