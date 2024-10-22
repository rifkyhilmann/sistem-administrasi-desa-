<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-check"></i> Setujui Surat Keterangan Usaha 
    </div>
    <?php foreach ($sk_usaha as $usaha): ?>
    <form action="<?php echo base_url('admin/sk_usaha/approve_aksi') ?>" method="post">
    <input type="hidden" value="<?php echo $usaha->id_user ?>" name="id_user"class="form-control" style="width:275px;" readonly>
    <input type="hidden" name="id_usaha" value="<?php echo $usaha->id_usaha ?>" >
        <div class="table-responsive text-dark">
            <table align="center" width="600px">
                <thead>
                <tr>
                    <td align="center"> <label for="">Nama Penduduk</label> </td>
                    <td width="50px"> </td>
                    <td align="center"> <label for="">Nomor Induk Kependudukan</label> </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td align="center">
                    <input type="text" name="nama_penduduk" id="nama_penduduk" value="<?php echo $usaha->nama_penduduk ?>" class="form-control" style="width: 275px;" readonly>
                        <?php echo form_error('nama_penduduk','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                    <input type="text" name="nik" value="<?php echo $usaha->nik ?>" class="form-control" style="width: 275px;" readonly>
                        <?php echo form_error('nik','<div class="text-danger small" ml-3>') ?>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Tempat Lahir</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Tanggal Lahir</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="tempat_lahir" value="<?php echo $usaha->tempat_lahir ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="tgl_lahir" value="<?php echo $usaha->tgl_lahir ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('tgl_lahir','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Jenis Kelamin</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Pekerjaan</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="jk"value="<?php echo $usaha->jk ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('jk','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="pekerjaan" value="<?php echo $usaha->pekerjaan ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('pekerjaan','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>
            <br>
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Alamat</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" readonly><?php echo $usaha->alamat ?></textarea>
                            <?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Nama Usaha</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Jenis Usaha</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="nama_usaha" value="<?php echo $usaha->nama_usaha ?>" class="form-control" style="width: 275px;" readonly >
                            <?php echo form_error('nama_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                        <input type="text" name="jenis_usaha" value="<?php echo $usaha->jenis_usaha ?>" class="form-control" style="width: 275px;" readonly >
                            <?php echo form_error('jenis_usaha','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="exampleFormControlSelect1">Alamat Tempat Usaha</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat_usaha" placeholder="Alamat Tempat Usaha" readonly ><?php echo $usaha->alamat_usaha ?></textarea>
                            <?php echo form_error('alamat_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Luas Tempat Usaha (M<sup>2</sup>)</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Tanggal Surat</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="luas_usaha" value="<?php echo $usaha->luas_usaha ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('luas_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="date" name="tgl_surat" value="<?php echo $usaha->tgl_surat ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>
           <br>
           <input type="hidden" name="akses" value="Y">
    <center>
    <a href="<?php echo base_url('admin/sk_usaha/permohonan') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
    <button type="submit" class="btn btn-success">Setujui</button>
    </center>
    </form>
    <?php endforeach; ?>
    <br>
</div>