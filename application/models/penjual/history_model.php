
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class history_model extends CI_Model {

    public function getHistory()
    {
        $where = "status = 'selesai' OR status = 'batal'";
        $this->db->select('*, pembeli.nama as nama_pembeli, barang.nama as nama_barang, penjual.nama as nama_penjual, kurir.nama as nama_kurir');
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
        $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli');
        $this->db->join('barang', 'detail_transaksi.id_barang = barang.id_barang');
        $this->db->join('penjual', 'barang.id_penjual = penjual.id_penjual');
        $this->db->join('kurir', 'transaksi.id_kurir = kurir.id_kurir');
        $this->db->join('pembayaran', 'transaksi.id_pembayaran = pembayaran.id_pembayaran');
        $this->db->where('transaksi.id_penjual', $_SESSION['id_penjual']);
        $this->db->where($where);
        
        return $this->db->get()->result_array();
    }

    

}

/* End of file history_model.php */
