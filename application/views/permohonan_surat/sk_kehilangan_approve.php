<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-envelopes-bulk fa-sm"></i> Permohonan Surat Keterangan Kehilangan 
    </div>
    <div class="table-responsive">
        <?php foreach ($sk_kehilangan as $sk_hilang): ?>
    <form action="<?php echo base_url('admin/sk_kehilangan/approve_aksi') ?>" method="post">
    <input type="hidden" value="<?php echo $sk_hilang->id_user ?>" name="id_user"class="form-control" style="width:275px;" readonly>
    <input type="hidden" name="id_kehilangan" value="<?php echo $sk_hilang->id_kehilangan ?>" >
        <div class="table-responsive">
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Nama Penduduk</label>
                        </td>  
                        <td align="center" style="width:300px;">
                        <input type="text" name="nama_penduduk" value="<?php echo $sk_hilang->nama_penduduk ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('nama_penduduk','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Tempat Lahir</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="tempat_lahir" value="<?php echo $sk_hilang->tempat_lahir ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Tanggal Lahir</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="date" name="tgl_lahir" value="<?php echo $sk_hilang->tgl_lahir ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('tgl_lahir','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Agama</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="agama" value="<?php echo $sk_hilang->agama ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('agama','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
        </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Jenis Kelamin</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="jk" value="<?php echo $sk_hilang->jk ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('jk','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Pekerjaan</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="pekerjaan" value="<?php echo $sk_hilang->pekerjaan ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('pekerjaan','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Alamat</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="alamat" value="<?php echo $sk_hilang->alamat ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Barang Yang Hilang</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="nama_barang" value="<?php echo $sk_hilang->nama_barang ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('nama_barang','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Hari Kehilangan</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="hari_hilang" value="<?php echo $sk_hilang->hari_hilang ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('hari_hilang','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Tanggal Kehilangan</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="date" name="tgl_hilang" value="<?php echo $sk_hilang->tgl_hilang ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('tgl_hilang','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Tanggal Surat</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="date" name="tgl_surat" value="<?php echo $sk_hilang->tgl_surat ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
    </div>
    <input type="hidden" name="akses" value="Y" class="form-control" style="width:275px;" readonly>
        <center>
            <a href="<?php echo base_url('admin/sk_kehilangan/permohonan') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
            <button type="submit" class="btn btn-success">Setujui</button>
        </center>
    <?php endforeach; ?>
    <br>
</div>