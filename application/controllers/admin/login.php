<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/admin_login');
	}

	
}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */