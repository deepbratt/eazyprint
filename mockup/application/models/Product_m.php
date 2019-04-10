<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_m extends CI_Model {
	
	/* FOR SIDEBAR STARTS */
	public function get_all_categories()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_brandzz($category_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		if($category_id != ''){
			$this->db->where('products.product_category_id',$category_id);
		}
		$this->db->where('raw_materials.raw_brand !=', "");
		$this->db->group_by('products.raw_id');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_modelzz($brand_name)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		if($brand_name != ''){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		$this->db->group_by('products.raw_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_size($category_id,$brand_name)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		if($category_id != ''){
			$this->db->where('raw_materials.raw_category',$category_id);
		}
		if($brand_name != ''){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		$this->db->where('raw_materials.raw_size !=', "");
		$this->db->group_by('raw_materials.raw_size');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_shape($category_id,$brand_name,$size)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		if($category_id != ''){
			$this->db->where('raw_materials.raw_category',$category_id);
		}
		if($brand_name != ''){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		if($size != ''){
			$this->db->where('raw_materials.raw_size',$size);
		}
		$this->db->where('raw_materials.raw_shapetype !=', "");
		$this->db->group_by('raw_materials.raw_shapetype');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_colorz($category_id,$brand_name,$size,$shape) 
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		if($category_id != ''){
			$this->db->where('raw_materials.raw_category',$category_id);
		}
		if($brand_name != ''){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		if($size != ''){
			$this->db->where('raw_materials.raw_size',$size);
		}
		if($shape != ''){
			$this->db->where('raw_materials.raw_shapetype',$shape);
		}
		$this->db->where('raw_materials.raw_color_code !=', "");
		$this->db->group_by('raw_materials.raw_color_code');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_material_type_data($category_id,$brand_name,$size,$shape,$color) 
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		if($category_id != ''){
			$this->db->where('raw_materials.raw_category',$category_id);
		}
		if($brand_name != ''){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		if($size != ''){
			$this->db->where('raw_materials.raw_size',$size);
		}
		if($shape != ''){
			$this->db->where('raw_materials.raw_shapetype',$shape);
		}
		if($color != ''){
			$this->db->where('raw_materials.raw_color_code',$color);
		}
		$this->db->where('raw_materials.raw_material_type !=', "");
		$this->db->group_by('raw_materials.raw_material_type');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}
	/* FOR SIDEBAR ENDS */

	public function get_all_products($limit, $start, $cat_id,$brand_name,$size,$shape,$color,$material_type)
	{
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_image', 'product_image.product_id = products.product_id');
		$this->db->join('category', 'category.cat_id = products.product_category_id');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		
		if($cat_id != ""){
			$this->db->where('products.product_category_id',$cat_id);
		}
		if($brand_name != ""){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		if($size != ""){
			$this->db->where('raw_materials.raw_size',$size);
		}
		if($shape != ""){
			$this->db->where('raw_materials.raw_shapetype',$shape);
		}
		if($color != ""){
			$this->db->where('raw_materials.raw_color_code',$color);
		}
		if($material_type != ""){
			$this->db->where('raw_materials.raw_material_type',$material_type);
		}

		$this->db->order_by('category_name');
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
		return $query->result();
	}
	
	/*pagination */
	/*public function get_current_page_records($limit, $start, $cond) 
    {
        $this->db->limit($limit, $start);
		$this->db->where($cond);
        $query = $this->db->get("products");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }*/
     
    public function get_total($cat_id,$brand_name,$size,$shape,$color,$material_type) 
    {
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_image', 'product_image.product_id = products.product_id');
		$this->db->join('category', 'category.cat_id = products.product_category_id');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		
		if($cat_id != ""){
			$this->db->where('products.product_category_id',$cat_id);
		}
		if($brand_name != ""){
			$this->db->where('raw_materials.raw_brand',$brand_name);
		}
		if($size != ""){
			$this->db->where('raw_materials.raw_size',$size);
		}
		if($shape != ""){
			$this->db->where('raw_materials.raw_shapetype',$shape);
		}
		if($color != ""){
			$this->db->where('raw_materials.raw_color_code',$color);
		}
		if($material_type != ""){
			$this->db->where('raw_materials.raw_material_type',$material_type);
		}
		$query = $this->db->get();
        return $query->num_rows();
    }
	
	/* pagination */

	public function fetch_pro_image($pro_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$pro_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_name_category($category)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$category);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_supplier_service($more_service_data)
	{
	  $query = $this->db->update_batch('supplier_service',$more_service_data,'supplier_service_id');
	  return true;
	}
}
