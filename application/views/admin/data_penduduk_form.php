<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <i class="fa-solid fa-user-plus fa-sm"></i> Tambah Data Penduduk 
    </div>
    <script>
        function inputAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
        }
    </script>
    <form action="<?php echo base_url('admin/data_penduduk/input_aksi') ?>" method="post">
    <input type="hidden" value="penduduk" name="password"class="form-control" style="width:275px;" readonly>
    <input type="hidden" value="User" name="level" class="form-control" style="width:275px;" readonly>
        <div class="table-responsive text-dark">
            <table align="center" width="600px">
                <thead>
                <tr>
                    <td align="center"> <label for="">Nomor Induk Kependudukan</label> </td>
                    <td width="50px"> </td>
                    <td align="center"> <label for="">Nomor Kartu Keluarga</label> </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td align="center">
                        <input type="text" name="nik" placeholder="NIK (16 Digit)" class="form-control" style="width:275px;" onkeypress="return inputAngka(event)">
                        <?php echo form_error('nik','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                        <input type="text" name="no_kk" placeholder="No. KK (16 Digit)" class="form-control" style="width:275px;" onkeypress="return inputAngka(event)">
                        <?php echo form_error('no_kk','<div class="text-danger small" ml-3>') ?>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>
            
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                        <label for="">Nama Penduduk</label>
                        </td>            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="text" name="nama_penduduk" placeholder="Nama Lengkap" class="form-control">
                            <?php echo form_error('nama_penduduk','<div class="text-danger small" ml-3>') ?>
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
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" style="width: 275px;">
                            <?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="date" name="tgl_lahir" class="form-control" style="width:275px;">
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
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="exampleFormControlSelect1">Agama</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <select name="jk" class="form-control" id="exampleFormControlSelect1" style="width: 275px;">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?php echo form_error('jk','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <select name="agama" class="form-control" id="exampleFormControlSelect1" style="width: 275px;">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            <?php echo form_error('agama','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                            <label for="exampleFormControlSelect1">Status</label>
                        </td>
                        <td width="50px"> </td>
                        <td align="center">
                            <label for="exampleFormControlSelect1">Pendidikan Terakhir</label>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <select name="status" class="form-control" id="exampleFormControlSelect1" style="width: 275px;">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                            <?php echo form_error('status','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <select name="pendidikan_terakhir" class="form-control" id="exampleFormControlSelect1" style="width: 275px;">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <?php echo form_error('pendidikan_terakhir','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>

            <br>

            <table align="center" width="600px">
                <thead>
                <tr>
                    <td align="center"> <label for="">Pekerjaan</label> </td>
                    <td width="50px"> </td>
                    <td align="center"> <label for="">Nomor Telepon</label> </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td align="center">
                        <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" style="width:275px;">
                        <?php echo form_error('pekerjaan','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                        <input type="text" name="no_telepon" placeholder="No. Telepon" class="form-control" style="width:275px;" onkeypress="return inputAngka(event)">
                        <?php echo form_error('no_telepon','<div class="text-danger small" ml-3>') ?>
                    </td>
                </tr>
                </tbody>
            </table>

            <br>
            
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        </td>            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="Alamat"></textarea>
                            <?php echo form_error('alamat','<div class="text-danger small" ml-3>') ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>   
        <center>
            <a href="<?php echo base_url('admin/data_penduduk') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
    </form>
    <br>
</div>