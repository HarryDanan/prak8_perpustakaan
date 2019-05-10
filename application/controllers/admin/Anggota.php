<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
    }

    public function index()
    {
        $data["anggota"] = $this->anggota_model->getAll();
        $this->load->view("admin/anggota/list", $data);
    }

    public function add()
    {

        $this->load->view("admin/anggota/new_form");
    }

    public function tambah(){
        $this->anggota_model->input();
        $this->session->set_flashdata('message', 'Data berhasil di tambahkan');    
        //$this->load->view("admin/alert/berhasil_simpan");
        redirect ('admin/anggota');
    }

    public function insert(){
        $this->anggota_model->input();
        redirect('admin/anggota');
    }

   public function edit($kd_anggota = null)
    {

        if (!isset($kd_anggota)) redirect('admin/anggota');
       
        $anggota = $this->anggota_model;
        $anggota->update($kd_anggota);
  
        $data["anggota"] = $anggota->getById($kd_anggota);
        //$this->session->set_flashdata('message', 'Data berhasil diubah');    
        $this->load->view("admin/anggota/edit_form", $data);
        
    }

    public function delete($kd_anggota){
        $this->anggota_model->delete($kd_anggota);
        $this->session->set_flashdata('message', 'Data berhasil dihapus');    
        redirect('admin/anggota');
    }
}