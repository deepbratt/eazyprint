<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_sub_category extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

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
		$cat_sub_id = $this->uri->segment(3);

		$check_sub_cat = $this->admin_edit_sub_category_m->check_sub_cat($cat_sub_id,$category_name,$sub_category_name);
		if($check_sub_cat < 1)
		{
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
		}else{
			$this->session->set_flashdata("exist", "This Sub-category Already Exist!");
			redirect('admin_edit_sub_category/'.$cat_sub_id);
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */