<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('customer_id'))
			return redirect('signup');
	}


	public function index()
	{
		$this->load->model('Customer');
		$data = $this->Customer->getProfileInfo($this->session->userdata("customer_id"));	
		$this->load->view('customer/profile',["PROFILE"=>$data]);
		//echo "customer : ".$this->session->userdata("customer_id");				
	}


	public function logout(){

    $this->load->model('Customer');
    $this->Customer->setLastLoginTime($this->session->userdata('customer_id'));
    $this->session->unset_userdata('customer_id');
    return redirect('');
  }


}

/* End of file dashboard.php */
/* Location: ./application/controllers/customer/dashboard.php */