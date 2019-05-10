<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Login_model extends CI_Model
	{
		public $_table = "petugas"; 

		public $username;
		public $password;
		
		public function input(){
   			$username = $this->input->post('username');
   			$password = $this->input->post('password');
   			$data  = array('username' => $username, 'password' => $password);
   			$this->session->set_userdata($data);
   			$this->db->get_where('petugas', $data);
   		
    	}
    }	

?>