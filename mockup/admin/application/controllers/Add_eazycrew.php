<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_eazycrew extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id'] && $this->session->userdata['logged_in']['user_crew_role'] != 'admin'){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('contacts_m');
		$user_type = 'eazycrew';
		$data['fetch_city_state'] = $this->contacts_m->fetch_state_city($user_type);
		$this->load->view('contacts/add_eazycrew',$data);
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

	public function add_new_crew(){
		$this->load->model('contacts_m');
		$fname = $this->input->post('f_name');
		$lname = $this->input->post('l_name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$pincode = $this->input->post('pincode');
		$crew_role = $this->input->post('crew_role');
		$date = time();
		$user_type = 'eazycrew';

		$check_email = $this->contacts_m->check_contacts_data_email($email,$user_type);
		if($check_email < 1){
			$dealer_info = array(
				'user_type' => $user_type,
				'user_fname'=> $fname,
				'user_lname' => $lname,
				'user_email'=> $email,
				'user_phone' => $mobile,
				'user_address'=> $address,
				'user_pincode' => $pincode,
				'user_crew_role' => $crew_role,
				'user_state'=> $state,
				'user_city' => $city,
				'user_email_status' => '0',
				'user_phone_status'=> '0',
				'user_status' => '1',
				'user_date'=> $date
			);

			$insert_new_dealer = $this->contacts_m->insert_contacts($dealer_info);
			if($insert_new_dealer){
				$this->session->set_flashdata("success", "Customer Added Successfully!");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
			}
		}else{
			$this->session->set_flashdata("exist", "Customer Already Exist...");
		}
		redirect('add_eazycrew');
	}

}

/* End of file Admin_add_mug.php */
/* Location: ./application/controllers/Admin_add_mug.php */