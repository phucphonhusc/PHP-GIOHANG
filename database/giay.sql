-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2019 lúc 04:22 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay`
--

CREATE TABLE `giay` (
  `Magiay` int(11) NOT NULL,
  `TenGiay` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Anh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Nam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giay`
--

INSERT INTO `giay` (`Magiay`, `TenGiay`, `Anh`, `Gia`, `Nam`) VALUES
(1, 'Giày Washed Navy', 'images/giay1.jpg', 150000, 2018),
(2, 'Giày Hunter Cam', 'images/giay2.jpg', 170000, 2017),
(3, 'Giày Hunter Xám', 'images/giay3.jpg', 200000, 2019),
(4, 'Giày Hunter Đen', 'images/giay4.jpg', 180000, 2017),
(5, 'Giày Hunter Trắng', 'images/giay5.jpg', 150000, 2019),
(6, 'Giày Hunter Xanh', 'images/giay6.jpg', 170000, 2019),
(7, 'Giày Street Đỏ', 'images/giay7.jpg', 200000, 2016),
(8, 'Giày Street Đen', 'images/giay8.jpg', 190000, 2018),
(9, 'Giày Fired Cam', 'images/giay9.jpg', 160000, 2018),
(10, 'Giày Fired Xanh', 'images/giay10.jpg', 220000, 2019);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`Magiay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giay`
--
ALTER TABLE `giay`
  MODIFY `Magiay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
