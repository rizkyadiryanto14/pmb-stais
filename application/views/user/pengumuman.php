<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Pengumuman Seleksi</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($pengumuman_user as $item) :  ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $item->nisn ?></td>
                            <td><?= $item->nama_lengkap ?></td>
                            <td><?= $item->asal_sekolah ?></td>
                            <td>
                                <?php if($item->status_hasil == 1) { ?>
                                <span class="badge badge-success">Diterima</span>
                                <?php }
                                else { ?>
                                <span class="badge badge-danger">Ditolak</span>
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