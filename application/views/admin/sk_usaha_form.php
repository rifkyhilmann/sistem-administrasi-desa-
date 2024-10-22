<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-folder-plus"></i></i> Form Pengajuan Surat Keterangan Usaha 
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
    <form action="<?php echo base_url('admin/sk_usaha/tambah_sk_usaha_aksi') ?>" method="post">
    <input type="hidden" value="1" name="id_user"class="form-control" style="width:275px;" readonly>
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
                                <option value="" selected disabled>--Pilih--</option>
                                <?php foreach($data_penduduk as $dp): ?>
                                    <option value="<?php echo $dp->nama_penduduk ?>"><?php echo $dp->nama_penduduk ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php echo form_error('nama_penduduk','<div class="text-danger small" ml-3>') ?>
                    </td>
                    <td></td>
                    <td align="center">
                        <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" class="form-control" style="width: 275px;" readonly>
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
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="jk" placeholder="Jenis Kelamin" class="form-control" style="width: 275px;" readonly>
                            <?php echo form_error('jk','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" style="width:275px;" readonly>
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="Alamat" readonly></textarea>
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
                            <input type="text" name="nama_usaha" placeholder="Nama Usaha" class="form-control" style="width: 275px;" >
                            <?php echo form_error('nama_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <select name="jenis_usaha" class="form-control" style="width:275px;">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="Bidang Usaha pertanian" >Bidang Usaha Pertanian</option>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat_usaha" placeholder="Alamat Tempat Usaha" ></textarea>
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
                            <input type="text" name="luas_usaha" placeholder="Luas Tempat Usaha" class="form-control" style="width: 275px;" onkeypress="return inputAngka(event)">
                            <?php echo form_error('luas_usaha','<div class="text-danger small" ml-3>') ?>
                        </td>
                        <td></td>
                        <td align="center">
                            <input type="date" name="tgl_surat" class="form-control" style="width: 275px;" >
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td >
                    </tr>
                </tbody>
            </table>
           <br>
           <input type="hidden" name="akses" value="Y">
           <center>
                <a href="<?php echo base_url('admin/sk_usaha') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
                <button type="submit" class="btn btn-primary">Simpan</button>    
            </center>
    </form>
    <br>
</div>