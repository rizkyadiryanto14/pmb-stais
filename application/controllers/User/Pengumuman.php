<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
        $this->load->model('Pengumuman_model');   
    }

    public function index()
    {
        $userData = $this->session->userdata('user_id');
        $id_pendaftar = $this->Pengumuman_model->listingUser($userData);
        $data['pengumuman_user'] = $this->Pengumuman_model->getAllHasil($id_pendaftar->id);
        $this->load->view('layouts/template_user/header');
        $this->load->view('layouts/template_user/navbar');
        $this->load->view('layouts/template_user/sidebar');
        $this->load->view('user/pengumuman', $data);
        $this->load->view('layouts/template_user/footer');
    }
}