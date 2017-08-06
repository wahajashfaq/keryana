<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{
		$this->load->view('admin/add_sliders.php');
	}


	public function sidebanner (){

		$this->load->view('admin/add_side_banners.php');
	}

	public function banner_one(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000; // 1 MB
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$config['file_name'] = "banner_one"; // , banner_one

		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_side_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			return redirect('admin/resources/Sliders/sidebanner');
		}
	}

	public function banner_two(){

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
			$this->load->view('admin/add_side_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			return redirect('admin/resources/Sliders/sidebanner');
		}
	}

	public function all(){

		$this->load->model('Banner');
		$all_banners = $this->Banner->getSlidingBanners();
		$this->load->view('admin/all_sliding_banners', ["Banners"=>$all_banners]);
	}

	public function add(){


		$config['upload_path']          = './uploads/sliding_banner';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 6000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1280;


		$config['file_name'] = "Slider"; 


		$this->load->library('upload', $config);

		if($this->upload->do_upload('image_file')){

			$img = $this->upload->data()['file_name'];
			$this->load->model('Banner');
			$this->Banner->addSlidingBanner($img);


			$this->session->set_flashdata('message', "Image has been updated");
			return redirect('admin/resources/Sliders');
		}else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_sliders', $error);
		}

	}

	public function updateSliders(){

		$id = $this->input->post('imageID');
		$status = $this->input->post('status');


		$this->load->model('Banner');
		$this->Banner->setStatus($id,$status);

		echo "Successfully Changes";
	}
	public function view(){

		$this->load->model('Banner');
		$slidingBanners = $this->Banner->getSlidingBanners();

		$this->load->view('admin/all_banners', $slidingBanners);

	}

}

/* End of file Sliders.php */
/* Location: ./application/controllers/admin/resources/Sliders.php */