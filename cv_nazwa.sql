-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2025 at 09:17 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_nazwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `alamat`, `email`, `telepon`, `deskripsi`, `foto`) VALUES
(2, 'Nazwa Akmalia Padla', 'Kabupaten Sukabumi, Jawa Barat, 43156', 'nazwaakmalia569@gmail.com', '+6283838592645', 'Mahasiswi Teknik Informatika Universitas Muhammadiyah Sukabumi yang memiliki semangat belajar tinggi dan ketertarikan pada dunia teknologi. Aktif dalam organisasi dan proyek pengembangan web. Memiliki pengalaman di administrasi publik dan desain UI/UX.', 'Nazwa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int NOT NULL,
  `nama_keahlian` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama_keahlian`, `level`) VALUES
(1, 'PHP', 'Menengah'),
(2, 'Python', 'Menengah'),
(3, 'HTML & CSS', 'Lanjut'),
(4, 'MySQL', 'Menengah'),
(5, 'UI/UX Design (Figma)', 'Lanjut'),
(6, 'Microsoft Office', 'Lanjut'),
(7, 'Komunikasi & Teamwork', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `minat`
--

CREATE TABLE `minat` (
  `id` int NOT NULL,
  `nama_minat` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `minat`
--

INSERT INTO `minat` (`id`, `nama_minat`, `icon`) VALUES
(1, 'UI/UX Design', 'code'),
(2, 'Web Development', 'monitor'),
(3, 'Belajar Teknologi Baru', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `institusi` varchar(100) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `ipk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jenjang`, `institusi`, `tahun`, `ipk`) VALUES
(1, 'S1 Teknik Informatika', 'Universitas Muhammadiyah Sukabumi', '2023 - Sekarang', '3.83 / 4.00'),
(2, 'SMA Jurusan IPS', 'SMAN 1 Cisaat', '2019 - 2022', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `tahun` varchar(30) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `jenis`, `tempat`, `posisi`, `tahun`, `deskripsi`) VALUES
(1, 'Kerja', 'Bagian Pelayanan Administrasi', 'Staf Pelayanan', 'Juni 2022 - Mei 2023', 'Membantu proses administrasi warga, pengarsipan dokumen, dan pelayanan surat menyurat.'),
(2, 'Kepanitiaan', 'HARTIK UMMI', 'Divisi Acara', 'Jul 2024 - Agu 2024', 'Mengelola kegiatan lomba dan seminar dalam acara HARTIK, berkoordinasi dengan panitia lain.'),
(3, 'Kepanitiaan', 'RTL Teknik Informatika UMMI', 'Ketua Divisi Acara', 'Sep 2024', 'Merancang dan mengelola kegiatan pengkaderan mahasiswa baru serta menyusun timeline kegiatan.'),
(4, 'Kepanitiaan', 'Konser HARTIK UMMI', 'Liaison Officer (LO)', 'Okt 2024', 'Mendampingi guest star dan memastikan kebutuhan artis terpenuhi selama konser.');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `deskripsi`, `link`) VALUES
(1, 'Desain UI Sistem Pencatatan Hutang', 'Merancang sistem antarmuka pencatatan hutang berbasis mobile dengan Figma. Fokus pada kemudahan interaksi dan tampilan minimalis.', 'https://www.figma.com/design/hsFc4gfuZ9LJ6tYhxkF2wR/sipetang?t=1sPRtHwXgOB4d0VX-0'),
(2, 'Aplikasi RiceGo', 'Merancang UI RiceGo atau aplikasi pemesaran online khusus nasi goreng berbasis mobile untuk pencintas nasgor', 'https://www.figma.com/design/6ZAk1d7hxtifjNetpRTZON/nasi-goreng?node-id=0-1&p=f&t=jtkwJvxRsLyZefXl-0'),
(3, 'Desain UI Pengingat Jadwal', 'Mendesain prototipe UI aplikasi pengingat jadwal dengan pendekatan clean & modern.', 'https://www.figma.com/design/pq5uye6mqshxeReH4wO5l1/aplikasi-pengingat-jadwal?node-id=0-1&p=f&t=J9We3NHaouiY7G1M-0'),
(4, 'Website Portofolio Pribadi', 'Website pribadi berisi profil, pengalaman, dan portofolio yang dibuat menggunakan Html dan Css', 'https://zuwwa.github.io/portofolio/');

-- --------------------------------------------------------

--
-- Table structure for table `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id` int NOT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sosial_media`
--

INSERT INTO `sosial_media` (`id`, `platform`, `username`, `link`, `icon`) VALUES
(1, 'LinkedIn', '/nazwaakmalia', 'https://www.linkedin.com/in/nazwaakmalia', 'linkedin'),
(2, 'GitHub', '/zuwwa', 'https://github.com/zuwwa', 'github');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minat`
--
ALTER TABLE `minat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `minat`
--
ALTER TABLE `minat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
