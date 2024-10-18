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
    <form class="mt-2" action="<?= base_url(); ?>Pembayaran/tambah" method="post" enctype="multipart/form-data">
        <div class="form-group col-lg-4">
            <label for="namametode">Nama Metode</label>
            <input name="namametode" type="text" class="form-control" id="namametode">
            <?= form_error('namametode', '<small class="text-danger">', '</small>') ?>
        </div>

        <div class="form-group col-lg-4">
            <label for="deskripsi">Nomor Rekening/Nomor Penerima Dana</label>
            <br>
            <input name="norek" id="norek" type="text" class="form-control"></input>
            <?= form_error('norek', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="urllogo">URL Logo</label>
            <input name="urllogo" type="text" class="form-control" id="urllogo">
            <?= form_error('urllogo', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="an">Atas Nama</label>
            <input name="an" type="text" class="form-control" id="an">
            <?= form_error('an', '<small class="text-danger">', '</small>') ?>
        </div>

        <a href="<?= base_url(); ?>Pembayaran" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</div>