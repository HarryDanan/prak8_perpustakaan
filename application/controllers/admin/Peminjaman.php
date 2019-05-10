<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
    }

    public function index()
    {
        $data["peminjaman"] = $this->peminjaman_model->getAll();
        $this->load->view("admin/peminjaman/list", $data);
    }

    public function add()
    {

        $this->load->view("admin/peminjaman/new_form");
    }

    public function tambah(){
        $this->peminjaman_model->input();   
         $this->session->set_flashdata('message', 'Data Peminjaman berhasil di tambahkan');  
        redirect ('admin/peminjaman');
    }

    public function insert(){
        $this->peminjaman_model->input();
        redirect('admin/peminjaman');
    }

   public function edit($kd_pinjam = null)
    {

        if (!isset($kd_pinjam)) redirect('admin/peminjaman');
       
        $peminjaman = $this->peminjaman_model;
        $peminjaman->update($kd_pinjam);
  
        $data["peminjaman"] = $peminjaman->getById($kd_pinjam);
        
        $this->load->view("admin/peminjaman/edit_form", $data);
    }

    public function delete($kd_pinjam){
        $this->peminjaman_model->delete($kd_pinjam);
         $this->session->set_flashdata('message', 'Data peminjaman berhasil dihapus');
        redirect('admin/peminjaman');
    }
}