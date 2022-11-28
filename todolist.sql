-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2022 lúc 04:42 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `todolist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_contents` text NOT NULL,
  `blog_status` int(11) NOT NULL DEFAULT 0,
  `blog_image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `user_id`, `cat_id`, `blog_title`, `blog_contents`, `blog_status`, `blog_image`, `created_at`, `update_at`) VALUES
(1, 3, 1, 'Thiết kế website giới thiệu công ty', 'Trách nhiệm với sản phẩm, với khách hàng: tiền có thể có nhiều cách kiếm, chúng tôi chọn nhận tiền của khách hàng để đổi lại sự hài lòng của họ, để sản phẩm thật sự đóng góp cho khách hàng, mang lại giá trị cho doanh nghiệp. Chúng tôi không lăm lăm vào hợp đồng để cự cãi và “lừa lọc” những khách hàng nhẹ dạ', 0, '1662454560_áddsa.png', '2022-09-27 15:40:05', NULL),
(2, 12, 1, 'Mẫu Website cửa hàng bán máy tính', 'Gói dịch vụ thiết kế website theo mẫu được dành riêng cho khách hàng phổ thông với yêu cầu về một website đơn giản, đủ dùng nhưng chất lượng.\r\n\r\nTrong thị trường thiết kế website, khách hàng được phân ra thành 3 nhóm với 3 kiểu yêu cầu khác nhau:\r\n\r\nKhách hàng phổ thông: yêu cầu thiết kế website đơn giản, có tính năng đủ dùng và chi phí phù hợp. Mục tiêu duy nhất là đem về hiệu quả thiết thực: tăng doanh thu bán hàng hoặc truyền thông', 0, '1662455992_Hinh-nen-game-4k-cho-may-tinh-The-Riftbreaker.jpg', '2022-09-27 15:39:23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_contents` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_contents`, `created_at`, `update_at`) VALUES
(1, 'Sức khoẻ', NULL, '2022-08-06 05:52:45', NULL),
(2, 'Công việc', 'các task công việc cần thực hiện', '2022-08-06 05:56:44', NULL),
(3, 'learning', 'task liên quan đến học tập', '2022-08-06 06:14:00', NULL),
(4, 'Cá nhân', 'task liên quan đến công việc cá nhân', '2022-08-06 06:17:29', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like_post`
--

CREATE TABLE `like_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_post` text NOT NULL,
  `server` text DEFAULT NULL,
  `soluong` text NOT NULL,
  `price` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `like_post`
--

