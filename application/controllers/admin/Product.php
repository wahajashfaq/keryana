<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
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

/* End of file KeryanaProducts.php */
/* Location: ./application/controllers/admin/KeryanaProducts.php */