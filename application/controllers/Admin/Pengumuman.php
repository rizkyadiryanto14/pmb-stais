<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }

    }

    public function index()
    {
        $keyword = $this->input->get('keyword');                                                                                                               
        $data['pengumuman'] = $this->Pengumuman_model->getAllHasil($keyword);

        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('layouts/template_admin/footer');
    }

    public function Searching()
    {   
        $this->index();
        
    }
}