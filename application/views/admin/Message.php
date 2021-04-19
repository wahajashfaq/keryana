<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function total_view(){


		  $this->load->model('Order');
		  $this->load->model('Contact');

		  $order_count = $this->Order->totalViewed();
		  $Message_count = $this->Contact->totalViewed();

		  $data = array(
			'order_c'=> $order_count,
			'message_c' => $Message_count
			);

		echo json_encode($data);
	}

	public function compose(){
		$this->load->view('admin/compose_message');
	}


	public function send_email(){

			$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://mail.keryana.com',
			'smtp_port' => 465,
			'smtp_user' => 'welcome@keryana.com',
			'smtp_pass' => 'Wahaj125',
			'charset'   => 'iso-8859-1',
			'mailtype' => 'html'
			);
		$this->load->library('email', $config);


		$this->load->library('email');

		$this->email->set_newline("\r\n");
		$this->email->from('welcome@keryana.com', 'Keryana');
		$this->email->to($this->input->post('email')); 
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('body'));  

		if($this->email->send()){
			//echo "Email Send";
			$this->session->set_flashdata('MSG', 'Email has been sent');
			redirect('admin/Message/compose');
		}else{
			//echo $this->email->print_debugger();    
			$this->session->set_flashdata('MSG', 'Some Error Occured');
			redirect('admin/Message/compose');
		}
	}
	
	public function index()
	{
		$this->load->model('Contact');
		$messages = $this->Contact->getAllContacts();
		$this->Contact->markAllAsRead();
		$this->load->view('admin/messages',["all_message"=>$messages]);
	}

	public function view($id){

		$this->load->model('Contact');
		$message = $this->Contact->getSingleContact($id);
		$this->load->view('admin/messages_view',["my_message"=>$message[0]]);	
	}

	public function sendEmail($email,$content){

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://mail.keryana.com',
			'smtp_port' => 465,
			'smtp_user' => 'welcome@keryana.com',
			'smtp_pass' => 'Wahaj125',
			'charset'   => 'iso-8859-1',
			'mailtype' => 'html'
			);
		$this->load->library('email', $config);


		$this->load->library('email');

		$this->email->set_newline("\r\n");
		$this->email->from('welcome@keryana.com', 'Keryana');
		$this->email->to($email); 
		$this->email->subject('Keryana Response');
		$this->email->message($content);  

		if($this->email->send()){
			//echo "Email Send";
		}else{
			//echo $this->email->print_debugger();    
		}

	}
	public function Reply(){

		$this->load->model('Contact');
		$this->Contact->reply($this->input->post());
		$this->sendEmail($this->input->post('messageMail'),$this->input->post('reply_message'));
		echo '<div><strong>Info!</strong>Your Reply has been sent to user. Please Reload your message page</div>';
	}

}

/* End of file Message.php */
/* Location: ./application/controllers/admin/Message.php */