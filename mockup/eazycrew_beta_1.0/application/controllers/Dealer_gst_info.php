<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer_gst_info extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
	public function index()
	{
		$this->load->view('dealer_gst_info');
	}

}

/* End of file Account_gst_info.php */
/* Location: ./application/controllers/Account_gst_info.php */