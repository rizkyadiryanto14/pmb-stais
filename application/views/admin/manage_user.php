<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Manage User</h4>
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
                                <th>Bukti Bayar</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $item) :

                            ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $item->nisn ?></td>
                                <td><?= $item->npsn ?></td>
                                <td><?= $item->nama_lengkap ?></td>
                                <td>
                                    <a href="<?= base_url('uploads/bukti_pembayaran/' . $item->bukti_pembayaran) ?>">Lihat
                                        File</a>
                                </td>
                                <td><?= $item->date_created ?></td>
                                <td>
                                    <?php if ($item->status == 1) { ?>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#nonaktifkan<?= $item->id ?>"><i class="fas fa-check"></i></button>
                                    <?php } else { ?>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#aktifkan<?= $item->id ?>"><i class="fas fa-times"></i></button>
                                    <?php } ?>
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

<?php foreach ($user as $item) { ?>
<div class="modal fade" id="aktifkan<?= $item->id ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aktifkan Accout</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('updateStatus/' . $item->id) ?>" method="POST">
                <div class="modal-body">
                    <h3 class="text-center">Apakah Anda Yakin Aktifkan Account ?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>

<?php foreach ($user as $item) { ?>
<div class="modal fade" id="nonaktifkan<?= $item->id ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nonaktifkan Accout</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('updateStatus/' . $item->id) ?>" method="POST">
                <div class="modal-body">
                    <h3 class="text-center">Apakah Anda Yakin Menonaktifkan Account ?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>