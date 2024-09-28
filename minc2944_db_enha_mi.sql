-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2024 at 06:00 AM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minc2944_db_enha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_carrousel`
--

CREATE TABLE `tb_carrousel` (
  `id_carrousel` int(11) NOT NULL,
  `img_cover` varchar(50) NOT NULL,
  `txt_title` varchar(50) NOT NULL,
  `txt_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_carrousel`
--

INSERT INTO `tb_carrousel` (`id_carrousel`, `img_cover`, `txt_title`, `txt_desc`) VALUES
(1, '1.png', 'MIS NURUL HUDA', 'Cerdas, Enerjik, Riang, Intelek, Agamis'),
(2, '22.png', 'Menerima Peserta Didik Baru!', 'Tahun ajaran 2021-2022'),
(3, '3111.png', 'Madrasah Hebat Bermartabat', 'Ayo Sekolah di Madrasah!'),
(4, '3.jpeg', '\"Wisata Bandung bersama BANDROS\"', 'Siswa-siswi mengikuti wisata keliling kota bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_files`
--

CREATE TABLE `tb_files` (
  `id_files` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `lokasi_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_files`
--

INSERT INTO `tb_files` (`id_files`, `nama_file`, `lokasi_file`) VALUES
(20, 'Adendum MI', '4ff2b5bc012862e4faaed9d93e7428f1.docx'),
(21, 'Surat Keterangan Kelulusan', '4f27a449ef5a5752491209cabcca69db.xlsx'),
(22, 'Data Siswa', '58ba2d27851c013bb5131e36b18cd925.xlsx'),
(23, 'Surat Keterangan', '7b439a90112bec464fa82fd3c8c76785.pdf'),
(25, 'Template Data Siswa', 'dcbd3a46459b733009ac4ef38a397882.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) DEFAULT NULL,
  `foto_kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `nama_kegiatan`, `foto_kegiatan`) VALUES
(46, 'Murid Kelas 6', '777d82bafb8b678dd673f0f9bb8b3281.jpeg'),
(47, 'Juara Ke 2 Lomba', 'a82e2efc296df38ad0311d2538e0326f.jpeg'),
(48, 'Bandros', 'a3b60538d795a0715bc6ee9b4f296a35.jpeg'),
(49, 'Kegiatan Upacara Bendera', '988f04fe66de2c8ccd586756cdddabe6.jpeg'),
(51, 'Graduation', '2fbce1344e0fe1cede486fa3e1d147eb.jpeg'),
(52, 'Kunjungan Museum Geologi', '22e27c43b7cfd3d89c129c487e2a4d94.jpeg'),
(53, 'Siswa', '909b6281a8af279abb6e66e3d28d4eb7.jpeg'),
(54, '', 'dcca58a60fe2ad6f41ef9d76359b4d3d.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `mapel_ampu` varchar(50) NOT NULL,
  `foto_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `mapel_ampu`, `foto_guru`) VALUES
(93, '1112327300370005', 'Aep S.Pd', 'Guru/Wali Kelas III', 'blank.jpg'),
(94, '1112327300370005', 'Ega Fatmawati, S.Ag', 'Guru/Wali Kelas IV', 'blank1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `judul_info` varchar(50) NOT NULL,
  `isi_info` varchar(500) NOT NULL,
  `gbr_info` varchar(50) NOT NULL,
  `tgl_info` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `judul_info`, `isi_info`, `gbr_info`, `tgl_info`) VALUES
(11, 'Informasi 1', 'Isi Info 1', 'myw3schoolsimage.jpg', '2020-12-09 07:38:00'),
(13, 'Informasi 3', 'Isi Info 3', 'logo-enha2.png', '2020-12-09 07:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rtext`
--

CREATE TABLE `tb_rtext` (
  `id_rtext` int(11) NOT NULL,
  `isi_rtext` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rtext`
--

INSERT INTO `tb_rtext` (`id_rtext`, `isi_rtext`) VALUES
(0, '|| SELAMAT DATANG DI OFFICIAL WEBSITE MIS NURUL HUDA KOTA BANDUNG || TELAH DIBUKA PPDB T.A 2022/2023 SILAHKAN SEGERA MENDAFTAR ||\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_school`
--

CREATE TABLE `tb_school` (
  `id_school` int(11) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `npsn` varchar(10) NOT NULL,
  `nsm` varchar(20) NOT NULL,
  `nama_madrasah` varchar(50) NOT NULL,
  `alamat_madrasah` varchar(100) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kab_kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `lattitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `nilai_akreditasi` char(1) NOT NULL,
  `status_sekolah` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `link_fb` varchar(100) DEFAULT NULL,
  `link_ig` varchar(100) DEFAULT NULL,
  `link_youtube` varchar(100) DEFAULT NULL,
  `visi_motto` varchar(100) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL,
  `nip_kepsek` varchar(20) NOT NULL,
  `img_kepsek` varchar(50) NOT NULL,
  `logo_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_school`
--

INSERT INTO `tb_school` (`id_school`, `jenjang`, `npsn`, `nsm`, `nama_madrasah`, `alamat_madrasah`, `provinsi`, `kab_kota`, `kecamatan`, `kelurahan`, `kodepos`, `lattitude`, `longitude`, `nilai_akreditasi`, `status_sekolah`, `email`, `phone`, `link_fb`, `link_ig`, `link_youtube`, `visi_motto`, `nama_kepsek`, `nip_kepsek`, `img_kepsek`, `logo_sekolah`) VALUES
(0, 'MI', '60709744', '111232730037', 'MIS Nurul Huda', 'Jl.KH. Wahid Hasyim Gg.Parasdi Dalam I No.7 Kec.Bojongloa Kidul Kel. Situsaeur Bandung 40234', 'Jawa Barat', 'Kota Bandung', 'Bojongloa Kidul', 'Situsaeur', '40234', '0', '0', 'A', 'swasta', 'info@minurulhuda.sch.id', '5207636', 'https://www.facebook.com/mi.nurulhuda.589', '-', 'https://www.youtube.com/watch?v=MngGrau0l3U&t=16s', '\"Terwujudnya Insan kamil yang beriman, berilmu pengetahuan, cerdas, terampil dan mampu mengembangkan', 'Iis Nurhayati, S.Ag, M.M.Pd', '-', 'kamad1.png', 'logo-enha2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(0, 'administrator', 'admin', 'yapinda1', 1),
(1, 'efrizalnf', 'efrizalnf', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_carrousel`
--
ALTER TABLE `tb_carrousel`
  ADD PRIMARY KEY (`id_carrousel`);

--
-- Indexes for table `tb_files`
--
ALTER TABLE `tb_files`
  ADD PRIMARY KEY (`id_files`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_rtext`
--
ALTER TABLE `tb_rtext`
  ADD PRIMARY KEY (`id_rtext`);

--
-- Indexes for table `tb_school`
--
ALTER TABLE `tb_school`
  ADD PRIMARY KEY (`id_school`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_files`
--
ALTER TABLE `tb_files`
  MODIFY `id_files` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
