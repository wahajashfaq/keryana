<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('customer_id'))
			return redirect('signup');
	}



	public function coupon(){

		$key = $this->input->post('coupon');
		$total = $this->input->post('mytotal');
		if($key){

			$this->load->model('Coupon');
			$coupon_discount =  $this->Coupon->calculateDiscount($key,$total,$this->session->userdata("customer_id"));
			$coupon_detail = $this->Coupon->getCouponDetails($key);
			$data = array('discount'=>$coupon_discount,'details'=>$coupon_detail[0]['Details']);
			echo json_encode($data);
		}

	}
	public function index()
	{


		$this->load->model('Categories');	
		$first_categories = $this->load_categories();
		

		$this->load->model('Customer');
		$this->load->model('OrderSlot');
		$time_slots = $this->OrderSlot->getAllTimeSlots();

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		$firstOrder = $this->Customer->getOrderNumber($this->session->userdata("customer_id"));



		$result = $this->getCartResult();
		$cart_result  = $result["CART"];
		$total_items = $result["TOTAL_ITEMS"];

		if(!$cart_result)
			return redirect('welcome/viewcart','refresh');

		$this->load->view('customer/checkout',["PROFILE"=>$data,"categories"=>$first_categories,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items,"TimeSlots"=>$time_slots,"FORDER"=>$firstOrder]);

	}


// __________________Load Categories_______________________


	function load_categories(){


		$this->load->model('Categories');	
		$first_categories = $this->Categories->getFirstCategory();
		$second_categories = $this->Categories->getSecondCategory();
		$third_categories = $this->Categories->getThirdCategory();

		for ($i=0; $i <count($second_categories); $i++) { 
			$second_categories[$i]["SUB CATEGORIES"] = [];
			for ($j=0; $j <count($third_categories); $j++) { 
				if($third_categories[$j]["SecondCategoryID"]==$second_categories[$i]["ID"]){

					array_push($second_categories[$i]["SUB CATEGORIES"], $third_categories[$j]);

				}
			}
		}


		for ($i=0; $i <count($first_categories); $i++) { 
			$first_categories[$i]["SUB CATEGORIES"] = [];
			for ($j=0; $j <count($second_categories); $j++) { 
				if($second_categories[$j]["FirstCategoryID"]==$first_categories[$i]["ID"]){

					array_push($first_categories[$i]["SUB CATEGORIES"], $second_categories[$j]);

				}
			}
		}

		return $first_categories;

	}



	function getCartResult(){

		$this->load->model('Customer');
		$this->load->model('Cart_Model');
		$total_items = 0;
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);
			if($cart_result){
				foreach ($cart_result as $items) {
					$total_items = $total_items + 1;
				}
			}

		}else if($CartItems = $this->session->userdata('My_Cart'))
		{
			$cart_result = [];
			foreach ($CartItems as $key => $value) {

				if($CartItems[$key]){
					$KeyResult = $this->Cart_Model->getCartsBySession($key);
					$CartItems[$key]["Image"] = $KeyResult[0]["Image"];
					$CartItems[$key]["Name"] = $KeyResult[0]["Name"];
					$CartItems[$key]["OfferType"] = $KeyResult[0]["OfferType"];
					$CartItems[$key]["OfferAmount"] = $KeyResult[0]["OfferAmount"];
					$CartItems[$key]["Discount"] = $value["Discount"];

					$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
					$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	
				exit;*/
				$cart_result[$key] = $CartItems[$key];
				$total_items = $total_items + $CartItems[$key]["Quantity"];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

		}

		$this->session->set_userdata("My_Cart",$cart_result);


			//$cart_result = $CartItems;

	}else {
		$cart_result = null;
	}

	return ["CART"=>$cart_result,"TOTAL_ITEMS"=>$total_items];
}



public function confirmOrder(){

	$this->load->model('Customer');
	$this->load->model('Cart_Model');
	$this->load->model('Coupon');
	$this->load->model('Order');


	if($this->session->userdata("customer_id")){

		$totalDiscount = 0;
		$subTotal = 0;


		$result = $this->getCartResult();
		$CartProducts  = $result["CART"];

		foreach ($CartProducts as $row){
			$totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
			$subTotal =$subTotal+ $row["Price"]*$row["Quantity"];
		}

		if(($subTotal-$totalDiscount)>499){

		}else{
			$subTotal = $subTotal + 50;
		}

		$coupon_discount =  $this->Coupon->calculateDiscount($this->input->post('coupon_code'),($subTotal-$totalDiscount),$this->session->userdata("customer_id"));

		if($coupon_discount=="USED"){
			//echo "Coupon Already Used";
			$coupon_discount = 0;
		}else if($coupon_discount=="INVALID"){
			//echo "Invalid Coupon Code";
			$coupon_discount = 0;
		}else if($coupon_discount=="NOT"){
			$coupon_discount = 0;
		}

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		if($data[0]['HouseNo']=='' || $data[0]['Town']=='' || $data[0]['Block']=='' || $data[0]['NearbyLocation']=='' ){


				// IF address is not set
			
			$this->load->model('Categories');	
		    $first_categories = $this->load_categories();
		

		$this->load->model('Customer');
		$this->load->model('OrderSlot');
		$time_slots = $this->OrderSlot->getAllTimeSlots();

		$info = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		$firstOrder = $this->Customer->getOrderNumber($this->session->userdata("customer_id"));



		$result = $this->getCartResult();
		$cart_result  = $result["CART"];
		$total_items = $result["TOTAL_ITEMS"];

		if(!$cart_result)
			return redirect('welcome/viewcart','refresh');

		return $this->load->view('customer/checkout',["PROFILE"=>$info,"categories"=>$first_categories,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items,"TimeSlots"=>$time_slots,"FORDER"=>$firstOrder,"ADDRESS_ERROR"=>"Please update your address before order"]);
			exit;
		}


		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);
		$cartID = $this->Cart_Model->getCartID($data[0]["EncryptedId"]);
		$order_date = $this->input->post('order_date');
		$order_time = $this->input->post('order_time');
		$delivery_charges = $this->input->post('delivery_charges');
		$address = "House No :".$data[0]["HouseNo"]." , Block :".$data[0]["Block"]." , Town :".$data[0]["Town"].", Nearby Location :".$data[0]["NearbyLocation"];

		if($this->input->post('loyalty_points')){
			$points =$this->input->post('loyalty_points');
		}else{

			$points =0;
		}

		$orderID = $this->Order->addAnOrder($data[0]["ID"],$cartID,$address,$data[0]["Mobile"],$points,$data[0]['LoyaltyPoints'],$order_date,$order_time,$delivery_charges,$coupon_discount,$this->input->post('coupon_code'));

		$this->session->unset_userdata('My_Cart');

		return redirect('welcome/confirmation/'.$orderID,'refresh');
	} // Online 
	else{

		return redirect('signup','refresh');
	}

}

}

/* End of file Checkout.php */
/* Location: ./application/controllers/customer/Checkout.php */