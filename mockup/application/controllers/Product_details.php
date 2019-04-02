<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	public function index()
	{
		$this->load->model('product_details_m');
		$prod_id = $this->uri->segment(2);
		
		//$prod_id = '35';
		$data['fetch_prod_data'] = $this->product_details_m->prod_info($prod_id);
		$data['fetch_prod_image_data'] = $this->product_details_m->prod_image_info($prod_id);
		$single_image = array();
		foreach($data['fetch_prod_image_data'] AS $fetch_single_images){
			$single_image[] = $fetch_single_images->product_image_path;
		}
		$data['single_prod_image'] = $single_image;
		/* FOR PRODUCT DETAILS STARTS*/
		$raw_pro_id = $data['fetch_prod_data']->raw_id;
		$data['fetch_raw_data'] = $this->product_details_m->raw_prod_info($raw_pro_id);
		/* FOR PRODUCT DETAILS ENDS*/

		/* FOR PRODUCT DETAILS STARTS*/
		$pro_cat_id = $data['fetch_prod_data']->product_category_id;
		$data['fetch_similar_pro_data'] = $this->product_details_m->fetch_similar_products($pro_cat_id);
		/* FOR PRODUCT DETAILS ENDS*/
		
		if(empty($data['fetch_prod_data'])){
			redirect('page_unavailable');
		}
		
		$this->load->view('product_details',$data);
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
			redirect('product_details/'.$product_id);
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */