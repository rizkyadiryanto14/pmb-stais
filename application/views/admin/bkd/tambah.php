<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah hasil bkd</h3>
                    <p class="text-subtitle text-muted">Portal Akademik Dosen Informatika</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">tambah bkd</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Berkas</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="<?= base_url('simpan_bkd') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <h4>Data Akademik</h4>
                                            <div class="form-group">
                                                <label for="first-name-column">Dosen</label>
                                                <select name="id_dosen" id="id_dosen" class="form-control">
                                                    <option selected disabled> Pilih Dosen </option>
                                                    <?php foreach ($dosen as $dosen) : ?>
                                                        <option value="<?= $dosen->id ?>"><?= $dosen->nidn, ' | ', $dosen->nama ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <?= form_error('id_dosen', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Semester</label>
                                                <select name="semester" id="semester" class="form-control">
                                                    <option selected disabled> Pilih Semester </option>
                                                    <option value="genap">Genap</option>
                                                    <option value="ganjil">Ganjil</option>
                                                </select>
                                                <?= form_error('semester', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Periode</label>
                                                <select name="id_periode" id="id_periode" class="form-control">
                                                    <option selected disabled> Pilih Periode</option>
                                                    <?php foreach ($periode as $periode) : ?>
                                                        <option value="<?= $periode->id ?>"><?= $periode->nama_periode ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <?= form_error('id_periode', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <h4>File Document</h4>
                                            <div class="form-group">
                                                <label for="">Bukti Pendidikan</label>
                                                <input type="file" class="form-control" name="bukti_pendidikan">
                                                <?= form_error('bukti_pendidikan', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti Pengabdian</label>
                                                <input type="file" class="form-control" name="bukti_pengabdian">
                                                <?= form_error('bukti_pengabdian', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti Penelitian</label>
                                                <input type="file" class="form-control" name="bukti_penelitian">
                                                <?= form_error('bukti_penelitian', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti Penunjang</label>
                                                <input type="file" class="form-control" name="bukti_penunjang">
                                                <?= form_error('bukti_penunjang', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Bukti Print Out Sister</label>
                                                <input type="file" class="form-control" name="print_sister">
                                                <?= form_error('print_sister', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-grid gap-2 col-6 mx-auto">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                        <div class="col-md-6 d-grid gap-2 col-6 mx-auto">
                                            <a href="<?= base_url('tambah_bkd') ?>" class="btn btn-light-secondary me-1 mb-1">Reset</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>