<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelopes-bulk fa-sm"></i></i> Permohonan Surat Keterangan Usaha
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th width="100px" class="text-center">NIK</th>
                <th class="text-center">Nama Penduduk</th>
                <th class="text-center">Nama Usaha</th>
                <th class="text-center">Alamat Usaha</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Aksi</th>
            </tr>
        </thead> 
        <tbody>
            <?php
            $no=1;
            foreach($sk_usaha as $usaha):?>
            <?php
            if($usaha->akses == 'N'){
                ?>
                <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $usaha->nik ?></td>
                <td><?php echo $usaha->nama_penduduk ?></td>
                <td><?php echo $usaha->nama_usaha ?></td>
                <td><?php echo $usaha->alamat_usaha ?></td>
                <td><?php echo $usaha->tgl_surat ?></td>
                <td class="text-center"><?php echo anchor('admin/sk_usaha/approve/'.$usaha->id_usaha,'<div class="btn btn-sm btn-success">Setujui</div>')?></td>
            </tr>
            <?php
            }
            ?>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>