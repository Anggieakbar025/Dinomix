<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class barang_model extends CI_Model {

    public function getBarang()
    {
        $this->db->select('id_barang, barang.nama as nama_barang, barang.id_penjual as id_penjual, penjual.nama as nama_penjual, stok, harga, gambar, barang.id_kategori as id_kategori, kategori ');
        $this->db->from('barang');
        $this->db->join('penjual', 'barang.id_penjual = penjual.id_penjual');
        $this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori');
        return $this->db->get()->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
        
    }

    public function getPenjual()
    {
        return $this->db->get('penjual')->result_array();
    }


    public function updateBarang($gambar, $id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'id_kategori' => $this->input->post('id_kategori'),
            'id_penjual' => $this->input->post('id_penjual'),
            'stok' => $this->input->post('stok'),
            'gambar' => $gambar['file_name']
        );
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
    }

}

/* End of file barang_model.php */
