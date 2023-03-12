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
                    <h3>Form Tambah Dosen</h3>
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

        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pendidik</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="<?= base_url('registration') ?> " method="POST" data-parsley-validate>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label">NIDN</label>
                                                    <input type="text" id="nidn" class="form-control" placeholder="NIDN" name="nidn" data-parsley-required="true">
                                                    <?= form_error('nidn', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label">Nama Lengkap</label>
                                                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" data-parsley-required="true">
                                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="">NIP</label>
                                                <input type="text" id="nip" class="form-control" name="nip" placeholder="NIP">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="form-group mandatory">
                                                    <label for="" class="form-label">Email</label>
                                                    <input type="text" id="email" class="form-control" name="email" placeholder="E-Mail" data-parsley-required="true">
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="">Telepon</label>
                                                <input type="number" id="telepon" class="form-control" name="telepon" placeholder="Nomor Telepon">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="">Alamat</label>
                                                <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Foto Profile</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Gambar</label>
                                            </div>
                                            <div class="preview">
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                            <div class="col-12 d-flex justify-content-end pt-4">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Horizontal form layout section end -->

        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pendidikan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Pendidikan</label>
                                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                                        <option selected disabled> Pilih Pendidikan Terakhir</option>
                                                        <option value="">S1</option>
                                                        <option value="">S2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Program Studi</label>
                                                    <select name="prodi" id="prodi" class="form-control">
                                                        <option selected disabled> Pilih Program Studi</option>
                                                        <option value="">Informatika</option>
                                                        <option value="">Teknik Elektro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Konsentrasi</label>
                                                    <input type="text" id="konsestrasi" class="form-control" name="konsentrasi" placeholder="Konsentrasi Bidang Studi">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
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