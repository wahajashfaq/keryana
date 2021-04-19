<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model {


	public function getOrderNumber($customer_ID){

	  	$this->db->where('CustomerID', $this->getCustomerID($customer_ID));
	  	$query = $this->db->get('order');

	  	if ($query->num_rows()) {
			return true;
		}else{
			return false;
		}

	}

	public function getAllCustomers()
	{
		$this->db->where('Visibility', 1);
		return $this->db->get('customers')->result_array();
	}

	public function getProfileInfo($customer_ID){

		$this->db->where('EncryptedId', $customer_ID);
		$query = $this->db->get('customers');


		if ($query->num_rows()) {
			/*echo "<pre>";
			print_r($query->result_array());
			echo "</pre>";*/
			return $query->result_array();

		}
	}



	public function getCustomerID($enc_id){  // Where EncryptedID is given

			$this->db->where('EncryptedId',$enc_id);
			$query = $this->db->get('customers');

			if($query->num_rows()){ 
				return $query->row()->ID;
			}	
			else {
				return FALSE;
			}		
	}


	public function setLastLoginTime($customer_ID){


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');


		$this->db->set('LastLogin', mdate($datestring, $time));
		$this->db->where('EncryptedId', $customer_ID);
		$this->db->update('customers');
	}


	public function updateLoyaltyPoints($customer_ID, $used_points,$original_points){

		$this->db->where('ID', $customer_ID);
		$this->db->set('LoyaltyPoints',$original_points-$used_points);
		$this->db->update('customers');

	}


	public function verifyCustomer($userID , $confirmationCode){

		$this->db->where('EncryptedId', $userID);
		$this->db->where('ConfirmCode', $confirmationCode);
		$this->db->where('Visibility', 0);
		$this->db->where('ConfirmStatus', 0);
		$query = $this->db->get('customers');

		if ($query->num_rows()) {


			$this->db->set('ConfirmStatus', 1);
			$this->db->set('Visibility', 1); 
			$this->db->where('EncryptedId', $userID);
			$this->db->update('customers');
			return TRUE;
		}else{
			return FALSE;
		}


	}

	public function signup($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		

		$this->db->set('FirstName', $post_data["fname"]); 
		$this->db->set('LastName', $post_data["lname"]); 
		$this->db->set('Email', $post_data["email"]); 
		$this->db->set('EncryptedId', md5($post_data["email"])); 
		$this->db->set('FacebookId', ''); 
		$this->db->set('Password', md5($post_data["pass"]));
		$this->db->set('City', '');
		$this->db->set('IpAddress', $this->input->ip_address());
		$this->db->set('DateOfCreation', mdate($datestring, $time));
		$this->db->set('LastLogin', mdate($datestring, $time));
		$this->db->set('Mobile', '');
		$this->db->set('Address', '');
		$this->db->set('ZipCode', ''); 
		$this->db->set('LoyaltyPoints', 25); 
		$this->db->set('Visibility', 1); 

		$this->db->insert('customers'); 
		echo $this->db->insert_id();

		return md5($post_data["email"]);
		/*
		print_r($post_data);
		exit;
		echo "Sign up Model";*/

	}


	public function getNameLetters($customer_ID){

		$this->db->where('EncryptedId', $customer_ID);
		$query = $this->db->get('customers');

		if ($query->num_rows()) {
			# code...
			//return $query->row()->FirstName[0].$query->row()->LastName[0];

			return ($query->row()->ID)+124;
		}

	}


	public function login($post_data){

	
		$this->db->where('Visibility',1);
		$this->db->where('Email', $post_data["l_email"]); 
		$this->db->where('Password', md5($post_data["l_pass"])); 
		$query = $this->db->get('customers');

		
		if($query->num_rows()){ // Successfully Logged in
			//print_r($query->row());
			return $query->row()->EncryptedId;
		}	
		else {
			return FALSE;
		}	
	}

	


public function fb_signup($email,$firstname,$lastname,$fb_id){



	$this->db->where('Email',$email);
	$query = $this->db->get('customers');

		if($query->num_rows()==0){	// Acount doesn't exists


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');

		
		$this->db->set('FirstName', $firstname); 
		$this->db->set('LastName', $lastname); 
		$this->db->set('Email', $email); 
		$this->db->set('EncryptedId', md5($email)); 
		$this->db->set('FacebookId', $fb_id); 
		$this->db->set('Password', '');
		$this->db->set('City', '');
		$this->db->set('IpAddress', $this->input->ip_address());
		$this->db->set('DateOfCreation', mdate($datestring, $time));
		$this->db->set('LastLogin', mdate($datestring, $time));
		$this->db->set('Mobile', '');
		$this->db->set('Address', '');
		$this->db->set('ZipCode', ''); 
		$this->db->set('LoyaltyPoints', 25); 
		$this->db->set('Visibility', 1); 

		$this->db->insert('customers'); 

		echo "Account Created";

		return md5($email);

	} else {
		return $query->row()->EncryptedId;
	}

}


//------------- Update Data
	public function updateProfile($post_data,$customer_ID){



		$this->db->set('Town',$post_data["town"]);
		$this->db->set('HouseNo',$post_data["house_no"]);
		$this->db->set('NearbyLocation',$post_data["nearby_location"]);
		$this->db->set('Block',$post_data["block"]);


		if($post_data["city"]!=''){
			$this->db->set('City', $post_data["city"]);
		}

		if($post_data["contact_number"]!=''){
			$this->db->set('Mobile', $post_data['contact_number']);
		}

		
			
			$this->db->where('EncryptedId', $customer_ID);
			$this->db->update('customers');

	}

}

/* End of file customer.php */
/* Location: ./application/models/customer.php */