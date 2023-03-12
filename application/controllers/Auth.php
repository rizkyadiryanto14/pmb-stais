<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('nidn', 'Nidn', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nidn = $this->input->post('nidn');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nidn' => $nidn])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nidn'     => $user['nidn'],
                    'role_id'   => $user['role_id']
                ];
                $this->session->set_userdata($data);
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                sessin telah berakhir
              </div>');
                redirect(base_url('auth'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Ussername atau password salah
          </div>');
            redirect(base_url('auth'));
        }
    }
}
