<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/cimarantenicon.png" type="image/png" />
    <title>SURAT KETERANGAN TIDAK MAMPU</title>
</head>
<body style="font-family: Times New Roman">
<table align="center" width="100%">
        <tr>
            <td width="15%" align="center"><img src="<?php echo base_url() ?>/assets/img/cimarantenicon.png" alt="" width="100" height="90"></td>
            <td><center>
                <b>
                    <font size="5">PEMERINTAH KABUPATEN KUNINGAN </font>
                </b><br> 
                <b>
                    <font size="5">KECAMTANAN CIPICUNG </font>
                </b><br> 
                <b>
                    <font size="5">KEPALA DESA CIMARANTEN</font>
                </b><br>
                <font size="3">Jalan Raya Cimaranten Dusun II RT 11 RW 04, Cimaranten, Cipicung, Kuningan, Jawa Barat 54492</font>
                </center></td>
                <td width="15%"></td>
        </tr><b><hr></b>
    </table>
   <hr>
   <hr>
    <p align="center">
        <b><u>BIODATA PENDUDUK</u></b><br>
    </p>

<?php foreach($data_penduduk as $dp):?>
<table width="100%" cellpadding="5">
<?php
            $nama = $dp->nama_penduduk;
            $nik = $dp->nik;
            $no_kk= $dp->no_kk;
            $jk = $dp->jk;
            $tempat_lahir = $dp->tempat_lahir;  
            $tgl_lahir = $dp->tgl_lahir;
            $pekerjaan = $dp->pekerjaan;  
            $agama = $dp->agama;  
            $status = $dp->status;  
            $pendidikan = $dp->pendidikan_terakhir;  
            $no_telepon = $dp->no_telepon;  
            $alamat = $dp->alamat;  
endforeach;?>
        <tr>
            <td width="25%"></td>
            <td width="25%" align="left">Nama</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nama; ?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">NIK</td>
            <td width="1%" align="left">:</td>
            <td><?= $nik; ?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">No. Kartu Keluarga</td>
            <td width="1%" align="left">:</td>
            <td><?= $no_kk; ?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Jenis Kelamin</td>
            <td width="1%" align="left">:</td>
            <td><?= $jk; ?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Tempat, Tanggal Lahir</td>
            <td width="1%" align="left">:</td>
            <td><?= $tempat_lahir . ', ' . tanggal_indonesia($tgl_lahir); ?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Agama</td>
            <td width="1%" align="left">:</td>
            <td><?=$agama;?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Status Perkawinan</td>
            <td width="1%" align="left">:</td>
            <td><?=$status;?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Pendidikan Terakhir</td>
            <td width="1%" align="left">:</td>
            <td><?=$pendidikan;?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Pekerjaan</td>
            <td width="1%" align="left">:</td>
            <td><?=$pekerjaan;?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">No. Telepon</td>
            <td width="1%" align="left">:</td>
            <td><?=$no_telepon;?></td>
        </tr>
        <tr align="left">
            <td width="25%"></td>
            <td width="25%" align="left">Alamat</td>
            <td width="1%" align="left">:</td>
            <td><?=$alamat;?></td>
        </tr>
    </table>

    <?php
    function tanggal_indonesia($tanggal){
        $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
         
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>
    <script>
        window.print();
    </script>
</body>
</html>