-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2023 at 06:51 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipad`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nama_penduduk` varchar(255) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghucu') NOT NULL,
  `status` enum('Belum Kawin','Kawin','Cerai Hidup','Cerai Mati') NOT NULL,
  `pendidikan_terakhir` enum('Tidak Sekolah','SD','SMP','SMK','SMA','D3','S1','S2','S3') NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_penduduk`, `nama_penduduk`, `jk`, `nik`, `no_kk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status`, `pendidikan_terakhir`, `pekerjaan`, `no_telepon`, `alamat`) VALUES
(16, 'Robih Najmudin', 'Laki-laki', '2222222222222222', '2222222222222221', 'Subang', '2023-02-02', 'Islam', 'Cerai Mati', 'SMK', 'IT Enginer', '083824854545', 'Cirbebon, Kost '),
(17, 'Dewi Intan', 'Perempuan', '333333333333', '333333333331', 'Cirebon', '2023-02-11', 'Islam', 'Kawin', 'S1', 'Guru', '088888888', 'Setu Wetan'),
(18, 'Sukijan', 'Laki-laki', '3333333333', '21212121212', 'Mangga Dua', '2022-10-20', 'Islam', 'Cerai Hidup', 'SMK', 'Karyawan', '0515151', 'Jakarta Selatan'),
(19, 'Moh Solehudin', 'Laki-laki', '12121212', '2152152521', 'Cirebon', '2001-10-17', 'Islam', 'Belum Kawin', 'S2', 'IT Solution', '0838245', 'Cirebon Kamarang'),
(22, 'Ammah', 'Perempuan', '2222222222222222', '321', 'Cirebon', '2023-02-06', 'Islam', 'Kawin', 'S1', 'IT Solution', '0515151', 'Jakarta Selatan'),
(23, 'Adam Jordan', 'Laki-laki', '11616161', '5166111', 'Jakarta', '2000-11-12', 'Hindu', 'Cerai Hidup', 'SMK', 'Selebritis', '015610', 'Jakarta'),
(24, 'Muhamad Nur Apriana', 'Laki-laki', '1234567890123456', '7894561230123654', 'Cirebon', '2023-02-09', 'Islam', 'Belum Kawin', 'SD', 'Pelajar', '0838246242', 'Dusun Manis RT 10 RW 04 Desa Kamarang'),
(25, 'Muhamad Nur Apriana', 'Laki-laki', '2222222222222222', '7894561230123654', 'Subang', '2023-01-31', 'Islam', 'Kawin', 'D3', 'Guru', '0838246242', 'p'),
(26, 'Muhamad Nur Apriana', 'Laki-laki', '11616161', '7894561230123654', 'Jakarta', '2023-01-30', 'Islam', 'Kawin', 'S2', 'IT Enginer', '0838246242', 'p'),
(27, 'Muhamad Nur Apriana', 'Laki-laki', '11616161', '7894561230123654', 'Cirebon', '2023-02-09', 'Islam', 'Cerai Hidup', 'Tidak Sekolah', 'Guru', '0838246242', 'ppp'),
(28, 'Muhamad Nur Apriana', 'Laki-laki', '11616161', '7894561230123654', 'Cirebon', '2023-02-06', 'Kristen', 'Kawin', 'S1', 'IT Solution', '0838246242', 'p'),
(29, 'Solehudin', 'Laki-laki', '123', '123', 'Kamarang', '1000-10-17', 'Islam', 'Kawin', 'Tidak Sekolah', 'IT Enginer', '0838246242', 'Bumi');

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `id_sktm` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_penduduk` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_surat` date NOT NULL,
  `akses` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sktm`
--

