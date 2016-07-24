-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 07:06 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyclones_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `id`, `country`, `city`, `plz`) VALUES
(1, 1, 'Congo (Brazzaville)', 'Vijayawada', 80375),
(2, 2, 'Guatemala', 'Spinoso', 56141),
(3, 3, 'Anguilla', 'Köln', 47643),
(4, 4, 'Mauritania', 'Pisa', 36698),
(5, 5, 'Israel', 'Varena', 4788),
(6, 6, 'Equatorial Guinea', 'Quillota', 9194),
(7, 7, 'Haiti', 'Wibrin', 99458),
(8, 8, 'Afghanistan', 'Knokke', 767),
(9, 9, 'Costa Rica', 'Wolfenbüttel', 199985),
(10, 10, 'Tonga', 'Geleen', 7675),
(11, 11, 'Niue', 'Atlanta', 94684),
(12, 12, 'Philippines', 'Shimla', 3382),
(13, 13, 'Tonga', 'Weiterstadt', 2664),
(14, 14, 'Liechtenstein', 'Erchie', 2474),
(15, 15, 'Antarctica', 'Vance', 49573),
(16, 16, 'Svalbard and Jan Mayen Islands', 'Anzegem', 61604),
(17, 17, 'Peru', 'Jupille-sur-Meuse', 915071),
(18, 18, 'Japan', 'Branchon', 11205),
(19, 19, 'Isle of Man', 'Guelph', 6799),
(20, 20, 'Saint Kitts and Nevis', 'Coaldale', 9408),
(21, 21, 'Malawi', 'Vaux-lez-Rosieres', 86681),
(22, 22, 'Italy', 'Lourdes', 27426);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tracklist_id` int(11) NOT NULL,
  `album_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `tracklist_id`, `album_info`) VALUES
