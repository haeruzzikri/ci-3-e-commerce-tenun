<div class="container">
    <form class="form-group mt-3" action="<?= base_url(); ?>Kategori/tambah" method="post" enctype="multipart/form-data">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputkategori" class="">Nama Kategori</label>
            <input name="namakategori" type="text" class="form-control" id="inputkategori" placeholder="Masukkan Nama Kategori">
            <?= form_error('namakategori', '<small class="text-danger">', '</small>') ?>
        </div>
        <!-- <div class="form-group mx-sm-3 mb-2">
            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
        </div> -->
        <a href="<?= base_url(); ?>Kategori" class="btn btn-danger mt-2 mb-2 ml-3">Batal</a>
        <button type="submit" class="btn btn-primary mt-2 mb-2 ml-3">Tambah</button>
    </form>
</div>
</script>