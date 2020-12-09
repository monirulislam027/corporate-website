-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Dumping structure for table test.about_us
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `create_by` (`create_by`),
  CONSTRAINT `about_us_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.about_us: ~1 rows (approximately)
DELETE FROM `about_us`;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` (`id`, `title`, `sub_title`, `description`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'EUM IPSAM LABORUM DELENITI VELITENA', 'Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1, '2020-12-05 23:07:10', '2020-12-05 23:07:10');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;

-- Dumping structure for table test.client_logo
CREATE TABLE IF NOT EXISTS `client_logo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_works_menu_users` (`create_by`),
  CONSTRAINT `client_logo_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.client_logo: ~6 rows (approximately)
DELETE FROM `client_logo`;
/*!40000 ALTER TABLE `client_logo` DISABLE KEYS */;
INSERT INTO `client_logo` (`id`, `image`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, '5fd09145299af124088.png', 1, 1, '2020-12-09 14:56:37', '2020-12-09 15:00:35'),
	(2, '5fd09151b42d1164934.png', 1, 1, '2020-12-09 14:56:49', '2020-12-09 15:00:37'),
	(3, '5fd0915823b00684434.png', 1, 1, '2020-12-09 14:56:56', '2020-12-09 15:00:41'),
	(4, '5fd0915d564c2888052.png', 1, 1, '2020-12-09 14:57:01', '2020-12-09 15:00:43'),
	(5, '5fd091636c187853263.png', 1, 1, '2020-12-09 14:57:07', '2020-12-09 15:00:44'),
	(6, '5fd0916ca5d6a441544.png', 1, 1, '2020-12-09 14:57:16', '2020-12-09 15:00:46');
/*!40000 ALTER TABLE `client_logo` ENABLE KEYS */;

-- Dumping structure for table test.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.contact: ~0 rows (approximately)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table test.options
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `FK_options_users` (`create_by`),
  CONSTRAINT `FK_options_users` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.options: ~14 rows (approximately)
DELETE FROM `options`;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`id`, `name`, `value`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'site_name', 'Md Monir', 1, '2020-12-06 14:38:31', '2020-12-08 00:08:42'),
	(2, 'registration', '1', 1, '2020-12-06 14:38:13', '2020-12-08 00:10:18'),
	(3, 'forgot_password', '1', 1, '2020-12-06 14:39:29', '2020-12-08 00:12:49'),
	(4, 'google_map', '0', 1, '2020-12-06 14:40:02', '2020-12-08 00:09:15'),
	(5, 'contact_form', '1', 1, '2020-12-06 14:40:24', '2020-12-08 00:09:38'),
	(6, 'contact_location', 'A108 Adam Street, New York, NY 535022', 1, '2020-12-06 14:36:11', '2020-12-06 15:17:49'),
	(7, 'contact_email', 'mmilsam027@gmail.com', 1, '2020-12-06 14:36:11', '2020-12-06 22:25:20'),
	(8, 'contact_call', '01963636430', 1, '2020-12-06 14:37:37', '2020-12-06 18:25:48'),
	(9, 'facebook', 'https://www.facebook.com/monirul.islam.430/  ', 1, '2020-12-06 20:28:11', '2020-12-06 21:46:42'),
	(10, 'twitter', 'https://twitter.com/MdMonir00198916 ', 1, '2020-12-06 20:28:25', '2020-12-06 21:46:36'),
	(11, 'instagram', 'https://www.instagram.com/mdmonir027/ ', 1, '2020-12-06 20:28:46', '2020-12-06 21:47:00'),
	(12, 'skypee', ' ', 1, '2020-12-06 20:29:01', '2020-12-06 20:29:01'),
	(13, 'linkedIn', 'https://www.linkedin.com/', 1, '2020-12-06 20:29:25', '2020-12-06 21:46:49'),
	(14, 'google_map_url', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621 ', 1, '2020-12-06 22:26:20', '2020-12-06 22:34:41');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Dumping structure for table test.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_works_menu_users` (`create_by`),
  CONSTRAINT `services_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.services: ~10 rows (approximately)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `sub_title`, `icon`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'Perferendis dolor praaaaa', 'Similique quis ut in', 'fas fa-assistive-listening-systems', 1, 1, '2020-12-05 00:36:32', '2020-12-09 15:01:27'),
	(2, 'Velit quia explicabo', 'Ut asperiores aliqui', 'fas fa-balance-scale', 1, 1, '2020-12-05 00:36:35', '2020-12-09 15:01:28'),
	(3, 'Nisi voluptas aliqua', 'Do inventore quae se', 'fas fa-business-time', 1, 1, '2020-12-05 00:36:38', '2020-12-09 15:01:30'),
	(4, 'Ea et quia reiciendi', 'Dolor doloribus eius', 'fas fa-bullhorn', 1, 1, '2020-12-05 00:36:41', '2020-12-09 15:01:31'),
	(5, 'Qui animi cupidatat', 'Dolore nemo sunt pos', 'fas fa-certificate', 1, 1, '2020-12-05 00:36:46', '2020-12-09 15:01:33'),
	(6, 'Nemo quis voluptatem', 'Consectetur sint ev', 'fas fa-chart-pie', 1, 1, '2020-12-05 00:36:49', '2020-12-09 15:01:35'),
	(7, 'Beatae laudantium c', 'Voluptatem dolore la', 'fas fa-envelope', 1, 1, '2020-12-05 00:36:53', '2020-12-09 15:01:37'),
	(8, 'Beatae laudantium c', 'Voluptatem dolore la', 'fas fa-industry', 1, 1, '2020-12-05 00:36:57', '2020-12-09 15:01:40'),
	(9, 'Sed possimus enim p', 'Quia repudiandae ear', 'fas fa-laptop-house', 1, 1, '2020-12-05 00:37:00', '2020-12-09 15:01:42'),
	(10, 'Amet quia nostrud d', 'Nihil dolor sed rem ', 'fas fa-paste', 1, 1, '2020-12-05 00:37:04', '2020-12-09 15:01:44');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table test.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `percentage` int(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `FK_works_menu_users` (`create_by`),
  CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.skills: ~2 rows (approximately)
DELETE FROM `skills`;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`, `percentage`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'HTML', 90, 1, 1, '2020-12-05 13:12:56', '2020-12-09 15:01:58'),
	(2, 'css', 75, 1, 1, '2020-12-05 20:46:10', '2020-12-09 15:02:00');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table test.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image` (`image`),
  KEY `FK_sliders_users` (`create_by`),
  CONSTRAINT `FK_sliders_users` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table test.sliders: ~3 rows (approximately)
DELETE FROM `sliders`;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `url`, `start_date`, `end_date`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'Welcome to Sailor', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', '5fce58b7c9374945624.jpg', 'https://karmakloud.com/', '05-12-2020', '14-12-2020', 1, 1, '2020-12-07 22:30:47', '2020-12-09 15:02:13'),
	(2, 'Lorem Ipsum Dolor', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', '5fce58ed0209a214918.jpg', 'http://portfolio-psd-to-html.web.app/', '05-12-2020', '29-12-2020', 1, 1, '2020-12-07 22:31:41', '2020-12-09 15:02:15'),
	(3, 'Sequi ea ut et est quaerat', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', '5fce594b5bd09739003.jpg', 'https://wissbee.com', '05-11-2020', '30-12-2020', 1, 1, '2020-12-07 22:33:15', '2020-12-09 15:02:17');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table test.team
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `short_desc` varchar(50) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `linkedIn` varchar(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `create_by` (`create_by`),
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.team: ~4 rows (approximately)
DELETE FROM `team`;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` (`id`, `name`, `role`, `short_desc`, `status`, `facebook`, `twitter`, `instagram`, `linkedIn`, `image`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'Walter White', 'Chief Executive Officer', 'Explicabo voluptatem mollitia et repellat', 1, 'http://test.test/', 'http://test.test/', 'http://test.test/', 'http://test.test/', '5fce56ac0733a366900.jpg', 1, '2020-12-07 22:22:04', '2020-12-09 15:02:29'),
	(2, 'Sarah Jhonson', 'Product Manager', 'Aut maiores voluptates amet et quis', 1, 'http://test.test/', 'http://test.test/', 'http://test.test/', 'http://test.test/', '5fce56e3d7ed9317727.jpg', 1, '2020-12-07 22:22:59', '2020-12-09 15:02:31'),
	(3, 'William Anderson', 'CTO', 'Quisquam facilis cum velit laborum corrupti', 1, 'http://test.test/', 'http://test.test/', 'http://test.test/', 'http://test.test/', '5fce571420839397875.jpg', 1, '2020-12-07 22:23:48', '2020-12-09 15:02:33'),
	(4, 'Amanda Jepson', 'Accountant', 'Dolorum tempora officiis odit laborum officiis', 1, 'http://test.test/', 'http://test.test/', 'http://test.test/', 'http://test.test/', '5fce57578e84a599746.jpg', 1, '2020-12-07 22:24:38', '2020-12-09 15:02:34');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;

