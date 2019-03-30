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
		//$this->load->model('order_summery_m');
		//$data['fetch_product'] = $this->order_summery_m->fetch_pro();
		//print_r($data['fetch_product']);
		//exit;
		//$this->load->view('products/order_summery',$data);
		$this->load->view('orders/add_order_summery');
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