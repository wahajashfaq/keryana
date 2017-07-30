<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{

		$this->load->view('admin/add_product');
		exit;
		$this->load->model('Categories');
		$first_categories = $this->Categories->getFirstCategory();
		$second_categories = $this->Categories->getSecondCategory();
		
		$this->load->view('admin/add_category',['first_categories'=>$first_categories,'second_categories'=>$second_categories]);	
	}


	public function add2(){

		$data = array(
			'category_name'=> $this->input->post('category_name'),
			'category_id'=> $this->input->post('category_ID')
			);


			echo $data["catergory_name"];
			$this->load->model('Categories');
			$this->Categories->addSecondCategory($data);


	}


	public function allProduct(){
		$this->load->view('admin/all_product');
	}
	public function Add(){

		$this->load->model('Brand');
		$this->load->model('Categories');
		$brands_arr = $this->Brand->getAllBrands();
		$first_categories = $this->Categories->getFirstCategory();
		$this->load->view('admin/add_product',['brands'=>$brands_arr,'first_category'=>$first_categories]);
	}

	public function getSecondCategory(){

		$this->load->model('Categories');
		$result = $this->Categories->getSecondCategoryData($this->input->post('first_category_ID'));

		$returnData = '<option value="" >Select Second Category</option>';

        if($result) {

        	foreach ($result as $row) {

        	$option = '<option value="'.$row["EncryptedId"].'" >'.$row["Name"].'</option>';
        	$returnData = $returnData.$option;
        	
        	}
        		# code...
        }                     

        echo "$returnData";
	}

	public function getThirdCategory(){

		$this->load->model('Categories');
		$result = $this->Categories->getThirdCategoryData($this->input->post('second_category_ID'));

		$returnData = '<option value="" >Select Second Category</option>';

        if($result) {

        	foreach ($result as $row) {

        	$option = '<option value="'.$row["EncryptedId"].'" >'.$row["Name"].'</option>';
        	$returnData = $returnData.$option;
        	
        	}
        }                     

        echo "$returnData";
	}

	public function Add_Product(){

		$config['upload_path']          = './uploads/product_images';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if($this->upload->do_upload('image_file')){
		
		$img = $this->upload->data()['file_name'];

		}
		echo "<pre>";
		print_r($this->input->post());
		echo "$img";
		echo "</pre>";

		$this->load->model('KeryanaProduct');
		$this->KeryanaProduct->addNewProduct($this->input->post(),$img);
	}

	public function Add_Category(){

		$type = $this->input->post('category_type');

		$data = array(
			'category_name'=> $this->input->post('category'),
			'category_id'=> $this->input->post('category_ID')
			);

		if($type=="first"){

			$this->load->model('Categories');
			$this->Categories->addFirstCategory($data);

		} else if($type=="second"){

			$this->load->model('Categories');
			$this->Categories->addSecondCategory($data);

		} else if($type=="third"){

			$this->load->model('Categories');
			$this->Categories->addThirdCategory($data);
		}

		echo json_encode($data);
	}

}
