<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_creator extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_listing_creator_m');
		$data['fetch_creator'] = $this->admin_listing_creator_m->fetch_creator();
		$this->load->view('admin_listing_creator',$data);
	}

	public function change_status()
	{
		$this->load->model('admin_listing_creator_m');
		$creator_id = $this->input->post('creator_id');
		$creator_status = $this->input->post('creator_status');
		if($creator_status == 1){
			$changed_status = "0";
		}else if($creator_status == 0){
			$changed_status = "1";
		}
		$update_array = array('creator_status' => $changed_status);
		$update_crew = $this->admin_listing_creator_m->update_creator($creator_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $creator_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_creator.php */
/* Location: ./application/controllers/Admin_listing_creator.php */