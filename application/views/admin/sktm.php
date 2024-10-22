<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelope-open-text"></i> Surat Keterangan Tidak Mampu 
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php
        echo anchor('admin/sktm/tambah_sktm','<button class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-plus fa-sm"></i> Tambah Surat</button>')
    ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover text-dark">
        <thead>
            <tr >
                <th width="10px" class="text-center">No</th>
                <th width="100px" class="text-center">NIK</th>
                <th class="text-center">Nama Penduduk</th>
                <th width="100px" class="text-center">Tanggal Lahir</th>
                <th class="text-center">Pekerjaan</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="120px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sktm as $stm):?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $stm->nik ?></td>
                <td><?php echo $stm->nama_penduduk ?></td>
                <td><?php echo $stm->tgl_lahir ?></td>
                <td><?php echo $stm->pekerjaan ?></td>
                <td><?php echo $stm->tgl_surat ?></td>
                <?php
                if ($stm->akses == 'Y'){
                ?>
                <td>
                    <center>
                        <a class="btn btn-success btn-sm" href="<?php echo base_url('admin/sktm/print/'.$stm->id_sktm)?>" target="_blank" ><i class="fa-solid fa-print"></i></a>
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/sktm/update/'.$stm->id_sktm)?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/sktm/delete/'.$stm->id_sktm)?>"><i class="fa-solid fa-trash-can"></i></a>
                    </center>    
                </td>
                <?php    
                }else{
                ?>
                <td>
                    <center>
                    <div class="btn btn-sm btn-dark"><i class="fa-solid fa-x"></i></div>
                    <?php echo anchor('admin/sktm/update/'.$stm->id_sktm,'<div class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></div>')?>
                    <?php echo anchor('admin/sktm/delete/'.$stm->id_sktm,'<div class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></div>')?>
                    </center>    
                </td>
                <?php
                }
                ?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>