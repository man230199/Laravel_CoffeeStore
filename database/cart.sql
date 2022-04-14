-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 21, 2022 lúc 12:18 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news_rss`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `books` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prices` text NOT NULL,
  `quantities` text NOT NULL,
  `names` text NOT NULL,
  `pictures` text NOT NULL,
  `status` char(10) DEFAULT 'inactive',
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `username`, `books`, `prices`, `quantities`, `names`, `pictures`, `status`, `date`) VALUES
('5MBsZov', 'man231', '[\"36\",\"16\",\"35\",\"37\",\"58\"]', '[\"100000\",\"36000\",\"25000\",\"25000\",\"67000\"]', '[\"3\",\"2\",\"13\",\"1\",\"2\"]', '[\"Khởi Nghiệp Kinh Doanh Online - Bán Hàng Hiệu Quả Trên Facebook\",\"Advanced Programming in the UNIX Environment, 3rd Edition\",\"Và Rồi Chẳng Còn Ai (Agatha Christie)\",\"Chuỗi Án Mạng A.B.C (Tái Bản)\",\"Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh\"]', '[\"2syeunrg.png\",\"2yo48fgm.jpg\",\"q9vmxw6f.jpg\",\"yoz8p1kc.jpg\",\"u4nm8cx5.jpg\"]', 'active', '2022-01-04 03:39:09'),
('Ada1IFO', 'man231', '[\"56\",\"57\"]', '[\"84000\",\"63000\"]', '[\"5\",\"4\"]', '[\"Tru1ea7m lu1eb7ng - Su1ee9c mu1ea1nh tiu1ec1m u1ea9n cu1ee7a ngu01b0u1eddi hu01b0u1edbng nu1ed9i\",\"Nu00f3i u00cdt Lu1ea1i, Lu00e0m Nhiu1ec1u Hu01a1n\"]', '[\"knds07zf.jpg\",\"3wtc4n25.jpg\"]', 'inactive', '2021-12-31 06:12:23'),
('iKYZHlr', 'admin', '[\"13\",\"24\",\"16\"]', '[\"33950\",\"31680\",\"35280\"]', '[\"1\",\"2\",\"2\"]', '[\"Functional Programming in Scala\",\"Programming Logics\",\"Advanced Programming in the UNIX Environment, 3rd Edition\"]', '[\"7kyub3oi.jpg\",\"sbx52yne.jpg\",\"2yo48fgm.jpg\"]', 'inactive', '2013-12-18 06:04:48'),
('lYQE81k', 'man231', '[\"57\"]', '[\"63000\"]', '[\"1\"]', '[\"Nu00f3i u00cdt Lu1ea1i, Lu00e0m Nhiu1ec1u Hu01a1n\"]', '[\"3wtc4n25.jpg\"]', 'inactive', '2021-12-30 08:00:09'),
('MrLYsvz', 'man231', '[\"57\",\"58\"]', '[\"63000\",\"67000\"]', '[\"6\",\"4\"]', '[\"Nói Ít Lại, Làm Nhiều Hơn\",\"Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh\"]', '[\"3wtc4n25.jpg\",\"u4nm8cx5.jpg\"]', 'inactive', '2021-12-31 16:42:18'),
('Mx5dCZ7', 'man231', '[\"58\"]', '[\"67000\"]', '[\"2\"]', '[\"Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh\"]', '[\"u4nm8cx5.jpg\"]', 'inactive', '2021-12-31 16:19:58'),
('OAgQ5M6', 'man231', '[\"16\"]', '[\"36000\"]', '[\"3\"]', '[\"Advanced Programming in the UNIX Environment, 3rd Edition\"]', '[\"2yo48fgm.jpg\"]', 'inactive', '2021-12-30 07:59:27'),
('Paph0ZC', 'man231', '[\"56\",\"58\"]', '[\"84000\",\"67000\"]', '[\"5\",\"5\"]', '[\"Tru1ea7m lu1eb7ng - Su1ee9c mu1ea1nh tiu1ec1m u1ea9n cu1ee7a ngu01b0u1eddi hu01b0u1edbng nu1ed9i\",\"Nu00f3ng Giu1eadn Lu00e0 Bu1ea3n Nu0103ng , Tu0129nh Lu1eb7ng Lu00e0 Bu1ea3n Lu0129nh\"]', '[\"knds07zf.jpg\",\"u4nm8cx5.jpg\"]', 'inactive', '2021-12-30 08:42:30'),
('rbijs4l', 'man231', '[\"56\",\"57\"]', '[\"672000\",\"441000\"]', '[\"8\",\"7\"]', '[\"Tru1ea7m lu1eb7ng - Su1ee9c mu1ea1nh tiu1ec1m u1ea9n cu1ee7a ngu01b0u1eddi hu01b0u1edbng nu1ed9i\",\"Nu00f3i u00cdt Lu1ea1i, Lu00e0m Nhiu1ec1u Hu01a1n\"]', '[\"knds07zf.jpg\",\"3wtc4n25.jpg\"]', 'inactive', '2021-12-31 06:11:28'),
('rsqLEmQ', 'man231', '[\"23\",\"17\"]', '[\"43000\",\"134000\"]', '[\"4\",\"3\"]', '[\"Advanced Network Programming - Principles and Techniques\",\"Digital Marketing - Tu1eeb Chiu1ebfn Lu01b0u1ee3c u0110u1ebfn Thu1ef1c Thi (Tu00e1i Bu1ea3n 2020)\"]', '[\"vradhky9.jpg\",\"l89s6t1x.jpg\"]', 'inactive', '2021-12-31 15:47:51'),
('zPSmhl9', 'man231', '[\"56\",\"57\"]', '[\"84000\",\"63000\"]', '[\"2\",\"1\"]', '[\"Tru1ea7m lu1eb7ng - Su1ee9c mu1ea1nh tiu1ec1m u1ea9n cu1ee7a ngu01b0u1eddi hu01b0u1edbng nu1ed9i\",\"Nu00f3i u00cdt Lu1ea1i, Lu00e0m Nhiu1ec1u Hu01a1n\"]', '[\"knds07zf.jpg\",\"3wtc4n25.jpg\"]', 'inactive', '2021-12-30 08:54:26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
