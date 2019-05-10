<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_peminjaman_model');
    }

    public function index()
    {
        $data["detail_peminjaman"] = $this->detail_peminjaman_model->getAll();
        $this->load->view("admin/detail_peminjaman/list", $data);
    }

    public function add()
    {

        $this->load->view("admin/detail_peminjaman/new_form");
    }

    public function tambah(){
        $this->detail_peminjaman_model->input();     
        redirect ('admin/detail_peminjaman');
         $this->session->set_flashdata('message', 'Detail Peminjaman berhasil di tambahkan');
    }

    public function insert(){
        $this->detail_peminjaman_model->input();
        redirect('admin/detail_peminjaman');
    }

   public function edit($kd_register = null)
    {

        if (!isset($kd_register)) redirect('admin/detail_peminjaman');
       
        $detail_peminjaman = $this->detail_peminjaman_model;
        $detail_peminjaman->update($kd_register);
  
        $data["detail_peminjaman"] = $detail_peminjaman->getById($kd_register);
        
        $this->load->view("admin/detail_peminjaman/edit_form", $data);
    }

    public function delete($kd_register){
        $this->detail_peminjaman_model->delete($kd_register);
         $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('admin/detail_peminjaman');
    }
}