-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2018 pada 05.42
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_log`
--

CREATE TABLE IF NOT EXISTS `account_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_type` text NOT NULL,
  `activity_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `activity_date` date NOT NULL,
  `month` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `account_log`
--

INSERT INTO `account_log` (`log_id`, `activity_type`, `activity_name`, `user_id`, `account_id`, `activity_date`, `month`) VALUES
(1, 'tweet', 'ahmad', 1, 22, '2018-01-01', 1),
(2, 'tweet', 'ahmadh hadi jaelani', 1, 23, '2018-02-02', 2),
(3, 'tweet', 'aj hadi', 1, 22, '2018-03-29', 3),
(4, 'tweet', 'ahmad kun...', 1, 23, '2018-03-29', 3),
(5, 'tweet', 'ahmad hadi', 1, 23, '2018-04-02', 4),
(7, 'tweet', 'samlekkom', 10, 24, '2018-04-02', 4),
(8, 'tweet', 'lady', 1, 24, '2018-04-02', 4),
(9, 'tweet', '......', 1, 24, '2018-04-02', 4),
(10, 'tweet', '', 1, 26, '2018-04-02', 4),
(11, 'tweet', 'jsabckjjaws,vbcjhas', 1, 26, '2018-04-02', 4),
(12, 'tweet', 'samlekom\r\n', 1, 30, '2018-04-03', 4),
(13, 'tweet', '0000000000000000000000000', 10, 31, '2018-04-03', 4),
(14, 'tweet', 'samlekom mamang', 12, 32, '2018-04-03', 4),
(15, 'tweet', 'ish....', 10, 34, '2018-04-03', 4),
(16, 'tweet', 'samlekom\r\n', 10, 35, '2018-04-03', 4),
(17, 'tweet', 'happy sunday', 13, 36, '2018-04-03', 4),
(18, 'tweet', '#sunday', 13, 36, '2018-04-03', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `twitter_account`
--

CREATE TABLE IF NOT EXISTS `twitter_account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_key` varchar(255) DEFAULT NULL,
  `consumer_secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `access_token_secret` varchar(255) DEFAULT NULL,
  `screen_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `banner_url` varchar(255) DEFAULT NULL,
  `tweet_count` int(11) DEFAULT NULL,
  `follower_count` int(11) DEFAULT NULL,
  `following_count` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  KEY `created_by` (`created_by`),
  KEY `created_by_2` (`created_by`),
  KEY `created_by_3` (`created_by`),
  KEY `created_by_4` (`created_by`),
  KEY `created_by_5` (`created_by`),
  KEY `created_by_6` (`created_by`),
  KEY `created_by_7` (`created_by`),
  KEY `created_by_8` (`created_by`),
  KEY `created_by_9` (`created_by`),
  KEY `created_by_10` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `twitter_account`
--

INSERT INTO `twitter_account` (`account_id`, `consumer_key`, `consumer_secret`, `access_token`, `access_token_secret`, `screen_name`, `name`, `picture_url`, `banner_url`, `tweet_count`, `follower_count`, `following_count`, `created_by`, `created_date`) VALUES
(31, 'ID70E5BXuzrAnGmjMFHjgB1EN', 'ylD6QxsP1HMbLUwi3leDq44c4oUfNpLllYdef9MNengRI97rYU', '948033731180113920-iGy6dcwfX8uTu3UiPdbwwceDvh3E4UY', 'G88IFNYC7jDXp6f92hVdfM9nz1ZKzsPt8RysQ1PhwSMeU', 'AjHadii', 'Ahmad Hadi', 'http://pbs.twimg.com/profile_images/948136198991593472/pCvPkcW3_normal.jpg', 'https://pbs.twimg.com/profile_banners/948033731180113920/1514868923', 15, 6, 3, 10, '2018-04-03'),
(34, 't6Sp8G676oNshAD56tnvzRrN0', '3H9smiLF8yyJkWuXreNXpUk2t9ORwLUUPcGhwl0pS5wi9ndRUy', '963609377130213378-Yyvc2xJXliRozj4l34o5tWocDcsOJLI', '2h9Ng3kqaaG9Ui3FQiIDo0ptFb1V5JuKmvx6PKgkvKsfa', 'iqbalathorid28', 'iqbalathorid ', 'http://pbs.twimg.com/profile_images/963609974202032128/YWspfoEr_normal.jpg', 'https://pbs.twimg.com/profile_banners/963609377130213378/1518577535', 2, 2, 32, 10, '2018-04-03'),
(35, 'ZIZIJJYi4G6SutFRvuC0OmsmK', 'UrTL2O8lQdgro5MkVciKAFHWZ5M7zrjkn7oWkvAGVav53zbf1w', '965429523301908480-k1Y7OSlWdmsc8MUWVst3OTQx1HxPgTX', 'sbqM7r02dpbkBRTel0yzldWKl2XMWMW7SLJZX6twT0Taj', 'mustozal', 'rizal mustofa', 'http://pbs.twimg.com/profile_images/965432079440687104/5lWqdwDQ_normal.jpg', 'https://pbs.twimg.com/profile_banners/965429523301908480/1519012016', 2, 1, 58, 10, '2018-04-03'),
(36, 'trxUQ94UfKIzRFXbDlbmwMrRM', 'FXvoRziTmzCNexDmTbG77stdwTS5YgZXAK1o2u56EoHNh6ByHR', '965516240700653568-NshjDMdqIVeC5h2j8xE7xSMq9o3Y5Kt', 'TCIV133o4fNJbgdqQLSYP095KmlG961dKrtZepoLIfREH', 'dwitam4p', 'dwitama putra', 'http://pbs.twimg.com/profile_images/965516938842550273/342rAvh-_normal.jpg', '', 2, 3, 68, 13, '2018-04-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `twitter_tweet`
--

CREATE TABLE IF NOT EXISTS `twitter_tweet` (
  `tweet_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `tweet_text` text NOT NULL,
  `tweet_image` text,
  `tweet_date` date NOT NULL,
  `favorite_cout` int(11) DEFAULT NULL,
  `retweet_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`tweet_id`),
  KEY `account_id` (`account_id`),
  KEY `account_id_2` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned DEFAULT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'XZXzzbahKpzdiA.CP3OjB.', 1268889823, 1523417587, 1, 'Admin'),
(10, '::1', 'sama', '$2y$08$5DsxxPe3RLdko.x4IKYAsekR4nk0aQ8pIr2V.ppbUKW1fRf.Nb/IO', NULL, 'sama@sama.com', NULL, NULL, NULL, 'FXODiLXnNbektRTM2q7sMe', 1520329737, 1523417891, 1, 'sama'),
(13, '::1', 'andrianifitria', '$2y$08$MkobmrJ9p1ISkh0LtNyQaufVQyUCtKRawAiOQ5Wh/k0isDSTqcR5W', NULL, 'feetriandriani@yandex.com', NULL, NULL, NULL, 'lprVuAtRp2mJvdyH6n1pIe', 1522662109, 1522743623, 1, 'Andriani Fitria'),
(14, '::1', 'stefaarianti', '$2y$08$N3X0riOafRvUizZ.ZsHxieAw1SxTWgyEr0LC4G/1DWLAgGAnbrspy', NULL, 'stefarianti@yandex.com', NULL, NULL, NULL, NULL, 1522662153, NULL, 1, 'Stefany Arianti'),
(15, '::1', 'naufajrul', '$2y$08$X/yhS./oGV3UpspKjShUJeWo7c5mIr6t53nfizz/1CGSu4UY.233i', NULL, 'naufajrul@zoho.com', NULL, NULL, NULL, NULL, 1522662400, NULL, 1, 'ajrul naufal'),
(16, '::1', 'andrianip0303', '$2y$08$Okf1wrTVz.D5xx6.yOW10.QOS5MGORnoLXQEeK45/WyCXRTBeqvcu', NULL, 'andrianip0303@gmail.com', NULL, NULL, NULL, NULL, 1522743473, NULL, 1, 'Putri Andriani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(22, 1, 1),
(28, 10, 2),
(24, 13, 2),
(25, 14, 2),
(26, 15, 2),
(29, 16, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_type` varchar(255) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `activity_date` date NOT NULL,
  `month` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`log_id`, `user_id`, `activity_type`, `activity_name`, `activity_date`, `month`) VALUES
(1, 1, 'Create_Account', 'laeleenur', '2018-04-02', 4),
(2, 1, 'Create_Account', 'ajerielaf', '2018-04-02', 4),
(3, 1, 'Create_Account', 'ajerielaf', '2018-04-02', 4),
(4, 1, 'Create_Account', 'AjHadii', '2018-04-03', 4),
(5, 1, 'Create_Account', 'AjHadii', '2018-04-03', 4),
(6, 1, 'Create_Account', 'AjHadii', '2018-04-03', 4),
(7, 10, 'Create_Account', 'AjHadii', '2018-04-03', 4),
(8, 12, 'Create_Account', 'iqbalathorid28', '2018-04-03', 4),
(9, 13, 'Create_Account', 'laeleenur', '2018-04-03', 4),
(10, 10, 'Create_Account', 'iqbalathorid28', '2018-04-03', 4),
(11, 10, 'Create_Account', 'mustozal', '2018-04-03', 4),
(12, 13, 'Create_Account', 'dwitam4p', '2018-04-03', 4);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `twitter_tweet`
--
ALTER TABLE `twitter_tweet`
  ADD CONSTRAINT `twitter_tweet_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `twitter_account` (`account_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
