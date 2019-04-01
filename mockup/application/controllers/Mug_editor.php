<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mug_editor extends CI_Controller {

	public function index()
	{
		$this->load->model('mug_editor_m');
		//$data['raw_mat_id'] = $this->uri->segment(2);
		$data['raw_mat_id'] = '223';
		$data['fetch_raw_data'] = $this->mug_editor_m->fetch_model_name($data['raw_mat_id']);
		$data['fetch_similar_pro_data'] = $this->mug_editor_m->fetch_similar($data['raw_mat_id']);
		$this->load->view('Mug_editor',$data);
	}

}

/* End of file Mug_editor.php */
/* Location: ./application/controllers/Mug_editor.php */