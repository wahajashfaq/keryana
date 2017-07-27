<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{

	}


	public function allCategories(){

		$this->load->model('Categories');
		$first_categories = $this->Categories->getFirstCategory();
		$second_categories = $this->Categories->getSecondCategory();
		$third_categories = $this->Categories->getThirdCategory();
		$this->load->view('admin/all_categories',['first_categories'=>$first_categories,'second_categories'=>$second_categories,'third_categories'=>$third_categories]);
	}

	public function updateCategory(){

		$data = array(
			'category_type' => $this->input->post('categoryType'),
			'category_id' => $this->input->post('categoryID'),
			'updated_value' => $this->input->post('updateValue'),
			);



		$this->load->model('Categories');
		if($data["updated_value"]!=''){


			if($data["category_type"]=="first"){
				$this->Categories->updateFirstCategory($data);


			} else if($data["category_type"]=="second"){

				$this->Categories->updateSecondCategory($data);

			} else if($data["category_type"]=="third"){

				$this->Categories->updateThirdCategory($data);

			}
		}

			return redirect('admin/Category/allCategories');

	}


	public function deleteCategory(){

		$data = array(
			'category_id' => $this->input->post('categoryID'),
			'category_type' => $this->input->post('categoryType')
			);

			$this->load->model('Categories');

			if($data["category_type"]=="first"){
				$this->Categories->deleteFirstCategory($data);

			} else if($data["category_type"]=="second"){

				$this->Categories->deleteSecondCategory($data);

			} else if($data["category_type"]=="third"){

				$this->Categories->deleteThirdCategory($data);

			}
		

			return redirect('admin/Category/allCategories');

	}
}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */