<?php

class Bkd extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('Bkd_model');
        $this->load->model('Periode_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['bkd']    = $this->Bkd_model->GetAllBkd();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/bkd/list', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function Tambah_bkd()
    {
        $data['dosen']      = $this->Dosen_model->GetDosen();
        $data['periode']    = $this->Periode_model->GetAllPeriode();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/bkd/tambah', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function Edit_Data($id)
    {
        $data['dosen']      = $this->Dosen_model->GetDosen();
        $data['periode']    = $this->Periode_model->GetAllPeriode();
        $data['bkd']        = $this->Bkd_model->GetAllBkd();
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/bkd/edit', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function Update($id)
    {
        $this->_RulesValidation();

        if ($this->form_validation->run() == false) {
            $this->Edit_Data($id);
        } else {
            $config['upload_path']         = './upload/bkd/';
            $config['allowed_types']       = 'gif|jpg|jpeg|png|svg|pdf|docx|doc|rtf|txt';
            $this->load->library('upload', $config);

            $id_dosen       = $this->input->post('id_dosen');
            $id_periode     = $this->input->post('id_periode');
            $semester       = $this->input->post('semester');

            $data = array(
                'id_dosen'      => $id_dosen,
                'id_periode'    => $id_periode,
                'semester'      => $semester
            );

            if (!$this->upload->do_upload('bukti_pendidikan')) {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                File bukti pendidikan error
                </div>');
                redirect(base_url('bkd'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['bukti_pendidikan'] = $upload_data['uploads']['file_name'];

                if (!$this->upload->do_upload('bukti_pengabdian')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                    File bukti pendidikan error
                  </div>');
                    redirect(base_url('bkd'));
                } else {
                    $upload_data = array('uploads' => $this->upload->data());
                    $data['bukti_pengabdian'] = $upload_data['uploads']['file_name'];

                    if (!$this->upload->do_upload('bukti_penelitian')) {
                        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                        File bukti pengabdian error
                      </div>');
                        redirect(base_url('bkd'));
                    } else {
                        $upload_data = array('uploads' => $this->upload->data());
                        $data['bukti_penelitian'] = $upload_data['uploads']['file_name'];
                        if (!$this->upload->do_upload('bukti_penunjang')) {
                            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                            File bukti pendidikan error
                          </div>');
                            redirect(base_url('bkd'));
                        } else {
                            $upload_data = array('uploads' => $this->upload->data());
                            $data['bukti_penunjang'] = $upload_data['uploads']['file_name'];

                            if (!$this->upload->do_upload('print_sister')) {
                                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                                File bukti pendidikan error
                              </div>');
                                redirect(base_url('bkd'));
                            } else {
                                $upload_data = array('uploads' => $this->upload->data());
                                $data['print_sister'] = $upload_data['uploads']['file_name'];

                                $update = $this->Bkd_model->EditData($data);

                                if ($update) {
                                    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                                    Data Berhasil Di tambahkan
                                  </div>');
                                    redirect(base_url('bkd'));
                                } else {
                                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                    Data Gagal Di tambahkan
                                  </div>');
                                    redirect(base_url('bkd'));
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function detail($id)
    {
        $data['detail_bkd'] = $this->Bkd_model->GetID($id);
        $this->load->view('admin/templates_admin/header');
        $this->load->view('admin/templates_admin/sidebar');
        $this->load->view('admin/bkd/detail', $data);
        $this->load->view('admin/templates_admin/footer');
    }

    public function simpan_bkd()
    {
        $this->_RulesValidation();

        if ($this->form_validation->run() == false) {
            $this->Tambah_bkd();
        } else {

            $config['upload_path']         = './upload/bkd/';
            $config['allowed_types']       = 'gif|jpg|jpeg|png|svg|pdf|docx|doc|rtf|txt';
            $this->load->library('upload', $config);

            $id_dosen       = $this->input->post('id_dosen');
            $id_periode     = $this->input->post('id_periode');
            $semester       = $this->input->post('semester');

            $data = array(
                'id_dosen'      => $id_dosen,
                'id_periode'    => $id_periode,
                'semester'      => $semester,
                'date_created'  => time()
            );

            if (!$this->upload->do_upload('bukti_pendidikan')) {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                File bukti pendidikan error
              </div>');
                redirect(base_url('bkd'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['bukti_pendidikan'] = $upload_data['uploads']['file_name'];

                if (!$this->upload->do_upload('bukti_pengabdian')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                    File bukti pendidikan error
                  </div>');
                    redirect(base_url('bkd'));
                } else {
                    $upload_data = array('uploads' => $this->upload->data());
                    $data['bukti_pengabdian'] = $upload_data['uploads']['file_name'];

                    if (!$this->upload->do_upload('bukti_penelitian')) {
                        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                        File bukti pengabdian error
                      </div>');
                        redirect(base_url('bkd'));
                    } else {
                        $upload_data = array('uploads' => $this->upload->data());
                        $data['bukti_penelitian'] = $upload_data['uploads']['file_name'];
                        if (!$this->upload->do_upload('bukti_penunjang')) {
                            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                            File bukti pendidikan error
                          </div>');
                            redirect(base_url('bkd'));
                        } else {
                            $upload_data = array('uploads' => $this->upload->data());
                            $data['bukti_penunjang'] = $upload_data['uploads']['file_name'];

                            if (!$this->upload->do_upload('print_sister')) {
                                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                                File bukti pendidikan error
                              </div>');
                                redirect(base_url('bkd'));
                            } else {
                                $upload_data = array('uploads' => $this->upload->data());
                                $data['print_sister'] = $upload_data['uploads']['file_name'];

                                $insert = $this->Bkd_model->Tambah_bkd($data);

                                if ($insert) {
                                    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                                    Data Berhasil Di tambahkan
                                  </div>');
                                    redirect(base_url('bkd'));
                                } else {
                                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                    Data Gagal Di tambahkan
                                  </div>');
                                    redirect(base_url('bkd'));
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    private function _RulesValidation()
    {
        $this->form_validation->set_rules('id_periode', 'Periode', 'trim|required');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
        // $this->_RulesFileCheck();
    }

    private function _RulesFileCheck()
    {
        $this->form_validation->set_rules('bukti_pendidikan', 'Bukti Pendidikan', 'callback_file_check');
        $this->form_validation->set_rules('bukti_pengabdian', 'Bukti Pengabdian', 'callback_file_check');
        $this->form_validation->set_rules('bukti_penelitian', 'Bukti Penelitian', 'callback_file_check');
        $this->form_validation->set_rules('bukti_penunjang',  'Bukti Penunjang', 'callback_file_check');
        $this->form_validation->set_rules('print_sister', 'Print Out Sister', 'callback_file_check');
    }


    public function file_check($str)
    {
        if (empty($_FILES[$str]['name'])) {
            $this->form_validation->set_message('file_check', 'The {field} field is required');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function Hapus_Bkd($id)
    {
        $hapus = $this->Bkd_model->HapusBkd($id);

        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Data Berhasil di hapus
            </div>');
            redirect(base_url('bkd'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Data gagal di hapus
            </div>');
            redirect(base_url('bkd'));
        }
    }
}
