-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 10:06 AM
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
(1, 1, 'Congo (Brazzaville)', 'Vienna', 80375),
(2, 2, 'Guatemala', 'Vienna', 56141),
(3, 3, 'Anguilla', 'Vienna', 47643),
(4, 4, 'Mauritania', 'Vienna', 36698),
(5, 5, 'Israel', 'Tyrol', 4788),
(6, 6, 'Equatorial Guinea', 'Tyrol', 9194),
(7, 7, 'Haiti', 'Lower Austria', 99458),
(8, 8, 'Afghanistan', 'Lower Austria', 767),
(9, 9, 'Costa Rica', 'Lower Austria', 199985),
(10, 10, 'Tonga', 'Vienna', 7675),
(11, 11, 'Niue', 'Vienna', 94684),
(12, 12, 'Philippines', 'Upper Austria', 3382),
(13, 13, 'Tonga', 'Upper Austria', 2664),
(14, 14, 'Liechtenstein', 'Vienna', 2474),
(15, 15, 'Antarctica', 'Tyrol', 49573),
(16, 16, 'Svalbard and Jan Mayen Islands', 'Vienna', 61604),
(17, 17, 'Peru', 'Lower Austria', 915071),
(18, 18, 'Japan', 'Upper Austria', 11205),
(19, 19, 'Isle of Man', 'Vienna', 6799),
(20, 20, 'Saint Kitts and Nevis', 'Tyrol', 9408),
(21, 21, 'Malawi', 'Lower Austria', 86681),
(22, 22, 'Italy', 'Upper Austria', 27426);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tracklist_id` int(11) NOT NULL,
  `album_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `tracklist_id`, `album_info`, `cover`) VALUES
(1, 'Lost', 1, 'Lost is the first album by Austrian metalcore band Cyclones, released on 6 October 2007 in Austria and 9 October 2007 internationally. The album was produced by Killswitch Engage guitarist Adam Dutkiewicz and recorded at Blub Studios in Vienna. It at #6 on the ARIA Albums Chart on 14 October 2007 and #27 on the US Top Heatseekers chart. A video has been made for "Boneyards".', 'img/sticker.jpg'),
(2, 'Avenue', 2, 'Avenue is the third studio album by Austrian band Cyclones. It was released on July 24, 2013. The album received positive critical reception, generating an aggregated score of 79/100 on Metacritic, indicating "Generally favorable reviews". This album also marks the first appearance by drummer Kelly Bilan as well as the last appearance by bass guitarist Eric Bazinet and guitarist Alex Re.', 'img/slider_img2.jpg'),
(3, 'Anchors', 3, 'Anchors is the third release by Austrian melodic hardcore band Cyclones. It was released on September 27, 2011 through Mediaskare Records. Break Free was the first single from the record, and was released on YouTube on July 22, 2011.', 'img/slider_img3.jpg'),
(4, 'Idols', 4, 'Idols is the fourth studio album by Austrian metalcore band Cyclones, released on June 21, 2015 through Solid State Records.', 'img/slider_img4.jpg');

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
(4, 19, 'velit ininini', 'diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ips', '2016-06-23 01:02:04'),
(5, 19, 'iaculis nec,', 'scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id', '2016-06-02 03:04:51'),
(6, 3, 'dolor', 'orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, ne', '2016-07-28 02:37:02'),
(7, 10, 'tempus risus.', 'a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus', '2016-06-19 03:29:56'),
(8, 7, 'consectetuer adipiscing elit.', 'tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non,', '2016-07-30 01:44:08'),
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
  `ordered_product_id` int(11) NOT NULL,
  `canceled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `sum`, `created_at`, `ordered_product_id`, `canceled`) VALUES
(1, 6, 54, '2016-01-16 07:02:04', 5, 0),
(2, 17, 83, '2016-02-18 09:27:56', 3, 0),
(3, 11, 249, '2016-02-02 06:38:52', 9, 0),
(4, 20, 290, '2016-03-10 18:33:05', 7, 1),
(5, 11, 469, '2016-04-07 02:34:34', 5, 0),
(6, 18, 331, '2016-04-23 08:06:56', 4, 1),
(7, 6, 307, '2016-05-17 12:47:14', 7, 0),
(8, 5, 417, '2016-06-03 13:20:24', 1, 0),
(9, 5, 474, '2016-07-09 23:13:39', 1, 0),
(10, 18, 141, '2016-07-10 00:36:14', 2, 0),
(11, 14, 251, '2016-03-20 16:34:23', 1, 1),
(12, 3, 246, '2016-01-12 21:28:05', 3, 0),
(13, 22, 266, '2016-02-20 06:23:05', 2, 0),
(14, 3, 45, '2016-03-04 02:57:44', 5, 1),
(15, 12, 95, '2016-04-30 19:11:27', 4, 0),
(16, 19, 148, '2016-06-22 23:17:09', 1, 0),
(17, 17, 83, '2016-07-18 23:05:00', 1, 0),
(18, 10, 202, '2016-01-05 22:01:39', 3, 0),
(19, 1, 360, '2016-02-15 18:30:42', 5, 1);

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
-- Table structure for table `tourdates`
--

CREATE TABLE `tourdates` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tickets` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourdates`
--

INSERT INTO `tourdates` (`id`, `date`, `location`, `tickets`) VALUES
(1, '2016-02-22', 'Arena Wien', 'http://www.oeticket.com/'),
(2, '2016-03-02', 'Viper Room', 'http://www.oeticket.com/'),
(3, '2016-03-21', 'Das Bach', 'http://www.oeticket.com/'),
(4, '2016-04-01', 'Gasometer', 'http://www.oeticket.com/'),
(5, '2016-04-23', 'Down Under', 'http://www.oeticket.com/'),
(6, '2016-05-02', 'Escape', 'http://www.oeticket.com/'),
(7, '2016-05-28', 'Arena Wien', 'http://www.oeticket.com/'),
(8, '2016-06-04', 'Viper Room', 'http://www.oeticket.com/'),
(9, '2016-06-10', 'Gasometer', 'http://www.oeticket.com/'),
(10, '2016-07-11', 'Das Bach', 'http://www.oeticket.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tracklist`
--

