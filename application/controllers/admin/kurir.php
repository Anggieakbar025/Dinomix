<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kurir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/kurir_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Kurir';
        $data['kurir'] = $this->kurir_model->getKurir();
        $data['konten'] = 'admin/v_kurir';
        $this->load->view('template', $data);
    }

    public function tambahKurir()
    {
        $config['upload_path'] = './upload/kurir';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $this->upload->initialize($config);

            if (!empty($_FILES['fotopost']['name'])) {
                if ( $this->upload->do_upload('fotopost') ) {
                    $gambar = $this->upload->data();
                    $this->kurir_model->addKurir($gambar);
                    $this->session->set_flashdata('hijau', 'Berhasil tambah data');
                    redirect('admin/kurir');
                }else {
                    $this->session->set_flashdata('merah', 'Gagal tambah data');
                    redirect('admin/kurir','refresh');
                }
            }else {
                $this->session->set_flashdata('merah', 'Gagal Upload gambar');
                redirect('admin/kurir','refresh');
            }
    }

    public function editKurir($id)
    {
        $config['upload_path'] = './upload/kurir';
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
                    $this->kurir_model->updateKurir($gambar, $id);
                    $this->session->set_flashdata('hijau', 'Berhasil ubah data');
                    redirect('admin/kurir');
                }else {
                    $this->session->set_flashdata('merah', 'Gagal ubah data');
                    redirect('admin/kurir','refresh');
                }
            }else {
                $this->session->set_flashdata('merah', 'Gagal Upload gambar');
                redirect('admin/kurir','refresh');
            }
    }

    public function hapusKurir($id)
    {
        $this->db->where('id_kurir', $id);
        $this->db->delete('kurir');
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        redirect('admin/kurir','refresh');
    }

}

/* End of file kurir.php */
