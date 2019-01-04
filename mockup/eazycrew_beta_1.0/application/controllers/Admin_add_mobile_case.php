<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_mobile_case extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_mobile_case');
	}

}

/* End of file Admin_add_raw_material.php */
/* Location: ./application/controllers/Admin_add_raw_material.php */