-- Dumping structure for table test.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `create_by` (`create_by`),
  CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.testimonials: ~5 rows (approximately)
DELETE FROM `testimonials`;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `name`, `role`, `review`, `status`, `image`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'Saul Goodman', 'Ceo & Founder', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper', 1, '5fcb171bda35f652152.jpg', 1, '2020-12-05 10:57:12', '2020-12-09 15:02:45'),
	(2, 'Sara Wilsson ', 'Designer', 'xport tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa', 1, '5fce5ab07c25a800290.jpg', 1, '2020-12-07 22:39:12', '2020-12-09 15:02:50'),
	(3, 'Jena Karlis', 'Store Owner', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim. ', 1, '5fce5acb39a22413317.jpg', 1, '2020-12-07 22:39:39', '2020-12-09 15:02:52'),
	(4, 'Matt Brandon', 'Freelancer', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 1, '5fce5bd5e4c13842340.jpg', 1, '2020-12-07 22:44:05', '2020-12-09 15:02:58'),
	(5, 'John Larson', ' Entrepreneur', '\r\n Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid', 1, '5fce5bf28b5e0885217.jpg', 1, '2020-12-07 22:44:34', '2020-12-09 15:03:01');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verfied_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table test.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verfied_at`, `password`, `token`, `photo`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Md Monir', 'admin@e.com', NULL, '$2y$10$uCLkznmNek9OKX.1eduHOukz3PbOFmgPuoLSoYi5ZmZW20FloKJy2', '5fcf9bd50a7b0', '5fd09212f0700792281.jpg', 1, '2020-11-16 11:10:13', '2020-12-09 15:00:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table test.works_items
CREATE TABLE IF NOT EXISTS `works_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `menu_id` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `menu_id` (`menu_id`),
  KEY `create_by` (`create_by`),
  CONSTRAINT `FK_works_items_users` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_works_items_works_menu` FOREIGN KEY (`menu_id`) REFERENCES `works_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.works_items: ~8 rows (approximately)
DELETE FROM `works_items`;
/*!40000 ALTER TABLE `works_items` DISABLE KEYS */;
INSERT INTO `works_items` (`id`, `title`, `menu_id`, `image`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
	(1, 'App 1', 18, '5fce604707be5524808.jpg', 1, 1, '2020-12-07 23:03:03', '2020-12-09 15:03:32'),
	(2, 'Web 1', 20, '5fce60832ffa5867236.jpg', 1, 1, '2020-12-07 23:03:23', '2020-12-09 15:03:33'),
	(3, 'App 2', 18, '5fce6071cb0da615465.jpg', 1, 1, '2020-12-07 23:03:45', '2020-12-09 15:03:34'),
	(4, 'App 3', 18, '5fce6122c6524764393.jpg', 1, 1, '2020-12-07 23:04:35', '2020-12-09 15:03:36'),
	(5, 'Est soluta doloremq', 19, '5fce613390535172786.jpg', 1, 1, '2020-12-07 23:06:59', '2020-12-09 15:03:37'),
	(6, 'Veritatis aperiam pe', 20, '5fce614342010849177.jpg', 1, 1, '2020-12-07 23:07:15', '2020-12-09 15:03:39'),
	(7, 'Non aut ea natus in', 19, '5fce615da65f8456270.jpg', 1, 1, '2020-12-07 23:07:41', '2020-12-09 15:03:40'),
	(8, 'Laborum Modi ut cum', 20, '5fce6164b0d95433934.jpg', 1, 1, '2020-12-07 23:07:48', '2020-12-09 15:03:42');
/*!40000 ALTER TABLE `works_items` ENABLE KEYS */;

-- Dumping structure for table test.works_menu
CREATE TABLE IF NOT EXISTS `works_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `create_by` int(3) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `slug` (`slug`),
  KEY `FK_works_menu_users` (`create_by`),
  CONSTRAINT `FK_works_menu_users` FOREIGN KEY (`create_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table test.works_menu: ~3 rows (approximately)
DELETE FROM `works_menu`;
/*!40000 ALTER TABLE `works_menu` DISABLE KEYS */;
INSERT INTO `works_menu` (`id`, `name`, `slug`, `status`, `create_by`, `created_at`, `updated_at`) VALUES
	(18, 'App', 'app', 1, 1, '2020-12-07 23:02:02', '2020-12-07 23:02:02'),
	(19, 'Card', 'card', 1, 1, '2020-12-07 23:02:12', '2020-12-07 23:02:12'),
	(20, 'Web', 'web', 1, 1, '2020-12-07 23:02:22', '2020-12-07 23:02:22');
/*!40000 ALTER TABLE `works_menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
