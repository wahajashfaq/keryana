<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_Post_Controller extends CI_Controller {

// Show view Page
	public function index(){
		$this->load->view("ajax");
	}

// This function call from AJAX
	public function user_data_submit() {
		$data = array(
			'c_email'=> $this->input->post('c_email'), 
			'c_number'=> $this->input->post('c_number'),
			'c_subject' => $this->input->post('c_subject'),
			'c_query' => $this->input->post('c_query')
			);

//Either you can print value or you can send value to database
		echo json_encode($data);

		//echo "Your Data is received";
	}

}