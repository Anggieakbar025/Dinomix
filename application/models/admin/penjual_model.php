<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class penjual_model extends CI_Model {

    public function getPenjual()
    {
        return $this->db->get('penjual')->result_array();
    }

}

/* End of file penjual_model.php */
