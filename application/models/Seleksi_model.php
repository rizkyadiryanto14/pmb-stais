<?php

class Seleksi_model extends CI_Model
{
    public function GetData()
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function DetailData($id)
    {
        return $this->db->get_where('pendaftaran', array('id' => $id))->result();
    }

    public function InsertHasil($data)
    {
        return $this->db->insert('hasil_seleksi', $data);
    }

    public function CekData($id)
    {
        return $this->db->get_where('hasil_seleksi', array('id_pendaftaran' => $id))->result();
    }
}