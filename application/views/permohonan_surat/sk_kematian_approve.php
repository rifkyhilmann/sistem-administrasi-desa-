<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-pen-to-square"></i> Edit Data Surat Keterangan Kematian 
    </div>
    <?php
    foreach ($sk_kematian as $sk_mati):
    ?>
    <form action="<?php echo base_url('admin/sk_kematian/approve_aksi') ?>" method="post">
    <input type="hidden" value="<?php echo $sk_mati->id_user ?>" name="id_user"class="form-control" style="width:275px;" readonly>
    <input type="hidden" name="id_kematian" value="<?php echo $sk_mati->id_kematian?>" >
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
                        <input type="text" name="nama_penduduk" value="<?php echo $sk_mati->nama_penduduk ?>" class="form-control" style="width: 275px;" readonly>
                        <?php echo form_error('nama_penduduk','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                        <input type="text" name="nik" value="<?php echo $sk_mati->nik ?>" class="form-control" style="width: 275px;" readonly>
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
                            <input type="text" name="tempat_lahir" value="<?php echo $sk_mati->tempat_lahir ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="tgl_lahir" value="<?php echo $sk_mati->tgl_lahir ?>" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="jk" value="<?php echo $sk_mati->jk ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('jk','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="pekerjaan" value="<?php echo $sk_mati->pekerjaan ?>" class="form-control" style="width:275px;" readonly>
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
                            <label for="">Agama</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">status</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="agama" value="<?php echo $sk_mati->agama ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('agama','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="status" value="<?php echo $sk_mati->status ?>" class="form-control" style="width:275px;" readonly>
                            <?php echo form_error('status','<div class="text-danger small" ml-3>') ?>
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" readonly><?php echo $sk_mati->alamat ?></textarea>
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
                            <label for="">Tempat Kematian</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="">Penyebab Kematian</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="tempat" value="<?php echo $sk_mati->tempat_kematian ?>" placeholder="Tempat Kematian" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tempat','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="sebab" value="<?php echo $sk_mati->sebab ?>" placeholder="Penyebab Kematian" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('sebab','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="">Tanggal Kematian</label>
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
                            <input type="date" name="tgl_meninggal" value="<?php echo $sk_mati->tgl_meninggal ?>" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tgl_meninggal','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="date" name="tgl_surat" value="<?php echo $sk_mati->tgl_surat ?>"  class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>
           <br>
           <input type="hidden" name="akses" value="Y">
           <?php endforeach ;?>
           <center>
                <a href="<?php echo base_url('admin/sk_kematian/permohonan') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
                <button type="submit" class="btn btn-success">Setujui</button>    
            </center>
    </form>
    <br>
</div>