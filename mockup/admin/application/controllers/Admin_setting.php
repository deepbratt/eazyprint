<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_setting extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id'] && $this->session->userdata['logged_in']['user_type'] == 'customer'){
            redirect('admin_login');
        }
    }

	public function index()
	{
		/*echo $this->session->userdata['logged_in']['crew_image'];
		exit;*/
		$this->load->model('admin_setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_user'] = $this->admin_setting_m->fetch_user($user_id);
	
	
		$this->load->view('profile/admin_setting',$data);
	}

	public function update_admin()
	{
		$this->load->model('admin_setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$f_name = $this->input->post('f_name');
		$l_name = $this->input->post('l_name');
		$product_category_wnt_sell = implode("," ,$this->input->post('category'));

		$fetch_user = $this->admin_setting_m->fetch_user($user_id);
		$prev_img = $fetch_user->user_profile_image;
		
		if(!empty($_FILES['image']['name'])){
			$config['upload_path'] = 'uploads/crew_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('image')){
				$uploadData = $this->upload->data();
				$image = $uploadData['file_name'];
				$img_stat = '1';
			}
		}else{
			$img_stat = '0';
			$image = $prev_img;
		}

		if($this->session->userdata['logged_in']['user_type'] == 'dealer')
		{
			$product_category_wnt_sell = implode("," ,$this->input->post('category'));
		}
		else
		{
			$product_category_wnt_sell = '';
		}

		$records = array(
							"user_fname" => $f_name,
							"user_lname" => $l_name,
							"category_want_to_sell" => $product_category_wnt_sell,
							"user_profile_image" => $image
						);


		$update_admin = $this->admin_setting_m->update_user($user_id,$records,$image,$img_stat,$prev_img);

		$data = $this->session->userdata('logged_in');  
		$data['name'] = $f_name.' '.$l_name;  
		$data['crew_image'] = $image;
		$this->session->set_userdata('logged_in', $data); 

		$this->session->set_flashdata("success", "Profile Updated Successfully!");
		redirect('admin_setting');
		
	}

}

/* End of file Admin_setting.php */
/* Location: ./application/controllers/Admin_setting.php */