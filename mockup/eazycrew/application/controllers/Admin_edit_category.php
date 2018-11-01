<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_category_m');
	    $cat_id = $this->uri->segment(2);
		$data['cat_fetch'] = $this->admin_edit_category_m->fetch_cat($cat_id);
		$this->load->view('admin_edit_category',$data);
	}
	public function edit_category()
	{
		$this->load->model('admin_edit_category_m');
		$category_name = $this->input->post('category_name');
		$category_id = $this->input->post('cat_id');
		$records=array('category_name'=>$category_name);
		$update_cat = $this->admin_edit_category_m->cat_update($records,$category_id);
		if($update_cat)
		{
			$this->session->set_flashdata("success", "You have successfully updated the category!");
			redirect('admin_edit_category/'.$category_id);
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_category/'.$category_id);
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */