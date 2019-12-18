<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class registerPenjual extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function index()
    {
        $this->load->view('log/v_register');
    }

    public function tambahData()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->register_model->addData();
            $this->session->set_flashdata('hijau', 'Berhasil Daftar');
            redirect('login','refresh');
        } else {
            $this->session->set_flashdata('merah', 'Gagal Daftar');
            redirect('RegisterPenjual','refresh');
        }
        
    }

}

/* End of file registerUser.php */
