<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-users"></i> Data Penduduk 
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
   
    
    <div class="table-responsive">
        <table id="example" class="table table-bordered table-striped table-hover text-center">
            <thead>
                <tr>
                    <th width="10px" class="text-center">NO</th>
                    <th width="100px" class="text-center">NIK</th>
                    <th class="text-center">Nama</th>
                    <th width="100px" class="text-center">Tanggal Lahir</th>
                    <th width="70px" class="text-center">Jenis Kelamin</th>
                    <th width="70px" class="text-center">Agama</th>
                    <th width="100px" class="text-center">Telepon</th>
                    <th width="50px" class="text-center">Print</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($data_penduduk as $dp) :?>
                    <tr class="text-center">
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $dp->nik ?></td>
                        <td><?php echo $dp->nama_penduduk ?></td>
                        <td><?php echo $dp->tgl_lahir?></td>
                        <td> <?php echo $dp->jk ?></td>
                        <td> <?php echo $dp->agama ?></td>
                        <td> <?php echo $dp->no_telepon ?></td>
                        <td>
                        <a class="btn btn-success btn-sm" href="<?php echo base_url('admin/laporan_data_penduduk/print2/'.$dp->id_penduduk)?>" target="_blank" ><i class="fa-solid fa-print"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    <center><a href="<?php echo base_url('admin/laporan_data_penduduk/print')?>" target="_blank"><button type="submit" class="btn btn-primary"><i class="fa-solid fa-print"></i> Cetak</button></a></center>
    </div>

</div>