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
		
		echo "customer : ".$this->session->userdata("customer_id");				
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/customer/dashboard.php */