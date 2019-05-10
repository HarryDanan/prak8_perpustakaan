<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('petugas_model');
    }

    public function index()
    {
        $data["petugas"] = $this->petugas_model->getAll();
        $this->load->view("admin/petugas/list", $data);
    }

    public function add()
    {

        $this->load->view("admin/petugas/new_form");
    }

    public function tambah(){
        $this->petugas_model->input();     
         $this->session->set_flashdata('message', 'Data Petugas berhasil di tambahkan');
        redirect ('admin/petugas');
    }

    public function insert(){
        $this->petugas_model->input();
        redirect('admin/petugas');
    }

   public function edit($kd_petugas = null)
    {

        if (!isset($kd_petugas)) redirect('admin/petugas');
       
        $petugas = $this->petugas_model;
        $petugas->update($kd_petugas);
  
        $data["petugas"] = $petugas->getById($kd_petugas);
        
        $this->load->view("admin/petugas/edit_form", $data);
    }

    public function delete($kd_petugas){
        $this->petugas_model->delete($kd_petugas);
         $this->session->set_flashdata('message', 'Data petugas berhasil diubah');
        redirect('admin/petugas');
    }
}