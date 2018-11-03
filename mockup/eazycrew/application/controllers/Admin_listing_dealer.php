<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_dealer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_listing_dealer_m');
		$data['fetch_dealer'] = $this->admin_listing_dealer_m->fetch_dealer();
		$this->load->view('admin_listing_dealer',$data);
	}

	public function change_status()
	{
		$this->load->model('admin_listing_dealer_m');
		$dealer_id = $this->input->post('dealer_id');
		$dealer_status = $this->input->post('dealer_status');
		if($dealer_status == 1){
			$changed_status = "0";
		}else if($dealer_status == 0){
			$changed_status = "1";
		}
		$update_array = array('dealers_status' => $changed_status);
		$update_crew = $this->admin_listing_dealer_m->update_crew($dealer_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $dealer_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_dealer.php */
/* Location: ./application/controllers/Admin_listing_dealer.php */