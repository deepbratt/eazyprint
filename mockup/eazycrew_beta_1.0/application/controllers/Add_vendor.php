<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_vendor extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }


	public function index()
	{
		$this->load->model('add_vendor_m');
		$data['fetch_city_state'] = $this->add_vendor_m->fetch_state_city();
		$this->load->view('contacts/add_vendor');
	}

	public function ajax_state_name(){
		$this->load->model('add_vendor_m');
		$state_name = $this->input->post('state');
		$fetch_cities = $this->add_vendor_m->all_cities($state_name);
	?>
		<option vlaue="" selected disabled>Choose City</option>
	<?php
		foreach($fetch_cities AS $each_fetch_cities){
		?>
	      	<option value="<?php echo $each_fetch_cities->city_name;?>"><?php echo $each_fetch_cities->city_name;?></option>
      	<?php
      		}

	}

	public function add_new_vendor(){
		$this->load->model('add_vendor_m');
		$fname = $this->input->post('f_name');
		$lname = $this->input->post('l_name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$pincode = $this->input->post('pincode');
		$legal_name = $this->input->post('legal_name');
		$gst_number = $this->input->post('gst_number');
		$trade_license_number = $this->input->post('trade_license_number');
		$date = time();

		$check_email = $this->add_vendor_m->check_dealer_data($email);
		if($check_email < 1){
			$vendor_info = array(
				'dealers_fname'=> $fname,
				'dealers_lname' => $lname,
				'dealers_email'=> $email,
				'dealers_phone' => $mobile,
				'dealers_addr'=> $address,
				'dealers_pincode' => $pincode,
				'dealers_state'=> $state,
				'dealers_city' => $city,
				'dealers_store_name'=> $legal_name,
				'dealers_tradelicense_number' => $trade_license_number,
				'dealers_gst_number'=> $gst_number,
				'dealers_email_status' => '0',
				'dealers_phone_status'=> '0',
				'dealers_status' => '1',
				'dealers_date'=> $date
			);

			$insert_new_dealer = $this->add_vendor_m->insert_dealer($dealer_info);
			if($insert_new_dealer){
				$this->session->set_flashdata("success", "Dealer Added Successfully!");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
			}
		}else{
			$this->session->set_flashdata("exist", "Dealer Already Exist...");
		}
		redirect('add_dealer');
	}

}

/* End of file Admin_add_mug.php */
/* Location: ./application/controllers/Admin_add_mug.php */