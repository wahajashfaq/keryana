<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeryanaCoupon extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Coupon');
		if(!$this->session->userdata('admin_id'))
			return redirect('admin/login');
	}

	public function index()
	{
		$data = $this->Coupon->getAllCoupon();
		$this->load->view('admin/add_coupon',["All_COUPON"=>$data]);
	}

	public function AddCoupon(){

		$this->Coupon->addNewCoupon($this->input->post());
		return redirect('admin/KeryanaCoupon');
	}

	public function updateStatus(){

		$couponID = $this->input->post('couponID');
		$status = $this->input->post('status');

		$this->Coupon->updateCouponStatus($couponID,$status);

		echo "Done";
	}

}

/* End of file KeryanaCoupon.php */
/* Location: ./application/controllers/admin/KeryanaCoupon.php */