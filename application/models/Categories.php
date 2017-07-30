<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Model {


	public function getFirstCategoryID($enc_id){  // Where EncryptedID is given

			$this->db->where('EncryptedId',$enc_id);
			$query = $this->db->get('first_category');

			if($query->num_rows()){ 
				return $query->row()->ID;
			}	
			else {
				return FALSE;
			}		
	}


	public function getSecondCategoryID($enc_id){  // Where EncryptedID is given

			$this->db->where('EncryptedId',$enc_id);
			$query = $this->db->get('second_category');

			if($query->num_rows()){ 
				return $query->row()->ID;
			}	
			else {
				return FALSE;
			}		
	}

	public function getThirdCategoryID($enc_id){  // Where EncryptedID is given

			$this->db->where('EncryptedId',$enc_id);
			$query = $this->db->get('third_category');

			if($query->num_rows()){ 
				return $query->row()->ID;
			}	
			else {
				return FALSE;
			}		
	}


	public function getFirstCategory(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('first_category');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}


	public function getSecondCategory(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('second_category');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}

	public function getThirdCategory(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('third_category');

		
		if($query->num_rows()){ // Successfully Logged in
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}

	public function addFirstCategory($post_data){



		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('Name', $post_data["category_name"]); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('Visibility', 1); 

		$this->db->insert('first_category'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('first_category');

		print_r($post_data);
		exit;
		echo "Category Model";

	}

	public function addSecondCategory($post_data){


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('Name', $post_data["category_name"]); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('FirstCategoryID', $this->getFirstCategoryID($post_data["category_id"]));
		$this->db->set('Visibility', 1); 

		$this->db->insert('second_category'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('second_category');

		print_r($post_data);
		exit;
		echo "Category Model";

	}

	public function addThirdCategory($post_data){


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('Name', $post_data["category_name"]); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('SecondCategoryID', $this->getSecondCategoryID($post_data["category_id"]));
		$this->db->set('Visibility', 1); 

		$this->db->insert('third_category'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('third_category');

		print_r($post_data);
		exit;
		echo "Category Model";

	}


	public function updateFirstCategory($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');


		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('Name', $post_data["updated_value"]); // New Value
		$this->db->where('EncryptedId', $post_data["category_id"]); 
		$this->db->update('first_category');

	}
	public function updateSecondCategory($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');


		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('Name', $post_data["updated_value"]); // New Value
		$this->db->where('EncryptedId', $post_data["category_id"]); 
		$this->db->update('second_category');

	}
	public function updateThirdCategory($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');


		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('Name', $post_data["updated_value"]); // New Value
		$this->db->where('EncryptedId', $post_data["category_id"]); 
		$this->db->update('third_category');

	}

	public function deleteFirstCategory($post_data){


		$this->db->set('Visibility', 0); 
		$this->db->where('EncryptedId',$post_data["category_id"]);
		$this->db->update('first_category');

		echo "OKAY";
		exit;
	}

	public function deleteSecondCategory($post_data){


		$this->db->set('Visibility', 0); 
		$this->db->where('EncryptedId',$post_data["category_id"]);
		$this->db->update('second_category');
	}

	public function deleteThirdCategory($post_data){


		$this->db->set('Visibility', 0); 
		$this->db->where('EncryptedId',$post_data["category_id"]);
		$this->db->update('third_category');
	}


	// _________________________________________________________________
	public function getFirstCategoryData($enc_id){

		$this->db->where('Visibility',1);
		$this->db->where('EncryptedId',$enc_id);
		$query = $this->db->get('first_category');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}


	public function getSecondCategoryData($enc_id){

		$this->db->where('Visibility',1);
		$this->db->where('FirstCategoryID', $this->getFirstCategoryID($enc_id));
		$query = $this->db->get('second_category');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}

	public function getThirdCategoryData($enc_id){

		$this->db->where('Visibility',1);
		$this->db->where('SecondCategoryID', $this->getSecondCategoryID($enc_id));
		$query = $this->db->get('third_category');

		
		if($query->num_rows()){ // Successfully Logged in
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}


	public function setFirstCategoryImage($category_id,$image){

		$this->db->where('EncryptedId',$category_id);
		$this->db->set('Image',$image);
		$this->db->update('first_category');


	}
	public function setSecondCategoryImage($category_id,$image){


		
		$this->db->where('EncryptedId',$category_id);
		$this->db->set('Image',$image);
		$this->db->update('second_category');

	}
	public function setThirdCategoryImage($category_id,$image){

		
		$this->db->where('EncryptedId',$category_id);
		$this->db->set('Image',$image);
		$this->db->update('third_category');

	}
}

/* End of file Categories.php */
/* Location: ./application/models/Categories.php */