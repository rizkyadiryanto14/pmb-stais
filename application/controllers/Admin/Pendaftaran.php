<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('Auth_model');
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
    }

    public function index()
    {
        $data['pendaftar']  = $this->Pendaftaran_model->GetPendaftaran();
        // $data['status']  = $this->Auth_model->GetAllUser();
        $this->load->view('layouts/template_admin/header');
        $this->load->view('layouts/template_admin/sidebar');
        $this->load->view('layouts/template_admin/navbar');
        $this->load->view('admin/pendaftaran', $data);
        $this->load->view('layouts/template_admin/footer');
    }


    public function StatusUpdate($id)
    {

        $query = $this->db->get_where('user', array('id' => $id))->row_array();

        if ($query['status'] == 1) {
            $dataStatus = array(
                'status'    => 0
            );
        } else {
            $dataStatus = array(
                'status'    => 1
            );
        }
        $updateStatus   = $this->Auth_model->UpdateStatus($dataStatus, $id);

        if ($updateStatus) {
            redirect(base_url('pendaftaran'));
        } else {
            echo 'gagal';
        }
    }
}
