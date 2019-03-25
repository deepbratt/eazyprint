<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rewards extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->view('customer/reward_giftcard');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */