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
		$data['admin_data'] = $this->admin_setting_m->fetch_data($user_id);
		$this->load->view('admin_setting',$data);
	}

	public function update_admin()
	{
		$this->load->model('admin_setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$f_name = $this->input->post('f_name');
		$l_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check_existing = $this->admin_setting_m->check_existing($user_id,$email);
		if(sizeof($check_existing) < 1)
		{
			
			if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/crew_images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array(
									"crew_fname" => $f_name,
									"crew_lname" => $l_name,
									"crew_email" => $email,
									"crew_pass" => $password,
									"crew_image" => $image
								  );
                }else{
					$records=array(
									"crew_fname" => $f_name,
									"crew_lname" => $l_name,
									"crew_email" => $email,
									"crew_pass" => $password
								  );
                }
			}else{
				$records=array(
								"crew_fname" => $f_name,
								"crew_lname" => $l_name,
								"crew_email" => $email,
								"crew_pass" => $password
							  );
			}
			$update_admin = $this->admin_setting_m->update_admin($user_id,$records);
			$this->session->set_flashdata("success", "Profile Updated Successfully!");
	        redirect('admin_setting');
		}else{
			$this->session->set_flashdata("failed", "This Email Already Exist!");
	        redirect('admin_setting');
		}
	}

}

/* End of file Admin_setting.php */
/* Location: ./application/controllers/Admin_setting.php */