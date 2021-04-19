<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		if($this->session->userdata('admin_id'))
			return redirect('admin/dashboard');
		else
			$this->load->view('admin/admin_login');
	}


	public function authentication(){


		if($this->session->userdata('admin_id'))
			return redirect('admin/dashboard');


		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE)
		{
			// Success
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('Admin');
			$login_id = $this->Admin->login_valid($username,$password);	
			
			if($login_id){
				// Correct username/password

				$this->session->set_userdata('admin_id',$login_id);


				//echo ('Logged In with '.$login_id);
				//exit;
				return redirect('admin/dashboard');

			} else {

				// Incorrect username/password
				$this->session->set_flashdata('error', 'Invalid username/password');
				return redirect('admin/login');
			}

		} else {
			$this->load->view('admin/admin_login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('admin_id');
		return redirect('admin/login');
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */