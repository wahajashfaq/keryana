<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotDeals extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{	

        $this->load->model('KeryanaProduct');
        $products = $this->KeryanaProduct->getAllProducts();
        $bestSellings = $this->KeryanaProduct->getHotDeals();


		$this->load->view('admin/hot_deal',["All_Products"=>$products,"Best_Sellings"=>$bestSellings]);	
	}

	public function add(){

        $this->load->model('KeryanaProduct');
        $this->KeryanaProduct->addHotDeals($this->input->post('productID'));
        echo "OK";
	}

	public function remove(){

        $this->load->model('KeryanaProduct');
        $this->KeryanaProduct->removeHotDeals($this->input->post('productID'));
        echo "OK";

	}

	public function autoAdd(){
		$this->load->model('KeryanaProduct');
        $this->KeryanaProduct->autoAddHotDeals();
        return redirect('admin/HotDeals','refresh');
	}

}

/* End of file HotDeals.php */
/* Location: ./application/controllers/admin/HotDeals.php */