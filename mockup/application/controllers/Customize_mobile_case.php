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

	public function add_to_cart(){
		$this->load->library('user_agent');
		$this->load->model('product_details_m');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != null){
			$user_id = $this->session->userdata['logged_in']['user_id'];
        }else{
			$user_id = $this->input->ip_address();
		}
		$price = $this->input->post('price');
		$size = (($this->input->post('size') != NULL)?$this->input->post('size'):' ');
		$color = (($this->input->post('color') != NULL)?$this->input->post('color'):' ');
		$product_id = $this->input->post('p_id');
		$design_image = $this->input->post('design_image');
		$product_type = $this->input->post('product_type');
		$qty = $this->input->post('quantity');
		$datetime = time();
		

		$check_cart_of_user = $this->product_details_m->check_cart($user_id,$product_id);

		if(count($check_cart_of_user) < 1){
			$save_cart = array(
				'cart_id' => Null,
				'ip_address' => $user_id,
				'user_id' => $user_id,
				'price' => $price,
				'size' => $size,
				'color' => $color,
				'product_id' => $product_id,
				'design_image' => $design_image,
				'cart_date' => $datetime,
				'product_type' => $product_type,
				'qty' => $qty
			);
			$insert_cart = $this->product_details_m->save_cart($save_cart);
			if($insert_cart){
				$this->session->set_flashdata("success", "Your product added to cart successfully");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong! Please try again later...");
			}
		}else{
			$this->session->set_flashdata("failed", "Something went wrong! Please try again later...");
		}
			redirect('checkout');
		
	}

}

/* End of file Customize_mobile_case.php */
/* Location: ./application/controllers/Customize_mobile_case.php */