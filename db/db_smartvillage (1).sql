-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 02:46 AM
-- Server version: 10.2.12-MariaDB-10.2.12+maria~xenial-log
-- PHP Version: 7.1.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smartvillage`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Budha'),
(5, 'Hindu'),
(6, 'Konghuchu');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `id` int(11) NOT NULL,
  `nama_dusun` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id`, `nama_dusun`) VALUES
(1, 'Mangunrejo'),
(2, 'Krajan'),
(3, 'Mambil'),
(4, 'Sembung'),
(5, 'amamamama');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pembangunan`
--

CREATE TABLE `kategori_pembangunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pembangunan`
--

INSERT INTO `kategori_pembangunan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Jalan', '2017-11-26 13:36:16', '0000-00-00 00:00:00'),
(2, 'Jembatan', '2017-11-26 13:36:16', '0000-00-00 00:00:00'),
(3, 'Lampu Jalan', '2017-11-28 02:50:42', '0000-00-00 00:00:00'),
(4, 'Selokan', '2017-12-02 21:04:23', '0000-00-00 00:00:00'),
(5, 'Pos Ronda', '2018-01-13 16:33:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lapor_aduan`
--

CREATE TABLE `lapor_aduan` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `pembangunan_id` int(11) NOT NULL,
  `status` enum('diverifikasi','ditolak','dipending','laporanbaru') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor_aduan`
--

INSERT INTO `lapor_aduan` (`id`, `foto`, `deskripsi`, `users_id`, `pembangunan_id`, `status`, `created_at`, `updated_at`) VALUES
(8, '12956812a4cf0e8d76a219e8640edd9d.png', 'test', 11, 1, 'diverifikasi', '2018-01-13 16:38:17', '2018-01-13 17:29:15'),
(9, '061a3d5925dec589d8121255d5004fb4.png', 'test', 11, 1, 'diverifikasi', '2018-01-14 07:43:38', '2018-01-14 10:03:33'),
(13, '407511032ebc9f6ef0ac6b1d741105f3.jpg', 'test', 11, 1, 'laporanbaru', '2018-01-14 07:50:32', '0000-00-00 00:00:00'),
(14, 'def19f49e4e9c51d18ca8e6dcb297472.jpg', 'test22', 11, 1, 'laporanbaru', '2018-01-14 07:57:05', '0000-00-00 00:00:00'),
(15, '', 'a', 1, 1, 'laporanbaru', '2018-01-14 14:45:39', '0000-00-00 00:00:00'),
(16, '351abf923f6ddf24c821bf38aa46a3b9.jpg', 'test', 11, 1, 'laporanbaru', '2018-01-15 13:08:52', '0000-00-00 00:00:00'),
(17, '0', 'test', 3, 1, 'laporanbaru', '2018-01-15 13:38:21', '0000-00-00 00:00:00'),
(18, '0', 'test', 3, 1, 'laporanbaru', '2018-01-15 14:33:01', '0000-00-00 00:00:00'),
(19, '0', 'test', 11, 1, 'laporanbaru', '2018-01-15 18:14:28', '0000-00-00 00:00:00'),
(21, '0', 'test', 11, 1, 'laporanbaru', '2018-01-15 18:34:07', '0000-00-00 00:00:00'),
(23, '0', 'test', 11, 1, 'laporanbaru', '2018-01-15 18:38:33', '0000-00-00 00:00:00'),
(24, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 00:47:15', '0000-00-00 00:00:00'),
(25, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 00:49:16', '0000-00-00 00:00:00'),
(26, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:09', '0000-00-00 00:00:00'),
(27, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:19', '0000-00-00 00:00:00'),
(28, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:20', '0000-00-00 00:00:00'),
(29, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:21', '0000-00-00 00:00:00'),
(30, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:21', '0000-00-00 00:00:00'),
(31, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:21', '0000-00-00 00:00:00'),
(32, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:22', '0000-00-00 00:00:00'),
(33, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:22', '0000-00-00 00:00:00'),
(34, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:22', '0000-00-00 00:00:00'),
(35, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:22', '0000-00-00 00:00:00'),
(36, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:22', '0000-00-00 00:00:00'),
(37, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:22', '0000-00-00 00:00:00'),
(38, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:23', '0000-00-00 00:00:00'),
(39, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:23', '0000-00-00 00:00:00'),
(40, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:25', '0000-00-00 00:00:00'),
(41, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:26', '0000-00-00 00:00:00'),
(42, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:26', '0000-00-00 00:00:00'),
(43, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:26', '0000-00-00 00:00:00'),
(44, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:27', '0000-00-00 00:00:00'),
(45, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:29', '0000-00-00 00:00:00'),
(46, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:29', '0000-00-00 00:00:00'),
(47, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:29', '0000-00-00 00:00:00'),
(48, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:29', '0000-00-00 00:00:00'),
(49, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:30', '0000-00-00 00:00:00'),
(50, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:30', '0000-00-00 00:00:00'),
(51, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:30', '0000-00-00 00:00:00'),
(52, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:30', '0000-00-00 00:00:00'),
(53, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:47', '0000-00-00 00:00:00'),
(54, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:51', '0000-00-00 00:00:00'),
(55, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:52', '0000-00-00 00:00:00'),
(56, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:52', '0000-00-00 00:00:00'),
(57, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:52', '0000-00-00 00:00:00'),
(58, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:52', '0000-00-00 00:00:00'),
(59, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:53', '0000-00-00 00:00:00'),
(60, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:53', '0000-00-00 00:00:00'),
(61, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:54:53', '0000-00-00 00:00:00'),
(62, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:11', '0000-00-00 00:00:00'),
(63, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:11', '0000-00-00 00:00:00'),
(64, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:12', '0000-00-00 00:00:00'),
(65, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:12', '0000-00-00 00:00:00'),
(66, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:12', '0000-00-00 00:00:00'),
(67, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:12', '0000-00-00 00:00:00'),
(68, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:13', '0000-00-00 00:00:00'),
(69, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:13', '0000-00-00 00:00:00'),
(70, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:13', '0000-00-00 00:00:00'),
(71, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:13', '0000-00-00 00:00:00'),
(72, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:53', '0000-00-00 00:00:00'),
(73, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:53', '0000-00-00 00:00:00'),
(74, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:54', '0000-00-00 00:00:00'),
(75, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:54', '0000-00-00 00:00:00'),
(76, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:54', '0000-00-00 00:00:00'),
(77, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:55:54', '0000-00-00 00:00:00'),
(78, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:02', '0000-00-00 00:00:00'),
(79, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:02', '0000-00-00 00:00:00'),
(80, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:03', '0000-00-00 00:00:00'),
(81, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:03', '0000-00-00 00:00:00'),
(82, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:03', '0000-00-00 00:00:00'),
(83, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:04', '0000-00-00 00:00:00'),
(84, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:04', '0000-00-00 00:00:00'),
(85, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:06', '0000-00-00 00:00:00'),
(86, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:06', '0000-00-00 00:00:00'),
(87, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:06', '0000-00-00 00:00:00'),
(88, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:06', '0000-00-00 00:00:00'),
(89, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:06', '0000-00-00 00:00:00'),
(90, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:10', '0000-00-00 00:00:00'),
(91, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:11', '0000-00-00 00:00:00'),
(92, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:11', '0000-00-00 00:00:00'),
(93, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:11', '0000-00-00 00:00:00'),
(94, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:15', '0000-00-00 00:00:00'),
(95, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:21', '0000-00-00 00:00:00'),
(96, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:21', '0000-00-00 00:00:00'),
(97, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:21', '0000-00-00 00:00:00'),
(98, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:30', '0000-00-00 00:00:00'),
(99, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:32', '0000-00-00 00:00:00'),
(100, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:32', '0000-00-00 00:00:00'),
(101, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:32', '0000-00-00 00:00:00'),
(102, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:33', '0000-00-00 00:00:00'),
(103, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:33', '0000-00-00 00:00:00'),
(104, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:33', '0000-00-00 00:00:00'),
(105, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:33', '0000-00-00 00:00:00'),
(106, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:33', '0000-00-00 00:00:00'),
(107, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:40', '0000-00-00 00:00:00'),
(108, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:41', '0000-00-00 00:00:00'),
(109, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:41', '0000-00-00 00:00:00'),
(110, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:41', '0000-00-00 00:00:00'),
(111, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:41', '0000-00-00 00:00:00'),
(112, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:41', '0000-00-00 00:00:00'),
(113, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:42', '0000-00-00 00:00:00'),
(114, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:42', '0000-00-00 00:00:00'),
(115, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:42', '0000-00-00 00:00:00'),
(116, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:42', '0000-00-00 00:00:00'),
(117, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:42', '0000-00-00 00:00:00'),
(118, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:42', '0000-00-00 00:00:00'),
(119, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:43', '0000-00-00 00:00:00'),
(120, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:43', '0000-00-00 00:00:00'),
(121, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:43', '0000-00-00 00:00:00'),
(122, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:43', '0000-00-00 00:00:00'),
(123, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:43', '0000-00-00 00:00:00'),
(124, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:44', '0000-00-00 00:00:00'),
(125, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:44', '0000-00-00 00:00:00'),
(126, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:44', '0000-00-00 00:00:00'),
(127, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:47', '0000-00-00 00:00:00'),
(128, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:47', '0000-00-00 00:00:00'),
(129, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:47', '0000-00-00 00:00:00'),
(130, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:47', '0000-00-00 00:00:00'),
(131, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:48', '0000-00-00 00:00:00'),
(132, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:48', '0000-00-00 00:00:00'),
(133, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:56:48', '0000-00-00 00:00:00'),
(134, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:07', '0000-00-00 00:00:00'),
(135, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:11', '0000-00-00 00:00:00'),
(136, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:12', '0000-00-00 00:00:00'),
(137, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:12', '0000-00-00 00:00:00'),
(138, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:12', '0000-00-00 00:00:00'),
(139, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:13', '0000-00-00 00:00:00'),
(140, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:13', '0000-00-00 00:00:00'),
(141, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:13', '0000-00-00 00:00:00'),
(142, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:13', '0000-00-00 00:00:00'),
(143, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:13', '0000-00-00 00:00:00'),
(144, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:14', '0000-00-00 00:00:00'),
(145, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:14', '0000-00-00 00:00:00'),
(146, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:14', '0000-00-00 00:00:00'),
(147, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:14', '0000-00-00 00:00:00'),
(148, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:14', '0000-00-00 00:00:00'),
(149, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:14', '0000-00-00 00:00:00'),
(150, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:15', '0000-00-00 00:00:00'),
(151, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:15', '0000-00-00 00:00:00'),
(152, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:15', '0000-00-00 00:00:00'),
(153, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:15', '0000-00-00 00:00:00'),
(154, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:16', '0000-00-00 00:00:00'),
(155, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:16', '0000-00-00 00:00:00'),
(156, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:16', '0000-00-00 00:00:00'),
(157, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:44', '0000-00-00 00:00:00'),
(158, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:44', '0000-00-00 00:00:00'),
(159, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:44', '0000-00-00 00:00:00'),
(160, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:44', '0000-00-00 00:00:00'),
(161, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 00:58:45', '0000-00-00 00:00:00'),
(162, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:40', '0000-00-00 00:00:00'),
(163, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:41', '0000-00-00 00:00:00'),
(164, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(165, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(166, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(167, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(168, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(169, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(170, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:42', '0000-00-00 00:00:00'),
(171, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:43', '0000-00-00 00:00:00'),
(172, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:43', '0000-00-00 00:00:00'),
(173, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:43', '0000-00-00 00:00:00'),
(174, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:43', '0000-00-00 00:00:00'),
(175, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:44', '0000-00-00 00:00:00'),
(176, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:44', '0000-00-00 00:00:00'),
(177, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:44', '0000-00-00 00:00:00'),
(178, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:44', '0000-00-00 00:00:00'),
(179, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:44', '0000-00-00 00:00:00'),
(180, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:45', '0000-00-00 00:00:00'),
(181, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:45', '0000-00-00 00:00:00'),
(182, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:45', '0000-00-00 00:00:00'),
(183, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:45', '0000-00-00 00:00:00'),
(184, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:35:45', '0000-00-00 00:00:00'),
(185, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:45', '0000-00-00 00:00:00'),
(186, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(187, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(188, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(189, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(190, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(191, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(192, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(193, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:36:51', '0000-00-00 00:00:00'),
(194, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:00', '0000-00-00 00:00:00'),
(195, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:05', '0000-00-00 00:00:00'),
(196, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:07', '0000-00-00 00:00:00'),
(197, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:07', '0000-00-00 00:00:00'),
(198, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:07', '0000-00-00 00:00:00'),
(199, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:08', '0000-00-00 00:00:00'),
(200, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:09', '0000-00-00 00:00:00'),
(201, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:09', '0000-00-00 00:00:00'),
(202, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:10', '0000-00-00 00:00:00'),
(203, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:51:11', '0000-00-00 00:00:00'),
(204, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:43', '0000-00-00 00:00:00'),
(205, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:44', '0000-00-00 00:00:00'),
(206, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:45', '0000-00-00 00:00:00'),
(207, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:45', '0000-00-00 00:00:00'),
(208, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:45', '0000-00-00 00:00:00'),
(209, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:45', '0000-00-00 00:00:00'),
(210, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:45', '0000-00-00 00:00:00'),
(211, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:46', '0000-00-00 00:00:00'),
(212, '0', 'terlalu lama', 11, 1, 'laporanbaru', '2018-01-16 01:52:46', '0000-00-00 00:00:00'),
(213, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 01:58:12', '0000-00-00 00:00:00'),
(214, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:05', '0000-00-00 00:00:00'),
(215, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:08', '0000-00-00 00:00:00'),
(216, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:09', '0000-00-00 00:00:00'),
(217, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:09', '0000-00-00 00:00:00'),
(218, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(219, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(220, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(221, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(222, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(223, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(224, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(225, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(226, '0', 'hsjsksndvhd', 11, 1, 'laporanbaru', '2018-01-16 01:59:16', '0000-00-00 00:00:00'),
(227, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:00:54', '0000-00-00 00:00:00'),
(228, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:00:55', '0000-00-00 00:00:00'),
(229, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:00:58', '0000-00-00 00:00:00'),
(230, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:00:59', '0000-00-00 00:00:00'),
(231, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:01:00', '0000-00-00 00:00:00'),
(232, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:01:00', '0000-00-00 00:00:00'),
(233, '0', 'syalaalla', 11, 1, 'laporanbaru', '2018-01-16 02:01:01', '0000-00-00 00:00:00'),
(235, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 02:05:50', '0000-00-00 00:00:00'),
(236, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 02:10:26', '0000-00-00 00:00:00'),
(238, '0', 'lama', 11, 1, 'laporanbaru', '2018-01-16 02:12:34', '0000-00-00 00:00:00'),
(239, '0', 'test', 11, 3, 'laporanbaru', '2018-01-16 02:13:55', '0000-00-00 00:00:00'),
(241, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 02:14:08', '0000-00-00 00:00:00'),
(242, '0', 'ada', 11, 1, 'laporanbaru', '2018-01-16 02:16:14', '0000-00-00 00:00:00'),
(243, '0', 'ada', 11, 1, 'laporanbaru', '2018-01-16 02:16:17', '0000-00-00 00:00:00'),
(244, '0', 'ada', 11, 1, 'laporanbaru', '2018-01-16 02:16:21', '0000-00-00 00:00:00'),
(245, '0', 'test', 3, 1, 'laporanbaru', '2018-01-16 02:20:37', '0000-00-00 00:00:00'),
(246, '0', 'hsh', 11, 1, 'laporanbaru', '2018-01-16 02:22:37', '0000-00-00 00:00:00'),
(247, '0', 'test', 11, 1, 'laporanbaru', '2018-01-16 02:23:27', '0000-00-00 00:00:00'),
(248, '0', 'lama bangettt', 11, 1, 'laporanbaru', '2018-01-16 02:24:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lapor_progress`
--

CREATE TABLE `lapor_progress` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `capaian_progress` float NOT NULL,
  `uraian_pekerjaan` text NOT NULL,
  `pembangunan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor_progress`
--

INSERT INTO `lapor_progress` (`id`, `image`, `tanggal`, `capaian_progress`, `uraian_pekerjaan`, `pembangunan_id`) VALUES
(1, '069b8c5b5243fedcc4a747ce055e7b5c.png', '2017-12-26', 0.234, 'aaaaaa', 1),
(2, 'e384b42ec3c6594cd4c8efdd20df9c25.jpg', '2017-12-28', 0.234, 'Wkkkkkkkkkk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `alamat`, `no_telp`, `email`, `users_id`) VALUES
(1, 'PT. CIPTA KARSA UTAMA', 'Ponorogo', '089644332212', 'cipta@cipta.com', 5),
(2, 'PT. JAYA MENGGALA PERKASA', 'Ponorogo', '089644332212', 'jaya@gmail.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'Pedagang'),
(2, 'PNS'),
(3, 'Polisi'),
(4, 'TNI'),
(5, 'Buruh'),
(6, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `pembangunan`
--

CREATE TABLE `pembangunan` (
  `id` int(11) NOT NULL,
  `nama_pembangunan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `anggaran` float NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `prosentase` float NOT NULL,
  `sumber_dana_pembangunan_id` int(11) NOT NULL,
  `kategori_pembangunan_id` int(11) NOT NULL,
  `status_pembangunan_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembangunan`
--

INSERT INTO `pembangunan` (`id`, `nama_pembangunan`, `foto`, `anggaran`, `tgl_mulai`, `tgl_selesai`, `longitude`, `latitude`, `keterangan`, `prosentase`, `sumber_dana_pembangunan_id`, `kategori_pembangunan_id`, `status_pembangunan_id`, `users_id`, `mitra_id`, `created_at`, `updated_at`) VALUES
(1, 'Jembatan Sembung', 'b55d93e4285cd470c2ff89eaeddff96c.jpg', 300000000, '2017-08-13', '2018-08-13', '2', '3', 'Kerusakan akibat tanah longsor', 0, 2, 2, 1, 3, 1, '2017-12-18 04:42:19', '2018-01-16 02:28:23'),
(2, 'Pembangunan Irigasi Jalan', 'd0973c254dbb84dc43ac395507db9b0f.jpg', 20000000, '2017-12-27', '2018-12-27', '12', '2', 'Untuk mencegah terjadinya banjir dan penyumbatan air pada musim hujan', 0, 1, 4, 1, 3, 2, '2017-12-27 18:10:54', '2018-01-16 02:29:13'),
(3, 'Pembangunan Selokan Jalan', '32130e335ca5057fe1e92c7eff236023.jpg', 23000000, '2018-01-08', '2018-05-22', '12', '1', 'Untuk mencegah air meluap dan mengurangi genangan air di jalan', 0, 2, 4, 1, 3, 1, '2018-01-15 10:54:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama`) VALUES
(1, 'SD/MI'),
(2, 'SLTP/SMP'),
(3, 'SLTA/SMA/SMK'),
(4, 'S1'),
(5, 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama_id` int(11) NOT NULL,
  `status_perkawinan` enum('Belum Menikah','Sudah Menikah') NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `rt_rw_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama_id`, `status_perkawinan`, `pekerjaan_id`, `pendidikan_id`, `rt_rw_id`, `created_at`, `updated_at`) VALUES
(1, '3515100014009026', 'Muhammad', 'Sidoarjo', '1997-08-22', 'L', 1, 'Belum Menikah', 6, 5, 2, '2017-12-05 05:56:34', '2017-12-28 16:02:17'),
(2, '3515100014009026', 'Widodo', 'Sidoarjo', '1978-12-05', '', 2, '', 1, 1, 4, '2017-12-05 06:00:22', '2017-12-28 16:02:30'),
(3, '3515100010012020', 'Syamsul Arif', 'Sidoarjo', '1992-12-02', 'P', 1, 'Belum Menikah', 1, 1, 9, '2017-12-05 06:16:04', '2018-01-13 17:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_pembangunan`
--

CREATE TABLE `request_pembangunan` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `kategori_pembangunan_id` int(11) NOT NULL,
  `status` enum('terverifikasi','ditindaklanjuti','requestbaru','') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_pembangunan`
--

INSERT INTO `request_pembangunan` (`id`, `judul`, `deskripsi`, `users_id`, `kategori_pembangunan_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'test', 'testtttt', 11, 1, 'requestbaru', '2018-01-14 15:42:54', '0000-00-00 00:00:00'),
(3, 'test', 'testtttt', 11, 1, 'requestbaru', '2018-01-14 15:46:09', '0000-00-00 00:00:00'),
(4, 'test', 'testtttt', 11, 1, 'requestbaru', '2018-01-14 15:48:53', '0000-00-00 00:00:00'),
(5, 'test', 'testtttt', 11, 3, 'requestbaru', '2018-01-14 15:49:01', '0000-00-00 00:00:00'),
(6, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-14 15:56:49', '0000-00-00 00:00:00'),
(8, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-14 15:57:01', '0000-00-00 00:00:00'),
(9, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:38', '0000-00-00 00:00:00'),
(10, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:43', '0000-00-00 00:00:00'),
(11, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:44', '0000-00-00 00:00:00'),
(12, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:44', '0000-00-00 00:00:00'),
(13, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:44', '0000-00-00 00:00:00'),
(14, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:44', '0000-00-00 00:00:00'),
(15, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:44', '0000-00-00 00:00:00'),
(16, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:45', '0000-00-00 00:00:00'),
(17, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:45', '0000-00-00 00:00:00'),
(18, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:45', '0000-00-00 00:00:00'),
(19, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:45', '0000-00-00 00:00:00'),
(20, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:45', '0000-00-00 00:00:00'),
(21, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:46', '0000-00-00 00:00:00'),
(22, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:46', '0000-00-00 00:00:00'),
(23, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:46', '0000-00-00 00:00:00'),
(24, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:46', '0000-00-00 00:00:00'),
(25, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:47', '0000-00-00 00:00:00'),
(26, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:47', '0000-00-00 00:00:00'),
(27, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:47', '0000-00-00 00:00:00'),
(28, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:48', '0000-00-00 00:00:00'),
(29, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:48', '0000-00-00 00:00:00'),
(30, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:48', '0000-00-00 00:00:00'),
(31, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:49', '0000-00-00 00:00:00'),
(32, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:49', '0000-00-00 00:00:00'),
(33, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:27:49', '0000-00-00 00:00:00'),
(34, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:03', '0000-00-00 00:00:00'),
(35, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:03', '0000-00-00 00:00:00'),
(36, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:03', '0000-00-00 00:00:00'),
(37, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:04', '0000-00-00 00:00:00'),
(38, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:04', '0000-00-00 00:00:00'),
(39, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:04', '0000-00-00 00:00:00'),
(40, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:04', '0000-00-00 00:00:00'),
(41, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:04', '0000-00-00 00:00:00'),
(42, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:04', '0000-00-00 00:00:00'),
(43, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:05', '0000-00-00 00:00:00'),
(44, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:05', '0000-00-00 00:00:00'),
(45, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:05', '0000-00-00 00:00:00'),
(46, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:05', '0000-00-00 00:00:00'),
(47, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:06', '0000-00-00 00:00:00'),
(48, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:06', '0000-00-00 00:00:00'),
(49, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:06', '0000-00-00 00:00:00'),
(50, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:07', '0000-00-00 00:00:00'),
(51, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:13', '0000-00-00 00:00:00'),
(52, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:13', '0000-00-00 00:00:00'),
(53, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:13', '0000-00-00 00:00:00'),
(54, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:16', '0000-00-00 00:00:00'),
(55, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:16', '0000-00-00 00:00:00'),
(56, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:17', '0000-00-00 00:00:00'),
(57, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:20', '0000-00-00 00:00:00'),
(58, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:20', '0000-00-00 00:00:00'),
(59, 'lampu jalan RT 1', 'rt 1 sampe hari ini masih gelap', 11, 1, 'requestbaru', '2018-01-15 09:30:22', '0000-00-00 00:00:00'),
(60, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:47', '0000-00-00 00:00:00'),
(61, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:47', '0000-00-00 00:00:00'),
(62, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:48', '0000-00-00 00:00:00'),
(63, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:48', '0000-00-00 00:00:00'),
(64, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:48', '0000-00-00 00:00:00'),
(65, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:48', '0000-00-00 00:00:00'),
(66, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:48', '0000-00-00 00:00:00'),
(67, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:48', '0000-00-00 00:00:00'),
(68, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:49', '0000-00-00 00:00:00'),
(69, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:49', '0000-00-00 00:00:00'),
(70, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:49', '0000-00-00 00:00:00'),
(71, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:49', '0000-00-00 00:00:00'),
(72, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:31:49', '0000-00-00 00:00:00'),
(73, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:32:17', '0000-00-00 00:00:00'),
(74, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:32:17', '0000-00-00 00:00:00'),
(75, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:32:17', '0000-00-00 00:00:00'),
(76, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:32:18', '0000-00-00 00:00:00'),
(77, 'pos ronda rt 1', 'sjskdmf', 11, 1, 'requestbaru', '2018-01-15 09:32:18', '0000-00-00 00:00:00'),
(78, 'test', 'testtttt', 11, 3, 'requestbaru', '2018-01-15 09:38:32', '0000-00-00 00:00:00'),
(79, 'test', 'testtttt', 11, 3, 'requestbaru', '2018-01-15 09:38:43', '0000-00-00 00:00:00'),
(80, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-15 09:38:47', '0000-00-00 00:00:00'),
(81, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-15 09:38:59', '0000-00-00 00:00:00'),
(82, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-15 09:39:01', '0000-00-00 00:00:00'),
(83, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-15 09:39:03', '0000-00-00 00:00:00'),
(84, 'test', 'testtttt', 11, 5, 'requestbaru', '2018-01-15 09:42:35', '0000-00-00 00:00:00'),
(85, 'test', 'testtttt', 11, 3, 'requestbaru', '2018-01-15 09:43:06', '0000-00-00 00:00:00'),
(86, 'lampu jalan rt 1', 'sjkdndhjxjks', 11, 1, 'requestbaru', '2018-01-15 09:46:17', '0000-00-00 00:00:00'),
(87, 'lampu jalan rt 1', 'sjkdndhjxjks', 11, 1, 'requestbaru', '2018-01-15 09:46:23', '0000-00-00 00:00:00'),
(88, 'lampu jalan rt 1', 'sjkdndhjxjks', 11, 1, 'requestbaru', '2018-01-15 09:46:23', '0000-00-00 00:00:00'),
(89, 'lampu jalan rt 1', 'sjkdndhjxjks', 11, 1, 'requestbaru', '2018-01-15 09:46:23', '0000-00-00 00:00:00'),
(90, 'jalanan depan balai desa', 'jalanan sekarang sudah banyak lubang', 11, 1, 'requestbaru', '2018-01-15 18:47:40', '0000-00-00 00:00:00'),
(91, 'lampu wkwmsn', 'skjsbzjsks', 11, 1, 'requestbaru', '2018-01-16 00:55:05', '0000-00-00 00:00:00'),
(92, 'lampu wkwmsn', 'skjsbzjsks', 11, 1, 'requestbaru', '2018-01-16 00:56:21', '0000-00-00 00:00:00'),
(93, 'lampu wkwmsn', 'skjsbzjsks', 11, 1, 'requestbaru', '2018-01-16 00:56:21', '0000-00-00 00:00:00'),
(94, 'lampu wkwmsn', 'skjsbzjsks', 11, 1, 'requestbaru', '2018-01-16 00:56:21', '0000-00-00 00:00:00'),
(95, '', '', 11, 1, 'requestbaru', '2018-01-16 01:36:32', '0000-00-00 00:00:00'),
(96, '', '', 11, 1, 'requestbaru', '2018-01-16 01:36:33', '0000-00-00 00:00:00'),
(97, '', '', 11, 1, 'requestbaru', '2018-01-16 01:36:34', '0000-00-00 00:00:00'),
(98, '', '', 11, 1, 'requestbaru', '2018-01-16 01:36:34', '0000-00-00 00:00:00'),
(99, '', '', 11, 1, 'requestbaru', '2018-01-16 01:36:34', '0000-00-00 00:00:00'),
(100, '', '', 11, 1, 'requestbaru', '2018-01-16 01:36:34', '0000-00-00 00:00:00'),
(101, 'jalana xjdndhd', 'sjsjjxkssn', 11, 1, 'requestbaru', '2018-01-16 01:59:18', '0000-00-00 00:00:00'),
(102, 'kaska', 'test', 11, 1, 'requestbaru', '2018-01-16 02:09:39', '0000-00-00 00:00:00'),
(103, 'alla', 'ada', 11, 1, 'requestbaru', '2018-01-16 02:19:07', '0000-00-00 00:00:00'),
(104, 'selokan kita', 'snzjiskedbvd', 11, 1, 'requestbaru', '2018-01-16 02:24:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `sort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `icon`, `sort`) VALUES
(1, 'admin', 'users', ''),
(2, 'kades', '', ''),
(6, 'penduduk', '', ''),
(7, 'operator', '', ''),
(8, 'mitra', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rt_rw`
--

CREATE TABLE `rt_rw` (
  `id` int(11) NOT NULL,
  `rw_parent` varchar(5) NOT NULL,
  `rt_child` int(5) NOT NULL,
  `dusun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rt_rw`
--

INSERT INTO `rt_rw` (`id`, `rw_parent`, `rt_child`, `dusun_id`) VALUES
(1, '01', 0, 1),
(2, '01', 1, 1),
(3, '02', 1, 1),
(4, '02', 3, 1),
(5, '03', 0, 1),
(7, '03', 3, 1),
(8, '04', 3, 1),
(9, '01', 5, 2),
(10, '02', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status_pembangunan`
--

CREATE TABLE `status_pembangunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pembangunan`
--

INSERT INTO `status_pembangunan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Progress', '2017-11-28 02:53:32', '0000-00-00 00:00:00'),
(2, 'Pending', '2018-01-13 08:56:53', '0000-00-00 00:00:00'),
(3, 'Selesai', '2018-01-13 08:57:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_dana_pembangunan`
--

CREATE TABLE `sumber_dana_pembangunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_dana_pembangunan`
--

INSERT INTO `sumber_dana_pembangunan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'APBD', '2017-12-06 04:25:07', '0000-00-00 00:00:00'),
(2, 'Anggaran Dana Desa', '2017-12-06 04:25:21', '0000-00-00 00:00:00'),
(3, 'APBN', '2017-12-06 04:25:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penduduk_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `name`, `username`, `password`, `auth_key`, `password_reset_token`, `access_token`, `email`, `photo`, `last_login`, `penduduk_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Administrator', 'admin', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 'Y1j-gM3JtyEmJagdH2sogdv4FFKvy7Fc', '', 'YWRtaW46NDMzYTliN2IwZTlhOGJmZjhiNjhhODEyYmU0ZmM3ZTRkNzBhM2Q0NA==', 'admin@gmail.com', 'f0315bbaa88081dfc8071971d5cc315d.jpg', '2018-01-16 09:26:09', 1, '2017-10-23 14:26:39', '2018-01-16 02:26:09'),
(3, 7, 'operator', 'operator', '4aed7fb4eed446796c59ab3fd911e359f063ec83', 'FZH9E-lxRkTZXXv0V4M-TRi1oIHMFzy_', NULL, '', 'operator@operator.com', '', '2018-01-16 09:26:21', 2, '2017-11-28 03:16:17', '2018-01-16 02:26:21'),
(4, 6, '', 'syamsul', '104e8dcd37fedbd62989b71cd2c9ec41945966a5', '', NULL, 'c3lhbXN1bDoxMTQ3ZTIyY2FhOWFiZTA4NmY5ZGY3MDcwNTE0ZGIyYmIwZjY5ZDY4', '', '', '2017-12-29 00:20:27', 3, '2017-12-05 06:24:27', '2017-12-29 00:20:27'),
(5, 8, 'Karsa Cipta', 'ciptakarsa', '9f92745f69e81c3ba6f26fa37b0f453ee55c076b', 'FgKR2lYmCwAPtsHwF_6VzmRRlStRgjFA', NULL, '', 'cipta@cipta.com', '', '2018-01-13 17:41:44', NULL, '2017-12-18 02:21:02', '2018-01-13 17:41:44'),
(6, 2, 'Muhammad', 'faridzy', '32b79e13c297e0249a3b356291c1fe66666efa41', 'tcGcNCwtNXWM8nDdxIT__7SfUwRU0NoN', NULL, '', 'faridzy@gmail.com', '', '2017-12-27 08:24:34', NULL, '2017-12-20 07:16:12', '2017-12-27 08:24:34'),
(7, 8, '', 'jaya', '153fa238cec90e5a24b85a79109f91ebe68ca481', '', NULL, '', '', '', '2017-12-27 18:09:46', NULL, '2017-12-27 18:09:46', '2017-12-27 18:09:46'),
(11, 6, '', 'nanda', 'ca57ac9ddce4c2a4923f92e003e6d2883043adfe', '', NULL, 'bmFuZGE=', '', '', '2018-01-16 02:45:23', 1, '2017-12-28 16:17:45', '2018-01-16 02:45:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pembangunan`
--
ALTER TABLE `kategori_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `pembangunan_id` (`pembangunan_id`);

--
-- Indexes for table `lapor_progress`
--
ALTER TABLE `lapor_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lapor_progress` (`pembangunan_id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_mitrausers` (`users_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `kategori_pembangunan_id` (`kategori_pembangunan_id`),
  ADD KEY `sumber_dana_pembangunan_id` (`sumber_dana_pembangunan_id`),
  ADD KEY `status_pembangunan_id` (`status_pembangunan_id`),
  ADD KEY `fk_mitra_fk` (`mitra_id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agama_id` (`agama_id`),
  ADD KEY `rt_rw_id` (`rt_rw_id`),
  ADD KEY `pendidikan_id` (`pendidikan_id`),
  ADD KEY `pekerjaan_id` (`pekerjaan_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_pembangunan`
--
ALTER TABLE `request_pembangunan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `kategori_pembangunan_id` (`kategori_pembangunan_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dusun_id` (`dusun_id`);

--
-- Indexes for table `status_pembangunan`
--
ALTER TABLE `status_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber_dana_pembangunan`
--
ALTER TABLE `sumber_dana_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `users_fk11` (`penduduk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_pembangunan`
--
ALTER TABLE `kategori_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
--
-- AUTO_INCREMENT for table `lapor_progress`
--
ALTER TABLE `lapor_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pembangunan`
--
ALTER TABLE `pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `request_pembangunan`
--
ALTER TABLE `request_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rt_rw`
--
ALTER TABLE `rt_rw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `status_pembangunan`
--
ALTER TABLE `status_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sumber_dana_pembangunan`
--
ALTER TABLE `sumber_dana_pembangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lapor_aduan`
--
ALTER TABLE `lapor_aduan`
  ADD CONSTRAINT `lapor_aduan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lapor_aduan_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lapor_aduan_ibfk_3` FOREIGN KEY (`pembangunan_id`) REFERENCES `pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lapor_progress`
--
ALTER TABLE `lapor_progress`
  ADD CONSTRAINT `fk_lapor_progress` FOREIGN KEY (`pembangunan_id`) REFERENCES `pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `fk_mitrausers` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembangunan`
--
ALTER TABLE `pembangunan`
  ADD CONSTRAINT `fk_mitra_fk` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_10` FOREIGN KEY (`status_pembangunan_id`) REFERENCES `status_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_2` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_3` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_4` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_5` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_6` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_8` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembangunan_ibfk_9` FOREIGN KEY (`sumber_dana_pembangunan_id`) REFERENCES `sumber_dana_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_2` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_3` FOREIGN KEY (`rt_rw_id`) REFERENCES `rt_rw` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_4` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_5` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_6` FOREIGN KEY (`rt_rw_id`) REFERENCES `rt_rw` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_7` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penduduk_ibfk_8` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_pembangunan`
--
ALTER TABLE `request_pembangunan`
  ADD CONSTRAINT `request_pembangunan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_pembangunan_ibfk_2` FOREIGN KEY (`kategori_pembangunan_id`) REFERENCES `kategori_pembangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rt_rw`
--
ALTER TABLE `rt_rw`
  ADD CONSTRAINT `rt_rw_ibfk_1` FOREIGN KEY (`dusun_id`) REFERENCES `dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fk11` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
