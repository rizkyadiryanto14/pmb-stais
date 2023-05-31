<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #0f4c81;">
    <!-- Left navbar links -->
    <ul class=" navbar-nav">
        <li class="nav-item">
            <a class="nav-link" style="color: #fff;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1" style="color: #fff; margin-right: 40px;" type="button" class="dropdown-toggle text-capitalize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nav-icon fas fa-user-circle"></i> Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="<?= base_url('user/profile') ?>"><i class="nav-icon fas fa-user"></i>
                        &nbsp;
                        My Profile</a>
                    <a class="dropdown-item" href="<?= base_url('Logout') ?>">
                        <i class="nav-icon fas fa-sign-out-alt"></i> &nbsp; Log Out
                    </a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->