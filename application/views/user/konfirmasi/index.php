<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="home.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Konfirmasi Pembayaran</li>
        </ol>
    </div>
</div>
<div class="register">
    <div class="container">
        <h2>Konfirmasi</h2>
        <div class="login-form-grids">
            <h5>Kode Order</h5>
            <form action="" method="post" enctype="multipart/form-data">
                <strong>
                    <input type="text" name="orderid" value="<?= $konfirmasi['orderid']; ?>" disabled>
                </strong>
                <h6>Upload Pembayaran</h6>
                <div class="form-group">
                    <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br>
                <h6>Tanggal Bayar</h6>
                <input type="date" class="form-control" name="tanggal">
                <input type="submit" name="confirm" value="Kirim">
            </form>
        </div>
        <div class="register-home">
            <a href="<?= base_url(); ?>Daftar_order">Batal</a>
        </div>
    </div>
</div>