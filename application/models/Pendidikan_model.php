<?php

class Pendidikan_model extends CI_Model
{
    public function GetPendidikan()
    {
        return $this->db->get('pendidikan')->result();
    }
    public function TambahPendidikan($data)
    {
        return $this->db->insert('pendidikan', $data);
    }
}
