<?php

class Auth_model extends CI_Model
{
    public function GetAllUser()
    {
        return $this->db->get('user')->result();
    }

    public function GetOnlyUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 2);
        return $this->db->get()->result();
    }

    public function get_by_username($username)
    {
        return $this->db->get_where('user', array('username' => $username))->row_array();
    }

    public function RegisterUser($data)
    {
        return $this->db->insert('user', $data);
    }

    public function UpdateStatus($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function GetProfile($id)
    {
        return $this->db->get_where('user', array('id' => $id))->result();
    }
}