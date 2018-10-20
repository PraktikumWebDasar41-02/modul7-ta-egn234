-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 03:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul7`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal7`
--

CREATE TABLE `t_jurnal7` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `prodi` varchar(5) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(40) NOT NULL,
  `motto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal7`
--

INSERT INTO `t_jurnal7` (`nama`, `nim`, `tgl_lahir`, `jk`, `prodi`, `fakultas`, `asal`, `motto`) VALUES
('egan', '6701174110', '2013-01-01', 'Laki-laki', 'S1TK', 'Fakultas Teknik Elektro', 'qwdsasdwe ', 'asds casc'),
('rizsa', '1287592381', '2018-10-14', 'Laki-laki', 'D3MI', 'Fakultas Ilmu Terapan', 'qwsc qwd', 'qweqweqdsd '),
('amien', '8476391047', '2012-01-02', 'Laki-laki', 'D3MI', 'Fakultas Ilmu Terapan', 'SAQ', 'asdadasdasdadad'),
('iniyusuf', '2727272727', '2018-10-10', 'Laki-laki', 'D3IF', 'Fakultas Informatika', 'jpdqipwdnq', 'ksnoqwbdoqb'),
('ayan', '8888888888', '2006-02-13', 'Laki-laki', 'D3IF', 'Fakultas Informatika', 'qwdsasdwe ', 'dfhbndfn xd gdx'),
('admin', '1234567890', '2018-10-24', 'Perempuan', 'D3MI', 'Fakultas Informatika', 'alllll', 'nn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
