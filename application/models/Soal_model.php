<?php 


class Soal_model extends CI_Model
{
    public function GetData()
    {
        return $this->db->get('soal')->result();
    }
}