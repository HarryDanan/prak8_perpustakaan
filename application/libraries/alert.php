<?php
/**
 * Alert Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Alert / Notification
 * @author		Brian Abraham : Dumet School
 * @link		https://dumetschool.com
 */
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Alert {
	
	private $CI;
	private $data;
	private $tag_after = '<br/>';
	
	public function __construct()
	{
		// Copy object CI
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		// Variable untuk alert non flashdata
		$this->data['_nr'] = array();
		// Variable untuk alert flashdata
		$this->data['_rr'] = array();
	}

	
	//Method untuk men set alert
	public function set($type, $message = 'Data Berhasil ditambahkan', $is_nr = false)
	{
		
		if(!$is_nr){
			
			// Buat alert dengan menggunakan flashdata
			$this->data['_rr'][$type][] = $message;
			$this->_set_rr($type, $message);
			
		}else{
			
			// Buat alert dengan variable biasa
			$this->data['_nr'][$type][] = $message;
		}
		
		// Return this supaya bisa chainable
		return $this;
	}

	
	//Method untuk flashdata
	private function _set_rr($type, $message)
	{
		foreach($this->data['_rr'] as $type => $val) 
		{
			// Buat flashdata CI
			$this->CI->session->set_flashdata($type, $val);
		}
	}
	
}