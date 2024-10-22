<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/cimarantenicon.png" type="image/png" />
    <title>SURAT KETERANGAN KEHILANGAN</title>
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
   
foreach($sk_kehilangan as $sk_hilang):?>
    <p align="center">
        <b><u>SURAT KETERANGAN KEHILANGAN</u></b><br>
        <b>Nomor : &nbsp;<?=$sk_hilang->id_kehilangan;?>/SK-KEHILANGAN/2023</b>
    </p>
<?php
            $nama = $sk_hilang->nama_penduduk;
            $jk = $sk_hilang->jk;
            $tempat_lahir = $sk_hilang->tempat_lahir;  
            $tgl_lahir = $sk_hilang->tgl_lahir;
            $pekerjaan = $sk_hilang->pekerjaan;  
            $agama = $sk_hilang->agama;  
            $nama_barang = $sk_hilang->nama_barang;  
            $hari_hilang = $sk_hilang->hari_hilang;  
            $tgl_hilang = $sk_hilang->tgl_hilang;  
            $tgl_surat = $sk_hilang->tgl_surat;  
            $alamat = $sk_hilang->alamat; 

            $day = date('D', strtotime($tgl_surat));
            $hilang = date('D', strtotime($tgl_hilang));
            
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

<table cellpadding="2" > 
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        Yang bertanda tangan di bawah ini menerangkan bahwa pada hari ini <?php echo $dayList[$day];?> tanggal <?php echo tanggal_indonesia($tgl_surat);?> telah datang ke Kantor Desa Cimaranten Kec. Cipicung, Kuningan, yang mengaku bernama :
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
            <td align="left"><?= $nama; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Tempat,Tanggal Lahir</td>
            <td width="1%" align="left">:</td>
            <td><?= $tempat_lahir . ', ' . tanggal_indonesia($tgl_lahir); ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Agama</td>
            <td width="1%" align="left">:</td>
            <td><?= $agama; ?></td>
        </tr>
        <tr align="left">
            <td width="15%"></td>
            <td width="25%" align="left">Jenis Kelamin</td>
            <td width="1%" align="left">:</td>
            <td> <?= $jk; ?></td>
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
        <font size="3"> Telah melaporkan bahwa telah kehilangan surat-surat penting / barang berharga berupa : <b><u><?= $nama_barang;?></u></b> diperkirakan hilang pada hari <?= $dayList[$hilang];?> tanggal <?= Tanggal_indonesia($tgl_hilang) ;?> setelah dilakukan pencarian dan sampai pada saat ini belum ditemukan.
        </font>
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td width="80%" align="justify">
        <font size="3"" >Demikian surat keterangan laporan kehilangan ini kami buat dengan sebenar-benarnya untuk dipergunakan sebagaimana mestinya.<br>
        </font>
        </td>
        <td width="10%"></td>
    </tr>
</table>
<br><br>
<table  cellpadding="3" width="100%"> 
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%">
        Cimaranten, <?php echo tanggal_indonesia($tgl_surat);?>
        </td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%">Pelapor</td>
        <td width="20%"></td>
        <td width="30%">
            Kepala Desa Cimaranten
        </td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"></td>
        <td width="20%"></td>
        <td width="30%"></td>
        <td width="10%"></td>
    </tr>
    <tr align="center">
        <td width="10%"></td>
        <td width="30%"><?= $nama ?></td>
        <td width="20%"></td>
        <td width="30%">ABDURAHMAN</td>
        <td width="10%"></td>
    </tr>
</table>

    <script>
        window.print();
    </script>
</body>
</html>