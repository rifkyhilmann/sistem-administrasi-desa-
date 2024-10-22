<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelopes-bulk fa-sm"></i></i> Permohonan Surat Keterangan Kelahiran
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th class="text-center">Nama Ibu</th>
                <th class="text-center">Nama Bapak</th>
                <th class="text-center">Nama Anak</th>
                <th width="100px" class="text-center">Jenis Kelamin Anak</th>
                <th width="100px" class="text-center">Tanggal Lahir Anak</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_kelahiran as $sk_lahir):?>
            <?php
            if($sk_lahir->akses == 'N'){
                ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $sk_lahir->nama_ibu ?></td>
                <td><?php echo $sk_lahir->nama_bapak ?></td>
                <td><?php echo $sk_lahir->nama_anak ?></td>
                <td><?php echo $sk_lahir->jk_anak ?></td>
                <td><?php echo $sk_lahir->tgl_lahir_anak ?></td>
                <td><?php echo $sk_lahir->tgl_surat ?></td>
                <td><?php echo anchor('admin/sk_kelahiran/approve/'.$sk_lahir->id_lahir,'<div class="btn btn-sm btn-success">Setujui</div>')?></td>
            </tr>
            <?php
            }
            ?>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>