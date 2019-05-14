<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_customer extends CI_Controller {

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
		$data['fetch_city_state'] = $this->contacts_m->fetch_state_city($user_type);
		$data['fetch_all_city'] = $this->contacts_m->fetch_all_cities();
		$this->load->view('contacts/add_customer',$data);
	}

	public function ajax_state_name(){
		$this->load->model('contacts_m');
		$state_name = $this->input->post('state');
		$fetch_cities = $this->contacts_m->all_cities($state_name);
	?>
		<option vlaue="" selected disabled>Choose City</option>
	<?php
		foreach($fetch_cities AS $each_fetch_cities){
		?>
	      	<option value="<?php echo $each_fetch_cities->city_name;?>"><?php echo $each_fetch_cities->city_name;?></option>
      	<?php
      		}

	}

	public function add_new_customer(){
		$this->load->model('contacts_m');
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
		$user_type = 'customer';

		$check_email = $this->contacts_m->check_contacts_data_email($email,$user_type);
		if($check_email < 1){
			$cus_info = array(
				'user_type' => $user_type,
				'user_fname'=> $fname,
				'user_lname' => $lname,
				'user_email'=> $email,
				'user_phone' => $mobile,
				'user_email_status' => '0',
				'user_phone_status'=> '0',
				'user_status' => '1',
				'user_date'=> $date
			);

			$insert_cus = $this->contacts_m->insert_contacts($cus_info);
			if($insert_cus != ''){
				$address_info = array(
					'user_id' => $insert_cus,
					'full_name'=> $fname.' '.$lname,
					'phone' => $mobile,
					'address'=> $address,
					'city' => $city,
					'state'=> $state,
					'postal_code' => $pincode,
					'country'=> 'India',
					'address_status' => '1',
					'added_date' => $date,
					'updated_date'=> $date
				);
				$insert_cus_address = $this->contacts_m->insert_cus_address($address_info);
				$this->session->set_flashdata("success", "Customer Added Successfully!");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
			}
		}else{
			$this->session->set_flashdata("exist", "Customer Already Exist...");
		}
		redirect('add_customer');
	}

}

/* End of file Account_add_customer.php */
/* Location: ./application/controllers/Account_add_customer.php */