-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 03:44 PM
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
(11, 'Sản phẩm kém quá', 3, 73, '2023-10-05'),
(12, 'hay', 3, 71, '2023-10-08'),
(13, 'Cũng tạm được', 3, 76, '2023-10-05'),
(14, 'sản phẩm kém quá', 11, 73, '2023-10-13'),
(18, 'hay', 10, 78, '2023-10-10'),
(19, 'hay', 10, 78, '2023-10-10'),
(21, '123', 10, 78, '2023-10-10'),
(24, 'sp kém', 10, 74, '2023-10-10'),
(25, 'sp kém', 10, 74, '2023-10-10'),
(33, 'khanh', 10, 73, '2023-10-10'),
(34, '123123123', 10, 73, '2023-10-10'),
(36, '123', 10, 74, '2023-10-10'),
(37, 'dddd', 10, 74, '2023-10-10'),
(58, '123123', 10, 74, '2023-10-12'),
(59, '123123', 10, 74, '2023-10-12'),
(60, 'sản phẩm cũng đc', 10, 76, '2023-10-12'),
(61, 'đắt quá', 10, 58, '2023-10-12'),
(62, 'cũng tạm đc', 1, 71, '2023-10-12'),
(63, '1', 10, 71, '2023-10-14'),
(66, 'sp giá rẻ\r\n', 10, 69, '2023-10-18'),
(67, '1111', 2, 71, '2023-10-13'),
(70, 'hay lam aaaaaa', 10, 78, '2023-10-18'),
(71, 'cc', 1, 74, '2023-10-18'),
(73, 'cũng đc đấy', 10, 77, '2023-10-21');

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
(9, 'Tivi '),
(13, 'Đồng hồ'),
(15, 'Nội y');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `name`, `price`, `img`, `iduser`, `idpro`) VALUES
(6, 'Tissot 35mm Nữ T050.207.37.017.04', 7900000, '1696515777_Tissot 35mm Nữ T050.207.37.017.04.jpeg', 0, 77),
(7, 'Tissot 35mm Nữ T050.207.37.017.04', 7900000, '1696515777_Tissot 35mm Nữ T050.207.37.017.04.jpeg', 0, 77),
(8, 'Tissot 35mm Nữ T050.207.37.017.04', 7900000, '1696515777_Tissot 35mm Nữ T050.207.37.017.04.jpeg', 0, 77),
(50, 'Tissot 35mm Nữ T050.207.37.017.05', 11890000, 'Tissot 35mm Nu T050.207.37.017.05.jpeg', 10, 78),
(51, 'OPPO Reno10 5G', 6800000, '1696515241_OPPO Reno10 5G.jpg', 10, 73),
(52, 'Tissot 35mm Nữ T050.207.17.117.05', 8700000, 'Tissot 35mm Nu T050.207.17.117.05.jpeg', 12, 76),
(53, 'Tissot 35mm Nữ T050.207.17.117.05', 8700000, 'Tissot 35mm Nu T050.207.17.117.05.jpeg', 10, 76),
(54, 'Laptop Asus VivoBook Go 14', 8900000, '1696514853_Laptop Asus VivoBook Go 14.jpg', 1, 69);

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
(58, 'Laptop gaming MSI GF63 Thin 11SC', 8900000.00, 'Laptop gaming MSI GF63 Thin 11SC.jpg', 'Sau những thành công của những phiên bản laptop Acer Nitro 5 tiền nhiệm, gần đây laptop gaming Acer Nitro 5 đã được ra mắt cùng nhiều cải tiến vượt trội, với diện mạo mới và trang bị cấu hình cực khủng. Chiếc máy tính xách tay Acer Nitro 5 RTX 3050Ti này chắc chắn là siêu phẩm laptop gaming Acer chiến game đáng sở hữu nhất hiện nay. Bạn hãy cùng chúng tôi đánh giá mẫu laptop Acer, cụ thể là mẫu laptop Acer Core i5 Tiger ngay dưới đây nhé!', 12, 1),
(59, 'Macbook Air 15 inch M2 2023', 18000000.00, 'Macbook Air 15 inch M2 2023.jpg', ' Là chiếc laptop có cấu hình MẠNH NHẤT và cũng là chiếc laptop gaming DUY NHẤT trong tầm giá sở hữu chip Intel Core i5 gen 12 cùng card đồ họa rời RTX 3050Ti, trang bị công nghệ Ray Tracing hỗ trợ khử bóng, khử răng cưa tốt, giúp bạn chơi game, làm đồ họa 2D, 3D ngon lành', 12, 1),
(69, 'Laptop Asus VivoBook Go 14', 8900000.00, '1696514853_Laptop Asus VivoBook Go 14.jpg', 'Là một sản phẩm thuộc series Asus Vivobook do đó laptop Asus Vivobook Go 14 E1404FA-NK177W sở hữu nhiều đặc điểm của series này. Bên cạnh đó là nhiều tính năng được nâng cấp, hỗ trợ tối ưu trong quá trình sử dụng của người dùng.', 8, 1),
(70, 'Laptop Lenovo Ideapad 5 Pro', 7800000.00, '1696514909_Laptop Lenovo Ideapad 5 Pro.jpg', 'Laptop Asus Vivobook Go 14 E1404FA-NK177W sở hữu một thiết kế siêu mỏng nhẹ với tổng trọng lượng chỉ khoảng 1.38kg. laptop với thiết kế bản lề phẳng có thể mở rộng lên đến 180 độ. Bàn phím thiết bị với thiết kế rút gọn sở hữu một hành trình phím tối ưu cùng độ nảy tốt giúp mang lại cho người dùng trải nghiệm gõ thoải mái.', 9, 1),
(71, 'iPhone 14 Pro Max', 12300000.00, '1696515022_iPhone 14 Pro Max.jpg', 'iPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội', 34, 2),
(72, 'Samsung Galaxy Z Flip5', 12000000.00, '1696515123_Samsung Galaxy Z Flip5.jpg', 'Samsung Galaxy Z Flip4 128GB đã chính thức ra mắt thị trường công nghệ, đánh dấu sự trở lại của Samsung trên con đường định hướng người dùng về sự tiện lợi trên những chiếc điện thoại gập. Với độ bền được gia tăng cùng kiểu thiết kế đẹp mắt giúp Flip4 trở thành một trong những tâm điểm sáng giá cho nửa cuối năm 2022.', 34, 2),
(73, 'OPPO Reno10 5G', 6800000.00, '1696515241_OPPO Reno10 5G.jpg', '\r\nOPPO Reno10 5G là một chiếc điện thoại thông minh tầm trung được ra mắt vào tháng 9 năm 2023. Máy được trang bị màn hình AMOLED 6,7 inch độ phân giải Full HD+, tần số quét 120Hz, chip MediaTek Dimensity 7050, RAM 8GB, bộ nhớ trong 128GB hoặc 256GB, camera chính 64MP, camera góc siêu rộng 8MP, camera macro 2MP và camera selfie 32MP.', 14, 2),
(74, 'iPhone 14 Pro Max 256GB', 20000000.00, '1696515485_iPhone 14 Pro Max 256GB.jpg', 'iPhone 14 Pro Max đem đến những trải nghiệm không thể tìm thấy trên mọi thế hệ iPhone trước đó với màu Tím Deep Purple sang trọng, camera 48MP lần đầu xuất hiện, chip A16 Bionic và màn hình “viên thuốc” Dynamic Island linh hoạt, nịnh mắt.', 33, 2),
(75, 'Tissot 35mm Nữ T050.207.11.011.04', 12600000.00, 'Tissot 35mm Nu T050.207.11.011.04.jpeg', 'Tissot T050.207.37.017.04 là mẫu đồng hồ nữ Thụy Sỹ có độ chống nước 3ATM (30m) đủ để phái đẹp thoải mái đi mưa và rửa tay. Với cỗ máy Tissot Powermatic 80 trữ cót đến 80h, sản phẩm chắc chắn phù hợp cho nữ doanh nhân bận rộn cần xem giờ tiện lợi hoặc chị em đam mê phụ kiện thời trang tông trắng nhã nhặn.', 23, 13),
(76, 'Tissot 35mm Nữ T050.207.17.117.05', 8700000.00, 'Tissot 35mm Nu T050.207.17.117.05.jpeg', 'Tissot T050.207.37.017.04 là mẫu đồng hồ nữ Thụy Sỹ có độ chống nước 3ATM (30m) đủ để phái đẹp thoải mái đi mưa và rửa tay. Với cỗ máy Tissot Powermatic 80 trữ cót đến 80h, sản phẩm chắc chắn phù hợp cho nữ doanh nhân bận rộn cần xem giờ tiện lợi hoặc chị em đam mê phụ kiện thời trang tông trắng nhã nhặn.', 33, 13),
(77, 'Tissot 35mm Nữ T050.207.37.017.04', 7900000.00, 'Tissot 35mm Nu T050.207.37.017.04.jpeg', 'Tissot T050.207.37.017.04 là mẫu đồng hồ nữ Thụy Sỹ có độ chống nước 3ATM (30m) đủ để phái đẹp thoải mái đi mưa và rửa tay. Với cỗ máy Tissot Powermatic 80 trữ cót đến 80h, sản phẩm chắc chắn phù hợp cho nữ doanh nhân bận rộn cần xem giờ tiện lợi hoặc chị em đam mê phụ kiện thời trang tông trắng nhã nhặn.', 33, 13),
(78, 'Tissot 35mm Nữ T050.207.37.017.05', 11890000.00, 'Tissot 35mm Nu T050.207.37.017.05.jpeg', 'Tissot T050.207.37.017.04 là mẫu đồng hồ nữ Thụy Sỹ có độ chống nước 3ATM (30m) đủ để phái đẹp thoải mái đi mưa và rửa tay. Với cỗ máy Tissot Powermatic 80 trữ cót đến 80h, sản phẩm chắc chắn phù hợp cho nữ doanh nhân bận rộn cần xem giờ tiện lợi hoặc chị em đam mê phụ kiện thời trang tông trắng nhã nhặn.', 34, 13),
(98, 'Tivi Samsung 4K', 12900000.00, '1698143455_qled-4k-samsung-qa43q65a-221122-035635-550x340.jpg', 'Smart Tivi QLED 4K 43 inch Samsung QA43Q65A được mang lên trên mình thiết kế không viền 3 cạnh loại bỏ cảm giác hình ảnh bị giới hạn, chân tivi có dạng hình chữ L đẹp mắt và vững vàng. \r\nTivi Samsung 43 inch phù hợp cho các không gian vừa như: phòng ngủ, phòng khách,...', 99, 9),
(99, 'Tivi Samsung UHD', 8900000.00, '1698143491_product-279935-110522-094032-550x340.jpg', 'Smart Tivi QLED 4K 43 inch Samsung QA43Q65A được mang lên trên mình thiết kế không viền 3 cạnh loại bỏ cảm giác hình ảnh bị giới hạn, chân tivi có dạng hình chữ L đẹp mắt và vững vàng. \r\nTivi Samsung 43 inch phù hợp cho các không gian vừa như: phòng ngủ, phòng khách,...', 78, 9);

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
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Admin', '123123', 'admin@fpt.edu.vn', '12', '', 1),
(2, 'hoanglong', '123123', 'longhh7@fpt.edu.vn', '22', '0988888888', 2),
(3, 'thanhtrung', '121212', 'trungnt173@fpt.edu.vn', 'Hà Nội', NULL, 2),
(10, 'khanhtdi', '123123', 'KHANHPRO199X@GMAIL.COM', '123 Cầu giấy', '09832222222', 0),
(11, 'wp_db_khanhtd', '123123', 'khanhtdph42894@fpt.edu.vn', '', '', 0),
(12, 'hanh123', '123', 'hanh123@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_taikhoan_giohang` (`iduser`),
  ADD KEY `fk_sanpham_giohang` (`idpro`);

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
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
