<div class="main-content-inner">

    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="datapesanan.php" target="_blank" class="btn btn-info">Export Data</a>
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2>Daftar Pesanan</h2>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="display" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>ID Pesanan</th>
                                    <th>Nama Customer</th>
                                    <th>Tanggal Order</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($pesanan as $p) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $p['orderid']; ?></td>
                                        <td><?= $p['namalengkap']; ?></td>
                                        <td><?= $p['tglsubmit']; ?></td>
                                        <td><?= $p['total_harga']; ?></td>
                                        <td><?= $p['status']; ?></td>
                                        <td><a href="<?= base_url(); ?>Pesanan/detail/<?= $p['idkonfirmasi'];?>" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>