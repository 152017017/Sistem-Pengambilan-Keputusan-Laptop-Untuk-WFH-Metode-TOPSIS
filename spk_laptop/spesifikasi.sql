-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 12:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spesifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `id_laptop` int(4) NOT NULL,
  `nama_laptop` varchar(64) NOT NULL,
  `harga_laptop` varchar(64) NOT NULL,
  `layar_laptop` varchar(64) NOT NULL,
  `kamera_laptop` varchar(64) NOT NULL,
  `baterai_laptop` varchar(64) NOT NULL,
  `ram_laptop` varchar(64) NOT NULL,
  `hdd_laptop` varchar(64) NOT NULL,
  `processor_laptop` varchar(64) NOT NULL,
  `harga_angka` varchar(1) NOT NULL,
  `layar_angka` varchar(1) NOT NULL,
  `kamera_angka` varchar(1) NOT NULL,
  `baterai_angka` varchar(1) NOT NULL,
  `ram_angka` varchar(1) NOT NULL,
  `hdd_angka` varchar(1) NOT NULL,
  `processor_angka` varchar(1) NOT NULL,
  `url_laptop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spesifikasi`
--

INSERT INTO `spesifikasi` (`id_laptop`, `nama_laptop`, `harga_laptop`, `layar_laptop`, `kamera_laptop`, `baterai_laptop`, `ram_laptop`, `hdd_laptop`, `processor_laptop`, `harga_angka`, `layar_angka`, `kamera_angka`, `baterai_angka`, `ram_angka`, `hdd_angka`, `processor_angka`, `url_laptop`) VALUES
(1, 'Microsoft Surface Laptop 3', '24500000', '13.5', '720', '11.5', '8', '128', 'AMD', '4', '1', '1', '3', '1', '1', '1', 'https://id.priceprice.com/Microsoft-Surface-Laptop-3-13-5-29574/'),
(2, 'Apple Macbook Air', '11531000', '13.3', '720', '15 - 18', '8', '256', 'Intel', '2', '1', '1', '4', '1', '2', '2', 'https://id.priceprice.com/Apple-MacBook-Air-13-3-MQD32ID-A-Mid-2017-28206/'),
(3, 'HP Chromebook X360', '4199000', '14', '720', '11.3', '8', '64', 'Intel', '1', '3', '1', '3', '1', '1', '2', 'https://ruanglaptop.com/review-hp-chromebook-x360-12b/'),
(4, 'Lenovo Ideapad 3', '4400000', '14', '720', '6 - 8', '8', '1024', 'AMD', '1', '3', '1', '1', '1', '4', '1', 'https://www.lenovo.com/id/in/laptops/ideapad/s-series/IdeaPad-3i-14ITL5/p/88IPS301420'),
(5, 'Razer Blade 15', '20000000', '15.6', '1080', '8 - 9', '16 - 32', '256', 'Intel', '3', '5', '2', '2', '3', '2', '2', 'https://id.priceprice.com/Razer-Blade-15-26730/'),
(6, 'Dell XPS 15', '24235000', '15.6', '720', '10', '8 - 64', '256 - 2048', 'Intel', '4', '5', '1', '2', '4', '5', '2', 'https://id.priceprice.com/Dell-XPS-15-1921/'),
(7, 'Lenovo ThinkPad X1 Carbon (6th Gen)', '21500000', '14', '720', '15', '16', '1024', 'Intel', '3', '3', '1', '4', '2', '4', '2', 'https://www.lenovo.com/id/in/laptops/thinkpad/thinkpad-x1/ThinkPad-X1-Carbon-6th-Gen/p/22TP2TXX16G'),
(8, 'Huawei MateBook X Pro', '28599000', '13.9', '720', '9.5', '8 - 16', '512', 'Intel', '5', '1', '1', '2', '2', '3', '2', 'https://id.priceprice.com/HUAWEI-MateBook-X-Pro-26056/'),
(9, 'Google Pixelbook Go', '18000000', '13.3', '1080', '12', '8 - 16', '128 - 256', 'Intel', '3', '1', '2', '3', '2', '2', '2', 'https://id.priceprice.com/Google-Pixelbook-Go-33834/'),
(10, 'Microsoft Surface Book 2', '12000000', '13.5', '1080', '17', '8 - 16', '256 - 1024', 'Intel', '2', '1', '2', '4', '2', '3', '2', 'https://id.priceprice.com/Microsoft-Surface-Book-2-13-5-24669/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id_laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  MODIFY `id_laptop` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
