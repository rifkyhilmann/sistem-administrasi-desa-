<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-users"></i> Detail Data Penduduk 
        
    </div>
    
    <div class="mt-3 mb-3">
        <a href="<?php echo base_url('admin/data_penduduk'); ?>"><button type="submit" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</button></a>
    </div>
    

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered text-dark">
            <?php foreach ($detail as $dt):?>

            <tr>
                <th>Nama Penduduk</th>
                <td><?php echo $dt->nama_penduduk; ?></td>
            </tr>
            
            <tr>
                <th>Nomor Induk Kependudukan</th>
                <td><?php echo $dt->nik; ?></td>
            </tr>

            <tr>
                <th>No Kartu Keluarga</th>
                <td><?php echo $dt->no_kk; ?></td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $dt->jk; ?></td>
            </tr>

            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td><?php echo $dt->tempat_lahir . (', ') . $dt->tgl_lahir; ?></td>
            </tr>

            <tr>
                <th>Agama</th>
                <td><?php echo $dt->agama; ?></td>
            </tr>

            <tr>
                <th>Status</th>
                <td><?php echo $dt->status; ?></td>
            </tr>

            <tr>
                <th>Pendidikan Terakhir</th>
                <td><?php echo $dt->pendidikan_terakhir; ?></td>
            </tr>

            <tr>
                <th>Pekerjaan</th>
                <td><?php echo $dt->pekerjaan; ?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $dt->alamat; ?></td>
            </tr>
            
            <tr>
                <th>No Telepon</th>
                <td><?php echo $dt->no_telepon; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</div>