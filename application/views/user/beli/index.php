<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="home.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Beli</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- checkout -->
<div class="checkout">
    <div class="container">
        <h1>Terima kasih, telah membeli barang di Pusat Tenun Pringgasela</span></h1>
        <div class="checkout-right">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($keranjang as $k) :
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><img src="<?= base_url(); ?>assets/produk/<?= $k['gambar']; ?>" width="100"></td>
                        <td><?= $k['namaproduk']; ?></td>
                        <td><?= $k['qty'] ?></td>
                        <td><?= $k['subharga'] ?></td>
                    </tr>
                <?php
                    $no++;
                endforeach;
                ?>
            </table>
        </div>
        <form action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6 mb-3">
                    <label for="totalharga">Total Harga Yang Harus Dibayar</label>
                    <input type="hidden" name="totalharga" value="<?= $total; ?>">
                    <h2 type="text" class="form-control" id="totalharga"><?= 'Rp.', number_format($total, 2, ',', '.'); ?></h2>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="kodeorder">Kode Order</label>
                    <input type="hidden" name="kdorder" value="<?= $io; ?>">
                    <h2 type="text" class="form-control" id="kodeorder"><?= $io; ?></h2>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Penerima</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap Penerima">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="jasapengiriman">Pilih Jasa Pengiriman</label>
                    <select id="jasapengiriman" name="kirim" class="form-control">
                        <option selected>Pilihan</option>
                        <?php
                        foreach (query_jasa() as $j) :
                        ?>
                            <option value="<?= $j['id_layanan'] ?>"><?= $j['nama'] ?> - <?= $j['ongkir'] ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="metodepembayaran">Pilih Metode Pembayaran</label>
                    <select id="metodepembayaran" name="bayar" class="form-control">
                        <option selected>Pilihan</option>
                        <?php
                        foreach (query_bayar() as $b) :
                        ?>
                            <option value="<?= $b['no'] ?>"><?= $b['metode'] ?> - <?= $b['norek'] ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </div>
            </div>
            <br>
            <center>
                <p>Orderan anda Akan Segera kami proses 1x24 Jam Setelah Anda Melakukan Pembayaran ke ATM kami dan menyertakan informasi pribadi yang melakukan pembayaran seperti Nama Pemilik Rekening / Sumber Dana, Tanggal Pembayaran, Metode Pembayaran dan Jumlah Bayar.</p>
            </center>
            <br>
            <input type="submit" class="form-control btn btn-success" name="checkout" value="Saya Setuju Untuk Melakukan Pemesanan">
        </form>
    </div>
</div>
<br>