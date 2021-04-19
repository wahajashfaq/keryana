<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('customer_id'))
			return redirect('signup');
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
					$total_items = $total_items + 1; // $items["Quantity"];
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




	public function orderhistory()
	{
        
       

		
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
        
		$this->load->model('Customer');
		$this->load->model('Order');
		$this->load->model('Cart_Model');

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);
		$orderHistory = $this->Order->orderHistory($this->session->userdata("customer_id"));

        if($orderHistory){
        
		foreach ($orderHistory as &$orders) {

			$CartProducts = $this->Cart_Model->getCartsByOrders($orders["CartID"]);

			$totalDiscount = 0;
	        $subTotal = 0;


	      foreach ($CartProducts as $row){

	        

          $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
          $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


	      }
			# code...
	        $subTotal = (float)$subTotal;
	        $totalDiscount = (float)$totalDiscount;

	        if($subTotal-$totalDiscount<499){
	        	$subTotal = $subTotal + 50;
	        }
	        $points = (float)$orders['LoyaltyPointUse'];
	        $coupon_discount = (float)$orders['CouponDiscountAmount'];



	        $temp = $subTotal - $totalDiscount - $points - $coupon_discount;


	        /*echo " subTotal : $subTotal <br>";
	        echo " Total Discount : $totalDiscount <br>";
	        echo " Point Used : ". $orders['LoyaltyPointUse']." <br>";
	        echo " Subtotal - DIscout = " . $temp ."<br>";
	      	echo "Total Amount : Rs ".$temp;*/

	      $orders["TotalAmount"] = $temp;
		} // End of Order Loop
        }

        $this->load->model('Cart_Model');
	$total_items = 0;
	if($userID=$this->session->userdata('customer_id')){

		$cart_result = $this->Cart_Model->getCurrentCart($userID);
		if ($cart_result) {
			# code...
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
				$CartItems[$key]["OfferAmount"] = $KeyResult[0]["OfferAmount"];$CartItems[$key]["Discount"] = $value["Discount"];
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
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
		
	
		$this->load->view('customer/orderhistory',["PROFILE"=>$data,"categories"=>$first_categories,"OrderHistory"=>$orderHistory,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items]);
		//echo "customer : ".$this->session->userdata("customer_id");				
	}


public function mylocation()
	{
       

	
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
        
		$this->load->model('Customer');
		$this->load->model('Order');
		$this->load->model('Cart_Model');

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);
		$orderHistory = $this->Order->orderHistory($this->session->userdata("customer_id"));

        if($orderHistory){
        
		foreach ($orderHistory as &$orders) {

			$CartProducts = $this->Cart_Model->getCartsByOrders($orders["CartID"]);

			$totalDiscount = 0;
	        $subTotal = 0;


	      foreach ($CartProducts as $row){

	        

          $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
          $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


	      }
			# code...
	        $subTotal = (float)$subTotal;
	        $totalDiscount = (float)$totalDiscount;

	        if($subTotal-$totalDiscount<499){
	        	$subTotal = $subTotal + 50;
	        }
	        $points = (float)$orders['LoyaltyPointUse'];
	        $coupon_discount = (float)$orders['CouponDiscountAmount'];



	        $temp = $subTotal - $totalDiscount - $points - $coupon_discount;


	        /*echo " subTotal : $subTotal <br>";
	        echo " Total Discount : $totalDiscount <br>";
	        echo " Point Used : ". $orders['LoyaltyPointUse']." <br>";
	        echo " Subtotal - DIscout = " . $temp ."<br>";
	      	echo "Total Amount : Rs ".$temp;*/

	      $orders["TotalAmount"] = $temp;
		} // End of Order Loop
        }

        $this->load->model('Cart_Model');
	$total_items = 0;
	if($userID=$this->session->userdata('customer_id')){

		$cart_result = $this->Cart_Model->getCurrentCart($userID);
		if ($cart_result) {
			# code...
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
				$CartItems[$key]["OfferAmount"] = $KeyResult[0]["OfferAmount"];$CartItems[$key]["Discount"] = $value["Discount"];
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
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
		
	
		$this->load->view('customer/mylocation',["PROFILE"=>$data,"categories"=>$first_categories,"OrderHistory"=>$orderHistory,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items]);
		//echo "customer : ".$this->session->userdata("customer_id");				
	}



	public function ewallet()
	{
       

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
        
		$this->load->model('Customer');
		$this->load->model('Order');
		$this->load->model('Cart_Model');

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);
		$orderHistory = $this->Order->orderHistory($this->session->userdata("customer_id"));

        if($orderHistory){
        
		foreach ($orderHistory as &$orders) {

			$CartProducts = $this->Cart_Model->getCartsByOrders($orders["CartID"]);

			$totalDiscount = 0;
	        $subTotal = 0;


	      foreach ($CartProducts as $row){

	        

          $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
          $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


	      }
			# code...
	        $subTotal = (float)$subTotal;
	        $totalDiscount = (float)$totalDiscount;

	        if($subTotal-$totalDiscount<499){
	        	$subTotal = $subTotal + 50;
	        }
	        $points = (float)$orders['LoyaltyPointUse'];
	        $coupon_discount = (float)$orders['CouponDiscountAmount'];



	        $temp = $subTotal - $totalDiscount - $points - $coupon_discount;


	        /*echo " subTotal : $subTotal <br>";
	        echo " Total Discount : $totalDiscount <br>";
	        echo " Point Used : ". $orders['LoyaltyPointUse']." <br>";
	        echo " Subtotal - DIscout = " . $temp ."<br>";
	      	echo "Total Amount : Rs ".$temp;*/

	      $orders["TotalAmount"] = $temp;
		} // End of Order Loop
        }

        $this->load->model('Cart_Model');
	$total_items = 0;
	if($userID=$this->session->userdata('customer_id')){

		$cart_result = $this->Cart_Model->getCurrentCart($userID);
		if ($cart_result) {
			# code...
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
				$CartItems[$key]["OfferAmount"] = $KeyResult[0]["OfferAmount"];$CartItems[$key]["Discount"] = $value["Discount"];
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
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
	
		$this->load->view('customer/ewallet',["PROFILE"=>$data,"categories"=>$first_categories,"OrderHistory"=>$orderHistory,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items]);
		//echo "customer : ".$this->session->userdata("customer_id");				
	}


	public function index()
	{
        
       /*

		$first_categories = $this->load_categories();

		$result = $this->getCartResult();
		$cart_result  = $result["CART"];
		$total_items = $result["TOTAL_ITEMS"];
		*/
		
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
        
		$this->load->model('Customer');
		$this->load->model('Order');
		$this->load->model('Cart_Model');

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));
		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);
		$orderHistory = $this->Order->orderHistory($this->session->userdata("customer_id"));

        if($orderHistory){
        
		foreach ($orderHistory as &$orders) {

			$CartProducts = $this->Cart_Model->getCartsByOrders($orders["CartID"]);

			$totalDiscount = 0;
	        $subTotal = 0;


	      foreach ($CartProducts as $row){

	        

          $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
          $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


	      }
			# code...
	        $subTotal = (float)$subTotal;
	        $totalDiscount = (float)$totalDiscount;

	        if($subTotal-$totalDiscount<499){
	        	$subTotal = $subTotal + 50;
	        }
	        $points = (float)$orders['LoyaltyPointUse'];
	        $coupon_discount = (float)$orders['CouponDiscountAmount'];



	        $temp = $subTotal - $totalDiscount - $points - $coupon_discount;


	        /*echo " subTotal : $subTotal <br>";
	        echo " Total Discount : $totalDiscount <br>";
	        echo " Point Used : ". $orders['LoyaltyPointUse']." <br>";
	        echo " Subtotal - DIscout = " . $temp ."<br>";
	      	echo "Total Amount : Rs ".$temp;*/

	      $orders["TotalAmount"] = $temp;
		} // End of Order Loop
        }

        $this->load->model('Cart_Model');
	$total_items = 0;
	if($userID=$this->session->userdata('customer_id')){

		$cart_result = $this->Cart_Model->getCurrentCart($userID);
		if ($cart_result) {
			# code...
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
				$CartItems[$key]["OfferAmount"] = $KeyResult[0]["OfferAmount"];$CartItems[$key]["Discount"] = $value["Discount"];
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
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
	
		$this->load->view('customer/profile',["PROFILE"=>$data,"categories"=>$first_categories,"OrderHistory"=>$orderHistory,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items]);
		//echo "customer : ".$this->session->userdata("customer_id");				
	}


	public function logout(){

    $this->load->model('Customer');
    $this->Customer->setLastLoginTime($this->session->userdata('customer_id'));
    $this->session->unset_userdata('customer_id');
    $this->session->unset_userdata('My_Cart');
    return redirect('');
  }


}

/* End of file dashboard.php */
/* Location: ./application/controllers/customer/dashboard.php */