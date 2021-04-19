<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	
	public function getAllOrders(){
                        $this->db->order_by('ID','desc');
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

	public function setStatus($order_ID,$code){ 
		// code = 1 for delivered and code = 0 for pending and code = 2 for dispatched

		$this->db->set('Status',$code);
		$this->db->where('EncryptedId', $order_ID);
		$this->db->update('order');
	}

	public function getOrderDetails($order_ID){


		$this->db->where('EncryptedId', $order_ID);
		$query = $this->db->get('order');
		$OrderDetail = [];
		if ($query->num_rows()) {

				$cartID = $query->row()->CartID;

				$CI =&get_instance();
				$CI->load->model('Cart_Model');
				$cart_items = $CI->Cart_Model->getCartsByOrders($cartID);
				$OrderDetail = $query->result_array();
				$OrderDetail[0]["CartProducts"] = $cart_items;

				$this->load->model('Coupon');
				if($couponCode = $this->Coupon->getCouponCodeByOrderID($OrderDetail[0]['ID']));
				{
					$OrderDetail[0]["CouponCode"] = $couponCode;
				}
				return $OrderDetail[0];
			# code...
		}else{
			return FALSE;
		}

	}

	public function orderHistory($customer_ID){

		$CI =&get_instance();
		$CI->load->model('Customer');
	 	$this->db->where('CustomerID', $CI->Customer->getCustomerID($customer_ID));
        $this->db->order_by('ID','desc');
	 	$query = $this->db->get('order');
		if ($query->num_rows()) {

			return $query->result_array();
		}else{
			return FALSE;
		}

	}

	public function addAnOrder($customer_ID,$cart_ID,$address,$contact_NO,$used_points,$orignal_points,$orderDATE , $orderTIME , $deliveryCharges,$coupon_DISCOUNT,$coupon_CODE){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s %a';
		$time = now('Asia/Karachi');

		$this->db->set('CartID',$cart_ID); 
		$this->db->set('CustomerID', $customer_ID);
		$this->db->set('Status', 0);
		$this->db->set('ReceiveTime',mdate($datestring, $time));
		$this->db->set('LoyaltyPointUse',$used_points);
		$this->db->set('CouponDiscountAmount',$coupon_DISCOUNT);
		$this->db->set('Address',$address);
		$this->db->set('OrderDate',$orderDATE);
		$this->db->set('OrderTime',$orderTIME);
		$this->db->set('DeliveryCharges',$deliveryCharges);
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

		if($coupon_DISCOUNT){

		$CI->load->model('Coupon');
		$CI->Coupon->setCouponUsed($coupon_CODE,$customer_ID,$inserted_id);
			
		}

		return $inserted_id+124;
	}

        public function totalViewed(){

		$this->db->where('Viewed', 0);
		$query = $this->db->get('order');
		return $query->num_rows();
	}

	public function markAllAsRead(){
		$this->db->set('Viewed',1);
		$this->db->where('Viewed',0);
		$this->db->update('order');
	}

	public function markAllAsUnRead(){
		$this->db->set('Viewed',0);
		$this->db->where('Viewed',1);
		$this->db->update('order');
	}

}

/* End of file Order.php */
/* Location: ./application/models/Order.php */