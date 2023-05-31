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
    }

    public function index()
    {
        $this->load->view('layouts/template_user/header');
        $this->load->view('layouts/template_user/navbar');
        $this->load->view('layouts/template_user/sidebar');
        $this->load->view('user/dashboard');
        $this->load->view('layouts/template_user/footer');
    }
}