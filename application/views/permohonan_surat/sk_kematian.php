<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelope-open-text"></i> Surat Keterangan Kematian 
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover text-dark">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th width="100px" class="text-center">NIK</th>
                <th class="text-center">Nama Penduduk</th>
                <th width="100px" class="text-center">Penyebab Kematian</th>
                <th class="text-center">Alamat</th>
                <th width="100px" class="text-center">Tanggal Kematian</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_kematian as $sk_mati):
            if($sk_mati->akses == 'N'){
                ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $sk_mati->nik ?></td>
                <td class="text-center"><?php echo $sk_mati->nama_penduduk ?></td>
                <td class="text-center"><?php echo $sk_mati->sebab ?></td>
                <td class="text-center"><?php echo $sk_mati->alamat ?></td>
                <td class="text-center"><?php echo $sk_mati->tgl_meninggal ?></td>
                <td class="text-center"><?php echo $sk_mati->tgl_surat ?></td>
                <td class="text-center"><?php echo anchor('admin/sk_kematian/approve/'.$sk_mati->id_kematian,'<div class="btn btn-sm btn-success">Setujui</div>')?></td>
            </tr>
                <?php
            }
            ?>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>