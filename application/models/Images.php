<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Model {



	public function setBannerOne($image_url){


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('EncryptedId', ''); 
		$this->db->set('Name', 'Banner One'); 
		$this->db->set('ImageUrl', $image_url); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('Active','1');
		$this->db->set('Visibility', '1');

		$this->db->insert('banners'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('banners');

		echo "Added";
	}	

	public function setBannerTwo($image_url){


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('EncryptedId', ''); 
		$this->db->set('Name', 'Banner Two'); 
		$this->db->set('ImageUrl', $image_url); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('Active','1');
		$this->db->set('Visibility', '1');

		$this->db->insert('banners'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('banners');

		echo "Added";

	}

	public function setSliderImages($image_number){

	}


	public function getBannerOne(){
		$query = $this->db->get('banners');
		echo $query->num_rows();

	}	

	public function getBannerTwo(){

	}

	public function getSliderImages(){

	}

}

/* End of file Images.php */
/* Location: ./application/models/Images.php */