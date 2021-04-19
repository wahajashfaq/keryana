<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserOrders extends CI_Controller {

	public function index()
	{
		
	}

	public function mark_delivered(){

		$order_id = $this->input->post('orderID');

		if($order_id){

			$this->load->model('Order');
			$this->Order->setStatus($order_id,1);
			echo "Orded has been marked as delivered";
		}
	}
        public function mark_refunded(){

		$order_id = $this->input->post('orderID');

		if($order_id){

			$this->load->model('Order');
			$this->Order->setStatus($order_id,4);
			echo "Orded has been marked as refunded";
		}
	}

	public function mark_dispatched(){

		$order_id = $this->input->post('orderID');

		if($order_id){

			$this->load->model('Order');
			$this->Order->setStatus($order_id,2);
			echo "Orded has been marked as Dispatched";
		}
	}
	
	public function mark_pending(){

		$order_id = $this->input->post('orderID');

		if($order_id){

			$this->load->model('Order');
			$this->Order->setStatus($order_id,0);
			echo "Orded has been marked as Pending";
		}
	}
	
	public function mark_cancel(){

		$order_id = $this->input->post('orderID');

		if($order_id){

			$this->load->model('Order');
			$this->Order->setStatus($order_id,3);
			echo "Orded has been marked as Cancel";
		}
	}

}

/* End of file UserOrders.php */
/* Location: ./application/controllers/admin/UserOrders.php */