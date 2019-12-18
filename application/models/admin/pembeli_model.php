<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli_model extends CI_Model {

    public function getPembeli()
    {
        return $this->db->get('pembeli')->result_array();
    }

}

/* End of file pembeli_model.php */
