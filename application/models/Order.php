<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	
	public function getAllOrders(){

			$query = $this->db->get('order');
			if($query->num_rows()){
				return $query->result_array();
			}else {
				return FALSE;
			}
	}	

	public function cancelOrder(){
		// Status => 2 for CancelOrder
	}

	public function deliverOrder(){
		// Status =? 1
	}

	public function orderHistory($customer_ID){

		$CI =&get_instance();
		$CI->load->model('Customer');

	 	$this->db->where('CustomerID', $CI->Customer->getCustomerID($customer_ID));
	 	$query = $this->db->get('order');
		if ($query->num_rows()) {

			return $query->result_array();
		}else{
			return FALSE;
		}

	}

	public function addAnOrder($customer_ID,$cart_ID,$address,$contact_NO,$used_points,$orignal_points){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');

		$this->db->set('CartID',$cart_ID); 
		$this->db->set('CustomerID', $customer_ID);
		$this->db->set('Status', 0);
		$this->db->set('ReceiveTime',mdate($datestring, $time));
		$this->db->set('LoyaltyPointUse',$used_points);
		$this->db->set('Address',$address);
		$this->db->set('MobileNumber',$contact_NO);

		$this->db->insert('order'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('order');


		$CI =&get_instance();
		$CI->load->model('Cart_Model');
		$CI->Cart_Model->checkout($cart_ID);


		$CI->load->model('Customer');
		$CI->Customer->updateLoyaltyPoints($customer_ID,$used_points,$orignal_points);

		echo "Added";
	}

}

/* End of file Order.php */
/* Location: ./application/models/Order.php */