<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Dashboard Admin</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">BKD</h6>
                                        <h6 class="font-extrabold mb-0">40</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">User</h6>
                                        <h6 class="font-extrabold mb-0">50</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">RPS</h6>
                                        <h6 class="font-extrabold mb-0">30</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Other</h6>
                                        <h6 class="font-extrabold mb-0">12</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Admin</h5>
                                <h6 class="text-muted mb-0">admin</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h4>Timeline Pengumpulan</h4>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>Waktu Mulai</td>
                        <td> : <span id="waktu_mulai"></span></td>
                    </tr>
                    <tr>
                        <td>Waktu Akhir</td>
                        <td> : <span id="waktu_akhir"></span></td>
                    </tr>
                </table>
                <div id="countdown"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#grafik1" data-bs-toggle="tab">Grafik 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#grafik2" data-bs-toggle="tab">Grafik 2</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="grafik1">
                    <canvas id="canvas1"></canvas>
                </div>
                <div class="tab-pane fade" id="grafik2">
                    <canvas id="canvas2"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>
<style>
    #canvas1,
    #canvas2 {
        height: 400px;
        width: 800px;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="<?= base_url('assets/js/countdown.js') ?>"></script>

<script>
    var start = '<?php echo strtotime($start_time) * 1000 ?>'; // Konversi ke milidetik
    var end = '<?php echo strtotime($end_time) * 1000 ?>'; // Konversi ke milidetik
    countdown(start, end);
</script>

<script>
    var grafik1Data = {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
        datasets: [{
            label: "Grafik 1",
            data: [65, 59, 80, 81, 56, 55, 40],
            borderColor: "red",
            fill: false
        }]
    };

    var grafik2Data = {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
        datasets: [{
            label: "Grafik 2",
            data: [28, 48, 40, 19, 86, 27, 90],
            borderColor: "yellow",
            fill: false
        }]
    };

    var options = {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    };

    var grafik1 = new Chart(document.getElementById("canvas1"), {
        type: "line",
        data: grafik1Data,
        options: options
    });

    var grafik2 = new Chart(document.getElementById("canvas2"), {
        type: "bar",
        data: grafik2Data,
        options: options
    });
</script>