<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	public function index()
	{
		
	}

	public function price(){


		$this->load->model('KeryanaProduct');
		$this->load->model('Brand');

		$result_products  = $this->KeryanaProduct->getProductByCategoryID($this->input->post('type'),$this->input->post('category_id'));



		$filter_products = [];
		$filter_brands = [];

		$input_brands = $this->input->post('brands_array');


		if ($result_products) {
			foreach ($result_products as &$row) {

				$units["Units"] = array();
				$row["Units"]  = $this->KeryanaProduct->getProductUnit($row["EncryptedId"]);

				if($row["Units"]){
					foreach ($row["Units"] as &$units) {
				# code...


						if($row["BrandID"]){
							$row["BrandName"] = $this->Brand->getBrandNameByID($row["BrandID"]);
						}else{

							$row["BrandName"] = "";
						}


						$units["Discount"] = 0;

						if(isset($units["OfferType"])) {

							if($units["OfferType"]=="Amount"){

								$units["Discount"] = $units["OfferAmount"];

							}else if($units["OfferType"]=="Percent"){	

								$units["Discount"] = $units["OfferAmount"]*$units["Price"]/100;
							}
						}else{
							$units["Discount"] = 0;
						}



						if($this->input->post('price5') || $this->input->post('price3') || $this->input->post('price1') || $this->input->post('price4') || $this->input->post('price2'))
						{

							if($this->input->post('price1')){

								if($units["Price"]<=50){
									$filter_products[$row['EncryptedId']]=  $row;
								}

							}if($this->input->post('price2')){

								if($units["Price"]<=100 && $units["Price"]>=50){
									$filter_products[$row['EncryptedId']]=  $row;
								}

							}if($this->input->post('price3')){

								if($units["Price"]<=500 && $units["Price"]>=100){
									$filter_products[$row['EncryptedId']]=  $row;
								}

							}if($this->input->post('price4')){

								if($units["Price"]<=1000 && $units["Price"]>=500){
									$filter_products[$row['EncryptedId']]=  $row;
								}

							}if($this->input->post('price5')){

								if($units["Price"]>1000){
									$filter_products[$row['EncryptedId']]=  $row;
								}

							}
						} else {
							$filter_products = $result_products;
						}

					}
				}

			}

		}



		foreach ($filter_products as &$row) {
			

			if($input_brands){
				foreach ($input_brands as $brand_id) {

					if ($row['BrandID'] && $row['BrandID']==$brand_id) {

						$filter_brands[$row['EncryptedId']] = $row;

					}
						# code...
				}
			}


		}


		if ($filter_brands) {
			# code...
			$filter_products = $filter_brands;
		}

		return $this->load->view("product_filterd",['filterd'=>$filter_products]);
		exit;


		if($this->input->post('price1')){
			echo "Price1 is set";
		}if($this->input->post('price2')){
			echo "Price2 is set";
		}if($this->input->post('price3')){
			echo "Price3 is set";
		}if($this->input->post('price4')){
			echo "Price4 is set";
		}if($this->input->post('price5')){
			echo "Price5 is set";
		}
	}

}

/* End of file Filter.php */
/* Location: ./application/controllers/Filter.php */