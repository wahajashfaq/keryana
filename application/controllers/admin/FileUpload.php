<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileUpload extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}
	
	public function index()
	{
		$this->load->view('admin/update_products');
	}

}

/* End of file FileUpload.php */
/* Location: ./application/controllers/admin/FileUpload.php */