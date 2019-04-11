<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_gst_info extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->model('account_gst_info_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_city_state'] = $this->account_gst_info_m->fetch_state_city();
		$data['user_details'] = $this->account_gst_info_m->get_user_details($user_id);
		
		$this->load->view('profile/account_gst_info',$data);
	}

	public function ajax_state_name(){
		$this->load->model('account_gst_info_m');
		$state_name = $this->input->post('state');
		$fetch_cities = $this->account_gst_info_m->all_cities($state_name);
	?>
		<option vlaue="" selected disabled>Choose City</option>
	<?php
		foreach($fetch_cities AS $each_fetch_cities){
		?>
	      	<option value="<?php echo $each_fetch_cities->city_name;?>"><?php echo $each_fetch_cities->city_name;?></option>
      	<?php
      		}

	}

}

/* End of file Account_gst_info.php */
/* Location: ./application/controllers/Account_gst_info.php */