<div class="container-fluid pt-4">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h4>Detail Formulir pendaftar</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="tombol pr-2">
                        <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#terima"> <i
                                class="fas fa-check pr-2"></i>Terima</button>
                    </div>
                    <div class="tombol">
                        <input type="hidden" name="id_pendaftaran">
                        <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#tolak"> <i
                                class="fas fa-times pr-2"></i>Tolak</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php foreach ($detail as $item) { ?>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $item->nama_lengkap ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap" value="<?= $item->nisn ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap"
                                value="<?= $item->jenis_kelamin ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap" value="<?= $item->tempat_lahir ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap"
                                value="<?= $item->tanggal_lahir ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Status Pembayaran</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap"
                                value="<?= $item->status == 1 ? 'sudah' : 'belum' ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">NPSN</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap" value="<?= $item->npsn ?>"
                                class="form-control" readonly>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <?php foreach ($detail as $item) { ?>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap" value="<?= $item->asal_sekolah ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap" value="<?= $item->alamat ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap"
                                value="<?= $item->jenis_kelamin ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">No. Telepon</label>
                            <input type="text" name="jenis_kelamin" id="nama_lengkap" value="<?= $item->no_telepon ?>"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Ijazah</label> <br>
                            <a href="<?= base_url('uploads/ijazah/' . $item->ijazah) ?>"
                                class="btn btn-success">Download Ijazah</a>
                        </div>
                        <div class="form-group">
                            <label for="">KTP</label><br>
                            <a href="<?= base_url('uploads/ijazah/' . $item->ktp) ?> " class="btn btn-success">Download
                                KTP</a>
                        </div>
                        <div class="form-group">
                            <label for="">SKTM</label><br>
                            <a href="<?= base_url('uploads/ijazah/' . $item->sktm) ?>" class="btn btn-success">Dowload
                                SKTM</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="terima" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('hasil_seleksi_terima') ?>" method="POST">
                <div class="modal-body">
                    <?php foreach ($detail as $item) { ?>
                    <input type="hidden" name="id_pendaftaran" id="id_pendaftaran" value="<?= $item->id ?>">
                    <label for="">Aksi yang anda lakukan tidak dapat di ubah kembali, Terima Verifikasi berkas ?</label>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('hasil_seleksi_tolak') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <?php foreach ($detail as $item) { ?>
                        <input type="hidden" name="id_pendaftaran" id="id_pendaftaran" value="<?= $item->id ?>">
                        <label for="">Aksi yang anda lakukan tidak dapat di ubah kembali, Terima Verifikasi berkas
                            ?</label>
                        <?php } ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>