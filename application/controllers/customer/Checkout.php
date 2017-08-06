<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
		$this->load->model('Cart_Model');

		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));	
		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);

		if(!$cart_result)
			return redirect('welcome/viewcart','refresh');

		$this->load->view('customer/checkout',["PROFILE"=>$data,"categories"=>$first_categories,"CartProducts"=>$cart_result]);

	}

	public function confirmOrder(){

		$this->load->model('Customer');
		$this->load->model('Cart_Model');
		$this->load->model('Order');

		if($this->session->userdata("customer_id")){
		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));	
		$cart_result = $this->Cart_Model->getCurrentCart($data[0]["EncryptedId"]);
		$cartID = $this->Cart_Model->getCartID($data[0]["EncryptedId"]);

		if($this->input->post('loyalty_points')){
			$points =$this->input->post('loyalty_points');
		}else{

			$points =0;
		}

		$this->Order->addAnOrder($data[0]["ID"],$cartID,$data[0]["Address"],$data[0]["Mobile"],$points,$data[0]['LoyaltyPoints']);
	} // Online 
	else{

		return redirect('signup','refresh');
	}

	}

}

/* End of file Checkout.php */
/* Location: ./application/controllers/customer/Checkout.php */