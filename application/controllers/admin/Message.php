<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}
	
	public function index()
	{
		$this->load->view('admin/messages');
	}

}

/* End of file Message.php */
/* Location: ./application/controllers/admin/Message.php */