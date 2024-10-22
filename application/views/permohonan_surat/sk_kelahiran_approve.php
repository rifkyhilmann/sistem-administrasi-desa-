<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-check"></i> Setujui Surat Keterangan Kelahiran 
    </div>
    <?php foreach ($sk_kelahiran as $sk_lahir): ?>
    <form action="<?php echo base_url('admin/sk_kelahiran/approve_aksi') ?>" method="post">
    <input type="hidden" value="<?php echo $sk_lahir->id_user ?>" name="id_user"class="form-control" style="width:275px;" readonly>
    <input type="hidden" name="id_lahir" value="<?php echo $sk_lahir->id_lahir ?>" >
        <div class="table-responsive text-dark">
            <table align="center" width="600px">
                <thead>
                <tr>
                    <td align="center"> <label for="">Nama Ibu</label> </td>
                    <td width="50px"> </td>
                    <td align="center"> <label for="">Nama Bapak</label> </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td align="center">
                        <input type="text" name="nama_ibu" value="<?php echo $sk_lahir->nama_ibu ?>" class="form-control" style="width: 275px;" readonly>
                        <?php echo form_error('nama_ibu','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                        <input type="text" name="nama_bapak" value="<?php echo $sk_lahir->nama_bapak ?>" class="form-control" style="width: 275px;" readonly>
                        <?php echo form_error('nama_bapak','<div class="text-danger small" ml-3>') ?>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Usia Ibu</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Usia Bapak</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="umur_ibu" value="<?php echo $sk_lahir->umur_ibu ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('umur_ibu','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="umur_bapak" value="<?php echo $sk_lahir->umur_bapak ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('umur_bapak','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Pekerjaan Ibu</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Pekerjaan Bapak</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="pekerjaan_ibu" value="<?php echo $sk_lahir->pekerjaan_ibu ?>" placeholder="Pekerjaan Ibu" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('pekerjaan_ibu','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="pekerjaan_bapak" value="<?php echo $sk_lahir->pekerjaan_bapak ?>" placeholder="Pekerjaan Bapak" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('pekerjaan_bapak','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>
            <br>
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Alamat Ibu</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Alamat Bapak</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="alamat_ibu" placeholder="Alamat Ibu" readonly><?php echo $sk_lahir->alamat_ibu ?></textarea>
                            <?php echo form_error('alamat_ibu','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="alamat_bapak" placeholder="Alamat bapak" readonly><?php echo $sk_lahir->alamat_bapak ?></textarea>
                            <?php echo form_error('alamat_bapak','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                        <label for="">Nama Lengkap Anak</label>
                        </td>            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="nama_anak" placeholder="Nama Lengkap Anak"  value="<?php echo $sk_lahir->nama_anak ?>" class="form-control" readonly>
                            <?php echo form_error('nama_anak','<div class="text-danger small" ml-3>') ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="exampleFormControlSelect1">Tanggal Lahir Anak</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="exampleFormControlSelect1">Jenis Kelamin Anak</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="date" name="tgl_lahir_anak" class="form-control" value="<?php echo $sk_lahir->tgl_lahir_anak ?>" style="width: 275px;" readonly>
                            <?php echo form_error('tgl_lahir_anak','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="jk_anak" class="form-control" value="<?php echo $sk_lahir->jk_anak ?>" style="width: 275px;" readonly>
                            <?php echo form_error('jk_anak','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                        <label for="">Tanggal Surat</label>
                        </td>            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="date" name="tgl_surat" class="form-control" value="<?php echo $sk_lahir->tgl_surat ?>" readonly>
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td>
                    </tr>
                </tbody>
            </table>
           <br>
           <input type="hidden" name="akses" value="Y">
           <center>
                <a href="<?php echo base_url('admin/sk_kelahiran/permohonan') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
                <button type="submit" class="btn btn-success">Setujui</button>
            </center>
    </form>
    <?php endforeach; ?>
    <br>
</div>