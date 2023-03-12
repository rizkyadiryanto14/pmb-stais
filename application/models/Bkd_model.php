<?php

class Bkd_model extends CI_Model
{
    public function GetAllBkd()
    {
        $this->db->select('*');
        $this->db->from('bkd');
        $this->db->join('periode', 'periode.id = bkd.id_periode');
        $this->db->join('dosen', 'dosen.id = bkd.id_dosen');
        return $this->db->get()->result();
    }

    public function Tambah_bkd($data)
    {
        return $this->db->insert('bkd', $data);
    }

    public function EditData($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('bkd', $data);
    }

    public function HapusBkd($id_bkd)
    {
        $this->db->where('id', $id_bkd);
        $this->db->delete('bkd');
    }

    public function GetID($id)
    {
        $this->db->select('*');
        $this->db->from('bkd');
        $this->db->join('periode', 'bkd.id_periode = periode.id', 'left');
        $this->db->join('dosen', 'bkd.id_dosen = dosen.id', 'left');
        $this->db->where('bkd.id_bkd', $id);
        $query = $this->db->get();
        return $query->result();
    }
}
