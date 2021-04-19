<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewArrivals extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{	

        $this->load->model('KeryanaProduct');
        $products = $this->KeryanaProduct->getAllProducts();
        $bestSellings = $this->KeryanaProduct->getNewArrival();


		$this->load->view('admin/new_arrival',["All_Products"=>$products,"Best_Sellings"=>$bestSellings]);	
	}

	public function add(){

        $this->load->model('KeryanaProduct');
        $this->KeryanaProduct->addNewArrivals($this->input->post('productID'));
        echo "OK";
	}

	public function remove(){
        $this->load->model('KeryanaProduct');
        $this->KeryanaProduct->removeNewArrivals($this->input->post('productID'));
        echo "OK";
	}

	public function autoAdd(){

		$this->load->model('KeryanaProduct');
        $this->KeryanaProduct->autoAddNewArrivals();
        return redirect('admin/NewArrivals','refresh');

	}

}

/* End of file NewArrivals.php */
/* Location: ./application/controllers/admin/NewArrivals.php */