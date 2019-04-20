<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tshirt_editor extends CI_Controller {

	public function index()
	{
		$this->load->model('tshirt_editor_m');
		//$data['raw_mat_id'] = $this->uri->segment(2);
		$data['raw_mat_id'] = '237';
		$data['fetch_raw_data'] = $this->tshirt_editor_m->fetch_model_name($data['raw_mat_id']);
		$data['fetch_similar_pro_data'] = $this->tshirt_editor_m->fetch_similar($data['raw_mat_id']);
		$this->load->view('Tshirt_editor',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */