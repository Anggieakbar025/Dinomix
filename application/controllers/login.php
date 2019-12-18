<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $data['judul'] = 'Login';
        $this->load->view('log/v_login', $data);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if ($this->form_validation->run() == TRUE) {
            $this->login_model->cek_login();
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Login');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

}

/* End of file login.php */
