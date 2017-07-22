<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/add_category');
	}


	public function Add_Category(){

		$type = $this->input->post('category_type');

		$data = array(
			'catergory_name'=> $this->input->post('category')
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