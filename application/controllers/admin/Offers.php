<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{
		$this->load->model('ProductOffers');
		$offerd_products = $this->ProductOffers->getAllOffers();
		$this->load->view('admin/add_offers', ["all_offers"=>$offerd_products]);
	}

	public function removeOffer(){

		$this->load->model('ProductOffers');
		$this->ProductOffers->removeOffer($this->input->post('unitID'));
		return redirect('admin/Offers','refresh');
	}	

	public function product_offer(){

		$this->load->model('ProductOffers');
		$this->ProductOffers->addOffer ($this->input->post('unitID'));
		return redirect('admin/Offers','refresh');
	}
}
