-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 04:14 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypunter`
--
CREATE DATABASE IF NOT EXISTS `mypunter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mypunter`;

-- --------------------------------------------------------

--
-- Table structure for table `edit_home`
--

DROP TABLE IF EXISTS `edit_home`;
CREATE TABLE `edit_home` (
  `id` int(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `background_img` varchar(100) NOT NULL,
  `main_img` varchar(100) NOT NULL,
  `advert0` varchar(100) NOT NULL,
  `advert1` varchar(100) NOT NULL,
  `advert2` varchar(100) NOT NULL,
  `advert3` varchar(100) NOT NULL,
  `advert4` varchar(100) NOT NULL,
  `advert5` varchar(100) NOT NULL,
  `advert6` varchar(100) NOT NULL,
  `advert7` varchar(100) NOT NULL,
  `advert8` varchar(100) NOT NULL,
  `advert9` varchar(100) NOT NULL,
  `advert10` varchar(100) NOT NULL,
  `advert11` varchar(100) NOT NULL,
  `advert12` varchar(100) NOT NULL,
  `advert13` varchar(100) NOT NULL,
  `advert14` varchar(100) NOT NULL,
  `advert15` varchar(100) NOT NULL,
  `advert16` varchar(100) NOT NULL,
  `advert17` varchar(100) NOT NULL,
  `advert18` varchar(100) NOT NULL,
  `advert19` varchar(100) NOT NULL,
  `advert20` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edit_home`
--

INSERT INTO `edit_home` (`id`, `logo`, `background_img`, `main_img`, `advert0`, `advert1`, `advert2`, `advert3`, `advert4`, `advert5`, `advert6`, `advert7`, `advert8`, `advert9`, `advert10`, `advert11`, `advert12`, `advert13`, `advert14`, `advert15`, `advert16`, `advert17`, `advert18`, `advert19`, `advert20`) VALUES
(1, 'post_logo0_1562270812.png', 'tiger.png', 'post_home21_1562270929.png', 'post_home0_1562270929.jpg', 'post_home1_1562272549.png', 'post_home2_1562272549.png', 'post_home3_1562272549.jpg', 'post_home4_1562272549.png', 'post_home5_1562272549.gif', 'post_home6_1562272549.gif', 'post_home7_1562272549.jpg', 'post_home8_1562272549.jpg', 'post_home9_1562270929.gif', 'post_home10_1562270929.gif', 'post_home11_1562270929.png', 'post_home12_1562272549.jpg', 'post_home13_1562272549.jpg', 'post_home14_1562272549.jpg', 'post_home15_1562272549.gif', 'post_home16_1562270859.gif', 'post_home17_1562272549.png', 'post_home18_1562272549.gif', 'post_home19_1562272549.png', 'post_home20_1562272549.gif');

-- --------------------------------------------------------

--
-- Table structure for table `edit_membership_levels`
--

