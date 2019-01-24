<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_add_dealer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
	public function index()
	{
		$this->load->model('account_add_customer_m');
		$data['fetch_city_state'] = $this->account_add_customer_m->fetch_state_city();
		$this->load->view('account_add_dealer',$data);
	}

	public function ajax_state_name(){
		$this->load->model('account_add_customer_m');
		$state_name = $this->input->post('state');
		$fetch_cities = $this->account_add_customer_m->all_cities($state_name);
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

/* End of file Account_add_vendor.php */
/* Location: ./application/controllers/Account_add_vendor.php */