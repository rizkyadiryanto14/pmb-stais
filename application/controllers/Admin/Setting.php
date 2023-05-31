<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Pembayaran_model');
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
    }

    public function index()
    {
        $data['setting']    = $this->Setting_model->GetSetting();
        $data['pembayaran'] = $this->Pembayaran_model->GetHasil();
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/setting', $data);
        $this->load->view('layouts/template_admin/footer');
    }

    public function umum()
    {
        $facebook       = $this->input->post('facebook');
        $instagram      = $this->input->post('instagram');
        $alamat_lengkap = $this->input->post('alamat');
        $google_maps    = $this->input->post('google_maps');

        $data = array(
            'facebook'      => $facebook,
            'instagram'     => $instagram,
            'alamat_lengkap'=> $alamat_lengkap,
            'google_maps'   => $google_maps
        );

        $insert = $this->Setting_model->UpdateUmum($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Sukses Update Setting');
            redirect(base_url('admin/setting'));
        }        if ($insert) {
            $this->session->set_flashdata('gagal', 'Gagal Update Setting');
            redirect(base_url('admin/setting'));
        }
        
    }

    public function Website()
    {
        $nama_website = $this->input->post('nama_website');

        $data = array(
            'nama_website'      => $nama_website
        );

        $config['upload_path']          = './uploads/website';
        $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';

        $this->load->library('upload', $config);

        if (!$_FILES['icon_website']) {
            $this->session->set_flashdata('gagal', 'file tidak boleh kosong');
            redirect(base_url('admin/setting'));
        }else {
            if (!$this->upload->do_upload('icon_website')) {
                $this->session->set_flashdata('gagal', 'gagal upload gambar');
                redirect(base_url('admin/setting'));
            }else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['icon_website']     = $upload_data['uploads']['file_name'];
            }
        }

        if (!$_FILES['logo_website']) {
            $this->session->set_flashdata('gagal', 'file tidak boleh kosong');
            redirect(base_url('admin/setting'));
        }else {
            if (!$this->upload->do_upload('logo_website')) {
                $this->session->set_flashdata('gagal', 'gagal upload gambar');
                redirect(base_url('admin/setting'));
            }else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['logo_website']     = $upload_data['uploads']['file_name'];
            }
        }

        $update = $this->Setting_model->UpdateUmum($data);

        if ($update) {
            $this->session->set_flashdata('sukses', 'berhasil update icon,logo,dan nama website berhasil di update');
            redirect(base_url('admin/setting'));
        }else {
            $this->session->set_flashdata('gagal', 'gagal update nama,icon dan logo website');
            redirect(base_url('admin/setting'));
        }
    }
}