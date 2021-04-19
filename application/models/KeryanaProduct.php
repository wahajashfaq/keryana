<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeryanaProduct extends CI_Model {	


	public function getAllProducts(){

		//$this->db->where('Visibility', 1);
		$query = $this->db->get('products');
		if($query->num_rows()){ 

			return $query->result_array();
		}	
		else {
			return FALSE;
		}		
	}

	public function getProductID($enc_id){  // Where EncryptedID is given

		$this->db->where('EncryptedId',$enc_id);
		$query = $this->db->get('products');

		if($query->num_rows()){ 
			return $query->row()->ID;
		}	
		else {
			return FALSE;
		}		
	}

	public function getProductUnit($product_ID){

		$this->db->where('ProductID',$this->getProductID($product_ID));
		$this->db->where('visibility',1);
		$query = $this->db->get('product_unit');

		if($query->num_rows()){ 


			return $query->result_array();

		}	
		else {
			return FALSE;
		}

	}
	public function getSingleProduct($product_ID){

		$this->db->select('products.*,products.Name as PNAME');
		$this->db->where('EncryptedId', $product_ID);
		$query = $this->db->get('products');

		if($query->num_rows()){ 

			if($query->row()->BrandID){
				$this->db->select('products.*,products.Name as PNAME,brands.Name as BNAME');
				$this->db->where('products.Visibility',1);
				$this->db->where('products.EncryptedId',$product_ID)
				->from('products')
				->join('brands', 'brands.ID = products.BrandID');
				$query2 = $this->db->get();

				if($query2->num_rows()){ 


					return $query2->result_array();

				}	
				else {
					return FALSE;
				}
			}

			return $query->result_array();
		}	
		else {
			return FALSE;
		}

	}


	
	public function getNewArrivals(){

		$this->db->where('Visibility', 1);
		$this->db->order_by("ID", "desc"); $this->db->limit(10);
		$query = $this->db->get('products');

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}
	}



	public function searchProduct($data){
		



                
               $this->db->distinct();
               $this->db->select('products.*');
		$this->db->where('products.Visibility',1)
		->from('products')
		->join('brands', "brands.ID = products.BrandID AND (products.Name LIKE '%".$data['myname']."%' or brands.Name LIKE '%".$data['myname']."%')");
		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}      
	}
        
        public function BrandProduct($data){
		$sql="SELECT * FROM `products` WHERE `visibility`=1 AND `BrandID` ='".$data."'";
		$query = $this->db->query($sql);
		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}      
	}
        public function HotProduct(){
               $this->db->distinct();
               $this->db->select('products.*');
		$this->db->where('products.Visibility',1)
		->from('products')
		->join('product_unit', "product_unit.ProductID = products.ID AND product_unit.OfferType != 'NULL'");
		$query = $this->db->get();

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}
        }

	public function addProductPrice_Unit($post_data,$product_ID){

		for ($i=1; $i <= $post_data["unit"] ; $i++) { 
	 		# code...
			$unitName = "unit$i";
			$priceName = "price$i";
			$offertype = "type$i";
			$offeramount = "amount$i";

			$this->db->set('ProductID', $product_ID); 
			$this->db->set('Unit',$post_data[$unitName]);
			$this->db->set('Price',$post_data[$priceName]);
			if ($post_data[$offertype]) {
				$this->db->set('OfferType',$post_data[$offertype]);
				$this->db->set('OfferAmount',$post_data[$offeramount]);
			}
			$this->db->set('Visibility', 1); 
			$this->db->insert('product_unit');
		}

	}


	public function updateProductPrice_Unit($post_data,$product_ID){


		$this->db->set('Visibility', 0); 
		$this->db->where('ProductID', $product_ID);
		$this->db->update('product_unit');
		
		for ($i=1; $i <= $post_data["unit"] ; $i++) { 
	 		# code...
			$unitName = "unit$i";
			$priceName = "price$i";
			$offertype = "type$i";
			$offeramount = "amount$i";

			$this->db->set('ProductID', $product_ID); 
			$this->db->set('Unit',$post_data[$unitName]);
			$this->db->set('Price',$post_data[$priceName]);
			if ($post_data[$offertype]) {
				$this->db->set('OfferType',$post_data[$offertype]);
				$this->db->set('OfferAmount',$post_data[$offeramount]);
			}else{
				$this->db->set('OfferType',null);
				$this->db->set('OfferAmount',null);
			}
			$this->db->set('Visibility', 1); 
			$this->db->insert('product_unit');
		}

	}

	public function updateAllProduct($post_data,$image_url){

		$this->db->where('ExcelId', $post_data['excel_id']);
		$query = $this->db->get('products');

		if($query->num_rows())  // Update 
		{

			$this->updateProduct($post_data,$image_url,$query->row()->ID);
			//echo "Updated";

		}else // Add new 
		{

			$this->addNewProduct($post_data,$image_url);
			//echo "<br>Added<br>";
		}
	}

	public function updateProduct($post_data,$image_url,$product_ID){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		
		$CI =&get_instance();
		$CI->load->model('Categories');


		$this->db->set('Name',$post_data['product_name']);
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('BrandID', $CI->Brand->getBrandID($post_data["brand_id"]));
		$this->db->set('FirstCategoryID',$CI->Categories->getFirstCategoryID($post_data["first_category_type"]));
		$this->db->set('SecondCategoryID',$CI->Categories->getSecondCategoryID($post_data["second_category_type"] ));
		$this->db->set('ThirdCategoryID',$CI->Categories->getThirdCategoryID($post_data["third_category_type"] ));
		$this->db->set('Details','');
		$this->db->set('Visibility', 1); 
		$this->db->where('ExcelId', $post_data['excel_id']);

		$this->db->update('products'); 
		$this->updateProductPrice_Unit($post_data,$product_ID);

	}
	public function addNewProduct($post_data,$image_url){

		$this->load->helper('date');
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = now('Asia/Karachi');
		
		$CI =&get_instance();
		$CI->load->model('Categories');
		$CI->load->model('Brand');


		$this->db->set('Name', $post_data["product_name"]); 
		$this->db->set('CreationDate', mdate($datestring, $time));
		$this->db->set('ModifiedDate', mdate($datestring, $time));
		$this->db->set('FirstCategoryID',$CI->Categories->getFirstCategoryID($post_data["first_category_type"]));
		$this->db->set('SecondCategoryID',$CI->Categories->getSecondCategoryID($post_data["second_category_type"] ));
		$this->db->set('ThirdCategoryID',$CI->Categories->getThirdCategoryID($post_data["third_category_type"] ));
		$this->db->set('BrandID',$CI->Brand->getBrandID($post_data["brand_id"]) );
		$this->db->set('Details',$post_data["product_detail"]);
		$this->db->set('ExcelId',$post_data["excel_id"]);
		$this->db->set('Image',$image_url);
		$this->db->set('Visibility', 1); 

		$this->db->insert('products'); 
		$inserted_id = $this->db->insert_id();

		$this->db->set('EncryptedId', md5($inserted_id)); //value that used to update column  
		$this->db->where('ID', $inserted_id); //which row want to upgrade  
		$this->db->update('products');

		$this->addProductPrice_Unit($post_data,$inserted_id);
	}	


	public function getProductByCategoryID($type,$category_ID){


		$CI =&get_instance();
		$CI->load->model('Categories');


		if($type=="First"){

			$this->db->where('FirstCategoryID',$CI->Categories->getFirstCategoryID($category_ID));	

		}else if($type=="Second"){
			$this->db->where('SecondCategoryID',$CI->Categories->getSecondCategoryID($category_ID));	

		}else if($type=="Third"){
			$this->db->where('ThirdCategoryID',$CI->Categories->getThirdCategoryID($category_ID));	

		}else {

		}

		$this->db->where('Visibility',1);
		$query = $this->db->get('products');
		if($query->num_rows()){ 

			return $query->result_array();
		}	
		else {
			return FALSE;
		}		

	}


	public function getUniqueBrands($type,$category_ID){

		$this->load->model('Brand');
		$products = $this->getProductByCategoryID($type,$category_ID);
		if($products){

			$brands_array = [];
			foreach ($products as $row) {
				# code...
				if ($row["BrandID"]) {
					# code...
					$brands_array[$row["BrandID"]] =["BrandName"=>$this->Brand->getBrandNameByID($row["BrandID"])];

				}
			}

			return $brands_array;
		}else{
			return FALSE;
		}



	}
	public function getFilterProductByCategoryID($type,$category_ID){


		$CI =&get_instance();
		$CI->load->model('Categories');



		if($type=="First"){

			$this->db->where('FirstCategoryID',$CI->Categories->getFirstCategoryID($category_ID));	

		}else if($type=="Second"){
			$this->db->where('SecondCategoryID',$CI->Categories->getSecondCategoryID($category_ID));	

		}else if($type=="Third"){
			$this->db->where('ThirdCategoryID',$CI->Categories->getThirdCategoryID($category_ID));	

		}else {

		}



		$this->db->where('Visibility',1);
		$query = $this->db->get('products');
		if($query->num_rows()){ 

			return $query->result_array();
		}	
		else {
			return FALSE;
		}		

	}



	public function getThirdCategoryParent($category_ID){


		$this->db->select('SecondCategoryID');
		$this->db->where('Visibility',1);
		$this->db->where('EncryptedId',$category_ID);
		$query = $this->db->get('third_category');

		if($query->num_rows()){ 

			$parentID =  $query->row()->SecondCategoryID;
			$this->db->where('Visibility',1);
			$this->db->where('ID',$parentID);
			$query = $this->db->get('second_category');


			if($query->num_rows()){ 

				return $query->result_array();
			}	
			else {
				return FALSE;
			}
		}

	}

	public function getCategoriesTypes($type,$category_ID){


		$CI =&get_instance();
		$CI->load->model('Categories');


		if($type=="First"){

			$this->db->where('Visibility',1);
			$this->db->where('FirstCategoryID',$CI->Categories->getFirstCategoryID($category_ID));
			$query = $this->db->get('second_category');

			if($query->num_rows()){ 

				return $query->result_array();
			}	
			else {
				return FALSE;
			}

		}else if($type=="Second"){


			$this->db->where('Visibility',1);
			$this->db->where('SecondCategoryID',$CI->Categories->getSecondCategoryID($category_ID));
			$query = $this->db->get('third_category');

			if($query->num_rows()){ 

				return $query->result_array();
			}	
			else {
				return FALSE;
			}

		}else if($type=="Third"){

			$this->db->select('SecondCategoryID');
			$this->db->where('Visibility',1);
			$this->db->where('EncryptedId',$category_ID);
			$query = $this->db->get('third_category');

			if($query->num_rows()){ 
				$parentID =  $query->row()->SecondCategoryID;

				$this->db->where('Visibility',1);
				$this->db->where('SecondCategoryID',$parentID);
				$query = $this->db->get('third_category');

				if($query->num_rows()){ 

					return $query->result_array();
				}	
				else {
					return FALSE;
				}

			}	
			else {
				return FALSE;
			}

		}else {

		}

		$this->db->where('Visibility',1);
		$query = $this->db->get('products');
		if($query->num_rows()){ 

			return $query->result_array();
		}	
		else {
			return FALSE;
		}		

	}

	public function updateStatus($status,$product_ID){
		$this->db->set('visibility',$status);
		$this->db->where('EncryptedId',$product_ID);
		$this->db->update('products');
	}


