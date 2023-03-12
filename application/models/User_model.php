<?php

class User_model extends CI_Model
{
    public function GetUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('dosen', 'dosen.id = user.id_dosen');
        return $this->db->get()->result();
    }

    public function TambahUser($data)
    {
        $this->db->insert('user', $data);
    }
}
