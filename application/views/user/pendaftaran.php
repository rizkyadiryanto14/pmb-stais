<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pendaftaran Mahasiswa Baru</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pendaftaran</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card-mb-4">
                    <div class="card-header">
                        <?= $this->session->flashdata('message'); ?>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="datamahasiswa-tab" data-toggle="tab"
                                    href="#datamahasiswa" role="tab" aria-controls="datamahasiswa"
                                    aria-selected="true">Data
                                    Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="dataorangtua-tab" data-toggle="tab" href="#dataorangtua"
                                    role="tab" aria-controls="periode" aria-selected="false">Data Orang Tua</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#datapendidikan"
                                    role="tab" aria-controls="pendidikan" aria-selected="false">Pendidikan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="berkaswajib-tab" data-toggle="tab" href="#berkaswajib"
                                    role="tab" aria-controls="berkaswajib" aria-selected="false">Berkas Wajib</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="berkastambahan-tab" data-toggle="tab" href="#berkastambahan"
                                    role="tab" aria-controls="berkastambahan" aria-selected="false">Berkas Tambahan
                                    <small class="text-danger">(Bagi Penerima Beasiswa)</small></a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="datamahasiswa" role="tabpanel"
                                aria-labelledby="datamahasiswa-tab">
                                <form action="<?= base_url('user/DataMahasiswa') ?>" method="POST">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option selected disabled> Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tempat & Tanggal Lahir</label>
                                        <input type="text" name="TTL" id="TTL" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Agama</label>
                                        <input type="text" name="agama" id="agama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <input type="text" name="nik" id="nik" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NPWP</label>
                                        <input type="text" name="npwp" id="npwp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kartu Keluarga</label>
                                        <input type="text" name="kartu_keluarga" id="kartu_keluarga"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Akta</label>
                                        <input type="text" name="akta" id="akta" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nomor HP</label>
                                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">RT/RW</label>
                                        <input type="text" name="rtrw" id="rtrw" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Desa</label>
                                        <input type="text" name="desa" id="desa" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kecamatan</label>
                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kabupaten</label>
                                        <input type="text" name="kabupaten" id="kabupaten" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Provinsi</label>
                                        <input type="text" name="provinsi" id="provinsi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Penerima KPS</label>
                                        <select name="penerima_kps" id="penerima_kps" class="form-control">
                                            <option selected disabled>Pilih Penerma KPS</option>
                                            <option value="ya">YA</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="dataorangtua" role="tabpanel"
                                aria-labelledby="dataorangtua-tab">
                                <form action="<?= base_url('user/DataOrangtua') ?>" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa"
                                            value="<?= $this->session->userdata('user_id'); ?>">
                                        <label for="">Nama Ayah</label>
                                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <input type="text" name="nik" id="nik" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tempat & Tanggal Lahir</label>
                                        <input type="text" name="TTL" id="TTL" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nomor Ayah yang aktif</label>
                                        <input type="text" name="nomor_ayah" id="nomor_ayah" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pendidikan Terakhir Ayah</label>
                                        <input type="text" name="pendidikan_ayah" id="pendidikan_ayah"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Penghasilan Ayah</label>
                                        <input type="text" name="penghasilan_ayah" id="penghasilan_ayah"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">TTL IBU</label>
                                        <input type="text" name="TTL_ibu" id="TTL_ibu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIK Ibu</label>
                                        <input type="text" name="nik_ibu" id="nik_ibu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nomor IBU</label>
                                        <input type="text" name="nomor_ibu" id="nomor_ibu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pendidikan Ibu</label>
                                        <input type="text" name="pendidikan_ibu" id="pendidikan_ibu"
                                            class="form-control">
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="datapendidikan" role="tabpanel"
                                aria-labelledby="datapendidikan-tab">
                                <form action="<?= base_url('user/DataPendidikan') ?>" method="POST">
                                    <div class="form-group">
                                        <label for="">Nama Sekolah</label>
                                        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa"
                                            value="<?= $this->session->userdata('user_id'); ?>">
                                        <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat Sekolah</label>
                                        <input type="text" name="alamat_sekolah" id="alamat_sekolah"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun Masuk</label>
                                        <input type="text" name="tahun_masuk" id="tahun_masuk" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun Lulus</label>
                                        <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <input type="text" name="jurusan" id="Jurusan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nilai Rata - Rata</label>
                                        <input type="text" name="nilai_rata" id="nilai_rata" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kabupaten</label>
                                        <input type="text" name="kabupaten" id="kabupaten" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Provinsi</label>
                                        <input type="text" name="provinsi" id="provinsi" class="form-control">
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="berkaswajib" role="tabpanel"
                                aria-labelledby="berkaswajib-tab">
                                <form action="<?= base_url('user/BerkasWajib') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Ijazah terakhir</label>
                                        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa"
                                            value="<?= $this->session->userdata('user_id') ?>">
                                        <input type="file" name="ijazah" id="ijazah" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Surat Keterangan Hasil Lulus</label>
                                        <input type="file" name="skhu" id="skhu" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fotocopy Rapor Semester I-VI</label>
                                        <input type="file" name="raport" id="raport" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fotocopy Keterangan Lulus </label>
                                        <input type="file" name="keterangan_lulus" id="keterangan_lulus"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fotocopy Kartu Keluarga </label>
                                        <input type="file" name="kartu_keluarga" id="kartu_keluarga"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">KTP </label>
                                        <input type="file" name="file_ktp" id="file_ktp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pas Foto</label>
                                        <input type="file" name="file_foto" id="file_foto" class="form-control">
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="berkastambahan" role="tabpanel"
                                aria-labelledby="berkastambahan-tab">
                                <form action="<?= base_url('user/PenerimaBeasiswa') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">SKTM</label>
                                        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa"
                                            value="<?= $this->session->userdata('user_id') ?>">
                                        <input type="file" name="sktm" id="sktm" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Penghasilan Orang Tua</label>
                                        <input type="file" name="penghasilan_ortu" id="penghasilan_ortu"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Piagam</label>
                                        <input type="file" name="piagam" id="piagam" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bantuan</label>
                                        <input type="file" name="bantuan" id="bantuan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Rumah</label>
                                        <input type="file" name="foto_rumah" id="foto_rumah" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Rekening Listrik</label>
                                        <input type="file" name="rekening_listrik" id="rekening_listrik"
                                            class="form-control">
                                    </div>
                                    <div class="footer">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($this->session->flashdata('sukses')) : ?>
<script>
Swal.fire({
    title: 'Sukses....!',
    text: '<?php echo $this->session->flashdata('sukses'); ?>',
    icon: 'success',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('gagal')) : ?>
<script>
Swal.fire({
    title: 'Oops....!',
    text: '<?php echo $this->session->flashdata('gagal'); ?>',
    icon: 'error',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>