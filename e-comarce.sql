-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 05:41 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-comarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'Tahsin Ahmed', 'tasu@gmail.com', '12345', '01987642567', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Rolex', 'All Kind of Rolex watch&nbsp; is available', 1, '2020-11-21 00:46:48', '2020-11-21 00:46:48'),
(2, 'Samsung', 'All kind of Samsung phone is available', 1, '2020-11-21 00:49:18', '2020-11-21 00:49:18'),
(3, 'Apple', 'All kind of apple Product available', 1, '2020-11-21 00:50:54', '2020-11-21 00:50:54'),
(4, 'Arong', 'Mens t-shirt', 1, '2020-11-21 00:51:35', '2020-11-21 00:51:35'),
(5, 'Armai', 't-shirt', 1, '2020-11-21 00:51:59', '2020-11-21 00:51:59'),
(6, 'Addidas', 'All kind of addidas shoes Avalable', 1, '2020-11-21 00:52:50', '2020-11-21 00:52:50'),
(7, 'Cat\'s Eye', 'Shirt Available Here', 1, '2020-11-21 00:53:39', '2020-11-21 00:53:39'),
(8, 'Hp', 'hp Laptop avaiable', 1, '2020-11-21 00:54:27', '2020-11-21 00:54:27'),
(9, 'Dell', 'Dell Laptop Available', 1, '2020-11-21 00:54:48', '2020-11-21 00:54:48'),
(10, 'Fashion', 'All kind of Sharee Available', 1, '2020-11-21 00:55:33', '2020-11-21 00:55:33'),
(11, 'Bata', 'All kind of Bata Shoes Available', 1, '2020-11-21 01:05:42', '2020-11-21 01:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `catagory_id` int(10) UNSIGNED NOT NULL,
  `catagory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`catagory_id`, `catagory_name`, `catagory_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'Men clothes', 1, '2020-11-21 00:34:45', '2020-11-21 00:34:45'),
