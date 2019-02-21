<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
	public function index()
	{
		$this->load->view('profile/change_password');
	}

	public function set_password()
	{
		$this->load->model('change_password_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$pass = $this->input->post("new_pass");
		$new_pass = $this->input->post("re_new_pass");
		$user_type = 'eazycrew';
		$crew_role = 'admin';
		if($pass == $new_pass)
		{
			$records = array('user_password'=>$pass);
			$update_pass = $this->change_password_m->pass_update($records,$user_id,$user_type,$crew_role);
			$this->session->set_flashdata("success", "You Have Successfully Updated Password!");
			redirect('change_password');
		}
		else
		{
			$this->session->set_flashdata("pass_error", "Password Doesnot Match");
			redirect('change_password');
		}
	}

}

/* End of file Admin_setting.php */
/* Location: ./application/controllers/Admin_setting.php */