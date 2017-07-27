<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

	public function login_valid($user,$pass){

		$pass = md5($pass);
		$q = $this->db->where(['Username'=>$user,'Password'=>$pass])
					  ->from('admin')
					  ->get();

		if($q->num_rows()){
			return $q->row()->EncryptedUsername;
		}	else {
			return FALSE;
		}			
	}	

	

}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */