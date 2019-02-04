<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_customers extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->model('account_listing_customer_m');
		$data['fetch_customer_info'] = $this->account_listing_customer_m->fetch_customer();
		$this->load->view('contacts/listing_customers',$data);
	}


	public function delete_product()
	{
		$this->load->model('account_listing_customer_m');
		$product_id = $this->uri->segment(3);
		$delete_query = array('raw_status' => '0');
		$delete_product = $this->account_listing_customer_m->delete_product($delete_query,$product_id);
		$this->session->set_flashdata("success", "Product Deleted!");
		redirect('admin_listing_mobile_case');
	}

	public function change_status()
	{
		$this->load->model('account_listing_customer_m');
		$customer_id = $this->input->post('customer_id');
		$customer_status = $this->input->post('customer_status');
		if($customer_status == 1){
			$changed_status = "0";
		}else if($customer_status == 0){
			$changed_status = "1";
		}
		$update_array = array('customer_status' => $changed_status);
		$update_customer = $this->account_listing_customer_m->update_status($customer_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $customer_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Account_listing_customer.php */
/* Location: ./application/controllers/Account_listing_customer.php */