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
	
	public function bottombanner (){

		$this->load->view('admin/add_bottom_banners.php');
	}
	
	public function threebanner (){

		$this->load->view('admin/add_three_banners.php');
	}

	public function banner_one(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "banner_one"; // , banner_one
    
		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file

        $this->load->model('Banner');
		    
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Banner One");
		}


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_side_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Banner One");
			return redirect('admin/resources/Sliders/sidebanner');
		}
	}
	
	
	public function bottombanner_one(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "bottombanner_one"; // , banner_one
    
		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file

        $this->load->model('Banner');
		    
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Bottom Banner One");
		}


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_bottom_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Bottom Banner One");
			return redirect('admin/resources/Sliders/bottombanner');
		}
	}
	
	public function bottombanner_two(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "bottombanner_two"; // , banner_one
    
		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file

        $this->load->model('Banner');
		    
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Bottom Banner Two");
		}


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_bottom_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Bottom Banner Two");
			return redirect('admin/resources/Sliders/bottombanner');
		}
	}
	
	public function threebanner_one(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "threebanner_one"; // , banner_one
    
		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file

        $this->load->model('Banner');
		    
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Three Banner One");
		}


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_three_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Three Banner One");
			return redirect('admin/resources/Sliders/threebanner');
		}
	}
	
	
	public function threebanner_two(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "threebanner_two"; // , banner_one
    
		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file

        $this->load->model('Banner');
		    
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Three Banner Two");
		}


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_three_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Three Banner Two");
			return redirect('admin/resources/Sliders/threebanner');
		}
	}
	
	public function threebanner_three(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "threebanner_three"; // , banner_one
    
		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file

        $this->load->model('Banner');
		    
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Three Banner Three");
		}


		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_three_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Three Banner Three");
			return redirect('admin/resources/Sliders/threebanner');
		}
	}

	public function banner_two(){

		$config['upload_path']          = './uploads/banners/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 15000; // 1 MB
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;

		$config['file_name'] = "banner_two"; // , banner_one

		$this->load->library('upload', $config);
		$this->upload->overwrite = true; // To overwrite the file
		
		$this->load->model('Banner');
		
		if ($this->input->post('url')) {
			$this->Banner->setBannerURL($this->input->post('url'),"Banner Two");
		}




		if ( ! $this->upload->do_upload('image_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_side_banners', $error);
		} else
		{
			$this->session->set_flashdata('message', "Image has been updated");
			$this->Banner->setBannerURL($this->input->post('url'),"Banner Two");
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
		$config['max_size']             = 15000;
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;


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