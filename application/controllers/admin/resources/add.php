<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {


	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}


	public function index()
	{
		$this->load->view('admin/fileupload');
	}


	// Similarly create banner 2


	public function banner_one(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000; // 1 MB
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$config['file_name'] = "banner_two"; // , banner_one

		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
			$this->load->view('admin/add_resources', $error);
		} else
		{
			$data = array('upload_data' => $this->upload->data());
/*
			$this->load->model('Images');
			$this->Images->setBannerOne('uploads/banners/'.$data["upload_data"]["file_name"]);
			$this->Images->setBannerTwo('uploads/banners/'.$data["upload_data"]["file_name"]);
*/

			// Code to add Watermark
			// $this->load->library('image_lib');

			// $config['image_library'] = 'gd2';
			// $config['source_image'] = './uploads/sliding_banner/'.$data["upload_data"]["file_name"];
			// $config['wm_type'] = 'overlay';
			// $config['wm_overlay_path'] = './assets/images/carticon.png';
   //      //the overlay image
			// $config['wm_opacity'] = 50;
			// $config['wm_vrt_alignment'] = 'middle';
			// $config['wm_hor_alignment'] = 'middle';
			// $this->image_lib->initialize($config);
			// if (!$this->image_lib->watermark()) {
			// 	echo $this->image_lib->display_errors();
			// } else {
			// 	echo 'Successfully updated image with watermark';
			// }


			
			$this->load->view('upload_success', $data);
		}
	}

	public function brand(){

		$this->load->view('admin/add_brand');
	}


	public function add_brand(){


		$brand_name = $this->input->post('brand_name');

		$config['upload_path']          = './uploads/brands';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name'] = $brand_name; // 


		$this->load->library('upload', $config);

		

		if($this->upload->do_upload('image_file')){
		
			$img = $this->upload->data()['file_name'];
			$this->load->model('Brand');
			$this->Brand->addNewBrand($brand_name,$img);


			$this->session->set_flashdata('message', "$brand_name added in your Brands");
			return redirect('admin/resources/add/brand');

			echo "<pre>";
			print_r($this->input->post());
			echo "$img";
			echo "</pre>";
		}else
        {
                $error = array('error' => $this->upload->display_errors());

                print_r($error);
        }


	}
	public function sliding_banner(){

		$config['upload_path']          = './uploads/sliding_banner/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000; // 1 MB
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());

			print_r($error);
			$this->load->view('admin/add_resources', $error);
		}
		else
		{

			$data = array('upload_data' => $this->upload->data());
			$this->load->library('image_lib');

			$config['image_library'] = 'gd2';
			$config['source_image'] = './uploads/sliding_banner/'.$data["upload_data"]["file_name"];
			$config['wm_type'] = 'overlay';
			$config['wm_overlay_path'] = './assets/images/carticon.png';
        //the overlay image
			$config['wm_opacity'] = 50;
			$config['wm_vrt_alignment'] = 'middle';
			$config['wm_hor_alignment'] = 'middle';
			$this->image_lib->initialize($config);
			if (!$this->image_lib->watermark()) {
				echo $this->image_lib->display_errors();
			} else {
				echo 'Successfully updated image with watermark';
			}


			
			$this->load->view('upload_success', $data);
		}

	}


	public function product(){


	}

	public function categories(){


		$this->load->model('Categories');
		$first_categories = $this->Categories->getFirstCategory();
		$second_categories = $this->Categories->getSecondCategory();
		
		$this->load->view('admin/add_categories',['first_categories'=>$first_categories,'second_categories'=>$second_categories]);		
	}

	public function second_category(){

	}

	public function third_category(){

	}
}

/* End of file add.php */
/* Location: ./application/controllers/admin/resources/add.php */