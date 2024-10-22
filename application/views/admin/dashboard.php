<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <h5>
        <b> <i class="fa-solid fa-1x fa-landmark"></i>
            SISTEM INFORMASI PELAYANAN ADMINISTRASI DESA </b>
        </h5>
        <h6>Desa Cimaranten Kecamatan Cipicung, Kuningan</h6>
        <hr>
        <h4 class="alert-heading">Selamat Datang !!!</h4>
        <p>Selamat Datang <strong><?php echo ucfirst($username)?></strong> di Sistem Informasi Pelayanan Administrasi Desa Cimaranten, Anda Login Dengan Username <strong><?php echo ucfirst($username)?></strong></p>
    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Jumlah Penduduk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $penduduk ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-2x fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Surat
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo ($sktm + $sk_lahir + $sk_hilang + $sk_usaha + $sk_mati) ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-2x fa-envelope text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Permohonan Surat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($p_usaha+$p_lahir+$p_hilang+$p_sktm+$p_mati); ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-2x fa-bars-progress text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

      
</div>