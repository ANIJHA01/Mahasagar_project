-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 01:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasagar`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE `article_comments` (
  `id` int(11) NOT NULL,
  `news_post_id` int(11) NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `article_email` varchar(255) NOT NULL,
  `article_comment` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`id`, `news_post_id`, `article_name`, `article_email`, `article_comment`, `created_at`, `updated_at`, `categorie_id`) VALUES
(8, 57, 'naveen jha', 'njha@gmail.com', 'Hii my name is naveen i read you news daily..', '2025-02-04 11:23:10', '2025-02-04 11:23:10', 2),
(10, 52, 'Jim Calist', 'jim@gmail.com', 'Slung alongside jeepers hypnotic legitimately some iguana this agreeably triumphant pointedly far', '2025-02-04 11:28:24', '2025-02-04 11:28:24', 5),
(11, 52, 'Steven Jobs', 'steven', 'So sparing more goose caribou wailed went conveniently burned the the the and that save that adroit gosh and sparing armadillo grew some overtook that magnificently', '2025-02-04 11:29:15', '2025-02-04 11:29:15', 5),
(12, 52, 'Rahul thakur', 'rahul@gmail.com', 'Circuitous gull and messily squirrel on that banally assenting nobly some much rakishly goodness that the darn abject hello left because unaccountably spluttered unlike a aurally since contritely thanks', '2025-02-04 11:29:52', '2025-02-04 11:29:52', 5),
(13, 52, 'Nitish kumar', 'nitish@gmail.com', 'Slung alongside jeepers hypnotic legitimately some iguana this agreeably triumphant pointedly far', '2025-02-04 11:32:03', '2025-02-04 11:32:03', 5),
(14, 52, 'Ela jobs', 'ela@gmail.com', 'So sparing more goose caribou wailed went conveniently burned the the the and that save that adroit gosh and sparing armadillo grew some overtook that magnificently that', '2025-02-04 11:32:46', '2025-02-04 11:32:46', 5),
(18, 57, 'Rahul jha ', 'rjha@gmail.com', 'Hey to this domy news section is admire to the align..', '2025-02-04 16:52:17', '2025-02-04 16:52:17', 2),
(19, 57, 'kamlesh jha ', 'jhaji@gmail.com', 'To this domy profile is admire to the aligning to the.', '2025-02-04 16:52:53', '2025-02-04 16:52:53', 2),
(21, 51, 'Ela singh', 'ela@gmail.com', 'Exploring the Wonders of Virtual Reality\" Virtual Reality (VR) technology has revolutionized the way we experience the digital world. In this post, we explore the potential of VR in gaming, education, healthcare, and beyond.', '2025-02-04 16:56:12', '2025-02-04 16:56:12', 4),
(22, 51, 'Singh kumar ', 'singh@gmail.com', 'Smart Home Thermostat\" Stay comfortable year-round with our Smart Home Thermostat. Effortlessly control your home\'s temperature from anywhere with the mobile app, save energy, and reduce utility costs.', '2025-02-04 16:56:40', '2025-02-04 16:56:40', 4),
(23, 51, 'Steave job', 'steave@gmail.com', 'Weekend Vibes\" Sundays are for relaxation and recharge! What’s your favorite way to unwind before the week starts?', '2025-02-04 16:57:05', '2025-02-04 16:57:05', 4),
(24, 49, 'Sports1', 'sport@gmail.com', 'Your Exclusive 20% Off Just For You!\" Hey [Name], we’ve got something special just for you. Enjoy 20% off your next purchase. Use code: EXCLUSIVE20 at checkout. Hurry, offer ends soon!', '2025-02-04 16:59:22', '2025-02-04 16:59:22', 3),
(25, 49, 'sport2', 'sport@gmail.com', 'Your Exclusive 20% Off Just For You!\" Hey [Name], we’ve got something special just for you. Enjoy 20% off your next purchase. Use code: EXCLUSIVE20 at checkout. Hurry, offer ends soon!', '2025-02-04 16:59:51', '2025-02-04 16:59:51', 3),
(26, 50, 'politics1', 'politics@gmail.com', 'Your Exclusive 20% Off Just For You!\" Hey [Name], we’ve got something special just for you. Enjoy 20% off your next purchase. Use code: EXCLUSIVE20 at checkout. Hurry, offer ends soon!', '2025-02-04 17:00:16', '2025-02-04 17:00:16', 23),
(27, 50, 'politics2', 'politics@gmail.com', 'Your Exclusive 20% Off Just For You!\" Hey [Name], we’ve got something special just for you. Enjoy 20% off your next purchase. Use code: EXCLUSIVE20 at checkout. Hurry, offer ends soon!', '2025-02-04 17:00:36', '2025-02-04 17:00:36', 23),
(28, 53, 'Bussiness1', 'ajh@gmail.com', 'Your Exclusive 20% Off Just For You!\" Hey [Name], we’ve got something special just for you. Enjoy 20% off your next purchase. Use code: EXCLUSIVE20 at checkout. Hurry, offer ends soon!', '2025-02-04 17:01:07', '2025-02-04 17:01:07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `banner_ad_images`
--

CREATE TABLE `banner_ad_images` (
  `id` int(11) NOT NULL,
  `img_url` varchar(500) NOT NULL,
  `added_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner_ad_images`
--

INSERT INTO `banner_ad_images` (`id`, `img_url`, `added_dt`, `modified_by`, `modified_at`, `status`) VALUES
(56, 'pan-card-2.jpg', '2025-02-03 15:07:30', 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` int(11) NOT NULL,
  `pcat_id` varchar(255) NOT NULL,
  `cat_name` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `font_ms`
