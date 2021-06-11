-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 08:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `Stock` int(10) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`KodeBuku`, `Judul`, `Penerbit`, `Stock`, `Gambar`) VALUES
(1, 'haloo', 'rahma', 1, 'A_Chic_Logo_Design_for_The_School_of_Styling_-_Saffron_Avenue1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `idDenda` int(10) NOT NULL,
  `Hari` int(100) NOT NULL,
  `TotalDenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`idDenda`, `Hari`, `TotalDenda`) VALUES
(2, 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(15) NOT NULL,
  `idPengguna` int(10) NOT NULL,
  `NamaMhs` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `idPengguna`, `NamaMhs`) VALUES
(1301184345, 3, 'Rahma');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idPeminjaman` int(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `KodeBuku` int(10) DEFAULT NULL,
  `KodeRuangan` int(10) DEFAULT NULL,
  `NIM` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`idPeminjaman`, `Tanggal`, `KodeBuku`, `KodeRuangan`, `NIM`) VALUES
(3, '2021-06-03', 1, NULL, 1301184345);

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
  `Tanggal` date NOT NULL,
  `idPeminjaman` int(10) NOT NULL,
  `NIM` int(15) NOT NULL,
  `idDenda` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`idPengembalian`, `Judul`, `Tanggal`, `idPeminjaman`, `NIM`, `idDenda`) VALUES
(1, 'haloo', '2021-06-03', 3, 1301184345, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `Email`, `Password`) VALUES
(0, 'sukma@gmail.com', '123456'),
(3, 'rahma@gmail.com', '123456'),
(5, 'pustakawan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pustakawan`
--

CREATE TABLE `pustakawan` (
  `NIP` int(15) NOT NULL,
  `idPengguna` int(10) NOT NULL,
  `Nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pustakawan`
--

INSERT INTO `pustakawan` (`NIP`, `idPengguna`, `Nama`) VALUES
(654321, 5, 'Pustakawan');

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
  ADD PRIMARY KEY (`NIM`),
  ADD UNIQUE KEY `idPengguna` (`idPengguna`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idPeminjaman`),
  ADD KEY `KodeBuku` (`KodeBuku`),
  ADD KEY `KodeRuangan` (`KodeRuangan`),
  ADD KEY `NIM` (`NIM`);

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
  ADD UNIQUE KEY `idDenda` (`idDenda`),
  ADD KEY `idPeminjaman` (`idPeminjaman`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indexes for table `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `idPengguna` (`idPengguna`);

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
  MODIFY `KodeBuku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `idDenda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `NIM` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301184346;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idPeminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pencarian`
--
ALTER TABLE `pencarian`
  MODIFY `idPencarian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `idPengembalian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idPengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pustakawan`
--
ALTER TABLE `pustakawan`
  MODIFY `NIP` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=654322;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `KodeRuangan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`idPengguna`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`KodeRuangan`) REFERENCES `ruangan` (`KodeRuangan`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`KodeBuku`) REFERENCES `buku` (`KodeBuku`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

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
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`idPeminjaman`) REFERENCES `peminjaman` (`idPeminjaman`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`idDenda`) REFERENCES `denda` (`idDenda`);

--
-- Constraints for table `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD CONSTRAINT `pustakawan_ibfk_1` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`idPengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
