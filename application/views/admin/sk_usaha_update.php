<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-pen-to-square fa-sm"></i> Edit Data Surat Keterangan Usaha 
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nama_penduduk').on('input',function(){
                var nama_penduduk=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/sk_usaha/get_id')?>",
                    dataType : "JSON",
                    data : {nama_penduduk: nama_penduduk},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nama_penduduk, nik, tempat_lahir, tgl_lahir, jk, pekerjaan, alamat){
                            $('[name="nama_penduduk"]').val(data.nama_penduduk);
                            $('[name="nik"]').val(data.nik);
                            $('[name="tempat_lahir"]').val(data.tempat_lahir);
                            $('[name="tgl_lahir"]').val(data.tgl_lahir);
                            $('[name="jk"]').val(data.jk);
                            $('[name="pekerjaan"]').val(data.pekerjaan);
                            $('[name="alamat"]').val(data.alamat);
                        });
                    }
                });
                return false;
           });
        });
    </script>
    <script>
        function inputAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            return true;
        }
    </script>
    <?php foreach ($sk_usaha as $usaha): ?>
    <form action="<?php echo base_url('admin/sk_usaha/update_aksi') ?>" method="post">
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
                        <select name="nama_penduduk" id="nama_penduduk" class="form-control" style="width:275px;">
                                <?php foreach($data_penduduk as $dp): ?>
                                    <?php
                                    if($usaha->nama_penduduk == $dp->nama_penduduk)
                                    {
                                        ?>
                                         <option value="<?php echo $usaha->nama_penduduk ?>" selected><?php echo $usaha->nama_penduduk ?></option>
                                        <?php
                                    }else{
                                        ?>
                                    <option value="<?php echo $dp->nama_penduduk ?>"><?php echo $dp->nama_penduduk ?></option>
                                        <?php
                                    }   
                                    ?>
                                <?php endforeach; ?>
                        </select>
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
                            <input type="text" name="nama_usaha" value="<?php echo $usaha->nama_usaha ?>" class="form-control" style="width: 275px;" >
                            <?php echo form_error('nama_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <select name="jenis_usaha" class="form-control" style="width:275px;">
                                <?php 
                                if($usaha->jenis_usaha == 'Bidang Usaha Pertanian'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" selected >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Bidang Usaha Peternakan'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" selected >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Bidang Usaha Perikanan'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" selected >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Usaha Perdagangan'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan"  >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" selected >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Usaha Perindustrian'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" selected >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Usaha Pertambangan'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" selected >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Bisnis Transportasi'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" selected >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Sektor Pariwisata'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" selected >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Bidang Usaha Formal'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" selected >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }elseif($usaha->jenis_usaha == 'Bidang Jasa'){
                                    ?>
                                <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                <option value="Bidang Jasa" selected >Bidang Jasa</option>
                                <option value="Bidang Teknologi, Informasi, dan Komunikasi" >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                    <?php
                                }else{
                                    ?>
                                    <option value="Bidang Usaha Pertanian" >Bidang Usaha Pertanian</option>
                                    <option value="Bidang Usaha Peternakan" >Bidang Usaha Peternakan</option>
                                    <option value="Bidang Usaha Perikanan" >Bidang Usaha Perikanan</option>
                                    <option value="Usaha Perdagangan" >Usaha Perdagangan</option>
                                    <option value="Usaha Perindustrian" >Usaha Perindustrian</option>
                                    <option value="Usaha Pertambangan" >Usaha Pertambangan</option>
                                    <option value="Bisnis Transportasi" >Bisnis Transportasi</option>
                                    <option value="Sektor Pariwisata" >Sektor Pariwisata</option>
                                    <option value="Bidang Usaha Formal" >Bidang Usaha Formal</option>
                                    <option value="Bidang Jasa" >Bidang Jasa</option>
                                    <option value="Bidang Teknologi, Informasi, dan Komunikasi" selected >Bidang Teknologi, Informasi, dan Komunikasi</option>
                                <?php
                                }
                                ?>
                            </select>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat_usaha" placeholder="Alamat Tempat Usaha" ><?php echo $usaha->alamat_usaha ?></textarea>
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
                            <input type="text" name="luas_usaha" value="<?php echo $usaha->luas_usaha ?>" class="form-control" style="width: 275px;" onkeypress="return inputAngka(event)">
                            <?php echo form_error('luas_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="date" name="tgl_surat" value="<?php echo $usaha->tgl_surat ?>" class="form-control" style="width: 275px;" >
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>
           <br>
           <input type="hidden" name="akses" value="<?php echo $usaha->akses ?>">
    <center>
    <a href="<?php echo base_url('admin/sk_usaha') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </center>
    </form>
    <?php endforeach; ?>
    <br>
</div>