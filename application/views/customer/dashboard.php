    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>SELAMAT DATANG!</h1>
                                <p>RENTAL MOBIL TERBAIK SE-PEKANBARU<br>HARGA BERSAHABAT, KUALITAS PALING MANTAP</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->

                        <?php foreach ($rental as $rt) : ?>
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <!-- <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT"> -->
                                        <h5><?php echo $rt->nama_rental ?></h5>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <!-- Single Partner End -->

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_customer ?></span>+</p>
                                        <h4>CUSTOMER</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_mobil ?></span>+</p>
                                        <h4>MOBIL TERSEDIA</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>

                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_rental ?></span>+</p>
                                        <h4>PENYEDIA RENTAL</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Pilih Mobil Anda</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Mobil Pilihan Terbaik Untuk Memberikan Anda Kenyamanan</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->

                                <div class="home2-car-filter">
                                    <a href="#" data-filter="*" class="active">all</a>

                                    <?php foreach ($type as $tp ) : ?>
                                        <a href="#" data-filter=".<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                    <?php foreach ($mobil as $mb ) : ?>
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-6 col-md-6 <?php echo $mb->kode_type ?>">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="<?php echo base_url('assets/upload/' . $mb->gambar) ?>">
                                                        <img style="height: 300px"src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt="<?php echo $mb->merk ?>">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="<?php echo base_url('customer/data_mobil/detail_mobil/') . $mb->id_mobil ?>"><?php echo $mb->merk ?></a>
                                                        <span class="price"><i class="fa fa-tag"></i>Rp. <?php echo number_format($mb->harga,0,',','.') ?>/Hari</span>
                                                    </h3>

                                                    <h5><?php echo $mb->nama_rental ?></h5>

                                                    <div class="p-car-feature">
                                                        <?php if($mb->ac == '1') { ?>
                                                            <a>AC</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->supir == '1') { ?>
                                                            <a>SUPIR</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->mp3_player == '1') { ?>
                                                            <a>MP3 PLAYER</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->central_lock == '1') { ?>
                                                            <a>CENTRAL LOCK</a>
                                                        <?php } else { ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                    <?php endforeach; ?>
                                    
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->
