-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 04:38 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `review`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhchon`
--

CREATE TABLE `binhchon` (
  `idBC` int(11) DEFAULT NULL,
  `MoTa` varchar(50) DEFAULT NULL,
  `idLT` int(11) DEFAULT NULL,
  `SoLanChon` int(11) DEFAULT NULL,
  `AnHien` int(11) DEFAULT NULL,
  `ThuTu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhchon`
--

INSERT INTO `binhchon` (`idBC`, `MoTa`, `idLT`, `SoLanChon`, `AnHien`, `ThuTu`) VALUES
(1, 'bạn nghỉ học chăm chỉ có kết quả tốt không ?', 1, 13, 1, 0),
(2, 'bạn có nghĩ CR7 là cầu thủ Vị đại nhất thế giới kh', 1, 2, 1, 0),
(3, 'bạ thich làm nghề gì dưới đây ', 9, 1, 1, 0),
(4, 'bạ sẽ cho con bạn làm gì khi nghủ hè', 2, 3, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongan`
--

CREATE TABLE `phuongan` (
  `idPA` int(11) DEFAULT NULL,
  `MoTa` varchar(50) DEFAULT NULL,
  `SoLanChon` int(11) DEFAULT NULL,
  `idBC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongan`
--

INSERT INTO `phuongan` (`idPA`, `MoTa`, `SoLanChon`, `idBC`) VALUES
(1, 'là tính tự giác mà mọi người cần có ', 21, 1),
(2, 'nội dung kh phong phú lắm ', 5, 3),
(3, 'làm công chức nhà nước', 0, 3),
(4, 'làm công ty', 0, 3),
(5, 'làm rong cơ quan nghiên cứu ', 0, 3),
(6, 'các lĩnh vực khác ', 2, 1),
(7, 'chất lượng bình thường thoi ', 1, 3),
(8, 'tất nhiên anh ấy là cầu thủ vĩ đại nhất thể gới rò', 2, 2),
(9, 'toi nghĩ là mesi ', 2, 2),
(10, 'đi học thêm ', 0, 3),
(11, 'đi học tiếng pháp để ăn tối cùng mbape', 0, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
