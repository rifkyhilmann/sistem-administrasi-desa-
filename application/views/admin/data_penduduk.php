<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-users"></i> Data Penduduk 
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php
        echo anchor('admin/data_penduduk/input','<button class="btn btn-sm btn-primary mb-3"><i class="fa-solid fa-user-plus fa-sm"></i> Tambah Penduduk</button>')
    ?>
    
    <div class="table-responsive">
        <table id="example" class="table table-bordered table-striped table-hover text-dark">
            <thead>
                <tr>
                    <th width="10px" class="text-center">NO</th>
                    <th width="100px" class="text-center">NIK</th>
                    <th class="text-center">Nama</th>
                    <th width="100px" class="text-center">Tanggal Lahir</th>
                    <th width="100px" class="text-center">Jenis Kelamin</th>
                    <th width="70px" class="text-center">Agama</th>
                    <th width="100px" class="text-center">Telepon</th>
                    <th align="center" width="120px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                    $no = 1;
                    foreach($data_penduduk as $dp) :?>
                    <tr class="text-center">
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $dp->nik ?></td>
                        <td><?php echo $dp->nama_penduduk ?></td>
                        <td><?php echo $dp->tgl_lahir?></td>
                        <td><?php echo $dp->jk ?></td>
                        <td><?php echo $dp->agama ?></td>
                        <td><?php echo $dp->no_telepon ?></td>
                        <td> 
                            <center>
                                <?php echo anchor('admin/data_penduduk/detail/'.$dp->id_penduduk,'<div class="btn btn-sm btn-info"><i class="fa-regular fa-eye"></i></i></div>')?>
                                <?php echo anchor('admin/data_penduduk/update/'.$dp->id_penduduk,'<div class="btn btn-sm btn-primary"><i class="fa-solid fa-user-pen"></i></div>')?>
                                <?php echo anchor('admin/data_penduduk/delete/'.$dp->id_penduduk,'<div class="btn btn-sm btn-danger"><i class="fa-solid fa-user-minus"></i></div>')?>
                            </center>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>