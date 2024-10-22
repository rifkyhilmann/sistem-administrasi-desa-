<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-folder-plus"></i></i> Form Pengajuan Surat Keterangan Tidak Mampu 
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nama_penduduk').on('input',function(){
                 
                var nama_penduduk=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('user/sktm/get_id')?>",
                    dataType : "JSON",
                    data : {nama_penduduk: nama_penduduk},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nama_penduduk, nik, tempat_lahir, tgl_lahir, jk, agama, pekerjaan, alamat){
                            $('[name="nama_penduduk"]').val(data.nama_penduduk);
                            $('[name="nik"]').val(data.nik);
                            $('[name="tempat_lahir"]').val(data.tempat_lahir);
                            $('[name="tgl_lahir"]').val(data.tgl_lahir);
                            $('[name="jk"]').val(data.jk);
                            $('[name="agama"]').val(data.agama);
                            $('[name="pekerjaan"]').val(data.pekerjaan);
                            $('[name="alamat"]').val(data.alamat);
                             
                        });
                         
                    }
                });
                return false;
           });
        });
        
    </script>
    
    <div class="table-responsive text-dark">
    <form action="<?php echo base_url('user/sktm/tambah_sktm_aksi') ?>" method="post">
    <input type="hidden" value="<?php echo $id ?>" name="id_user" class="form-control" style="width:275px;" readonly>
        <div class="table-responsive">
            <table align="center" width="600px">
                <thead>
                    <tr>
                        <td align="center" style="width:300px;">
                            <label>Nama Penduduk</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <select name="nama_penduduk" id="nama_penduduk" class="form-control" style="width:275px;">
                                <option value="" selected disabled>--Pilih Nama Penduduk --</option>
                                <?php foreach($data_penduduk as $dp): ?>
                                <option value="<?php echo $dp->nama_penduduk ?>"><?php echo $dp->nama_penduduk ?></option>
                                <?php endforeach; ?>
                            </select>
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
                            <input type="text" value="" name="nik" placeholder="NIK" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" style="width:275px;" readonly>
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
                            <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="jk" placeholder="Jenis Kelamin" class="form-control" style="width:275px;" readonly>
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
                            <label>Agama</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="agama" placeholder="Agama" class="form-control" style="width:275px;" readonly>
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
                            <label>Pekerjaan</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" style="width:275px;" readonly>
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
                            <input type="text" name="alamat" placeholder="Alamat" class="form-control" style="width:275px;" readonly>
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
                            <input type="date" name="tgl_surat" class="form-control" style="width:275px;">
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
        <input type="hidden" name="akses" value="N">
    </div>
        <center>
            <a href="<?php echo base_url('user/sktm') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
    </form>
    <br>
</div>