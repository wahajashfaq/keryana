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

			/*echo "<pre>";
			print_r($query->result_array());
			echo "</pre>";*/

			return $query->result_array();

		}	
		else {
			return FALSE;
		}

	}
	public function getSingleProduct($product_ID){

		$this->db->select('products.*,products.Name as PNAME');
		$this->db->where('EncryptedId', $product_ID);
		$query = $this->db->get('products');

		if($query->num_rows()){ 

			if($query->row()->BrandID){
				$this->db->select('products.*,products.Name as PNAME,brands.Name as BNAME');
				$this->db->where('products.Visibility',1);
				$this->db->where('products.EncryptedId',$product_ID)
				->from('products')
				->join('brands', 'brands.ID = products.BrandID');
				$query2 = $this->db->get();

				if($query2->num_rows()){ 

					echo "<pre>";
					print_r($query2->result_array());
					echo "</pre>";

					return $query2->result_array();

				}	
				else {
					return FALSE;
				}
			}

			return $query->result_array();
		}	
		else {
			return FALSE;
		}

	}


	public function getNewArrivals(){

		$this->db->where('Visibility', 1);
		$this->db->order_by("ID", "desc"); $this->db->limit(10);
		$query = $this->db->get('products');

		if($query->num_rows()){
			return $query->result_array();
		}else{
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

	public function updateProduct($post_data,$image_url){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		
		$CI =&get_instance();
		$CI->load->model('Categories');


		$this->db->where('Name', $post_data["product_name"]); 
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('BrandID', '');
		$this->db->set('Details','');
		$this->db->set('Image',$image_url);
		$this->db->set('Visibility', 1); 

		$this->db->update('products'); 

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


	public function getProductByCategoryID($type,$category_ID){


		$CI =&get_instance();
		$CI->load->model('Categories');


		if($type=="First"){

			$this->db->where('FirstCategoryID',$CI->Categories->getFirstCategoryID($category_ID));	

		}else if($type=="Second"){
			$this->db->where('SecondCategoryID',$CI->Categories->getSecondCategoryID($category_ID));	

		}else if($type=="Third"){
			$this->db->where('ThirdCategoryID',$CI->Categories->getThirdCategoryID($category_ID));	

		}else {

		}

		$this->db->where('Visibility',1);
		$query = $this->db->get('products');
		if($query->num_rows()){ 

			return $query->result_array();
		}	
		else {
			return FALSE;
		}		

	}



	public function getThirdCategoryParent($category_ID){


			$this->db->select('SecondCategoryID');
			$this->db->where('Visibility',1);
			$this->db->where('EncryptedId',$category_ID);
			$query = $this->db->get('third_category');

			if($query->num_rows()){ 

				$parentID =  $query->row()->SecondCategoryID;
				$this->db->where('Visibility',1);
				$this->db->where('ID',$parentID);
				$query = $this->db->get('second_category');
				

				if($query->num_rows()){ 

					return $query->result_array();
				}	
				else {
					return FALSE;
				}
			}

	}

	public function getCategoriesTypes($type,$category_ID){


		$CI =&get_instance();
		$CI->load->model('Categories');


		if($type=="First"){

			$this->db->where('Visibility',1);
			$this->db->where('FirstCategoryID',$CI->Categories->getSecondCategoryID($category_ID));
			$query = $this->db->get('second_category');

			if($query->num_rows()){ 

				return $query->result_array();
			}	
			else {
				return FALSE;
			}

		}else if($type=="Second"){


			$this->db->where('Visibility',1);
			$this->db->where('SecondCategoryID',$CI->Categories->getSecondCategoryID($category_ID));
			$query = $this->db->get('third_category');

			if($query->num_rows()){ 

				return $query->result_array();
			}	
			else {
				return FALSE;
			}

		}else if($type=="Third"){

			$this->db->select('SecondCategoryID');
			$this->db->where('Visibility',1);
			$this->db->where('EncryptedId',$category_ID);
			$query = $this->db->get('third_category');

			if($query->num_rows()){ 
				$parentID =  $query->row()->SecondCategoryID;

				$this->db->where('Visibility',1);
				$this->db->where('SecondCategoryID',$parentID);
				$query = $this->db->get('third_category');

				if($query->num_rows()){ 

					return $query->result_array();
				}	
				else {
					return FALSE;
				}

			}	
			else {
				return FALSE;
			}

		}else {

		}

		$this->db->where('Visibility',1);
		$query = $this->db->get('products');
		if($query->num_rows()){ 

			return $query->result_array();
		}	
		else {
			return FALSE;
		}		

	}



}

/* End of file product.php */
/* Location: ./application/models/product.php */