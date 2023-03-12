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
                    <h3>Daftar Dosen</h3>
                    <p class="text-subtitle text-muted">Portal Akademik Dosen Informatika</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('tambah_dosen') ?>" class="btn btn-info">Tambah Dosen</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIDN</th>
                                                        <th>Nama</th>
                                                        <th>Setting</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($dosen as $dosen) : ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $dosen->nidn ?></td>
                                                            <td><?= $dosen->nama ?></td>
                                                            <td>
                                                                <a href="" class="btn btn-primary"><i class="fas fa-pencil"></i></a>
                                                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                                <a href="" class="btn btn-warning"><i class="fas fa-info"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>