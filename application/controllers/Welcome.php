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



		
		
		$this->load->view('landing',["categories"=>$first_categories]);
		
	}


	public function test(){
		$this->load->model('images');
		$this->images->getBannerOne();
		
	}
	public function about(){

		$this->load->view('about');	
	}
    
    public function category(){

		$this->load->view('category');	
	}
    
    public function product(){

		$this->load->view('product');	
	}

    public function home(){

		$this->load->view('home');	
	}

	public function popup(){
		$this->load->view('popup');	

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
    
    public function profile(){
        $this->load->view('profile');   
    }
    
    public function loc(){
        $this->load->view('loc');   
    }
}
