<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelope-open-text"></i> Surat Keterangan Kehilangan 
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php
        echo anchor('user/sk_kehilangan/tambah_sk_kehilangan','<button class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-plus fa-sm"></i> Tambah Surat</button>')
    ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover text-dark">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th class="text-center">Nama Penduduk</th>
                <th class="text-center">Alamat</th>
                <th width="100px" class="text-center">Nama Barang Hilang</th>
                <th width="100px" class="text-center">Tanggal Hilang</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Status</th>
                <th width="30px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_kehilangan as $sk_hilang):?>
            <?php
            if($sk_hilang->id_user == $id){
                ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $sk_hilang->nama_penduduk ?></td>
                <td><?php echo $sk_hilang->alamat ?></td>
                <td><?php echo $sk_hilang->nama_barang ?></td>
                <td><?php echo $sk_hilang->tgl_hilang ?></td>
                <td><?php echo $sk_hilang->tgl_surat ?></td>
                <?php
                if ($sk_hilang->akses == 'Y'){
                ?>
                <td width="20px"><div class="btn btn-sm btn-success">Disetujui</div></td>
                <td width="20px">
                    <a class="btn btn-success" href="<?php echo base_url('user/sk_kehilangan/print/'.$sk_hilang->id_kehilangan)?>" target="_blank" ><i class="fa-solid fa-print"></i></a>
                </td>
                <?php    
                }else{
                ?>
                <td width="20px"><div class="btn btn-sm btn-danger">Belum Disetujui</div></td>
                <td width="20px"><div class="btn btn-sm btn-dark text-center"><i class="fa-solid fa-x"></i></div></td>
                <?php
                } ?>
            </tr>
            <?php
            }
            ?>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>