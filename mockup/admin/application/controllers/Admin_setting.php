<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_setting extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$user_type = $this->session->userdata['logged_in']['user_type'];
		if($user_type == 'dealer')
		{
			$dealer_details = $this->admin_setting_m->fetch_dealer($user_id);
			//print_r($dealer_details);
			$data['f_name'] = $dealer_details->user_fname;	
			$data['l_name'] = $dealer_details->user_lname;
			$data['email'] = $dealer_details->user_email;
			$data['product_category'] = $dealer_details->category_want_to_sell;
			$data['profile_image'] = $dealer_details->user_profile_image;
		
	
		}
		else
		{
			$crew_details = $this->admin_setting_m->fetch_crew($user_id);
	
			$data['f_name'] = $crew_details->crew_fname;
			$data['l_name'] = $crew_details->crew_lname;
			$data['email'] = $crew_details->crew_email;
			$data['profile_image'] = $crew_details->crew_image;
		
		}
	
	
		$this->load->view('profile/admin_setting',$data);
	}

	public function update_admin()
	{
		$this->load->model('admin_setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$f_name = $this->input->post('f_name');
		$l_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$product_category_wnt_sell = implode("," ,$this->input->post('category'));
		
			if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/crew_images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					if($this->session->userdata['logged_in']['user_type'] == 'dealer')
					{
						$records=array(
										"user_fname" => $f_name,
										"user_lname" => $l_name,
										"user_email" => $email,
										"category_want_to_sell" => $product_category_wnt_sell,
										"user_profile_image" => $image
									  );
					}
					else
					{
							$records=array(
										"crew_fname" => $f_name,
										"crew_lname" => $l_name,
										"crew_email" => $email,
										"crew_image" => $image
									  );

					}

				
                }else{
					if($this->session->userdata['logged_in']['user_type'] == 'dealer')
					{

					$records=array(
									"user_fname" => $f_name,
									"user_lname" => $l_name,
									"user_email" => $email,
									"category_want_to_sell" => $product_category_wnt_sell
								  );
					}
					else
					{
						$records=array(
										"crew_fname" => $f_name,
										"crew_lname" => $l_name,
										"crew_email" => $email
										
									  );

					}
					
                
			}
			}else{
				if($this->session->userdata['logged_in']['user_type'] == 'dealer')
					{
						$records=array(
								"user_fname" => $f_name,
								"user_lname" => $l_name,
								"user_email" => $email,
								"category_want_to_sell" => $product_category_wnt_sell
							  );
					}
				else
					{
					$records=array(
								"crew_fname" => $f_name,
								"crew_lname" => $l_name,
								"crew_email" => $email
								
							  );

					}
			
			}
			if($this->session->userdata['logged_in']['user_type'] == 'dealer')
			{
				$update_admin = $this->admin_setting_m->update_dealer($user_id,$records);
			}
			else
			{
				$update_admin = $this->admin_setting_m->update_admin_it($user_id,$records);
			}
			
			$this->session->set_flashdata("success", "Profile Updated Successfully!");
	        redirect('admin_setting');
		
	}

}

/* End of file Admin_setting.php */
/* Location: ./application/controllers/Admin_setting.php */