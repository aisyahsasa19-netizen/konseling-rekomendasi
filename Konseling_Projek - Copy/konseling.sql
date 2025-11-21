-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2025 at 04:12 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `ididentitas` int NOT NULL,
  `nis` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `kelas` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`ididentitas`, `nis`, `nama`, `kelas`) VALUES
(2, '17006', 'ASYIFA RIDHA SALSABILA', '11'),
(3, '17063', 'FADHILAH MAIYANTI', '11'),
(4, '17216', 'NIMAS AYU SESOCA DELIMA\r\n', '11'),
(5, '17266', 'SALWA MARYAM AULIA NISSA SAFIYAH\r\n', '11'),
(6, '17083', 'GALUH AJENG PUTRI PARASWATI', '11'),
(7, '17082', 'GADIES MALFACHESTTA ZAMAIKA', '11'),
(8, '17077', 'FATIKA PUSPA TRIANTONO', '11'),
(9, '17109', 'JEVA MEIDINA ALFINA SYAHRIN', '11'),
(10, '17097', 'HEAVEN HANDIKA ANUGRAH PRATAMA', '11'),
(11, '17098', 'HUSENI SYAHRIR RAMADHANI', '11'),
(15, '10000', 'bbbb', '11'),
(16, '12345', 'Alisha Nathania Utomo Putri', '11');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `idkriteria` int NOT NULL,
  `namakriteria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `bobot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`idkriteria`, `namakriteria`, `jenis`, `bobot`) VALUES
(1, 'nilai', 'benefit', '0.027'),
(2, 'kehadiran', 'benefit', '0.4083'),
(3, 'kedisiplinan', 'benefit', '0.2416'),
(4, 'kesejahteraan', 'cost', '0.1583'),
(5, 'kondisi ses', 'cost', '0.1027'),
(6, 'kondisi kesehatan', 'cost', '0.061');

-- --------------------------------------------------------

--
-- Table structure for table `matriks`
--

