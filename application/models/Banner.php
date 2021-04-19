<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Model {


	public function getBanners(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('banners');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}		
	}
	public function getSlidingBanners(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('sliding_banners');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}

	public function getEnableSlidingBanners(){

		$this->db->where('Visibility',1);
		$this->db->where('Active',1);
		$query = $this->db->get('sliding_banners');
		
		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}		
	}

	public function addSlidingBanner($image_url){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('EncryptedId', ''); 
		$this->db->set('Name', 'Sliding Banner'); 
		$this->db->set('ImageUrl', $image_url); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('Active','1');
		$this->db->set('Visibility', '1');

		$this->db->insert('sliding_banners'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('sliding_banners');


	}

	public function setStatus($banner_ID,$status){

		$this->db->where('EncryptedId', $banner_ID);
		$this->db->set('Active',$status);
		$this->db->update('sliding_banners');
	}

	public function updateSlidingBanner($image_url,$banner_ID){


		$this->db->where('EncryptedId', $banner_ID);
		$this->db->set('Active','1');
		$this->db->set('ImageUrl', $image_url); 
		$this->db->update('sliding_banners');
	}

	public function setBannerURL($URL,$banner_NAME){

		$this->db->set('PageUrl',$URL);
		$this->db->where('Name', $banner_NAME);
		$this->db->update('banners');

	}


}

/* End of file Banner.php */
/* Location: ./application/models/Banner.php */