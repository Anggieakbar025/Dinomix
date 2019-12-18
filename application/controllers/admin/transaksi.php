<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/transaksi_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Transaksi';
        $data['transaksi'] = $this->transaksi_model->getTransaksi();
        $data['konten'] = 'admin/v_transaksi';
        $this->load->view('template_tabel', $data);
    }

    public function editStatus($id)
     {
         $this->form_validation->set_rules('status', 'status', 'trim|required');
         
         if ($this->form_validation->run() == TRUE) {
             $this->transaksi_model->updateStatus($id);
             $this->session->set_flashdata('update', 'Berhasil edit data');
             redirect('admin/transaksi','refresh');
         } else {
             $this->session->set_flashdata('update', 'Gagal edit data');
             redirect('admin/transaksi','refresh');
         }
     }

}

/* End of file transaksi.php */
