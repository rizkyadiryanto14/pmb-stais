<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMB | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="hold-transition login-page">
    <div class="row">
        <div class="col-12 col-md-6 text-center mt-3 mx-auto p-3">
            <?php foreach($setting as $item) : ?>
            <img src="<?php echo base_url('uploads/website/' .$item->logo_website) ?>" width="35%" class="mb-4" />
            <?php endforeach ?>
            <br>
            <h1 class="h2" style="font-size: 28px;">Sistem Penerimaan Mahasiswa Baru</h1>
        </div>
    </div>
    <div class="login-box">
        <!-- /.login-logo -->
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="<?= base_url('auth/login') ?>" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="loginName">username</label>
                        <input type="text" id="username" class="form-control" name="username" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" class="form-control" name="password" />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form action="<?= base_url('registerUser') ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name input -->
                            <div class="form-outline mb-6">
                                <label class="form-label" for="registerName">Nama Lengkap</label>
                                <input type="text" id="registerName" class="form-control" name="nama_lengkap" />
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-6">
                                <label class="form-label" for="registerUsername">NISN</label>
                                <input type="text" id="registerUsername" class="form-control" name="nisn" />
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-6">
                                <label class="form-label" for="registerEmail">NPSN</label>
                                <input type="text" id="registerEmail" class="form-control" name="npsn" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-6">
                                <label class="form-label" for="registerPassword">Asal Sekolah</label>
                                <input type="text" id="registerPassword" class="form-control" name="asal_sekolah" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline mb-6">
                                <label for="" class="form-label">No.Telepon</label>
                                <input type="text" name="no_telepon" id="no_telepon" class="form-control">
                            </div>
                            <div class="form-outline mb-6">
                                <label class="form-label" for="registerRepeatPassword">Email</label>
                                <input type="text" id="registerRepeatPassword" class="form-control" name="email" />
                            </div>
                            <div class="form-outline mb-6">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamins" class="form-select">
                                    <option selected disabled> Pilih Jenis Kelamin</option>
                                    <option value="L"> Laki - Laki</option>
                                    <option value="P"> Perempuan</option>
                                </select>
                            </div>
                            <div class="form-outline mb-6">
                                <label for="">Bukti Pembayaran</label>
                                <input type="file" name="bukti_pembayaran" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">Sign in</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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
</body>

</html>