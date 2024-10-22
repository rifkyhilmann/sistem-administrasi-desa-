<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
    <i class="fa-solid fa-folder-plus"></i> Form Pengajuan Surat Keterangan Kehilangan 
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#nama_penduduk').on('input',function(){
                 
                var nama_penduduk=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('admin/sk_kehilangan/get_id')?>",
                    dataType : "JSON",
                    data : {nama_penduduk: nama_penduduk},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nama_penduduk, tempat_lahir, tgl_lahir, agama, jk, pekerjaan, alamat){
                            $('[name="nama_penduduk"]').val(data.nama_penduduk);
                            $('[name="tempat_lahir"]').val(data.tempat_lahir);
                            $('[name="tgl_lahir"]').val(data.tgl_lahir);
                            $('[name="agama"]').val(data.agama);
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
    <div class="table-responsive">
    <form action="<?php echo base_url('admin/sk_kehilangan/tambah_sk_kehilangan_aksi') ?>" method="post">
    <input type="hidden" value="1" name="id_user"class="form-control" style="width:275px;" readonly>
        <div class="table-responsive text-dark">
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
                            <label>Barang Yang Hilang</label>
                        </td>  
                        <td align="center" style="width:300px;">
                            <input type="text" name="nama_barang" class="form-control" style="width:275px;">
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
                            <select name="hari_hilang" class="form-control" id="exampleFormControlSelect1" style="width: 275px;">
                                <option value="" selected disabled>--Pilih--</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
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
                            <input type="date" name="tgl_hilang" class="form-control" style="width:275px;">
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
                            <input type="date" name="tgl_surat" class="form-control" style="width:275px;">
                            <?php echo form_error('tgl_surat','<div class="text-danger small" ml-3>') ?>
                        </td>          
                    </tr>
                </thead>
            </table>
        <br>
    </div>
    <input type="hidden" name="akses" value="Y">
        <center>
            <a href="<?php echo base_url('admin/sk_kehilangan') ?>"><button type="button" class="btn btn-danger">Kembali</button></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
    <br>
</div>