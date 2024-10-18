<div class="main-content-inner">

    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Detail Order</h3>

                    <p>Id Pesanan : <?= $pesanan['orderid']; ?></p>
                    <p>Tanggal Transaksi : <?= date('d F Y h:i:s A', strtotime($pesanan['tglsubmit'])); ?></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $total = 0;
                            ?>
                            <?php foreach($keranjang as $row): ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $row['namaproduk']; ?></td>
                                <td><?= $row['hargaafter']; ?></td>
                                <td><?= 'Rp.'. number_format($row['subharga'],2,'.',','); ?></td>
                            </tr>
                            <?php ?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="3">Total Pembayaran</td>
                                <td><?= 'Rp.'. number_format($row['subharga'],2,'.',','); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <h4>Detail Pemesan</h4>
                    <p>Nama Pemesan : <?= $pesanan['namalengkap']; ?></p>
                    <p>Email : <?= $pesanan['email']; ?></p>
                    <h4>Detail Kurir</h4>
                    <p>Kurir : <?= $kurir['nama']; ?></p>
                    <p>Ongkir : <?= 'Rp.'. number_format($kurir['ongkir'],2,'.',','); ?></p>
                    <h4>Detail Pembayaran</h4>
                    <p>Metode Pembayaran : <?= $pembayaran['metode']; ?></p>
                    <p>No Rekening : <?= $pembayaran['norek']; ?></p>

                    <?php if($pesanan['status'] == 'Pembayaran Berhasil'): ?>
                    <img src="<?= base_url(); ?>assets/upload/<?= $pesanan['upload_pembayaran']; ?>" alt="" width="400"><br>
                    <a href="<?= base_url(); ?>Pesanan/konfirmasi/<?= $pesanan['idkonfirmasi']; ?>" class="btn btn-primary">Konfirmasi Pesanan</a>
                    <?php elseif($pesanan['status'] == 'Pesanan Di Konfirmasi'): ?>
                        <img src="<?= base_url(); ?>assets/upload/<?= $pesanan['upload_pembayaran']; ?>" alt="" width="400"><br>
                    <a href="<?= base_url(); ?>Pesanan/konfirmasi_pengiriman/<?= $pesanan['idkonfirmasi']; ?>" class="btn btn-primary">Konfirmasi Pengiriman</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>