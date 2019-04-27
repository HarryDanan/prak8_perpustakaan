<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Mod_peminjaman'); 
	}
	
	public function index(){
		$data['peminjaman'] = $this->Mod_peminjaman->view();
		$this->load->view('peminjaman/index', $data);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->Mod_peminjaman->validation("save")){ 
				$this->Mod_peminjaman->save(); 
				redirect('peminjaman');
			}
		}
		
		$this->load->view('peminjaman/form_tambah_peminjaman');
	}
	
	public function ubah($kd_peminjam){
		if($this->input->post('submit')){ 
			if($this->Mod_peminjaman->validation("update")){
				$this->Mod_peminjaman->edit($kd_peminjam); 
				redirect('peminjaman');
			}
		}
		
		$data['peminjaman'] = $this->SiswaModel->view_by($peminjaman);
		$this->load->view('peminjaman/form_ubah_peminjaman', $data);
	}
	
	public function hapus($kd_peminjam){
		$this->Mod_peminjaman->delete($kd_peminjaman); 
		redirect('peminjaman');
	}
}
