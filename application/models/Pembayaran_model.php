<?php 


class Pembayaran_model extends CI_Model
{
    public function GetHasil()
    {
        return $this->db->get('pembayaran')->result();
    }

    public function tambahPembayaran($data)
    {
        return $this->db->insert('pembayaran', $data);
    }

    public function updatePembayaran($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('pembayaran', $data);
    }

    public function DeletePembayaran($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('pembayaran');
    }
}