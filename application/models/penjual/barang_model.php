<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class barang_model extends CI_Model {

    public function getBarang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori');
        $this->db->where('id_penjual', $_SESSION['id_penjual']);
        return $this->db->get()->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function addBarang($gambar)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'id_kategori' => $this->input->post('id_kategori'),
            'id_penjual' => $_SESSION['id_penjual'],
            'stok' => $this->input->post('stok'),
            'gambar' => $gambar['file_name']
        );
        $this->db->insert('barang', $data);
    }
    
    public function updateBarang($gambar, $id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'id_kategori' => $this->input->post('id_kategori'),
            'id_penjual' => $_SESSION['id_penjual'],
            'stok' => $this->input->post('stok'),
            'gambar' => $gambar['file_name']
        );
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
    }

    
}

/* End of file penjual_model.php */
