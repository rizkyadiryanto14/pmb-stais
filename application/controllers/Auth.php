<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Setting_model');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $data['setting']    = $this->Setting_model->GetSetting();
        $this->load->view('auth/login', $data);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $user = $this->Auth_model->get_by_username($username);
            if ($user) {
                if ($user['status'] == 1) {
                    if ($user && password_verify($password, $user['password'])) {
                        $user_data = array(
                            'user_id'   => $user['id'],
                            'user_role' => $user['role_id'],
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($user_data);

                        if ($user['role_id'] ==  1) {
                            redirect(base_url('admin/dashboard'));
                        } elseif ($user['role_id'] == 2) {
                            redirect(base_url('user/dashboard'));
                        }
                    } else {
                        $this->session->set_flashdata('message', 'Username atau Password Salah');
                        redirect(base_url('auth'));
                    }
                } else {
                    $this->session->set_flashdata('message', 'Akun Belum Di aktifkan');
                    redirect(base_url('auth'));
                }
            } else {
                $this->session->set_flashdata('message', 'Account Belum Ada');
                redirect(base_url('auth'));
            }
        }
    }

    public function RegisterView()
    {
        $this->load->view('auth/register');
    }

    public function RegisterUser()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('/');
        } else {

            $nama_lengkap       = $this->input->post('nama_lengkap');
            $nisn               = $this->input->post('nisn');
            $email              = $this->input->post('email');
            $asal_sekolah       = $this->input->post('asal_sekolah');
            $npsn               = $this->input->post('npsn');
            $no_telepon         = $this->input->post('no_telepon');
            $jenis_kelamin      = $this->input->post('jenis_kelamin');

            $data = array(
                'nama_lengkap'  => $nama_lengkap,
                'username'      => $nisn,
                'asal_sekolah'  => $asal_sekolah,
                'nisn'          => $nisn,
                'email'         => $email,
                'npsn'          => $npsn,
                'no_telepon'    => $no_telepon,
                'jenis_kelamin' => $jenis_kelamin,
                'password'      => password_hash($nisn, PASSWORD_DEFAULT),
                'role_id'           => 2,
                'date_created'  => date('Y-m-d H:i:s'),
            );

            $config['upload_path']          = './uploads/bukti_pembayaran';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']             = 1024; //kb

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                $this->session->set_flashdata('message', 'Gagal Mengupload File');
                redirect(base_url('auth'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['bukti_pembayaran']   = $upload_data['uploads']['file_name'];
            }

            $insert = $this->Auth_model->RegisterUser($data);

            if ($insert) {
                $this->session->set_flashdata('sukses', 'sukses, Harap menunggu untuk di di aktifkan account');
                redirect(base_url('auth'));
            } else {
                $this->session->set_flashdata('message', 'Gagal Melakukan Pendaftaran, Harap Contact Admin Jika Terus berlanjut');
                redirect(base_url('auth'));
            }
        }
    }

    public function Logout()
    {
        $this->session->set_flashdata('message', 'Anda berhasil Logout');
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
