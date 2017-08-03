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
		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));	
		$this->load->view('customer/profile',["PROFILE"=>$data,"categories"=>$first_categories]);
		//echo "customer : ".$this->session->userdata("customer_id");				
	}


	public function logout(){

    $this->load->model('Customer');
    $this->Customer->setLastLoginTime($this->session->userdata('customer_id'));
    $this->session->unset_userdata('customer_id');
    return redirect('');
  }


}

/* End of file dashboard.php */
/* Location: ./application/controllers/customer/dashboard.php */