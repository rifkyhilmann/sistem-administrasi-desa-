<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/cimarantenicon.png" type="image/png" />
    <title>SURAT KETERANGAN KEMATIAN</title>
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
        </tr>
    </table>
   <hr>
   <hr>
   <?php 
   
foreach($sk_kematian as $sk_mati):?>
    <p align="center">
        <b><u>SURAT KETERANGAN KEMATIAN</u></b><br>
        <b>Nomor : &nbsp;<?=$sk_mati->id_kematian;?>/SK-KEMATIAN/2023</b>
    </p>

<table cellpadding="2" > 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        Yang bertanda tangan di bawah ini Kepala Desa Cimaranten Kecamatan Cipicung Kabupaten Kuningan, menerangkan dengan sesungguhnya bahwa :
        </td>
        <td width="10%"></td>
    </tr>
</table>

<table width="100%" cellpadding="3" >
<?php
            $nama = $sk_mati->nama_penduduk;
            $nik = $sk_mati->nik;
            $jk = $sk_mati->jk;
            $tempat_lahir = $sk_mati->tempat_lahir;  
            $tgl_lahir = $sk_mati->tgl_lahir;
            $pekerjaan = $sk_mati->pekerjaan;  
            $agama = $sk_mati->agama;  
            $status = $sk_mati->status;  
            $tgl_surat = $sk_mati->tgl_surat;  
            $tgl_meninggal = $sk_mati->tgl_meninggal;  
            $tempat_kematian = $sk_mati->tempat_kematian;  
            $sebab = $sk_mati->sebab;  
            $alamat = $sk_mati->alamat;  

            $day = date('D', strtotime($tgl_meninggal));
            
            $dayList = array(
                'Sun' => 'Minggu',
                'Mon' => 'Senin',
                'Tue' => 'Selasa',
                'Wed' => 'Rabu',
                'Thu' => 'Kamis',
                'Fri' => 'Jumat',
                'Sat' => 'Sabtu'
            );
endforeach;?>

        <tr>
            <td width="15%"></td>
            <td width="25%" align="left">Nama</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nama; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">NIK</td>
            <td width="1%" align="left">:</td>
            <td><?= $nik; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Jenis Kelamin</td>
            <td width="1%" align="left">:</td>
            <td><?= $jk; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Tempat, Tanggal Lahir</td>
            <td width="1%" align="left">:</td>
            <td><?= $tempat_lahir . ', ' . tanggal_indonesia($tgl_lahir); ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Agama</td>
            <td width="1%" align="left">:</td>
            <td><?=$agama;?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Kewarganegaraan</td>
            <td width="1%" align="left">:</td>
            <td>Indonesia</td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Status Perkawinan</td>
            <td width="1%" align="left">:</td>
            <td><?=$status;?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Pekerjaan</td>
            <td width="1%" align="left">:</td>
            <td><?=$pekerjaan;?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Alamat</td>
            <td width="1%" align="left">:</td>
            <td><?=$alamat;?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left"></td>
            <td width="1%" align="left"></td>
            <td></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Telah Meninggal Pada :</td>
            <td width="1%" align="left">:</td>
            <td></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left"></td>
            <td width="1%" align="left"></td>
            <td></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Hari, Tanggal Kematian</td>
            <td width="1%" align="left">:</td>
            <td><?=$dayList[$day] . ', ' . tanggal_indonesia($tgl_meninggal);?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Tempat Kematian</td>
            <td width="1%" align="left">:</td>
            <td><?=$tempat_kematian;?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Sebab Kematian</td>
            <td width="1%" align="left">:</td>
            <td><?=$sebab;?></td>
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

    <br>
    <table cellpadding="3" width="100%"> 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        <font size="3">Demikian surat keterangan ini kami buat dengan sebenarnya, dan untuk dipergunakan sebagaimana mestinya. .<br>
        </font>
        </td>
        <td width="10%"></td>
    </tr>
</table>
<br><br>
<table  cellpadding="3" width="100%"> 
    <tr align="center">
        <td width="60%"></td>
        <td width="30%">
        Cimaranten, <?php echo tanggal_indonesia($tgl_surat);?>
        </td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="60%"></td>
        <td width="30%">
            Kepala Desa Cimaranten
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    <tr>
        <td width="60%"></td>
        <td width="30%">
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="60%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="60%"></td>
        <td width="30%">ABDURAHMAN</td>
        <td width="10%"></td>
    </tr>
</table>

    <script>
        window.print();
    </script>
</body>
</html>