<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	public function index()
	{
		echo "Contact";

		
		exit;
	}

	public function contact_us(){
		$data = array(
			'c_email'=> $this->input->post('c_email'), 
			'c_number'=> $this->input->post('c_number'),
			'c_subject' => $this->input->post('c_subject'),
			'c_query' => $this->input->post('c_query')
			);

//Either you can print value or you can send value to database
		$this->load->model('contact');
		$this->contact->addContactData($data);
		echo json_encode($data);
		//$this->contact->addContactData();
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */