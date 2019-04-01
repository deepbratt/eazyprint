<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customize_mobile_case extends CI_Controller {

	public function index()
	{
		$this->load->model('customize_mobile_case_m');
		$data['raw_mat_id'] = $this->uri->segment(2);
		$data['fetch_raw_data'] = $this->customize_mobile_case_m->fetch_model_name($data['raw_mat_id']);
		$data['fetch_similar_pro_data'] = $this->customize_mobile_case_m->fetch_similar($data['raw_mat_id']);
		$this->load->view('customize_mobile_case',$data);
	}

}

/* End of file Customize_mobile_case.php */
/* Location: ./application/controllers/Customize_mobile_case.php */