<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran_model extends CI_Model {

    public function getPembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }

    public function addPembayaran($gambar)
    {
        $data = array(
            'jenis' => $this->input->post('jenis'),
            'no. rek' => $this->input->post('no. rek'),
            'gambar' => $gambar['file_name']
        );
        $this->db->insert('pembayaran', $data);
    }
    
    public function updatePembayaran($gambar, $id)
    {
        $data = array(
            'jenis' => $this->input->post('jenis'),
            'no. rek' => $this->input->post('no. rek'),
            'gambar' => $gambar['file_name']
        );
        $this->db->where('id_pembayaran', $id);
        $this->db->update('pembayaran', $data);
    }

}

/* End of file pembayaran_model.php */
