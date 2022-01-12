<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            
          </ul>
          <div class="search-element">
            
            <div class="search-backdrop"></div>
            
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          </li>
          <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Halo, <?php echo $this->session->userdata('nama') ?></div></a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">RENTAL PANEL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RP</a>
          </div>
          <ul class="sidebar-menu">

              <li><a class="nav-link" href="<?php echo base_url('rental/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('rental/data_mobil') ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('rental/transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('rental/laporan') ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('rental/payment') ?>"><i class="fas fa-money-bill-alt"></i> <span>Metode Pembayaran</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>

            </ul>
        </aside>
      </div>