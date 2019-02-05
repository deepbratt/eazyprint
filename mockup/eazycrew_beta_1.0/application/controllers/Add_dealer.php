<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_dealer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('add_dealer_m');
		$data['fetch_city_state'] = $this->add_dealer_m->fetch_state_city();
		$this->load->view('contacts/add_dealer',$data);
	}

	public function ajax_state_name(){
		$this->load->model('add_dealer_m');
		$state_name = $this->input->post('state');
		$fetch_cities = $this->add_dealer_m->all_cities($state_name);
	?>
		<option vlaue="" selected disabled>Choose City</option>
	<?php
		foreach($fetch_cities AS $each_fetch_cities){
		?>
	      	<option value="<?php echo $each_fetch_cities->city_name;?>"><?php echo $each_fetch_cities->city_name;?></option>
      	<?php
      		}

	}

	public function add_new_dealer(){
		$this->load->model('add_dealer_m');
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

		$check_email = $this->add_dealer_m->check_dealer_data($email);
		if($check_email < 1){
			$dealer_info = array(
				'user_type' => 'dealer',
				'user_fname'=> $fname,
				'user_lname' => $lname,
				'user_email'=> $email,
				'user_phone' => $mobile,
				'user_address'=> $address,
				'user_pincode' => $pincode,
				'user_state'=> $state,
				'user_city' => $city,
				'user_store_name'=> $legal_name,
				'user_tradelicense_number' => $trade_license_number,
				'user_gst_number'=> $gst_number,
				'user_email_status' => '0',
				'user_phone_status'=> '0',
				'user_status' => '1',
				'user_date'=> $date
			);

			$insert_new_dealer = $this->add_dealer_m->insert_dealer($dealer_info);
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