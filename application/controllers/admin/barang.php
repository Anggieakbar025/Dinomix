<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/barang_model');
        $this->load->library('upload');
        if($this->session->userdata('logged_in') == FALSE){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Barang';
        $data['barang'] = $this->barang_model->getBarang();
        $data['penjual'] = $this->barang_model->getPenjual();
        $data['kategori'] = $this->barang_model->getKategori();
        $data['konten'] = 'admin/v_barang';
        $this->load->view('template_tabel', $data);
    }

    public function hapusBarang($id)
    {   
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
        $this->session->set_flashdata('merah', 'Berhasil hapus data');
        redirect('admin/barang','refresh');
    }

    public function editBarang($id)
     {
         $config['upload_path'] = './upload/barang';
         $config['allowed_types'] = 'jpg|png|jpeg|gif';
         $config['max_width'] = '4480'; // pixel
         $config['max_height'] = '4480'; // pixel
         $config['file_name'] = $_FILES['fotopost']['name'];
 
         $path = './assets/picture/';
 
         $this->upload->initialize($config);
 
             if (!empty($_FILES['fotopost']['name'])) {
                 if ( $this->upload->do_upload('fotopost') ) {
                     $gambar = $this->upload->data();
                     //@unlink($path.$this->input->post('filelama'));
                     $this->barang_model->updateBarang($gambar, $id);
                     $this->session->set_flashdata('hijau', 'Berhasil ubah data');
                     redirect('admin/barang');
                 }else {
                     $this->session->set_flashdata('merah', 'Gagal ubah data');
                     redirect('admin/barang','refresh');
                 }
             }else {
                 $this->session->set_flashdata('merah', 'Gagal Upload gambar');
                 redirect('admin/barang','refresh');
             }
     }


}

/* End of file barang.php */
