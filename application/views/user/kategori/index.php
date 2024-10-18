<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?= base_url(); ?>Home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Kategori</li>
        </ol>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="categories">
                <h2>Kategori</h2>
                <ul class="cate">
                    <?php
                    foreach (query_kategori() as $k) :
                    ?>
                        <li>
                            <a href="<?= base_url(); ?>Kategori_user/index/<?= $k['idkategori']; ?>"> <i class="fa fa-arrow-right" aria-hidden="true"></i><?= $k['namakategori']; ?></a>

                        </li>
                    <?php
                    endforeach;
                    ?>

                </ul>
            </div>
        </div>
        <div class="col-md-8 products-right">
            <div class="agile_top_brands_grids">
                <?php
                foreach ($produk as $p) :
                ?>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="<?= base_url(); ?>assets/images/offer.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="#"><img src="<?= base_url(); ?>assets/produk/<?= $p['gambar'] ?>" width="200px" height="200px"></a>
                                                <p><?= $p['namaproduk'] ?></p>
                                                <h4><?= 'Rp.' . number_format($p['hargaafter'], 2, ",", ".");  ?></span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <fieldset>
                                                    <a href="<?= base_url(); ?>Produk_user/detail_produk/<?= $p['idproduk']; ?>"><input type="submit" class="button" value="Lihat Produk" /></a>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>

                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>