(1, 'metus eu', 1, 'amet, dapibus id, blandit at, nisi.'),
(2, 'Avenue', 2, 'lorem ipsum'),
(3, 'Anchors', 3, 'lorem ipsum'),
(4, 'Idols', 4, 'lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `reply_id` int(11) DEFAULT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_entry`
--

CREATE TABLE `news_entry` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `headline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_entry`
--

INSERT INTO `news_entry` (`id`, `user_id`, `headline`, `content`, `created_at`) VALUES
(1, 16, 'tellus, imperdiet non, vestibulum', 'Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla digni', '2016-07-16 22:53:27'),
(2, 3, 'Sededed', 'sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero', '2016-06-11 19:39:10'),
(4, 19, 'velit ininini', 'diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ips', '2016-06-23 01:02:04'),
(5, 19, 'iaculis nec,', 'scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id', '2016-06-02 03:04:51'),
(6, 3, 'dolor', 'orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, ne', '2016-07-28 02:37:02'),
(7, 10, 'tempus risus.', 'a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus', '2016-06-19 03:29:56'),
(8, 7, 'consectetuer adipiscing elit.', 'tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non,', '2016-07-30 01:44:08'),
(9, 19, 'in, cursus', 'at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus', '2016-07-01 18:26:04'),
(10, 12, 'consectetuer mauris id sapien.', 'pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim phare', '2016-06-08 21:45:30'),
(11, 6, 'Nullam ut nisi a odio', 'ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus.', '2016-06-28 10:08:59'),
(13, 20, 'et, eros.', 'iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placer', '2016-07-06 01:26:14'),
(14, 17, 'Nulla dignissim. Maecenas', 'ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio,', '2016-07-20 11:15:27'),
(15, 11, 'dis parturient montes,', 'quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultr', '2016-07-18 04:24:32'),
(16, 10, 'Cras sed leo. Cras', 'mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus', '2016-06-01 17:51:25'),
(17, 20, 'dolor dolor, tempus non, lacinia', 'nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, temp', '2016-06-20 05:40:08'),
(19, 20, 'sit', 'et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed mol', '2016-07-28 12:01:14'),
(20, 1, 'dui', 'dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque', '2016-07-30 03:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordered_products`
--

INSERT INTO `ordered_products` (`id`, `product_id`, `amount`, `order_id`, `price`) VALUES
(1, 6, 7, 16, 27),
(2, 8, 4, 14, 47),
(3, 1, 10, 19, 43),
(4, 5, 1, 13, 32),
(5, 6, 4, 4, 38),
(6, 6, 3, 6, 22),
(7, 3, 5, 11, 44),
(8, 6, 1, 16, 28),
(9, 8, 2, 14, 26),
(10, 4, 9, 19, 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `ordered_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `sum`, `created_at`, `ordered_product_id`) VALUES
(1, 6, 54, '2016-07-16 07:02:04', 5),
(2, 17, 83, '2016-07-18 09:27:56', 3),
(3, 11, 249, '2016-07-02 06:38:52', 9),
(4, 20, 290, '2016-07-10 18:33:05', 7),
(5, 11, 469, '2016-07-07 02:34:34', 5),
(6, 18, 331, '2016-07-23 08:06:56', 4),
(7, 6, 307, '2016-07-17 12:47:14', 7),
(8, 5, 417, '2016-07-03 13:20:24', 1),
(9, 5, 474, '2016-07-09 23:13:39', 1),
(10, 18, 141, '2016-07-10 00:36:14', 2),
(11, 14, 251, '2016-07-20 16:34:23', 1),
(12, 3, 246, '2016-07-12 21:28:05', 3),
(13, 22, 266, '2016-07-20 06:23:05', 2),
(14, 3, 45, '2016-07-04 02:57:44', 5),
(15, 12, 95, '2016-07-30 19:11:27', 4),
(16, 19, 148, '2016-07-22 23:17:09', 1),
(17, 17, 83, '2016-07-18 23:05:00', 1),
(18, 10, 202, '2016-07-05 22:01:39', 3),
(19, 1, 360, '2016-07-15 18:30:42', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `variation_id` int(11) DEFAULT NULL,
  `in_stock` int(255) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `variation_id`, `in_stock`, `img`) VALUES
(1, 'metus eu', 'amet, dapibus id, blandit at, nisi.', 12, 1, 70, 'img/shop_item_default.jpg'),
(2, 'Curae; Phasellus', 'netus et malesuada fames ac turpis egestas. Aliquam fringilla', 12, 2, 1, 'img/shop_item_default.jpg'),
(3, 'Cras sed', 'a ultricies adipiscing, enim mi', 18, 3, 72, 'img/shop_item_default.jpg'),
(4, 'faucibus', 'luctus et ultrices posuere cubilia Curae; Phasellus ornare.', 18, 4, 27, 'img/shop_item_default.jpg'),
(5, 'interdum', 'netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam', 17, 5, 75, 'img/shop_item_default.jpg'),
(6, 'nisl elementum', 'per inceptos hymenaeos. Mauris ut quam vel sapien', 10, 6, 88, 'img/shop_item_default.jpg'),
(8, 'molestie', 'risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc', 17, 8, 10, 'img/shop_item_default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` int(11) NOT NULL,
  `variation_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracklist`
--

CREATE TABLE `tracklist` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `track` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lyrics` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pw_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_order` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `pref_payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pw_hash`, `created_at`, `last_order`, `address_id`, `pref_payment`, `title`, `company`, `name`, `surname`, `deleted`, `is_admin`, `birthday`) VALUES
(1, 'admin@test.at', '$2y$10$J3KCu6cKQDq4emtYwvwSZON6PYKNRvkry4qoPUPyUskxNnFctJHEG', '2016-06-24 11:43:47', 1, 1, 'Paypal', 'Admin', 'Cyclones', 'Max', 'Waltenberger', NULL, 1, '1971-02-01'),
(2, 'Sededed', 'lolol', '2016-06-27 09:07:06', 2, 2, '', '', '', 'sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero', '', 1, 0, '1945-02-08'),
(3, 'niblor@inceptos.co.uk', 'Sed dictum. Proin eget', '0000-00-00 00:00:00', 3, 3, 'eget', '', 'Vitae Mauris Sit Inc.', 'Xerxes', 'Morrow', NULL, 0, '1958-11-29'),
(4, 'luctus@leoin.net', 'Nam interdum enim', '0000-00-00 00:00:00', 4, 4, 'iaculis,', 'Mr.', 'Metus Associates', 'Wandaa', 'Anderson', 1, 1, '1965-10-14'),
(5, 'nascetur@sollicituda.ca', 'porttitor', '0000-00-00 00:00:00', 5, 5, 'ipsum', '', 'Proin Dolor Nulla Corporation', 'Jolene', 'Workman', NULL, 0, '1957-02-23'),
(6, 'nec@ateget.co.uk', 'dapibus ligula.', '0000-00-00 00:00:00', 6, 6, 'ultrices,', '', 'Interdum Curabitur LLP', 'Kyla', 'Horne', NULL, 0, '1971-01-27'),
(7, 'Ut@Fusce.co.uk', 'Donec felis orci, adipiscing', '0000-00-00 00:00:00', 7, 7, 'vel,', 'Ms.', 'Lectus Corporation', 'Jesse', 'Morris', NULL, 0, '1994-05-20'),
(8, 'Donec@etnetus.uk', 'tristique senectus et netus', '0000-00-00 00:00:00', 8, 8, 'eu', 'Mr.', 'Sed Sapien Limited', 'Oliver', 'Cooke', 1, 0, '1955-11-08'),
(9, 'sit@sapien.ca', 'Phasellus in felis.', '0000-00-00 00:00:00', 9, 9, 'semper', 'Mr.', 'Ultrices A LLC', 'Miriam', 'Griffith', NULL, 0, '1987-12-11'),
(10, 'erat@elitsed.com', 'vestibulum nec, euismod', '0000-00-00 00:00:00', 10, 10, 'Pellentesque', '', 'Phasellus Vitae Mauris Consulting', 'Arthur', 'Gamble', NULL, 0, '1954-02-02'),
(11, 'magna.nec@risu.ca', 'erat volutpat. Nulla', '0000-00-00 00:00:00', 11, 11, 'nec,', 'Mr.', 'Enim Mi Tempor Incorporated', 'Jesse', 'Evans', NULL, 1, '1973-09-30'),
(12, 'quis@etnetuset.edu', 'Ut nec', '0000-00-00 00:00:00', 12, 12, 'neque.', 'Ms.', 'Dignissim Pharetra Associates', 'Caesar', 'Ashley', NULL, 0, '1977-08-28'),
(13, 'urabitur@consequat.c', 'ornare tortor', '0000-00-00 00:00:00', 13, 13, 'adipiscing', 'Ms.', 'Lectus PC', 'Geoffrey', 'Pate', NULL, 0, '1982-04-01'),
(14, 'dolor@dolor.net', 'odio. Nam', '0000-00-00 00:00:00', 14, 14, 'est,', 'Mr.', 'Ut Pharetra Sed Corp.', 'Bert', 'Gutierrez', NULL, 0, '1986-09-12'),
(15, 'Mauris.quis@justosit.co.uk', 'et libero.', '0000-00-00 00:00:00', 15, 15, 'bibendum.', 'Dr.', 'Congue Corp.', 'Cara', 'Wilkerson', NULL, NULL, '1999-09-16'),
(16, 'ac@mauris.edu', 'ullamcorper, nisl arcu iaculis', '0000-00-00 00:00:00', 16, 16, 'Sed', 'Ms.', 'Facilisis Company', 'Curran', 'Davenport', NULL, 0, '1948-12-31'),
(17, 'Phasellus@nequenon.ca', 'et ultrices', '0000-00-00 00:00:00', 17, 17, 'Nulla', 'Dr.', 'Faucibus Institute', 'Quintessa', 'Davis', NULL, NULL, '1962-08-28'),
(18, 'blandit@libero.ca', 'arcu.', '0000-00-00 00:00:00', 18, 18, 'non', 'Mr.', 'Eget PC', 'Kane', 'Burke', NULL, 0, '1961-09-10'),
(19, 'ridiculus@risusMorbi.ca', 'sagittis semper. Nam tempor', '0000-00-00 00:00:00', 19, 19, 'vel', 'Mr.', 'Erat Neque Non LLC', 'Yetta', 'Ellison', NULL, NULL, '2004-07-31'),
(20, 'amet@fringillami.com', 'Quisque varius.', '0000-00-00 00:00:00', 20, 20, 'ligula', 'Mrs.', 'Nunc Ut Erat Inc.', 'Burke', 'Pace', NULL, NULL, '2006-11-14'),
(21, 'nec.tellus@Maurisnulla.org', 'vulputate', '0000-00-00 00:00:00', 21, 21, 'lacus', '', 'Vestibulum Inc.', 'Amaya', 'Luna', 1, NULL, '1946-03-15'),
(22, 'Proin@dolorFuscefeugiat.net', 'nec ante. Maecenas', '0000-00-00 00:00:00', 22, 22, 'ligula.', 'Mrs.', 'Adipiscing Elit Limited', 'Emmanuel', 'Reese', 1, NULL, '1972-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_entry`
--
ALTER TABLE `news_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracklist`
--
ALTER TABLE `tracklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tracklist`
--
ALTER TABLE `tracklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