--

CREATE TABLE `font_ms` (
  `ms_id` int(11) NOT NULL,
  `ms_images` varchar(500) DEFAULT NULL,
  `ms_key` varchar(100) DEFAULT NULL,
  `ms_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `font_ms`
--

INSERT INTO `font_ms` (`ms_id`, `ms_images`, `ms_key`, `ms_desc`) VALUES
(43, 'img_67a57f661289c8.32843804.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  `post` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`cat_id`, `cat_name`, `added_by`, `added_at`, `modified_by`, `modified_at`, `post`) VALUES
(1, 'regional', 0, '2024-10-29 14:24:14', 0, '2024-10-29 14:24:14', 0),
(2, 'business', 0, '2024-10-29 07:26:44', 0, '2024-10-29 07:26:44', 3),
(3, 'sports', 0, '2024-10-29 07:26:44', 0, '2024-10-29 07:26:44', 2),
(4, 'entertainment', 0, '2024-10-29 07:26:44', 0, '2024-10-29 07:26:44', 2),
(5, 'health', 0, '2024-10-29 07:26:44', 0, '2024-10-29 07:26:44', 1),
(23, 'politics', 0, '2025-01-27 08:14:26', 0, '2025-01-27 08:14:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_meta`
--

CREATE TABLE `mhs_meta` (
  `id` int(11) NOT NULL,
  `meta_key` varchar(100) DEFAULT NULL,
  `meta_value` varchar(500) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhs_meta`
--

INSERT INTO `mhs_meta` (`id`, `meta_key`, `meta_value`, `meta_desc`) VALUES
(1, 'banner_ad_img', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_ads`
--

CREATE TABLE `news_ads` (
  `ads_id` int(10) NOT NULL,
  `ads_title` varchar(50) NOT NULL,
  `ads_content` text NOT NULL,
  `ads_image` varchar(255) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `ads_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ads_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_ads`
--

INSERT INTO `news_ads` (`ads_id`, `ads_title`, `ads_content`, `ads_image`, `added_by`, `ads_date`, `ads_status`) VALUES
(8, 'News post 2...', 'zxc', 'Coaching.jpg', 'zxc', '2024-11-05 05:30:26', 0),
(9, 'News post 4...', 'News post 4...', 'Yoga.jpg', '', '2024-11-12 12:19:03', 1),
(10, 'News post 3...', 'News post 3...', 'Alternative Therapies.jpg', '', '2024-11-12 12:31:52', 1),
(11, 'News post 2...', 'News post 2...', 'Nutrition(1).jpg', '', '2024-11-12 12:32:17', 1),
(12, 'News post 1...', 'News post 1...', 'Nutrition(1).jpg', '', '2024-11-12 12:33:21', 1),
(13, 'Aj tak news..', 'Aj tak news..', 'Counseling.jpg', '', '2024-11-15 06:11:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_posts`
--

CREATE TABLE `news_posts` (
  `id` int(11) NOT NULL,
  `news_title` varchar(999) NOT NULL,
  `news_description` text NOT NULL,
  `news_banner` varchar(500) NOT NULL,
  `page_author` varchar(255) NOT NULL,
  `added_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` int(11) NOT NULL,
  `modified_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `category` varchar(255) NOT NULL,
  `news_views` int(11) DEFAULT 0,
  `news_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`id`, `news_title`, `news_description`, `news_banner`, `page_author`, `added_dt`, `modified_by`, `modified_dt`, `status`, `category`, `news_views`, `news_content`) VALUES
(49, 'To sports man...', 'To sports man ariving to the aligning to jio camp to aligning..', 'pexels-asadphoto-3601425.jpg', 'Anil jha', '2025-01-30 11:02:04', 0, '2025-01-30 11:02:04', 1, '3', 5, ''),
(50, 'In politics news..', 'In politics news to ariving they gifted in 500$ to modi ji has acheave..', 'news_1738815133.jpg', 'Anil jha', '2025-01-30 11:02:57', 0, '2025-01-30 11:02:57', 1, '23', 7, ''),
(51, 'Sky Force Day 7 Box Office Trends: ', 'Sky Force Goes In Risky Mode; To Compete With Deva\r\nBacked by Maddock Films and Jio Studios, Sky Force maintained great hold in the opening weekend due to movie offers of heavy discounted prices for the tickets. Akshay Kumar and Veer Pahariya-starrer collected Rs 64 crore at the box office in the first three days of its release. The aerial actioner then witnessed drop during the weekdays, bringing its cume collection to Rs 82.25 crore in six days.', 'pexels-fabianwiktor-994605.jpg', 'Anil jha', '2025-01-30 11:04:29', 0, '2025-01-30 11:04:29', 1, '4', 17, ''),
(52, 'Top 3 Exercises For A Healthy Heart', 'Aerobic, cardio or cardiovascular exercises help keep your heart, lungs and circulatory system healthy. Aerobic exercises strengthen your heart muscles and allow it to pump blood efficiently. This improves blood flow to different parts of the body. These exercises get your blood pumping and involve large muscle groups.', 'news_1738988815.jpg', 'Anil jha', '2025-01-30 11:06:11', 0, '2025-01-30 11:06:11', 1, '5', 51, ''),
(53, 'GAIL Q3 results: Net profit rises 28% to ₹4,084 crore, revenue at ₹36,937 crore', 'GAIL (India), on January 30, announced a consolidated net profit of ₹4,084 crore for the third quarter of the 2024-25 financial year, marking a 28 per cent rise from the previous year.', 'news_1738988475.jpg', 'Anil jha', '2025-01-30 11:07:30', 0, '2025-01-30 11:07:30', 1, '2', 34, ''),
(54, 'GAIL Q3 income and EBITDA', 'GAIL reported an exceptional income of $285 million, or ₹2,440 crore, for the quarter from SEFE Marketing & Trading Singapore Pte. Ltd. as a settlement for the withdrawal of arbitration proceedings, according to Sandeep Kumar Gupta, Chairman and Managing Director.', 'news_1738819676.jpg', 'Anil jha', '2025-01-30 11:25:25', 0, '2025-01-30 11:25:25', 1, '2', 24, ''),
(57, 'Budget 2025 income tax: From income tax slab &', 'Stock Market Today: Indian markets maintained their winning streak for the third consecutive trading session on Thursday, January 30, as strong support from heavyweight stocks such as Reliance Industries, HDFC Bank, and Bharti Airtel kept the momentum going.', 'news_1738819660.jpg', 'Mk mukesh', '2025-01-30 11:30:49', 0, '2025-01-30 11:30:49', 1, '2', 41, ''),
(58, 'This Resort is only nature lover who love.', 'The Nifty 50 ended the session with a gain of 0.37% at 23,249, while the Sensex closed at 76,759, marking a 0.30% increase from the previous close. The Nifty Smallcap 100 index rose 0.12% to 16,560, while the Nifty Midcap 100 index concluded the day with a mild drop of 0.01%, closing at 52,714.\r\n\r\n', 'news_1738815053.jpg', 'Aj anil jha', '2025-02-05 18:30:00', 0, '2025-02-06 06:23:31', 1, '4', 146, ''),
(59, 'While the Sensex closed at:', 'A flower, also known as a bloom or blossom,[1] is the reproductive structure found in flowering plants (plants of the division Angiospermae). Flowers consist of a combination of vegetative organs – sepals that enclose and protect the developing flower. Petals attract pollinators, and reproductive organs that produce gametophytes, which in flowering plants produce gametes. ', 'news_1738815106.jpg', 'BT Bittu ji', '2025-01-30 11:32:32', 0, '2025-02-06 11:03:21', 1, '1', 156, '');

--
-- Triggers `news_posts`
--
DELIMITER $$
CREATE TRIGGER `delete_post_count` AFTER DELETE ON `news_posts` FOR EACH ROW BEGIN
    UPDATE main_categories 
    SET post = (SELECT COUNT(*) FROM news_posts WHERE category = OLD.category)
    WHERE cat_id = OLD.category;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_post_count` AFTER INSERT ON `news_posts` FOR EACH ROW BEGIN
    UPDATE main_categories 
    SET post = (SELECT COUNT(*) FROM news_posts WHERE category = NEW.category)
    WHERE cat_id = NEW.category;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `news_posts_cont`
--

CREATE TABLE `news_posts_cont` (
  `id` int(11) NOT NULL,
  `con_one` varchar(255) NOT NULL,
  `con_two` varchar(255) NOT NULL,
  `con_img` varchar(255) NOT NULL,
  `con_three` varchar(255) NOT NULL,
  `con_four` varchar(255) NOT NULL,
  `con_five` varchar(255) NOT NULL,
  `con_six` varchar(255) NOT NULL,
  `con_seven` varchar(255) NOT NULL,
  `con_eight` varchar(255) NOT NULL,
  `con_nine` varchar(255) NOT NULL,
  `con_head` varchar(255) NOT NULL,
  `con_ten` varchar(255) NOT NULL,
  `con_eleven` varchar(255) NOT NULL,
  `con_twelve` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_posts_cont`
--

INSERT INTO `news_posts_cont` (`id`, `con_one`, `con_two`, `con_img`, `con_three`, `con_four`, `con_five`, `con_six`, `con_seven`, `con_eight`, `con_nine`, `con_head`, `con_ten`, `con_eleven`, `con_twelve`) VALUES
(1, 'The lemming hello and hence leapt hello more otter aerially or dear monkey much illustrative bled showed crud fox yikes but spelled far onto nudged some frog and bluebird one surreptitiously ground frenetically much far up rewrote this.', 'And far hey much hello and bashful one save less much goldfish analogically rabbit more hello threw thanks therefore truthful unproductive strenuously concentric repaid manifestly and oh between the one jeez and hit terrier dense unwittingly shark versus ', '', 'Knew opposite sped hey insect wow interminable telepathic far oh this to one goldfinch some under chose attractively a<em> yet clenched one less prodigious amenably far one inset much much that hound gosh goodness articulate</em> spitefully ape repeatedly', 'Pellentesque neque nulla cubilia enim consequat eleifend, taciti nec aenean vehicula congue dolor etiam, ornare morbi class tristique quisque mattis augue tempus semper venenatis donec ipsum cras dapibus elit, ut fusce rhoncus senectus sit lectus tristiqu', 'Vivamus hac faucibus primis eleifend ligula curabitur phasellus augue, quisque rhoncus purus quam per felis rhoncus viverra bibendum, habitasse sem turpis fermentum morbi ut diam elit vestibulum consectetur suscipit pellentesque commodo dictumst potenti g', 'Ouch much until in ahead until much scallop obliquely expansive experimentally daintily more regardless wherever conjointly overslept elegant then wow extrinsically irrespective imminently and ladybug cynic hawk between a guffawed as coaxingly strictly bl', 'Frtuitous spluttered unlike ouch vivid blinked far inside under far the wild one wasp nightingale spluttered wide otter crud lemming aside about and python until.', 'Against and lantern where a and gnashed nefarious far rigorous cheerfully much far owing funny lusty cantankerous until much dire some deliberate close condescendingly tarantula angelfish glum shut a dipped wow that jeepers much and shut discarded this.', 'Ouch oh alas crud unnecessary invaluable some goodness opposite hello since audacious far', 'Sample Heading', 'Close unthinking darn as darn between naked beyond seriously guiltily chameleon and that fish lent alas spuriously winced and shuddered unlocked more some gosh darn the trustfully talkative goodness indubitably single-mindedly ouch astride.', 'Freshly turtle took toward more much notably fearlessly resolutely tastefully thus far some hello amazingly well overthrew far youthfully where stiffly below mongoose ordered dizzy the some far cosmetically much cuddled far oh this much darn one much much', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent_categories`
--

CREATE TABLE `parent_categories` (
  `id` int(11) NOT NULL,
  `mcat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_at` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_categories`
--

INSERT INTO `parent_categories` (`id`, `mcat_id`, `cat_name`, `added_by`, `added_at`, `modified_by`, `modified_at`, `status`) VALUES
(1, 1, 'state', 1, '2024-10-29 14:29:20', NULL, NULL, 1),
(2, 1, 'national', 1, '2024-10-29 14:29:20', NULL, NULL, 1),
(3, 1, 'international', 1, '2024-10-29 14:29:20', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'Anil', 'jha', 'aj34', '5d41402abc4b2a76b9719d911017c592', 0),
(2, 'keshav', 'kumar', 'kjha34', '21232f297a57a5a743894a0e4a801fc3', 0),
(5, 'demo', 'kr', 'demo12', 'fe01ce2a7fbac8fafaed7c982a04e229', 1),
(6, 'hina', 'khan', 'hina12', '0b8734431cb0fc4c749d7cb9fa0aeda9', 0),
(9, 'anil', 'jha', 'ajha2001', '71b9b5bc1094ee6eaeae8253e787d654', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_at` datetime DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role_id`, `username`, `password`, `email`, `phone`, `modified_by`, `modified_at`, `status`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', NULL, NULL, '2024-10-30 18:13:57', 1),
(3, 1, 'advertiser', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', NULL, NULL, '2024-10-30 18:13:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`) VALUES
(1, 'Super admin'),
(2, 'Advertiser'),
(3, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id` (`id`),
  ADD KEY `news_post_id` (`news_post_id`);

--
-- Indexes for table `banner_ad_images`
--
ALTER TABLE `banner_ad_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `font_ms`
--
ALTER TABLE `font_ms`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `mhs_meta`
--
ALTER TABLE `mhs_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_ads`
--
ALTER TABLE `news_ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `news_posts`
--
ALTER TABLE `news_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_posts_cont`
--
ALTER TABLE `news_posts_cont`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_categories`
--
ALTER TABLE `parent_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `banner_ad_images`
--
ALTER TABLE `banner_ad_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `font_ms`
--
ALTER TABLE `font_ms`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mhs_meta`
--
ALTER TABLE `mhs_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news_ads`
--
ALTER TABLE `news_ads`
  MODIFY `ads_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_posts`
--
ALTER TABLE `news_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `news_posts_cont`
--
ALTER TABLE `news_posts_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parent_categories`
--
ALTER TABLE `parent_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD CONSTRAINT `article_comments_ibfk_1` FOREIGN KEY (`news_post_id`) REFERENCES `news_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
