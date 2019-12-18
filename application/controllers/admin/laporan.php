<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/laporan_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['laporan'] = $this->laporan_model->getLaporan();
        $data['konten'] = 'admin/v_laporan';
        $this->load->view('template_tabel', $data);
    }

    public function hapusLaporan($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        
    }

}

/* End of file laporan.php */
