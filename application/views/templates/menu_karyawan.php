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
                    <h3 class="menu-title">Penjualan</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url();?>karyawan/penjualan" > <i></i>- Transaksi Penjualan</a>
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
                                Selamat Datang Karyawan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                     <form action="<?= base_url()?>welcome/logout">
                        <div class="float-right">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </div>
                    </form>
            </div>

        </header><!-- /header -->
