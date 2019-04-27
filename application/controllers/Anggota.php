<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Mod_anggota');
	}
	
	public function index(){
		$data['anggota'] = $this->Mod_anggota->view();
		$this->load->view('anggota/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->Mod_anggota->validation("save")){ 
				$this->Mod_anggota->save(); 
				redirect('anggota');
			}
		}
		
		$this->load->view('anggota/form_tambah');
	}
	
	public function ubah($kd_anggota){
		if($this->input->post('submit')){
			if($this->Mod_anggota->validation("update")){ 
				$this->Mod_anggota->edit($kd_anggota); 
				redirect('anggota');
			}
		}
		
		$data['anggota'] = $this->Mod_anggota->view_by($kd_anggota);
		$this->load->view('anggota/form_ubah', $data);
	}
	
	public function hapus($kd_anggota){
		$this->Mod_anggota->delete($kd_anggota); 
		redirect('anggota');
	}
}
