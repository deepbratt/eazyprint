<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_design extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_design_m');
		$design_id = $this->uri->segment(2);
		$data['fetch_design_info'] = $this->admin_edit_design_m->fetch_design_info($design_id);
		$data['fetch_all_categories'] = $this->admin_edit_design_m->fetch_categories();
		$data['fetch_all_subcategories'] = $this->admin_edit_design_m->fetch_all_subcategories();
		$this->load->view('admin_edit_design',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_edit_design_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_edit_design_m->ajax_fetch_subcategories($cat_id);
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}

	public function update_design(){
		$this->load->model('admin_edit_design_m');
		$design_id = $this->uri->segment(2);
		$cat_id = $this->input->post('category');
		$subcat_id = $this->input->post('sub_category');
		$designed_by = $this->input->post('designed_by');

		$this->load->library('upload');
	    $dataInfo = array();
	    $files = $_FILES;
	    $cpt = count($_FILES['userfile']['name']);
	    for($i=0; $i<$cpt; $i++){           
	        
	        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
	        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
	        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
	        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
	        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

	        $this->upload->initialize($this->set_upload_options());
	        $this->upload->do_upload();
	        $dataInfo[] = $this->upload->data();
	    }
		for($i=0; $i<$cpt; $i++){
			$records = array(
				'designed_by' => $designed_by,
				'designed_image' => $dataInfo[$i]['file_name'],
				'sub_category_id' => $subcat_id,
				'status' => '1'
			);
			$update_new_designs_info = $this->admin_edit_design_m->update_new_designs_info($records,$design_id);	
		}

		if($update_new_designs_info){
			$this->session->set_flashdata("admin_edit_design_success", "The new design has been update successfully...!");
			redirect('admin_edit_design/'.$design_id.'');
		}else{
			$this->session->set_flashdata("admin_edit_design_failed", "Failed to update new design...!");
			redirect('admin_edit_design/'.$design_id.'');
		}
		
	}

	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = 'uploads/designs';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';

	    return $config;
	}

}

/* End of file Admin_edit_design.php */
/* Location: ./application/controllers/Admin_edit_design.php */