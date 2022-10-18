-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(255) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah_tersedia` int(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `nama_buku`, `gambar`, `status`, `jumlah_tersedia`, `tanggal_pinjam`, `tanggal_pengembalian`) VALUES
(6, 'Harry Potter', 'harrypoter.jpg', 'Sudah Dikembalikan', 10, '2022-10-17', '2022-10-24'),
(7, 'Naruto', 'naruto.jpg', 'Sudah Dikembalikan', 6, '2022-10-17', '2022-10-24'),
(8, 'Bleach', 'bleach.jpg', 'Sudah Dikembalikan', 17, '2022-10-17', '2022-10-24'),
(9, 'One Piece', 'download.jpg', 'Sudah Dikembalikan', 1, '2022-10-17', '2022-10-24'),
(12, 'tes', 'deddy.jpg', 'Dipinjam', 9, '2022-10-17', '2022-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe_karya` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_pembuatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id`, `judul`, `tipe_karya`, `penulis`, `tahun_pembuatan`) VALUES
(1, 'Pengaruh Interior Display Terhadap Keputusan Perilaku Konsumen Supermarket', 'Karya Ilmiah', 'Andreas Noah Jati Sesoca', '2022'),
(3, 'Pengaruh Rotasi Jabatan Terhadap Produktivitas Kerja Karyawan di PT. (masukkan nama PT.)', 'Karya Ilmiah', 'Andreas Noah Jati Sesoca, Gordianus Meidi Hartas', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_peminjaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_buku`, `id_user`, `status_peminjaman`) VALUES
(27, 6, 31, 'Sudah Dikembalikan'),
(28, 7, 31, 'Sudah Dikembalikan'),
(29, 8, 31, 'Sudah Dikembalikan'),
(30, 8, 31, 'Sudah Dikembalikan'),
(31, 7, 31, 'Sudah Dikembalikan'),
(32, 6, 31, 'Sudah Dikembalikan'),
(33, 6, 34, 'Sudah Dikembalikan'),
(34, 9, 34, 'Sudah Dikembalikan'),
(35, 7, 34, 'Sudah Dikembalikan'),
(36, 8, 34, 'Sudah Dikembalikan'),
(37, 6, 34, 'Sudah Dikembalikan'),
(38, 7, 34, 'Sudah Dikembalikan'),
(39, 12, 30, 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `student_staff`
--

CREATE TABLE `student_staff` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_staff`
--

INSERT INTO `student_staff` (`id`, `nama`, `npm`, `gambar`, `jabatan`) VALUES
(5, 'Andreas Noah Jati Sesoca', '200710610', 'deddy.jpg', 'Pustakawan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `username`, `password`, `email`, `nama_user`, `role`) VALUES
(1, 'imut lumine.png', ' henri', '$2y$10$hltwqFzF0k9VfchsKy/EWulI27yswPFa1i1a/iHYAUpqNkwhdbOSa', 'henritom1301@gmail.com', 'henri', 0),
(28, 'download.jpg', 'admin@gmail.com', '$2y$10$kJVuzEAtLyZ1Ws675EBbVeZXFL5fdWF2X7BFpsavDmYu6p4Q.oc/2', 'admin@gmail.com', 'admin', 0),
(30, 'deddy.jpg', 'zizou@gmail.com', '$2y$10$bq2QsP8FGooBKXvfJWr1MO9RF3KKra.GbyHw9ElFTsKF6rrX8Y9be', 'zizou@gmail.com', 'zizou', 0),
(31, 'deddy.jpg', 'rere123@gmail.com', '$2y$10$5TrA4M7MRECzi0.ncdONPOW.sCya83C5RBHBZ/1fOhVZ.6r3J8vo2', 'rere123@gmail.com', 'rere', 0),
(32, 'deddy.jpg', 'rere@gmail.com', '$2y$10$MWRU47GVj5Ikdk8FqiW/N.lS4r2lYE8REhr1KO26e12.75oli1IWe', 'rere@gmail.com', 'rere', 0),
(34, 'harrypoter.jpg', 'abcde@gmail.com', '$2y$10$HC22x1AsxGfaj4s0ywsbq.XPHsa4Bgwx8y6CzGDe/VXKdqgyiyBKm', 'abcde@gmail.com', 'abc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_staff`
--
ALTER TABLE `student_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `student_staff`
--
ALTER TABLE `student_staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
