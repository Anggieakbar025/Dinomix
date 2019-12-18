<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

    public function updateStatus($id)
    {
        $data = array(
            'status' => $this->input->post('status')
        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', $data);
        
    }

    public function getTransaksi()
    {
        $where = "status = 'pesan' OR  status = 'bayar' OR status = 'kirim'";
        $this->db->select('*, pembeli.nama as nama_pembeli, barang.nama as nama_barang, penjual.nama as nama_penjual, kurir.nama as nama_kurir');
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
        $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli');
        $this->db->join('barang', 'detail_transaksi.id_barang = barang.id_barang');
        $this->db->join('penjual', 'barang.id_penjual = penjual.id_penjual');
        $this->db->join('kurir', 'transaksi.id_kurir = kurir.id_kurir');
        $this->db->join('pembayaran', 'transaksi.id_pembayaran = pembayaran.id_pembayaran');
        $this->db->where($where);
        
        
        
        return $this->db->get()->result_array();
    }

}

/* End of file transaksi_model.php */
