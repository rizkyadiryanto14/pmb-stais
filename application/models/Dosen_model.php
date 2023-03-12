<?php

class Dosen_model extends CI_Model
{

    public function GetDosen()
    {
        return $this->db->get('dosen')->result();
    }

    public function Tambah_dosen($data)
    {
        $this->db->insert('dosen', $data);
    }
}
