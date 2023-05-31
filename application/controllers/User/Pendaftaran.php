<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url('auth'));
        }
        $this->load->model('Pendaftaran_model');
    }
    public function index()
    {
        $userData = $this->session->userdata('user_id');
        $data['pendaftar']  =  $this->db->get_where('user', array('id' => $userData))->result();
        $this->load->view('layouts/template_user/header');
        $this->load->view('layouts/template_user/sidebar');
        $this->load->view('layouts/template_user/navbar');
        $this->load->view('user/pendaftaran', $data);
        $this->load->view('layouts/template_user/footer');
    }

    public function DataMahasiswa()
    {
        $nama_lengkap   = $this->input->post('nama_lengkap');
        $jenis_kelamin  = $this->input->post('jenis_kelamin');
        $TTL            = $this->input->post('TTL');
        $agama          = $this->input->post('agama');
        $nik            = $this->input->post('nik');
        $npwp           = $this->input->post('npwp');
        $kartu_keluarga = $this->input->post('kartu_keluarga');
        $akta           = $this->input->post('akta');
        $no_hp          = $this->input->post('no_hp');
        $alamat         = $this->input->post('alamat');
        $rtrw           = $this->input->post('rtrw');
        $desa           = $this->input->post('desa');
        $kecamatan      = $this->input->post('kecamatan');
        $kabupaten      = $this->input->post('kabupaten');
        $provinsi       = $this->input->post('provinsi');
        $penerima_kps   = $this->input->post('penerima_kps');

        $data = array(
            'nama_lengkap'      => $nama_lengkap,
            'jenis_kelamin'     => $jenis_kelamin,
            'TTL'               => $TTL,
            'agama'             => $agama,
            'nik'               => $nik,
            'npwp'              => $npwp,
            'kartu_keluarga'    => $kartu_keluarga,
            'akta'              => $akta,
            'no_hp'             => $no_hp,
            'alamat'            => $alamat,
            'rtrw'              => $rtrw,
            'desa'              => $desa,
            'kecamatan'         => $kecamatan,
            'kabupaten'         => $kabupaten,
            'provinsi'          => $provinsi,
            'penerima_kps'      => $penerima_kps
        );
        $insert = $this->Pendaftaran_model->TambahDataMahasiswa($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data Mahasiswa Berhasil Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        } else {
            $this->session->set_flashdata('gagal', 'Data Mahasiswa Gagal Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        }
    }

    public function DataOrangtua()
    {
        $id_mahasiswa       = $this->input->post('id_mahasiswa');
        $nama_ayah          = $this->input->post('nama_ayah');
        $TTL                = $this->input->post('TTL');
        $nik                = $this->input->post('nik');
        $nomor_ayah         = $this->input->post('nomor_ayah');
        $pekerjaan_ayah     = $this->input->post('pekerjaan_ayah');
        $pendidikan_ayah    = $this->input->post('pendidikan_ayah');
        $penghasilan_ayah   = $this->input->post('penghasilan_ayah');
        $nama_ibu           = $this->input->post('nama_ibu');
        $TTL_ibu            = $this->input->post('TTL_ibu');
        $nik_ibu            = $this->input->post('nik_ibu');
        $nomor_ibu          = $this->input->post('nomor_ibu');
        $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
        $pendidikan_ibu     = $this->input->post('pendidikan_ibu');

        $data = array(
            'id_mahasiswa'      => $id_mahasiswa,
            'nama_ayah'         => $nama_ayah,
            'TTL'               => $TTL,
            'nomor_ayah'        => $nomor_ayah,
            'nik'               => $nik,
            'pekerjaan_ayah'    => $pekerjaan_ayah,
            'pendidikan_ayah'   => $pendidikan_ayah,
            'penghasilan_ayah'  => $penghasilan_ayah,
            'nama_ibu'          => $nama_ibu,
            'TTL_ibu'           => $TTL_ibu,
            'nik_ibu'           => $nik_ibu,
            'nomor_ibu'         => $nomor_ibu,
            'pekerjaan_ibu'     => $pekerjaan_ibu,
            'pendidikan_ibu'    => $pendidikan_ibu
        );

        $insert = $this->Pendaftaran_model->TambahDataOrangTua($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data Orang Tua Berhasil Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        } else {
            $this->session->set_flashdata('gagal', 'Data Orang Tua Gagal Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        }
    }

    public function DataPendidikan()
    {
        $id_mahasiswa   = $this->input->post('id_mahasiswa');
        $nama_sekolah   = $this->input->post('nama_sekolah');
        $alamat_sekolah = $this->input->post('alamat_sekolah');
        $tahun_masuk    = $this->input->post('tahun_masuk');
        $tahun_lulus    = $this->input->post('tahun_lulus');
        $jurusan        = $this->input->post('jurusan');
        $nilai_rata     = $this->input->post('nilai_rata');
        $kabupaten      = $this->input->post('kabupaten');
        $provinsi       = $this->input->post('provinsi');

        $data = array(
            'id_mahasiswa'   => $id_mahasiswa,
            'nama_sekolah'   => $nama_sekolah,
            'alamat_sekolah' => $alamat_sekolah,
            'tahun_masuk'    => $tahun_masuk,
            'tahun_lulus'    => $tahun_lulus,
            'jurusan'        => $jurusan,
            'nilai_rata'     => $nilai_rata,
            'kabupaten'      => $kabupaten,
            'provinsi'       => $provinsi
        );

        $insert = $this->Pendaftaran_model->Pendidikan($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data Pendidikan Berhasil Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        } else {
            $this->session->set_flashdata('gagal', 'Data Pendidikan Gagal Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        }
    }

    public function BerkasWajib()
    {
        $id_mahasiswa = $this->input->post('id_mahasiswa');
        $data = array(); //inisialisasi data array

        $data = array('id_mahasiswa' => $id_mahasiswa);
        $this->load->library('upload');

        if ($_FILES['ijazah']) {
            $config1['upload_path']          = './uploads/ijazah';
            $config1['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config1['max_size']             = 2000; //kb

            $this->upload->initialize($config1);

            if (!$this->upload->do_upload('ijazah')) {
                $this->session->set_flashdata('gagal', 'File Ijazah Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['ijazah'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File ijazah tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['skhu']) {
            $config2['upload_path']          = './uploads/skhu';
            $config2['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config2['max_size']             = 2000; //kb

            $this->upload->initialize($config2);

            if (!$this->upload->do_upload('skhu')) {
                $this->session->set_flashdata('gagal', 'File skhu Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['skhu'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File skhu tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['raport']) {
            $config3['upload_path']          = './uploads/raport';
            $config3['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config3['max_size']             = 2000; //kb

            $this->upload->initialize($config3);

            if (!$this->upload->do_upload('raport')) {
                $this->session->set_flashdata('gagal', 'File raport Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['raport'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File raport tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['keterangan_lulus']) {
            $config4['upload_path']          = './uploads/keterangan_lulus';
            $config4['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config4['max_size']             = 2000; //kb

            $this->upload->initialize($config4);

            if (!$this->upload->do_upload('keterangan_lulus')) {
                $this->session->set_flashdata('gagal', 'File keterangan_lulus Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['keterangan_lulus'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File keterangan_lulus tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['kartu_keluarga']) {
            $config5['upload_path']          = './uploads/kartu_keluarga';
            $config5['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config5['max_size']             = 2000; //kb

            $this->upload->initialize($config5);

            if (!$this->upload->do_upload('kartu_keluarga')) {
                $this->session->set_flashdata('gagal', 'File kartu_keluarga Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['kartu_keluarga'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File kartu_keluarga tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['file_ktp']) {
            $config6['upload_path']          = './uploads/file_ktp';
            $config6['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config6['max_size']             = 2000; //kb

            $this->upload->initialize($config6);

            if (!$this->upload->do_upload('file_ktp')) {
                $this->session->set_flashdata('gagal', 'File file_ktp Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['file_ktp'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File file_ktp tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['file_foto']) {
            $config6['upload_path']          = './uploads/file_foto';
            $config6['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config6['max_size']             = 2000; //kb

            $this->upload->initialize($config6);

            if (!$this->upload->do_upload('file_foto')) {
                $this->session->set_flashdata('gagal', 'File file_foto Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['file_foto'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File file_foto tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        $insert = $this->Pendaftaran_model->TambahBerkasWajib($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data Berkas Berhasil Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        } else {
            $this->session->set_flashdata('gagal', 'Data Berkas Gagal Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        }
    }

    public function PenerimaBeasiswa()
    {
        $id_mahasiswa = $this->input->post('id_mahasiswa');
        $data = array(); //inisialisasi data array

        $data = array('id_mahasiswa' => $id_mahasiswa);
        $this->load->library('upload');

        if ($_FILES['sktm']) {
            $config1['upload_path']          = './uploads/sktm';
            $config1['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config1['max_size']             = 2000; //kb

            $this->upload->initialize($config1);

            if (!$this->upload->do_upload('sktm')) {
                $this->session->set_flashdata('gagal', 'File sktm Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['sktm'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File sktm tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['penghasilan_ortu']) {
            $config2['upload_path']          = './uploads/penghasilan_ortu';
            $config2['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config2['max_size']             = 2000; //kb

            $this->upload->initialize($config2);

            if (!$this->upload->do_upload('penghasilan_ortu')) {
                $this->session->set_flashdata('gagal', 'File penghasilan_ortu Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['penghasilan_ortu'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File penghasilan_ortu tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['piagam']) {
            $config3['upload_path']          = './uploads/piagam';
            $config3['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config3['max_size']             = 2000; //kb

            $this->upload->initialize($config3);

            if (!$this->upload->do_upload('piagam')) {
                $this->session->set_flashdata('gagal', 'File piagam Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['piagam'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File piagam tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['bantuan']) {
            $config4['upload_path']          = './uploads/bantuan';
            $config4['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config4['max_size']             = 2000; //kb

            $this->upload->initialize($config4);

            if (!$this->upload->do_upload('bantuan')) {
                $this->session->set_flashdata('gagal', 'File bantuan Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['bantuan'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File bantuan tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['foto_rumah']) {
            $config5['upload_path']          = './uploads/foto_rumah';
            $config5['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config5['max_size']             = 2000; //kb

            $this->upload->initialize($config5);

            if (!$this->upload->do_upload('foto_rumah')) {
                $this->session->set_flashdata('gagal', 'File foto_rumah Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['foto_rumah'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File foto_rumah tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }

        if ($_FILES['rekening_listrik']) {
            $config6['upload_path']          = './uploads/rekening_listrik';
            $config6['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx';
            $config6['max_size']             = 2000; //kb

            $this->upload->initialize($config6);

            if (!$this->upload->do_upload('rekening_listrik')) {
                $this->session->set_flashdata('gagal', 'File rekening_listrik Gagal di upload, harap untuk melihat ukuran file dan extentionnya');
                redirect(base_url('user/pendaftaran'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $data['rekening_listrik'] = $upload_data['uploads']['file_name'];
            }
        } else {
            $this->session->set_flashdata('gagal', 'File rekening_listrik tidak boleh kosong');
            redirect(base_url('user/pendaftaran'));
        }


        $insert = $this->Pendaftaran_model->TambahBerkasBeasiswa($data);

        if ($insert) {
            $this->session->set_flashdata('sukses', 'Data Berkas Berhasil Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        } else {
            $this->session->set_flashdata('gagal', 'Data Berkas Gagal Di Tambahkan');
            redirect(base_url('user/pendaftaran'));
        }
    }
}
