<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="home.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Daftar</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- register -->
<div class="register">
    <div class="container">
        <h2>Daftar Disini</h2>
        <div class="login-form-grids">
            <h5>Informasi Pribadi</h5>
            <form action="" method="post">
                <input type="text" name="nama" placeholder="Nama Lengkap">
                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                <input type="text" name="telp" placeholder="Nomor Telepon">
                <?= form_error('telp', '<small class="text-danger">', '</small>') ?>
                <input type="text" name="alamat" placeholder="Alamat Lengkap">
                <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>

                <h6>Informasi Login</h6>

                <input type="email" name="email" placeholder="Email">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                <input type="password" name="pass" placeholder="Password">
                <?= form_error('pass', '<small class="text-danger">', '</small>') ?>
                <input type="password" name="pass2" placeholder="Konfirmasi Password">
                <input type="submit" name="adduser" value="Daftar">
            </form>
        </div>
        <div class="register-home">
            <a href="<?= base_url(); ?>Auth">Batal</a>
        </div>
    </div>
</div>