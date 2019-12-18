<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {

    public function addData()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->db->insert('penjual', $data);
    }

}

/* End of file register_model.php */
