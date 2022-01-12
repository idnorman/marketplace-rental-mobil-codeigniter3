<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
<div class="container">

    <div class="row">
        <!-- Page Title Start -->
        <div class="col-lg-12">
            <div class="section-title  text-center">
                <h2>Pilihan Mobil</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>
                <p>Berbagai mobil terbaik untuk kebutuhan anda</p>
            </div>
        </div>
        <!-- Page Title End -->
    </div>
</div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
    <div class="row">
        <!-- Car List Content Start -->
        <div class="col-lg-12">
            <div class="car-list-content">
                <div class="row">
                    <!-- Single Car Start -->
                    <?php foreach ($mobil as $mb ) : ?>
	                    <div class="col-lg-6 col-md-6">
	                        <div class="single-car-wrap">
	                        	<img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>">
	                            <div class="car-list-info without-bar">
	                                <h2><a href="#"><?php echo $mb->merk ?></a></h2>
	                                <h5>Rp. <?php echo number_format($mb->harga,0,',','.') ?>/Hari</h5>
	                                <p class="text-dark font-italic">Mobil ini disediakan oleh <?php echo $mb->nama_rental ?></p>
	                                <ul class="car-info-list">
	                                    <li><?php 
	                                    	if($mb->ac == "1"){
	                                    		echo "<i class='fa fa-check-square text-warning'></i>";
	                                    	}else{
	                                    		echo "<i class='fa fa-times-circle text-danger'></i>";
	                                    	}
	                                    ?> AC
	                                	</li>
	                                	<li><?php 
	                                    	if($mb->supir == "1"){
	                                    		echo "<i class='fa fa-check-square text-warning'></i>";
	                                    	}else{
	                                    		echo "<i class='fa fa-times-circle text-danger'></i>";
	                                    	}
	                                    ?> Supir
	                                	</li>
	                                	<li><?php 
	                                    	if($mb->mp3_player == "1"){
	                                    		echo "<i class='fa fa-check-square text-warning'></i>";
	                                    	}else{
	                                    		echo "<i class='fa fa-times-circle text-danger'></i>";
	                                    	}
	                                    ?> MP3 Player
	                                	</li>
	                                	<li><?php 
	                                    	if($mb->central_lock == "1"){
	                                    		echo "<i class='fa fa-check-square text-warning'></i>";
	                                    	}else{
	                                    		echo "<i class='fa fa-times-circle text-danger'></i>";
	                                    	}
	                                    ?> Central Lock
	                                	</li>
	                                </ul>
	                                <?php 
	                                	if($mb->status == "1"){
	                                		echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil,'<span class="rent-btn">Rental</span>');
	                                	}else{
	                                		echo "<span class='rent-btn'>Tidak Tersedia</span>";
	                                	}

	                                ?>

	                                
	                                <a href="<?php echo base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>" class="rent-btn">Detail</a>

	                            </div>
	                        </div>
	                    </div>
                	<?php endforeach ?>
                    <!-- Single Car End -->
                </div>
            </div>
        </div>
    </div>
</div>
</section>