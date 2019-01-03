<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_purchase_order extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('purchase_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_admin_info'] = $this->purchase_order_m->admin_info($user_id);
		$this->load->view('add_purchase_order');
	}

}

/* End of file Add_purchase_order.php */
/* Location: ./application/controllers/Add_purchase_order.php */