// __________________________Slider Features __________________

	

	public function getBestSellings(){

		$this->db->select('products.*');
		$this->db->where('products.Visibility',1)
		->from('products')
		->join('best_sellings', 'best_sellings.ProductID = products.ID');
		$query = $this->db->get();

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}
	}

	public function autoAddBestSellings(){


		$query = $this->db->select('ID')->order_by('ID',"desc")->limit(10,250)->get('products');
		if ($query->num_rows()) {
			# code...
			$this->db->where('Visibility',1);
			$this->db->delete('best_sellings');
			foreach ($query->result_array() as $row) {
				$this->addBestSellings($row['ID']);			
			}
		}
	}

	public function addBestSellings($product_ID){

		$this->db->set('ProductID', $product_ID);
		$this->db->set('Active', 1);
		$this->db->set('Visibility', 1);
		$this->db->insert('best_sellings');
	}

	public function removeBestSellings($product_ID){

		$this->db->where('ProductID', $product_ID);
		$this->db->delete('best_sellings');
	}
//___________// END BEST SELLINGS

	public function getNewArrival(){

		$this->db->select('products.*');
		$this->db->where('products.Visibility',1)
		->from('products')
		->join('new_arrivals', 'new_arrivals.ProductID = products.ID');
		$query = $this->db->get();

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}

	}

	public function autoAddNewArrivals(){


		$query = $this->db->select('ID')->order_by('ID',"desc")->limit(10,90)->get('products');
		if ($query->num_rows()) {
			# code...
			$this->db->where('Visibility',1);
			$this->db->delete('new_arrivals');

			foreach ($query->result_array() as $row) {
				$this->addNewArrivals($row['ID']);			
			}
		}

	}
	public function addNewArrivals($product_ID){

		$this->db->where('ProductID',$product_ID);
		$q = $this->db->get('new_arrivals');

		if ( $q->num_rows() > 0 ) 
		{

		} else {
			$this->db->set('ProductID', $product_ID);
			$this->db->set('Active', 1);
			$this->db->set('Visibility', 1);
			$this->db->insert('new_arrivals');
		}


	}

	public function removeNewArrivals($product_ID){

		$this->db->where('ProductID', $product_ID);
		$this->db->delete('new_arrivals');
	}

	public function getHotDeals(){

		$this->db->select('products.*');
		$this->db->where('products.Visibility',1)
		->from('products')
		->join('hot_deals', 'hot_deals.ProductID = products.ID');
		$query = $this->db->get();

		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}

	}


	public function addHotDeals($product_ID){

		$this->db->set('ProductID', $product_ID);
		$this->db->set('Active', 1);
		$this->db->set('Visibility', 1);
		$this->db->insert('hot_deals');
	}

	public function removeHotDeals($product_ID){

		$this->db->where('ProductID', $product_ID);
		$this->db->delete('hot_deals');
	}

	public function autoAddHotDeals(){

        $this->db->where('Visibility','1');
    	$query = $this->db->delete('hot_deals');

        
		$this->db->where('OfferType is not null AND product_unit.visibility=1');
		$query = $this->db->get('product_unit');

		if ($query->num_rows()) {

			foreach ($query->result_array() as $row) {

				$this->db->where('ProductID',$row['ProductID']);
				$q = $this->db->get('hot_deals');

				if ( $q->num_rows() > 0 ) 
				{

				} else {
					$this->db->set('ProductID', $row['ProductID']);
					$this->db->set('Active', 1);
					$this->db->set('Visibility', 1);
					$this->db->insert('hot_deals');
				}
			}

		}


	}
}

/* End of file product.php */
/* Location: ./application/models/product.php */