(2, 'Women', 'Women Clothes', 1, '2020-11-21 00:35:04', '2020-11-21 00:35:04'),
(3, 'Phone', 'All Kind of Phone', 1, '2020-11-21 00:35:29', '2020-11-21 00:35:29'),
(4, 'Watch', 'All kind of watch', 1, '2020-11-21 00:35:54', '2020-11-21 00:35:54'),
(5, 'Sports', 'All kind of sports are product available', 1, '2020-11-21 00:38:14', '2020-11-21 00:38:14'),
(6, 'Laptop', 'All kind of Laptop available', 1, '2020-11-21 00:38:43', '2020-11-21 00:38:43'),
(7, 'Shoes', 'All kind of Shoes Available', 1, '2020-11-21 00:39:12', '2020-11-21 00:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_address`, `created_at`, `updated_at`) VALUES
(2, 'Monir Hossain', 'monir@gmail.com', '12345', '0174938882', 'Narayanganj', NULL, NULL),
(3, 'Tahsin Ahmed', 'tasu@gmail.com', '12346', '098764567', 'ramarbug', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_13_061011_admin_users', 1),
(2, '2020_10_13_061231_catagories', 1),
(3, '2020_10_20_203628_brands', 1),
(4, '2020_10_22_141158_products', 1),
(5, '2020_10_27_134016_slides', 1),
(6, '2020_11_07_141253_customers', 1),
(7, '2020_11_15_064606_shipping', 1),
(8, '2020_11_21_104932_payments', 2),
(9, '2020_11_21_105358_orders', 2),
(10, '2020_11_21_105815_order_details', 2),
(11, '2020_11_22_113046_order_details', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` int(10) NOT NULL,
  `order_status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(12, 2, 11, 27, 500, 'pending', '2020-11-22 11:52:06', NULL),
(13, 2, 11, 28, 500, 'pending', '2020-11-22 11:55:10', NULL),
(14, 2, 11, 29, 500, 'pending', '2020-11-22 11:55:30', NULL),
(15, 2, 12, 30, 60000, 'pending', '2020-11-22 18:19:54', NULL),
(16, 2, 12, 31, 60000, 'pending', '2020-11-22 18:25:36', NULL),
(17, 2, 13, 32, 500, 'pending', '2020-11-22 18:29:04', NULL),
(18, 2, 13, 33, 500, 'pending', '2020-11-22 18:30:41', NULL),
(19, 2, 13, 34, 500, 'pending', '2020-11-22 18:32:36', NULL),
(20, 2, 14, 35, 1000, 'pending', '2020-11-22 18:33:59', NULL),
(21, 2, 15, 36, 241000, 'pending', '2020-11-22 18:36:37', NULL),
(22, 2, 15, 37, 241000, 'pending', '2020-11-22 18:37:10', NULL),
(23, 2, 15, 38, 241000, 'pending', '2020-11-22 18:38:22', NULL),
(24, 2, 15, 39, 241000, 'pending', '2020-11-22 18:40:06', NULL),
(25, 2, 16, 40, 240000, 'pending', '2020-11-22 19:05:44', NULL),
(26, 2, 16, 41, 240000, 'pending', '2020-11-22 19:06:27', NULL),
(27, 2, 17, 42, 300000, 'pending', '2020-11-22 19:08:38', NULL),
(28, 2, 18, 43, 300000, 'pending', '2020-11-22 19:12:05', NULL),
(29, 2, 18, 44, 300000, 'pending', '2020-11-22 19:13:18', NULL),
(30, 2, 18, 45, 300000, 'pending', '2020-11-22 19:16:27', NULL),
(31, 2, 19, 46, 120000, 'pending', '2020-11-23 12:13:28', NULL),
(32, 2, 20, 47, 2500, 'pending', '2020-11-23 12:22:46', NULL),
(33, 2, 21, 48, 120000, 'pending', '2020-11-23 13:12:36', NULL),
(34, 2, 22, 49, 160000, 'pending', '2020-11-24 08:30:34', NULL),
(35, 2, 23, 50, 60000, 'pending', '2020-12-09 19:04:20', NULL),
(36, 3, 24, 51, 500, 'pending', '2020-12-11 17:17:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sales_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(9, 12, 2, 'Shirt', 500, '1', NULL, NULL),
(10, 13, 2, 'Shirt', 500, '1', NULL, NULL),
(11, 14, 2, 'Shirt', 500, '1', NULL, NULL),
(12, 15, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(13, 16, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(14, 17, 2, 'Shirt', 500, '1', NULL, NULL),
(15, 18, 2, 'Shirt', 500, '1', NULL, NULL),
(16, 19, 2, 'Shirt', 500, '1', NULL, NULL),
(17, 20, 2, 'Shirt', 500, '2', NULL, NULL),
(18, 21, 2, 'Shirt', 500, '2', NULL, NULL),
(19, 21, 1, 'Hp laptop', 60000, '4', NULL, NULL),
(20, 22, 2, 'Shirt', 500, '2', NULL, NULL),
(21, 22, 1, 'Hp laptop', 60000, '4', NULL, NULL),
(22, 23, 2, 'Shirt', 500, '2', NULL, NULL),
(23, 23, 1, 'Hp laptop', 60000, '4', NULL, NULL),
(24, 24, 2, 'Shirt', 500, '2', NULL, NULL),
(25, 24, 1, 'Hp laptop', 60000, '4', NULL, NULL),
(26, 25, 5, 'Sunsung Galaxy S10+', 80000, '3', NULL, NULL),
(27, 26, 5, 'Sunsung Galaxy S10+', 80000, '3', NULL, NULL),
(28, 27, 5, 'Sunsung Galaxy S10+', 80000, '3', NULL, NULL),
(29, 27, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(30, 28, 5, 'Sunsung Galaxy S10+', 80000, '3', NULL, NULL),
(31, 28, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(32, 29, 5, 'Sunsung Galaxy S10+', 80000, '3', NULL, NULL),
(33, 29, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(34, 30, 5, 'Sunsung Galaxy S10+', 80000, '3', NULL, NULL),
(35, 30, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(36, 31, 1, 'Hp laptop', 60000, '2', NULL, NULL),
(37, 32, 12, 'shoes', 2500, '1', NULL, NULL),
(38, 33, 1, 'Hp laptop', 60000, '2', NULL, NULL),
(39, 34, 5, 'Sunsung Galaxy S10+', 80000, '2', NULL, NULL),
(40, 35, 1, 'Hp laptop', 60000, '1', NULL, NULL),
(41, 36, 2, 'Shirt', 500, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(26, 'hand_cash', 'Pending', '2020-11-22 11:48:51', NULL),
(27, 'bkash', 'Pending', '2020-11-22 11:52:06', NULL),
(28, 'bkash', 'Pending', '2020-11-22 11:55:10', NULL),
(29, 'bkash', 'Pending', '2020-11-22 11:55:30', NULL),
(30, 'hand_cash', 'Pending', '2020-11-22 18:19:54', NULL),
(31, 'hand_cash', 'Pending', '2020-11-22 18:25:36', NULL),
(32, 'hand_cash', 'Pending', '2020-11-22 18:29:04', NULL),
(33, 'hand_cash', 'Pending', '2020-11-22 18:30:41', NULL),
(34, 'hand_cash', 'Pending', '2020-11-22 18:32:36', NULL),
(35, 'hand_cash', 'Pending', '2020-11-22 18:33:59', NULL),
(36, 'hand_cash', 'Pending', '2020-11-22 18:36:37', NULL),
(37, 'hand_cash', 'Pending', '2020-11-22 18:37:10', NULL),
(38, 'hand_cash', 'Pending', '2020-11-22 18:38:21', NULL),
(39, 'hand_cash', 'Pending', '2020-11-22 18:40:06', NULL),
(40, 'hand_cash', 'Pending', '2020-11-22 19:05:44', NULL),
(41, 'hand_cash', 'Pending', '2020-11-22 19:06:27', NULL),
(42, 'hand_cash', 'Pending', '2020-11-22 19:08:38', NULL),
(43, 'hand_cash', 'Pending', '2020-11-22 19:12:05', NULL),
(44, 'hand_cash', 'Pending', '2020-11-22 19:13:18', NULL),
(45, 'hand_cash', 'Pending', '2020-11-22 19:16:27', NULL),
(46, 'hand_cash', 'Pending', '2020-11-23 12:13:28', NULL),
(47, 'hand_cash', 'Pending', '2020-11-23 12:22:46', NULL),
(48, 'hand_cash', 'Pending', '2020-11-23 13:12:36', NULL),
(49, 'hand_cash', 'Pending', '2020-11-24 08:30:34', NULL),
(50, 'hand_cash', 'Pending', '2020-12-09 19:04:20', NULL),
(51, 'bkash', 'Pending', '2020-12-11 17:17:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `catagory_id`, `brand_id`, `product_name`, `product_price`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 6, 8, 'Hp laptop', 60000, 'images/lR4ke38sIys00qTIL5Q6.4xz7yya1r6hqe4kjtcjq.dell laptop.webp', 1, NULL, NULL),
(2, 1, 7, 'Shirt', 500, 'images/KcwwiSpDgm5bCKfM0whu.4oyrtuuzjnxfjx6yvkxy.casual-shirt.jpeg', 1, NULL, NULL),
(3, 1, 5, 'Shirt', 600, 'images/3Pq52zjXPFArWw95PgNu.hs8okxwe9dwptpcconim.mandarin-collar-shirt.jpeg', 1, NULL, NULL),
(4, 7, 11, 'Shoes', 2000, 'images/KdIgeTBJ2XgqWSreCtcH.as9bj8oazotruvjeqdaq.bata shoes.jpg', 1, NULL, NULL),
(5, 3, 2, 'Sunsung Galaxy S10+', 80000, 'images/A8vjAoRlhbBJ2OfPVDYc.brjlecz0nytskai39ago.galaxy_note20_plus.jpg', 1, NULL, NULL),
(6, 2, 4, 'Sharee', 3500, 'images/p0P5p2KZAAKj8qDRvsmb.c09zefaoxjmfetkcjwth.hot sharee.jpg', 1, NULL, NULL),
(7, 4, 3, 'Watch', 20000, 'images/j7Erpg0DtcuSvBmoFLWL.gqyobqpvng9grtpr8msa.apple-watch-series-4-3.jpeg', 1, NULL, NULL),
(8, 2, 4, 'Sharee', 3000, 'images/tAfAlgRfuHU4iWc7yFkd.gvh8gnvrztao3yu9ppn2.georgette-sharee.jpg', 1, NULL, NULL),
(9, 6, 9, 'Dell Laptop', 55000, 'images/GD86T1CxFiqpvaAWioeT.hfn4s45eaeeqxonhydaf.hp laptop.jpg', 1, NULL, NULL),
(10, 2, 4, 'Sharee', 3000, 'images/bA8ADhNGxN9HEaCNDMq1.ibp9fxocffhlnlblw8w9.red sharee.jpg', 1, NULL, NULL),
(11, 5, 6, 'Fotball', 1000, 'images/UzTNZvzUehfubk1KuQXQ.njz3ju2tops13bqyghgg.fotball.jpg', 1, NULL, NULL),
(12, 7, 6, 'shoes', 2500, 'images/J1CaSoquGWaGhTdX42Op.nsjwnv73z3zzfrvf56qv.adidas shoes.jpg', 1, NULL, NULL),
(13, 1, 5, 'T-shirt', 400, 'images/lEneADHRqdLvxZubBTYi.puipmlw7r9zwcoyxupax.t-shirt 1.jpg', 1, NULL, NULL),
(14, 1, 7, 'T-shirt', 450, 'images/2DN5Or0HoYvIEdbpfzj3.reqohkit6e4riszxw03x.t-shirt.jpg', 1, NULL, NULL),
(15, 5, 6, 'Cricket', 1000, 'images/TgZjXD0tuBoHvnJoF2eO.wj2tah8s6kzfqqutvz5g.cricket bat.jpg', 1, NULL, NULL),
(16, 3, 3, 'Iphon 1 pro max', 110000, 'images/eTUXJ1gRHyjAthKUcvke.xtcizvytgudemc2pibbi.iphone-11-prospacegrey.png', 1, NULL, NULL),
(18, 7, 11, 'Shoes', 5000, 'images/uACfypFofZts6zZzXegI.yioivlpjcyxcqesgs7ae.nike shoes.jpg', 1, NULL, NULL),
(19, 3, 2, 'Samsung Galaxy S10', 69000, 'images/igmmbJ4OIKmpfHuPziHh.zjqn6swf9zz9sslgy0u2.samsung s10_.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_email`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_city`, `created_at`, `updated_at`) VALUES
(1, 'monir@gmail.com', 'Monir Hossain', 'Fatulah', '01982843', 'Narayanganj', NULL, NULL),
(2, 'monir@gmail.com', 'Monir Hossain', 'Fatulla', '01987556734', 'Narayanganj', NULL, NULL),
(3, 'monir@gmail.com', 'Monir Hossain', 'Narayanganj', '0198766788', 'Narayanj', NULL, NULL),
(4, 'monir@gmail.com', 'Monir Hossain', 'Ramarbug, Fatulla', '019827378', 'Narayanganj', NULL, NULL),
(5, 'monir@gmail.com', 'Monir Hossain', 'Fatulla', '0198373433', 'Narayanganj', NULL, NULL),
(6, 'monir@gmail.com', 'Monir Hossain', 'Fatulla', '09228387466', 'Narayanganj', NULL, NULL),
(7, 'monir@gmail.com', 'Monir', 'fdvcxf', '2456653', 'naraysnganj', NULL, NULL),
(8, 'monir@gmail.com', 'Monir Hossain', 'Narayanganj', '01938477833', 'Dhaka', NULL, NULL),
(9, 'tahsin@gmail.com', 'Tahsin', 'Ramarbug,Fatullah', '0234893934', 'Narayanganj', NULL, NULL),
(10, 'monir@gmail.com', 'Monir Hossain', 'Ramarbug.Fatulla', '01987463833', 'Narayanganj', NULL, NULL),
(11, 'monir@gmail.com', 'edfscxklsmxck', 'smdkvxc', 'kls.mdcx', 'lknsmdvcx', NULL, NULL),
(12, 'monir@gmail.com', 'Monir hossain', 'dhaka', '9876545678', 'dhaka', NULL, NULL),
(13, 'awfedzfwaerdzf', 'dzvawf', 'edgfb', '234567', 'dfcvb', NULL, NULL),
(14, 'sdfgbz', 'dfb', 'gfbv', 'zdxf', 'dfgvb', NULL, NULL),
(15, 'sdfghj', 'werfg', 'werdfgxch', 'wertf', 'waerdxfcghv', NULL, NULL),
(16, 'esfdg', 'erdtfgh', 'srdfgh', '34567', 'esfrtgfhj', NULL, NULL),
(17, 'sdfgh', 'sdgrtfhyg', 'sdgfh', '235467', 'sdgfhj', NULL, NULL),
(18, 'sdf', 'svfc', 'sdfc', 'sdfgv', 'sdfcg', NULL, NULL),
(19, 'monir@gmail.com', 'Monir Hossain', 'Fatulla', '019283743883', 'Narayanganj', NULL, NULL),
(20, 'monir@gmail.com', 'monir', 'fatulla', '0865434567', 'narayanganj', NULL, NULL),
(21, 'monir@gmail.com', 'jfdnvc', 'kjnldvmc', '3456', 'jkfnlv.v', NULL, NULL),
(22, 'dkjc', 'njck', 'jkvl', '0239485', 'kwnldm', NULL, NULL),
(23, 'jnygtfy', 'kmuhiygu', 'kuhyg', 'knjhuyug', 'njkhygu', NULL, NULL),
(24, 'tasu@gmail.com', 'Tahsin Ahmed', 'Ramarbug', '019298763728', 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(10) UNSIGNED NOT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_admin_email_unique` (`admin_email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `catagory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
