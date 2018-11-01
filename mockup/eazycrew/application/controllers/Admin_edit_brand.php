<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_brand extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_brand_m');
		$brand_id = $this->uri->segment(2);
		$data['brand_fetch'] = $this->admin_edit_brand_m->fetch_brand($brand_id);
		$this->load->view('admin_edit_brand',$data);
	}
	public function ajax_fetch_sub_brand()
	{
		$this->load->model('admin_edit_brand_m');
		$brand_id = $this->input->post('category_id');
		$ajax_fetch_all_brand = $this->admin_edit_brand_m->ajax_fetch_brand($brand_id);
		foreach($ajax_fetch_all_brand AS $each_subcategory)
		{
		?>			
		<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
		<?php } 
	}
	public function edit_brand()
	{
		$this->load->model('admin_edit_brand_m');
		$category_name = $this->input->post('category');
		$sub_category_name = $this->input->post('sub_category');
		$brand_name = $this->input->post('brand_name');
		$brand_code = $this->input->post('brand_code');
		$brand_id = $this->input->post('brand_id');
		$records=array('brand_name'=>$brand_name,'brand_code'=>$brand_code,'sub_category'=>$sub_category_name);
		$update_brand = $this->admin_edit_brand_m->brand_update($records,$brand_id);
		if($update_brand)
		{
			$this->session->set_flashdata("success", "You have successfully updated the brand!");
			redirect('admin_edit_brand/'.$brand_id);	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_brand/'.$brand_id);
		}
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */