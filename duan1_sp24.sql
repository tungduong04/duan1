-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 24, 2024 lúc 03:10 PM
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
-- Cơ sở dữ liệu: `duanmau2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pttt` tinyint(1) NOT NULL,
  `date` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nn_name` varchar(255) NOT NULL,
  `nn_address` varchar(255) NOT NULL,
  `nn_tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `name`, `address`, `tel`, `email`, `pttt`, `date`, `total`, `status`, `nn_name`, `nn_address`, `nn_tel`) VALUES
(4, 1, 'Dương Nguyễn', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '02:12:am 22/01/2024', 360000, 3, '', '', ''),
(8, 0, 'Dương Nguyễn', 'bắc từ liêm', '0392845409', '18hieu1@gmail.com', 1, '14:48:pm 24/01/2024', 540000, 0, '', '', ''),
(9, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '14:51:pm 24/01/2024', 840000, 0, '', '', ''),
(10, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '14:56:pm 24/01/2024', 0, 0, '', '', ''),
(11, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '14:57:pm 24/01/2024', 0, 0, '', '', ''),
(12, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '14:57:pm 24/01/2024', 300000, 0, '', '', ''),
(13, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '14:58:pm 24/01/2024', 0, 0, '', '', ''),
(14, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '15:00:pm 24/01/2024', 0, 0, '', '', ''),
(15, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '15:02:pm 24/01/2024', 300000, 0, '', '', ''),
(16, 1, 'Admin', 'bắc từ liêm', '0392845409', 'admin@fpt.edu.vn', 1, '15:06:pm 24/01/2024', 300000, 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'tung duong', 1, 1, '2023-10-03'),
(2, 'duongg', 3, 3, '2023-10-11'),
(10, 'san pham dep qua', 1, 1, '0000-00-00'),
(11, 'ưerwer', 1, 1, '0000-00-00'),
(12, 'san pham dep qua111', 1, 1, '0000-00-00'),
(13, 'ưerwer1111', 1, 1, '0000-00-00'),
(14, '1234', 1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` double(10,2) NOT NULL,
  `idhoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idhoadon`) VALUES
(5, 1, 3, '1006.jpg', 'Laptop Asus VivoBook Go 14', 180000, 1, 180000.00, 4),
(6, 1, 3, '1006.jpg', 'Laptop Asus VivoBook Go 14', 180000, 1, 180000.00, 4),
(9, 1, 3, '1006.jpg', 'Laptop Asus VivoBook Go 14', 180000, 1, 180000.00, 9),
(10, 1, 2, '1060.jpg', 'Xiaomi Redmi Note 12 Pro', 120000, 1, 120000.00, 9),
(11, 1, 2, '1060.jpg', 'Xiaomi Redmi Note 12 Pro', 120000, 1, 120000.00, 9),
(12, 1, 2, '1060.jpg', 'Xiaomi Redmi Note 12 Pro', 120000, 1, 120000.00, 9),
(13, 1, 1, '1061.jpg', 'Apple MacBook Air M1', 300000, 1, 300000.00, 9),
(14, 1, 1, '1061.jpg', 'Apple MacBook Air M1', 300000, 1, 300000.00, 12),
(15, 1, 2, '1060.jpg', 'Xiaomi Redmi Note 12 Pro', 120000, 1, 120000.00, 15),
(16, 1, 3, '1006.jpg', 'Laptop Asus VivoBook Go 14', 180000, 1, 180000.00, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Điện Thoại'),
(3, '11111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Apple MacBook Air M1', 300000.00, '1061.jpg', 'Sản phẩm cấu hình cơ bản bao gồm một GPU bảy lõi, bộ nhớ lưu trữ 256GB SSD, cũng như 8GB RAM bộ nhớ. Phiên bản nâng cấp với GPU tám lõi và bộ nhớ 512GB SSD có giá khởi điểm là 1249$. Cấu hình tối đa sẽ bao gồm 16GB RAM và 2TB dung lượng lưu trữ. Máy có ba tuỳ chọn màu sắc giống sản phẩm tiền nhiệm bao gồm vàng (gold), bạc (silver) và xám không gian (Space gray)', 10, 1),
(2, 'Xiaomi Redmi Note 12 Pro', 120000.00, '1060.jpg', 'Realme 2 là chiếc điện thoại pin trâu được nâng cấp dung lượng pin với 4.230 mAh (dung lượng pin lớn hơn 24% Realme 1) kết hợp với tính năng AI Power Manager hứa hẹn thời gian sử dụng lâu dài.', 9, 2),
(3, 'Laptop Asus VivoBook Go 14', 180000.00, '1006.jpg', 'ASUS Vivobook E1404FA-NK186W thuộc dòng Vivobook Go 14, dòng laptop hiệu năng cao giá rẻ giúp bạn làm việc hiệu quả mọi lúc mọi nơi. Với bộ vi xử lý AMD 7000 series mạnh mẽ, trang bị sẵn tới 16GB RAM, 512GB SSD, Vivobook E1404FA sẽ mang đến trải nghiệm làm việc thoải mái, vô cùng mượt mà.', 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `Add` varchar(200) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `Add`, `tel`, `role`) VALUES
(1, 'Admin', '123456', 'admin@fpt.edu.vn', 'bắc từ liêm', 'uploads/1700647071anh_nen2.jpg', '0392845409', 1),
(2, 'Tùng Dương', '123456', 'duongnptph36736@gmail.com\r\n', NULL, NULL, NULL, 2),
(3, 'Thành Trung', '1234565', 'trungnt173@fpt.edu.vn', 'Hà Nội', NULL, NULL, 2),
(4, 'Admin2', '123456', 'tungduong100000@gmail.com', NULL, NULL, NULL, 0),
(5, 'Admin22222', '123456', 'duongnptph36736@fpt.edu.vn', NULL, NULL, NULL, 0),
(6, 'Admin', '123456', 'admin@fpt.edu.vn', NULL, NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `2` (`idpro`),
  ADD KEY `3` (`iduser`),
  ADD KEY `1` (`idhoadon`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `1` FOREIGN KEY (`idhoadon`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `3` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
