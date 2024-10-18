<div class="main-content-inner">
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2>Daftar Pelanggan</h2>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="display" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pelanggan as $p) :
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $p['namalengkap']; ?></td>
                                        <td><?= $p['notelp']; ?></td>
                                        <td><?= $p['alamat']; ?></td>
                                        <td><?= $p['email']; ?></td>
                                        <td>
                                            <div class="d">
                                                <a href="<?= base_url(); ?>Pelanggan/hapus/<?= $p['userid'] ?>" class="btn btn-danger">Hapus</a>
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