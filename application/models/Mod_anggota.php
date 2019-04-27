<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_anggota extends CI_Model {

	public function view(){
		return $this->db->get('anggota')->result();
	}
	

	public function view_by($kd_anggota){
		$this->db->where('kd_anggota', $kd_anggota);
		return $this->db->get('anggota')->row();
	}
	
	public function validation($mode){
		$this->load->library('form_validation'); 

		if($mode == "save")
			$this->form_validation->set_rules('input_kd_anggota', 'Kode anggota', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_prodi', 'Prodi', 'required');
		$this->form_validation->set_rules('input_jenjang', 'Jenjang', 'required|max_length[15]');
		$this->form_validation->set_rules('input_alamat', '', 'required');
			
		if($this->form_validation->run()) 
			return TRUE; 
		else 
			return FALSE; 
	}
	

	public function save(){
		$data = array(
			"kd_anggota" => $this->input->post('input_kd_anggota'),
			"nama" => $this->input->post('input_nama'),
			"prodi" => $this->input->post('input_prodi'),
			"jenjang" => $this->input->post('input_jenjang'),
			"alamat" => $this->input->post('input_alamat')
		);
		
		$this->db->insert('anggota', $data); 
	}
	
	public function edit($kd_anggota){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"prodi" => $this->input->post('input_prodi'),
			"jenjang" => $this->input->post('input_jenjang'),
			"alamat" => $this->input->post('input_alamat')
		);
		
		$this->db->where('kd_anggota', $kd_anggota);
		$this->db->update('anggota', $data); 
	}

	public function delete($kd_anggota){
		$this->db->where('kd_anggota', $kd_anggota);
		$this->db->delete('anggota'); 
	}
}
