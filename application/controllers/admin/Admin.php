<?php

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			# code...
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->login->view('admin/buku');
	}
}

?>