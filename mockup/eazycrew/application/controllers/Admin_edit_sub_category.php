<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_sub_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_sub_category_m');
		$sub_cat_id = $this->uri->segment(2);
		$data['sub_cat_fetch'] = $this->admin_edit_sub_category_m->fetch_sub_cat($sub_cat_id);
		$this->load->view('admin_edit_sub_category',$data);
	}
	public function edit_sub_cat()
	{
		$this->load->model('admin_edit_sub_category_m');
		$category_name = $this->input->post('category');
		$sub_category_name = $this->input->post('sub_category');
		$cat_sub_id = $this->input->post('sub_cat_id');
		$records=array('parent_cat_id'=>$category_name,'sub_category_name'=>$sub_category_name);
		$update_sub_cat = $this->admin_edit_sub_category_m->sub_cat_update($records,$cat_sub_id);
		if($update_sub_cat)
		{
			$this->session->set_flashdata("success", "You have successfully updated the subcategory!");
			redirect('admin_edit_sub_category/'.$cat_sub_id);	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_sub_category/'.$cat_sub_id);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */