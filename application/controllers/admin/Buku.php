<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
       
    }

    public function index()
    {
        $data["buku"] = $this->buku_model->getAll();
        $this->load->view("admin/buku/list", $data);
    }

    public function add()
    {
      

        $this->load->view("admin/buku/new_form");
    }

    public function tambah(){
        $this->buku_model->input();     
         $this->session->set_flashdata('message', 'Data Buku berhasil ditambahkan');
        redirect ('admin/buku');
    }

    public function insert(){
        $this->buku_model->input();
        redirect('admin/buku');
    }


   public function edit($kd_registrasi = null)
    {

        if (!isset($kd_registrasi)) redirect('admin/buku');
       
        $buku = $this->buku_model;
        $buku->update($kd_registrasi);
 

        $data["buku"] = $buku->getById($kd_registrasi);
       //if (!$data["buku"]) show_404();
        
        $this->load->view("admin/buku/edit_form", $data);
    }

    public function delete($kd_registrasi){
        $this->buku_model->delete($kd_registrasi);
         $this->session->set_flashdata('message', 'Data buku berhasil dihapus');
        redirect('admin/buku');
    }
   
}