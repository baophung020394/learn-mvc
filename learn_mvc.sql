-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 10, 2020 lúc 11:00 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `learn_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mvc_post`
--

CREATE TABLE `mvc_post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `url_thumbnail` text NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mvc_post`
--

INSERT INTO `mvc_post` (`id`, `title`, `content`, `time`, `url_thumbnail`, `tag`) VALUES
(1, 'Xây dựng Website PHP theo MVC', 'MVC là một mô hình thiết kế, giúp bạn tổ chức code theo từng phần độc lập với nhau, và các phần tương tác với nhau theo một cách nhất định.\r\n\r\nMô hình MVC gồm 3 lớp: Model, View, Controller. Cụ thể như sau:\r\n\r\nModel: Lớp này chịu trách nhiệm quản lí dữ liệu: giao tiếp với cơ sở dữ liệu, chịu trách nhiệm lưu trữ hoặc truy vấn dữ liệu.\r\nView: Lớp này chính là giao diện của ứng dụng, chịu trách nhiệm biểu diễn dữ liệu của ứng dụng thành các dạng nhìn thấy được.\r\nController: Lớp này đóng vai trò quản lí và điều phối luồng hoạt động của ứng dụng. Tầng này sẽ nhận request từ client, điều phối các Model và View để có thể cho ra output thích hợp và trả kết quả về cho người dung.', '2020-11-09 22:34:05', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'laptrinh'),
(2, 'Xây dựng Website PHP theo MVC 2', 'MVC là một mô hình thiết kế, giúp bạn tổ chức code theo từng phần độc lập với nhau, và các phần tương tác với nhau theo một cách nhất định.\r\n\r\nMô hình MVC gồm 3 lớp: Model, View, Controller. Cụ thể như sau:\r\n\r\nModel: Lớp này chịu trách nhiệm quản lí dữ liệu: giao tiếp với cơ sở dữ liệu, chịu trách nhiệm lưu trữ hoặc truy vấn dữ liệu.\r\nView: Lớp này chính là giao diện của ứng dụng, chịu trách nhiệm biểu diễn dữ liệu của ứng dụng thành các dạng nhìn thấy được.\r\nController: Lớp này đóng vai trò quản lí và điều phối luồng hoạt động của ứng dụng. Tầng này sẽ nhận request từ client, điều phối các Model và View để có thể cho ra output thích hợp và trả kết quả về cho người dung.', '2020-11-09 22:34:05', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'laptrinh'),
(3, 'Xây dựng Website PHP theo MVC 3', 'MVC là một mô hình thiết kế, giúp bạn tổ chức code theo từng phần độc lập với nhau, và các phần tương tác với nhau theo một cách nhất định.\r\n\r\nMô hình MVC gồm 3 lớp: Model, View, Controller. Cụ thể như sau:\r\n\r\nModel: Lớp này chịu trách nhiệm quản lí dữ liệu: giao tiếp với cơ sở dữ liệu, chịu trách nhiệm lưu trữ hoặc truy vấn dữ liệu.\r\nView: Lớp này chính là giao diện của ứng dụng, chịu trách nhiệm biểu diễn dữ liệu của ứng dụng thành các dạng nhìn thấy được.\r\nController: Lớp này đóng vai trò quản lí và điều phối luồng hoạt động của ứng dụng. Tầng này sẽ nhận request từ client, điều phối các Model và View để có thể cho ra output thích hợp và trả kết quả về cho người dung.', '2020-11-09 22:34:05', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'laptrinh'),
(4, 'Cach lam chu tich', 'Noi dung chi lam chu tich', '2020-11-10 09:43:10', 'duong dan hinh', 'laptinhngusidan'),
(5, 'Title 1', 'Content 1', '2020-11-10 09:45:58', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'laptrinh'),
(6, 'Title 2', 'Content 2', '2020-11-10 09:49:51', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'laptrinh'),
(7, 'title 3', 'Conent 3333333', '2020-11-10 10:10:14', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'laptrinh'),
(8, 'asdasd', 'asdasdasd', '2020-11-10 10:28:44', 'https://viblo.asia/uploads/010d0558-8f86-471f-898f-da3344e2849a.png', 'asdasdsad');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `mvc_post`
--
ALTER TABLE `mvc_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `mvc_post`
--
ALTER TABLE `mvc_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
