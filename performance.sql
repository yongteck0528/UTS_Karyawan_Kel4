-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 07:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan_kel4`
--

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `nik` int(8) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_kerja` enum('Tetap','Tidak Tetap') NOT NULL,
  `position` varchar(10) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `responsibility` decimal(10,2) NOT NULL,
  `teamwork` decimal(10,2) NOT NULL,
  `management_time` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`nik`, `foto`, `nama`, `status_kerja`, `position`, `tgl_penilaian`, `responsibility`, `teamwork`, `management_time`, `total`, `grade`) VALUES
(31234390, 'Andy-6543e3c1422f5.png', 'Andy', 'Tidak Tetap', 'Staff', '2023-11-01', '99.00', '32.00', '76.00', '65.30', 'B'),
(31327367, 'Anna-6543e4b1ed4fa.png', 'Anna', 'Tidak Tetap', 'Sales', '2023-11-26', '11.00', '40.00', '30.00', '28.30', 'D'),
(32112347, 'Bambang-6543e43ecffe8.png', 'Bambang', 'Tidak Tetap', 'IT Support', '2023-11-14', '23.00', '70.00', '44.00', '48.10', 'C'),
(32129988, 'Raja-6543e3087f79f.png', 'Raja', 'Tetap', 'CEO', '2023-11-03', '10.00', '5.00', '20.00', '11.00', 'D'),
(32210010, 'Alvin Hartono-6543bbfb9953e.png', 'Alvin Hartono', 'Tetap', 'Direktur K', '2023-11-30', '90.00', '87.00', '80.00', '85.80', 'A'),
(32210011, 'Lim Yong Teck-6543bc2c67671.png', 'Lim Yong Teck', 'Tetap', 'Direktur I', '2023-11-30', '90.00', '80.00', '80.00', '83.00', 'A'),
(32210016, 'Agnes-6543e70c68fb9.png', 'Agnes', 'Tetap', 'Sales', '2023-11-30', '88.00', '30.00', '90.00', '65.40', 'B'),
(32210022, 'William-6543e25a56939-1668900542.png', 'William', 'Tidak Tetap', 'Staff', '2023-12-07', '50.00', '70.00', '40.00', '52.00', 'C'),
(32210072, 'Septian-6543bce314d8d.png', 'Septian', 'Tidak Tetap', 'Manager R&', '2023-12-07', '90.00', '80.00', '20.00', '59.00', 'C'),
(32210075, 'Daniel Alexander-6543bc82a6e8b.png', 'Daniel Alexander', 'Tidak Tetap', 'Manager IT', '2023-12-07', '70.00', '80.00', '80.00', '77.00', 'B'),
(32210077, 'Kindy Joy Jonathan -6543bc53e6048.png', 'Kindy Joy Jonathan ', 'Tetap', 'Direktur M', '2023-11-30', '80.00', '89.00', '90.00', '86.60', 'A'),
(32472839, 'Jope-6543e58e799f8.png', 'Jope', 'Tidak Tetap', 'Desainer', '2023-11-19', '11.00', '59.00', '48.00', '41.30', 'C'),
(32657711, 'Jennie-6543e7521e3e9.png', 'Jennie', 'Tidak Tetap', 'Staff', '2023-11-21', '68.00', '10.00', '65.00', '43.90', 'C'),
(32778712, 'Ferdinand-6543e6e0171c5.png', 'Ferdinand', 'Tetap', 'IT Support', '2023-11-22', '88.00', '99.00', '33.00', '75.90', 'B'),
(32781122, 'PauPau-6543e4045f4eb.png', 'PauPau', 'Tetap', 'Customer S', '2023-11-20', '34.00', '78.00', '98.00', '70.80', 'B'),
(32890011, 'Ricky-6543e6b23d4a6.png', 'Ricky', 'Tetap', 'IT Support', '2023-11-23', '100.00', '89.00', '28.00', '74.00', 'B'),
(34117362, 'Gajah-6543e389f1a98.png', 'Gajah', 'Tetap', 'Staff', '2023-11-21', '89.00', '26.00', '33.00', '47.00', 'C'),
(34218823, 'Donkey-6543e33d06023.png', 'Donkey', 'Tetap', 'OB', '2023-11-08', '39.00', '12.00', '100.00', '46.50', 'C'),
(34532134, 'Jennifer-6543e4739238b.png', 'Jennifer', 'Tidak Tetap', 'Sales', '2023-11-23', '88.00', '100.00', '50.00', '81.40', 'A'),
(34671234, 'Andrew-6543e8085c682.png', 'Andrew', 'Tetap', 'Sales', '2023-11-24', '2.00', '4.00', '38.00', '13.60', 'D'),
(35622113, 'Kelly-6543e83f9885a.png', 'Kelly', 'Tetap', 'Staff', '2023-11-28', '28.00', '100.00', '99.00', '78.10', 'B'),
(35712345, 'Arief-6543e5505dab0.png', 'Arief', 'Tetap', 'Manager', '2023-11-21', '89.00', '60.00', '33.00', '60.60', 'B'),
(35721143, 'Anne-6543e4df0bc95.png', 'Anne', 'Tidak Tetap', 'Sales', '2023-11-25', '100.00', '88.00', '90.00', '92.20', 'A'),
(39866123, 'Rose-6543e7dd0f63e.png', 'Rose', 'Tetap', 'CTO', '2023-11-14', '8.00', '1.00', '67.00', '22.90', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
