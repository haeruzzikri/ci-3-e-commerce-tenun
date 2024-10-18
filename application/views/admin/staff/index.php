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
    endif;
    ?>
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2>Daftar Staff</h2>
                        <a href="<?= base_url(); ?>Staff/tambah/" style="margin-bottom:20px" class="btn btn-primary col-md-2">Tambah Staff</a>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="display" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($staff as $s) :
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $s['namalengkap']; ?></td>
                                        <td><?= $s['notelp']; ?></td>
                                        <td><?= $s['alamat']; ?></td>
                                        <td><?= $s['role']; ?></td>
                                        <td><?= $s['email']; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="<?= base_url(); ?>Staff/hapus/<?= $s['userid'] ?>" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
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