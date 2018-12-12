        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Kelola Penjualan</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url();?>admin/penjualan" > <i></i>- Penjualan</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>admin/laporan" > <i></i>- Laporan Penjualan</a>
                    </li>

                    <h3 class="menu-title">Kelola Barang</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url();?>admin/view_barang" > <i></i>- Tambah Barang</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>admin/tampil_barang" > <i></i>- Lihat Data Barang</a>
                    </li>
                    <h3 class="menu-title">Kelola Distributor</h3><!-- /.menu-title -->

                  <li>
                        <a href="<?php echo base_url();?>admin/view_distributor" > <i></i>- Tambah Distributor</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>admin/tampil_distributor" > <i></i>- Lihat Data Distributor</a>
                    </li>
                     <h3 class="menu-title">Kelola Karyawan</h3><!-- /.menu-title -->

                  <li>
                        <a href="<?php echo base_url();?>admin/view_karyawan" > <i></i>- Tambah Karyawan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/tampil_karyawan" > <i></i>- Lihat Data Karyawan</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <div class="header-left">
                        <div class="dropdown for-message">
                            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  Selamat Datang Admin
                </div>
            </div>
                        </div>
                    </div>
                </div>
                        <!-- <a href="<?= base_url()?>welcome/logout"><button type="submit" >Logout</button></a> -->
                     <form action="<?= base_url()?>welcome/logout">
                <div class="col-sm-5" >
                    <div class="language-select dropdown" id="language-select">
                        <button type="submit" class="btn btn-danger">Logout</button>
                        <!-- //<a href="">Logout</a> -->
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
                </form>
            </div>

        </header><!-- /header -->
