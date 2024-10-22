<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelope-open-text"></i> Surat Keterangan Kelahiran 
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php
        echo anchor('user/sk_kelahiran/tambah_sk_kelahiran','<button class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-plus fa-sm"></i> Tambah Surat</button>')
    ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover text-dark">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th class="text-center">Nama Ibu</th>
                <th class="text-center">Nama Bapak</th>
                <th class="text-center">Nama Anak</th>
                <th width="100px" class="text-center">Tanggal Lahir Anak</th>
                <th width="100px" class="text-center">Jenis Kelamin Anak</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Status</th>
                <th width="30px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_kelahiran as $sk_lahir):?>
             <?php 
             if($sk_lahir->id_user == $id){
            ?>
             <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $sk_lahir->nama_ibu ?></td>
                <td><?php echo $sk_lahir->nama_bapak ?></td>
                <td><?php echo $sk_lahir->nama_anak ?></td>
                <td><?php echo $sk_lahir->tgl_lahir_anak ?></td>
                <td><?php echo $sk_lahir->jk_anak ?></td>
                <td><?php echo $sk_lahir->tgl_surat ?></td>
                <?php
                if($sk_lahir->akses == 'Y'){
                    ?>
                <td width="20px"><div class="btn btn-sm btn-success">Disetujui</div></td>
                <td width="20px">
                    <a class="btn btn-success" href="<?php echo base_url('user/sk_kelahiran/print/'.$sk_lahir->id_lahir)?>" target="_blank" ><i class="fa-solid fa-print"></i></a>
                </td>
                <?php    
                }else{
                ?>
                <td width="20px"><div class="btn btn-sm btn-danger">Belum Disetujui</div></td>
                <td width="20px"><div class="btn btn-sm btn-dark text-center"><i class="fa-solid fa-x"></i></div></td>
                <?php
                }
                }
                ?>
            </tr>
            <?php endforeach;?>
        </tbody>
        
    </table>

    </div>
    
</div>