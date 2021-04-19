<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_Model extends CI_Model {


	// Here Product is consist of UnitID, Quantity and Price

	public function addAllProductsInCart($all_products,$customer_ID){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		
		$CI =&get_instance();
		$CI->load->model('Customer');


		$this->db->set('CustomerID', $CI->Customer->getCustomerID($customer_ID)); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('Visibility', 1); 
		$this->db->set('Status', 0); 

		$this->db->insert('cart'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('cart');



		if($all_products){
			foreach ($all_products as $key => $value) {
			/*
				echo  "Unit ID  => ".$key."<br>" ;
				echo  "Price  => ".$value["Price"]."<br>" ;
				echo  "Quantity  => ".$value["Quantity"]."<br><br>" ;

				*/
				$this->db->set('CartID', $inserted_id); 
				$this->db->set('CreationDate', mdate($datestring, $time));
				$this->db->set('ModifiedDate', mdate($datestring, $time));
				$this->db->set('ProductID', $key);  // Actually Unit ID
				$this->db->set('Quantity', $value["Quantity"]); 
				$this->db->set('Price', $value["Price"]); 
				$this->db->set('Discount', $value['Discount']); 
				$this->db->set('Visibility', 1); 


				$this->db->insert('cart_products'); 
				$inserted_id_cart = $this->db->insert_id();

				$this->db->set('EncryptedId', md5($inserted_id_cart)); //value that used to update column  
				$this->db->where('ID', $inserted_id_cart); //which row want to upgrade  
				$this->db->update('cart_products');

			}
		}
	}



	public function RemoveProduct($unit_ID,$customer_ID){

		$cart_ID =  $this->getCartID($customer_ID);
		if($cart_ID){ 

			$this->db->where('ProductID',$unit_ID);
			$this->db->where('CartID', $cart_ID);
			$this->db->delete('cart_products');
		}


	}
	public function addProductInExistingCart($product,$customer_ID){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');

		$cart_ID =  $this->getCartID($customer_ID);

		if($cart_ID){ 
			//echo "$cart_ID";
			$this->db->select('ProductID');
			$this->db->where('CartID', $cart_ID);
			$query2 = $this->db->get('cart_products');

			foreach ($product as $key => $value) {

				$product_exists = FALSE;
				foreach ($query2->result_array() as $row) {


					if($key==$row["ProductID"]){
							// Already Exist in DB


							//echo "<br>Price is ".($value['Price']*$value['Quantity']);
						if($value["Quantity"] ){
							$this->db->where('ProductID', $key);
							$this->db->where('CartID', $cart_ID);
							$this->db->set('ModifiedDate', mdate($datestring, $time));
							$this->db->set('Quantity', $value["Quantity"]); 
							$this->db->set('Price', $value['Price']); 
							if(isset($value['Discount'])) {
							$this->db->set('Discount', $value['Discount']); 
							}else{
							$this->db->set('Discount', 0); 
							}
							$this->db->update('cart_products');
							$product_exists = TRUE;
						}
						break;
					}
				}  
				if(!$product_exists){

					if ($value["Quantity"]) {
							# code...
						//echo "Adding Data";
						$this->db->set('CartID', $cart_ID); 
						$this->db->set('CreationDate', mdate($datestring, $time));
						$this->db->set('ModifiedDate', mdate($datestring, $time));
						$this->db->set('ProductID', $key);  // Actually Unit ID
						$this->db->set('Quantity', $value["Quantity"]); 
						$this->db->set('Price', $value['Price']); 
						$this->db->set('Discount', $value['Discount']); 
						$this->db->set('Visibility', 1); 


						$this->db->insert('cart_products'); 
						$inserted_id_cart = $this->db->insert_id();

						$this->db->set('EncryptedId', md5($inserted_id_cart)); //value that used to update column  
						$this->db->where('ID', $inserted_id_cart); //which row want to upgrade  
						$this->db->update('cart_products');
					}
				}

			}



		}	
		else {
			$this->addAllProductsInCart($product,$customer_ID);
			return FALSE;
		}	

	}

	public function getCartID($customer_ID){


		$CI =&get_instance();
		$CI->load->model('Customer');

		$this->db->select('ID');
		$this->db->where('CustomerID', $CI->Customer->getCustomerID($customer_ID));
		$this->db->where('Status', 0);

		$query = $this->db->get('cart');
		if($query->num_rows()){ 
			return  $query->row()->ID;
		} else {
			return FALSE;
		}


	}


	public function removeItemFromCart($customer_ID,$unit_ID){


	}

	public function get_Cart_Session($customer_ID){


		if($result = $this->getCurrentCart($customer_ID)) {

			$CartItems = array();
			foreach ($result as $row) {


				$PRICE = $row['Price'];
				$UNIT_ID = $row['ProductID'];
				$QUANTITY = $row['Quantity'];
				$DISCOUNT = $row['Discount'];

				$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY,"Discount",$DISCOUNT];
			}
/*
			echo "<pre>";
			print_r ($CartItems);
			echo "</pre>";*/
			return $CartItems;

		}else {
			return FALSE;
		}


	}



	public function clearCart($customer_ID){

	}

	public function checkout($cart_ID){


		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');

		$this->db->where('ID', $cart_ID);
		$this->db->set('Status',1);
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->update('cart');

	}


	public function getCurrentCart($customer_ID){


		$cart_ID =  $this->getCartID($customer_ID);
		$this->db->where('ID', $cart_ID);
		$this->db->where('Status',0);
		$query = $this->db->get('cart');
		
		if ($query->num_rows()) {
			# code...

			if($cart_ID){
				$queryString ="SELECT products.Image , cart_products.ProductID , cart_products.Discount , products.Name ,products.OfferType ,products.OfferAmount,  product_unit.Unit ,cart_products.Quantity , cart_products.Price FROM cart_products inner join product_unit on cart_products.ProductID = product_unit.ID Inner Join products on product_unit.ProductID = products.ID where cart_products.CartID = $cart_ID ";

				$query = $this->db->query($queryString);

		/*echo "<pre>";
		print_r ($query->result());
		echo "</pre>";*/

			return $query->result_array();
		}else{

			return FALSE;
		}
	}
}

public function getCartsByOrders($cart_ID){

	$queryString ="SELECT products.Image , cart_products.ProductID ,  products.Name ,products.OfferType ,products.OfferAmount,  product_unit.Unit ,cart_products.Quantity , cart_products.Discount , cart_products.Price FROM cart_products inner join product_unit on cart_products.ProductID = product_unit.ID Inner Join products on product_unit.ProductID = products.ID where cart_products.CartID = $cart_ID";

	$query = $this->db->query($queryString);

		/*echo "<pre>";
		print_r ($query->result());
		echo "</pre>";*/

		return $query->result_array();
	}


	public function getCartsBySession($key){

		$queryString ="SELECT products.Image ,  products.Name ,products.OfferType ,products.OfferAmount, product_unit.Unit  FROM products inner join product_unit on product_unit.ProductID = products.ID  where product_unit.ID = $key";

		$query = $this->db->query($queryString);

		return $query->result_array();
	}




	public function updateCart($oldCartItems){

		foreach ($oldCartItems as $key => $value) {

			$CartItems = $this->session->userdata('My_Cart');

			if(isset($CartItems[$key])){
				$CartItems[$key]['Quantity'] = $CartItems[$key]['Quantity']+$value["Quantity"];
			}else {

				$CartItems[$key] = ["Price"=>$value["Price"],"Quantity"=>$value["Quantity"]];
			}

			$this->session->set_userdata("My_Cart",$CartItems);

			if($userID = $this->session->userdata('customer_id')){
				
				$this->load->model('Cart_Model');
				$this->Cart_Model->addProductInExistingCart($CartItems,$userID);
			}

		}
	}

}

/* End of file Cart.php */
/* Location: ./application/models/Cart.php */