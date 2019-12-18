<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pembeli_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Pembeli';
        $data['pembeli'] = $this->pembeli_model->getPembeli();
        $data['konten'] = 'admin/v_pembeli';
        $this->load->view('template_tabel', $data);
    }

    public function hapusPembeli($id)
    {   
        $this->db->where('id_pembeli', $id);
        $this->db->delete('pembeli');
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        redirect('admin/pembeli','refresh');
    }

}

/* End of file pembeli.php */
