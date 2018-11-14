<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_size extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_product_size_m');
		$product_size_id = $this->uri->segment(2);
		$data['product_size_fetch'] = $this->admin_edit_product_size_m->fetch_product_size($product_size_id);
		$this->load->view('admin_edit_product_size',$data);
	}
	public function edit_product_size()
	{
		$this->load->model('admin_edit_product_size_m');
		$sub_category_name = $this->input->post('sub_category');
		$product_size_name = $this->input->post('product_size');
		$product_dimension_name = $this->input->post('product_dimension');
		$cat_sub_id = $this->input->post('sub_cat_id');
		$records=array('product_size_name'=>$product_size_name,'dimension'=>$product_dimension_name,'sub_category_id'=>$sub_category_name);
		$update_product_size = $this->admin_edit_product_size_m->product_size_update($records,$cat_sub_id);
		if($update_product_size)
		{
			$this->session->set_flashdata("success", "You have successfully updated the product size!");
			redirect('admin_edit_product_size/'.$cat_sub_id);	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_product_size/'.$cat_sub_id);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */