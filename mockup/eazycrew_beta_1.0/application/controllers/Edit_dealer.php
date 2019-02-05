<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_dealer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('edit_dealer_m');
		$dealer_id = $this->uri->segment(2);
		$data['fetch_city_state'] = $this->edit_dealer_m->fetch_state_city();
		$data['fetch_dealer_data'] = $this->edit_dealer_m->fetch_dealer_info($dealer_id);
		$this->load->view('contacts/edit_dealer',$data);
	}

	public function ajax_state_name(){
		$this->load->model('edit_dealer_m');
		$state_name = $this->input->post('state');
		$fetch_cities = $this->edit_dealer_m->all_cities($state_name);
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
		$this->load->model('edit_dealer_m');
		$dealer_id = $this->uri->segment(3);
		
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

		$check_email = $this->edit_dealer_m->check_dealer_data($email,$dealer_id);
		if($check_email < 1){
			$dealer_info = array(
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

			$update_dealer = $this->edit_dealer_m->update_dealer($dealer_info,$dealer_id);
			if($update_dealer){
				$this->session->set_flashdata("success", "Dealer Updated Successfully!");
			}else{
				$this->session->set_flashdata("failed", "Something went wrong. Please try again...");
			}
		}else{
			$this->session->set_flashdata("exist", "Dealer Already Exist...");
		}
		redirect('edit_dealer/'.$dealer_id.'');
	}

}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */