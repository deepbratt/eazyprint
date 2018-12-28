<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_crew extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_crew_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$crew_id = $this->uri->segment(2);
		$data['crew_details'] = $this->admin_edit_crew_m->crew_details($crew_id);
		$this->load->view('admin_edit_crew',$data);
	}

	public function update_crew()
	{
		$this->load->model('admin_edit_crew_m');
		$crew_id = $this->uri->segment(3);
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$assign_role = $this->input->post('role');
		$update_array = array(
								'crew_fname' => $first_name,
								'crew_lname' => $last_name,
								'crew_email' => $email,
								'crew_role' => $assign_role,
							 );
		$update_crew = $this->admin_edit_crew_m->update_crew($crew_id,$update_array);
		$this->session->set_flashdata("success", "Crew Member Updated Successfully!");
	    redirect('admin_edit_crew/'.$crew_id);
	}

}

/* End of file Admin_edit_crew.php */
/* Location: ./application/controllers/Admin_edit_crew.php */