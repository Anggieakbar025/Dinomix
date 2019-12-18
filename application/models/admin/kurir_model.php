<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kurir_model extends CI_Model {

    public function getKurir()
    {
        return $this->db->get('kurir')->result_array();
    }

    public function addKurir($gambar)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'gambar' => $gambar['file_name']
        );
        $this->db->insert('kurir', $data);
    }

    public function updateKurir($gambar, $id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'gambar' => $gambar['file_name']
        );
        $this->db->where('id_kurir', $id);
        $this->db->update('kurir', $data);
    }

}

/* End of file kurir_model.php */
