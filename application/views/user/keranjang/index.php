<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="<?= base_url(); ?>Home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Checkout</li>
        </ol>
    </div>
</div>
<div class="checkout">
    <div class="container">
        <h3 class="mt-3" style="margin-top:-30px !important; margin-bottom:20px;">Dalam keranjangmu ada : <?= $totalkeranjang ?> <span> Barang</span></h3>
        <div class="checkout-right">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                $totalharga = 0;
                foreach ($keranjang as $k) :
                ?>
                    <tr class="rem1">
                        <td class="invert"><?= $no++ ?></td>
                        <td class="invert"><a href="<?= base_url(); ?>Produk_user/detail_produk/<?= $k['idproduk']; ?>"><img src="<?= base_url(); ?>assets/produk/<?= $k['gambar']; ?>" width="100px" height="100px" /></a></td>
                        <td class="invert"><?= $k['namaproduk'] ?></td>
                        <td class="invert">
                            <form action="<?= base_url(); ?>Keranjang/update_Keranjang/<?= $k['idcart']; ?>" method="post">
                                <div class="d-flex">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?= $k['qty']; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                                </div>
                            </form>
                        </td>

                        <td class="invert" id="harga">Rp<?= number_format($k['subharga']); ?></td>
                        <td class="invert">
                            <div class="rem">
                                <a href="<?= base_url(); ?>Keranjang/hapus/<?= $k['idcart'] ?>" class="btn btn-danger">Hapus</a>
                            </div>
        </div>
        <script>
            $(document).ready(function(c) {
                $('.close1').on('click', function(c) {
                    $('.rem1').fadeOut('slow', function(c) {
                        $('.rem1').remove();
                    });
                });
            });
        </script>
        </td>
        </tr>
    <?php
                    $totalharga += $k['subharga'];
                    $no++;
                endforeach;
    ?>
    <!--quantity-->
    <!--quantity-->
    </table>
    </div>
    <div class="checkout-left">
        <div class="checkout-left-basket">
            <h4>Total Harga</h4>
            <h3 id="totalharga"><?= 'Rp.', number_format($totalharga, 2, ',', '.'); ?></h3>
        </div>
        <div class="checkout-right-basket">
            <a href="<?= base_url(); ?>Home"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Lanjut Belanja</a>
            <a href="<?= base_url(); ?>Beli/index/<?= $totalharga; ?>"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Beli</a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>