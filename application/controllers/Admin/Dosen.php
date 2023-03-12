<?php

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $data['dosen']  = $this->Dosen_model->GetDosen();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/dosen/list', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function Tambah_dosen()
    {
        $data['dosen']  = $this->Dosen_model->GetDosen();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/dosen/tambah', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function Registration()
    {
        $this->form_validation->set_rules('nidn', 'Nidn', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == false) {
            $this->Tambah_dosen();
        } else {
            $data = [
                'nidn'      => $this->input->post('nidn'),
                'nama'      => $this->input->post('nama'),
                'nip'       => $this->input->post('nip'),
                'email'     => $this->input->post('email'),
                'telepon'   => $this->input->post('telepon'),
                'alamat'    => $this->input->post('alamat'),
                'image'     => 'default.jpg',

            ];

            $this->Dosen_model->Tambah_dosen($data);
            redirect(base_url('tambah_dosen'));
        }
    }
}
