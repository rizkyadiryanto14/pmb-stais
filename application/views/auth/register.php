<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | PMB</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="main-content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <img src="<?= base_url('assets/images/stais.png') ?>" width="15%" alt="">
                        <h3 class="text-warning">Pendaftaran Mahasiswa Baru</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('registerUser') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="text" name="nisn" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option selected disabled>Jenis Kelamin</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">NPSN</label>
                                    <input type="text" name="npsn" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telepon/Hp</label>
                                    <input type="text" name="no_telepon" id="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Bukti Pembayaran (<small>pdf,jpg,jpeg,png</small> )</label>
                                    <input type="file" name="bukti_pembayaran" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>