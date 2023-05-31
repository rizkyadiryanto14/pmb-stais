<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');   
    }
    
    public function tambahPembayaran()
    {
        $nama_bank  = $this->input->post('nama_bank');
        $nomor_rek  = $this->input->post('nomor_rek');

        $data = array(
            'nama_bank'     => $nama_bank,
            'nomor_rek'     => $nomor_rek
        );

        $insert = $this->Pembayaran_model->tambahPembayaran($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Berhasil Menambah Data Pembayaran');
            redirect(base_url('admin/setting'));
        }else {
            $this->session->set_flashdata('gagal', 'Gagal Menambah Data Pembayaran');
            redirect(base_url('admin/setting'));
        }
    }

    public function EditPembayaran()
    {
        $id         = $this->input->post('id');
        $nama_bank  = $this->input->post('nama_bank');
        $nomor_rek  = $this->input->post('nomor_rek');

        $data = array(
            'nama_bank'     => $nama_bank,
            'nomor_rek'     => $nomor_rek
        );

        $update = $this->Pembayaran_model->updatePembayaran($data, $id);

        if ($update) {
            $this->session->set_flashdata('sukses', 'Berhasil Update Data Pembayaran');
            redirect(base_url('admin/setting'));
        }else {
            $this->session->set_flashdata('gagal', 'Gagal Update Data Pembayaran');
            redirect(base_url('admin/setting'));
        }
    }

    public function DeletePembayaran()
    {
        $id = $this->input->post('id');

        $delete = $this->Pembayaran_model->DeletePembayaran($id);
        if ($delete) {
            $this->session->set_flashdata('sukses', 'Berhasil Hapus Data Pembayaran');
            redirect(base_url('admin/setting'));
        }else {
            $this->session->set_flashdata('gagal', 'Gagal Hapus Data Pembayaran');
            redirect(base_url('admin/setting'));
        }
    }
}