<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_crew extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_crew');
	}

	public function add_crew()
	{
		$this->load->model('admin_add_crew_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$assign_role = $this->input->post('role');
		$date = time();
		
		$check_crew = $this->admin_add_crew_m->check_crew($email);
		if($check_crew < 1)
		{
			$insert_array = array(
									'crew_fname' => $first_name,
									'crew_lname' => $last_name,
									'crew_email' => $email,
									'crew_pass' => $password,
									'crew_role' => $assign_role,
									'crew_added_by' => $user_id,
									'crew_status' => '1',
									'crew_date' => $date
								 );
			$insert_crew = $this->admin_add_crew_m->insert_crew($insert_array);
			$this->session->set_flashdata("success", "Crew Member Added Successfully!");
	        redirect('admin_add_crew');
		}else{
			$this->session->set_flashdata("failed", "Crew Member Already Exist!");
	        redirect('admin_add_crew');
		}
	}

}

/* End of file Admin_add_crew.php */
/* Location: ./application/controllers/Admin_add_crew.php */