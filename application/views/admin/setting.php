<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card mb-4">
            <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="umum-tab" data-toggle="tab" href="#umum" role="tab"
                            aria-controls="umum" aria-selected="true">Umum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo"
                            aria-selected="true">Website</a>
                    </li>
                    <li class="nava-item">
                        <a href="#pembayaran" class="nav-link" id="pembayaran-tab" data-toggle="tab" role="tab"
                            aria-controls="pembayaran" aria-selected="true">Pembayaran</a>
                    </li>
                    <li class="nava-item">
                        <a href="#alur_pendaftaran" class="nav-link" id="alur_pendaftaran-tab" data-toggle="tab"
                            role="tab" aria-controls="alur_pendaftaran" aria-selected="true">Alur Pendaftaran</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
                        <form action="<?= base_url('umum') ?>" method="POST">
                            <div class="row mb-3">
                                <?php foreach($setting as $item) :  ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Facebook</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control"
                                            value="<?= $item->facebook ?>" placeholder="Nama Facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Intagram</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control"
                                            value="<?= $item->instagram ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Alamat Lengkap</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control"
                                            value="<?= $item->alamat_lengkap ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Google Maps</label>
                                        <textarea name="google_maps" id="google_map" rows="5"
                                            class="form-control"><?= $item->google_maps ?></textarea>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Update Setting</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                        <form action="<?= base_url('website') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Nama Website</label>
                                <input type="text" name="nama_website" id="nama_website" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Logo Website</label>
                                <input type="file" name="logo_website" id="logo_website" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Icon Website</label>
                                <input type="file" name="icon_website" id="icon_website" class="form-control">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Update Setting</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
                        <div class="card-header">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#tambah">Tambah
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Bank</th>
                                        <th scope="col">Nomor Rekening</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($pembayaran as $item) : ?>
                                    <tr class="text-center">
                                        <td><?= $no++ ?></td>
                                        <td><?= $item->nama_bank ?></td>
                                        <td><?= $item->nomor_rek ?></td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit<?= $item->id ?>">Edit</button>
                                            <button class="btn btn-danger" data-toggle="modal"
                                                data-target="#hapus<?= $item->id ?>" data>Hapus</button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="alur_pendaftaran" role="tabpanel"
                        aria-labelledby="alur_pendaftaran-tab">
                        <form action="<?= base_url('website') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pendaftaran</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul_pendaftaran" id="judul_pendaftaran"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Penjelasan</label>
                                                <input type="text" name="penjelasan_pendaftaran"
                                                    id="penjelasan_pendaftaran" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gambar</label>
                                                <input type="file" name="gambar_pendaftaran" id="gambar_pendaftaran"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Seleksi Berkas</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul_pendaftaran" id="judul_pendaftaran"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Penjelasan</label>
                                                <input type="text" name="penjelasan_seleksi" id="penjelasan"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gambar</label>
                                                <input type="file" name="gambar_seleksi" id="gambar_seleksi"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pengumuman</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul_pengumuman" id="judul_pengumuman"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Penjelasan</label>
                                                <input type="text" name="penjelasan_pengumuman"
                                                    id="penjelasan_pengumuman" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gambar</label>
                                                <input type="file" name="gambar_pengumuman" id="gambar_pengumuman"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Pendaftaran Ulang</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul_daftarUlang" id="judul_daftarUlang"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Penjelasan</label>
                                                <input type="text" name="penjelasan_daftarUlang"
                                                    id="penjelasan_daftarUlang" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gambar</label>
                                                <input type="file" name="gambar_daftarUlang" id="gambar_daftarUlang"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach($pembayaran as $item) :  ?>
<div class="modal fade" id="hapus<?= $item->id ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="card-title">Hapus data</h3>
            </div>
            <form action="<?= base_url('HapusPembayaran') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $item->id ?>">
                        <label for="">Anda Yakin ingin menghapus Data Pembayaran</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>

<?php foreach($pembayaran as $item) :  ?>
<div class="modal fade" id="edit<?= $item->id ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="card-title">Edit data</h3>
            </div>
            <form action="<?= base_url('editPembayaran') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $item->id ?>">
                        <label for="">Nama Bank</label>
                        <input type="text" name="nama_bank" id="nama_bank" class="form-control"
                            value="<?=$item->nama_bank ?>">
                    </div>
                    <div class="form-group">
                        <label for="">No. Rekening</label>
                        <input type="text" name="nomor_rek" id="no_rek" class="form-control"
                            value="<?= $item->nomor_rek ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>

<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="card-title">Tambah data</h3>
            </div>
            <form action="<?= base_url('pembayaran') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Bank</label>
                        <input type="text" name="nama_bank" id="nama_bank" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">No. Rekening</label>
                        <input type="text" name="nomor_rek" id="no_rek" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($this->session->flashdata('message')) : ?>
<script>
Swal.fire({
    title: 'Oops....!',
    text: '<?php echo $this->session->flashdata('message'); ?>',
    icon: 'error',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('sukses')) : ?>
<script>
Swal.fire({
    title: 'Sukses',
    text: '<?php echo $this->session->flashdata('sukses'); ?>',
    icon: 'success',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('gagal')) : ?>
<script>
Swal.fire({
    title: 'gagal',
    text: '<?php echo $this->session->flashdata('gagal'); ?>',
    icon: 'success',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>