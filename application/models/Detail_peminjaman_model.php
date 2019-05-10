<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Detail_peminjaman_model extends CI_Model
	{
		private $_table = "detil_peminjaman";

		public $kd_register;
		public $kd_pinjam;
		public $tgl_pinjam;
		public $tgl_kembali;
	    
		public function getAll(){
			return $this->db->get($this->_table)->result();
		}
		public function getById($kd_register)
    	{
        return $this->db->get_where($this->_table, ["kd_register" => $kd_register])->row();
   		}

   		public function input(){
   			$kd_register = $this->input->post('kd_register');
   			$kd_pinjam = $this->input->post('kd_pinjam');
   			$tgl_pinjam = $this->input->post('tgl_pinjam');
   			$tgl_kembali = $this->input->post('tgl_kembali');
   			$data  = array('kd_register' => $kd_register, 'kd_pinjam' => $kd_pinjam, 'tgl_pinjam' => $tgl_pinjam, 'tgl_kembali' => $tgl_kembali);
   			
   			$this->db->insert('detil_peminjaman', $data);
   			/*$kd_register = $this->input->post('kd_register');
   			$kd_pinjam = $this->input->post('kd_pinjam');
   			$tgl_kembali = $this->input->post('tgl_pinjam');
   			$tgl_pinjam = $this->input->post('tgl_kembali')
   			$data  = array('kd_register' => $kd_register, 'kd_pinjam' => $kd_pinjam, 'tgl_pinjam' => $tgl_pinjam, 'tgl_kembali' => $tgl_kembali);
   			
   			$this->db->insert('detil_peminjaman', $data);*/
    	}
    
   	public function update($kd_register)
	    {
	       $kd_register = $this->input->post('kd_register');
   			$kd_pinjam = $this->input->post('kd_pinjam');
   			$tgl_pinjam = $this->input->post('tgl_pinjam');
   			$tgl_kembali = $this->input->post('tgl_kembali');
   			$data  = array('kd_register' => $kd_register, 'kd_pinjam' => $kd_pinjam, 'tgl_pinjam' => $tgl_pinjam, 'tgl_kembali' => $tgl_kembali);
	        $this->db->where('kd_register',$kd_register)->update('detil_peminjaman', $data);
			
	    }


    	public function delete($kd_register)
	    {
	    	$this->db->delete('detil_peminjaman', array('kd_register'=>$kd_register));
	    }

   		}
?>