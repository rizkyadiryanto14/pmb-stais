<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dosen_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['dosen']  = $this->Dosen_model->GetDosen();
        $data['user']   = $this->User_model->GetUser();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/user/list', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function tambah_user()
    {
        $this->form_validation->set_rules('id_dosen', 'Id_dosen', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $data = [
                'id_dosen'      => $this->input->post('id_dosen'),
                'nidn'          => $this->input->post('nidn'),
                'password'      => password_hash($this->input->post('nidn'), PASSWORD_DEFAULT),
                'role_id'       => '2',
                'date_created'  => time()
            ];

            $this->User_model->TambahUser($data);
            redirect(base_url('user'));
        }
    }
}
