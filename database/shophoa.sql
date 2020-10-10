-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 02:32 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shophoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `bl_id` int(10) NOT NULL,
  `kh_bl_noidung` text COLLATE utf8mb4_unicode_ci,
  `kh_bl_ngay` datetime DEFAULT NULL,
  `khachhang_kh_id` int(11) NOT NULL,
  `sanpham_sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `cd_id` int(10) NOT NULL,
  `cd_ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `ddh_id` int(11) NOT NULL,
  `ddh_diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ddh_tongtien` decimal(13,3) DEFAULT NULL,
  `ddh_ngaylap` datetime DEFAULT NULL,
  `ddh_ngaygiao` datetime DEFAULT NULL,
  `ddh_trangthai` int(1) DEFAULT NULL,
  `hinhthucthantoan_httt_id` int(11) NOT NULL,
  `khachhang_kh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang_has_sanpham`
--

CREATE TABLE `dondathang_has_sanpham` (
  `dondathang_ddh_id` int(11) NOT NULL,
  `sanpham_sp_id` int(11) NOT NULL,
  `sp_ctdh_dongia` decimal(13,3) DEFAULT NULL,
  `sp_ctdh_soluong` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhsanpham`
--

CREATE TABLE `hinhsanpham` (
  `hasp_id` int(10) NOT NULL,
  `hsp_tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sanpham_sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucthantoan`
--

CREATE TABLE `hinhthucthantoan` (
  `httt_id` int(5) NOT NULL,
  `httt_ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_id` int(11) NOT NULL,
  `kh_tendangnhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_hoten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_gioitinh` int(1) DEFAULT NULL,
  `kh_ngaysinh` date DEFAULT NULL,
  `kh_sodienthoai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_avt_tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_trangthai` int(1) DEFAULT NULL,
  `kh_quantri` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `km_id` int(10) NOT NULL,
  `km_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_noidung` text COLLATE utf8mb4_unicode_ci,
  `km_tungay` datetime DEFAULT NULL,
  `km_denngay` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaihoa`
--

CREATE TABLE `loaihoa` (
  `lh_id` int(10) NOT NULL,
  `lh_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lh_mota` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mauhoa`
--

CREATE TABLE `mauhoa` (
  `mh_id` int(10) NOT NULL,
  `mh_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(11) NOT NULL,
  `sp_ma` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_gia` decimal(13,3) DEFAULT NULL,
  `sp_giacu` decimal(13,3) DEFAULT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `sp_mota_ngan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_mota_chitiet` text COLLATE utf8mb4_unicode_ci,
  `sp_ngaycapnhat` datetime DEFAULT NULL,
  `sp_avt_tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_trangthai` int(1) DEFAULT NULL,
  `khuyenmai_km_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_has_chude`
--

CREATE TABLE `sanpham_has_chude` (
  `sanpham_sp_id` int(11) NOT NULL,
  `chude_cd_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_has_loaihoa`
--

CREATE TABLE `sanpham_has_loaihoa` (
  `sanpham_sp_id` int(11) NOT NULL,
  `loaihoa_lh_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_has_mauhoa`
--

CREATE TABLE `sanpham_has_mauhoa` (
  `sanpham_sp_id` int(11) NOT NULL,
  `mauhoa_mh_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `fk_binhluan_khachhang1_idx` (`khachhang_kh_id`),
  ADD KEY `fk_binhluan_sanpham1_idx` (`sanpham_sp_id`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`cd_id`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`ddh_id`),
  ADD KEY `fk_dondathang_hinhthucthantoan1_idx` (`hinhthucthantoan_httt_id`),
  ADD KEY `fk_dondathang_khachhang1_idx` (`khachhang_kh_id`);

--
-- Indexes for table `dondathang_has_sanpham`
--
ALTER TABLE `dondathang_has_sanpham`
  ADD PRIMARY KEY (`dondathang_ddh_id`,`sanpham_sp_id`),
  ADD KEY `fk_dondathang_has_sanpham_sanpham1_idx` (`sanpham_sp_id`,`sp_ctdh_soluong`),
  ADD KEY `fk_dondathang_has_sanpham_dondathang1_idx` (`dondathang_ddh_id`);

--
-- Indexes for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD PRIMARY KEY (`hasp_id`),
  ADD KEY `fk_hinhsanpham_sanpham1_idx` (`sanpham_sp_id`);

--
-- Indexes for table `hinhthucthantoan`
--
ALTER TABLE `hinhthucthantoan`
  ADD PRIMARY KEY (`httt_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`km_id`);

--
-- Indexes for table `loaihoa`
--
ALTER TABLE `loaihoa`
  ADD PRIMARY KEY (`lh_id`);

--
-- Indexes for table `mauhoa`
--
ALTER TABLE `mauhoa`
  ADD PRIMARY KEY (`mh_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD UNIQUE KEY `sp_ma_UNIQUE` (`sp_ma`),
  ADD KEY `fk_sanpham_khuyenmai1_idx` (`khuyenmai_km_id`);

--
-- Indexes for table `sanpham_has_chude`
--
ALTER TABLE `sanpham_has_chude`
  ADD PRIMARY KEY (`sanpham_sp_id`,`chude_cd_id`),
  ADD KEY `fk_sanpham_has_chude_chude1_idx` (`chude_cd_id`),
  ADD KEY `fk_sanpham_has_chude_sanpham1_idx` (`sanpham_sp_id`);

--
-- Indexes for table `sanpham_has_loaihoa`
--
ALTER TABLE `sanpham_has_loaihoa`
  ADD PRIMARY KEY (`sanpham_sp_id`,`loaihoa_lh_id`),
  ADD KEY `fk_sanpham_has_loaihoa_loaihoa1_idx` (`loaihoa_lh_id`),
  ADD KEY `fk_sanpham_has_loaihoa_sanpham1_idx` (`sanpham_sp_id`);

--
-- Indexes for table `sanpham_has_mauhoa`
--
ALTER TABLE `sanpham_has_mauhoa`
  ADD PRIMARY KEY (`sanpham_sp_id`,`mauhoa_mh_id`),
  ADD KEY `fk_sanpham_has_mauhoa_mauhoa1_idx` (`mauhoa_mh_id`),
  ADD KEY `fk_sanpham_has_mauhoa_sanpham1_idx` (`sanpham_sp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `bl_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `ddh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hinhthucthantoan`
--
ALTER TABLE `hinhthucthantoan`
  MODIFY `httt_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `km_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_khachhang1` FOREIGN KEY (`khachhang_kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_binhluan_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_dondathang_hinhthucthantoan1` FOREIGN KEY (`hinhthucthantoan_httt_id`) REFERENCES `hinhthucthantoan` (`httt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dondathang_khachhang1` FOREIGN KEY (`khachhang_kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dondathang_has_sanpham`
--
ALTER TABLE `dondathang_has_sanpham`
  ADD CONSTRAINT `fk_dondathang_has_sanpham_dondathang1` FOREIGN KEY (`dondathang_ddh_id`) REFERENCES `dondathang` (`ddh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dondathang_has_sanpham_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hinhsanpham`
--
ALTER TABLE `hinhsanpham`
  ADD CONSTRAINT `fk_hinhsanpham_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_khuyenmai1` FOREIGN KEY (`khuyenmai_km_id`) REFERENCES `khuyenmai` (`km_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham_has_chude`
--
ALTER TABLE `sanpham_has_chude`
  ADD CONSTRAINT `fk_sanpham_has_chude_chude1` FOREIGN KEY (`chude_cd_id`) REFERENCES `chude` (`cd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sanpham_has_chude_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham_has_loaihoa`
--
ALTER TABLE `sanpham_has_loaihoa`
  ADD CONSTRAINT `fk_sanpham_has_loaihoa_loaihoa1` FOREIGN KEY (`loaihoa_lh_id`) REFERENCES `loaihoa` (`lh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sanpham_has_loaihoa_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham_has_mauhoa`
--
ALTER TABLE `sanpham_has_mauhoa`
  ADD CONSTRAINT `fk_sanpham_has_mauhoa_mauhoa1` FOREIGN KEY (`mauhoa_mh_id`) REFERENCES `mauhoa` (`mh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sanpham_has_mauhoa_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
shophoaloaihoa