INSERT INTO `like_post` (`id`, `user_id`, `link_post`, `server`, `soluong`, `price`, `status`, `created_at`, `update_at`) VALUES
(1, 1, 'https://www.facebook.com/danang24h.page/photos/a.104638791205483/606193801049977/', '2', '100', '15', 1, '2022-09-09 15:57:23', '2022-09-09 19:49:01'),
(2, 1, 'https://www.facebook.com/photo?fbid=3545241099043225&set=pcb.3545241232376545', '1', '123123', '15', 1, '2022-09-09 19:17:56', '2022-09-09 19:49:04'),
(3, 1, 'https://www.facebook.com/photo?fbid=1850074655385559&set=a.167037997022575', '1', '100000000', '15', 0, '2022-09-09 19:49:30', NULL),
(4, 1, 'https://www.facebook.com/danang24h.page/photos/a.104638791205483/606193801049977/', '1', '20', '15', 0, '2022-09-13 15:50:25', NULL),
(5, 3, 'https://www.facebook.com/danang24h.page/photos/a.178212797181415/611664760502881/', '1', '1', '15', 0, '2022-09-13 16:00:52', NULL),
(6, 5, '123123', '1', '123', '15', 0, '2022-09-14 12:49:29', NULL),
(7, 12, '243', '1', '342', '15', 0, '2022-09-22 13:30:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task_list`
--

CREATE TABLE `task_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `task_title` text NOT NULL,
  `task_contents` text DEFAULT NULL,
  `task_status` int(11) NOT NULL DEFAULT 1,
  `bog_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `task_list`
--

INSERT INTO `task_list` (`id`, `user_id`, `cat_id`, `task_title`, `task_contents`, `task_status`, `bog_image`, `created_at`, `update_at`) VALUES
(6, 1, 4, 'Xếp đồ về quê', 'Xếp đồ về quê', 1, NULL, '2022-08-06 05:00:53', '2022-08-06 06:17:47'),
(7, 1, 1, 'chạy 2km', 'chạy 2km', 3, NULL, '2022-08-06 05:01:25', '2022-08-06 05:01:48'),
(8, 1, 2, 'Uống 2 lít nước mỗi ngày', 'pha mật ong', 4, NULL, '2022-08-06 05:01:36', '2022-08-06 05:01:41'),
(9, 1, 2, 'sáng chủ nhật work với c bích vụ CD', NULL, 1, NULL, '2022-08-06 06:10:09', '2022-08-06 06:14:26'),
(10, 1, 3, 'học network', NULL, 1, NULL, '2022-08-06 06:14:15', NULL),
(11, 1, 1, 'Ý nghĩa quan trọng của màu sắc nhận diện thương hiệu', 'Màu sắc có tác động mạnh mẽ tới cảm xúc của con người. Màu sắc sẽ giúp các thương hiệu tăng khả năng nhận diện tới 85% khi kết hợp màu sắc một cách phù hợp.\r\n\r\nKhông chỉ tạo sự thu hút, gây ấn tượng khiến họ ghi nhớ, màu sắc thương hiệu còn mang ý nghĩa, thông điệp riêng mà doanh nghiệp muốn gửi gắm. Bởi vậy, khi thiết kế bộ nhận diện thương hiệu, doanh nghiệp nói chung và người trực tiếp thiết kế cần phải sử dụng màu sắc theo lý tính, cần hiểu được ý nghĩa của từng màu, sự kết hợp các màu và có lý giải thuyết phục về nó.', 1, NULL, '2022-09-06 04:33:40', NULL),
(12, 1, 1, '123', '123', 1, NULL, '2022-09-06 07:42:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template_webiste`
--

CREATE TABLE `template_webiste` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `template_webiste`
--

INSERT INTO `template_webiste` (`id`, `cat_id`, `name`, `description`, `image`, `status`, `created_at`, `update_at`) VALUES
(1, 1, 'Thiết kế website giới thiệu Nhà Hàng LULANA', 'Thiết kế website giới thiệu Nhà Hàng LULANA', '1662556965_01.16475011837814.jpg', 0, '2022-09-07 13:22:45', NULL),
(2, 1, 'Khách sạn Clarissa Bloom', 'Khách sạn Clarissa Bloom', '1662559567_03.16480090331229.png', 0, '2022-09-07 14:06:07', NULL),
(3, 1, 'Nail shop', 'Nail shop Làm móng, làm đẹp, spa', '1662559990_hom16456894910615.jpg', 0, '2022-09-07 14:13:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` bigint(20) NOT NULL DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `email`, `password`, `coin`, `image`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', '$2a$12$KsjINql3seVISiudhsJoj.nu1c4W0qrdycJTX1N5x8BCBgRzRJl5y', 2, NULL, '2022-09-14 12:34:14', '2022-09-18 03:33:08'),
(12, 'Mai Đức Tuấn', 'mai-duc-tuan', 'maituan15042k@gmail.com', '$2y$10$g/0yN/F/TxKpfE/2Etcw7uHdgtitXg8GEPJ0VwdgDRRnxmqfIkCRa', 13364, '1663471577_5.jpg', '2022-09-18 03:26:17', '2022-09-18 03:32:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `like_post`
--
ALTER TABLE `like_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `template_webiste`
--
ALTER TABLE `template_webiste`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `like_post`
--
ALTER TABLE `like_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `template_webiste`
--
ALTER TABLE `template_webiste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
