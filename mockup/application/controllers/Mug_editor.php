<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mug_editor extends CI_Controller {

	public function index()
	{
		$this->load->model('mug_editor_m');
		//$data['raw_mat_id'] = $this->uri->segment(2);
		$data['raw_mat_id'] = '236';
		$data['fetch_raw_data'] = $this->mug_editor_m->fetch_model_name($data['raw_mat_id']);
		$data['fetch_similar_pro_data'] = $this->mug_editor_m->fetch_similar($data['raw_mat_id']);
		$this->load->view('Mug_editor',$data);
	}

	public function add_to_cart(){
		$this->load->library('user_agent');
		$this->load->model('product_details_m');
		$ip_address = $this->input->ip_address();
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != null){
			$user_id = $this->session->userdata['logged_in']['user_id'];
        }else{
			$user_id = $this->input->ip_address();
		}
		$phone_brand = $this->input->post('phone_brand');
		$phone_model = $this->input->post('phone_model');
		$price = $this->input->post('price');
		$size = (($this->input->post('size') != NULL)?$this->input->post('size'):' ');
		$color = (($this->input->post('color') != NULL)?$this->input->post('color'):' ');
		$product_id = $this->input->post('p_id');
		$raw_id = $this->input->post('raw_id');
		$product_type = $this->input->post('product_type');
		$qty = $this->input->post('quantity');
		$datetime = time();
		
		if(!empty($_FILES['design_image']['name'])){
			$config['upload_path'] = 'admin/uploads/custom_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['design_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('design_image')){
				$uploadData = $this->upload->data();
				$design_image = $uploadData['file_name'];
			}else{
				$design_image = "";
			}
		}
		
		$check_cart_of_user = $this->product_details_m->check_cart($ip_address,$product_id,$raw_id);

		if(count($check_cart_of_user) < 1){
			$save_cart = array(
				'ip_address' => $ip_address,
				'user_id' => $user_id,
				'price' => $price,
				'color' => $color,
				'raw_id' => $raw_id,
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
			$cart_id = $check_cart_of_user->cart_id;
			$cart_qty = $check_cart_of_user->qty;
			$update_qty = $cart_qty + $qty;

			$update_cart = array(
				'qty' => $update_qty
			);
			$update_cart_data = $this->product_details_m->update_cart($update_cart,$cart_id,$ip_address);
			if($update_cart_data){
				$this->session->set_flashdata("success", "Your product updated to cart successfully");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong! Please try again later...");
			}
			//$this->session->set_flashdata("failed", "Something went wrong! Please try again later...");
		}
			redirect('Mug_editor');
		
	}

}

/* End of file Mug_editor.php */
/* Location: ./application/controllers/Mug_editor.php */