INSERT INTO `sktm` (`id_sktm`, `id_user`, `nama_penduduk`, `nik`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `pekerjaan`, `alamat`, `tgl_surat`, `akses`) VALUES
(12, 2, 'Robih Najmudin', '2222222222222222', 'Subang', '2023-02-02', 'Laki-laki', 'Islam', 'IT Enginer', 'Cirbebon, Kost ', '2023-02-13', 'Y'),
(13, 1, 'Robih Najmudin', '2222222222222222', 'Subang', '2023-02-02', 'Laki-laki', 'Islam', 'IT Enginer', 'Cirbebon, Kost ', '2023-02-13', 'Y'),
(14, 2, 'Dewi Intan', '333333333333', 'Cirebon', '2023-02-11', 'Perempuan', 'Islam', 'Guru', 'Setu Wetan', '2023-02-15', 'Y'),
(15, 1, 'Robih Najmudin', '2222222222222222', 'Subang', '2023-02-02', 'Laki-laki', 'Islam', 'IT Enginer', 'Cirbebon, Kost ', '2023-02-20', 'Y'),
(16, 2, 'Sukijan', '3333333333', 'Mangga Dua', '2022-10-20', 'Laki-laki', 'Islam', 'Karyawan', 'Jakarta Selatan', '2023-02-21', 'Y'),
(17, 2, 'Moh Solehudin', '12121212', 'Cirebon', '2001-10-17', 'Laki-laki', 'Islam', 'IT Solution', 'Cirebon Kamarang', '2023-02-14', 'Y'),
(18, 2, 'Ammah', '2222222222222222', 'Cirebon', '2023-02-06', 'Perempuan', 'Islam', 'IT Solution', 'Jakarta Selatan', '2023-02-01', 'Y'),
(19, 1, 'Moh Solehudin', '12121212', 'Cirebon', '2001-10-17', 'Laki-laki', 'Islam', 'IT Solution', 'Cirebon Kamarang', '2023-02-07', 'Y'),
(20, 1, 'Robih Najmudin', '2222222222222222', 'Subang', '2023-02-02', 'Laki-laki', 'Islam', 'IT Enginer', 'Cirbebon, Kost ', '2023-02-10', 'Y'),
(21, 1, 'Sukijan', '3333333333', 'Mangga Dua', '2022-10-20', 'Laki-laki', 'Islam', 'Karyawan', 'Jakarta Selatan', '2023-02-20', 'Y'),
(22, 1, 'Robih Najmudin', '2222222222222222', 'Subang', '2023-02-02', 'Laki-laki', 'Islam', 'IT Enginer', 'Cirbebon, Kost ', '2023-02-15', 'Y'),
(23, 1, 'Moh Solehudin', '12121212', 'Cirebon', '2001-10-17', 'Laki-laki', 'Islam', 'IT Solution', 'Cirebon Kamarang', '2023-02-25', 'Y'),
(24, 2, 'Adam Jordan', '11616161', 'Jakarta', '2000-11-12', 'Laki-laki', 'Hindu', 'Selebritis', 'Jakarta', '2023-02-15', 'Y'),
(25, 1, 'Adam Jordan', '11616161', 'Jakarta', '2000-11-12', 'Laki-laki', 'Hindu', 'Selebritis', 'Jakarta', '2023-02-08', 'Y'),
(26, 4, 'Sukijan', '3333333333', 'Mangga Dua', '2022-10-20', 'Laki-laki', '', 'Karyawan', 'Jakarta Selatan', '2023-02-15', 'Y'),
(27, 4, 'Ammah', '2222222222222222', 'Cirebon', '2023-02-06', 'Perempuan', '', 'IT Solution', 'Jakarta Selatan', '2023-02-02', 'Y'),
(28, 1, 'Moh Solehudin', '12121212', 'Cirebon', '2001-10-17', 'Laki-laki', 'Islam', 'IT Solution', 'Cirebon Kamarang', '2023-02-28', 'Y'),
(29, 1, 'Dewi Intan', '333333333333', 'Cirebon', '2023-02-11', 'Perempuan', 'Islam', 'Guru', 'Setu Wetan', '2023-02-16', 'Y'),
(30, 1, 'Muhamad Nur Apriana', '11616161', 'Cirebon', '2023-02-09', 'Laki-laki', 'Islam', 'Guru', 'ppp', '2023-02-05', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sk_kehilangan`
--

CREATE TABLE `sk_kehilangan` (
  `id_kehilangan` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_penduduk` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `hari_hilang` varchar(255) NOT NULL,
  `tgl_hilang` date NOT NULL,
  `tgl_surat` date NOT NULL,
  `akses` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_kehilangan`
--

INSERT INTO `sk_kehilangan` (`id_kehilangan`, `id_user`, `nama_penduduk`, `tempat_lahir`, `tgl_lahir`, `agama`, `jk`, `pekerjaan`, `alamat`, `nama_barang`, `hari_hilang`, `tgl_hilang`, `tgl_surat`, `akses`) VALUES
(4, 0, 'Sukijan', 'Mangga Dua', '2022-10-20', 'Islam', 'Laki-laki', 'Karyawan', 'Jakarta Selatan', 'Motor Supra', 'Senin', '2023-02-06', '2023-02-07', 'Y'),
(5, 0, 'Moh Solehudin', 'Cirebon', '2001-10-17', 'Islam', 'Laki-laki', 'IT Solution', 'Cirebon Kamarang', 'pulpen', 'Selasa', '2023-01-17', '2023-02-07', 'N'),
(6, 2, 'Moh Solehudin', 'Cirebon', '2001-10-17', 'Islam', 'Laki-laki', 'IT Solution', 'Cirebon Kamarang', 'Motor', 'Senin', '2023-02-06', '2023-02-09', 'Y'),
(8, 0, 'Dewi Intan', 'Cirebon', '2023-02-11', 'Islam', 'Perempuan', 'Guru', 'Setu Wetan', 'Motor', 'Senin', '2023-02-14', '2023-01-31', 'Y'),
(9, 0, 'Adam Jordan', 'Jakarta', '2000-11-12', 'Hindu', 'Laki-laki', 'Selebritis', 'Jakarta', 'Mobil Avanza', 'Kamis', '2023-02-11', '2023-02-13', 'Y'),
(11, 0, 'Robih Najmudin', 'Subang', '2023-02-02', 'Islam', 'Laki-laki', 'IT Enginer', 'Cirbebon, Kost ', 'Baju Bola', 'Senin', '2023-02-06', '2023-02-13', 'N'),
(12, 0, 'Robih Najmudin', 'Subang', '2023-02-02', 'Islam', 'Laki-laki', 'IT Enginer', 'Cirbebon, Kost ', 'Dompet', 'Selasa', '2023-02-14', '2023-02-15', 'N'),
(13, 2, 'Adam Jordan', 'Jakarta', '2000-11-12', 'Hindu', 'Laki-laki', 'Selebritis', 'Jakarta', 'Vespa', 'Senin', '2023-01-30', '2023-02-06', 'Y'),
(14, 8, 'Dewi Intan', 'Cirebon', '2023-02-11', 'Islam', 'Perempuan', 'Guru', 'Setu Wetan', 'Sepatu Roda ', 'Selasa', '2023-02-07', '2023-02-21', 'Y'),
(15, 8, 'Solehudin', 'Kamarang', '1000-10-17', 'Islam', 'Laki-laki', 'IT Enginer', 'Bumi', 'Rumah bagus', 'Selasa', '2023-02-19', '2023-02-20', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sk_kelahiran`
--

CREATE TABLE `sk_kelahiran` (
  `id_lahir` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_bapak` varchar(255) NOT NULL,
  `umur_ibu` int(10) NOT NULL,
  `umur_bapak` int(10) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `pekerjaan_bapak` varchar(255) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `alamat_bapak` text NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `tgl_lahir_anak` date NOT NULL,
  `jk_anak` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_surat` date NOT NULL,
  `akses` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_kelahiran`
--

INSERT INTO `sk_kelahiran` (`id_lahir`, `id_user`, `nama_ibu`, `nama_bapak`, `umur_ibu`, `umur_bapak`, `pekerjaan_ibu`, `pekerjaan_bapak`, `alamat_ibu`, `alamat_bapak`, `nama_anak`, `tgl_lahir_anak`, `jk_anak`, `tgl_surat`, `akses`) VALUES
(7, 2, 'Dewi Intan', 'Moh Solehudin', 25, 27, 'Guru', 'IT Solution', 'Setu Wetan', 'Cirebon Kamarang', 'Ratu Cantika ', '2027-07-10', 'Perempuan', '2023-02-01', 'Y'),
(8, 2, 'Dewi Intan', 'Moh Solehudin', 25, 27, 'Guru', 'IT Solution', 'Setu Wetan', 'Cirebon Kamarang', 'Muhammad Mahesa Putra Soleh', '2028-11-11', 'Laki-laki', '2028-11-17', 'Y'),
(10, 2, 'Dewi Intan', 'Moh Solehudin', 22, 22, 'Guru', 'IT Solution', 'Setu Wetan', 'Cirebon Kamarang', 'AAA', '2023-02-08', 'Laki-laki', '2023-02-07', 'Y'),
(12, 2, 'Dewi Intan', 'Moh Solehudin', 2, 2, 'Guru', 'IT Solution', 'Setu Wetan', 'Cirebon Kamarang', '2', '2023-02-09', 'Laki-laki', '2023-02-08', 'Y'),
(14, 2, 'Dewi Intan', 'Moh Solehudin', 22, 22, 'Guru', 'IT Solution', 'Setu Wetan', 'Cirebon Kamarang', 'aaaaaaa', '2023-02-15', 'Laki-laki', '2023-02-24', 'N'),
(15, 1, 'Dewi Intan', 'Moh Solehudin', 20, 20, 'Guru', 'IT Solution', 'Setu Wetan', 'Cirebon Kamarang', 'pp', '2023-02-28', 'Perempuan', '2023-02-28', 'Y'),
(16, 8, 'Dewi Intan', 'Solehudin', 24, 26, 'Guru', 'IT Enginer', 'Setu Wetan', 'Bumi', 'AAA', '2023-03-02', 'Laki-laki', '2023-02-15', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sk_kematian`
--

CREATE TABLE `sk_kematian` (
  `id_kematian` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_penduduk` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `tempat_kematian` varchar(255) NOT NULL,
  `sebab` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `akses` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_kematian`
--

INSERT INTO `sk_kematian` (`id_kematian`, `id_user`, `nik`, `nama_penduduk`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `status`, `pekerjaan`, `alamat`, `tgl_meninggal`, `tempat_kematian`, `sebab`, `tgl_surat`, `akses`) VALUES
(4, 0, '11616161', 'Adam Jordan', 'Jakarta', '2000-11-12', 'Laki-laki', 'Hindu', 'Cerai Hidup', 'Selebritis', 'Jakarta', '2023-02-11', 'Rumah Sakit', 'Kecelakaan', '2023-02-12', 'Y'),
(5, 2, '3333333333', 'Sukijan', 'Mangga Dua', '2022-10-20', 'Laki-laki', 'Islam', 'Cerai Hidup', 'Karyawan', 'Jakarta Selatan', '2023-02-04', 'Rumah Sakit', 'Sakit Keras', '2023-02-13', 'Y'),
(6, 2, '2222222222222222', 'Robih Najmudin', 'Subang', '2023-02-02', 'Laki-laki', 'Islam', 'Cerai Mati', 'IT Enginer', 'Cirbebon, Kost ', '2023-02-09', 'S', 'AAAAAA', '2023-02-14', 'Y'),
(7, 2, '11616161', 'Adam Jordan', 'Jakarta', '2000-11-12', 'Laki-laki', 'Hindu', 'Cerai Hidup', 'Selebritis', 'Jakarta', '2023-02-16', 'Subang', 'Sakit Tipes', '2023-02-24', 'N'),
(8, 8, '123', 'Solehudin', 'Kamarang', '1000-10-17', 'Laki-laki', 'Islam', 'Kawin', 'IT Enginer', 'Bumi', '2023-02-14', 'Rumah', 'Sakit', '2023-02-15', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sk_usaha`
--

CREATE TABLE `sk_usaha` (
  `id_usaha` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_penduduk` varchar(255) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `luas_usaha` varchar(10) NOT NULL,
  `tgl_surat` date NOT NULL,
  `alamat_usaha` text NOT NULL,
  `akses` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_usaha`
--

INSERT INTO `sk_usaha` (`id_usaha`, `id_user`, `nama_penduduk`, `jk`, `tempat_lahir`, `tgl_lahir`, `nik`, `pekerjaan`, `alamat`, `nama_usaha`, `jenis_usaha`, `luas_usaha`, `tgl_surat`, `alamat_usaha`, `akses`) VALUES
(3, 0, 'Moh Solehudin', 'Laki-laki', 'Cirebon', '2001-10-17', '12121212', 'IT Solution', 'Cirebon Kamarang', 'PT Networkes', 'Bidang Teknologi, Informasi, dan Komunikasi', '100', '2023-02-10', 'Jl. Ahmad Yani No 3', 'Y'),
(4, 2, 'Dewi Intan', 'Perempuan', 'Cirebon', '2023-02-11', '333333333333', 'Guru', 'Setu Wetan', 'Kolam Renang Ang Sabiq', 'Bidang Jasa', '150', '2023-02-02', 'Setu Wetan', 'Y'),
(5, 0, 'Ammah', 'Perempuan', 'Cirebon', '0000-00-00', '2222222222222222', 'IT Solution', 'Jakarta Selatan', 'Koperasi', 'Usaha Perdagangan', '100', '2023-02-07', 'SDN 2 Kalitengah', 'N'),
(6, 2, 'Robih Najmudin', 'Laki-laki', 'Subang', '2023-02-02', '2222222222222222', 'IT Enginer', 'Cirbebon, Kost ', 'AAA', 'Bidang Usaha Peternakan', '2', '2023-02-06', 'DDDD', 'N'),
(7, 2, 'Robih Najmudin', 'Laki-laki', 'Subang', '2023-02-02', '2222222222222222', 'IT Enginer', 'Cirbebon, Kost ', 'PT UGAL UGALAN', 'Bisnis Transportasi', '200', '2023-02-13', 'SUBANG', 'Y'),
(8, 2, 'Robih Najmudin', 'Laki-laki', 'Subang', '2023-02-02', '2222222222222222', 'IT Enginer', 'Cirbebon, Kost ', 'PT UGAL UGALAN 2', 'Bisnis Transportasi', '150', '2023-02-14', 'Majalengka jauh', 'Y'),
(9, 8, 'Robih Najmudin', 'Laki-laki', 'Subang', '2023-02-02', '2222222222222222', 'IT Enginer', 'Cirbebon, Kost ', 'PT ANGIN RIBUT SENTOSA', 'Usaha Perindustrian', '150', '2023-02-15', 'Jl. KH. Wahid Hasyim No.3 Kec. Kedawung Kab. Cirebon', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User'),
(3, 'soleh', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(4, 'user2', 'ee11cbb19052e40b07aac0ca060c23ee', 'User'),
(7, '11616161', '0ae60711d957cb3539d536bf9d5693e1', 'User'),
(8, '123', '0ae60711d957cb3539d536bf9d5693e1', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indexes for table `sk_kehilangan`
--
ALTER TABLE `sk_kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indexes for table `sk_kelahiran`
--
ALTER TABLE `sk_kelahiran`
  ADD PRIMARY KEY (`id_lahir`);

--
-- Indexes for table `sk_kematian`
--
ALTER TABLE `sk_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sk_kehilangan`
--
ALTER TABLE `sk_kehilangan`
  MODIFY `id_kehilangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sk_kelahiran`
--
ALTER TABLE `sk_kelahiran`
  MODIFY `id_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sk_kematian`
--
ALTER TABLE `sk_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sk_usaha`
--
ALTER TABLE `sk_usaha`
  MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
