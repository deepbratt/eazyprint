<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->model('product_m');
		//print_r($this->session->userdata['product_sidebar']);

		if(!empty($this->session->userdata['product_sidebar'])){
			if(isset($this->session->userdata['product_sidebar']['cat_id']) && $this->session->userdata['product_sidebar']['cat_id'] != ""){
				 $cat_id = $this->session->userdata['product_sidebar']['cat_id'];
			}else{
				 $cat_id = "";
			}
			if(isset($this->session->userdata['product_sidebar']['brand_name']) && $this->session->userdata['product_sidebar']['brand_name'] != ""){
				 $brand_name = $this->session->userdata['product_sidebar']['brand_name'];
			}else{
				 $brand_name = "";
			}
			if(isset($this->session->userdata['product_sidebar']['pro_type']) && $this->session->userdata['product_sidebar']['pro_type'] != ""){
				 $pro_type = $this->session->userdata['product_sidebar']['pro_type'];
			}else{
				 $pro_type = "";
			}
			if(isset($this->session->userdata['product_sidebar']['size']) && $this->session->userdata['product_sidebar']['size'] != ""){
				 $size = $this->session->userdata['product_sidebar']['size'];
			}else{
				 $size = "";
			}
			if(isset($this->session->userdata['product_sidebar']['shape']) && $this->session->userdata['product_sidebar']['shape'] != ""){
				 $shape = $this->session->userdata['product_sidebar']['shape'];
			}else{
				 $shape = "";
			}
			if(isset($this->session->userdata['product_sidebar']['color']) && $this->session->userdata['product_sidebar']['color'] != ""){
				 $color = $this->session->userdata['product_sidebar']['color'];
			}else{
				 $color = "";
			}
			if(isset($this->session->userdata['product_sidebar']['material_type']) && $this->session->userdata['product_sidebar']['material_type'] != ""){
				 $material_type = $this->session->userdata['product_sidebar']['material_type'];
			}else{
				 $material_type = "";
			}
        }else{
			$cat_id = "";
            $brand_name = "";
            $pro_type = "";
			$size = "";
			$shape = "";
			$color = "";
			$material_type = "";
		}

		/* pagination */

        $data = array();
        $limit_per_page = 9;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->product_m->get_total($cat_id,$brand_name,$pro_type,$size,$shape,$color,$material_type);

		$data['records_in_total'] = $total_records;
        if ($total_records > 0) 
        {
			$data['products'] = $this->product_m->get_all_products($limit_per_page, $start_index,$cat_id,$brand_name,$pro_type,$size,$shape,$color,$material_type);
			
            $config['base_url'] = base_url() . 'product/paging';
			$config['first_url'] = '1';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
			$config['full_tag_open'] = '<ul class="pagination mg-b-0">'; 
			$config['full_tag_close'] = '</ul>';
			$config['first_tag_open'] = "<li class='page-item'>";
			$config['first_tag_close'] = "</li>";
			$config['prev_tag_open'] = "<li class='page-item'>";
			$config['prev_tag_close'] = "</li>";
			$config['next_tag_open'] = "<li class='page-item'>";
			$config['next_tag_close'] = "</li>";
			$config['last_tag_open'] = "<li class='page-item'>";
			$config['last_tag_close'] = "</li>";
			$config['cur_tag_open'] = "<li class='page-item active'><a class='page-link' href=''>"; 
			$config['cur_tag_close'] = "</a></li>";
			$config['num_tag_open'] = "<li class='page-item'>";
			$config['num_tag_close'] = "</li>";
			$config['attributes'] = array('class' => 'page-link');
            $this->pagination->initialize($config);       
            $data["links"] = $this->pagination->create_links();
        }
        
		/* pagination ends */
		$this->load->view('product',$data);
	}

	public function ajax_cat_data(){
		$this->load->model('product_m');
		$category_id = $this->input->post('cat_id');
		$fetch_brand = $this->product_m->fetch_brandzz($category_id);
		?>
			<option value="" selected disabled> Brand </option>
		<?php
			foreach($fetch_brand AS $each_brand){
		?>
			<option value="<?php echo $each_brand->raw_brand?>"><?php echo $each_brand->raw_brand?></option>
		<?php
			}
	}

	public function ajax_brand_data(){
		$this->load->model('product_m');
		$brand_name = $this->input->post('brand_name');
		$fetch_model = $this->product_m->fetch_modelzz($brand_name);
		?>
			<option value="" selected disabled> Model </option>
		<?php
			foreach($fetch_model AS $each_model){
		?>
			<option value="<?php echo $each_model->raw_name?>"><?php echo $each_model->raw_name;?></option>
		<?php
			}
	}

	public function ajax_sidebar_filter(){
		$this->load->model('product_m');
		$category_id = $this->input->post('cat_id');
		$brand_name = $this->input->post('brand_name');
		$pro_type_name = $this->input->post('pro_type_name');
		$size = $this->input->post('size');
		$shape = $this->input->post('shape');
		$color = $this->input->post('color');
		$material_type = $this->input->post('material_type');

		if($category_id == ""){
			$category_id = $this->session->userdata['product_sidebar']['cat_id'];
		}
		if(isset($this->session->userdata['product_sidebar']['cat_id']) && $this->session->userdata['product_sidebar']['cat_id'] == $category_id){
			if($brand_name == ""){
				$brand_name = $this->session->userdata['product_sidebar']['brand_name'];
			}
			if($pro_type_name == ""){
				$pro_type_name = $this->session->userdata['product_sidebar']['pro_type'];
			}
			if($size == ""){
				$size = $this->session->userdata['product_sidebar']['size'];
			}
			if($shape == ""){
				$shape = $this->session->userdata['product_sidebar']['shape'];
			}
			if($color == ""){
				$color = $this->session->userdata['product_sidebar']['color'];
			}
			if($material_type == ""){
				$material_type = $this->session->userdata['product_sidebar']['material_type'];
			}
		}else{
			$brand_name = "";
			$pro_type_name = "";
			$size = "";
			$shape = "";
			$color = "";
			$material_type = "";
		}

		$sidebar_filter = array(
			"cat_id" => $category_id,
			"brand_name" => $brand_name,
			"pro_type" => $pro_type_name,
			"size" => $size,
			"shape" => $shape,
			"color" => $color,
			"material_type"=> $material_type
		);
		$this->session->set_userdata('product_sidebar', $sidebar_filter);

		return $sidebar_filter;
	}

	public function clear_all(){
		unset($_SESSION['product_sidebar']);
		redirect('product');
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */