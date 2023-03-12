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
                    <h3>Daftar User</h3>
                    <p class="text-subtitle text-muted">Portal Akademik Dosen Informatika</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
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
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#tambahUser">Tambah User</button>
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
                                                        <th>Role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($user as $user) :
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $user->nidn ?></td>
                                                            <td>
                                                                <?php
                                                                if ($user->role_id == 1) {
                                                                    echo 'Admin';
                                                                } elseif ($user->role_id == 2) {
                                                                    echo 'Dosen';
                                                                } elseif ($user->role_id == 3) {
                                                                    echo 'Kaprodi';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>

                                                                <button class="btn btn-primary btn-sm dropdown-toggle me-1" type="button" id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-edit text-warning"></i></a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-trash text-danger"></i></a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-info text-info"></i></a>
                                                                </div>

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


    <!-- modal tambah user -->
    <div class="modal fade text-left" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Add New User </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?= base_url('tambah_user') ?>" method="POST">
                    <?php foreach ($dosen as $dosen) : ?>
                        <div class="modal-body">
                            <input type="hidden" name="nidn" id="nidn" value="<?= $dosen->nidn ?>">
                            <select name="id_dosen" id="id_dosen" class="form-control">
                                <option selected disabled> Pilih Dosen</option>

                                <option value="<?= $dosen->id ?>"><?= $dosen->nidn, ' | ', $dosen->nama ?></option>

                            </select>
                        </div>
                    <?php endforeach ?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Registration</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end modal tambah user -->