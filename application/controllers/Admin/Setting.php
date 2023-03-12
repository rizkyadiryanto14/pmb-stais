<?php


class Setting extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pendidikan_model');
        $this->load->model('Periode_model');
        $this->load->model('Timeline_model');
    }

    public function index()
    {
        $data['periode']    = $this->Periode_model->GetAllPeriode();
        $data['pendidikan'] = $this->Pendidikan_model->GetPendidikan();
        $data['timeline']   = $this->Timeline_model->getTimeline();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/setting/umum', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function Timeline()
    {
        $waktu_awal     = $this->input->post('waktu_mulai');
        $waktu_akhir    = $this->input->post('waktu_akhir');

        $data = array(
            'waktu_mulai'   => $waktu_awal,
            'waktu_akhir'   => $waktu_akhir
        );

        $insert = $this->Timeline_model->AddTimeline($data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Berhasil Tambah Data Timeline
            </div>');
            redirect(base_url('setting'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal Tambah Data Timeline
            </div>');
            redirect(base_url('setting'));
        }
    }

    public function ResetTimeline()
    {
        $data = array(
            'waktu_mulai'   => '0000-00-00 00:00:00',
            'waktu_akhir'   => '0000-00-00 00:00:00'
        );

        $insert = $this->Timeline_model->AddTimeline($data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Berhasil Reset Data Timeline
            </div>');
            redirect(base_url('setting'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal Reset Data Timeline
            </div>');
            redirect(base_url('setting'));
        }
    }

    public function AddPeriode()
    {
        $this->CheckRulesForm();

        if ($this->form_validation->run() == false) {
            $data['periode']    = $this->Periode_model->GetAllPeriode();
            $data['pendidikan'] = $this->Pendidikan_model->GetPendidikan();
            $this->load->view('admin/templates_admin/header');
            $this->load->view('admin/templates_admin/sidebar');
            $this->load->view('admin/setting/umum', $data);
            $this->load->view('admin/templates_admin/footer');
        } else {
            $data = [
                'nama_periode'  => $this->input->post('nama_periode'),
            ];

            $this->Periode_model->TambahPeriode($data);
            redirect(base_url('setting'));
        }
    }

    public function AddPendidikan()
    {
        $this->form_validation->set_rules('nama_pendidikan', 'Nama Periode', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['periode']    = $this->Periode_model->GetAllPeriode();
            $this->load->view('admin/templates_admin/header');
            $this->load->view('admin/templates_admin/sidebar');
            $this->load->view('admin/setting/umum', $data);
            $this->load->view('admin/templates_admin/footer');
        } else {
            $data = [
                'nama_pendidikan'   => $this->input->post('nama_pendidikan'),
            ];

            $this->Pendidikan_model->TambahPendidikan($data);
            redirect(base_url('setting'));
        }
    }

    function CheckRulesForm()
    {
        $this->form_validation->set_rules('nama_periode', 'Nama Periode', 'trim|required');
    }
}
