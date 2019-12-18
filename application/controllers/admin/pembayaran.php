<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pembayaran_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['title'] = 'Pembayaran';
        $data['pembayaran'] = $this->pembayaran_model->getPembayaran();
        $data['konten'] = 'admin/v_pembayaran';
        $this->load->view('template', $data);
    }

    public function tambahPembayaran()
    {
        $config['upload_path'] = './upload/pembayaran';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

            if (!empty($_FILES['fotopost']['name'])) {
                if ( $this->upload->do_upload('fotopost') ) {
                    $gambar = $this->upload->data();
                    $this->pembayaran_model->addPembayaran($gambar);
                    $this->session->set_flashdata('hijau', 'Berhasil tambah data');
                    redirect('admin/pembayaran');
                }else {
                    $this->session->set_flashdata('merah', 'Gagal tambah data');
                    redirect('admin/pembayaran','refresh');
                }
            }else {
                $this->session->set_flashdata('merah', 'Gagal Upload gambar');
                redirect('admin/pembayaran','refresh');
            }
    }

    public function editPembayaran($id)
    {
        $config['upload_path'] = './upload/pembayaran';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $path = './assets/picture/';

        $this->upload->initialize($config);

            if (!empty($_FILES['fotopost']['name'])) {
                if ( $this->upload->do_upload('fotopost') ) {
                    $gambar = $this->upload->data();
                    @unlink($path.$this->input->post('filelama'));
                    $this->pembayaran_model->updatePembayaran($gambar, $id);
                    $this->session->set_flashdata('hijau', 'Berhasil ubah data');
                    redirect('admin/pembayaran');
                }else {
                    $this->session->set_flashdata('merah', 'Gagal ubah data');
                    redirect('admin/pembayaran','refresh');
                }
            }else {
                $this->session->set_flashdata('merah', 'Gagal Upload gambar');
                redirect('admin/pembayaran','refresh');
            }
    }

    public function hapusPembayaran($id)
    {
        $this->db->where('id_pembayran', $id);
        $this->db->delete('pembayaran');
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        redirect('admin/pambayaran','refresh');
    }

}

/* End of file pembayaran.php */
