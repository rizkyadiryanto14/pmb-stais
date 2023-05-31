<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | PMB </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />

    <style>
    iframe {
        width: 100% !important;
        height: 300 !important;
    }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <?php foreach($setting as $item) : ?>
            <a class="navbar-brand" href="#page-top"><img src="<?= base_url('uploads/website/'. $item->logo_website) ?>"
                    alt="..." /></a>
            <?php endforeach ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Alur Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Tahapan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a href="<?= base_url('auth') ?>" class="nav-link">Login PMB</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">STAIS SUMBAWA</div>
            <div class="masthead-heading text-uppercase">Penerimaan Mahasiswa Baru</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="<?= base_url('auth') ?>">Gabung Sekarang</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="section-subheading text-muted ">Kami Menyediakan</h4>
                <h3 class="section-heading text-uppercase">Kuota 100+ Beasiswa</h3>
                <h5 class="section-subheading text-muted ">(Full 100% Selama Kuliah)</h5>
                <br><br>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-star fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Beasiswa Para Bintang</h4>
                    <p class="text-muted">Beasiswa penuh 100% selama kuliah khusus kamu para bintang, para juara.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Beasiswa Mimpi</h4>
                    <p class="text-muted">Beasiswa penuh 100% selama kuliah khusus kamu para bintang, para juara.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Beasiswa Artis</h4>
                    <p class="text-muted">Beasiswa penuh 100% selama kuliah khusus kamu para bintang, para juara.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section class="page-section bg-light" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Alur Pendaftaran</h2>
                <h3 class="section-subheading text-muted">Diagram Pendaftaran</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="<?= base_url() ?>assets/img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>6 April 2023</h4>
                            <h4 class="subheading">Pendaftaran</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Calon Mahasiswa Melakukan Pembayaran serta mengisi data diri untuk
                                proses pendaftaran akun PMB</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="<?= base_url() ?>assets/img/about/2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>10 April 2023</h4>
                            <h4 class="subheading">Seleksi Berkas</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Seleksi Berkas dari Calon Mahasiswa akan dilakukan sampai waktu yang
                                ditentukan</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="<?= base_url() ?>assets/img/about/3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>20 April</h4>
                            <h4 class="subheading">Pengumuman</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pengumuman dari hasil seleksi berkas Calon Mahasiswa</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="<?= base_url() ?>assets/img/about/4.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>24 - 30 April 2023</h4>
                            <h4 class="subheading">Pendaftaran Ulang</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Mahasiswa yang sudah di nyatakan lulus harus melakukan pendaftaran
                                ulang</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Gelombang Pendaftaran</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url() ?>assets/img/gambar1.jpg" alt="..." />
                        <h4>Gelombang Pertama</h4>
                        <p class="text-muted">1 Januari 2023 s/d 31 Maret 2023</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url() ?>assets/img/gambar1.jpg" alt="..." />
                        <h4>Gelombang Kedua</h4>
                        <p class="text-muted">6 April 2023 s/d 29 Juni 2023</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url() ?>assets/img/gambar1.jpg" alt="..." />
                        <h4>Gelombang Ketiga</h4>
                        <p class="text-muted">03 Juli 2023 s/d 28 Agustus 2023</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Hubungi Kami Di</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <?php foreach($setting as $item) : ?>
                <div class="row align-items-stretch mb-5">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="single-widget category-widget">
                                    <h4 class="title">Sosial Media Kami</h4>

                                    <ul>
                                        <li>
                                            <a href="<?= $item->facebook ?>" target="_blank"
                                                class="justify-content-between align-items-center d-flex">
                                                <h6>Facebook</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $item->instagram ?>" target="_blank"
                                                class="justify-content-between align-items-center d-flex">
                                                <h6>Instagram</h6> <span></span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9 text-center">
                                    <?= $item->google_maps ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->

            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; PMB STAIS SUMBAWA <?= date('Y') ?></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>