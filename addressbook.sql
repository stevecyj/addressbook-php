-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `addressbook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImgPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `contacts`
--

INSERT INTO `contacts` (`id`, `Fname`, `Lname`, `Email`, `Phone`, `Address`, `ImgPath`, `created_at`, `updated_at`) VALUES
(20, '陳', '信宏', 'mayday@gmail.com', '0919055666', '台北市大安區市政路1號', 'images/1.jpg', NULL, NULL),
(21, '周', '阿倫', 'jay666@hotmail.com', '0919000666', '新北市中正區中正路1號', 'images/2.jpg', NULL, NULL),
(22, '王', '阿民', 'wang40@gmail.com', '0988000666', '新竹縣中區中山路12號', 'images/3.jpg', NULL, NULL),
(23, '蔡', '小琳', 'jolin888@hotmail.com', '0912333666', '台中市西屯區朝馬路1號', 'images/4.jpg', NULL, NULL),
(24, '吳', '阿憲', 'jacky999@hotmail.com', '0912333666', '台北市內湖區舊宗路1號', 'images/5.jpg', NULL, NULL),
(25, '林', '阿傑', '96jay@gmail.com', '0919888666', '高雄市苓雅區中正路14號', 'images/6.jpg', NULL, NULL),
(26, '李', '義美', 'mang@hotmail.com', '0933000776', '南投縣埔里正中山路一段3號', 'images/7.jpg', NULL, NULL),
(27, '徐', '增福', 'fuhsu@gmail.com', '0912060556', '台南市西區中山路2號', 'images/8.jpg', NULL, NULL),
(28, '顏', '阿標', 'yan@hotmail.com', '0912033666', '台中市大甲區中山路1號', 'images/9.jpg', NULL, NULL),
(29, '羅', '名傑', 'lojay@hotmail.com', '0919888656', '苗栗縣中區中山路1號', 'images/10.jpg', NULL, NULL),
(30, '葉', '阿天', 'yatin@hotmail.com', '0988666556', '台東縣東區東義路1號', 'images/11.jpg', NULL, NULL),
(31, '謝', '明傑', 'jaytt@hotmail.com', '0918000666', '嘉義市東區中山路14號', 'images/12.jpg', NULL, NULL),
(32, '黃', '阿升', 'haung@hotmail.com', '0933665566', '新竹縣中區中正路1號', 'images/13.jpg', NULL, NULL),
(33, '劉', '阿榮', 'laulon@hotmail.com', '0972333666', '宜蘭縣西區復興路1號', 'images/14.jpg', NULL, NULL),
(34, '張', '聰明', 'smart@hotmail.com', '0933667666', '屏東縣東區東門路2號', 'images/15.jpg', NULL, NULL),
(35, '李', '明福', 'lifu@hotmail.com', '0933667666', '雲林縣麥寮鄉中山路1號', 'images/16.jpg', NULL, NULL),
(36, '曹', '阿山', 'tsao@hotmail.com', '0988665666', '嘉義縣民雄鄉建國路2號', 'images/17.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_03_011426_create_contacts_table', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
