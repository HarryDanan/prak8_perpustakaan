<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Buku_model extends CI_Model
	{
		private $_table = "buku";

		public $kd_registrasi;
		public $judul_buku;
		public $pengarang;
		public $penerbit;
		public $tahun_penerbit;

	
	    
		public function getAll(){
			return $this->db->get($this->_table)->result();
		}
		public function getById($kd_registrasi)
    	{
        return $this->db->get_where($this->_table, ["kd_registrasi" => $kd_registrasi])->row();
   		}

   		public function input(){
   			//$post = $this->input->post();
   			$judul_buku = $this->input->post('judul_buku');
   			$pengarang = $this->input->post('pengarang');
   			$penerbit = $this->input->post('penerbit');
   			$tahun_penerbit = $this->input->post('tahun_penerbit');
   			$data  = array('judul_buku' => $judul_buku, 'pengarang' => $pengarang, 'penerbit' => $penerbit, 'tahun_penerbit' => $tahun_penerbit);
   			
   			$this->db->insert('buku', $data);
    	}
   
   	public function update($kd_registrasi)
	    {
	        $post = $this->input->post();
	       
	        $judul_buku = $this->input->post('judul_buku');
   			$pengarang = $this->input->post('pengarang');
   			$penerbit = $this->input->post('penerbit');
   			$tahun_penerbit = $this->input->post('tahun_penerbit');
	       
	        $data  = array('judul_buku' => $judul_buku, 'pengarang' => $pengarang, 'penerbit' => $penerbit, 'tahun_penerbit' => $tahun_penerbit);
	        
	        $this->db->where('kd_registrasi',$kd_registrasi)->update('buku', $data);
			
	    }


    	public function delete($kd_registrasi)
	    {
	    	$this->db->delete('buku', array('kd_registrasi'=>$kd_registrasi));
	       // return $this->db->delete($this->_table, array("kd_registrasi" => $kd_registrasi));
	    }

   		}
?>