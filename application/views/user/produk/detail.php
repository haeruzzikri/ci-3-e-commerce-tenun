<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?= base_url(); ?>Home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Detail Produk</li>
        </ol>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="agileinfo_single">
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="<?= base_url(); ?>assets/produk/<?= $produk['gambar']; ?>" alt=" " class="img-responsive">
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <h2><?= $produk['namaproduk']; ?></h2>
                <div class="rating1">
                    <span> Stok : <?= $produk['rate'] ?></span>
                </div>
                <div class="w3agile_description">
                    <h4>Deskripsi :</h4>
                    <p><?= $produk['deskripsi']; ?></p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4 class="m-sing"><?= 'Rp.' . number_format($produk['hargaafter'], 2, ",", ".");  ?></span></h4>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <a href="<?= base_url(); ?>Keranjang/tambah_keranjang/<?= $produk['idproduk'] ?>" class="btn btn-primary text-uppercase" style="font-weight:bold ;">Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>