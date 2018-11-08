<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->view('invoice');
	}

}

/* End of file Invoice.php */
/* Location: ./application/controllers/Invoice.php */