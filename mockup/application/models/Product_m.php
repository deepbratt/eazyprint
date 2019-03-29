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
		$this->db->group_by('products.raw_id');
		$query = $this->db->get();
		return $query->result();
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
	/* FOR SIDEBAR ENDS */

	public function get_all_products()
	{
		$this->db->select('*');
		$this->db->from('products');
		//$this->db->join('product_image', 'product_image.product_id = products.product_id');
		//$this->db->join('category', 'category.cat_id = products.product_category_id');
		//$this->db->where('orders.orders_id',$order_id);
		//$this->db->order_by('category_name');
		$query = $this->db->get();
		return $query->result();
	}
	
	/*pagination */
	public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
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
    }
     
    public function get_total() 
    {
        return $this->db->count_all("products");
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
