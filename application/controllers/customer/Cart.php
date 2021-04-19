<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		
	}

	public function AddToCart(){

		$PRICE = $this->input->post('priceOfProduct');
		$UNIT_ID = $this->input->post('UnitID');
		$QUANTITY = $this->input->post('quantityOfProduct');
		$DISCOUNT = $this->input->post('discount');

		$CartItems;
		if($PRICE!='' && $UNIT_ID!='') {

			if ($this->session->userdata('My_Cart')) { // IF cart Exists
				$CartItems = $this->session->userdata('My_Cart');

				if(isset($CartItems[$UNIT_ID])){
					$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;
				}else {

					$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount"=>$DISCOUNT];
				}
				$this->session->set_userdata("My_Cart",$CartItems);

				if($userID = $this->session->userdata('customer_id')){

					// If User is Online 
					// TO-DO  SET WITH WAHAJ
					// Delete Cart Items
					
					$this->load->model('Cart_Model');
					$this->Cart_Model->addProductInExistingCart($CartItems,$userID);
				}

				//echo("Alreay Exist");
			} else {

				$CartItems = array();
				$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount"=>$DISCOUNT];
				$this->session->set_userdata("My_Cart",$CartItems);

                                if($userID = $this->session->userdata('customer_id')){

					// If User is Online 
					// TO-DO  SET WITH WAHAJ
					// Delete Cart Items
					
					$this->load->model('Cart_Model');
					$this->Cart_Model->addProductInExistingCart($CartItems,$userID);
				}
			}
		} else{
				

			$CartItems = $this->session->userdata('My_Cart');

				
				//array_splice($CartItems, array_search('391', $CartItems), 1);

		}	

		return redirect('welcome/cartView');
		//echo  "PRICE : $PRICE AND UNITID : $UNIT_ID";
		//return redirect('signup','refresh');
	}

	

	public function updateQuantity(){

		$PRICE = $this->input->post('priceOfProduct');
		$UNIT_ID = $this->input->post('UnitID');
		$QUANTITY = $this->input->post('quantityOfProduct');

		$CartItems;
		if($PRICE!='' && $UNIT_ID!='') {

			if ($this->session->userdata('My_Cart')) { // IF cart Exists
				$CartItems = $this->session->userdata('My_Cart');

				if(isset($CartItems[$UNIT_ID])){
					$CartItems[$UNIT_ID]['Quantity'] = $QUANTITY;
				}else {

					$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount"=>$DISCOUNT];
				}
				$this->session->set_userdata("My_Cart",$CartItems);

				if($userID = $this->session->userdata('customer_id')){

					// If User is Online 
					// TO-DO  SET WITH WAHAJ
					// Delete Cart Items
					
					$this->load->model('Cart_Model');
					$this->Cart_Model->addProductInExistingCart($CartItems,$userID);
				}

				//echo("Alreay Exist");
			} else {

				$CartItems = array();
				$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount"=>$DISCOUNT];
				$this->session->set_userdata("My_Cart",$CartItems);
			}
		} else{
				

			$CartItems = $this->session->userdata('My_Cart');

				

				//array_splice($CartItems, array_search('391', $CartItems), 1);

		}	
/*
		echo "<pre>";
		print_r($CartItems);
		echo "</pre>";
*/

		return redirect('welcome/cartView');
	}



	public function updateCartQuantity(){

		$PRICE = $this->input->post('priceOfProduct');
		$UNIT_ID = $this->input->post('UnitID');
		$QUANTITY = $this->input->post('quantityOfProduct');

		$CartItems;
		if($PRICE!='' && $UNIT_ID!='') {

			if ($this->session->userdata('My_Cart')) { // IF cart Exists
				$CartItems = $this->session->userdata('My_Cart');

				if(isset($CartItems[$UNIT_ID])){
					$CartItems[$UNIT_ID]['Quantity'] = $QUANTITY;
				}else {

					$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount"=>$DISCOUNT];
				}
				$this->session->set_userdata("My_Cart",$CartItems);

				if($userID = $this->session->userdata('customer_id')){

					// If User is Online 
					// TO-DO  SET WITH WAHAJ
					// Delete Cart Items
					
					$this->load->model('Cart_Model');
					$this->Cart_Model->addProductInExistingCart($CartItems,$userID);
				}

				//echo("Alreay Exist");
			} else {

				$CartItems = array();
				$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount"=>$DISCOUNT];
				$this->session->set_userdata("My_Cart",$CartItems);
			}
		} else{
				

			$CartItems = $this->session->userdata('My_Cart');

				

				//array_splice($CartItems, array_search('391', $CartItems), 1);

		}	
/*
		echo "<pre>";
		print_r($CartItems);
		echo "</pre>";
*/

		return redirect('welcome/viewCartView');
	}

	function deleteCartFromCart(){

		
		$UNIT_ID = $this->input->post('UnitID');
		$CartItems = $this->session->userdata('My_Cart');
		$CartItems[$UNIT_ID] = null;



		if($userID = $this->session->userdata('customer_id')){
				$this->load->model('Cart_Model');
				$this->Cart_Model->RemoveProduct($UNIT_ID,$userID);
		}

		/*echo "<pre>";
		print_r ($CartItems);
		echo "</pre>";
		*/
		$this->session->set_userdata("My_Cart",$CartItems);
		return redirect('welcome/viewCartView');
	}



	public function deleteFromCart(){


		$UNIT_ID = $this->input->post('UnitID');
		$CartItems = $this->session->userdata('My_Cart');
		$CartItems[$UNIT_ID] = null;



		if($userID = $this->session->userdata('customer_id')){
				$this->load->model('Cart_Model');
				$this->Cart_Model->RemoveProduct($UNIT_ID,$userID);
		}

		/*echo "<pre>";
		print_r ($CartItems);
		echo "</pre>";
		*/
		$this->session->set_userdata("My_Cart",$CartItems);
		return redirect('welcome/cartView');

	}


    
	public function m_updateQuantity(){

		return redirect('welcome/m_cartView');
	}
	
	public function m_deleteFromCart(){


		return redirect('welcome/m_cartView');

	}
	
	
	public function m_AddToCart(){
		return redirect('welcome/m_cartView');
	}
}

/* End of file Cart.php */
/* Location: ./application/controllers/customer/Cart.php */