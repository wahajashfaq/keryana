<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderSlot extends CI_Model {

	
	public function getAllTimeSlots(){

		$query = $this->db->get('order_timeslots');
		if($query->num_rows()){
			return $query->result_array();
		}else{
			return FALSE;
		}
	}	

}

/* End of file OrderSlot.php */
/* Location: ./application/models/OrderSlot.php */