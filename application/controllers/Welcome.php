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
		$first_categories = $this->Categories->getFirstCategory();
		$second_categories = $this->Categories->getSecondCategory();
		$third_categories = $this->Categories->getThirdCategory();
		$brands = $this->Brand->getAllBrands();
		$newArrivals = $this->KeryanaProduct->getNewArrivals();
				


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

		
/*		echo "------------First---------------------";
		echo "<pre>";
		print_r($first_categories);
		echo "</pre>";

		echo "------------SECOND---------------------";
		echo "<pre>";
		print_r($second_categories);
		echo "</pre>";

		echo "------------Third---------------------";
		echo "<pre>";
		print_r($third_categories);
		echo "</pre>";
*/

		$this->load->view('landing',["categories"=>$first_categories,"brands"=>$brands,"NewArrivals"=>$newArrivals]);		
	}


	public function test(){
		$this->load->model('images');
		$this->images->getBannerOne();
		
	}
	public function about(){

		$this->load->view('about');	
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
		foreach ($result_products as &$row) {

    	$units["Units"] = array();
    	$row["Units"]  = $this->KeryanaProduct->getProductUnit($row["EncryptedId"]);

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
    	}

		$this->load->view('category',["categories"=>$first_categories,"filterd"=>$result_products,"side_categories"=>$result_sidebar,"SubCategory"=>$sub_category,"CurrentCategory"=>$currentCategory]);

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

		$this->load->view('product',["PRODUCT"=>$product_detail,"UNITS"=>$product_units,"categories"=>$first_categories]);	
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
