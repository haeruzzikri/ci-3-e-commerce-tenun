<div class="main-content-inner">
    <?php
    if (!empty($this->session->flashdata('Pesan'))) :
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('Pesan'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    elseif (!empty($this->session->flashdata('Pesan Hapus'))) :
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('Pesan Hapus'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    elseif (!empty($this->session->flashdata('Pesan Edit'))) :
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('Pesan Edit'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    endif;
    ?>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2>Daftar Produk</h2>
                        <a href="<?= base_url(); ?>Produk/tambah" style="margin-bottom:20px" class="btn btn-primary col-md-2">Tambah Produk</a>
                    </div>
                    <div class="data-tables datatable-dark">
                        <div class="table-responsive">
                            <table id="dataTable3" class="display table" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga Diskon</th>
                                        <th>Deskripsi</th>
                                        <th>Stok</th>
                                        <th>Harga Awal</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($produk as $p) :
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><img class="py-2" src="<?= base_url(); ?>assets/produk/<?= $p['gambar']; ?>" alt="" width="80"></td>
                                            <td><?= $p['namaproduk']; ?></td>
                                            <td><?= $p['namakategori']; ?></td>
                                            <td><?= $p['hargaafter']; ?></td>
                                            <td><?= $p['deskripsi']; ?></td>
                                            <td><?= $p['rate']; ?></td>
                                            <td><?= $p['hargabefore']; ?></td>
                                            <td><?= $p['tgldibuat']; ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="<?= base_url(); ?>Produk/edit/<?= $p['idproduk'] ?>" class="btn btn-primary mr-2">Edit</a>
                                                    <a href="<?= base_url(); ?>Produk/hapus/<?= $p['idproduk'] ?>" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>