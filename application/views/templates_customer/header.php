<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Marketplace Rental Mobil Se-Pekanbaru</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?php echo base_url() ?>assets/assets_shop/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <!-- <div id="header-top" class="d-none d-xl-block"> -->
            <!-- <div class="container"> -->
                <!-- <div class="row"> -->
                    <!--== Single HeaderTop Start ==-->
                    <!-- <div class="col-lg-4 text-left"> -->
                        <!-- <i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka -->
                    <!-- </div> -->
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <!-- <div class="col-lg-4 text-center"> -->
                        <!-- <i class="fa fa-mobile"></i> +1 800 345 678 -->
                    <!-- </div> -->
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <!-- <div class="col-lg-4 text-right"> -->
                        <!-- <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00 -->
                    <!-- </div> -->
                    <!--== Single HeaderTop End ==-->

                    
                <!-- </div> -->
            <!-- </div> -->
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="<?php echo base_url() ?>" class="logo">
                            <img src="<?php echo base_url() ?>assets/assets_shop/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <!-- <li><a href="<?php echo base_url('customer/dashboard') ?>">Beranda</a></li> -->

                                <li><a href="<?php echo base_url('customer/data_mobil') ?>">Mobil</a></li>

                                <?php if($this->session->userdata('nama')) { ?>

                                    <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>

                                <?php }else{ ?>

                                <?php } ?>

                                
                                <?php if($this->session->userdata('nama')) { ?>
                          
                                    <li><a href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>

                                    <li><a class="text-warning">Halo, <?php echo $this->session->userdata('nama') ?></a></li>

                                    <li><a href="<?php echo base_url('auth/logout') ?>">| LOGOUT</a></li>
                                <?php }else{ ?>
                                    <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                                    <li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
