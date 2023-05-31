<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
    }

    public function index()
    {
        $userData = $this->session->userdata('user_id');
        $data['profile'] = $this->db->get_where('user', array('id' => $userData))->result();
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/profile', $data);
        $this->load->view('layouts/template_admin/footer');
    }
}
