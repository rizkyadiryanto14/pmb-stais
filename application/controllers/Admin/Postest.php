<?php 


class Postest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Soal_model');

    }
    public function index()
    {
        $data['soal']   = $this->Soal_model->GetData();
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/postest', $data);
        $this->load->view('layouts/template_admin/footer');
    }
}