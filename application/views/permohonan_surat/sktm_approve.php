<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-check"></i> Setujui Data Surat Keterangan Tidak Mampu 
    </div>

    <div class="table-responsive">
        <?php foreach ($sktm as $stm): ?>
    <form action="<?php echo base_url('admin/sktm/approve_aksi') ?>" method="post">
    <input type="hidden" value="<?php echo $stm->id_user ?>" name="id_user"class="form-control" style="width:275px;" readonly>
    <input type="hidden" name="id_sktm" value="<?php echo $stm->id_sktm ?>" >
    <div class="table-responsive">
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Nama Penduduk</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="nama_penduduk" class="form-control" style="width:275px;" value="<?php echo $stm->nama_penduduk ?>" readonly>
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
                            <label>NIK</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" value="<?php echo $stm->nik ?>" name="nik" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('nik','<div class="text-danger small" ml-3>') ?>
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
                            <input type="text" name="tempat_lahir" value="<?php echo $stm->tempat_lahir ?>" class="form-control" style="width:275px;" readonly>
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
                            <input type="date" name="tgl_lahir" value="<?php echo $stm->tgl_lahir ?>" class="form-control" style="width:275px;" readonly>
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
                            <label>Jenis Kelamin</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="jk" value="<?php echo $stm->jk ?>" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="pekerjaan" value="<?php echo $stm->pekerjaan ?>" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="alamat" value="<?php echo $stm->alamat ?>" class="form-control" style="width:275px;" readonly>
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
                            <label>Tanggal Surat</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="tgl_surat" class="form-control" style="width:275px;" value="<?php echo $stm->tgl_surat ?>" readonly>
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <input type="hidden" name="akses" value="Y">
    </div>
        <center>
        <a href="<?php echo base_url('admin/sktm/permohonan') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
        <button type="submit" class="btn btn-success">Setujui</button>
        </center>
    </form>
    <?php endforeach; ?>
    <br>
</div>