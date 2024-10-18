<ul id="demo1">
    <li>
        <img src="<?= base_url(); ?>assets/images/tenundiskon.jpg" alt="" style="width: 1350px ;" />
    </li>
</ul>

<div class="top-brands">
    <div class="container">
        <h2>Produk Kami</h2>
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="agile-tp" id="produkkami">
                            <?php
                            if ($this->session->userdata('email')) :
                            ?>
                                <h5>Penawaran Terbaik Minggu Ini <?= query_user('namalengkap'); ?>
                                </h5>
                            <?php
                            else :
                            ?>
                                <h5>Penawaran Terbaik Minggu Ini
                                </h5>
                            <?php
                            endif;
                            ?>
                        </div>

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

                                                            <a href=""><img title="" alt=" " src="<?= base_url(); ?>assets/produk/<?= $p['gambar'] ?>" width="200px" height="200px" /></a>
                                                            <p><?= $p['namaproduk'] ?></p>
                                                            <div class="stars">
                                                            </div>
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


                </div>
            </div>
        </div>
    </div>
</div>