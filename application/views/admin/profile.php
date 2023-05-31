<div class="container-fluid">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Profile</h3>
            </div>
            <div class="card-body">
                <?php foreach ($profile as $profile) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                value="<?= $profile->nama_lengkap ?>" readonly>
                        </div>
                        <label for="">Email</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                            value="<?= $profile->email ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="username" class="form-control" value="<?= $profile->username ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Account Created</label>
                            <input type="text" name="created" id="created" class="form-control"
                                value="<?= $profile->date_created ?>" readonly>
                        </div>
                    </div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>