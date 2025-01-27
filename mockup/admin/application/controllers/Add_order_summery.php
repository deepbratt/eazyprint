<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_order_summery extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
     }

	public function index()
	{
		$this->load->model('add_order_summery_m');
		$raw_id = $this->uri->segment(2);
		$data['fetch_order_product'] = $this->add_order_summery_m->fetch_pro($raw_id);

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$get_user_class = $this->add_order_summery_m->get_details_it($user_id);
		
		$user_class = $get_user_class->user_class;
		$get_discount = $this->add_order_summery_m->get_discount_fetch($user_class);
		$data['discount_percentage']  = $get_discount->userclass_discount_percentage;
		

		//print_r($data['fetch_order_product']);
		//exit;
		//$this->load->view('products/order_summery',$data);
		$this->load->view('orders/add_order_summery',$data);
	}

	public function delete_product()
	{
		$product_id = $this->uri->segment(3);
		$this->load->model('listing_product_m');
		$delete_product = $this->listing_product_m->delete_pro($product_id);
		if($delete_product){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this Product!");
			redirect('listing_product');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_product');
		}
	}

	public function add_order()
	{
		$this->load->model('add_order_summery_m');

		$user_type = $this->session->userdata['logged_in']['user_type'];
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$get_user_address = $this->add_order_summery_m->get_address($user_id);
		$user_address_id = $get_user_address->user_address_id;
		$user_state = $get_user_address->state;
		$get_user_details_it = $this->add_order_summery_m->get_user_details($user_id);
		$user_class = $get_user_details_it->user_class;
		$get_discount_percentage = $this->add_order_summery_m->get_discount_fetch($user_class);
		$discount_percentage = $get_discount_percentage->userclass_discount_percentage;



		$raw_id = $this->input->post('raw_id');
		$payable_amount = $this->input->post('per_price');
		$amount_excluding_gst = $this->input->post('per_price_gst');
		$gst_percentage = round($this->input->post('gst_percentage'));
		
		$ctaxamt = '';
		$staxamt = '';
		$itaxamt = '';
		
		  if($user_state=='West Bengal')
		  {
			$ctaxamt = $gst_percentage / 2;
			$staxamt = $gst_percentage - $ctaxamt;
			$itaxamt = 0;

			
		  }
		  else{
			  
			$ctaxamt = 0;
			$staxamt = 0;
			$itaxamt = $gst_percentage;
		  }
		
		$get_raw_product_details = $this->add_order_summery_m->get_row($raw_id);
		$raw_seller = $get_raw_product_details->raw_added_by;
		$raw_gst_percentage = $get_raw_product_details->raw_gst_rate;
		$raw_selling_price = $get_raw_product_details->raw_retail_price;

		$discount_amount = ($raw_selling_price * $discount_percentage)/100;
	

		$get_supplier_count = $this->add_order_summery_m->get_supplier($raw_seller);
		if($get_supplier_count > 0)
		{
			$get_supplier_details = $this->add_order_summery_m->get_supplier_details($raw_seller);
			$supplier_name = $fetch_supplier_name->user_fname;
		}
		else
		{
			$supplier_name = "Eazyprint";
		}

		$coustomized_type = "raw";
		//$product_id =

		$user_email = $get_user_details_it->user_email;
		$this->load->library('upload');
		$count_image = count($_FILES['meta_image']['name']);		
		for($i = 0; $i < $count_image; $i++){
			$_FILES['userFile']['name'] = $_FILES['meta_image']['name'][$i];
			$_FILES['userFile']['type'] = $_FILES['meta_image']['type'][$i];
			$_FILES['userFile']['tmp_name'] = $_FILES['meta_image']['tmp_name'][$i];
			$_FILES['userFile']['error'] = $_FILES['meta_image']['error'][$i];
			$_FILES['userFile']['size'] = $_FILES['meta_image']['size'][$i];

			$config['upload_path'] = 'uploads/order_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['meta_image']['name'][$i];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('userFile')){
				$fileData = $this->upload->data();
				$product_image[$i]['file_name'] = $fileData['file_name'];
				$product_image[$i]['created'] = date("Y-m-d H:i:s");
				$product_image[$i]['modified'] = date("Y-m-d H:i:s");
				$path = base_url('uploads/order_images/');
				$order_images = $path.''.$product_image[$i]['file_name'];
			}
			$order_time = time();
			$records = array(
							'order_type' => $coustomized_type,
							'product_id' => $get_raw_product_details->raw_id,
							'product_image'=>$order_images,
							'user_id'=>$user_id,
							'user_address_id'=>$user_address_id,
							'purchase_type'=>$user_type,
							'supplier_id'=>'Eazyprint',
							'product_price'=>$payable_amount,
							'CGST'=>$ctaxamt,
							'SGST'=> $staxamt,
							'IGST'=>$itaxamt,
							'gst_percentage'=>$gst_percentage,
							'discount '=>$discount_amount,
							'total_amount'=>$raw_selling_price,
							'order_qty'=>'1',
							'payment_method'=>'',
							'delivery_fee'=>'',
							'delivery_tracking_id'=>'',
							'payment_status'=>'pending',
							'order_date'=>$order_time,
							'delivery_date'=>''
							
						);
		
		$insert_new_order[] = $this->add_order_summery_m->insert_order($records);
		
			
		}
		
		$count_order = count($insert_new_order);
	
		if($count_order > 0)
		{
			$get_it = implode("," ,$insert_new_order);
			echo $get_it;
		}
		else
		{
			echo "error";
		}
	}

	public function update_order()
	{
		$this->load->model('add_order_summery_m');
		$payment_type = $this->input->post('payment_option');
		
		$raw_id = $this->input->post('raw_id');
		$pay_status = "pending";
		$payment_array = array('payment_status' => $pay_status ,'payment_method' => $payment_type);
		$all_order = explode(",",$this->input->post('order_id'));
		//print_r($all_order);

		$get_count_order_id = count($all_order);
		if($get_count_order_id > 0)
		{
			//$order_it = $this->input->post('order_id');
			
			foreach($all_order As $something)
			{
				$get_order_update = $this->add_order_summery_m->get_update($something,$payment_array);
			
			}
			if($get_order_update)
				{
					redirect('order_success');
				}
				else
				{
					$this->session->set_flashdata("internal_error", "OPPS! Something Went Wrong.");
					redirect('add_order_summery/'.$raw_id);
				}
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('add_order_summery/'.$raw_id);
		}	
	}
	
	public function change_status()
	{
		$this->load->model('listing_product_m');
		$product_id = $this->input->post('product_id');
		$product_status = $this->input->post('product_status');
		if($product_status == 1){
			$changed_status = "0";
		}else if($product_status == 0){
			$changed_status = "1";
		}
		$update_array = array('product_status' => $changed_status);
		$update_pro = $this->listing_product_m->update_status($product_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $product_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_product.php */
/* Location: ./application/controllers/Admin_listing_product.php */