<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cek_login()
    {
        $datapembeli = $this->db->get_where('pembeli', array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ));

        $datauser = $this->db->get_where('user', array (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ));

        $datapenjual = $this->db->get_where('penjual', array (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ));
        
        if($datapembeli->num_rows() != null || $datauser->num_rows() != null || $datapenjual->num_rows() != null){
            if($datapembeli->num_rows() > 0)
            {
                $data = array(
                    'logged_in' => TRUE,
                    'id_pembeli' => $datapembeli->result()[0]->id_pembeli,
                    'username' => $datapembeli->result()[0]->username,
                    'password' => $datapembeli->result()[0]->password,
                    'nama' => $datapembeli->result()[0]->nama,
                    'email' => $datapembeli->result()[0]->email,
                    'telepon' => $datapembeli->result()[0]->telepon,
                    'alamat' => $datapembeli->result()[0]->alamat,
                );
                
                $this->session->set_userdata( $data );
                redirect('home','refresh');
            } else if ($datauser->num_rows() > 0) {
                $data = array(
                    'logged_in' => TRUE,
                    'id_user' => $datauser->result()[0]->id_user,
                    'nama' => $datauser->result()[0]->nama,
                    'username' => $datauser->result()[0]->username,
                    'password' => $datauser->result()[0]->password,
                    'kelas' => 'admin'
                );
                $this->session->set_userdata($data);
                redirect('admin/dashboard','refresh');
            } else if ($datapenjual->num_rows() > 0) {
                
                $data = array(
                    'logged_in' => TRUE,
                    'id_penjual' => $datapenjual->result()[0]->id_penjual,
                    'nama' => $datapenjual->result()[0]->nama,
                    'email' => $datapenjual->result()[0]->email,
                    'username' => $datapenjual->result()[0]->username,
                    'kelas' => 'penjual'
                );
                
                $this->session->set_userdata( $data );
                redirect('penjual/barang','refresh');
            } else {
                $this->session->set_flashdata('merah', 'Data Salah');
                    redirect('login','refresh');
            }
        } else {
            $this->session->set_flashdata('merah', 'Data Salah');
                redirect('login','refresh');
        }
    }

    public function registerPenjual()
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

/* End of file Login_model.php */
