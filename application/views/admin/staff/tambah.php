<div class="container">
    <?php
    if (!empty($this->session->flashdata('Pesan'))) :
    ?>
        <div class="alert alert-danger mt-5 " role=alert>
            <?= $this->session->flashdata('Pesan'); ?>
        </div>
    <?php
    endif;
    ?>
    <form class="mt-2" action="<?= base_url(); ?>Staff/tambah" method="post" enctype="multipart/form-data">
        <div class="form-group col-lg-4">
            <label for="namastaff">Nama Staff</label>
            <input name="namastaff" type="text" class="form-control" id="namastaff">
            <?= form_error('namastaff', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="form-group col-lg-4">
            <label for="nomortelepon">Nomor Telepon</label>
            <br>
            <input name="notelp" id="notelp" type="text" class="form-control"></input>
            <?= form_error('notelp', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="alamat">Alamat</label>
            <input name="alamat" type="text" class="form-control" id="alamat">
            <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="role">Role</label>
            <input name="role" type="text" class="form-control" id="role">
            <?= form_error('role', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control" id="email">
            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="pass">Password</label>
            <input name="pass" type="password" class="form-control" id="pass">
            <?= form_error('pass', '<small class="text-danger">', '</small>') ?>
        </div>

        <a href="<?= base_url(); ?>Staff" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</div>