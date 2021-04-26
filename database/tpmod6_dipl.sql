-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 03:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpmod6_dipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `KodeBuku` int(10) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Penerbit` varchar(30) NOT NULL,
  `Stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `idDenda` int(10) NOT NULL,
  `Denda` int(10) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(15) NOT NULL,
  `NamaMhs` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NamaMhs`, `Email`, `Password`) VALUES
(1301184141, 'Aawan Arwan', 'awanarwan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idPeminjaman` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `KodeBuku` int(10) NOT NULL,
  `KodeRuangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pencarian`
--

CREATE TABLE `pencarian` (
  `idPencarian` int(10) NOT NULL,
  `NIM` int(15) NOT NULL,
  `KodeBuku` int(10) NOT NULL,
  `KodeRuangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `idPengembalian` int(10) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `idPeminjaman` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NIM` int(15) NOT NULL,
  `NIP` int(15) NOT NULL,
  `idPeminjaman` int(10) NOT NULL,
  `idPengembalian` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pustakawan`
--

CREATE TABLE `pustakawan` (
  `NIP` int(15) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `idDenda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `KodeRuangan` int(10) NOT NULL,
  `Kapasitas` int(10) NOT NULL,
  `Jadwal` varchar(30) NOT NULL,
  `NamaRuangan` varchar(30) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`KodeBuku`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`idDenda`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idPeminjaman`),
  ADD KEY `KodeBuku` (`KodeBuku`),
  ADD KEY `KodeRuangan` (`KodeRuangan`);

--
-- Indexes for table `pencarian`
--
ALTER TABLE `pencarian`
  ADD PRIMARY KEY (`idPencarian`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `KodeBuku` (`KodeBuku`),
  ADD KEY `KodeRuangan` (`KodeRuangan`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`idPengembalian`),
  ADD KEY `idPeminjaman` (`idPeminjaman`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `idPeminjaman` (`idPeminjaman`),
  ADD KEY `idPengembalian` (`idPengembalian`);

--
-- Indexes for table `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `idDenda` (`idDenda`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`KodeRuangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `KodeBuku` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `idDenda` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `NIM` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301184142;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idPeminjaman` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pencarian`
--
ALTER TABLE `pencarian`
  MODIFY `idPencarian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `idPengembalian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idPengguna` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pustakawan`
--
ALTER TABLE `pustakawan`
  MODIFY `NIP` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `KodeRuangan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`KodeRuangan`) REFERENCES `ruangan` (`KodeRuangan`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`KodeBuku`) REFERENCES `buku` (`KodeBuku`);

--
-- Constraints for table `pencarian`
--
ALTER TABLE `pencarian`
  ADD CONSTRAINT `pencarian_ibfk_1` FOREIGN KEY (`KodeRuangan`) REFERENCES `ruangan` (`KodeRuangan`),
  ADD CONSTRAINT `pencarian_ibfk_2` FOREIGN KEY (`KodeBuku`) REFERENCES `buku` (`KodeBuku`),
  ADD CONSTRAINT `pencarian_ibfk_3` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`idPeminjaman`) REFERENCES `peminjaman` (`idPeminjaman`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `pengguna_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `pustakawan` (`NIP`),
  ADD CONSTRAINT `pengguna_ibfk_3` FOREIGN KEY (`idPengembalian`) REFERENCES `pengembalian` (`idPengembalian`),
  ADD CONSTRAINT `pengguna_ibfk_4` FOREIGN KEY (`idPeminjaman`) REFERENCES `peminjaman` (`idPeminjaman`);

--
-- Constraints for table `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD CONSTRAINT `pustakawan_ibfk_1` FOREIGN KEY (`idDenda`) REFERENCES `denda` (`idDenda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
