<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/admin/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/slicknav.min.css">

    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/typography.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/styles.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/responsive.css">

    <script src="<?= base_url(); ?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="page-container">
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="<?= active('Admin'); ?>"><a href="<?= base_url(); ?>Admin"><span>Home</span></a></li>
                            <li><a href="<?= base_url(); ?>Home"><span>Kembali ke Toko</span></a></li>
                            <li class="<?= active('Pesanan'); ?>">
                                <a href="<?= base_url(); ?>Pesanan"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
                            <li class="<?= active('Kategori'); ?><?= active('Produk'); ?><?= active('Pembayaran'); ?>">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url(); ?>Kategori">Kategori</a></li>
                                    <li><a href="<?= base_url(); ?>Produk">Produk</a></li>
                                    <li><a href="<?= base_url(); ?>Pembayaran">Metode Pembayaran</a></li>
                                </ul>
                            </li>
                            <li class="<?= active('Pelanggan'); ?>"><a href="<?= base_url(); ?>Pelanggan"><span>Kelola Pelanggan</span></a></li>
                            <li class="<?= active('Staff'); ?>"><a href="<?= base_url(); ?>Staff"><span>Kelola Staff</span></a></li>
                            <li>
                                <a href="<?= base_url(); ?>Auth/keluar"><span>Logout</span></a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>