      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-car"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Mobil</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_data['total_mobil']; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Rental</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_data['total_transaksi']; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-clock"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Menunggu Konfirmasi</h4>
                  </div>
                  <div class="card-body">
                   <?php echo $total_data['total_menunggu_konfirmasi']; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-check-double"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Rental Selesai</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_data['total_transaksi_selesai']; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Transaksi Terbaru</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">

                    <?php foreach ($transaksi as $tr) : ?>
                      <li class="media">
                        <div class="media-body">
                          <div class="float-right text-primary">Rental #<?php echo $tr->id_rental ?></div>
                          <div class="media-title"><?php echo $tr->nama ?></div>
                          <span class="text-small text-muted text-bold">Rental mobil <?php echo $tr->merk ?> dari tanggal <?php echo date('d/m/Y', strtotime($tr->tanggal_rental ))?> sampai <?php echo date('d/m/Y', strtotime($tr->tanggal_kembali ))?>.</span><br>

                          <?php 
                            if(empty($tr->bukti_pembayaran)) { ?>

                              <span class="text-small text-muted text-bold">Customer belum membayar.</span>

                            <?php } else { ?>

                              <span class="text-small text-muted text-bold">Customer telah membayar, menunggu konfirmasi.</span>

                            <?php } ?>
                          
                        </div>
                      </li>

                    <?php endforeach; ?>
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="<?php echo base_url('rental/transaksi') ?>" class="btn btn-primary btn-lg btn-round">
                      Lihat Semua
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>