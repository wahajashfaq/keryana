<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Model {


	public function getAllAvailableCoupon(){

		$this->db->where('Status', TRUE);
		$this->db->where('Visibility',1);
		$query = $this->db->get('coupon');

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}
	}


	public function getAllCoupon(){

		$this->db->where('Visibility',1);
		$query = $this->db->get('coupon');

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}
	}

	
	public function updateCouponStatus($coupon_ID,$coupon_Status){

		$this->db->set('Status',$coupon_Status);
		$this->db->where('ID',$coupon_ID);
		$this->db->update('coupon');
	}

	public function addNewCoupon($post_data){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');


		$this->db->set('Code',$post_data['coupon_code']);
		$this->db->set('Type','overall');
		$this->db->set('Details',$post_data['coupon_details']);
		$this->db->set('DiscountType',$post_data['offer_type']);
		$this->db->set('DiscountAmount',$post_data['offer_amount']);
		$this->db->set('MinimumAmount',$post_data['min_amount']);
		$this->db->set('CreationDate',mdate($datestring, $time));
		$this->db->set('Status',TRUE);
		$this->db->set('Visibility',1);

		$this->db->insert('coupon');

	}

	public function couponUsed($coupon_ID){


	}

	public function getCouponDetails($coupon_CODE){
		
		$this->db->where('Status', TRUE);
		$this->db->where('Code',$coupon_CODE);
		$this->db->where('Visibility',1);
		$query = $this->db->get('coupon');

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}

	}
	public function isValidCoupon($coupon_CODE){

		$this->db->where('Status', TRUE);
		$this->db->where('Code',$coupon_CODE);
		$this->db->where('Visibility',1);
		$query = $this->db->get('coupon');

		if($query->num_rows()){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public function isCouponUsed($coupon_CODE,$customer_ID){

		$CI =& get_instance();
		$CI->load->model('Customer');


		$this->db->where('Visibility',1);
		$this->db->where('CustomerID', $CI->Customer->getCustomerID($customer_ID));
		$this->db->where('CouponCode', $coupon_CODE);
		$query = $this->db->get('coupon_used');

		if($query->num_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function calculateDiscount($coupon_CODE,$total_amount,$customer_ID){

		if($this->isValidCoupon($coupon_CODE)) {
			if(!($this->isCouponUsed($coupon_CODE,$customer_ID))) {

				$Coupon_Details  = $this->getCouponDetails($coupon_CODE);

				if($Coupon_Details[0]['DiscountType']=='percentage'){

					if($total_amount>=$Coupon_Details[0]['MinimumAmount']){

						if($discount_value = $Coupon_Details[0]['DiscountAmount']) {
							return ($discount_value*0.01)*$total_amount;
						}else{
							return "NOT";
						}
					}
				}else if($Coupon_Details[0]['DiscountType']=='Amount'){

					if($total_amount>=$Coupon_Details[0]['MinimumAmount']){

						return $Coupon_Details[0]['DiscountAmount'];
					}else{
						return "NOT";
					}
				}
			}else{
				return "USED";
			}

		}else{
			return "INVALID";
		}

	}


	public function getCouponCodeByOrderID($order_ID){
		$this->db->where('OrderID', $order_ID);
		$query = $this->db->get('coupon_used');
		if($query->num_rows()){
			return $query->row()->CouponCode; 
		}else{
			return FALSE;
		}
	}
	public function setCouponUsed($coupon_CODE,$customer_ID,$order_ID){

		$this->db->set('CustomerID',$customer_ID);
		$this->db->set('OrderID',$order_ID);
		$this->db->set('CouponCode',$coupon_CODE);
		$this->db->set('Visibility',1);

		$this->db->insert('coupon_used');

	}
	

}

/* End of file Coupon.php */
/* Location: ./application/models/Coupon.php */