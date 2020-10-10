-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
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
  `kh_bl_noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `km_noidung` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `sp_ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_gia` decimal(13,3) DEFAULT NULL,
  `sp_giacu` decimal(13,3) DEFAULT NULL,
  `sp_soluong` int(11) DEFAULT NULL,
  `sp_mota_ngan` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_mota_chitiet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sp_ngaycapnhat` datetime DEFAULT NULL,
  `sp_trangthai` int(1) DEFAULT NULL,
  `sp_avt_tenfile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `km_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shophoa.sanpham: ~147 rows (approximately)
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
INSERT INTO `sanpham` (`sp_id`, `sp_ten`, `sp_gia`, `sp_giacu`, `sp_soluong`, `sp_mota_ngan`, `sp_mota_chitiet`, `sp_ngaycapnhat`, `sp_trangthai`, `sp_avt_tenfile`, `km_id`) VALUES
	(1, 'Bó Hoa Young & Beautiful', 349000.000, 569000.000, 283, '', '', '2020-10-07 00:00:00', 1, 'youngandbeautiful_1024x1024@2x.jpg', NULL),
	(2, 'Giỏ Hoa Wonderland', 1329000.000, 0.000, 448, '', '', '2020-10-07 00:00:00', 1, 'wonderland_1024x1024@2x.jpg', NULL),
	(3, 'Bó Hoa Under The Blue Sky', 199000.000, 369000.000, 351, '', '', '2020-10-07 00:00:00', 1, 'UnderTheBlueSky_1024x1024@2x.jpg', NULL),
	(4, 'Bó Hoa Sweet Desire', 429000.000, 0.000, 387, '', '', '2020-10-07 00:00:00', 1, 'SweetDesire_Transparent_01_1024x1024@2x.jpg', NULL),
	(5, 'Giỏ Hoa Spring Garden', 329000.000, 499000.000, 285, '', '', '2020-10-07 00:00:00', 1, 'SpringGarden_8a7fdabb-0ecd-4f76-82dc-5dd0583f2546_1024x1024@2x.jpg', NULL),
	(6, 'Bó hoa Shining Ruby', 949000.000, 0.000, 339, '', '', '2020-10-07 00:00:00', 1, 'Shining-Ruby_1024x1024@2x.jpg', NULL),
	(7, 'Bó Hoa Romantic Escape', 599000.000, 0.000, 339, '', '', '2020-10-07 00:00:00', 1, 'romance-escape_1024x1024@2x.jpg', NULL),
	(8, 'Bó Hoa Cúc Tana Pure Joy', 299000.000, 529000.000, 495, '', '', '2020-10-07 00:00:00', 1, 'purejoy_1024x1024@2x.jpg', NULL),
	(9, 'Bó Hoa Pinky', 319000.000, 0.000, 125, '', '', '2020-10-07 00:00:00', 1, 'Pinky_1024x1024@2x.jpg', NULL),
	(10, 'Bó Hoa Pinky Promise', 549000.000, 0.000, 398, '', '', '2020-10-07 00:00:00', 1, 'pink-promise-4_6a97191d-5eed-4693-96d7-e1881a8e408f_1024x1024@2x.jpg', NULL),
	(11, 'Bó Hoa Pink Blush', 299000.000, 0.000, 367, '', '', '2020-10-07 00:00:00', 1, 'pinkblush_1024x1024@2x.jpg', NULL),
	(12, 'Bó Hoa Passionate Love', 639000.000, 0.000, 361, '', '', '2020-10-07 00:00:00', 1, 'PassionateLove_1024x1024@2x.jpg', NULL),
	(13, 'Bó Hoa Hồng Ecuador Only You', 799000.000, 0.000, 500, '', '', '2020-10-07 00:00:00', 1, 'onlyu_1_1024x1024@2x.jpg', NULL),
	(14, 'Bó Hoa Angela', 419000.000, 0.000, 131, '', '', '2020-10-07 00:00:00', 1, 'nhieu-loai-hoa-bo-hoa-hong-cam-chuong-va-dong-tien-angela-1_1_1024x1024@2x.jpg', NULL),
	(15, 'Ngày Tốt Lành!', 239000.000, 0.000, 350, '', '', '2020-10-07 00:00:00', 1, 'NgayT_tLanh_1024x1024@2x.jpg', NULL),
	(16, 'Bó Hoa My Princess', 419000.000, 0.000, 196, '', '', '2020-10-07 00:00:00', 1, 'myprincess_1024x1024@2x.jpg', NULL),
	(17, 'Bó Hoa My Juliet', 329000.000, 0.000, 121, '', '', '2020-10-07 00:00:00', 1, 'my-juliet-123_67324705-d8c5-4876-8168-139b8bca1a56_1024x1024@2x.jpg', NULL),
	(18, 'Hộp Hoa Miss Globe', 519000.000, 0.000, 321, '', '', '2020-10-07 00:00:00', 1, 'MissGlobe_be47b391-1537-46d5-acb4-7c11b60f9d0b_1024x1024@2x.jpg', NULL),
	(19, 'Bó Hoa Mindful Soul', 259000.000, 429000.000, 353, '', '', '2020-10-07 00:00:00', 1, 'mindfulsoul_1024x1024@2x.jpg', NULL),
	(20, 'Giỏ Hoa Midsummer', 619000.000, 0.000, 100, '', '', '2020-10-07 00:00:00', 1, 'midsum_1024x1024@2x.jpg', NULL),
	(21, 'Bó Hoa Intense Love', 539000.000, 969000.000, 203, '', '', '2020-10-07 00:00:00', 1, 'intense-love-1_1024x1024@2x.jpg', NULL),
	(22, 'Bó Hoa My Only Sunshine', 379000.000, 629000.000, 332, '', '', '2020-10-07 00:00:00', 1, 'hoa-baby-bo-hoa-my-only-sunshine-1_1024x1024@2x.jpg', NULL),
	(23, 'Hộp Hoa Gỗ Sweet Tenderness', 879000.000, 0.000, 358, '', '', '2020-10-07 00:00:00', 1, 'H_pHoaG_SweetTenderness_1024x1024@2x.jpg', NULL),
	(24, 'Hộp Hoa Gỗ Sweet Blossom', 779000.000, 0.000, 114, '', '', '2020-10-07 00:00:00', 1, 'H_pHoaG_SweetBlossom_1024x1024@2x.jpg', NULL),
	(25, 'Hộp Hoa Gỗ Sunshine Box', 619000.000, 0.000, 404, '', '', '2020-10-07 00:00:00', 1, 'H_pHoaG_SunshineBox_1024x1024@2x.jpg', NULL),
	(26, 'Hộp Hoa Gỗ Pretty Glory', 589000.000, 1119000.000, 421, '', '', '2020-10-07 00:00:00', 1, 'H_pHoaG_PrettyGlory_1024x1024@2x.jpg', NULL),
	(27, 'Hộp Hoa Gỗ Have A Sweet Day', 619000.000, 0.000, 301, '', '', '2020-10-07 00:00:00', 1, 'H_pHoaG_HaveASweetDay1_1024x1024@2x.jpg', NULL),
	(28, 'Hộp Hoa Gỗ City Of Stars', 469000.000, 0.000, 220, '', '', '2020-10-07 00:00:00', 1, 'H_pHoaG_CityOfStars_bd7c9cb4-867e-4ee5-afc8-4ebf80ea6224_1024x1024@2x.jpg', NULL),
	(29, 'Giỏ Hoa Lan Spring Light', 1229000.000, 0.000, 101, '', '', '2020-10-07 00:00:00', 1, 'Gi_HoaLanSpringLight_1024x1024@2x.jpg', NULL),
	(30, 'Giỏ Hoa Lan Gentle Brightness', 569000.000, 0.000, 298, '', '', '2020-10-07 00:00:00', 1, 'Gi_HoaLanGentleBrightness_1024x1024@2x.jpg', NULL),
	(31, 'Giỏ Hoa Lan Elegant In White', 2159000.000, 0.000, 420, '', '', '2020-10-07 00:00:00', 1, 'Gi_HoaLanElegantInWhite_1024x1024@2x.jpg', NULL),
	(32, 'Giỏ Hoa Lan Delicacy Of The Moon', 1369000.000, 0.000, 267, '', '', '2020-10-07 00:00:00', 1, 'Gi_HoaLanDelicacyOfTheMoon_1024x1024@2x.jpg', NULL),
	(33, 'Bó Hoa Gentle Love', 759000.000, 0.000, 175, '', '', '2020-10-07 00:00:00', 1, 'gentle-love-hcmc-hanoi_1024x1024@2x.jpg', NULL),
	(34, 'Giỏ Hoa Cát Tường & Cẩm Chướng Trắng Eternal Bond', 539000.000, 0.000, 113, '', '', '2020-10-07 00:00:00', 1, 'eternalbonddd_1024x1024@2x.jpg', NULL),
	(35, 'Giỏ hoa Diamond Love', 569000.000, 0.000, 104, '', '', '2020-10-07 00:00:00', 1, 'diamondlove_1024x1024@2x.jpg', NULL),
	(36, 'Bó Hoa Day Dreamer', 369000.000, 0.000, 410, '', '', '2020-10-07 00:00:00', 1, 'daydreamer_1_1024x1024@2x.jpg', NULL),
	(37, 'Hộp Hoa Gỗ Come And Kiss Me', 519000.000, 0.000, 483, '', '', '2020-10-07 00:00:00', 1, 'ComeAndKissMe_C_mTron1_1024x1024@2x.jpg', NULL),
	(38, 'Chậu Hoa Lan Vanilla Butterfly', 4499000.000, 0.000, 102, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanVanillaButterfly_1024x1024@2x.jpg', NULL),
	(39, 'Chậu Hoa Lan Spring In Blossom', 4059000.000, 0.000, 401, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanSpringInBlossom_1024x1024@2x.jpg', NULL),
	(40, 'Chậu Hoa Lan Parade Of Magenta', 1899000.000, 0.000, 301, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanParadeOfMagenta_1024x1024@2x.jpg', NULL),
	(41, 'Chậu Hoa Lan Morning Dew', 4059000.000, 0.000, 381, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanMorningDew_1024x1024@2x.jpg', NULL),
	(42, 'Chậu Hoa Lan Midnight', 1469000.000, 0.000, 222, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanMidnight_1024x1024@2x.jpg', NULL),
	(43, 'Chậu Hoa Lan Melody Of Joy', 2329000.000, 0.000, 283, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanMelodyOfJoy_1024x1024@2x.jpg', NULL),
	(44, 'Chậu Hoa Lan Break Of Dawn', 599000.000, 0.000, 482, '', '', '2020-10-07 00:00:00', 1, 'Ch_uHoaLanBreakOfDawn_1024x1024@2x.jpg', NULL),
	(45, 'Bó Hoa Yellow Garden', 449000.000, 0.000, 262, '', '', '2020-10-07 00:00:00', 1, 'BoHoaYellowGarden_87092941-9d4c-42d3-a3cf-5f0694af9c0a_1024x1024@2x.jpg', NULL),
	(46, 'Bó Hoa Twilight', 749000.000, 0.000, 371, '', '', '2020-10-07 00:00:00', 1, 'BoHoaTwilight_1024x1024@2x.jpg', NULL),
	(47, 'Bó Hoa The Ocean Breeze', 499000.000, 0.000, 397, '', '', '2020-10-07 00:00:00', 1, 'BoHoaTheOceanBreezeBridal_1024x1024@2x.jpg', NULL),
	(48, 'Bó Hoa Thả Bình Oriental Bloom', 329000.000, 0.000, 329, '', '', '2020-10-07 00:00:00', 1, 'BoHoaTh_BinhOrientalBloom_1024x1024@2x.jpg', NULL),
	(49, 'Bó Hoa Thả Bình Hoa Đất', 1099000.000, 0.000, 301, '', '', '2020-10-07 00:00:00', 1, 'BoHoaTh_BinhHoaD_t_1024x1024@2x.jpg', NULL),
	(50, 'Bó Hoa Roseanne', 449000.000, 749000.000, 294, '', '', '2020-10-07 00:00:00', 1, 'Bo-Hoa-Roseanne_1024x1024@2x.jpg', NULL),
	(51, 'Bó Hoa Purple Desire', 439000.000, 0.000, 419, '', '', '2020-10-07 00:00:00', 1, 'BoHoaPurpleDesire_1024x1024@2x.jpg', NULL),
	(52, 'Bó Hoa Pink Princess', 669000.000, 0.000, 428, '', '', '2020-10-07 00:00:00', 1, 'BoHoaPinkPrincess_c1ac38bc-39bd-4427-9c3b-9bc88d65af15_1024x1024@2x.jpg', NULL),
	(53, 'Bó Hoa Passionate Heart', 419000.000, 0.000, 358, '', '', '2020-10-07 00:00:00', 1, 'BoHoaPassionateHeart_1024x1024@2x.jpg', NULL),
	(54, 'Bó Hoa Million Little Things', 819000.000, 0.000, 378, '', '', '2020-10-07 00:00:00', 1, 'bo-hoa-million-little-things-1_1_1024x1024@2x.jpg', NULL),
	(55, 'Bó Hoa Make Me Smile', 369000.000, 0.000, 326, '', '', '2020-10-07 00:00:00', 1, 'BoHoaMakeMeSmile_1024x1024@2x.jpg', NULL),
	(56, 'Bó Hoa Love At First Sight', 1039000.000, 0.000, 283, '', '', '2020-10-07 00:00:00', 1, 'bo-hoa-love-at-first-sight-1_1_1024x1024@2x.jpg', NULL),
	(57, 'Bó Hoa Hướng Dương Shiny Baby', 419000.000, 0.000, 267, '', '', '2020-10-07 00:00:00', 1, 'BoHoaH_ngD_ngShinyBaby_1024x1024@2x.jpg', NULL),
	(58, 'Bó Hoa Enchanted', 1549000.000, 0.000, 369, '', '', '2020-10-07 00:00:00', 1, 'BoHoaEnchanted_1024x1024@2x.jpg', NULL),
	(59, 'Bó Hoa Dream Of You', 429000.000, 0.000, 210, '', '', '2020-10-07 00:00:00', 1, 'BoHoaDreamofYou_1024x1024@2x.jpg', NULL),
	(60, 'Bó Hoa Doors To Heaven', 289000.000, 0.000, 238, '', '', '2020-10-07 00:00:00', 1, 'BoHoaDoorsToHeavenCaoCap-web_1024x1024@2x.jpg', NULL),
	(61, 'Bó Hoa Dear Daises', 769000.000, 0.000, 409, '', '', '2020-10-07 00:00:00', 1, 'BoHoaDearDaises_1024x1024@2x.jpg', NULL),
	(62, 'Bó Hoa Cherish Bridal', 789000.000, 0.000, 404, '', '', '2020-10-07 00:00:00', 1, 'BoHoaCherishBridal_1024x1024@2x.jpg', NULL),
	(63, 'Bó Hoa Be Grateful', 529000.000, 0.000, 215, '', '', '2020-10-07 00:00:00', 1, 'bo-hoa-be-grateful-1_1_1024x1024@2x.jpg', NULL),
	(64, 'Bó Hoa Autumn Melody', 439000.000, 0.000, 224, '', '', '2020-10-07 00:00:00', 1, 'BoHoaAutumnMelody_1024x1024@2x.jpg', NULL),
	(65, 'Hộp Hoa Blooms Of Love', 1029000.000, 0.000, 497, '', '', '2020-10-07 00:00:00', 1, 'Blooms-Of-Love_dc2f1bd1-fc27-4f43-b2bd-2a2529aff895_1024x1024@2x.jpg', NULL),
	(66, 'Bình Hoa Thủy Tinh Loving Me Softly', 639000.000, 0.000, 387, '', '', '2020-10-07 00:00:00', 1, 'BinhHoaTh_yTinhLovingMeSoftly_1024x1024@2x.jpg', NULL),
	(67, 'Bình Hoa Thủy Tinh Fire For The Soul', 679000.000, 0.000, 374, '', '', '2020-10-07 00:00:00', 1, 'BinhHoaTh_yTinhFireForTheSoul_1024x1024@2x.jpg', NULL),
	(68, 'Giỏ Hoa Anna\'s Garden', 329000.000, 549000.000, 240, '', '', '2020-10-07 00:00:00', 1, 'Anna_sGarden_007c9667-eb30-47d6-b724-b43f2d23c8e5_1024x1024@2x.jpg', NULL),
	(69, 'Bó Hoa Adorable Smile', 199000.000, 0.000, 327, '', '', '2020-10-07 00:00:00', 1, 'adorablesmileupshopify_1024x1024@2x.jpg', NULL),
	(70, 'Bó Hoa Hồng Beautiful You', 229000.000, 599000.000, 312, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(71, 'Bó Hoa Fabulously Red', 319000.000, 619000.000, 194, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(72, 'Bó Hoa Sway Into Love', 279000.000, 489000.000, 431, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(73, 'Bó Hoa Hồng La Vie En Rose', 299000.000, 499000.000, 293, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(74, 'Giỏ Hoa Rose Land', 279000.000, 469000.000, 153, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(75, 'Hộp Hoa Gỗ Tròn Violet Lover', 399000.000, 719000.000, 136, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(76, 'Bó Hoa Fly Me To The Moon', 339000.000, 619000.000, 468, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(77, 'Bó Hoa Hồng Fall For You', 399000.000, 669000.000, 210, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(78, 'Bó Hoa Aurora Light', 419000.000, 0.000, 298, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(79, 'Bó Hoa Hồng Forever', 419000.000, 0.000, 362, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(80, 'Combo Dear Love', 469000.000, 789000.000, 480, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(81, 'Hộp Hoa Gỗ Secret Lover', 849000.000, 0.000, 420, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(82, 'Bó Hoa Hồng Always', 369000.000, 0.000, 486, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(83, 'Bó Hoa Hồng Ecuador Red Romance', 569000.000, 0.000, 187, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(84, 'Hộp Hoa Gỗ California Lover', 819000.000, 0.000, 260, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(85, 'Bó Hoa Sweet Velvet', 589000.000, 0.000, 138, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(86, 'Bó Hoa Hồng Pretty in Pink', 539000.000, 0.000, 409, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(87, 'Bó Hoa Love In Rome', 419000.000, 0.000, 280, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(88, 'Hộp Hoa Gỗ Moonlight Lover', 789000.000, 0.000, 346, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(89, 'Giỏ Hoa Hồng Darling Darling', 599000.000, 0.000, 197, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(90, 'Bó Hoa Be Mine', 889000.000, 0.000, 257, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(91, 'Bó Hoa Hồng True Love (99 Bông)', 1590000.000, 0.000, 420, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(92, 'Hộp Hoa Gỗ Poetic Lover', 759000.000, 0.000, 109, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(93, 'Bó Hoa Hồng Grand Gesture', 529000.000, 0.000, 357, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(94, 'Combo Wonderful Celebration', 699000.000, 0.000, 440, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(95, 'Bó Hoa Hồng White Magic', 379000.000, 0.000, 232, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(96, 'Bó Hoa Jasmine', 449000.000, 0.000, 355, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(97, 'Hộp Hoa Bí Mật Rosie', 399000.000, 639000.000, 478, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(98, 'Bó Hoa Spring Day', 819000.000, 0.000, 293, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(99, 'Bó Hoa Wild At Heart', 779000.000, 0.000, 227, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(100, 'Bó Hoa Hồng Ecuador Deeply In Love', 119000.000, 0.000, 136, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(101, 'Giỏ Hoa Intimate Amber', 1090000.000, 0.000, 194, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(102, 'Trà Sữa Nha!', 219000.000, 0.000, 497, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(103, 'Bó Hoa A Million Dreams', 749000.000, 0.000, 443, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(104, 'Hộp Hoa Bí Mật Cotton Candy', 399000.000, 639000.000, 259, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(105, 'Hộp Hoa Gỗ Flaming Heart', 1090000.000, 0.000, 245, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(106, 'Giỏ Hoa Orange Blossom', 469000.000, 0.000, 291, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(107, 'Bó Hoa Hướng Dương Sunny Morning', 229000.000, 0.000, 425, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(108, 'Bó Hoa Chloe', 349000.000, 0.000, 139, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(109, 'Bó Hoa Hướng Dương Sunset Love', 369000.000, 0.000, 473, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(110, 'Bó Hoa Hướng Dương Sunny Smile', 299000.000, 0.000, 444, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(111, 'Bó Hoa Hướng Dương Sunny Days', 319000.000, 0.000, 130, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(112, 'Giỏ Hoa Be Happy', 279000.000, 469000.000, 222, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(113, 'Bó Hoa Green Garden', 389000.000, 0.000, 244, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(114, 'Giỏ Hoa Trái Cây Wish You Health', 779000.000, 0.000, 418, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(115, 'Bó Hoa Joyful Life', 319000.000, 0.000, 322, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(116, 'Combo Cuteness Overload', 499000.000, 0.000, 404, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(117, 'Kệ Hoa Time To Cheer', 1519000.000, 0.000, 327, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(118, 'Kệ Hoa Rising Stars', 1429000.000, 0.000, 212, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(119, 'Giỏ Hoa My Beloved Sunnies', 679000.000, 0.000, 470, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(120, 'Hộp Hoa Gỗ Moon River', 1259000.000, 0.000, 230, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(121, 'Combo Feel Like Sunshine', 899000.000, 0.000, 120, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(122, 'Combo Forgive Me', 319000.000, 0.000, 122, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(123, 'Bó Hoa Cẩm Chướng Carla', 299000.000, 489000.000, 179, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(124, 'Chúc Vui!', 229000.000, 0.000, 338, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(125, 'Bó Hoa Cẩm Chướng Violetta', 339000.000, 0.000, 166, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(126, 'Giỏ Hoa Enchanting Romance', 519000.000, 919000.000, 118, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(127, 'Hộp Hoa Sherbet Sunset', 469000.000, 0.000, 402, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(128, 'Combo Happy Blue', 379000.000, 0.000, 124, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(129, 'Bó Hoa Crystal Pearl', 499000.000, 0.000, 390, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(130, 'Combo Sweet Heaven', 359000.000, 0.000, 474, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(131, 'Kệ Hoa Infinite Fortune', 1329000.000, 0.000, 154, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(132, 'Kệ Hoa Mighty Joy', 1699000.000, 0.000, 218, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(133, 'Kệ Hoa Summer Shine', 1049000.000, 0.000, 274, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(134, 'Kệ Hoa Lavish Lustre', 1479000.000, 0.000, 176, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(135, 'Bó Hoa Pink Moon', 249000.000, 469000.000, 203, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(136, 'Em Ơi!', 219000.000, 0.000, 101, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(137, 'Hộp Hoa Coral Pink', 479000.000, 889000.000, 113, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(138, 'Hộp Hoa Cupid\'s Kisses', 679000.000, 0.000, 439, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(139, 'Bó Hoa Magical Land', 689000.000, 0.000, 268, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(140, 'Kệ Hoa Golden Times', 1649000.000, 0.000, 423, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(141, 'Kệ Hoa Shining Glory', 1519000.000, 0.000, 275, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(142, 'Vòng Hoa Chia Buồn Soft Whisper', 1919000.000, 0.000, 322, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(143, 'Giỏ Hoa Dreamlike', 929000.000, 0.000, 164, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(144, 'Bó hoa Be My Fiancée', 559000.000, 0.000, 426, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(145, 'Kệ Hoa The Pinnacle Of Success', 1219000.000, 0.000, 359, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(146, 'Kệ Hoa Blushing Blossoms', 1019000.000, 0.000, 223, '', '', '2020-10-07 00:00:00', 1, '', NULL),
	(147, 'Combo Tune In For Love', 719000.000, 0.000, 185, '', '', '2020-10-07 00:00:00', 1, NULL, NULL);
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
