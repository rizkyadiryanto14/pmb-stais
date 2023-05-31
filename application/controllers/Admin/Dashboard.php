<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['setting']    = $this->Setting_model->GetSetting();
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar', $data);
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/dashboard');
        $this->load->view('layouts/template_admin/footer');
    }
}