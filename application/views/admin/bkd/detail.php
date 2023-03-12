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
                    <h3>Detail BKD</h3>
                    <p class="text-subtitle text-muted">Portal Akademik Dosen Informatika</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail BKD</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form text-center">
        <div class="row match-height">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-header text-center">
                                <h4>Detail Status BKD Dosen</h4>
                            </div>
                            <form class="form">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <?php foreach ($detail_bkd as $item) : ?>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><?= $item->nama ?></td>
                                                </tr>
                                                <tr>
                                                    <td>NIDN</td>
                                                    <td><?= $item->nidn ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Konsentrasi</td>
                                                    <td><?= $item->nama_periode ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bukti Pendidikan</td>
                                                    <td><a href="<?= base_url('upload/bkd/' . $item->bukti_pendidikan) ?>">Lihat File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Bukti Pengabdian</td>
                                                    <td><a href="<?= base_url('upload/bkd/' . $item->bukti_pengabdian) ?>">Lihat File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Bukti Penelitian</td>
                                                    <td><a href="<?= base_url('upload/bkd/' . $item->bukti_penelitian) ?>">Lihat File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Bukti Penunjang</td>
                                                    <td><a href="<?= base_url('upload/bkd/' . $item->bukti_penunjang) ?>">Lihat File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Bukti Print Out Sister</td>
                                                    <td><a href="<?= base_url('upload/bkd/' . $item->print_sister) ?>">Lihat File</a></td>
                                                </tr>
                                            <?php endforeach ?>
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