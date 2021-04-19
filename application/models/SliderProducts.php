<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderProducts extends CI_Model {


	public function getNewArrivals(){

		$this->db->select('products.*')
		->from('products')
		->join('new_arrivals', 'new_arrivals.ProductID = products.ID');
		$query = $this->db->get();

		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	

	}

	public function getHotDeals(){

		$this->db->select('products.*')
		->from('products')
		->join('hot_deals', 'hot_deals.ProductID = products.ID');
		$query = $this->db->get();

		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	
	}

	public function getBestSellings(){

		$this->db->select('products.*')
				->from('products')
				->join('best_sellings', 'best_sellings.ProductID = products.ID');
		$query = $this->db->get();

		if($query->num_rows()){ 
			return $query->result_array();
		}	
		else {
			return FALSE;
		}	

	}



	public function add_NewArrivals($excel_id){

	}
	public function add_BestSellings($excel_id){

	}
	public function add_HotDeals($excel_id){

	}
	

}

/* End of file SliderProducts.php */
/* Location: ./application/models/SliderProducts.php */