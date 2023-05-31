<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Seleksi_model');
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
    }

    public function index()
    {
        $data['seleksi']    = $this->Seleksi_model->GetData();
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/seleksi', $data);
        $this->load->view('layouts/template_admin/footer');
    }

    public function Detail($id)
    {
        $data['detail'] = $this->Seleksi_model->DetailData($id);
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/seleksi_detail', $data);
        $this->load->view('layouts/template_admin/footer');
    }

    public function Hasil_Seleksi_terima()
    {
        $id_pendaftaran = $this->input->post('id_pendaftaran');

        $cekData = $this->Seleksi_model->CekData($id_pendaftaran);

        if (!$cekData) {
            $data = array(
                'id_pendaftaran' => $id_pendaftaran,
                'status'         => 1,
            );

            $insert = $this->Seleksi_model->InsertHasil($data);

            if ($insert) {
                $this->session->set_flashdata('message', 'Bata Berhasil Di tambah');
                redirect(base_url('seleksi'));
            }
        } else {
            $this->session->set_flashdata('message', 'Data Sudah Disi');
            redirect(base_url('seleksi'));
        }
    }

    public function Hasil_Seleksi_Tolak()
    {
        $id_pendaftaran = $this->input->post('id_pendaftaran');

        $cekData = $this->Seleksi_model->CekData($id_pendaftaran);

        if (!$cekData) {
            $data = array(
                'id_pendaftaran' => $id_pendaftaran,
                'status'         => 0,
            );

            $insert = $this->Seleksi_model->InsertHasil($data);

            if ($insert) {
                $this->session->set_flashdata('message', 'Status Berhasil Di Update');
                redirect(base_url('seleksi'));
            }
        } else {
            $this->session->set_flashdata('message', 'Data Sudah Disi');
            redirect(base_url('seleksi'));
        }
    }
}
