<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signout extends CI_Controller {

	public function index(){
	
	$newdata = array(
            'user_id'  =>'',
            'user_type' => '',
            'name' => '',
            'email' => '',
            'logged_in' => FALSE
    );
	$this->session->unset_userdata($newdata);

    $this->session->sess_destroy();
	session_destroy();

    redirect('login');
	}

}

/* End of file Signout.php */
/* Location: ./application/controllers/Signout.php */