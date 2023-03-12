<?php

class Rps extends CI_Controller
{
    public function index()
    {

        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/rps/list');
        $this->load->view('admin/templates_admin/footer');
    }
}
