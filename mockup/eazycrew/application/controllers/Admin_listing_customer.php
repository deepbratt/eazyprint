<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_customer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_listing_customer_m');
		$data['fetch_customer'] = $this->admin_listing_customer_m->fetch_customer();
		$this->load->view('admin_listing_customer',$data);
	}

	public function change_status()
	{
		$this->load->model('admin_listing_customer_m');
		$customer_id = $this->input->post('customer_id');
		$customer_status = $this->input->post('customer_status');
		if($customer_status == 1){
			$changed_status = "0";
		}else if($customer_status == 0){
			$changed_status = "1";
		}
		$update_array = array('customer_status' => $changed_status);
		$update_customer = $this->admin_listing_customer_m->update_customer($customer_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $customer_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_customer.php */
/* Location: ./application/controllers/Admin_listing_customer.php */