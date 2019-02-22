<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Processing_orders extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->view('orders/processing_orders');
	}
}

/* End of file Admin_login.php */
/* Location: ./application/controllers/Admin_login.php */