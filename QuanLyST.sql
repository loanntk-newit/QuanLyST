-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:8889
-- Thời gian đã tạo: Th5 06, 2024 lúc 08:24 AM
-- Phiên bản máy phục vụ: 5.7.39
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `QuanLyST`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CTPHIEUNHAP`
--

CREATE TABLE `CTPHIEUNHAP` (
  `MaPN` varchar(5) NOT NULL,
  `MaHH` varchar(5) NOT NULL,
  `SLuongNhap` tinyint(4) NOT NULL,
  `GiaNhap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CTPHIEUXUAT`
--

CREATE TABLE `CTPHIEUXUAT` (
  `MaPX` varchar(5) NOT NULL,
  `MaHH` varchar(5) NOT NULL,
  `SLuongBan` tinyint(4) NOT NULL,
  `GiaNhap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `HANGHOA`
--

CREATE TABLE `HANGHOA` (
  `MaHH` varchar(5) NOT NULL,
  `MaNhom` char(5) NOT NULL,
  `DonViTinh` varchar(5) NOT NULL,
  `TrongLuong` tinyint(4) DEFAULT NULL,
  `HanSuDung` date NOT NULL,
  `TenHangHoa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `HANGHOA`
--

INSERT INTO `HANGHOA` (`MaHH`, `MaNhom`, `DonViTinh`, `TrongLuong`, `HanSuDung`, `TenHangHoa`) VALUES
('MHH01', 'MN001', 'Kg', 2, '2024-05-06', 'Hàng Hóa 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KHACHHANG`
--

CREATE TABLE `KHACHHANG` (
  `MaKH` varchar(5) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `STKKH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `KHACHHANG`
--

INSERT INTO `KHACHHANG` (`MaKH`, `TenKH`, `GioiTinh`, `STKKH`) VALUES
('KH_01', 'Khách Hàng 01', 0, '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `NHACUNGCAP`
--

CREATE TABLE `NHACUNGCAP` (
  `MaNCC` varchar(5) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `DiaChiNCC` varchar(100) NOT NULL,
  `SoDTNCC` varchar(14) NOT NULL,
  `SoTKNCC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `NHACUNGCAP`
--

INSERT INTO `NHACUNGCAP` (`MaNCC`, `TenNCC`, `DiaChiNCC`, `SoDTNCC`, `SoTKNCC`) VALUES
('MNCC1', 'Nhà Cung Cấp 1', 'Địa chỉ 1', '0912345678', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `NHANVIEN`
--

CREATE TABLE `NHANVIEN` (
  `MaNV` varchar(5) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SoDT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `NHANVIEN`
--

INSERT INTO `NHANVIEN` (`MaNV`, `TenNV`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SoDT`) VALUES
('MNV01', 'Nhân Viên 01', 1, '2024-05-06', 'Địa chỉ 01', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `NHOMHANG`
--

CREATE TABLE `NHOMHANG` (
  `MaNhom` char(5) NOT NULL,
  `TenNhom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `NHOMHANG`
--

INSERT INTO `NHOMHANG` (`MaNhom`, `TenNhom`) VALUES
('MN001', 'Mã Nhóm 001'),
('MN002', 'Mã Nhóm 002'),
('MN003', 'Mã Nhóm 003');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PHIEUNHAP`
--

CREATE TABLE `PHIEUNHAP` (
  `MaPN` varchar(5) NOT NULL,
  `MaNCC` varchar(5) NOT NULL,
  `MaNV` varchar(5) NOT NULL,
  `NgayNhap` date NOT NULL,
  `TongTienNhap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PHIEUXUAT`
--

CREATE TABLE `PHIEUXUAT` (
  `MaPX` varchar(5) NOT NULL,
  `MaKH` varchar(5) NOT NULL,
  `MaNV` varchar(5) NOT NULL,
  `TongTienXuat` float NOT NULL,
  `NgayXuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `CTPHIEUNHAP`
--
ALTER TABLE `CTPHIEUNHAP`
  ADD PRIMARY KEY (`MaPN`,`MaHH`),
  ADD KEY `FK_CTPHIEUNHAP_HANGHOA` (`MaHH`);

--
-- Chỉ mục cho bảng `CTPHIEUXUAT`
--
ALTER TABLE `CTPHIEUXUAT`
  ADD PRIMARY KEY (`MaPX`,`MaHH`),
  ADD KEY `FK_CTPHIEUXUAT_HANGHOA` (`MaHH`);

--
-- Chỉ mục cho bảng `HANGHOA`
--
ALTER TABLE `HANGHOA`
  ADD PRIMARY KEY (`MaHH`);

--
-- Chỉ mục cho bảng `KHACHHANG`
--
ALTER TABLE `KHACHHANG`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `NHACUNGCAP`
--
ALTER TABLE `NHACUNGCAP`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `NHANVIEN`
--
ALTER TABLE `NHANVIEN`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `NHOMHANG`
--
ALTER TABLE `NHOMHANG`
  ADD PRIMARY KEY (`MaNhom`);

--
-- Chỉ mục cho bảng `PHIEUNHAP`
--
ALTER TABLE `PHIEUNHAP`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `FK_PHIEUNHAP_NHANVIEN` (`MaNV`),
  ADD KEY `FK_PHIEUNHAP_NHACUNGCAP` (`MaNCC`);

--
-- Chỉ mục cho bảng `PHIEUXUAT`
--
ALTER TABLE `PHIEUXUAT`
  ADD PRIMARY KEY (`MaPX`),
  ADD KEY `FK_PHIEUXUAT_KHACHHANG` (`MaKH`),
  ADD KEY `FK_PHIEUXUAT_NHANVIEN` (`MaNV`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `CTPHIEUNHAP`
--
ALTER TABLE `CTPHIEUNHAP`
  ADD CONSTRAINT `FK_CTPHIEUNHAP_HANGHOA` FOREIGN KEY (`MaHH`) REFERENCES `HANGHOA` (`MaHH`),
  ADD CONSTRAINT `ctphieunhap_ibfk_1` FOREIGN KEY (`MaPN`) REFERENCES `PHIEUNHAP` (`MaPN`);

--
-- Các ràng buộc cho bảng `CTPHIEUXUAT`
--
ALTER TABLE `CTPHIEUXUAT`
  ADD CONSTRAINT `FK_CTPHIEUXUAT_HANGHOA` FOREIGN KEY (`MaHH`) REFERENCES `HANGHOA` (`MaHH`),
  ADD CONSTRAINT `FK_CTPHIEUXUAT_PHIEUXUAT` FOREIGN KEY (`MaPX`) REFERENCES `PHIEUXUAT` (`MaPX`);

--
-- Các ràng buộc cho bảng `PHIEUNHAP`
--
ALTER TABLE `PHIEUNHAP`
  ADD CONSTRAINT `FK_PHIEUNHAP_NHACUNGCAP` FOREIGN KEY (`MaNCC`) REFERENCES `NHACUNGCAP` (`MaNCC`),
  ADD CONSTRAINT `FK_PHIEUNHAP_NHANVIEN` FOREIGN KEY (`MaNV`) REFERENCES `NHANVIEN` (`MaNV`);

--
-- Các ràng buộc cho bảng `PHIEUXUAT`
--
ALTER TABLE `PHIEUXUAT`
  ADD CONSTRAINT `FK_PHIEUXUAT_KHACHHANG` FOREIGN KEY (`MaKH`) REFERENCES `KHACHHANG` (`MaKH`),
  ADD CONSTRAINT `FK_PHIEUXUAT_NHANVIEN` FOREIGN KEY (`MaNV`) REFERENCES `NHANVIEN` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
