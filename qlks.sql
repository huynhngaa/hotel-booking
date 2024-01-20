-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 08:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlks`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieudatphong`
--

CREATE TABLE `chitietphieudatphong` (
  `pdp_id` int(11) NOT NULL,
  `ctp_nguoilon` int(11) NOT NULL,
  `ctp_treem` int(11) NOT NULL,
  `ctp_thanhtoan` varchar(100) NOT NULL,
  `ctp_trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietphieudatphong`
--

INSERT INTO `chitietphieudatphong` (`pdp_id`, `ctp_nguoilon`, `ctp_treem`, `ctp_thanhtoan`, `ctp_trangthai`) VALUES
(1, 2, 0, 'Thanh toán bằng tiền mặt', 2),
(2, 4, 0, 'Thanh toán bằng tiền mặt', 3),
(3, 3, 0, 'Thanh toán bằng tiền mặt', 3),
(4, 3, 0, 'Thanh toán bằng tiền mặt', 3),
(5, 3, 0, 'Thanh toán bằng tiền mặt', 3),
(6, 3, 0, 'Thanh toán bằng tiền mặt', 2),
(7, 6, 0, 'Thanh toán trực tuyến', 1),
(8, 4, 0, 'Thanh toán trực tuyến', 1),
(9, 4, 0, 'Thanh toán trực tuyến', 1),
(10, 7, 5, 'Thanh toán bằng tiền mặt', 0),
(11, 3, 0, 'Thanh toán trực tuyến', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_id` int(11) NOT NULL,
  `kh_ten` varchar(50) NOT NULL,
  `kh_hinhanh` varchar(500) NOT NULL DEFAULT 'person-icon.png',
  `kh_sdt` varchar(11) DEFAULT NULL,
  `kh_email` varchar(50) DEFAULT NULL,
  `kh_diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`kh_id`, `kh_ten`, `kh_hinhanh`, `kh_sdt`, `kh_email`, `kh_diachi`) VALUES
(28, 'Nguyễn Thị Huỳnh Nga', '', '564564', '', ''),
(36, 'Trần Thị Trúc Nga', '', '545645', '', ''),
(40, 'Nguyễn Thị Huỳnh Nga', 'person-icon.png', '0112121', '', ''),
(41, 'Nguyen Thi Huynh Nga', '', '0123456789', 'huynhngaa001@gmail.com', 'Can Tho'),
(42, 'Nguyễn Thị Huỳnh ', '', '5444', '', ''),
(49, 'Nguyễn Thị Huỳnh Nga', '', '1212121', '', ''),
(50, 'Nguyễn Thị Huỳnh Nga', 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png', NULL, NULL, ''),
(51, 'Trần Thị Trúc Nga', 'person-icon.png', NULL, NULL, ''),
(52, 'Thui Lon', 'person-icon.png', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `lp_id` int(11) NOT NULL,
  `lp_ten` varchar(50) NOT NULL,
  `lp_succhua` int(11) NOT NULL,
  `lp_hinhanh` varchar(500) NOT NULL,
  `lp_mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`lp_id`, `lp_ten`, `lp_succhua`, `lp_hinhanh`, `lp_mota`) VALUES
(1, 'Phòng Superior', 2, 'co-nhung-loai-phong-khach-san-nao-02-06-18-2.jpg', ' Đây là loại phòng cơ bản nhất tại hầu hết các khách sạn, một số khách sạn 5 sao có thể không có loại phòng này. Phòng thường khá nhỏ, được bố trí ở các tầng thấp, không có view đẹp và chỉ gồm những vật dụng cơ bản nhất.'),
(2, 'Phòng Standard', 2, 'co-nhung-loai-phong-khach-san-nao-02-06-18-1.jpg', ' Loại phòng khách sạn này tương đối chất lượng hơn phòng Standard, diện tích phòng được tăng thêm, có view nhìn và cách bày trí đẹp mắt hơn hẳn và thường nằm ở những tầng gần giữa của tòa nhà. Với giá phòng khá vừa túi tiền, khá nhiều du khách lựa chọn loại phòng này cho chuyến đi của mình.'),
(3, 'Phòng Deluxe', 2, 'image.jpg', 'Loại phòng khách sạn này thường nằm ở các tầng giữa trở lên nên sở hữu view nhìn ra quang cảnh bên ngoài khá đẹp. Ở vị trí này, chất lượng phòng được nâng lên mức cao cấp với các tiện nghi hiện đại và tốt nhất do đó giá phòng cũng thường khá đắt so với hai loại phòng nêu trên.'),
(4, 'Phòng Suite', 2, 'co-nhung-loai-phong-khach-san-nao-02-06-18-4-2.jpg', 'Đây là loại phòng cao cấp nhất trong tất cả các loại phòng khách sạn, thông thường được bố trí ở các tầng cao nhất. Để nhấn mạnh về độ cao cấp của loại phòng này, mỗi khách sạn lại sáng tạo ra những cách gọi khác nhau như Phòng Tổng Thống (President room), Phòng Hoàng Gia (Royal Suite), Phòng Nữ Hoàng (Queen room),…'),
(5, 'Phòng Connecting', 2, 'product-07.jpg', 'Loại phòng này khá đặc biệt, không nằm trong cách phân chia theo chất lượng phòng trong khách sạn. Phòng connecting room là hai phòng riêng biệt có cửa thông nhau. Loại phòng này thường được thiết kế dành cho đối tượng khách gia đình (phòng Family) hoặc khách nhóm (phòng Group).');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_id` int(11) NOT NULL,
  `nv_ten` varchar(50) NOT NULL,
  `nv_hinhanh` varchar(200) NOT NULL,
  `nv_ngsinh` date NOT NULL,
  `nv_sdt` varchar(10) NOT NULL,
  `nv_email` varchar(50) NOT NULL,
  `nv_diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`nv_id`, `nv_ten`, `nv_hinhanh`, `nv_ngsinh`, `nv_sdt`, `nv_email`, `nv_diachi`) VALUES
(2, 'Nguyễn Thị Huỳnh Nga', '', '2022-11-02', '0115131', '44444444445', '555757575'),
(3, '324', 'user.png', '0000-00-00', '324', '3244', '4324');

-- --------------------------------------------------------

--
-- Table structure for table `phieudatphong`
--

CREATE TABLE `phieudatphong` (
  `pdp_id` int(11) NOT NULL,
  `kh_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pdp_ngaytao` datetime NOT NULL DEFAULT current_timestamp(),
  `pdp_ngayden` date NOT NULL,
  `pdp_ngaydi` date NOT NULL,
  `pdp_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `phieudatphong`
--

INSERT INTO `phieudatphong` (`pdp_id`, `kh_id`, `p_id`, `pdp_ngaytao`, `pdp_ngayden`, `pdp_ngaydi`, `pdp_gia`) VALUES
(1, 28, 44, '2022-11-28 13:26:50', '2022-11-08', '2022-11-23', 75050000),
(2, 41, 1, '2022-11-28 22:08:55', '2022-11-28', '2022-11-30', 670000),
(3, 41, 44, '2022-11-29 09:35:57', '2022-11-29', '2022-12-01', 850000),
(4, 41, 44, '2022-11-29 09:36:11', '2022-11-29', '2022-12-01', 850000),
(5, 41, 44, '2022-11-29 09:47:22', '2022-11-29', '2022-12-01', 850000),
(6, 41, 44, '2022-11-29 09:48:47', '2022-11-29', '2022-12-01', 1000000),
(7, 50, 44, '2022-11-30 02:15:18', '2022-11-30', '2022-12-02', 1200000),
(8, 51, 44, '2022-11-30 19:08:05', '2022-11-30', '2022-12-03', 1500000),
(9, 51, 1, '2022-12-02 17:08:51', '2022-12-02', '2022-12-09', 2020000),
(10, 52, 44, '2022-12-06 12:46:37', '2022-12-06', '2022-12-10', 2500000),
(11, 51, 47, '2022-12-08 13:53:55', '2022-12-08', '2022-12-31', 5850000);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `p_id` int(11) NOT NULL,
  `lp_id` int(11) DEFAULT NULL,
  `p_ten` varchar(50) DEFAULT NULL,
  `p_hinhanh` varchar(500) NOT NULL,
  `p_giuong` int(11) NOT NULL,
  `p_gia` float NOT NULL,
  `p_dientich` int(11) NOT NULL,
  `p_view` varchar(200) NOT NULL,
  `p_mota` varchar(500) NOT NULL DEFAULT 'Phòng nghỉ tại đây rộng rãi và được trang trí trang nhã. Các phòng có máy điều hòa, khu vực ghế ngồi, TV màn hình phẳng và két an toàn. Chỗ ở cũng được bố trí tủ lạnh và ấm đun nước điện. Du khách có thể ngắm nhìn quang cảnh thành phố từ một số phòng. Phòng tắm riêng có vòi sen/bồn tắm, máy sấy tóc và đồ vệ sinh cá nhân miễn phí.',
  `p_trangthai` tinyint(1) DEFAULT NULL COMMENT 'co nguoi =1; trong= 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`p_id`, `lp_id`, `p_ten`, `p_hinhanh`, `p_giuong`, `p_gia`, `p_dientich`, `p_view`, `p_mota`, `p_trangthai`) VALUES
(1, 1, 'Phòng Superior 101', 'R-Hotel-Geelong-Hotel-Room-11.jpg', 1, 260000, 30, 'Hướng nhìn sân trong', '       aaaaaaaaaa', 1),
(44, 1, 'Phòng Superior 102', 'tongthong.jpg', 2, 500000, 23, 'Hướng ra thành phố', '   ', 0),
(46, 4, 'Phòng Suite 401', 'photo-1611892440504-42a792e24d32.jfif', 2, 270000, 22, 'Nhìn ra sân', '', 0),
(47, 2, 'Phòng Standard 201', 'co-nhung-loai-phong-khach-san-nao-02-06-18-4-2.jpg', 2, 250000, 20, 'Hướng ra biển', ' ', 1),
(48, 3, 'Phòng Deluxe 301', 'photo-1631049307264-da0ec9d70304.jpg', 3, 350000, 22, 'Hướng ra thành phố', ' ', 0),
(50, 3, 'Phòng Deluxe 201', '1.jpg', 1, 500000000, 23, 'Hướng ra thành phố', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tk_id` int(11) NOT NULL,
  `tk_username` varchar(20) DEFAULT NULL,
  `tk_password` varchar(50) NOT NULL,
  `tk_level` int(11) NOT NULL COMMENT 'admin = 0, nv=1',
  `tk_date` datetime NOT NULL DEFAULT current_timestamp(),
  `nv_id` int(11) DEFAULT NULL,
  `kh_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tk_id`, `tk_username`, `tk_password`, `tk_level`, `tk_date`, `nv_id`, `kh_id`) VALUES
(49, 'admin', 'admin', 0, '2022-11-19 11:18:43', 2, NULL),
(50, 'nv1', '111', 1, '2022-11-19 11:18:43', 3, NULL),
(63, 'e', 'e1671797c52e15f763380b45e841ec32', 2, '2022-11-28 18:04:07', NULL, 36),
(67, 'ng', '66e10e9ff65ef479654dde3968d3440d', 2, '2022-11-28 18:20:38', NULL, 40),
(68, 'huynhnga', '0a478fd4ffb01ae2744b2dbdbaf3112c', 2, '2022-11-28 20:53:43', NULL, 41),
(69, 'nga2', 'd41d8cd98f00b204e9800998ecf8427e', 2, '2022-11-28 21:04:39', NULL, 42),
(76, 'ụhgjhg', 'd41d8cd98f00b204e9800998ecf8427e', 2, '2022-11-28 21:12:50', NULL, 49),
(77, 'nga', '25f9e794323b453885f5181f1b624d0b', 2, '2022-11-30 02:13:58', NULL, 50),
(78, 'ngaa', 'f8f17bc78fe69f3da41a2faa4955f239', 2, '2022-11-30 19:06:43', NULL, 51),
(79, 'thuy', 'e5484520b896b2f8749d489e72ede084', 2, '2022-12-06 12:45:16', NULL, 52);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietphieudatphong`
--
ALTER TABLE `chitietphieudatphong`
  ADD KEY `pdp_id` (`pdp_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_id`),
  ADD UNIQUE KEY `kh_sdt` (`kh_sdt`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`lp_id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_id`);

--
-- Indexes for table `phieudatphong`
--
ALTER TABLE `phieudatphong`
  ADD PRIMARY KEY (`pdp_id`),
  ADD KEY `kh_id` (`kh_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `lp_id` (`lp_id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tk_id`),
  ADD UNIQUE KEY `tk_username` (`tk_username`),
  ADD KEY `nv_id` (`nv_id`),
  ADD KEY `kh_id` (`kh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `lp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `nv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phieudatphong`
--
ALTER TABLE `phieudatphong`
  MODIFY `pdp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `tk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietphieudatphong`
--
ALTER TABLE `chitietphieudatphong`
  ADD CONSTRAINT `chitietphieudatphong_ibfk_1` FOREIGN KEY (`pdp_id`) REFERENCES `phieudatphong` (`pdp_id`);

--
-- Constraints for table `phieudatphong`
--
ALTER TABLE `phieudatphong`
  ADD CONSTRAINT `phieudatphong_ibfk_1` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`),
  ADD CONSTRAINT `phieudatphong_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `phong` (`p_id`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`lp_id`) REFERENCES `loaiphong` (`lp_id`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`nv_id`) REFERENCES `nhanvien` (`nv_id`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
