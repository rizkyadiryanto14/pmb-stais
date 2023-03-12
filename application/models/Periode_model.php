<?php


class Periode_model extends CI_Model
{
    public function GetAllPeriode()
    {
        return $this->db->get('periode')->result();
    }

    public function TambahPeriode($data)
    {
        $this->db->insert('periode', $data);
    }
}
