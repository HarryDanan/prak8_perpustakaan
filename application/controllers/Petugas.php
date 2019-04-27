<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Petugas extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Mod_petugas'); 
	}
	
	public function index(){
		$data['petugas'] = $this->Mod_petugas->view();
		$this->load->view('petugas/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->Mod_petugas->validation("save")){ 
				$this->Mod_petugas->save(); 
				redirect('petugas');
			}
		}
		
		$this->load->view('petugas/form_tambah_petugas');
	}
	
	public function ubah($kd_petugas){
		if($this->input->post('submit')){ 
			if($this->Mod_petugas->validation("update")){ 
				$this->Mod_petugas->edit($nis);
				redirect('petugas');
			}
		}
		
		$data['petugas'] = $this->Mod_petugas->view_by($kd_petugas);
		$this->load->view('petugas/form_ubah_petugas', $data);
	}
	
	public function hapus($kd_petugas){
		$this->Mod_petugas->delete($kd_petugas);
		redirect('petugas');
	}
}
