<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function CreateAccount(){

		echo $this->input->post('fname');
		echo $this->input->post('lname');
		echo $this->input->post('email');
		echo $this->input->post('pass');

		exit;
	}

	public function Login(){
		echo $this->input->post('email');
		echo $this->input->post('pass');		

		exit;
	}
}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */