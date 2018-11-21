<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_order extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->view('admin_add_order');
	}

}

/* End of file Admin_add_order.php */
/* Location: ./application/controllers/Admin_add_order.php */