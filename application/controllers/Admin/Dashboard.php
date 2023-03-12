<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Timeline_model');
    }

    public function index()
    {
        $data['timeline']   = $this->Timeline_model->Countdown();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/templates_admin/footer');
    }
}