CREATE TABLE `tracklist` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `track` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lyrics` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `track_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tracklist`
--

INSERT INTO `tracklist` (`id`, `album_id`, `track`, `lyrics`, `track_nr`) VALUES
(1, 1, 'Intro', 'The daylight''s gone\r\nThe empty streets echo our past and the days that once were so beautiful\r\nBefore now\r\nBefore us\r\nSo save yourself\r\n''Cause all dreams are gone\r\nAnd all hope has faded\r\nAnd as the sunlight fails I watch this world slip away\r\nAnd we smiled as we betrayed ourselves\r\nAnd a clear sky is only a distant memory\r\nOur worst intentions carried away on the evening breathe\r\nEverything we lived for draws our final thought around our necks\r\nYour faces lies still\r\nI can''t see your breath and it''s freezing my blood until the end\r\nOne more time one more line\r\nWhat is this hell\r\nReminisce to the beginning of everything\r\nBut The irony alone would kill me\r\nTen thousand hearts set to silence for the choice of one\r\n\r\n', 1),
(2, 1, 'Boneyards', 'These are the sentiments\r\nOf a cold blooded cynic\r\nSo believe me when I say,\r\nI would love nothing more.\r\n\r\nThan for everything,\r\nTo end unpleasantly.\r\nConcrete shoes, rising tide,\r\nGrey skies let none survive,\r\nGo.\r\n\r\nDon''t say I didn''t warn you.\r\n\r\n[x2]\r\nI would rather see your face in Hell\r\nThan speak another word\r\nOf this perfect world.\r\n\r\nOf this perfect world.\r\n\r\nOh, to be buried beneath the waves,\r\nA sailors grave is all I crave.\r\n\r\nBury me (bury me),\r\n5000 fathoms deep,\r\nAnd leave my bones,\r\nFor the depths.\r\n\r\nThe sharpest teeth await our skin.\r\nThe sharpest teeth await...\r\nBloodlust swarms,\r\nUpon our worthless existence.\r\n\r\nThe Devil''s teeth (the Devil''s teeth),\r\nThe Devil''s teeth,\r\nBeneath our skin.\r\nWhispering of silent vengeance.\r\nBlood debts remain unpaid.\r\n\r\nNow every breath of life\r\nHas been betrayed.\r\nEvery ideal\r\nhas rusted through.\r\n\r\nNothing we hold brings solace,\r\nFeed us to the sharks.\r\nSo let nothing remain,\r\nFeed us to the sea.\r\n\r\nTo be buried,\r\nBeneath the waves', 2),
(3, 1, 'Unrest', 'I''ve walked these streets a thousand times, still this world never seemed colder.\r\nCompromised a thousand times to the will of malicious minds.\r\nReality never hit so fucking hard.\r\nCrushed by endless desperation, endless surrender.\r\nRetrace the steps, retrace the steps.\r\nIs this what I have become?\r\nRetrace the steps, retrace the steps.\r\nWhat the fuck have I become?\r\nSecurity, illusion for the weak.\r\nRefuge, sought in routine.\r\nAnother gear in their fucking machine.\r\nSee, you can win the rat race but you''re still nothing but a fucking rat.\r\nSo seek that crown, because in this kingdom of fools true ignorance reigns supreme.\r\nI see this city for what it is.\r\nRetrace the steps, retrace the steps.\r\nA monument to the depths of human misery.\r\nRetrace the steps [6x]\r\nWhat have we become?', 3),
(4, 1, 'Carrion', 'Carrion\r\nIn a moment I''m lost\r\nDying from the inside\r\nHer eyes take me away\r\nTear me apart from the inside out\r\nDead eyes speak in volumes?\r\nBut our lips refuse to move\r\nCould this ever be the last time?\r\nThe final time that we see this through?\r\n\r\nGive me the strength to return\r\nReturn the breath you''ve stolen\r\nGive me the means to reset\r\nHer heart I''ve broken again\r\nReflection built upon sorrow\r\nWe''re walking the darkest roads\r\nWithin chests carved with regret\r\n\r\nIn a moment I''ve lost\r\nDying from the inside\r\nHer eyes take me away\r\nTear me apart from the inside out\r\nFrom the inside out\r\nThe inside out\r\n\r\nWe''ve been running blind\r\nNow we''re falling through the cracks\r\nWe''re left running\r\nWe are running blind\r\nNow we''re falling\r\nFalling through the cracks\r\n\r\nBack to the world of the dead\r\nHer shining eyes mark our return back\r\nTo the world of the dead\r\nIn a moment I''ve lost\r\nDrowning from the inside\r\nHer eyes take me away\r\nTear me apart\r\nFrom the inside out\r\n\r\nMy love I left\r\nMy heart I', 4),
(5, 1, 'Burn', 'I’ve grown accustom to losing sleep.\r\nSweep me off my feet, dig your nails into my wounds and pull.\r\nA lucid dream, where my chest will collapse from the weight of a fictitious ghost.\r\nTear through me, sacrifice me to your sea.\r\nWith broken arms I’m left to carry my shell with no help from the current.\r\n\r\nLifeless, I am dragging me down.\r\nHollow, I’m left to fend for myself.\r\n\r\nForget everything that you’ve come to know.\r\nWe are not meant for much but to carry our own misery.\r\nIs there a God cursing every step that I take?\r\nOr have I been forced to commit myself to the dirt?\r\nWe’re chasing the light in the darkest of graves,\r\nBut the fortunate ones know to wait until mourning.\r\n\r\nBe still. Serenity blesses us in waves and with eyes like mountains, we’re drawn to the brow.\r\nLeave this life behind and take the next step in the right direction.\r\nStare at the sky, and offer yourself to circumstance.\r\n\r\nBe the burn. Burn me alive.\r\nBe the burn. Burn me alive.', 5),
(6, 1, 'Ghost', 'Born of two; raised by four\r\nI guess I took it all for granted\r\nAnd only three remain\r\n\r\nEven though you''re wounded\r\nI know that you''re still here\r\nI don''t blame you\r\nYou just can''t face the change\r\n\r\nWe spend our golden years as living ghosts\r\nCaught in a constant state of purgatory\r\nWe are only burdened by our memories\r\nUntil the day they cease to exist\r\nAnd we follow shortly after\r\n\r\nAlthough I wonder if at any time\r\nOur minds fell upon the same plane\r\nI know they did\r\nI just wish I had a chance to go back and appreciate it\r\nBut we''ll always have the winter\r\nAnd the snow that got trapped behind the glass\r\nYou may be only a shell of the man that you used to be\r\nBut I love you just the same\r\nAnd I will until the day you''re gone\r\n\r\nI just never know if I''m communicating with you or the disease\r\nAnd even though I curse the idea of an afterlife\r\nI still hope you''re taken care of\r\nYou deserve to be at peace\r\nPlease don''t forget my face\r\nI won''t forget to remember you', 6),
(7, 1, 'Witness', 'Expose me for all that I am\r\nThe man behind the masquerade\r\nI am my own false witness\r\n\r\nFact resides solely in the depths of my mind\r\nAnd will I ever really let it come to surface?\r\nYou only see what I want you to see\r\nAnd you believe all that you''re told\r\n\r\nSerenity is a beautiful hoax, a liar\r\nI have the whole world convinced of my contentment\r\nNo truth in this\r\nI''ve lost count of all the times I''ve made it home alive...\r\nAnd wished I hadn''t\r\n\r\nExpose me for all that I am\r\nThe man behind the masquerade\r\nI am my own false witness\r\nI''m left to conquer the mountains in my mind\r\nAnd I am my maker\r\n\r\nLife is what''s killing me\r\nI hate the fact that I''m just fine\r\nForever seeking anything to take responsibility\r\nLife is what''s killing me\r\nI hate the fact that I''m alive\r\nForever searching for my scapegoat because\r\nI refuse to face reality\r\n\r\nAt least I can say I tried to cherish\r\nEvery single day when I woke up and didn''t want to die\r\nI''d work my hands to the bone\r\nTrying to stay suspended ', 7),
(8, 1, 'Lost', 'As far back as I can remember\r\nThe failure was always there\r\nIt was the only real companion that I have ever had\r\nNot meant to live like this\r\n\r\nConsciousness is nothing more than a vicious cycle\r\nAnd I am being bled dry by my conviction\r\nI''ve spent my life trying to find my confidence\r\nAnd found absolutely nothing\r\n\r\nLife is a lost cause\r\nToo weak to carry on\r\nI wish I''d never met who I once was\r\nNot meant to live like this\r\n\r\nPursuing the love in all that I have lost\r\nBut I have left myself neglected\r\nDeserted from the start\r\nLonging for a chance to wander\r\nA chance to chase my aspiration\r\n\r\nWhen you''re devoid of feeling\r\nYou just do as you''re told\r\nHatred is exhausting\r\nBut it''s all I''ll ever know', 8),
(9, 1, 'Compass', 'The weight came and went and took my will to live\r\nSpoiled by defeat, forced to drown in what''s left of me\r\nThat''s when breathing became routine\r\nAnd I could feel myself fading\r\n\r\nNo direction, I am a compass\r\nConstantly spinning\r\nConstantly searching for the end\r\nNever reaching our destination\r\nBut the goal was never when\r\nOr where\r\nOr who...\r\nIt was only you\r\n\r\nI appeared in your arms as if I had been born there\r\nYou promised you''d never let me go\r\nBut I don''t know what I believe anymore\r\nAffection allowed me to let the light in\r\nThe fear made me whole again\r\nHelp me rebuild my broken bones\r\nHelp me regain my sanity\r\nBut with caution always present\r\nOur pasts manifest themselves\r\nAnd we act as if this is what we deserve\r\nBut I refuse to fail again\r\n\r\nI''d force my ghost to write your name in the flowers on my grave\r\nI watched the world give up on me\r\n\r\nI used to spend my nights praying for air in my bloodstream\r\nNow I long to feel your breath pass throughout my arteries\r\nThe goal was ', 9),
(10, 1, 'Cursed', 'We ache to be transparent\r\nWe run from the "open" arms;\r\nThe facade of something greater than ourselves\r\nAnd we''re left to coexist with infestation\r\n\r\nOur history is cursed\r\nThrough the past, present, and future\r\nIf they''re created in his image\r\nThen his image is disgusting...\r\nAnd even he can''t wipe you clean\r\n\r\nHow can someone see so far ahead\r\nWhile they''re spending every day on their knees?\r\nIs the view from above really worth the judgement passed?\r\nThe fear, the lies, and the manipulation?\r\nA doctrine bathed in ignorance\r\nAnd written in the blood of the enslaved\r\n\r\nAnd I have never lost my faith\r\nI just never had any to begin with\r\nI would sooner die for my sins\r\nThan pray for my forgiveness\r\nSew my palms together\r\nAnd crucify the thoughts in my mind\r\n\r\nAwaiting Armageddon\r\nNeglecting to exercise the demons in your head\r\nYou''re "born again,"\r\nBut you''re better off dead\r\nConversion or a casualty\r\nRenounce and save yourself\r\n\r\nIs the view from Heaven really worth all of the judgemen', 10),
(11, 2, 'Stillborn', 'A calm rushes over me as I picture my corpse ill-fated with the faults I can’t escape. A sigh of relief used to signify the blight that infects the last few fragments of my skull. Sometimes I swear I think that I’ll be fine. I’ve made up my mind. Death is my birthright.\r\nI am a noose waiting to be tied. Still I try to elude the truth and embrace my disguise because this way of life takes it’s toll on mine and I don’t want to be alive. Bury me breathing so I can watch myself decay. We are stillborns by definition but our pulse-infected\r\nwrists will disagree. We burden ourselves with intent and ambition when we’ve accepted that all hope is lost. So dance past my lips and disperse, leaving no trace of human condition. Our bodies blind the world with a sense of selflessness that only a trained eye can see.\r\nYou blame me for your blindness. Open your eyes.', 1),
(12, 2, 'Thread', 'Your words grow cold and incoherent and I’m searching for a fever that could lift me to the border of dementia. My eyes are tired from surveying everything we used to share and I would sew them shut if I had any strength inside. I remember every promise, I’ve carved them\r\ninto my spine. I raise my hands to the sky and beg that this won’t go unnoticed. Though I know some fires are not meant to burn. We are bred to flicker and fade, not to retreat into the earth. Not to grow without remorse. We douse ourselves with the moisture that we’ve\r\ndrawn from the soil. We breed and unleash. We’re our own natural disaster. String me along like the thread that binds your ribcage. Tie my limbs to the anchor, and be sure that I’m left alone to sink. I will shine brighter than the sun. I will forever be your torch. Cast\r\nme away and in time I will set fire to the fibres that connect us. My palms grow calloused from the cold. I need your touch to cauterize. Sustained by the flame of another, the embers', 2),
(13, 2, 'Resonate', 'I’m shaking and so are my hands and I can’t tell if it’s the cold or if I’m finally feeling regret. A martyr in my own mind and a pariah given the capacity of my own guilt. Do I fight the fact that I am a nervous wreck or do I face the forthcoming collision head on? I\r\ndon’t know how to abandon my blind heart… and I’m convinced that you deserve this. My organs are dark and minuscule in comparison to yours. I’m no longer pining to cure my disease, I’m just dying to advance the process. Trim your wings and deceive me, cinch your halo\r\naround my neck because death houses such beauty if we can enjoy what will grow in it’s absence. We are thin and wasted at both ends and we’ve accepted our position. I was never worthy of following your footsteps. So be sure to leave no evidence that you’ve existed. We\r\ndare not turn and face the figures treating us to our descent. If we knew their origin then we’d surely be disgusted. This is the kind of illness that leaves us rotting from the inside out… a', 3),
(14, 2, 'Stranger', 'Your ghost holds me close as I’m ravaged by the solitary that surrounds my former home. Use me until you’ve spent the rest of my remains, then try to validate your actions. Cursing every empty vein that used to be inhabited by your impression. Paralyze me to ensure I\r\nhave no chance of knowing the feeling of affection. It’s no secret that I’ve shed the common decency that appoints the world with the burden of devotion to our kin. I gave you everything I had and the world has left me exhausted. Make me feel something, anything that\r\nmight change my mind. As worthless as I am, I know that I still serve a purpose. To leech off the light and absolve my insignificance. Lay me to rest inside of a glass casket so you can remember me with a smile on my face. Adorning me in my own failures so you can bless\r\nthem as you stand above my bones. I wish I were a better man. I am a coward masked in courage and just admitting it will not save me this time. Free me from my tired mind and let me learn th', 4),
(15, 2, 'Tragedy', 'Take comfort in the cadence of the bond we share\r\nA visionary born and raised to see with an unbiased sense of sight\r\nWe pause just for a second to properly embrace the radiance\r\nWe are the anointed dipped in filth\r\nTaught to cower in fear of being identified\r\nBut tragedy will find us\r\n\r\nI’m held captive by my spoiled soul\r\nI won’t allow it to affect my stride\r\nThe procession will proceed as we’re gifted with our own idea of peace\r\n\r\nSo find yourself in me\r\nI promise I will keep you as we harvest the passion that remains\r\nMake my skin your sanctuary\r\n\r\nI make a pact with the earth to draw life from the living\r\nMake my skin your sanctuary\r\nLeap to the beat of my blood\r\nSo place your hand in mine, drag your feet across the tops of trees\r\nBreathe easy knowing that the branches will support you\r\nAnd the weight of your complication\r\n\r\nIn the midst of the ruin that surrounds us\r\nWe communicate but only in tongues\r\nOur lips will welcome the caress of the crucifixion\r\nAnd we stain the wood wit', 5),
(16, 2, 'Withdrawal', 'I bask in familiar flesh with no shelter to call my own. A sacrifice for my sickness, I’ll dig a grave for those I love. I release the teeth from my jaw, knowing that I will miss the pain when you take shelter in the mouth of another. You live in the back of my throat,\r\nspawning sentences in unison with mine. Stay safe in my breath, you will never be lost. If our attraction is only skin deep, how deep is deep enough? I’ve made a habit out of grinding my bones into a sharper point when I hear your name… and I’ve named each cut you’ve\r\ncursed me with. Though I wish I had the courage to ask for more. Your spirit suffocates me. You won’t find asylum inside. I never asked for your blood in my veins. So haunt me not and disappear. I am a victim, despite what you’ve heard. Forced to dwell inside of endless\r\nwithdrawal. We can never coexist, so I will offer up my heart. Don’t look back and try to find me, I was always doomed to watch you from the dark. Stay safe in my breath, you will never be', 6),
(17, 2, 'Choke', 'Congregate what little ounce of decency is left and gather enough courage to invoke contractions in your vocal chords. Admission of guilt through confrontation. I’ve had to chisel every lie out of your mouth and after all this time I’ve grown immune to your embrace.\r\nSpare me and my virgin ears from a stale conception. Admit that I’m the victim and cradle consequence. Line your insides with a sense of wrongly obtained righteousness. Spread your poison as thin as you possibly can to ensure you violate every inch of common ground. Call\r\nme a cancer, keep convinced that you’re not sick yourself. You will be exposed as soon as the worlds eyes can fully adjust to the dark. I was the cure to your corrosion, but now I want to watch your skin rust and slowly grow discoloured… and when your throat buckles\r\nunder the weight of the accumulation of perjury, I want to watch the life seep out of your tear duct as your death rattle hits my eardrum and thaws what’s left of my cold heart. I hope you ch', 7),
(18, 2, 'Collapse', 'Back-pedaling into the black\r\nBut I can still make out the figures\r\nThat will threaten my well-being\r\nThe wind will rise and fall\r\nBut never sway from side to side\r\n\r\nProgression halted\r\nEncapsulating the fluid weave of death\r\nLike a garden that contains all of its arrested offspring\r\nWe’re afraid to force our legs to break free from the earth\r\nAnd take the first step towards our insecurity\r\n\r\nSleep away your selfishness\r\nSlip into collapse\r\nA still-like state of disregard\r\nFrom which you can’t fall back\r\nYou never fully moved me\r\nI’ve been embedded in the dust\r\nAnd my mind has been ravaged by war\r\n\r\nPray for farewell as if I was yours to lose\r\nI would love to love you, if you were someone else\r\nSo forgive me for being unresponsive\r\nI’m sure it’s hard to train your ears\r\nTo hear me crying out for help\r\nWith my lips sewn shut by the stitches of my own indecision\r\n\r\nSo I’ll speak in whispers to permit my throat relief\r\nI bite my tongue\r\nFill my mouth with blood\r\nAnd swallow enough to kil', 8),
(19, 2, 'Drown', 'Immerse yourself in the water that flows freely from my hands. You’ll find no substance, just the rain that we use to simply bathe and disregard. I bless my arteries with blades, and I welcome the sight of the back of my eyelids. In our most peaceful and remote state,\r\nwe’re allowed to choose what we want to feel. Mortality is the greatest gift given to the living, but a curse to those who feel that they’re truly alive. Sentenced to trespass, I should spin towards the north… but your gravity has left me alone and I’m left to roam as an\r\napparition. Abandoned, I am a phantom limb in search of a frame to spread my plague. If the light leaves you blind, just shut your eyes and embrace the undertow. Let the waves puncture your lungs. In my dreams we drown together. Everything goes black but I can see you\r\njust fine. Condolences flourish and fall upon my feet and help pollinate the dirt that sits in the pit of your stomach. I need to shed the idea of a lasting impression. Make peace with my', 9),
(20, 2, 'Solace', 'We shiver in the pause between words. Abandonment still fresh upon the tips of our tongues. The whispers we’ve chosen to live and die in will infect deaf ears with the discordance of deceit. Why do we scream when there is nothing left to say? Silently acknowledging the\r\nsolace in loss. I am content with throwing everything away because I lost myself when I found you. Carry me back to your bed, my conscience is my coffin and I swear sometimes I’d rather be dead. Make sure that I still feel, I don’t care how much it hurts. I’ll always be\r\nnumb on my side of the earth. In the dark I watched the light hit your skin, hoping that my eyes might never adjust. Soft sounds save me from the confines of sleep because hearing your voice once was never enough. I think I’ve finally identified the Difference. I think I\r\nlive in both my hell and my home. I will forever be a slave to your distance, don’t let me in, don’t let me go. Carry me back to your bed, my conscience is my coffin and I swear someti', 10),
(21, 3, 'Unravel', 'How was I to know?\r\n\r\nThe search went on and on and on\r\nI thought I could fill you up\r\nWhile I had nowhere to go\r\nBut the deeper I dove the less I found\r\nA waste but how was I to know\r\n\r\nOn the surface\r\nIt seemed like everything was worth it\r\n\r\nI was an aimless string\r\nI was dangling\r\nYou were pulling me\r\nJust to watch me unravel\r\n\r\nPush and pull\r\nProvoke my will\r\nTrying to see what you can get out of me\r\nSoak up every last ounce of me\r\nMore than you can carry\r\n\r\nYou’ll have to wring yourself out\r\nBefore you walk away\r\nYou’ll have to wring yourself out\r\nBefore you think about leaving\r\n\r\nI’ll stand there and watch\r\nYou pour me back out\r\nIt''s a sad sight to see\r\nBecause without me\r\nYou return to being empty\r\n\r\nOn the surface\r\nIt seemed like everything was worth it\r\n\r\nI was an aimless string\r\nI was dangling\r\nYou were pulling me\r\nJust to watch me unravel', 1),
(22, 3, 'Inside Out', 'I was rotting inside\r\nMy inner flaws begging not to be revealed\r\nSwallowing doubt, choking it down\r\nWhatever I have to do to keep it concealed\r\n\r\nI''ll leave it off the list when you ask me what\r\nmy disposition is\r\nI just avoided it\r\nHoped it would blow over but you caught wind\r\nAnd just to see you turned me inside out\r\n\r\nAnd now I see it\r\nThere''s no freedom in bottling it up and hiding it\r\nSo I air it out\r\n\r\nI am my only judge\r\nAnd my self-hatred is justice enough\r\nSet myself free\r\nSet free\r\n\r\nAnd just to see you turned me inside out\r\n\r\nYou hung me on your wall\r\nGazed into darkness until you saw it all\r\nIt wasn''t what I wanted but I''ve never felt so free\r\nUntil you turned me inside out', 2),
(23, 3, 'Break Free', 'I just wanna break free from my misery\r\nIt''s suffocating everyone around me\r\nChoking on my apathy\r\nAnd disregard for humanity\r\n\r\nA bitter taste I''m so sick of swallowing\r\nA dead end path I''m sick of following\r\nI''m becoming my own worst enemy\r\nSpit it out\r\n\r\nForce fed by no other than me\r\nSelf-inflicted suffering\r\n\r\nI just wanna break free from my misery\r\nIt''s suffocating everyone around me\r\nChoking on my apathy\r\nGonna find the wall and tear it down\r\nTear down everything\r\nSo I can shed my disregard for humanity\r\nAnd unlearn the things that make me\r\n\r\nSink back into my ways\r\nPast and present\r\nGrow and change\r\nDon''t you fucking test me (test me)\r\nForce fed by no other than me\r\n\r\nI just wanna break free from my misery\r\nIt''s suffocating everyone around me\r\nChoking on my apathy\r\nGonna find the wall and tear it down\r\nTear down everything\r\nSo I can shed my disregard for humanity\r\nI just want to break free', 3),
(24, 3, 'Isolation', 'Becoming who I despise\r\n\r\nThe naked truth leaves me bare\r\nA tipping point between order and chaos\r\nGave way to despair every thought that\r\nSides with scorn\r\n\r\nConstantly stranding myself\r\nI push them away\r\nI hold my tongue and say\r\n"No one understands me"\r\nI justified my position with\r\n"We''re all alone in the end"\r\n\r\nI blur the line between who loves me and needs me\r\nSeparate myself to gain control of everything\r\nAnd redefine, but I lost in the isolation\r\n\r\nEmpathy, a foreign word to me\r\nHad no desire to speak\r\nHad no desire to set free\r\nFear let ency steal my virtue\r\nPain blinded my escape\r\nI chose to side with my enemy\r\nThe part of me that I hate\r\n\r\nFear pain envy hate\r\nI''ll see you on the other side\r\n\r\nI blur the line between who loves me and needs me\r\nSeparate myself to gain control of everything\r\nAnd redefine, but I lost in the isolation', 4),
(25, 3, 'Beggar', 'It didn''t mean anything to me\r\nTo mean anything to you\r\nAnd you pretended you were calloused\r\nBecause you didn''t know what else to do\r\n\r\nYou were begging for attention\r\nThe loudest in the room\r\n\r\nYou confused my silence\r\nMy solitude for weakness\r\nBut I could see right through\r\nYou were starving for acceptance inside\r\nAnd when you cracked, it all seeped through\r\n\r\nYou''re slurring words, things you know nothing about\r\nIgnorance displayed like a trophy you''re proud of\r\nYou stagger around nothing but stones in your mouth\r\nBecause you''re too deep in your front to spit them out\r\n\r\nYou were begging for attention\r\nThe loudest in the room\r\n\r\nYou confused my silence\r\nMy solitude for weakness\r\nBut I could see right through\r\nYou were starving for acceptance inside\r\nAnd when you cracked, it all seeped through\r\n\r\nYou pretended you were calloused\r\nBut I could see right through\r\nYou cracked and now you''re at the bottom\r\nStones in your mouth\r\nToo deep to spit them out\r\nTrying to make your way back\r\nAnd', 5),
(26, 3, 'See Beyond', 'See beyond\r\nYou try to break me, I look past and see beyond\r\nYou try to bend me\r\nI won''t align\r\n\r\nCast aside\r\nDon''t expect to find a single thing in common\r\nWith the crooked smiles, the aimless idols\r\nHollow and wandering\r\nThey''re going nowhere for miles\r\n\r\nThey try to break me\r\nThey try to bend me\r\nBut I see beyond\r\n\r\nI won''t align\r\nI don''t need validation to define me\r\nOr justify manipulation\r\n\r\nAnd I''ll sway you spineless\r\nProve you mindless\r\nYou lash out while I''m poised and silent\r\nI won''t live up to mass appeal\r\n"I''m holding out for a better deal"\r\n"Something real"\r\n\r\nI see beyond\r\n\r\nI won''t align\r\nI don''t need validation to define me\r\nOr justify manipulation\r\n\r\nThey try to bend me\r\nThey try to break me\r\nBut I see beyond', 6),
(27, 3, 'Daze', 'I tried to wake you but you were lost\r\nLost in a daze and I gave up\r\n\r\nYour fits of rage could only last so long\r\nUntil you were splintered, shattered, silent\r\nSwallowing stones\r\nExhaust yourself fighting the truth\r\nJust made it known\r\nNo judgment made, I knew it was just a fit of rage\r\nAnd while you''re splintered and silent\r\nA fire of shame\r\n\r\nI was willing to burn in the flame\r\nBut when I tried to wake you\r\nYou were lost\r\nLost in a daze\r\n\r\nYou gave me this,\r\nBut I paid for that\r\nYou once told me you''re gone\r\nThere''s no coming back\r\n\r\nNow that you wished yourself so far away\r\nI see what I should have seen\r\nYou divorced yourself from feeling\r\n\r\nAnd you force it out of your mind\r\nAll your fury in a fit of rage\r\n\r\nAnd while you''re splintered and silent\r\nA fire of shame\r\n\r\nI was willing to burn in the flame\r\nBut when I tried to wake you\r\nYou were lost\r\nLost in a daze', 7),
(28, 3, 'Reach', 'I just have to reach, reach out\r\nIt''s right in front of me\r\n\r\nSeek out the balance between\r\nKeeping my eyes on the horizon\r\nAnd staring at my feet\r\n\r\nI have to choose between drowning\r\nIn a puddle or burying myself in the sea\r\n\r\nThe weight of my concern is distressing\r\nAnd my lack of discern only disconnects me\r\n\r\nI must fight the sickness\r\nI must find the cure and let it take me\r\nInto the same deep waters as you\r\n\r\n"The shallow drowned\r\nLose less than we"\r\nAnd it''s only drifting further\r\n\r\nI just have to reach, reach out\r\nIt''s right in front of me\r\n\r\nOpen waves of turmoil or\r\nClosed off serenity\r\nDo I cast my burdens?\r\nOr do I learn to carry the weight?\r\nMy lack of discern only disconnects me\r\n\r\nI must fight the sickness\r\nI must find the cure and let it take me\r\nInto the same deep waters as you\r\n\r\n"The shallow drowned\r\nLose less than we"\r\nAnd it''s only drifting further\r\n\r\nI just have to reach\r\nIt''s right in front of me\r\n\r\nEmbrace the deep\r\nThere''s more room to sink\r\nI just have to rea', 8),
(29, 3, 'Delusion', 'Tell me I''m free to run with my tied feet\r\nSo when I fall you can coax me with sympathy\r\nForce failure down my throat until I feel guilty\r\n\r\nWeaken my will by limiting what I can do\r\nWhat I can say and how to be\r\nWant me to compromise\r\nWant me to fall in line\r\n\r\nI tried surrender\r\nBut I had to let go\r\nRise in revolt\r\nResist the fear I was being sold\r\n\r\nI freed myself from your divine delusion\r\nChains of guilt that were enslaving me\r\nPut a veil over my eyes, debt myself to a sacrifice\r\nI have to blind myself to believe\r\n\r\nTell me to fly but there''s a ceiling\r\nCage me in and say that I can''t leave\r\nDrag me through the dirt so you can clean me\r\n\r\nBut I won''t surrender to\r\nThe cold hand trying to silence me\r\nMake me follow a concept\r\nA mouth that doesn''t speak\r\nSlanted the truth and expected me not to see\r\n\r\nThe warped reality that breeds bigotry and ignorance\r\nTrades equality for kneeling at an empty throne\r\n\r\nForfeit control to none\r\nThe warped reality\r\nForfeit control to none\r\nKneeling ', 9),
(30, 3, 'Burdens', 'Remove the shadows from my eyes\r\nChains locked and tied across the door\r\nHe thinks himself a heroine, tie and run\r\nHe is the needle, I am the damage done\r\n\r\nMy anger is a gift my mind trained my eyes to see\r\nThe difference between who I am and the man I want to be\r\nClosed off and silent, fear lashed and left this scar\r\nA wall that won''t come down until I know that I know who you are\r\n\r\nTear it down\r\nI''m torn open and spilling out\r\nAll my burdens bury me\r\nRestless soul still wrestling\r\nI''ve felt it closing in on me\r\nFor far too long\r\n\r\nI feel it\r\nI feel it crawling in my skin\r\nIt''s going back and forth and then back again\r\nWhy does it feel so desperate?\r\nAcceptance, it feels so fucking pointless\r\nA fleeting feeling, a means to an end\r\nLike resurrecting a monument only to tear it down again\r\n\r\nTear it down\r\nI''m torn open and spilling out\r\n\r\nAll my burdens bury me\r\nRestless soul still wrestling\r\nI''ve felt it closing in on me\r\nFor far too long\r\n\r\nRemove the shadows from my eyes\r\nChains loc', 10),
(31, 4, 'Existence', 'This hollow feeling,\r\nThe knowledge that you exist\r\nAmidst your insecurities.\r\nCover up only to coward out,\r\nAnd never shutting up\r\nOnly to never speak aloud.\r\nHave you dried up entirely?\r\n\r\nThe walls of a church don''t make it holy.\r\nIt''s what''s authentic that completes the sum of it''s parts.\r\nDon''t excuse yourself from life today on the pretense of your past...\r\n\r\nYou''re hurt. You''re broken. That''s alright.\r\nThis might be what it takes to wake you up...\r\n\r\nAre you at your wits end yet? [4x]\r\n\r\nThe walls of a church don''t make it holy.\r\nSecurity isn''t glitzy or glamorous, concrete or cohesive.\r\nTherein lies the truth.\r\nLift your head up high...\r\n\r\nIt''s what we know we aren''t, that makes us who we are. [2x]\r\n\r\nYou''re hurt. You''re broken. That''s alright.\r\nThat makes us who we are (who we are).\r\nYou''re hurt. You''re broken. That''s alright.\r\nThat makes us who we are.', 1),
(32, 4, 'Ocean Of Apathy', 'Go...\r\nEverything looks the same.\r\nIt''s all so watered down.\r\nWhere does our anchor lie?\r\nWhere does our anchor lie?\r\nYeah...\r\nThere''s no identity in other''s insecurities.\r\nWe''re told everything will be alright.\r\nHush up, sit tight while sold a science and proved what''s impossible...\r\nwhat''s impossible.\r\nHush up, sit tight while sold a science and proved what''s impossible.\r\nHold up.\r\nHold on.\r\nLet''s go.\r\nIt might really hurt this time.\r\nHold up.\r\nHold on.\r\nLet''s go.\r\nIt might really hurt this time.\r\nHold on....\r\nHold up.\r\nHold on.\r\nLet''s go.\r\nIt might really hurt this time.\r\nLet''s go.\r\nWhy are we led by a misled generation?\r\nEverything true and complete is cut out...\r\nEverything true and complete is cut out, and swept under the floor boards, left to drown...\r\nleft to drown in an.... ocean... ocean... ocean... of apathy.\r\nWe can fight the current, but we can''t climb the waterfall...\r\nWhy are we led by a misled generation, left to drown in an ocean... ocean... ocean... of apathy?\r\nOcean.', 2),
(33, 4, 'White Washed', 'Push your controlling values aside, and dissect your own life.\r\nIt''s not about my beliefs. It''s about personal choice.\r\nIt breaks your heart to see me consume, but it shatters mine to see people follow you.\r\nAsk me to be blameless. You ask me to be blameless.\r\nYou ask me to be blameless, but who are you to decide what''s right?\r\nDon''t say another word. Don''t say another word.\r\nYou''ve crossed the line. Don''t say another word.\r\nYou''ve crossed the line. Don''t say another word.\r\nYou''ve crossed the line. Don''t say another word.\r\nYou''ve crossed the line.\r\nLet''s go...\r\nI won''t hesitate to put you in your place.\r\nYou are the straw that''s crushing my back.\r\nYou ask me to be blameless.\r\nYou ask me to be blameless, but who are you to decide what''s right?\r\nDon''t say another word...\r\nHowever, I thank you for this pen and ink ammunition.\r\nThank you for the inspiration.\r\nYou''re the straw that''s crushing my back.\r\nYou are the salt that''s burning my wounds.\r\nYou''re the straw that''s crushing my back.\r\nYo', 3),
(34, 4, 'Marianas Trench', 'This ship is sinking, deeper and deeper.\r\nWe''ve abandoned this vessel and left the captain for dead.\r\nWaves thirst for our passing. Waves thirst for our passing.\r\nPrepare for the struggle. Prepare to engage.\r\nOur armor tight to the skin, this shield it bears His name.\r\nWe are strapped to the teeth, but our swords are lodged tightly in our throats.\r\nWe are going under.\r\nWe cannot swim under these conditions.\r\nWe''re drowning quicker and quicker.\r\nWe cannot swim, we cannot swim, we can''t swim under these conditions.\r\nWe are drowning quicker and quicker.\r\nWe cannot swim, we cannot swim under these conditions....\r\nWe have become what we have feared (We have become what we have feared), being one with this world.\r\nWe''ve become one with this world.\r\nYeah...\r\nPray for Heaven''s titans to rain down, and spare us the pain.\r\nWe''re going under. We''re going under.\r\nPray for Heaven''s titans to rain down, and spare us the pain.\r\nWe''re going under. We''re going under.\r\nUnder, under, under, under...', 4),
(35, 4, 'The Escape Artist', 'Open your closed mind. (Open your closed mind.)\r\nClose your open mouth.\r\nYou''re pushing more than you''re pulling.\r\nEvery word that you say passes through my...\r\nOpen your closed mind.\r\nClose your open mouth.\r\nYou''re pushing more than you''re pulling.\r\nEvery word that you say passes through my.. ears.. before it even escapes your lips.\r\nNo one learns from someone they hate.\r\nYour mouth is like a grenade.\r\nNo one learns from someone they hate.\r\nYour mouth is like a grenade, blowing everyone away...\r\nOh...\r\nHow many have you pushed away, and how many have you saved?\r\nHow many have you pushed away, and how many have you saved?\r\nPick and choose based on a face, but it''s all in the heart.\r\nPick and choose based on a face, but it''s all in the heart that carries weight.\r\nDon''t judge until you''ve taken it all in, ''cause in the end you''ll pray to stay above the flames..\r\nOpen your closed mind and close your open mouth.\r\nYou''re pushing more, you''re pushing more than you are pulling.\r\nEvery word th', 5),
(36, 4, 'Indonesia', 'This plane''s going down in flames, and this time there''s no black box to capture your last words.\r\nA situation we can''t make any sense of. Sacrifice costs all of us everything.\r\nThis is the time to turn down our heads and turn up our hearts.\r\nThere''s no scale to...(there''s no scale to...) balance this out.\r\nSome say may those who curse days, curse this day.\r\nThere''s no scale to...(there''s no scale to...) balance this out.\r\nOh...\r\nHow does a man wrap his mind around eternity, when he can''t even...(when he can''t even...) explain his own...(explain his own...) composition?\r\nDon''t you see it''s bigger than you?\r\nHe sleeps in the mountains of Indonesia, and the white on his flag brings colors to shame, colors to shame.\r\nHe sleeps in the mountains of Indonesia, and the white on his flag brings colors to shame, colors to shame...\r\nThe earth will swallow the water. The clouds refill the oceans.\r\nThe earth will swallow the water and spit out.\r\nThe clouds will refill, refill the oceans.\r\nThe eart', 6),
(37, 4, 'Paradox', 'Bite your tongue until it bleeds.\r\nThis pain is worth more than what you have to say.\r\nSwallow your pride because silence is golden, and I wouldn''t pay a penny to hear your thoughts.\r\nLie down your guard and surrender.\r\nAll that you''re proving is your ignorance.\r\nLie down your guard and surrender.\r\nAll that you''re proving is your ignorance.\r\nChoose your words carefully.\r\nHe that keeps his mouth keeps his life;\r\nHe that opens his lips too wide shall bring on his own destruction [Proverbs 13:3].\r\nBite your tongue until it bleeds.\r\nThe pain is worth more than what you have to say.\r\nSwallow your pride.\r\nSwallow your pride because silence is golden, and I wouldn''t pay a penny to hear your thoughts.\r\nLie down your guard.\r\nLie down your guard and surrender. [x6]', 7),
(38, 4, 'Meridian', 'The people who survive the sword will find favor in the desert. [Jeremiah 31:2]\r\nI will build you up again and you will be rebuilt. [Jeremiah 31:4]\r\nI am the painter making this mess a masterpiece.\r\nI will rebuild you up again.', 8),
(39, 4, 'Rationalist', 'See yourself to the exit.\r\nWe can''t afford to watch you resort to this (resort to this).\r\nEven hope hides in the shadows. Nothing is real.\r\nColor is black, is white, is color blind.\r\nTucking away what''s true, what''s tangible. Nothing is real.\r\nColor is black, is white, is color blind. T\r\nTucking away what''s true, what''s tangible...\r\nYou''re crashing faster, and there won''t be pieces to piece back together this time.\r\nCan''t you see you''re ringing? You''re ringing out.\r\nThis is dissonance. This is dissonance.\r\nIt''s in the quiet of this place... (This is dissonance.) ...that all things come to life. (This is dissonance).\r\nAll that is real is blurred by your notion of reality.\r\nAll that is real is blurred by your notion of reality. Nothing is real.\r\nColor is black, is white, is color blind.\r\nTucking away what''s true, what''s tangible. Nothing is real.\r\nColor is black, is white, is color blind.\r\nTucking away what''s true, what''s tangible.\r\nYou skeptic, you.\r\nYou believe in unbelief.\r\nYou skepti', 9),
(40, 4, 'Meddler', 'This moment will too pass us by.\r\nIt''s this notion inside all of us to prioritize through our selfish eyes.\r\nTo be the bull behind the rampage, the reason for all the riot.\r\nWe''ll feed our flame before wasting time on everyone else''s, with more problems and less pride.\r\nWe''ll feed our flame before wasting time on everyone else''s, the gallows were not supposed to look like this.\r\nOh God, we live in misery, lying here in desperation.\r\nWe need you here more than anything right now...right now.\r\nIf everything''s relative, then why the emptiness in our souls?\r\nIf everything''s relative, then why the emptiness in our souls?\r\nTrying to untie the knot we thought we were untying our entire lives, we''re busied up and burnt out..\r\nEveryone together, we will strengthen ourselves.\r\nEveryone together, we will strengthen ourselves.\r\nEveryone together, we will strengthen ourselves.\r\nWe will.... Because now we know you won''t ever fly fast enough to make time stand still.\r\nYou won''t ever fly fast enough t', 10);

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
(2, 'Sededed', 'lolol', '2016-06-27 09:07:06', 2, 2, 'Paypal', '', '', 'sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero', '', 1, 0, '1945-02-08'),
(3, 'niblor@inceptos.co.uk', 'Sed dictum. Proin eget', '0000-00-00 00:00:00', 3, 3, 'Credit Card', '', 'Vitae Mauris Sit Inc.', 'Xerxes', 'Morrow', NULL, 0, '1958-11-29'),
(4, 'luctus@leoin.net', 'Nam interdum enim', '0000-00-00 00:00:00', 4, 4, 'Credit Card', 'Mr.', 'Metus Associates', 'Wandaa', 'Anderson', 1, 1, '1965-10-14'),
(5, 'nascetur@sollicituda.ca', 'porttitor', '0000-00-00 00:00:00', 5, 5, 'Paypal', '', 'Proin Dolor Nulla Corporation', 'Jolene', 'Workman', NULL, 0, '1957-02-23'),
(6, 'nec@ateget.co.uk', 'dapibus ligula.', '0000-00-00 00:00:00', 6, 6, 'Credit Card', '', 'Interdum Curabitur LLP', 'Kyla', 'Horne', NULL, 0, '1971-01-27'),
(7, 'Ut@Fusce.co.uk', 'Donec felis orci, adipiscing', '0000-00-00 00:00:00', 7, 7, 'Bank Transfer', 'Ms.', 'Lectus Corporation', 'Jesse', 'Morris', 1, 0, '1994-05-20'),
(8, 'Donec@etnetus.uk', 'tristique senectus et netus', '0000-00-00 00:00:00', 8, 8, 'Paypal', 'Mr.', 'Sed Sapien Limited', 'Oliver', 'Cooke', 1, 0, '1955-11-08'),
(9, 'sit@sapien.ca', 'Phasellus in felis.', '0000-00-00 00:00:00', 9, 9, 'Bank Transfer', 'Mr.', 'Ultrices A LLC', 'Miriam', 'Griffith', NULL, 0, '1987-12-11'),
(10, 'erat@elitsed.com', 'vestibulum nec, euismod', '0000-00-00 00:00:00', 10, 10, 'Paypal', '', 'Phasellus Vitae Mauris Consulting', 'Arthur', 'Gamble', NULL, 0, '1954-02-02'),
(11, 'magna.nec@risu.ca', 'erat volutpat. Nulla', '0000-00-00 00:00:00', 11, 11, 'Bank Transfer', 'Mr.', 'Enim Mi Tempor Incorporated', 'Jesse', 'Evans', NULL, 1, '1973-09-30'),
(12, 'quis@etnetuset.edu', 'Ut nec', '0000-00-00 00:00:00', 12, 12, 'Paypal', 'Ms.', 'Dignissim Pharetra Associates', 'Caesar', 'Ashley', NULL, 0, '1977-08-28'),
(13, 'urabitur@consequat.c', 'ornare tortor', '0000-00-00 00:00:00', 13, 13, 'Paypal', 'Ms.', 'Lectus PC', 'Geoffrey', 'Pate', NULL, 0, '1982-04-01'),
(14, 'dolor@dolor.net', 'odio. Nam', '0000-00-00 00:00:00', 14, 14, 'Bank Transfer', 'Mr.', 'Ut Pharetra Sed Corp.', 'Bert', 'Gutierrez', NULL, 0, '1986-09-12'),
(15, 'Mauris.quis@justosit.co.uk', 'et libero.', '0000-00-00 00:00:00', 15, 15, 'Credit Card', 'Dr.', 'Congue Corp.', 'Cara', 'Wilkerson', NULL, NULL, '1999-09-16'),
(16, 'ac@mauris.edu', 'ullamcorper, nisl arcu iaculis', '0000-00-00 00:00:00', 16, 16, 'Bank Transfer', 'Ms.', 'Facilisis Company', 'Curran', 'Davenport', NULL, 0, '1948-12-31'),
(17, 'Phasellus@nequenon.ca', 'et ultrices', '0000-00-00 00:00:00', 17, 17, 'Bank Transfer', 'Dr.', 'Faucibus Institute', 'Quintessa', 'Davis', NULL, NULL, '1962-08-28'),
(18, 'blandit@libero.ca', 'arcu.', '0000-00-00 00:00:00', 18, 18, 'Bank Transfer', 'Mr.', 'Eget PC', 'Kane', 'Burke', NULL, 0, '1961-09-10'),
(19, 'ridiculus@risusMorbi.ca', 'sagittis semper. Nam tempor', '0000-00-00 00:00:00', 19, 19, 'Bank Transfer', 'Mr.', 'Erat Neque Non LLC', 'Yetta', 'Ellison', NULL, 0, '2004-07-31'),
(20, 'amet@fringillami.com', 'Quisque varius.', '0000-00-00 00:00:00', 20, 20, 'Credit Card', 'Mrs.', 'Nunc Ut Erat Inc.', 'Burke', 'Pace', NULL, NULL, '2006-11-14'),
(21, 'nec.tellus@Maurisnulla.org', 'vulputate', '0000-00-00 00:00:00', 21, 21, 'Paypal', '', 'Vestibulum Inc.', 'Amaya', 'Luna', 1, NULL, '1946-03-15'),
(22, 'Proin@dolorFuscefeugiat.net', 'nec ante. Maecenas', '0000-00-00 00:00:00', 22, 22, 'Paypal', 'Mrs.', 'Adipiscing Elit Limited', 'Emmanuel', 'Reese', 1, NULL, '1972-05-24');

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
-- Indexes for table `tourdates`
--
ALTER TABLE `tourdates`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tracklist`
--
ALTER TABLE `tracklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
