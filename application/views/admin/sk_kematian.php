<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelope-open-text"></i> Surat Keterangan Kematian 
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php
        echo anchor('admin/sk_kematian/tambah_sk_kematian','<button class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-plus fa-sm"></i> Tambah Surat</button>')
    ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover text-dark">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th width="100px" class="text-center">NIK</th>
                <th class="text-center">Nama Penduduk</th>
                <th class="text-center">Penyebab Kematian</th>
                <th class="text-center">Alamat</th>
                <th width="100px" class="text-center">Tanggal Kematian</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="120px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_kematian as $sk_mati):?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $sk_mati->nik ?></td>
                <td><?php echo $sk_mati->nama_penduduk ?></td>
                <td><?php echo $sk_mati->sebab ?></td>
                <td><?php echo $sk_mati->alamat ?></td>
                <td><?php echo $sk_mati->tgl_meninggal ?></td>
                <td><?php echo $sk_mati->tgl_surat ?></td>
                <?php
                if ($sk_mati->akses == 'Y'){
                ?>
                <td>
                    <center>
                        <a class="btn btn-success btn-sm" href="<?php echo base_url('admin/sk_kematian/print/'.$sk_mati->id_kematian)?>" target="_blank" ><i class="fa-solid fa-print"></i></a>
                        <?php echo anchor('admin/sk_kematian/update/'.$sk_mati->id_kematian,'<div class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></div>')?>
                        <?php echo anchor('admin/sk_kematian/delete/'.$sk_mati->id_kematian,'<div class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></div>')?>
                    </center>    
                </td>
                <?php    
                }else{
                ?>
                <td>
                    <center>
                        <div class="btn btn-sm btn-dark"><i class="fa-solid fa-x"></i></div>
                        <?php echo anchor('admin/sk_kematian/update/'.$sk_mati->id_kematian,'<div class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></div>')?>
                        <?php echo anchor('admin/sk_kematian/delete/'.$sk_mati->id_kematian,'<div class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></div>')?>
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