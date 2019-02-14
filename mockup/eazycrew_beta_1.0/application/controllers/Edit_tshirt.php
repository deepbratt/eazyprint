<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_tshirt extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('edit_tshirt_m');
		$raw_id = $this->uri->segment(2);
		$data['fetch_tshirt'] = $this->edit_tshirt_m->fetch_pro_tshirt($raw_id);
		$this->load->view('products/edit_tshirt',$data);
	}

}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */