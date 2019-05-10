<?php  
	defined('BASEPATH') OR exit('No Direct script access allowed');

	/**
	* 
	*/
	class Anggota_model extends CI_Model
	{
		private $_table = "anggota";

		public $kd_anggota;
		public $nama;
		public $prodi;
		public $jenjang;
		public $alamat;
	    
		public function getAll(){
			return $this->db->get($this->_table)->result();
		}
		public function getById($kd_anggota)
    	{
        return $this->db->get_where($this->_table, ["kd_anggota" => $kd_anggota])->row();
   		}

   		public function input(){
   			$nama = $this->input->post('nama');
   			$prodi = $this->input->post('prodi');
   			$jenjang = $this->input->post('jenjang');
   			$alamat = $this->input->post('alamat');
   			$data  = array('nama' => $nama, 'prodi' => $prodi, 'jenjang' => $jenjang, 'alamat' =>$alamat);
   			
   			$this->db->insert('anggota', $data);
    	}
    
   		public function update($kd_anggota)
	    {
	        $nama = $this->input->post('nama');
   			$prodi = $this->input->post('prodi');
   			$jenjang = $this->input->post('jenjang');
   			$alamat = $this->input->post('alamat');
   			$data  = array('nama' => $nama, 'prodi' => $prodi, 'jenjang' => $jenjang, 'alamat' =>$alamat);
	        $this->db->where('kd_anggota',$kd_anggota)->update('anggota', $data);
			
	    }


    	public function delete($kd_anggota)
	    {
	    	$this->db->delete('anggota', array('kd_anggota'=>$kd_anggota));
	    }

   		}
?>