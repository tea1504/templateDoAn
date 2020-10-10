-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for shophoa
CREATE DATABASE IF NOT EXISTS `shophoa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `shophoa`;

-- Dumping structure for table shophoa.binhluan
CREATE TABLE IF NOT EXISTS `binhluan` (
  `bl_id` int(10) NOT NULL AUTO_INCREMENT,
  `kh_bl_noidung` text COLLATE utf8mb4_unicode_ci,
  `kh_bl_ngay` datetime DEFAULT NULL,
  `khachhang_kh_id` int(11) NOT NULL,
  `sanpham_sp_id` int(11) NOT NULL,
  PRIMARY KEY (`bl_id`),
  KEY `fk_binhluan_khachhang1_idx` (`khachhang_kh_id`),
  KEY `fk_binhluan_sanpham1_idx` (`sanpham_sp_id`),
  CONSTRAINT `fk_binhluan_khachhang1` FOREIGN KEY (`khachhang_kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_binhluan_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.binhluan: ~0 rows (approximately)
/*!40000 ALTER TABLE `binhluan` DISABLE KEYS */;
/*!40000 ALTER TABLE `binhluan` ENABLE KEYS */;

-- Dumping structure for table shophoa.chude
CREATE TABLE IF NOT EXISTS `chude` (
  `cd_id` int(10) NOT NULL AUTO_INCREMENT,
  `cd_ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.chude: ~0 rows (approximately)
/*!40000 ALTER TABLE `chude` DISABLE KEYS */;
/*!40000 ALTER TABLE `chude` ENABLE KEYS */;

-- Dumping structure for table shophoa.dondathang
CREATE TABLE IF NOT EXISTS `dondathang` (
  `ddh_id` int(11) NOT NULL AUTO_INCREMENT,
  `ddh_diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ddh_tongtien` decimal(13,3) DEFAULT NULL,
  `ddh_ngaylap` datetime DEFAULT NULL,
  `ddh_ngaygiao` datetime DEFAULT NULL,
  `ddh_trangthai` int(1) DEFAULT NULL,
  `hinhthucthantoan_httt_id` int(11) NOT NULL,
  `khachhang_kh_id` int(11) NOT NULL,
  PRIMARY KEY (`ddh_id`),
  KEY `fk_dondathang_hinhthucthantoan1_idx` (`hinhthucthantoan_httt_id`),
  KEY `fk_dondathang_khachhang1_idx` (`khachhang_kh_id`),
  CONSTRAINT `fk_dondathang_hinhthucthantoan1` FOREIGN KEY (`hinhthucthantoan_httt_id`) REFERENCES `hinhthucthantoan` (`httt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dondathang_khachhang1` FOREIGN KEY (`khachhang_kh_id`) REFERENCES `khachhang` (`kh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.dondathang: ~0 rows (approximately)
/*!40000 ALTER TABLE `dondathang` DISABLE KEYS */;
/*!40000 ALTER TABLE `dondathang` ENABLE KEYS */;

-- Dumping structure for table shophoa.dondathang_has_sanpham
CREATE TABLE IF NOT EXISTS `dondathang_has_sanpham` (
  `dondathang_ddh_id` int(11) NOT NULL,
  `sanpham_sp_id` int(11) NOT NULL,
  `sp_ctdh_dongia` decimal(13,3) DEFAULT NULL,
  `sp_ctdh_soluong` int(10) DEFAULT NULL,
  PRIMARY KEY (`dondathang_ddh_id`,`sanpham_sp_id`),
  KEY `fk_dondathang_has_sanpham_sanpham1_idx` (`sanpham_sp_id`,`sp_ctdh_soluong`),
  KEY `fk_dondathang_has_sanpham_dondathang1_idx` (`dondathang_ddh_id`),
  CONSTRAINT `fk_dondathang_has_sanpham_dondathang1` FOREIGN KEY (`dondathang_ddh_id`) REFERENCES `dondathang` (`ddh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dondathang_has_sanpham_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.dondathang_has_sanpham: ~0 rows (approximately)
/*!40000 ALTER TABLE `dondathang_has_sanpham` DISABLE KEYS */;
/*!40000 ALTER TABLE `dondathang_has_sanpham` ENABLE KEYS */;

-- Dumping structure for table shophoa.hinhsanpham
CREATE TABLE IF NOT EXISTS `hinhsanpham` (
  `hasp_id` int(10) NOT NULL AUTO_INCREMENT,
  `hsp_tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sanpham_sp_id` int(11) NOT NULL,
  PRIMARY KEY (`hasp_id`),
  KEY `fk_hinhsanpham_sanpham1_idx` (`sanpham_sp_id`),
  CONSTRAINT `fk_hinhsanpham_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.hinhsanpham: ~0 rows (approximately)
/*!40000 ALTER TABLE `hinhsanpham` DISABLE KEYS */;
/*!40000 ALTER TABLE `hinhsanpham` ENABLE KEYS */;

-- Dumping structure for table shophoa.hinhthucthantoan
CREATE TABLE IF NOT EXISTS `hinhthucthantoan` (
  `httt_id` int(5) NOT NULL AUTO_INCREMENT,
  `httt_ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`httt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.hinhthucthantoan: ~0 rows (approximately)
/*!40000 ALTER TABLE `hinhthucthantoan` DISABLE KEYS */;
/*!40000 ALTER TABLE `hinhthucthantoan` ENABLE KEYS */;

-- Dumping structure for table shophoa.khachhang
CREATE TABLE IF NOT EXISTS `khachhang` (
  `kh_id` int(11) NOT NULL AUTO_INCREMENT,
  `kh_tendangnhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_hoten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_gioitinh` int(1) DEFAULT NULL,
  `kh_ngaysinh` date DEFAULT NULL,
  `kh_sodienthoai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_avt_tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_trangthai` int(1) DEFAULT NULL,
  `kh_quantri` int(1) DEFAULT NULL,
  PRIMARY KEY (`kh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.khachhang: ~0 rows (approximately)
/*!40000 ALTER TABLE `khachhang` DISABLE KEYS */;
/*!40000 ALTER TABLE `khachhang` ENABLE KEYS */;

-- Dumping structure for table shophoa.khuyenmai
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `km_id` int(10) NOT NULL AUTO_INCREMENT,
  `km_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_noidung` text COLLATE utf8mb4_unicode_ci,
  `km_tungay` datetime DEFAULT NULL,
  `km_denngay` datetime DEFAULT NULL,
  PRIMARY KEY (`km_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.khuyenmai: ~0 rows (approximately)
/*!40000 ALTER TABLE `khuyenmai` DISABLE KEYS */;
/*!40000 ALTER TABLE `khuyenmai` ENABLE KEYS */;

-- Dumping structure for table shophoa.loaihoa
CREATE TABLE IF NOT EXISTS `loaihoa` (
  `lh_id` int(10) NOT NULL AUTO_INCREMENT,
  `lh_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lh_mota` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`lh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.loaihoa: ~0 rows (approximately)
/*!40000 ALTER TABLE `loaihoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `loaihoa` ENABLE KEYS */;

-- Dumping structure for table shophoa.mauhoa
CREATE TABLE IF NOT EXISTS `mauhoa` (
  `mh_id` int(10) NOT NULL AUTO_INCREMENT,
  `mh_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.mauhoa: ~0 rows (approximately)
/*!40000 ALTER TABLE `mauhoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `mauhoa` ENABLE KEYS */;

-- Dumping structure for table shophoa.sanpham
CREATE TABLE IF NOT EXISTS `sanpham` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `khuyenmai_km_id` int(11) NOT NULL,
  PRIMARY KEY (`sp_id`),
  UNIQUE KEY `sp_ma_UNIQUE` (`sp_ma`),
  KEY `fk_sanpham_khuyenmai1_idx` (`khuyenmai_km_id`),
  CONSTRAINT `fk_sanpham_khuyenmai1` FOREIGN KEY (`khuyenmai_km_id`) REFERENCES `khuyenmai` (`km_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.sanpham: ~0 rows (approximately)
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;

-- Dumping structure for table shophoa.sanpham_has_chude
CREATE TABLE IF NOT EXISTS `sanpham_has_chude` (
  `sanpham_sp_id` int(11) NOT NULL,
  `chude_cd_id` int(10) NOT NULL,
  PRIMARY KEY (`sanpham_sp_id`,`chude_cd_id`),
  KEY `fk_sanpham_has_chude_chude1_idx` (`chude_cd_id`),
  KEY `fk_sanpham_has_chude_sanpham1_idx` (`sanpham_sp_id`),
  CONSTRAINT `fk_sanpham_has_chude_chude1` FOREIGN KEY (`chude_cd_id`) REFERENCES `chude` (`cd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sanpham_has_chude_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.sanpham_has_chude: ~0 rows (approximately)
/*!40000 ALTER TABLE `sanpham_has_chude` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanpham_has_chude` ENABLE KEYS */;

-- Dumping structure for table shophoa.sanpham_has_loaihoa
CREATE TABLE IF NOT EXISTS `sanpham_has_loaihoa` (
  `sanpham_sp_id` int(11) NOT NULL,
  `loaihoa_lh_id` int(10) NOT NULL,
  PRIMARY KEY (`sanpham_sp_id`,`loaihoa_lh_id`),
  KEY `fk_sanpham_has_loaihoa_loaihoa1_idx` (`loaihoa_lh_id`),
  KEY `fk_sanpham_has_loaihoa_sanpham1_idx` (`sanpham_sp_id`),
  CONSTRAINT `fk_sanpham_has_loaihoa_loaihoa1` FOREIGN KEY (`loaihoa_lh_id`) REFERENCES `loaihoa` (`lh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sanpham_has_loaihoa_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.sanpham_has_loaihoa: ~0 rows (approximately)
/*!40000 ALTER TABLE `sanpham_has_loaihoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanpham_has_loaihoa` ENABLE KEYS */;

-- Dumping structure for table shophoa.sanpham_has_mauhoa
CREATE TABLE IF NOT EXISTS `sanpham_has_mauhoa` (
  `sanpham_sp_id` int(11) NOT NULL,
  `mauhoa_mh_id` int(10) NOT NULL,
  PRIMARY KEY (`sanpham_sp_id`,`mauhoa_mh_id`),
  KEY `fk_sanpham_has_mauhoa_mauhoa1_idx` (`mauhoa_mh_id`),
  KEY `fk_sanpham_has_mauhoa_sanpham1_idx` (`sanpham_sp_id`),
  CONSTRAINT `fk_sanpham_has_mauhoa_mauhoa1` FOREIGN KEY (`mauhoa_mh_id`) REFERENCES `mauhoa` (`mh_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sanpham_has_mauhoa_sanpham1` FOREIGN KEY (`sanpham_sp_id`) REFERENCES `sanpham` (`sp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.sanpham_has_mauhoa: ~0 rows (approximately)
/*!40000 ALTER TABLE `sanpham_has_mauhoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanpham_has_mauhoa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
