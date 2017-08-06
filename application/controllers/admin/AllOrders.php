<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllOrders extends CI_Controller {

	public function __construct(){

		parent::__construct();
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}


	public function index()
	{

		$this->load->model('Order');
		$all_orders_result = $this->Order->getAllOrders();

		$this->load->view('admin/all_orders',["AllOrders"=>$all_orders_result]);
	}

}

/* End of file AllOrders.php */
/* Location: ./application/controllers/admin/AllOrders.php */