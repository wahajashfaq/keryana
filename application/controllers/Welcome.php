<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{

		$this->load->model('Categories');
		$this->load->model('KeryanaProduct');
		$this->load->model('Brand');
		$this->load->model('Banner');
		$first_categories = $this->Categories->getFirstCategory();
		$second_categories = $this->Categories->getSecondCategory();
		$third_categories = $this->Categories->getThirdCategory();
		$brands = $this->Brand->getAllBrands();
		$newArrivals = $this->KeryanaProduct->getNewArrivals();
		$slidingBanners = $this->Banner->getEnableSlidingBanners();



		foreach ($newArrivals as &$row) {

			$units["Units"] = array();
			$row["Units"]  = $this->KeryanaProduct->getProductUnit($row["EncryptedId"]);

		}



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


		$this->load->model('Cart_Model');
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);

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
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
				$cart_result[$key] = $CartItems[$key];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

			}
			$this->session->set_userdata("My_Cart",$cart_result);

			//$cart_result = $CartItems;

		}else {
			$cart_result = null;
		}


		$this->load->view('landing',["categories"=>$first_categories,"brands"=>$brands,"NewArrivals"=>$newArrivals,"SlidingBanners"=>$slidingBanners,"CartProducts"=>$cart_result]);		
	}


	public function test(){

		$this->load->model('Cart_Model');
		echo "<a href=".base_url('Welcome/clearCart').">Clear Cart</a>";
		echo "<pre>";
		print_r ($this->session->userdata('My_Cart'));
		echo "</pre>";

		//echo  $this->session->userdata('customer_id');
		if($this->session->userdata('My_Cart') && $this->session->userdata('customer_id')){
			$this->Cart_Model->addProductInExistingCart($this->session->userdata('My_Cart'),$this->session->userdata('customer_id'));
		} // End of IF (Either User is not logged in or cart is empty)
		else {



			if($this->session->userdata('My_Cart')){
				echo "You are Not Logged in ";
			}else if($this->session->userdata('customer_id')){
				echo "Your Cart Is Empty";
			}else {
				echo "Your Cart is Empty And You are not Logged In";
			}
		}
		
	}

	public function clearCart(){

		if($this->session->userdata('My_Cart')){
			$this->session->unset_userdata('My_Cart');

		}

		return redirect('Welcome/test','refresh');
	}
	public function about(){

		$this->load->view('about');	
	}

	public function cartView(){


		$this->load->model('Cart_Model');
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);

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
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
				$cart_result[$key] = $CartItems[$key];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

			}
			$this->session->set_userdata("My_Cart",$cart_result);

			//$cart_result = $CartItems;

		}else {
			$cart_result = null;
		}

		$this->load->view('cart_content',["CartProducts"=>$cart_result]);
	}

	public function category($type,$category_id){

		$this->load->model('Categories');	
		$this->load->model('KeryanaProduct');	
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



		$result_sidebar   = $this->KeryanaProduct->getCategoriesTypes($type,$category_id);
		$result_products  = $this->KeryanaProduct->getProductByCategoryID($type,$category_id);

		if ($result_products) {
			foreach ($result_products as &$row) {

				$units["Units"] = array();
				$row["Units"]  = $this->KeryanaProduct->getProductUnit($row["EncryptedId"]);

			}

		}
		
		$sub_category = "";
		$currentCategory = [];
		if($type=="First"){
			$sub_category = "Second";
			$currentCategory = $this->Categories->getFirstCategoryData($category_id);

		} else if($type=="Second"){
			$sub_category = "Third";
			$currentCategory = $this->Categories->getSecondCategoryData_ID($category_id);

		} else if($type="Third"){
			$sub_category = "Third";
			$currentCategory = $this->KeryanaProduct->getThirdCategoryParent($category_id);
		}



		$this->load->model('Cart_Model');
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);

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
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
				$cart_result[$key] = $CartItems[$key];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

			}
			$this->session->set_userdata("My_Cart",$cart_result);

			//$cart_result = $CartItems;

		}else {
			$cart_result = null;
		}

		$this->load->view('category',["categories"=>$first_categories,"filterd"=>$result_products,"side_categories"=>$result_sidebar,"SubCategory"=>$sub_category,"CurrentCategory"=>$currentCategory,"CartProducts"=>$cart_result]);

	}

	public function product($product_ID){

		$this->load->model('KeryanaProduct'); 
		$product_detail = $this->KeryanaProduct->getSingleProduct($product_ID);
		$product_units = $this->KeryanaProduct->getProductUnit($product_ID);

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

		$this->load->model('Cart_Model');
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);

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
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
				$cart_result[$key] = $CartItems[$key];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

			}
			$this->session->set_userdata("My_Cart",$cart_result);

			//$cart_result = $CartItems;

		}else {
			$cart_result = null;
		}

		$this->load->view('product',["PRODUCT"=>$product_detail,"UNITS"=>$product_units,"categories"=>$first_categories,"CartProducts"=>$cart_result]);	
	}

	public function home(){

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


		$this->load->view('home',["categories"=>$first_categories]);		
	}

	public function viewcart()
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



		$this->load->model('Cart_Model');
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);

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
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
				$cart_result[$key] = $CartItems[$key];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

			}
			$this->session->set_userdata("My_Cart",$cart_result);

			//$cart_result = $CartItems;

		}else {
			$cart_result = null;
		}

		$this->load->view('viewcart',["categories"=>$first_categories,"CartProducts"=>$cart_result]);
	}

	public function checkout()
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


		$this->load->model('Cart_Model');
		if($userID=$this->session->userdata('customer_id')){

			$cart_result = $this->Cart_Model->getCurrentCart($userID);

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
				$CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
				$CartItems[$key]["ProductID"] = $key;
				/*echo "<pre>";
				print_r ($CartItems[$key]);
				echo "</pre>";	*/
				$cart_result[$key] = $CartItems[$key];

			}else{
				$CartItems[$key] = null;
			}		//$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

			}
			$this->session->set_userdata("My_Cart",$cart_result);

			//$cart_result = $CartItems;

		}else {
			$cart_result = null;
		}

		$this->load->view('checkout',["categories"=>$first_categories,"CartProducts"=>$cart_result]);
	}

	public function confirmation()
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


		$this->load->view('confirmation',["categories"=>$first_categories]);
	}

	public function popup(){
		$this->load->view('popup');	

	}

	public function profile(){
		$this->load->view('profile');	

	}


	public function phparray(){
		
		$arr = [];
		$arr2= ["First Name"=>"Khawar","Last Name"=>"Hussain"];
		$arr1= ["First Name"=>"Abdul","Last Name"=>"Khan","Middle Name"=>"Rehman"];
		$arr[0]= $arr1;
		$arr[1]= $arr2;

		echo count($arr1);
		print_r($arr) ;
	}


}
