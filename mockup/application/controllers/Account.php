<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_account_details'] = $this->account_m->fetch_cust_info($user_id);
		$data['fetch_address'] = $this->account_m->fetch_address($user_id);
		$data['get_all_cities'] = $this->account_m->get_all_cities();
		$data['get_all_state'] = $this->account_m->get_all_state();
		$this->load->view('customer/account',$data);
	}

	public function ajax_fetch_city()
	{
		$this->load->model('account_m');
		$state_id = $this->input->post('state_id');
		$get_spec_city = $this->account_m->get_spec_city($state_id);
		?>
		<option selected disabled>Select city</option>
		<?php
		foreach($get_spec_city as $fetch_all_city){
		?>
		<option value="<?php echo $fetch_all_city->city_id;?>" ><?php echo $fetch_all_city->city_name;?></option>
		<?php
		}
		
	}

	public function add_address()
	{
		$this->load->model('account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$pincode = $this->input->post('pincode');
		$country = 'India';
		$status = '0';
		$date = time();

		$insert_array = array(
								'user_id' => $user_id,
								'full_name' => $name,
								'phone' => $phone,
								'address' => $address,
								'city' => $city,
								'state' => $state,
								'postal_code' => $pincode,
								'country' => $country,
								'address_status' => $status,
								'added_date' => $date,
								'updated_date' => $date
							 );
		$insert_new_address = $this->account_m->insert_new_address($insert_array);
		if($insert_new_address != ''){
			$this->session->set_flashdata("address_success", "New address has been added successfully!");
		}else{
			$this->session->set_flashdata("address_failed", "Something went wrong. Please try again...");
		}
		$this->session->set_flashdata("status", "address");
		redirect('account');
	}

	public function change_status(){
		$this->load->model('account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$address_id = $this->uri->segment(3);
		$update_address_status = $this->account_m->update_address_status($address_id);
		$update_other = $this->account_m->update_other_status($address_id,$user_id);
		$this->session->set_flashdata("address_status_success", "Primary address has been updated successfully!");
		$this->session->set_flashdata("status", "address");
		redirect('account');
	}

	public function delete_address(){
		$this->load->model('account_m');
		$address_id = $this->uri->segment(3);
		$delete_query = $this->account_m->delete_query($address_id);
		$this->session->set_flashdata("address_del_success", "This address has been deleted successfully!");
		$this->session->set_flashdata("status", "address");
		redirect('account');
	}

	public function update_account_info(){
		$this->load->model('account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$fetch_user_data = $this->account_m->fetch_cust_info($user_id);
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		//$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$prev_profile_img = $fetch_user_data->user_profile_image;

		if(!empty($_FILES['profile_image']['name'])){
			$config['upload_path'] = 'uploads/user_profile_image/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['profile_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('profile_image')){
				$uploadData = $this->upload->data();
				$profile_image = $uploadData['file_name'];
			}
		}else{
			$profile_image = $fetch_user_data->user_profile_image;
		}
		if($profile_image != $prev_profile_img){
			$image_delete_status = '1';
		}else{
			$image_delete_status = '0';
		}

		/* SEND EMAIL FOR VERIFICATION */
		/*if($fetch_user_data->user_email != $email){
			$check_duplicate_email = $this->account_m->check_email_row($email,$user_id);
			if(sizeof($check_duplicate_email) < 1){
				 EMAIL TO BE VERIFIED AND UPDATED
			}else{
				$this->session->set_flashdata("exist", "Email Already Exist...");
			}
		}*/
			$account_info = array(
				'user_fname' => $fname,
				'user_lname' => $lname,
				'user_phone' => $phone,
				'user_profile_image' => $profile_image
			);

			$update_profile = $this->account_m->update_profile_info($account_info,$user_id,$prev_profile_img,$image_delete_status);
			if($update_profile){
				$this->session->set_flashdata("success_personal", "General Information Updated Successfully!");
			}else{
				$this->session->set_flashdata("failed_personal", "Something went wrong. Please try again...");
			}
		
		redirect('account');
	}

	public function update_address(){
		$this->load->model('account_m');
		$add_id = $this->input->post('update');
		$name = $this->input->post('name_'.$add_id.'');
		$phone = $this->input->post('phone_'.$add_id.'');
		$address = $this->input->post('address_'.$add_id.'');
		$city = $this->input->post('city_'.$add_id.'');
		$state = $this->input->post('state_'.$add_id.'');
		$pincode = $this->input->post('pincode_'.$add_id.'');
		$date = time();

		$cust_address_info = array(
								'full_name' => $name,
								'phone' => $phone,
								'address' => $address,
								'city' => $city,
								'state' => $state,
								'postal_code' => $pincode,
								'updated_date' => $date
							 );

		$update_address_info = $this->account_m->update_address_info($cust_address_info,$add_id);
		if($update_address_info){
			$this->session->set_flashdata("success_add_update", "Address Updated Successfully!");
		}else{
			$this->session->set_flashdata("failed_add_update", "Something went wrong. Please try again...");
		}
		$this->session->set_flashdata("status", "address");
		redirect('account');
	}

	public function update_password(){
		$this->load->model('account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$old_pass = $this->input->post('old_pass');
		$new_pass = $this->input->post('new_pass');
		$con_pass = $this->input->post('con_pass');
		
		$check_prev = $this->account_m->fetch_cust_info($user_id);
		if($old_pass == $check_prev->user_password){
			if($new_pass == $con_pass){
				$update_array = array('user_password' => $new_pass);
				$update_password = $this->account_m->update_password($user_id,$update_array);
				$this->session->set_flashdata("success_pass", "Address Updated Successfully!");
			}else{
				$this->session->set_flashdata("failed_pass1", "New password and Confirm password doesn't match!");
			}
		}else{
			$this->session->set_flashdata("failed_pass2", "Old password is not correct!");
		}
		$this->session->set_flashdata("status", "password");
		redirect('account');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */