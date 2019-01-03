<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_dashboard');
	}

}

/* End of file Admin_dashboard.php */
/* Location: ./application/controllers/Admin_dashboard.php */