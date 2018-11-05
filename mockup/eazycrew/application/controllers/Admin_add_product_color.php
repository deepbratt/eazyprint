<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_color extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_product_color_m');
		$data['get_product_color'] = $this->admin_add_product_color_m->fetch_product_color();	
		$this->load->view('admin_add_product_color',$data);
	}
	public function add_product_color()
	{
		$this->load->model('admin_add_product_color_m');
		$sub_cat_id = $this->input->post('sub_cat');
		$product_color_name = $this->input->post('product_color');
		$color_code_name = $this->input->post("color_code");

		for($i=0; $i<sizeof($product_color_name); $i++){
			$records = array(
				'product_color_name' => $product_color_name[$i],
				'product_color_code' => $color_code_name[$i],
				'sub_category_id' => $sub_cat_id
			);
			$insert_product_color = $this->admin_add_product_color_m->product_color_insert($records);	
		}
		
		if($insert_product_color)
		{
			$this->session->set_flashdata("success", "You have successfully insert the product color!");
			redirect('admin_add_product_color');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_product_color');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */