<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_petugas extends CI_Model {
	public function view(){
		return $this->db->get('petugas')->result();
	}
	
	public function view_by($kd_petugas){
		$this->db->where('kd_petugas', $kd_petugas);
		return $this->db->get('petugas')->row();
	}
	
	public function validation($mode){
		$this->load->library('form_validation'); 

		if($mode == "save")
			$this->form_validation->set_rules('input_kd_petugas', 'kd_petugas', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('input_nama_p', 'nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_alamat_p', 'alamat', 'required');
			
		if($this->form_validation->run())
			return TRUE; 
		else 
			return FALSE; 
	}
	
	public function save(){
		$data = array(
			"kd_petugas" => $this->input->post('input_kd_petugas'),
			"nama" => $this->input->post('input_nama_p'),
			"alamat" => $this->input->post('input_alamat_p')
		);
		
		$this->db->insert('petugas', $data); 
	}
	
	public function edit($kd_petugas){
		$data = array(
			"nama" => $this->input->post('input_nama_p'),
			"alamat" => $this->input->post('input_alamat_p')
		);
		
		$this->db->where('kd_petugas', $kd_petugas);
		$this->db->update('petugas', $data); 
	}
	
	public function delete($kd_petugas){
		$this->db->where('kd_petugas', $kd_petugas);
		$this->db->delete('petugas'); 
	}
}
