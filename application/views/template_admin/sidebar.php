<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard') ?>">
                <div class="sidebar-brand-icon ">
                <img src="<?php echo base_url() ?>assets/img/cimarantenicon.png"  class="img-fluid">
                </div>
                <div class="sidebar-brand-text mx-3">SIPAD CIMARANTEN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-database"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/data_penduduk') ?>">Data Penduduk</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Pelayanan Surat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/sktm') ?>">Surat Tidak Mampu</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_kelahiran') ?>">Surat Kelahiran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_kehilangan') ?>">Surat Kehilangan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_usaha') ?>">Surat Keterangan Usaha</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_kematian') ?>">Keterangan Kematian</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#permohonansurat"
                    aria-expanded="true" aria-controls="permohonansurat">
                    <i class="fa-solid fa-envelopes-bulk"></i>
                    <span>Permohonan Surat</span>
                </a>
                <div id="permohonansurat" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/sktm/permohonan') ?>">Surat Tidak Mampu</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_kelahiran/permohonan') ?>">Surat Kelahiran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_kehilangan/permohonan') ?>">Surat Kehilangan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_usaha/permohonan') ?>">Surat Keterangan Usaha</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sk_kematian/permohonan') ?>">Keterangan Kematian</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-print"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/laporan_data_penduduk') ?>" >Data Penduduk</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa-solid fa-power-off"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- End of Sidebar -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Logout ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tekan 'Logout' untuk keluar keluar dari Aplikasi Sistem Informasi Pelayanan Administrasi Desa Cimantren  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="<?php echo base_url('admin/auth/logout')?>"><button type="button" class="btn btn-danger">Logout</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <li></li>

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url()?>assets/img/undraw_profile.svg">
                            </a>
                        </li>
                    </ul>
                </nav>

            