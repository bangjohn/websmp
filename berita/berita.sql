-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 08:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(9999) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `waktu`, `content`) VALUES
(1, 'SMP Kita meraih juara dalam berbagai bidang', '2017-05-08 03:25:29', 'Pada Upacara Bendera yang dilaksanakan pada Senin, 10 Agustus 2015 Siswa-siswi SMP Negeri 1 Denpasar yang meraih juara di SMAN 1 Denpasar dan di tingkat provinsi menyerahkan piala kepada kepala sekolah.   Berikut adalah nama-nama siswa yang meraih juara : Juara I vocal group Festival dan Lomba Seni Siswa Provinsi Bali Agus Nanda Prastika Nathayana Putu Nadia Pramesti Utami Ketut Diah Purnami Widiantari Nyoman Ratna Kartika Dewi I Gede Rio Brahmanta Kusuma Novi Rilinda (9D), Juara I Matematika Ryoma Saputra (9F), Juara I'),
(2, 'Peringatan Hari Kemerdekaan', '2016-08-18 03:30:02', 'Kemerdekaan Indonesia jatuh pada tanggal 17 Agustus 1945. Sehingga, hari tersebut digunakan sebagai hari kemerdekaan Indonesia. Tepat pada hari ini (17/8) rakyat Indonesia merayakan hari yang sangat bersejarah tersebut. Berbagai instansi pemerintah dan sekolah-sekolah melakukan upacara bendera, tidak terkecuali SMP Kita.\r\nKegiatan upacara bendera tersebut dilaksanakan di lapangan upacara SMP Kita. Upacara bendera diikuti oleh kelas VII, VIII dan IX, serta guru-guru dan para pegawai. Kegiatan tersebut berjalan dengan sangat baik dan lancar. Bertindak sebagai pembina upacara adalah Bapak Drs. I Nyoman Ardana, M.Pd, sedangkan perangkat upacara dilaksanakan oleh OSIS SMP Kita.'),
(3, 'SMP Kita indeks integritas UN tetinggi', '2016-06-15 05:20:02', '  Setiap tahun, ujian nasional (UN) digelar untuk mengukur ketercapaian hasil belajar di sekolah. Nilainya dipakai untuk pemetaan pendidikan di Tanah Air dan menjadi salah satu acuan perbaikan. Setiap tahun pula, Kementerian Pendidikan dan Kebudayaan (Kemdikbud) mengukur indeks integrasi sekolah penyelenggara UN. Indeks ini mencerminkan tingkat kejujuran sekolah dan siswa saat ujian berlangsung. Pada Ujian Nasional Tahun Pelajaran 2015-2016 SMP Kita mendapat penghargaan\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
