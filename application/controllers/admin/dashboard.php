<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['konten'] = 'admin/v_dashboard';
        $this->load->view('template', $data);
    }
}