<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeryanaProduct extends CI_Model {	


	public function getAllProduct(){


	}

	public function getProductID($enc_id){  // Where EncryptedID is given

			$this->db->where('EncryptedId',$enc_id);
			$query = $this->db->get('products');

			if($query->num_rows()){ 
				return $query->row()->ID;
			}	
			else {
				return FALSE;
			}		
	}

	public function getProductUnit($product_ID){

		$this->db->where('ProductID',$this->getProductID($product_ID));
		$query = $this->db->get('product_unit');

		if($query->num_rows()){ 

				echo "<pre>";
				print_r($query->result_array());
				echo "</pre>";

				return $query->result_array();

			}	
			else {
				return FALSE;
			}

	}
	public function getSingleProduct($product_ID){

			$this->db->select('products.*,products.Name as PNAME,brands.Name as BNAME');
			$this->db->where('products.Visibility',1);
			$this->db->where('products.EncryptedId',$product_ID)
						->from('products')
			 			->join('brands', 'brands.ID = products.BrandID');
			$query = $this->db->get();

			if($query->num_rows()){ 

				echo "<pre>";
				print_r($query->result_array());
				echo "</pre>";

				return $query->result_array();

			}	
			else {
				return FALSE;
			}


	}


	public function searchProduct(){

	}


	public function addProductPrice_Unit($post_data,$product_ID){

		for ($i=1; $i <= $post_data["unit"] ; $i++) { 
	 		# code...
			$unitName = "unit$i";
			$priceName = "price$i";

			$this->db->set('ProductID', $product_ID); 
			$this->db->set('Unit',$post_data[$unitName]);
			$this->db->set('Price',$post_data[$priceName]);
			$this->db->set('Visibility', 1); 
			$this->db->insert('product_unit');
		}

	}
	public function addNewProduct($post_data,$image_url){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		
		$CI =&get_instance();
    	$CI->load->model('Categories');
    	$CI->load->model('Brand');
     	

		$this->db->set('Name', $post_data["product_name"]); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('FirstCategoryID',$CI->Categories->getFirstCategoryID($post_data["first_category_type"]));
		$this->db->set('SecondCategoryID',$CI->Categories->getSecondCategoryID($post_data["second_category_type"] ));
		$this->db->set('ThirdCategoryID',$CI->Categories->getThirdCategoryID($post_data["third_category_type"] ));
		$this->db->set('BrandID',$CI->Brand->getBrandID($post_data["brand_id"]) );
		$this->db->set('Details',$post_data["product_detail"]);
		$this->db->set('Image',$image_url);
		$this->db->set('Visibility', 1); 

		$this->db->insert('products'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('products');

		$this->addProductPrice_Unit($post_data,$inserted_id);
	}	

}

/* End of file product.php */
/* Location: ./application/models/product.php */