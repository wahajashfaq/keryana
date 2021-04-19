<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductOffers extends CI_Model {

	public function getAllOffers(){


		$this->db->select('products.*,products.OfferType as OT,products.OfferAmount as OA,products.ID as PID,product_unit.*');
		$this->db->where('product_unit.OfferType is not null and product_unit.visibility = 1');
		$this->db->from('product_unit')
				->join('products', 'products.ID = product_unit.ProductID');

		$query = $this->db->get();
		if($query->num_rows()){
			return $query->result_array();
		}else
			return false;
		//exit;
	}


	public function removeOffer($unit_ID){

		$this->db->set('OfferType',null);
		$this->db->set('OfferAmount',null);
		$this->db->where('ID',$unit_ID);
		$this->db->update('product_unit');
	}

	public function addOffer($post_data){

		$this->db->set('OfferType',$post_data["offer_type"]);
		$this->db->set('OfferAmount',$post_data["offer_amount"]);
		$this->db->where('ID',$post_data["unit_ID"]);
		$this->db->update('product_unit');
	}

}

/* End of file ProductOffers.php */
/* Location: ./application/models/ProductOffers.php */
