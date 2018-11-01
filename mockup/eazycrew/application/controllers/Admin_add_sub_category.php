<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_sub_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_sub_category_m');
		$this->load->view('admin_add_sub_category');
	}
	public function add_sub_category()
	{
		$this->load->model('admin_add_sub_category_m');
		$category_name = $this->input->post('cat_name');
		$sub_category_name = $this->input->post('sub_cat_name');
		$sub_cat_status = "1";
		$records=array('parent_cat_id'=>$category_name,'sub_category_name'=>$sub_category_name,'sub_category_status'=>$sub_cat_status);
		$insert_sub_category = $this->admin_add_sub_category_m->sub_category_insert($records);
		if($insert_sub_category)
		{
			$this->session->set_flashdata("success", "You have successfully insert the category!");
			redirect('admin_add_sub_category');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_sub_category');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */