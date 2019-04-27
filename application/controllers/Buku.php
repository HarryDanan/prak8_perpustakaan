<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Mod_buku'); 
	}
	
	public function index(){
		$data['buku'] = $this->Mod_buku->view();
		$this->load->view('buku/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->Mod_buku->validation("save")){ 
				$this->Mod_buku->save();
				redirect('buku');
			}
		}
		
		$this->load->view('buku/form_tambah_buku');
	}
	
	public function ubah($kd_register){
		if($this->input->post('submit')){ 
			if($this->Mod_buku->validation("update")){ 
				$this->Mod_buku->edit($kd_register); 
				redirect('buku');
			}
		}
		
		$data['buku'] = $this->Mod_buku->view_by($kd_register);
		$this->load->view('buku/form_ubah_buku', $data);
	}
	
	public function hapus($kd_register){
		$this->Mod_buku->delete($kd_register); 
		redirect('buku');
	}
}
