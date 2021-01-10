-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 05:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sby`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taman`
--

CREATE TABLE `tbl_taman` (
  `id` varchar(255) NOT NULL,
  `nama_taman` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_taman`
--

INSERT INTO `tbl_taman` (`id`, `nama_taman`, `alamat`, `latitude`, `longitude`) VALUES
('1', 'Taman AIS Nasution Surabaya', 'Jl. Taman AIS Nasution, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271', '-7.267387016067072', '112.74418390086427'),
('10', 'Kebun Bibit Wonorejo', 'Kebun Bibit, Jl. Raya Wonorejo, Wonorejo, Rungkut, Surabaya City, East Java 60296', '-7.3123442115656605', '112.78891282560161'),
('11', 'Taman Keputran', 'Kayoon St No.90, Embong Kaliasin, Genteng, Surabaya City, East Java 60271', '-7.273214644729875', '112.74410052200415'),
('12', 'Taman Koreaik Kesehatan Kemenkes Surabaya', 'Jl. Dr. Soetomo No.67, DR. Soetomo, Kec. Tegalsari, Kota SBY, Jawa Timur 60264', '-7.283583794742844', '112.73606045443708'),
('13', 'Taman Kota Sungai Surabaya', 'Jl. Gubeng Pojok, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', '-7.265899174094135', '112.75088173633898'),
('14', 'Taman Ronggolawe', 'Jl. Joyoboyo, Sawunggaling, Kec. Wonokromo, Kota SBY, Jawa Timur 60242', '-7.299716139185297', '112.7312379219015'),
('15', 'Hutan Kota Balas Klumprik', 'Jl. Balas Klumprik, Balas Klumprik, Kec. Wiyung, Kota SBY, Jawa Timur 60222', '-7.32964920784916', '112.69126204812747'),
('16', 'Taman Mayangkara', 'Wonokromo, Kec. Wonokromo, Kota SBY, Jawa Timur 60243', '-7.30698190368268', '112.73553663886324'),
('17', 'Taman Surya', 'Jl. Taman Surya, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', '-7.260159349980782', '112.74674377633012'),
('18', 'Taman Anggrek Surabaya', 'Sememi, Kec. Benowo, Kota SBY, Jawa Timur 60198', '-7.247845493402651', '112.64535686954916'),
('19', 'Taman Buah Undaan', 'Jl. Penjaringan Tim., Penjaringan Sari, Kec. Rungkut, Kota SBY, Jawa Timur 60297', '-7.318149124675275', '112.78416304588949'),
('2', 'Taman Bungkul', 'Taman Bungkul St, Darmo, Wonokromo, Surabaya City, East Java 60241', '-7.291375713022152', '112.73979389744463'),
('20', 'Taman Jembatan Ujung Galuh', 'Jl. Ngagel, Ngagel, Kec. Wonokromo, Kota SBY, Jawa Timur 60241', '-7.291055468482694', '112.74282746793001'),
('21', 'Taman Teratai Surabaya', 'Jl. Teratai No.4, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136', '-7.255110137700584', '112.75559202560127'),
('22', 'Taman Kunang-Kunang', 'Jl. Penjaringan Tim., Penjaringan Sari, Kec. Rungkut, Kota SBY, Jawa Timur 60297', '-7.318149124675275', '112.78416304588949'),
('23', 'Taman Biliton', 'Jl. Raya Gubeng No.23, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281', '-7.270997524508305', '112.75014109676566'),
('24', 'Taman Apsari', 'Taman Apsari St No.63, Embong Kaliasin, Genteng, Surabaya City, East Java 60271', '-7.263602766548511', '112.74253001025842'),
('25', 'Taman Pakal', 'Jl. Raya Babat Jerawat No.1A, Babat Jerawat, Kec. Pakal, Kota SBY, Jawa Timur 60197', '-7.242082824916495', '112.62976883334258'),
('3', 'Taman Harmoni Keputih', 'Jl. Keputih Tegal Tim. II No.249, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111', '-7.295018896948784', '112.8034208219014'),
('4', 'Taman Prestasi Surabaya', 'Jl. Ketabang Kali No.6, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', '-7.261491601779862', '112.74284130117498'),
('5', 'Taman Mundu', 'Jl. Juwet, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136', '-7.251700381938384', '112.75465194094414'),
('6', 'Suroboyo Park', 'Jl. Pantai Kenjeran, Kedung Cowek, Kec. Bulak, Kota SBY, Jawa Timur 60125', '-7.225415269339035', '112.78797826607972'),
('7', 'Taman Flora Bratang Surabaya', 'Jl. Bratang Binangun, Baratajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60284', '-7.294298368711618', '112.76175339676577'),
('8', 'Taman Pelangi', 'Jl. Ahmad Yani No.138, Gayungan, Kec. Gayungan, Kota SBY, Jawa Timur 60235', '-7.327560394711871', '112.73122419676612'),
('9', 'Taman Persahabatan', 'Jl. Sulawesi No.67, Ngagel, Kec. Wonokromo, Kota SBY, Jawa Timur 60265', '-7.276674154115821', '112.74597950930183');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_taman`
--
ALTER TABLE `tbl_taman`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
