<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authentication_model');
       
    }
    
    public function logout()
        {
            date_default_timezone_set("ASIA/JAKARTA");
            $date = array('last_login' => date('Y-m-d H:i:s'));
            $id = $this->session->userdata('id');
            $this->Auth_model->logout($date, $id);
            $this->session->sess_destroy();
            redirect('admin/login');
        }
    }

?>