DROP TABLE IF EXISTS `edit_membership_levels`;
CREATE TABLE `edit_membership_levels` (
  `id` int(11) NOT NULL,
  `main_img` varchar(100) NOT NULL,
  `advert1` varchar(100) NOT NULL,
  `advert2` varchar(100) NOT NULL,
  `advert3` varchar(100) NOT NULL,
  `advert4` varchar(100) NOT NULL,
  `advert5` varchar(100) NOT NULL,
  `advert6` varchar(100) NOT NULL,
  `advert7` varchar(100) NOT NULL,
  `advert8` varchar(100) NOT NULL,
  `advert9` varchar(100) NOT NULL,
  `advert10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edit_membership_levels`
--

INSERT INTO `edit_membership_levels` (`id`, `main_img`, `advert1`, `advert2`, `advert3`, `advert4`, `advert5`, `advert6`, `advert7`, `advert8`, `advert9`, `advert10`) VALUES
(1, 'post_membershipLevels0_1562272725.jpg', 'post_membershipLevels1_1562272843.png', 'post_membershipLevels2_1562272843.png', 'post_membershipLevels3_1562272843.jpg', 'post_membershipLevels4_1562272843.png', 'post_membershipLevels5_1562272843.png', 'post_membershipLevels6_1562272843.gif', 'post_membershipLevels7_1562272843.jpg', 'post_membershipLevels8_1562272843.gif', 'post_membershipLevels9_1562272843.jpg', 'post_membershipLevels10_1562272843.gif');

-- --------------------------------------------------------

--
-- Table structure for table `edit_results`
--

DROP TABLE IF EXISTS `edit_results`;
CREATE TABLE `edit_results` (
  `id` int(100) NOT NULL,
  `advert1` varchar(100) NOT NULL,
  `advert2` varchar(100) NOT NULL,
  `advert3` varchar(100) NOT NULL,
  `advert4` varchar(100) NOT NULL,
  `advert5` varchar(100) NOT NULL,
  `advert6` varchar(100) NOT NULL,
  `advert7` varchar(100) NOT NULL,
  `advert8` varchar(100) NOT NULL,
  `advert9` varchar(100) NOT NULL,
  `advert10` varchar(100) NOT NULL,
  `advert11` varchar(100) NOT NULL,
  `advert12` varchar(100) NOT NULL,
  `advert13` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edit_results`
--

INSERT INTO `edit_results` (`id`, `advert1`, `advert2`, `advert3`, `advert4`, `advert5`, `advert6`, `advert7`, `advert8`, `advert9`, `advert10`, `advert11`, `advert12`, `advert13`) VALUES
(1, 'post_result1_1562270095.gif', 'post_result2_1562270759.png', 'post_result3_1562270759.jpg', 'post_result4_1562270759.gif', 'post_result5_1562270759.jpg', 'post_result6_1562270759.png', 'post_result7_1562270759.gif', 'post_result8_1562270759.png', 'post_result9_1562270759.jpg', 'post_result10_1562270759.png', 'post_result11_1562270759.png', 'post_result12_1562270759.gif', 'post_result13_1562270759.gif');

-- --------------------------------------------------------

--
-- Table structure for table `edit_sponsors`
--

DROP TABLE IF EXISTS `edit_sponsors`;
CREATE TABLE `edit_sponsors` (
  `id` int(50) NOT NULL,
  `advert1` varchar(100) NOT NULL,
  `advert2` varchar(100) NOT NULL,
  `advert3` varchar(100) NOT NULL,
  `advert4` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edit_sponsors`
--

INSERT INTO `edit_sponsors` (`id`, `advert1`, `advert2`, `advert3`, `advert4`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'post_tipster4_1562273141.png', 'post_tipster5_1562273141.gif', 'post_tipster6_1562273141.png', 'post_tipster7_1562273141.gif', 'post_tipster0_1562273141.jpg', 'post_tipster1_1562273141.jpg', 'post_tipster2_1562273141.jpg', 'post_tipster3_1562273141.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `edit_tipsters`
--

DROP TABLE IF EXISTS `edit_tipsters`;
CREATE TABLE `edit_tipsters` (
  `id` int(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `image5` varchar(50) NOT NULL,
  `image6` varchar(50) NOT NULL,
  `image7` varchar(50) NOT NULL,
  `image8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edit_tipsters`
--

INSERT INTO `edit_tipsters` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`) VALUES
(1, 'post_tipster0_1562273383.png', 'post_tipster1_1562273383.png', 'post_tipster2_1562273383.png', 'post_tipster3_1562273383.png', 'post_tipster4_1562273383.png', 'post_tipster5_1562273383.png', 'post_tipster6_1562273383.png', 'post_tipster7_1562273383.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `post_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `publicly` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) CHARACTER SET latin1 NOT NULL,
  `biographical` text COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `expires` tinyint(1) NOT NULL,
  `history` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bookmakers` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sms` tinyint(1) NOT NULL,
  `introduce` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `posts` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `password`, `username`, `post_image`, `email`, `firstname`, `lastname`, `nickname`, `publicly`, `website`, `biographical`, `level`, `expires`, `history`, `address`, `suburb`, `state`, `postcode`, `birth`, `mobile`, `bookmakers`, `sms`, `introduce`, `country`, `role`, `posts`) VALUES
(86, 'admin', 'braveprincess', 'post_1562291035.png', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', 1, '', 'Bolivia', 'Author', 0),
(87, 'admin', 'admin', 'post_1562289948.png', 'eugene19950901@outlook.com', 'wang', 'harry', '', '', '', '', 'Welcome Punter Membership', 0, '', '', '', '', '', '0000-00-00', '', '', 1, '', 'Afghanistan', 'Administrator', 0),
(88, 'admin', 'snowman', 'post_1562291064.png', '', '', '', '', '', '', '', 'Club Platinum Membership', 0, '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 'Subscriber', 0),
(89, 'admin', 'genie18', 'post_1562291082.png', '', '', '', '', '', '', '', 'Welcome Punter Membership', 0, '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 'Subscriber', 0),
(91, 'admin', 'ariel80', 'post_1562291124.jpg', 'ariel@mypunter.io', 'Fish', 'Ariela', '', '', '', '', 'Welcome Punter Membership', 0, '', '', '', '', '', '0000-00-00', '', '', 1, '', 'France', 'Contributor', 0),
(92, '123', '123', 'post_1567065103.', 'dealer1@test.com', '', '', '', '', '', '', 'Club Platinum Membership', 0, '', '', '', '', '', '0000-00-00', '', '', 0, '', '', 'Subscriber', 0),
(93, 'sadas', 'sdd', 'post_1567269575.', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '0000-00-00', '', '', 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `content`) VALUES
(1, '[{\"text\":\"Home\",\"href\":\"index.php\",\"icon\":\"empty\",\"target\":\"_top\",\"title\":\"My Home\"},{\"text\":\"Become a Member\",\"href\":\"\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"Join Us\",\"href\":\"membership.levels.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Membership & Benefits\",\"href\":\"membership.levels.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Log In\",\"href\":\"login.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Merchandise\",\"href\":\"https://www.mypunter.mobi/about.html\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"My Account\",\"href\":\"membership.levels.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]},{\"text\":\"Tips & Selections\",\"href\":\"tips.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Results\",\"href\":\"results.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Syndications\",\"href\":\"\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"Dynamic\",\"href\":\"https://bit.ly/mypunter\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Roll the Dice\",\"href\":\"https://rollthedice.com.au\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]},{\"text\":\"About\",\"href\":\"\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\",\"children\":[{\"text\":\"Our tipsters\",\"href\":\"tipsters.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Sponsors and Advertisers\",\"href\":\"sponsors.php\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]}]');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(150) CHARACTER SET latin1 NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_date`, `post_image`) VALUES
(83, 'Nortom and Rubic', '2018-08-10', 'race-190807202407.jpg'),
(84, 'Nortom and Rubic', '2018-08-10', 'race-190807205756.jpg'),
(85, 'Nortom and Rubic', '2018-08-10', 'race-190808184827.jpg'),
(86, 'Nortom and Rubic', '2018-08-10', 'race-190808184906.jpg'),
(87, 'Nortom and Rubic', '2018-08-10', 'race-190808185011.jpg'),
(88, 'Nortom and Rubic', '2018-08-10', 'race-190808185113.jpg'),
(89, 'Nortom and Rubic', '2018-08-10', 'race-190808185221.jpg'),
(90, 'Test', '2019-08-21', 'race-190808204331.jpg'),
(91, 'Alchimist', '2019-08-13', 'race-190812041011.jpg'),
(92, 'Testere', '2019-08-29', 'race-190812041240.jpg'),
(93, 'TSUKAR', '2019-08-14', 'race-190812042708.jpg'),
(94, 'Tokyoites', '2019-08-12', 'race-190812050057.jpg'),
(95, 'Wang punter', '2019-08-15', 'race-190812050844.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes` (
  `quote_id` int(11) NOT NULL,
  `quote_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote_id`, `quote_title`) VALUES
(1, 'A friend of the punter, a foe of the bookie. The owner of MyPunter.com, Paul, has been a professional punter for over 30 years now, he specialises in Sydney, Melbourne and Perth races. '),
(2, 'Paul created a platform that has enabled people to get involved in racing, in an unprecedented way. \r\n'),
(3, ' Implementing a self-written program predictor that rates horses, along with a betting calculator application to use in conjunction with his program. '),
(4, 'The ultimate punter’s pal, he’s created the best membership in racing, at an affordable price.'),
(5, 'Specialising in Melbourne and South Australian races, Trackside Trav has been associated with MyPunter.com since it was established.'),
(6, 'After 25 years as a punter, Travis has become a refined form analyst with a broad knowledge of Australian horse racing. '),
(7, 'Allana was introduced to the world of horse racing almost 10 years ago and was instantly hooked.'),
(8, 'Describing doing the form as a bit like piecing together a jigsaw, Allana uses a combination of factors to choose her selections, often with solid results. '),
(9, 'Tim is a horse racing enthusiast who is apart of the racing media, sports media and the comity of Mornington Race Club. '),
(10, 'He has also written for numerous popular racing sources and has a great insight of the Victorian racing landscape. '),
(11, 'Tim joined the MyPunter team 3 years ago and specialises in both Melbourne and Sydney race meetings, with a tremendous strike rate.'),
(12, 'A punter taught by punters. Mark specialises in Victorian, Queensland and Western Australia races. ');

-- --------------------------------------------------------

--
-- Table structure for table `tickers`
--

DROP TABLE IF EXISTS `tickers`;
CREATE TABLE `tickers` (
  `id` int(50) NOT NULL,
  `header` text NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickers`
--

INSERT INTO `tickers` (`id`, `header`, `footer`) VALUES
(1, 'Horse Racing Results: 1/7 Tatura Race 5 – Fairy song $4.20 (special); Race 6 – FF $999.70 | 30/6 Ballarat Race 1 – Inner demons $1.60 (Special); Race 5 – Fat fever $2.40 (best bet); Race 7 – Sweetgeorgia brown $3.80; Race 9 – Life of waldo $41.00 (best roughie) | Grafton Race 1 – Moonhawk $3.50; Race 4 – Charmed princess $3.80; Race 6 – Chazelles $5.00; Race 8 – Malea magic $4.20; Race 9 – Happy go plucky $3.80 | 29/6 Caulfield Race 2 – Pria eclipse $3.00 (place); Race 7 – Masculino $3.50; Race 9 – Elite drake $3.60 | Rosehill Race 6 – River bird $3.00; Race 7 – Gaulois $9.00 | Morphettville Race 4 – Super swoop $2.50; Race 8 – King kabuto $4.50 (best bet) | 28/6 Geelong Race 3 – Howyalikemenow $4.20; Race 5 – Cryptic jewel $2.50; Race 7 – San remo $2.60 (place) | Ipswich Race 2 – Savsgold $3.00; Race 7 – The administrator $2.50 | 26/6 Randwick Race 3 – Stella sea sun $2.40 (best bet); Race 5 – Unguarded $3.50; Race 7 – Andaz $2.70 (place) | Eagle farm Race 3 – Withering $4.00 (best bet) | 24/6 Wangaratta Race 2 – Stratisfree $6.00; Race 5 – She’s a diplomat $3.50; Race 8 – Mankell $5.50 (best each way); Race 9 – Georgia’s host $3.10 (place); Race 10 – Kapover $3.50 (place) | 23/6 Bendigo Race 3 – Jungle Jane $2.45; Race 4 – Yulong stride $3.30 | 22/6 Flemington Race 1 – Rubisaki $4.80; Race 3 – Milwaukee $5.00; Race 4 – Chouxting the mob $2.20; Race 8 – Sure knee $2.50 | Randwick Race 1 – Funstar $2.15; Race 4 – Sesar $4.20; Race 8 – Southern lad $4.80; Race 9 – Spiritual pursuit $2.50 | Eagle farm Race 2 – Kordia $3.20; Race 3 – Marksfield $4.40 (place); Race 4 – Vega one $1.85; Race 6 – Vow and declare $3.10; Race 7 – Duca valentinios $7.00 (best each way); Race 9 – Brave song $3.50 (special) | Morphettville Race 2 – Double bluff $3.50 | 21/6 Pakenham Race 5 – Pressure $2.80; Race 7 – Biancconi magic $5.50 | Rockhampton Race 1 – Bold eos $1.55; Race 2 – Paper trade $1.35; Race 3 – Diamond account $1.95 | 11/6 Pakenham Race 1 #10 – Asateer $2.70; Race 4 #8 – Written on rock $9.00 (best each way) | 10/6 Mornington Race 1 – Sizzlefly $1.85; Race 3 – Fight $2.60; Race 5 – Tata da goose $1.85 | Randwick Race 7 – Terminology $3.00', 'Sports Results: 2nd July  2019 | WCC Top 4  – Aus,Nz,India,Eng   | RAPTORS NBA CHAMPIONS Play off’s: Raptor’s 4-2 GSW – Game today @ Oakland Calfornia | World Cup Cricket: Qualifying rounds: Australia defeat Pakistan | WCC England V Nz Draw – Due to Rain | AFL Round 13 Saints, Bombers, Freo, Bulldog’s, Adelaide, Giants All winners | Cricket AUSTRALIA beats | Pakistan – Finch 153 runs Not out | beats India T20 Series in India | BBL: Renegades defeat Stars and win Final | NBL: Grand Final March PERTH v Melbourne Season MVP Andrew Bogut | NBA: Live Multi Charlotte, Portland, Det/Bos total points over 208.5 $6.48 | NBA Results Pistons 133 beat 76er’s 132, Pelican 116 beat Clippers 109, Nuggets 126 beat Kings 112 | EPL Football Spurs 1 v Hammers 0, Chelsea 2 v Man United 2, Man City 5 v Burnley 0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edit_home`
--
ALTER TABLE `edit_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_membership_levels`
--
ALTER TABLE `edit_membership_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_results`
--
ALTER TABLE `edit_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_sponsors`
--
ALTER TABLE `edit_sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_tipsters`
--
ALTER TABLE `edit_tipsters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `tickers`
--
ALTER TABLE `tickers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edit_home`
--
ALTER TABLE `edit_home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_membership_levels`
--
ALTER TABLE `edit_membership_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_results`
--
ALTER TABLE `edit_results`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_sponsors`
--
ALTER TABLE `edit_sponsors`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edit_tipsters`
--
ALTER TABLE `edit_tipsters`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tickers`
--
ALTER TABLE `tickers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