CREATE TABLE `matriks` (
  `idmatriks` int NOT NULL,
  `ididentitas` int DEFAULT NULL,
  `idkriteria` int DEFAULT NULL,
  `value` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matriks`
--

INSERT INTO `matriks` (`idmatriks`, `ididentitas`, `idkriteria`, `value`) VALUES
(1, 2, 1, '89.7'),
(2, 2, 2, '108\r\n'),
(3, 2, 3, '10'),
(4, 2, 4, '2'),
(5, 2, 5, '1'),
(6, 2, 6, '1'),
(7, 3, 1, '88.7'),
(8, 3, 2, '109'),
(9, 3, 3, '10'),
(10, 3, 4, '2'),
(11, 3, 5, '2\r\n'),
(12, 3, 6, '2'),
(13, 4, 1, '88.2\r\n'),
(14, 4, 2, '109'),
(15, 4, 3, '10\r\n'),
(16, 4, 4, '1\r\n'),
(17, 4, 5, '1\r\n'),
(18, 4, 6, '2\r\n'),
(19, 5, 1, '88.1\r\n'),
(20, 5, 2, '109\r\n'),
(21, 5, 3, '10\r\n'),
(22, 5, 4, '3\r\n'),
(23, 5, 5, '2\r\n'),
(24, 5, 6, '2\r\n'),
(25, 6, 1, '87.2\r\n'),
(26, 6, 2, '108\r\n'),
(27, 6, 3, '10\r\n'),
(28, 6, 4, '3\r\n'),
(29, 6, 5, '2\r\n'),
(30, 6, 6, '2\r\n'),
(31, 7, 1, '86.8\r\n'),
(32, 7, 2, '109\r\n'),
(33, 7, 3, '10\r\n'),
(34, 7, 4, '3\r\n'),
(35, 7, 5, '2\r\n'),
(36, 7, 6, '1\r\n'),
(37, 8, 1, '86.7'),
(38, 8, 2, '108\r\n'),
(39, 8, 3, '10\r\n'),
(40, 8, 4, '3\r\n'),
(41, 8, 5, '2\r\n'),
(42, 8, 6, '2\r\n'),
(43, 9, 1, '86.3'),
(44, 9, 2, '109\r\n'),
(45, 9, 3, '10\r\n'),
(46, 9, 4, '3'),
(47, 9, 5, '2\r\n'),
(48, 9, 6, '2\r\n'),
(49, 10, 1, '85\r\n'),
(50, 10, 2, '108\r\n'),
(51, 10, 3, '10\r\n'),
(52, 10, 4, '4\r\n'),
(53, 10, 5, '3\r\n'),
(54, 10, 6, '4\r\n'),
(55, 11, 1, '84.5'),
(56, 11, 2, '109'),
(57, 11, 3, '10'),
(58, 11, 4, '1'),
(59, 11, 5, '2'),
(60, 11, 6, '1'),
(61, 10, 1, '90'),
(62, 16, 2, '109'),
(63, 15, 5, '3'),
(64, 15, 1, '10'),
(65, 15, 6, '3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jarak`
-- (See below for the actual view)
--
CREATE TABLE `v_jarak` (
`ididentitas` int
,`jarak_plus` double
,`jarak_minus` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_matriks`
-- (See below for the actual view)
--
CREATE TABLE `v_matriks` (
`ididentitas` int
,`nama` varchar(50)
,`idkriteria` int
,`namakriteria` varchar(50)
,`jenis` varchar(50)
,`bobot` varchar(50)
,`value` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_normalisasi`
-- (See below for the actual view)
--
CREATE TABLE `v_normalisasi` (
`ididentitas` int
,`nama` varchar(50)
,`idkriteria` int
,`normalisasi` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_normalisasi_terbobot`
-- (See below for the actual view)
--
CREATE TABLE `v_normalisasi_terbobot` (
`ididentitas` int
,`nama` varchar(50)
,`idkriteria` int
,`bobot_normal` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pembagi`
-- (See below for the actual view)
--
CREATE TABLE `v_pembagi` (
`idkriteria` int
,`pembagi` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_preferensi_ranking`
-- (See below for the actual view)
--
CREATE TABLE `v_preferensi_ranking` (
`ididentitas` int
,`nama` varchar(50)
,`jarak_plus` double
,`jarak_minus` double
,`nilai_preferensi` double
,`ranking` bigint unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_solusi`
-- (See below for the actual view)
--
CREATE TABLE `v_solusi` (
`idkriteria` int
,`jenis` varchar(50)
,`ideal_plus` double
,`ideal_minus` double
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`ididentitas`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`idkriteria`);

--
-- Indexes for table `matriks`
--
ALTER TABLE `matriks`
  ADD PRIMARY KEY (`idmatriks`),
  ADD KEY `FK_matriks_kriteria` (`idkriteria`),
  ADD KEY `FK_matriks_identitas` (`ididentitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `ididentitas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `idkriteria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matriks`
--
ALTER TABLE `matriks`
  MODIFY `idmatriks` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

-- --------------------------------------------------------

--
-- Structure for view `v_jarak`
--
DROP TABLE IF EXISTS `v_jarak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jarak`  AS SELECT `n`.`ididentitas` AS `ididentitas`, sqrt(sum(pow((`n`.`bobot_normal` - `s`.`ideal_plus`),2))) AS `jarak_plus`, sqrt(sum(pow((`n`.`bobot_normal` - `s`.`ideal_minus`),2))) AS `jarak_minus` FROM (`v_normalisasi_terbobot` `n` join `v_solusi` `s` on((`n`.`idkriteria` = `s`.`idkriteria`))) GROUP BY `n`.`ididentitas` ;

-- --------------------------------------------------------

--
-- Structure for view `v_matriks`
--
DROP TABLE IF EXISTS `v_matriks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_matriks`  AS SELECT `i`.`ididentitas` AS `ididentitas`, `i`.`nama` AS `nama`, `k`.`idkriteria` AS `idkriteria`, `k`.`namakriteria` AS `namakriteria`, `k`.`jenis` AS `jenis`, `k`.`bobot` AS `bobot`, `m`.`value` AS `value` FROM ((`matriks` `m` join `identitas` `i` on((`m`.`ididentitas` = `i`.`ididentitas`))) join `kriteria` `k` on((`m`.`idkriteria` = `k`.`idkriteria`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_normalisasi`
--
DROP TABLE IF EXISTS `v_normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_normalisasi`  AS SELECT `m`.`ididentitas` AS `ididentitas`, `m`.`nama` AS `nama`, `m`.`idkriteria` AS `idkriteria`, (`m`.`value` / `p`.`pembagi`) AS `normalisasi` FROM (`v_matriks` `m` join `v_pembagi` `p` on((`m`.`idkriteria` = `p`.`idkriteria`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_normalisasi_terbobot`
--
DROP TABLE IF EXISTS `v_normalisasi_terbobot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_normalisasi_terbobot`  AS SELECT `n`.`ididentitas` AS `ididentitas`, `n`.`nama` AS `nama`, `n`.`idkriteria` AS `idkriteria`, (`n`.`normalisasi` * `k`.`bobot`) AS `bobot_normal` FROM (`v_normalisasi` `n` join `kriteria` `k` on((`n`.`idkriteria` = `k`.`idkriteria`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pembagi`
--
DROP TABLE IF EXISTS `v_pembagi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pembagi`  AS SELECT `v_matriks`.`idkriteria` AS `idkriteria`, sqrt(sum(pow(`v_matriks`.`value`,2))) AS `pembagi` FROM `v_matriks` GROUP BY `v_matriks`.`idkriteria` ;

-- --------------------------------------------------------

--
-- Structure for view `v_preferensi_ranking`
--
DROP TABLE IF EXISTS `v_preferensi_ranking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_preferensi_ranking`  AS SELECT `j`.`ididentitas` AS `ididentitas`, `i`.`nama` AS `nama`, `j`.`jarak_plus` AS `jarak_plus`, `j`.`jarak_minus` AS `jarak_minus`, (`j`.`jarak_minus` / (`j`.`jarak_plus` + `j`.`jarak_minus`)) AS `nilai_preferensi`, dense_rank() OVER (ORDER BY (`j`.`jarak_minus` / (`j`.`jarak_plus` + `j`.`jarak_minus`)) desc ) AS `ranking` FROM (`v_jarak` `j` join `identitas` `i` on((`j`.`ididentitas` = `i`.`ididentitas`))) ORDER BY `ranking` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_solusi`
--
DROP TABLE IF EXISTS `v_solusi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_solusi`  AS SELECT `nt`.`idkriteria` AS `idkriteria`, `k`.`jenis` AS `jenis`, (case when (`k`.`jenis` = 'benefit') then max(`nt`.`bobot_normal`) else min(`nt`.`bobot_normal`) end) AS `ideal_plus`, (case when (`k`.`jenis` = 'benefit') then min(`nt`.`bobot_normal`) else max(`nt`.`bobot_normal`) end) AS `ideal_minus` FROM (`v_normalisasi_terbobot` `nt` join `kriteria` `k` on((`nt`.`idkriteria` = `k`.`idkriteria`))) GROUP BY `nt`.`idkriteria`, `k`.`jenis` ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matriks`
--
ALTER TABLE `matriks`
  ADD CONSTRAINT `FK_matriks_identitas` FOREIGN KEY (`ididentitas`) REFERENCES `identitas` (`ididentitas`),
  ADD CONSTRAINT `FK_matriks_kriteria` FOREIGN KEY (`idkriteria`) REFERENCES `kriteria` (`idkriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
