<div class="container-fluid">
    <div class="alert alert-info" role="alert">
        <h5>
        <b> <i class="fa-solid fa-1x fa-landmark"></i>
            SISTEM INFORMASI PELAYANAN ADMINISTRASI DESA </b>
        </h5>
        <h6>Desa Cimaranten Kecamatan Cipicung, Kuningan</h6>
        <hr>
        <h4 class="alert-heading">Selamat Datang !!!</h4>
        <p>Selamat Datang <strong><?php echo ucfirst($nama_penduduk)?></strong> di Sistem Informasi Pelayanan Administrasi Desa Cimaranten, Anda Login Sebagai <strong><?php echo $level?></strong></p>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-dark text-uppercase mb-1 text-center">
                                                Surat Keterangan Tidak Mampu </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class=" fa-2x fa-regular fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1 text-center">
                                            Surat Keterangan Kelahiran</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-2x fa-baby text-success"></i>
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
                                            <div class="text-sm font-weight-bold text-info text-uppercase mb-1 text-center">Surat Keterangan Kehilangan
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-2x fa-person-circle-question text-info"></i>
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
                                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1 text-center">
                                                Surat Keterangan Usaha</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-2x fa-business-time text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-xl-3 col-md-3"> 

                        </div>

                        <div class="col-xl-6 col-md-6"> 
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-danger text-uppercase mb-1 text-center">
                                                Surat Keterangan Kematian 
                                            </div>
                                        </div>
                                        <div class="col-auto text-danger">
                                            <i class="fa-solid fa-2x fa-skull-crossbones"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-3 mb-4 mr-4"> 

                        </div>

                        
                    </div>

                    <!-- Content Row -->

      
</div>