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
		$this->load->model('contacts_m');
		$user_type = 'customer';
		$data['fetch_customer_info'] = $this->contacts_m->fetch_all_contacts_info($user_type);
 		$this->load->view('contacts/listing_customers',$data);
	}

	public function delete_customer()
	{
		$dealer_id = $this->uri->segment(3);
		$this->load->model('contacts_m');
		$delete_dealer = $this->contacts_m->delete_contacts($dealer_id);
		if($delete_dealer){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this customer!");
			redirect('listing_customers');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_customers');
		}
	}

	public function change_status()
	{
		$this->load->model('contacts_m');
		$dealer_id = $this->input->post('customer_id');
		$dealer_status = $this->input->post('customer_status');
		if($dealer_status == 1){
			$changed_status = "0";
		}else if($dealer_status == 0){
			$changed_status = "1";
		}
		$update_array = array('user_status' => $changed_status);
		$update_dealer = $this->contacts_m->update_status($dealer_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $dealer_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Account_listing_customer.php */
/* Location: ./application/controllers/Account_listing_customer.php */