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

		$CartItems;
		if($PRICE!='' && $UNIT_ID!='') {

			if ($this->session->userdata('My_Cart')) {
				$CartItems = $this->session->userdata('My_Cart');

				if(isset($CartItems[$UNIT_ID])){
					$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;
				}else {

					$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY];
				}
				$this->session->set_userdata("My_Cart",$CartItems);

				echo("Alreay Exist");
			} else {

				$CartItems = array();
				$CartItems[$UNIT_ID] = ["Price"=>$PRICE,"Quantity"=>$QUANTITY];
				$this->session->set_userdata("My_Cart",$CartItems);
			}
		} else{
				

			$CartItems = $this->session->userdata('My_Cart');

				
				//array_splice($CartItems, array_search('391', $CartItems), 1);

		}	

		echo "<pre>";
		print_r($CartItems);
		echo "</pre>";
		//echo  "PRICE : $PRICE AND UNITID : $UNIT_ID";
		//return redirect('signup','refresh');
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/customer/Cart.php */