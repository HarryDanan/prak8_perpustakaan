<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Authentication_model extends CI_Model
	{
			
		public function logout($date, $id)
	    {
	        $this->db->where('petugas', $id);
	        $this->db->update('petugas', $date);
	    }
		
   		}
?>