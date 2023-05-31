<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header" style="background-color: aliceblue;">
                <h4>Daftar Formulir Masuk</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>NISN</th>
                                <th>NPSN</th>
                                <th>Nama</th>
                                <th>Tanggal Daftar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($seleksi as $item) :

                            ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->nisn ?></td>
                                    <td><?= $item->npsn ?></td>
                                    <td><?= $item->nama_lengkap ?></td>
                                    <td><?= $item->date_created ?></td>
                                    <td>
                                        <a href="<?= base_url('detailUser/' . $item->id) ?>" class="btn btn-warning">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sweetalert -->
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