<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_crew_listing extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_crew_listing_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_crew'] = $this->admin_crew_listing_m->fetch_crew($user_id);
		$this->load->view('admin_crew_listing',$data);
	}

}

/* End of file Admin_crew_listing.php */
/* Location: ./application/controllers/Admin_crew_listing.php */