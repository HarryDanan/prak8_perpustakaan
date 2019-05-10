<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view("admin/login");
    }

    public function aksi_login(){
        $this->Login_model->input();     
        redirect ('admin/buku');
    }
}