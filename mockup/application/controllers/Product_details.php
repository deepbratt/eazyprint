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
		$data['fetch_similar_pro_data'] = $this->product_details_m->fetch_similar_products($pro_cat_id,$prod_id);
		/* FOR PRODUCT DETAILS ENDS*/
		
		if(empty($data['fetch_prod_data'])){
			redirect('page_unavailable');
		}
		
		$this->load->view('product_details',$data);
	}

	public function fetch_models(){
		$this->load->model('product_details_m');
		$brand_name = $this->input->post('brand_name');
		$fetch_models = $this->product_details_m->brand_models($brand_name);
	?>
		<option value="" disabled selected>Choose Model</option>
	<?php
		foreach($fetch_models AS $each_modelzz){
	?>
		<option value="<?php echo $each_modelzz->raw_title;?>"><?php echo $each_modelzz->raw_title;?></option>
	<?php
		}
	}

	public function add_to_cart(){
		$this->load->library('user_agent');
		$this->load->model('product_details_m');
		$ip_address = $this->input->ip_address();
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != null){
			$user_id = $this->session->userdata['logged_in']['user_id'];
        }else{
			$user_id = $ip_address;
		}

		if(isset($this->session->userdata['product_sidebar']['cat_id']) && $this->session->userdata['product_sidebar']['cat_id'] == "3"){
			$brand_name = $this->input->post('phone_brand');
			$model_number = $this->input->post('phone_model');
		}else{
			$brand_name = "";
			$model_number = "";
		}
		$price = $this->input->post('price');
		$size = (($this->input->post('size') != NULL)?$this->input->post('size'):' ');
		$color = (($this->input->post('color') != NULL)?$this->input->post('color'):' ');
		$product_id = $this->input->post('p_id');
		$design_image = $this->input->post('design_image');
		$product_type = $this->input->post('product_type');
		$qty = $this->input->post('quantity');
		$datetime = time();
		

		$check_cart_of_user = $this->product_details_m->check_cart($ip_address,$product_id);
		
		if(empty($check_cart_of_user)){
			$save_cart = array(
				'cart_id' => Null,
				'ip_address' => $user_id,
				'user_id' => $user_id,
				'brand_name' => $brand_name,
				'model_number' => $model_number,
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
			redirect('product_details/'.$product_id);
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */