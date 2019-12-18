<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class history extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penjual/history_model');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['title'] = 'History';
        $data['history'] = $this->history_model->getHistory();
        $data['konten'] = 'penjual/v_history';
        $this->load->view('template_tabel', $data);
    }

    public function hapusHistory($id)
    {   
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
        
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        redirect('penjual/history','refresh');
    }

}

/* End of file history.php */
