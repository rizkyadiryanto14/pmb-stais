<?php

class Pengumuman_model extends CI_Model
{
    public function getAllHasil($keyword)
    {
        if (empty($keyword)) {
            $this->db->select('*');
            $this->db->from('hasil_seleksi');
            $this->db->join('pendaftaran', 'pendaftaran.id=hasil_seleksi.id_pendaftaran');   
            return $this->db->get()->result();
        }else {
            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('hasil_seleksi', 'hasil_seleksi.id_pendaftaran=pendaftaran.id');
            $this->db->like('pendaftaran.nama_lengkap', $keyword);
            $this->db->or_like('pendaftaran.nisn', $keyword);
            return $this->db->get()->result();
        }
       
    }

    //listing = mengambil bagian
    public function listingUser($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('pendaftaran', 'pendaftaran.nisn=user.nisn');
        $this->db->where('user.id', $id);
        return $this->db->get()->row();
    }

    public function Pencarian($keyword)
    {
       $this->db->select('*');
       $this->db->from('pendaftaran');
       $this->db->join('hasil_seleksi', 'hasil_seleksi.id_pendaftaran=pendaftaran.id');
       $this->db->like('pendaftaran.nama_lengkap', $keyword);
       $this->db->or_like('pendaftaran.nisn', $keyword);
       return $this->db->get()->row_array();
    }
}