<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BestSellings extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{	

        $this->load->model('KeryanaProduct');
        $products = $this->KeryanaProduct->getAllProducts();
        $bestSellings = $this->KeryanaProduct->getBestSellings();


		$this->load->view('admin/best_sellings',["All_Products"=>$products,"Best_Sellings"=>$bestSellings]);	
	}


	public function add(){

        $this->load->model('KeryanaProduct');
        $this->KeryanaProduct->addBestSellings($this->input->post('productID'));
        echo "OK";
	}

	public function remove(){

        $this->load->model('KeryanaProduct');
        $this->KeryanaProduct->removeBestSellings($this->input->post('productID'));
        echo "OK";

	}


	public function autoAdd(){

		$this->load->model('KeryanaProduct');
        $this->KeryanaProduct->autoAddBestSellings();
        return redirect('admin/BestSellings','refresh');
	}

}

/* End of file BestSellings.php */
/* Location: ./application/controllers/admin/BestSellings.php */