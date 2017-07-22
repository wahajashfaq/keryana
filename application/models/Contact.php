<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {

	
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

		print_r($post_data);
		exit;
		echo "Sign up Model";
	}

}

/* End of file Contact.php */
/* Location: ./application/models/Contact.php */