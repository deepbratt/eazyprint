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
		$this->load->view('customer/account',$data);
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
				$this->session->set_flashdata("success", "General Information Updated Successfully!");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
			}
		
		redirect('account');
	}

	public function update_address(){
		$this->load->model('account_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$pincode = $this->input->post('pincode');

		$cust_address_info = array(
			'user_address' => $address,
			'user_city' => $city,
			'user_state' => $state,
			'user_pincode' => $pincode
		);

		$update_address_info = $this->account_m->update_address_info($cust_address_info,$user_id);
		if($update_address_info){
			$this->session->set_flashdata("success", "Address Updated Successfully!");
		}else{
			$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
		}
		
		redirect('account');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */