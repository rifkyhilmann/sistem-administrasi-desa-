<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelope-open-text"></i> Surat Keterangan Usaha 
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php
        echo anchor('user/sk_usaha/tambah_sk_usaha','<button class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-plus fa-sm"></i> Tambah Surat</button>')
    ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover text-dark">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th width="100px" class="text-center">NIK</th>
                <th class="text-center">Nama Penduduk</th>
                <th class="text-center">Nama Usaha</th>
                <th class="text-center">Alamat Usaha</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Status</th>
                <th width="30px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_usaha as $usaha):?>
            <?php
            if($usaha->id_user == $id)
            {
                ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $usaha->nik ?></td>
                <td><?php echo $usaha->nama_penduduk ?></td>
                <td><?php echo $usaha->nama_usaha ?></td>
                <td><?php echo $usaha->alamat_usaha ?></td>
                <td><?php echo $usaha->tgl_surat ?></td>
                <?php
                if ($usaha->akses == 'Y'){
                ?>
                <td width="20px"><div class="btn btn-sm btn-success">Disetujui</div></td>
                <td width="20px">
                    <a class="btn btn-success" href="<?php echo base_url('user/sk_usaha/print/'.$usaha->id_usaha)?>" target="_blank" ><i class="fa-solid fa-print"></i></a>
                </td>
                <?php    
                }else{
                ?>
                <td width="20px"><div class="btn btn-sm btn-danger">Belum Disetujui</div></td>
                <td width="20px"><div class="btn btn-sm btn-dark text-center"><i class="fa-solid fa-x"></i></div></td>
                <?php
                }
                ?>
            </tr>
                <?php
            }
            ?>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>