<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->view('customer/support');
	}

}

/* End of file Support.php */
/* Location: ./application/controllers/Support.php */