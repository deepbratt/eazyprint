<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_eazycrew extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('contacts_m');
		$dealer_id = $this->uri->segment(2);
		$data['fetch_city_state'] = $this->contacts_m->fetch_state_city();
		$data['fetch_dealer_data'] = $this->contacts_m->fetch_contacts_info($dealer_id);
		$this->load->view('contacts/edit_eazycrew',$data);
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

	public function update_dealer(){
		$this->load->model('contacts_m');
		$dealer_id = $this->uri->segment(3);
		$user_type = "eazycrew";
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

		$check_email = $this->contacts_m->check_contacts_data($email,$dealer_id,$user_type);
		if($check_email < 1){
			$dealer_info = array(
				'user_type' => 'eazycrew',
				'user_fname'=> $fname,
				'user_lname' => $lname,
				'user_email'=> $email,
				'user_phone' => $mobile,
				'user_address'=> $address,
				'user_pincode' => $pincode,
				'user_state'=> $state,
				'user_city' => $city,
				'user_crew_role' => $crew_role,
				'user_email_status' => '0',
				'user_phone_status'=> '0',
				'user_status' => '1',
				'user_date'=> $date
			);

			$update_dealer = $this->contacts_m->update_contacts($dealer_info,$dealer_id);
			if($update_dealer){
				$this->session->set_flashdata("success", "Eazycrew Updated Successfully!");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
			}
		}else{
			$this->session->set_flashdata("exist", "Eazycrew Already Exist...");
		}
		redirect('edit_eazycrew/'.$dealer_id.'');
	}

}

/* End of file Edit_eazycrew.php */
/* Location: ./application/controllers/Edit_eazycrew.php */