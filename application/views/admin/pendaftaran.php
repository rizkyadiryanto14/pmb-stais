<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Pendaftaran</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No.Tlpn</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pendaftar as $item) :
                            ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->nama_lengkap ?></td>
                                    <td><?= $item->alamat ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->no_telepon ?></td>
                                    <td><?= $item->date_created ?></td>
                                    <td>
                                        <?php if ($item->status == 1) { ?>
                                            <button class="btn btn-primary btn-sm"><i class="fas fa-check"></i></button>
                                        <?php } else { ?>
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
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