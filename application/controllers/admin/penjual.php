<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class penjual extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/penjual_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Penjual';
        $data['penjual'] = $this->penjual_model->getPenjual();
        $data['konten'] = 'admin/v_penjual';
        $this->load->view('template_tabel', $data);
    }

    public function hapusPenjual($id)
    {   
        $this->db->where('id_penjual', $id);
        $this->db->delete('penjual');
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        redirect('admin/penjual','refresh');
    }

}

/* End of file penjual.php */
