<div class="main-content-inner">
    <?php
    if (!empty($this->session->flashdata('Pesan'))) :
    ?>
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <?= $this->session->flashdata('Pesan'); ?>
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
                        <h2>Daftar Kategori</h2>
                        <a href="<?= base_url(); ?>Kategori/tambah" style="margin-bottom:20px" class="btn btn-primary col-md-2">Tambah Kategori</a>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="display" style="width:100%">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kategori</th>
                                    <th>Jumlah Produk</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $no = 1;
                                foreach ($kategori as $k) :
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $k['namakategori']; ?></td>
                                        <td><?= jumlah_kategori($k['namakategori']); ?></td>
                                        <td><?= $k['tgldibuat']; ?></td>
                                        <td>
                                            <div class="d">
                                                <a href="<?= base_url(); ?>Kategori/edit/<?= $k['idkategori']; ?>" class="btn btn-primary mr-2">Edit</a>
                                                <a href="<?= base_url(); ?>Kategori/hapus/<?= $k['idkategori']; ?>" class="btn btn-danger">Hapus</a>
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