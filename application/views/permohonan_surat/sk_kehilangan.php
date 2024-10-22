<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelopes-bulk fa-sm"></i></i> Permohonan Surat Keterangan Kehilangan
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th width="10px" class="text-center">No</th>
                <th class="text-center">Nama Penduduk</th>
                <th class="text-center">Alamat</th>
                <th width="150px" class="text-center">Nama Barang Hilang</th>
                <th width="100px" class="text-center">Tanggal Hilang</th>
                <th width="100px" class="text-center">Tanggal Surat</th>
                <th width="70px" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($sk_kehilangan as $sk_hilang):?>
            <?php
            if($sk_hilang->akses == 'N'){
                ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $sk_hilang->nama_penduduk ?></td>
                <td><?php echo $sk_hilang->alamat ?></td>
                <td><?php echo $sk_hilang->nama_barang ?></td>
                <td><?php echo $sk_hilang->tgl_hilang ?></td>
                <td><?php echo $sk_hilang->tgl_surat ?></td>
                <td><?php echo anchor('admin/sk_kehilangan/approve/'.$sk_hilang->id_kehilangan,'<div class="btn btn-sm btn-success">Setujui</div>')?></td>
            </tr>
            <?php
            }
            ?>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>