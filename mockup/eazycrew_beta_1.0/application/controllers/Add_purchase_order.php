<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_purchase_order extends CI_Controller {

	public function index()
	{
		$this->load->model('purchase_order_m');
		$data['fetch_admin_info'] = $this->purchase_order_m->admin_info('');
		$this->load->view('add_purchase_order');
	}

}

/* End of file Add_purchase_order.php */
/* Location: ./application/controllers/Add_purchase_order.php */