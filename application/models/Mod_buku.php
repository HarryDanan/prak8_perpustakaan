<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_buku extends CI_Model {

	public function view(){
		return $this->db->get('buku')->result();
	}

	public function view_by($kd_anggota){
		$this->db->where('kd_register', $kd_anggota);
		return $this->db->get('buku')->row();
	}

	public function validation($mode){
		$this->load->library('form_validation'); 
		
		if($mode == "save")
			$this->form_validation->set_rules('input_kd_register', 'Kode Buku', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('input_judul_buku', 'Judul Buku', 'required');
		$this->form_validation->set_rules('input_pengarang', 'Pengarang', 'required');
		$this->form_validation->set_rules('input_penerbit', 'Penerbit', 'required');
		$this->form_validation->set_rules('input_tahun_terbit', 'Tahun Terbit', 'required');
			
		if($this->form_validation->run()) 
			return TRUE; 
		else 
			return FALSE; 
	}
	
	public function save(){
		$data = array(
			"kd_register" => $this->input->post('input_kd_register'),
			"judul_buku" => $this->input->post('input_judul_buku'),
			"pengarang" => $this->input->post('input_pengarang'),
			"penerbit" => $this->input->post('input_penerbit'),
			"tahun_terbit" => $this->input->post('input_tahun_terbit')
		);
		
		$this->db->insert('buku', $data); 
	}
	
	public function edit($kd_register){
		$data = array(
			"judul_buku" => $this->input->post('input_judul_buku'),
			"pengarang" => $this->input->post('input_pangarang'),
			"penerbit" => $this->input->post('input_penerbit'),
			"tahun_terbit" => $this->input->post('input_tahun_terbit')
		);
		
		$this->db->where('kd_register', $kd_register);
		$this->db->update('buku', $data);
	}
	
	public function delete($kd_anggota){
		$this->db->where('kd_anggota', $kd_anggota);
		$this->db->delete('anggota'); 
	}
}
