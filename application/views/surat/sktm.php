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
   <?php 
   
foreach($sktm as $stm):?>
    <p align="center">
        <b><u>SURAT KETERANGAN TIDAK MAMPU</u></b><br>
        <b>Nomor : &nbsp;<?=$stm->id_sktm;?>/SKTM/2023</b>
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
            $nama = $stm->nama_penduduk;
            $nik = $stm->nik;
            $jk = $stm->jk;
            $tempat_lahir = $stm->tempat_lahir;  
            $tgl_lahir = $stm->tgl_lahir;
            $pekerjaan = $stm->pekerjaan;  
            $agama = $stm->agama;  
            $tgl_surat = $stm->tgl_surat;  
            $alamat = $stm->alamat;  
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
        <font size="3"> Benar nama tersebut diatas adalah warga Desa Cimaranten, Kec. Cipicung, Kab. Kuningan - Jawa Barat, yang menurut sepengetahuan kami orang tersebut termasuk dalam kategori Masyarakat Tidak Mampu .<br>
        </font>
        </td>
        <td width="10%"></td>
    </tr>
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