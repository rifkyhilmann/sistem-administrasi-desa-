<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelopes-bulk fa-sm"></i> Permohonan Surat Keterangan Tidak Mampu 
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th width="100px" class="text-center">NIK</th>
                <th class="text-center">Nama Penduduk</th>
                <th width="100px" class="text-center">Tanggal Lahir</th>
                <th width="100px" class="text-center">Pekerjaan</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach($sktm as $stm):?>
        <?php
        if($stm->akses == 'N'){
            ?>
            <tr class="text-center"> 
                <td><?php echo $no++ ?></td>
                <td><?php echo $stm->nik ?></td>
                <td><?php echo $stm->nama_penduduk ?></td>
                <td><?php echo $stm->tgl_lahir ?></td>
                <td><?php echo $stm->pekerjaan ?></td>
                <td><?php echo $stm->tgl_surat ?></td>
                <td class="text-center"><?php echo anchor('admin/sktm/approve/'.$stm->id_sktm,'<div class="btn btn-sm btn-success">Setujui</div>')?></td>
            </tr>
        <?php
        }
        ?>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>