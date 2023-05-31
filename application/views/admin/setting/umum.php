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
                    <h3>Setting Portal</h3>
                    <p class="text-subtitle text-muted">Portal Akademik Dosen Informatika</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Setting</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-header">
                    <?= $this->session->flashdata('message'); ?>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="umum-tab" data-bs-toggle="tab" href="#umum" role="tab"
                                aria-controls="umum" aria-selected="true">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="periode-tab" data-bs-toggle="tab" href="#periode" role="tab"
                                aria-controls="periode" aria-selected="false">Periode</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pendidikan-tab" data-bs-toggle="tab" href="#pendidikan" role="tab"
                                aria-controls="pendidikan" aria-selected="false">Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active" id="rps-setting" data-bs-toggle="tab" role="tab"
                                aria-controls="umum" aria-selected="true">RPS Setting</a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show" id="rps-setting" role="tabpanel" aria-label=""></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
                            <h3 class="col-md-12 order-md-1">Setting Timeline</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <td>No</td>
                                            <td>Waktu Mulai</td>
                                            <td>Waktu Akhir</td>
                                            <td>Setting</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($timeline as $timeline) : ?>
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?= $timeline->waktu_mulai ?></td>
                                            <td><?= $timeline->waktu_akhir ?></td>
                                            <td>
                                                <button class="btn btn-primary" data-bs-target="#update"
                                                    data-bs-toggle="modal" type="button"><i
                                                        class="fas fa-pencil"></i></button>
                                                <a href="<?= base_url('reset_timeline') ?>" class="btn btn-warning"><i
                                                        class="fas fa-refresh"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="periode" role="tabpanel" aria-labelledby="periode-tab">
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tambahPeriode"
                                type="button">Tambah Periode</button>
                            <div class="table-responsive pt-3">
                                <table class="table table-striped table-bordered table-hover" id="dataTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tahun Periode</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($periode as $periode) : ?>
                                        <tr class="text-center">
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td class="text-center"><?= $periode->nama_periode ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-info btn-sm">Action</button>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div> <!-- akhir div tabel -->
                        </div>

                        <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tambahPendidikan"
                                type="button">Tambah Pendidikan</button>
                            <div class="table-responsive pt-3">
                                <table class="table table-striped table-bordered table-hover" id="dataTable"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">No</th>
                                            <th class="text-center">Pendidikan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($pendidikan as $pendidikan) : ?>
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?= $pendidikan->nama_pendidikan ?></td>
                                            <td>
                                                <button class="btn btn-info btn-sm">Action</button>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div> <!-- akhir div tabel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Update Timeline</h3>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('tambah_timeline') ?>" method="POST">
                        <div class="form-group">
                            <label for="">Mulai</label>
                            <input type="datetime-local" name="waktu_mulai" id="waktu_mulai" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="">Selesai</label>
                            <input type="datetime-local" name="waktu_akhir" id="waktu_akhir" class="form-control"
                                required>
                        </div>
                        <div class="footer">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal tambah periode -->
    <div class="modal fade text-left" id="tambahPeriode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add New Periode </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?= base_url('tambah_periode') ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama Periode</label>
                            <input type="text" class="form-control" name="nama_periode">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal tambah periode -->

    <!-- modal tambah pendidikan -->
    <div class="modal fade text-left" id="tambahPendidikan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add New Pendidikan </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?= base_url('tambah_pendidikan') ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">pendidikan</label>
                            <input type="text" class="form-control" name="nama_pendidikan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal tambah pendidikan -->