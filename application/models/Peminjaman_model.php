<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Peminjaman_model extends CI_Model
	{
		private $_table = "peminjaman";

		public $kd_pinjam;
		public $kd_anggota;
		public $kd_petugas;
	    
		public function getAll(){
			return $this->db->get($this->_table)->result();
		}
		public function getById($kd_pinjam)
    	{
        return $this->db->get_where($this->_table, ["kd_pinjam" => $kd_pinjam])->row();
   		}

   		public function input(){
   			$kd_anggota = $this->input->post('kd_anggota');
   			$kd_petugas = $this->input->post('kd_petugas');
   			$data  = array('kd_anggota' => $kd_anggota, 'kd_petugas' => $kd_petugas);
   			
   			$this->db->insert('peminjaman', $data);
    	}
    
   	public function update($kd_pinjam)
	    {
	        $post = $this->input->post();
	        $kd_anggota = $this->input->post('kd_anggota');
   			$kd_petugas = $this->input->post('kd_petugas');
   			$data  = array('kd_anggota' => $kd_anggota, 'kd_petugas' => $kd_petugas);
	        $this->db->where('kd_pinjam',$kd_pinjam)->update('peminjaman', $data);
			
	    }


    	public function delete($kd_pinjam)
	    {
	    	$this->db->delete('peminjaman', array('kd_pinjam'=>$kd_pinjam));
	    }

   		}
?>