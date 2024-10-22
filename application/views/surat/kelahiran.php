<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/cimarantenicon.png" type="image/png" />
    <title>SURAT KETERANGAN KELAHIRAN</title>
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
                    <font size="5">KECAMATAN CIPICUNG </font>
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
   
foreach($sk_kelahiran as $sk_lahir):?>
    <p align="center">
        <b><u>SURAT KETERANGAN KELAHIRAN</u></b><br>
        <b>Nomor : &nbsp;<?=$sk_lahir->id_lahir;?>/SKK/2023</b>
    </p>

<table cellpadding="2" > 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify" >
        Yang bertanda tangan di bawah ini Kepala Desa Cimaranten Kecamatan Cipicung Kabupaten Kuningan, menerangkan dengan sesungguhnya bahwa :
        </td>
        <td width="10%"></td>
    </tr>
</table>
<br>
<table width="100%" cellpadding="3" >
<?php
            $nama_ibu = $sk_lahir->nama_ibu;
            $nama_bapak = $sk_lahir->nama_bapak;
            $umur_ibu = $sk_lahir->umur_ibu;
            $umur_bapak = $sk_lahir->umur_bapak;
            $pekerjaan_ibu = $sk_lahir->pekerjaan_ibu;
            $pekerjaan_bapak = $sk_lahir->pekerjaan_bapak;
            $alamat_ibu = $sk_lahir->alamat_ibu;
            $alamat_bapak = $sk_lahir->alamat_bapak;
            $tgl_lahir = $sk_lahir->tgl_lahir_anak;
            $nama_anak = $sk_lahir->nama_anak;
            $jk_anak = $sk_lahir->jk_anak;
            $tgl_surat = $sk_lahir->tgl_surat;  
             
endforeach;?>

        <tr>
            <td width="15%"></td>
            <td width="25%" align="left">Nama</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nama_ibu; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Umur</td>
            <td width="1%" align="left">:</td>
            <td><?= $umur_ibu; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Pekerjaan</td>
            <td width="1%" align="left">:</td>
            <td><?= $pekerjaan_ibu; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Alamat</td>
            <td width="1%" align="left">:</td>
            <td><?= $alamat_ibu; ?></td>
        </tr>
    </table>
<br>
<table cellpadding="2" width="100%" > 
    <tr>
        <td width="10%"></td>
        <td width="80%">
        Istri sah dari :
        </td>
        <td width="10%"></td>
    </tr>
</table>
<br>
<table width="100%" cellpadding="3" >
        <tr>
            <td width="15%"></td>
            <td width="25%" align="left">Nama</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nama_bapak; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Umur</td>
            <td width="1%" align="left">:</td>
            <td><?= $umur_bapak; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Pekerjaan</td>
            <td width="1%" align="left">:</td>
            <td><?= $pekerjaan_bapak; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Alamat</td>
            <td width="1%" align="left">:</td>
            <td><?= $alamat_bapak; ?></td>
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
    <table cellpadding="3" width="100%" > 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        <font size="3"> Pada tanggal <?php echo tanggal_indonesia($tgl_lahir); ?> di Kuningan telah melahirkan seorang anak dengan jenis kelamin <?php echo $jk_anak; ?> yang diberi nama : 
        </font>
        </td>
        <td width="10%"></td>
    </tr>
    <tr width="100%">
        <td></td>
        <td><center><?php echo strtoupper($nama_anak); ?><hr></center></td>
        <td></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        <font size="3">Demikian surat keterangan ini kami buat untuk dipergunakan sebagai mana mestinya.<br>
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
        <td width="30%">
        </td>
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