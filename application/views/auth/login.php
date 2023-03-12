<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Dosen</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/pages/auth.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <h3 class="mb-5 text-center">
                                <div class="logo-brand">
                                    <img src="<?= base_url('assets/images/logo/informatika.png') ?>" width="50%" alt="">
                                </div>
                                <div class="title-images pt-4">
                                    <h6>Log In</h6>
                                    <h6><strong>Login To your Session</strong></h6>
                                </div>
                            </h3>

                            <?= $this->session->flashdata('message') ?>

                            <form action="<?= base_url('login') ?>" method="POST">
                                <div class="form-outline mb-4">
                                    <label for=""><strong>NIDN</strong></label>
                                    <input type="text" name="nidn" id="nidn" class="form-control form-control-lg" placeholder="Tuliskan NIDN anda..." />
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for=""><strong>Password</strong></label>
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Tuliskan password anda" />
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </form>
                            <hr class="my-4">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6">
                                    <button class="btn btn-success btn-sm"><i class="fa fa-key"></i> Lupas Password?</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success btn-sm"> <i class="fa fa-download"></i> Unduh Panduan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>