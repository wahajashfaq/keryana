<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('customer_id'))
			return redirect('signup');
	}


	public function index()
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

	        $discount = 0;

	        if($row["OfferType"])  {
	          if($row["OfferType"]=="Amount"){

	            $discount = $row["OfferAmount"]*$row["Quantity"];


	          }else if($row["OfferType"]=="Percent"){

	            $discount = ($row["Price"]*$row["OfferAmount"]*0.01)*$row["Quantity"];
	          }
	        }

	          $totalDiscount = $totalDiscount+$discount;
//	          echo $row['Price']. "x" .$row['Quantity']. " => " . $row['Price']*$row['Quantity']. " - " . $discount . "<br>";
	          $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];

	      }
			# code...
	        $subTotal = (float)$subTotal;
	        $totalDiscount = (float)$totalDiscount;
	        $points = (float)$orders['LoyaltyPointUse'];
	        $temp = $subTotal - $totalDiscount - $points;


	        /*echo " subTotal : $subTotal <br>";
	        echo " Total Discount : $totalDiscount <br>";
	        echo " Point Used : ". $orders['LoyaltyPointUse']." <br>";
	        echo " Subtotal - DIscout = " . $temp ."<br>";
	      	echo "Total Amount : Rs ".$temp;*/

	      $orders["TotalAmount"] = $temp;
		} // End of Order Loop
        }
		  
		
	
		$this->load->view('customer/profile',["PROFILE"=>$data,"categories"=>$first_categories,"OrderHistory"=>$orderHistory]);
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