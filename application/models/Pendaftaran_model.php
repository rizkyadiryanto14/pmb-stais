<?php

class Pendaftaran_model extends CI_Model
{
    public function GetPendaftaran()
    {
        return $this->db->get('pendaftaran')->result();
    }

    public function TambahDataMahasiswa($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function Pendidikan($data)
    {
        return $this->db->insert('asal_sekolah', $data);
    }

    public function TambahDataOrangTua($data)
    {
        return $this->db->insert('data_ortu', $data);
    }

    public function TambahBerkasWajib($data)
    {
        return $this->db->insert('berkas_wajib', $data);
    }

    public function TambahBerkasBeasiswa($data)
    {
        return $this->db->insert('penerima_beasiswa', $data);
    }
    public function CekData($nisn)
    {
        return $this->db->get_where('pendaftaran', array('nisn' => $nisn))->result();
    }
}
