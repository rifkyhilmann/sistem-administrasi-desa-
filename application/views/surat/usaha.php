<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/cimarantenicon.png" type="image/png" />
    <title>SURAT KETERANGAN USAHA</title>
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
                </b>
                <font size="3">Jalan Raya Cimaranten Dusun II RT 11 RW 04, Cimaranten, Cipicung, Kuningan, Jawa Barat 54492</font>
                </center></td>
                <td width="15%"></td>
        </tr><b><hr></b>
    </table>
   <hr>
   <hr>
   <?php 
   
foreach($sk_usaha as $usaha):?>
    <p align="center">
        <b><u>SURAT KETERANGAN USAHA</u></b><br>
        <b>Nomor : &nbsp;<?=$usaha->id_usaha;?>/SKU/2023</b>
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
            $nama_penduduk  = $usaha->nama_penduduk;
            $jk             = $usaha->jk;
            $tempat_lahir   = $usaha->tempat_lahir;
            $tgl_lahir      = $usaha->tgl_lahir;
            $nik            = $usaha->nik;
            $pekerjaan      = $usaha->pekerjaan;
            $alamat         = $usaha->alamat;
            $nama_usaha     = $usaha->nama_usaha;
            $jenis_usaha    = $usaha->jenis_usaha;
            $luas           = $usaha->luas_usaha;
            $alamat_usaha   = $usaha->alamat_usaha;
            $tgl_surat      = $usaha->tgl_surat;  
             
endforeach;?>

        <tr>
            <td width="15%"></td>
            <td width="25%" align="left">Nama Lengkap</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nama_penduduk; ?></td>
        </tr>
        <tr>
            <td width="15%"></td>
            <td width="25%" align="left">No. KTP/NIK</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nik; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Jenis Kelamin</td>
            <td width="1%" align="left">:</td>
            <td><?= $jk; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Tempat,Tanggal Lahir</td>
            <td width="1%" align="left">:</td>
            <td><?= $tempat_lahir . ', ' . tanggal_indonesia($tgl_lahir); ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Kewarganegaraan</td>
            <td width="1%" align="left">:</td>
            <td> Indonesia</td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Pekerjaan</td>
            <td width="1%" align="left">:</td>
            <td><?= $pekerjaan; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Alamat</td>
            <td width="1%" align="left">:</td>
            <td><?= $alamat; ?></td>
        </tr>
    </table>
<table cellpadding="2" width="100%" > 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        Berdasarkan pengamatan kami, bahwa yang berangkutan benar telah membuka usaha sebagai berikut :
        </td>
        <td width="10%"></td>
    </tr>
</table>
<table width="100%" cellpadding="3" >
        <tr>
            <td width="15%"></td>
            <td width="25%" align="left">Nama Perusahaan</td>
            <td width="1%" align="left">:</td>
            <td align="left"><?= $nama_usaha; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Nama Pemilik</td>
            <td width="1%" align="left">:</td>
            <td><?= $nama_penduduk; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Alamat Perusahaan</td>
            <td width="1%" align="left">:</td>
            <td><?= $alamat_usaha; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Jenis Usaha</td>
            <td width="1%" align="left">:</td>
            <td><?= $jenis_usaha; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Luas Tempat Usaha</td>
            <td width="1%" align="left">:</td>
            <td><?= $luas; ?> m<sup>2</sup></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Jenis Usaha</td>
            <td width="1%" align="left">:</td>
            <td><?= $jenis_usaha; ?></td>
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
    <table cellpadding="3" width="100%" > 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        <font size="3" > Demikian Surat Keterangan Usaha ini dibuat untuk keperluan mengajukan Permohonan Surat Ijin Usaha/Ijin Undang-undang Gangguan dari Pemerintah Kabupaten Kuningan. <br>
        Surat ini berlaku 3 (tiga) bulan setelah dikeluarkan, bukan merupakan surat ijin dan tidak diperkenankan untuk melakukan usaha sebelum mendapat ijin resmi dari instansi terkait.
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