<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeryanaCustomers extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}


	public function index()
	{
		$this->load->model('Customer');
		$CUSTOMERS = $this->Customer->getAllCustomers();
		$this->load->view('admin/keryana_customers',["CUSTOMERS"=>$CUSTOMERS]);
	}

}

/* End of file KeryanaCustomers.php */
/* Location: ./application/controllers/admin/KeryanaCustomers.php */