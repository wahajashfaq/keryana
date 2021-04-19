<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {

	
	public function getAllContacts(){

		$this->db->where('Visibility', 1);
		$this->db->order_by('ID','desc');
		$query = $this->db->get('contact_us');
		if($query->num_rows()){
			return $query->result_array();
		}else {
			return FALSE;
		}
	}

	public function reply($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		


		$this->db->set('Responded',1);
		$this->db->set('ResponseDate',mdate($datestring, $time));
		$this->db->set('Response',$post_data['reply_message']);
		$this->db->where('EncryptedId', $post_data['messageID']);
		$this->db->update('contact_us');
	}

	public function getSingleContact($ID){

		$this->db->where('Visibility', 1);
		$this->db->where('EncryptedId', $ID);
		$query = $this->db->get('contact_us');
		if($query->num_rows()){
			return $query->result_array();
		}else {
			return FALSE;
		}
	}
	public function addContactData($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('Email', $post_data["c_email"]); 
		$this->db->set('ContactNumber', $post_data["c_number"]); 
		$this->db->set('Subject', $post_data["c_subject"]); 
		$this->db->set('Query', $post_data["c_query"]); 
		$this->db->set('IpAddress', $this->input->ip_address());
		$this->db->set('ContactDate', mdate($datestring, $time));
		$this->db->set('Responded', 0); 
		$this->db->set('Visibility', 1); 

		$this->db->insert('contact_us'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('contact_us');

	}

public function totalViewed(){

		$this->db->where('Viewed', 0);
		$query = $this->db->get('contact_us');
		return $query->num_rows();
	}

	public function markAllAsRead(){
		$this->db->set('Viewed',1);
		$this->db->where('Viewed',0);
		$this->db->update('contact_us');
	}

	public function markAllAsUnRead(){
		$this->db->set('Viewed',0);
		$this->db->where('Viewed',1);
		$this->db->update('contact_us');
	}

}

/* End of file Contact.php */
/* Location: ./application/models/Contact.php */