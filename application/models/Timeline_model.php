<?php

class Timeline_model extends CI_Model
{
    public function getTimeline()
    {
        return $this->db->get('timeline')->result();
    }

    public function AddTimeline($data)
    {
        return $this->db->update('timeline', $data);
    }

    public function Countdown()
    {
        $this->db->select('waktu_mulai', 'waktu_akhir');
        $this->db->from('timeline');
        $query = $this->db->get();
        $timeline = $query->result();

        echo '<script>';
        echo 'document.getElementById("start_time").innerHTML = "' . $timeline['waktu_mulai'] . '";';
        echo 'document.getElementById("end_time").innerHTML = "' . $timeline['waktu_akhir'] . '";';
        echo '</script>';
    }
}
