<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}


	public function index()
	{
		$this->load->view('admin/admin_dashboard');		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */