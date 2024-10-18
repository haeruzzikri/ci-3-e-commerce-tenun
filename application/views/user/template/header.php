<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pusat Tenun Pringgasela, Pringgasela Corp" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?= base_url(); ?>assets/user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= base_url(); ?>assets/user/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?= base_url(); ?>assets/user/css/font-awesome.css" rel="stylesheet">

    <script src="<?= base_url(); ?>assets/user/js/jquery-1.11.1.min.js"></script>

    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?= base_url(); ?>assets/user/js/move-top.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/user/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
</head>

<body>
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <p>DAPATKAN PENAWARAN MENARIK KHUSUS HARI INI, <a href="#produkkami">BELANJA SEKARANG!</a></p>
            </div>
            <?php
            if (!$this->session->userdata('email')) :
            ?>
                <div class="agile-login">
                    <ul>
                        <li><a href="<?= base_url(); ?>Auth/index">Masuk</a></li>
                        <li><a href="<?= base_url(); ?>Auth/daftar"> Daftar</a></li>
                    </ul>
                </div>
            <?php
            elseif ($this->session->userdata('email')) :
            ?>
                <div class="product_list_header">
                    <form action="<?= base_url(); ?>Keranjang" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>
                </div>


            <?php
            endif;
            ?>

            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Admin : +62877 4332 9301</li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="<?= base_url(); ?>">TENUN PRINGGASELA</a></h1>
            </div>
            <?php
            if ($this->session->userdata('email')) :
            ?>
                <div class="w3l_search">
                    <form action="cari.html" method="post">
                        <input type="search" name="Search" placeholder="Cari produk..." required="">
                        <button type="submit" class="btn btn-default search" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            <?php
            endif;
            ?>

            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= base_url(); ?>Home" class="act">Home</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Kategori Produk<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>Kategori</h6>
                                            <?php
                                            foreach (query_kategori() as $k) :
                                            ?>
                                                <li>
                                                    <a href="<?= base_url(); ?>Kategori_user/index/<?= $k['idkategori']; ?>"><?= $k['namakategori'] ?></a>
                                                </li>
                                            <?php
                                            endforeach;
                                            ?>
                                        </ul>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <?php
                        if ($this->session->userdata('email')) :
                        ?>
                            <li><a href="<?= base_url(); ?>Tentang">Tentang Kami</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>Opsi</h6>
                                                <li>
                                                    <a href="<?= base_url() ?>Daftar_order" class="">Order Saya</a>
                                                    <a href="<?= base_url() ?>Auth/keluar" class="">Keluar</a>
                                                </li>
                                            <?php
                                        endif;
                                            ?>
                                            </ul>
                                        </div>

                                    </div>
                                </ul>
                </div>
            </nav>
        </div>
    </div>