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
   <p align="center">
        <b><u>DAFTAR DATA PENDUDUK DESA CIMARANTEN</u></b><br>
    </p>

        <table class="table table-bordered table-striped table-hover text-dark" border="2" width="100%" cellpadding="5">
            <thead>
                <tr align="center">
                    <th width="3%">NO</th>
                    <th width="12%">NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th width="8%">Jenis Kelamin</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($data_penduduk as $dp) :?>
                    <tr >
                        <td align="center"><?php echo $no++ ?></td>
                        <td align="center"><?php echo $dp->nik ?></td>
                        <td><?php echo $dp->nama_penduduk ?></td>
                        <td align="center"><?php echo tanggal_indonesia($dp->tgl_lahir)?></td>
                        <td align="center"><?php echo $dp->jk ?></td>
                        <td align="center"><?php echo $dp->no_telepon ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
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