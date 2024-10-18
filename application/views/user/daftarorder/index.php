<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="<?= base_url(); ?>Home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Daftar Order</li>
        </ol>
    </div>
</div>
<div class="checkout">
    <div class="container">
        <h2>Anda memiliki <span><?= $num_order; ?> transaksi</span> </h2>
        <div class="checkout-right">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Penerima</th>
                        <th>Kode Order</th>
                        <th>Tanggal Order</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($order as $o) :
                ?>
                    <tr class="rem1">
                        <td class="invert"><?= $no ?></td>
                        <td class="invert"><?= $o['namalengkap']; ?></td>
                        <td class="invert"><?= $o['alamat']; ?></td>
                        <td class="invert"><b><?= $o['orderid']; ?></b></td>
                        <td class="invert"><?= $o['tglsubmit']; ?></td>
                        <td class="invert"><?= 'Rp.' . number_format($o['total_harga'], 2, '.', '.'); ?></td>
                        <?php if ($o['status'] == 'Pembayaran Berhasil') : ?>
                            <td class="invert">Pembayaran Berhasil Tunggu Konfirmasi Admin</td>
                        <?php elseif ($o['status'] == 'Pesanan Di Konfirmasi') : ?>
                            <td class="invert">Pembayaran Berhasil Tunggu Konfirmasi Admin</td>
                        <?php elseif ($o['status'] == 'Pengiriman') : ?>
                            <td class="invert">Barang Di Kirim <br> <a href="<?= base_url(); ?>Konfirmasi/barangsampai/<?= $o['idkonfirmasi']; ?>" class="btn btn-success">Barang Di Sampai</a> </td>
                        <?php elseif ($o['status'] == 'Barang Sampai') : ?>
                            <td class="invert">Barang Sampai </td>
                        <?php else : ?>
                            <td class="invert"><a href="<?= base_url(); ?>Konfirmasi/index/<?= $o['idkonfirmasi']; ?>" class="btn btn-primary">Bayar</a></td>
                        <?php endif; ?>

                    <?php
                    $no++;
                endforeach;
                    ?>
        </div>
        <!-- <script>
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


        <script>
            $('.value-plus').on('click', function() {
                var divUpd = $(this).parent().find('.value'),
                    newVal = parseInt(divUpd.text(), 10) + 1;
                divUpd.text(newVal);
            });

            $('.value-minus').on('click', function() {
                var divUpd = $(this).parent().find('.value'),
                    newVal = parseInt(divUpd.text(), 10) - 1;
                if (newVal >= 1) divUpd.text(newVal);
            });
        </script> -->
        </table>
    </div>
</div>
</div>