<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer_change_password extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
	public function index()
	{
		$this->load->view('dealer_change_password');
	}

}

/* End of file Admin_setting.php */
/* Location: ./application/controllers/Admin_setting.php */