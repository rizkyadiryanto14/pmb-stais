<?php 

class Setting_model extends CI_Model
{

    public function GetSetting()
    {
       return $this->db->get('setting')->result();
    }

    public function UpdateUmum($data)
    {
        return $this->db->update('setting', $data);
    }
}