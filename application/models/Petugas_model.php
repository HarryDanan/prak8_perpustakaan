<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Petugas_model extends CI_Model
	{
		private $_table = "petugas";

		public $kd_petugas;
		public $nama;
		public $alamat;
	    public $username;
	    public $PASSWORD;
	    public $last_login;

		public function getAll(){
			return $this->db->get($this->_table)->result();
		}
		public function getById($kd_petugas)
    	{
        return $this->db->get_where($this->_table, ["kd_petugas" => $kd_petugas])->row();
   		}

   		public function input(){
   			$nama = $this->input->post('nama');
   			$alamat = $this->input->post('alamat');
   			$username = $this->input->post('username');
   			$password = $this->input->post('password');
   			$data  = array('nama' => $nama, 'alamat' => $alamat, 'username' => $username, 'password' =>$password);
   			
   			$this->db->insert('petugas', $data);
    	}
    
   	public function update($kd_petugas)
	    {
	        $post = $this->input->post();
	        $nama = $this->input->post('nama');
   			$alamat = $this->input->post('alamat');
   			$username = $this->input->post('username');
   			$data  = array('nama' => $nama, 'alamat' => $alamat, 'username' => $username);
	        $this->db->where('kd_petugas',$kd_petugas)->update('petugas', $data);
			
	    }


    	public function delete($kd_petugas)
	    {
	    	$this->db->delete('petugas', array('kd_petugas'=>$kd_petugas));
	    }

   		}
?>