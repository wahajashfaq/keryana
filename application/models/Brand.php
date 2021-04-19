<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Model {


	public function getBrandID($enc_id){  // Where EncryptedID is given

			$this->db->where('EncryptedId',$enc_id);
			$query = $this->db->get('brands');

			if($query->num_rows()){ 
				return $query->row()->ID;
			}	
			else {
				return FALSE;
			}		
	}


	public function getAllBrands(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('brands');

		if($query->num_rows()){ 
			return $query->result_array();
		}else {
			return FALSE;
		}
	}	

	public function getBrandNameByID($brand_ID){


		$this->db->where('Visibility',1);
		$this->db->where('ID',$brand_ID);
		$query = $this->db->get('brands');

		if($query->num_rows()){ 
			return $query->row()->Name;
		}else {
			return FALSE;
		}
	}

	public function addNewBrand($brand_name,$image_url){

		$this->db->set('Name',$brand_name);
		$this->db->set('ImageUrl',$image_url);
		$this->db->set('Visibility',1);
		$this->db->insert('brands');

		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('brands');

		return md5($inserted_id);
	}

	public function getBrandIDByName($brand_name,$image_url){

		$this->db->select('EncryptedId');
		$this->db->where('Name', $brand_name);
		$query = $this->db->get('brands');

		if ($query->num_rows()) {
			# code...
			return $query->row()->EncryptedId;
		}else {
			return $this->addNewBrand($brand_name,$image_url);
		}
	}


	public function deleteBrand($brand_id){

	
		$this->db->where('EncryptedId',$brand_id);
		$this->db->set('Visibility',1);
		$this->db->update('brands');
	}

}

/* End of file Brand.php */
/* Location: ./application/models/Brand.php */