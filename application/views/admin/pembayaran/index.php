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
        <?php
    endif;
        ?>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Daftar Metode Pembayaran</h2>
                            <a href="<?= base_url(); ?>Pembayaran/tambah/" style="margin-bottom:20px" class="btn btn-primary col-md-2">Tambah Metode</a>
                        </div>
                        <div class="data-tables datatable-dark">
                            <table id="dataTable3" class="display" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Metode</th>
                                        <th>No.Rek</th>
                                        <th>Atas Nama</th>
                                        <th>Logo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pembayaran as $p) :
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $p['metode']; ?></td>
                                            <td><?= $p['norek']; ?></td>
                                            <td><?= $p['an']; ?></td>
                                            <td><img src="<?= base_url(); ?>assets/images/<?= $p['logo']; ?>" alt="" width=" 80"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="<?= base_url(); ?>Pembayaran/hapus/<?= $p['no'] ?>" class="btn btn-danger">Hapus</a>
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