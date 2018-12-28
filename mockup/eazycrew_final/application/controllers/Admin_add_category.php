<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_category extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_category');
	}

	public function add_category()
	{
		$this->load->model('admin_add_category_m');
		$category_name = $this->input->post('category_name');
		$category_status = "1";

		$check_category = $this->admin_add_category_m->check_category($category_name);
		if($check_category < 1)
		{
			$records = array('category_name'=>$category_name,'category_status'=>$category_status);
			$insert_category = $this->admin_add_category_m->category_insert($records);
			if($insert_category)
			{
				$this->session->set_flashdata("success", "You have successfully insert the category!");
				redirect('admin_add_category');	
			}
			else
			{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('admin_add_category');
			}
		}else{
			$this->session->set_flashdata("exist", "This Category already exist!");
			redirect('admin_add_category');
		}
		
		
	}

}
