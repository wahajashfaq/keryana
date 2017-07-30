<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('customer_id'))
			return redirect('signup');
	}


	public function index()
	{
		
	}

	public function update(){


		$this->load->model('Customer');
		$this->Customer->updateProfile($this->input->post(),$this->session->userdata('customer_id'));

		return redirect('customer/dashboard','refresh');
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/customer/Profile.php */