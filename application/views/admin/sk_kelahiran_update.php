<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-pen-to-square fa-sm"></i> Edit Surat Keterangan Kelahiran 
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nama_ibu').on('input',function(){
                 
                var nama_penduduk=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/sk_kelahiran/get_id')?>",
                    dataType : "JSON",
                    data : {nama_penduduk: nama_penduduk},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nama_penduduk, pekerjaan, alamat){
                            $('[name="nama_ibu"]').val(data.nama_penduduk);
                            $('[name="pekerjaan_ibu"]').val(data.pekerjaan);
                            $('[name="alamat_ibu"]').val(data.alamat);
                        });
                         
                    }
                });
                return false;
           });
        });
    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nama_bapak').on('input',function(){
                 
                var nama_penduduk=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/sk_kelahiran/get_id')?>",
                    dataType : "JSON",
                    data : {nama_penduduk: nama_penduduk},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nama_penduduk, pekerjaan, alamat){
                            $('[name="nama_bapak"]').val(data.nama_penduduk);
                            $('[name="pekerjaan_bapak"]').val(data.pekerjaan);
                            $('[name="alamat_bapak"]').val(data.alamat);
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
    <?php foreach ($sk_kelahiran as $sk_lahir): ?>
    <form action="<?php echo base_url('admin/sk_kelahiran/update_aksi') ?>" method="post">
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
                            <select name="nama_ibu" id="nama_ibu" class="form-control" style="width:275px;">
                                <option value="" selected disabled>--Pilih Nama Ibu --</option>
                                <?php foreach($data_penduduk as $dp): ?>
                                    <?php
                                    if($dp->jk == 'Perempuan'){
                                    ?>
                                        <?php
                                        if($sk_lahir->nama_ibu == $dp->nama_penduduk)
                                        {
                                        ?>
                                            <option value="<?php echo $sk_lahir->nama_ibu ?>" selected><?php echo $sk_lahir->nama_ibu ?></option>
                                        <?php
                                        }else{
                                        ?>
                                        <option value="<?php echo $dp->nama_penduduk ?>"><?php echo $dp->nama_penduduk ?></option>
                                        <?php
                                        }   
                                        ?>
                                    <?php
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </select>
                        <?php echo form_error('nama_ibu','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                            <select name="nama_bapak" id="nama_bapak" class="form-control" style="width:275px;">
                                <option value="" selected disabled>--Pilih Nama bapak --</option>
                                <?php foreach($data_penduduk as $dp): ?>
                                    <?php
                                    if($dp->jk == 'Laki-laki'){
                                    ?>
                                        <?php
                                        if($sk_lahir->nama_bapak == $dp->nama_penduduk)
                                        {
                                        ?>
                                            <option value="<?php echo $sk_lahir->nama_bapak ?>" selected><?php echo $sk_lahir->nama_bapak ?></option>
                                        <?php
                                        }else{
                                        ?>
                                        <option value="<?php echo $dp->nama_penduduk ?>"><?php echo $dp->nama_penduduk ?></option>
                                        <?php
                                        }   
                                        ?>
                                    <?php
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </select>
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
                            <input type="text" name="umur_ibu" value="<?php echo $sk_lahir->umur_ibu ?>" class="form-control" style="width: 275px;" onkeypress="return inputAngka(event)">
                            <?php echo form_error('umur_ibu','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="umur_bapak" value="<?php echo $sk_lahir->umur_bapak ?>" class="form-control" style="width:275px;" onkeypress="return inputAngka(event)">
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
                            <input type="text" name="nama_anak" placeholder="Nama Lengkap Anak"  value="<?php echo $sk_lahir->nama_anak ?>" class="form-control">
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
                            <input type="date" name="tgl_lahir_anak" class="form-control" value="<?php echo $sk_lahir->tgl_lahir_anak ?>" style="width: 275px;">
                            <?php echo form_error('tgl_lahir_anak','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <select name="jk_anak" class="form-control" id="exampleFormControlSelect1" style="width: 275px;">
                                <option value="" disabled>--Pilih--</option>
                                <?php 
                                if($sk_lahir->jk_anak == 'Laki-laki'){
                                    ?>
                                    <option value="Laki-laki" selected>Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <?php
                                }else{
                                    ?>
                                    <option value="Laki-laki" >Laki-laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                    <?php
                                }
                                ?>
                                
                            </select>
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
                            <input type="date" name="tgl_surat"class="form-control" value="<?php echo $sk_lahir->tgl_surat ?>">
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td>
                    </tr>
                </tbody>
            </table>
           <br>
           <input type="hidden" name="akses" value="<?php echo $sk_lahir->akses ?>">
        <center>
            <a href="<?php echo base_url('admin/sk_kelahiran') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
    </form>
    <?php endforeach; ?>
    <br>
</div>