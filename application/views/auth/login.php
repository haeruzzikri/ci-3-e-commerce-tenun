<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="home.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Halaman Login</li>
        </ol>
    </div>
</div>

<div class="login">
    <div class="container">
        <h2>Masuk</h2>

        <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
            <?php
            if (!empty($this->session->flashdata('Pesan'))) :
            ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('Pesan'); ?>
                </div>
            <?php
            endif;
            ?>
            <form action="" method="POST">
                <input type="text" name="email" placeholder="Email">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                <input type="password" name="pass" placeholder="Password">
                <?= form_error('pass', '<small class="text-danger">', '</small>') ?>
                <input type="submit" name="login" value="Masuk">
            </form>
        </div>
        <h4>Belum terdaftar?</h4>
        <p><a href="<?= base_url(); ?>Auth/daftar">Daftar Sekarang</a></p>
    </div>
</div>