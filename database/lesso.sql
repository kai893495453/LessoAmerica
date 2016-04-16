-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-04-16 07:05:45
-- 服务器版本： 5.5.49
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lesso`
--

-- --------------------------------------------------------

--
-- 表的结构 `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `n_id` int(11) NOT NULL,
  `imgSrc` varchar(30) NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `banner`
--

INSERT INTO `banner` (`id`, `n_id`, `imgSrc`, `info`) VALUES
(1, 1, 'images/banner.png', '这里是banner1'),
(2, 1, 'images/banner.png', '这里是banner2'),
(3, 1, 'images/banner.png', '这里是banner3'),
(4, 2, 'images/banner-small.png', '这里是子'),
(5, 3, 'images/banner-small.png', '这里是子'),
(6, 4, 'images/banner-small.png', '这里是子'),
(7, 5, 'images/banner-small.png', '这里是子');

-- --------------------------------------------------------

--
-- 表的结构 `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `times` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `career`
--

INSERT INTO `career` (`id`, `title`, `content`, `times`) VALUES
(1, '1Manufacturer’s Rep', '1Position：Manufacture Rep Number ：5 About the job： LESSO America, one of the leading plastic pipe fitting manufacturer’s in the world, has immediate opportunities for representation. LESSO America is marketing PVC-DWV，PVC Sch40 and PVC-ABS plastic fittings, here in the US. We are currently interviewing manufacturer’s reps to fill open territories across the United States. Please contact victorlin@lessoamerica.com for further information. LESSO AMERICA, INC. Based in Corona, CA, LESSO AMERICA, INC. is a wholly owned subsidiary of China LESSO Group Holdings Limited. LESSO America absorbed decades of field experience in the plumbing and irrigation field from its listed parent, a leading player in the field. To sustain its flawless plastic injection-molded product line and sales network, LESSO Ameirca manufactures and delivers high-quality plastic fittings with the latest injection mold tools and technology through distribution centers from coast to coast. With 100% dedication and commitment, LESSO America is leveraging the inherited success of its mother company`s model to provide an outstanding customer experience for our clients.', 0),
(2, '2Manufacturer’s Rep', '2Position：Manufacture Rep Number ：5 About the job： LESSO America, one of the leading plastic pipe fitting manufacturer’s in the world, has immediate opportunities for representation. LESSO America is marketing PVC-DWV，PVC Sch40 and PVC-ABS plastic fittings, here in the US. We are currently interviewing manufacturer’s reps to fill open territories across the United States. Please contact victorlin@lessoamerica.com for further information. LESSO AMERICA, INC. Based in Corona, CA, LESSO AMERICA, INC. is a wholly owned subsidiary of China LESSO Group Holdings Limited. LESSO America absorbed decades of field experience in the plumbing and irrigation field from its listed parent, a leading player in the field. To sustain its flawless plastic injection-molded product line and sales network, LESSO Ameirca manufactures and delivers high-quality plastic fittings with the latest injection mold tools and technology through distribution centers from coast to coast. With 100% dedication and commitment, LESSO America is leveraging the inherited success of its mother company`s model to provide an outstanding customer experience for our clients.', 0),
(3, '3Manufacturer’s Rep', '3Position：Manufacture Rep Number ：5 About the job： LESSO America, one of the leading plastic pipe fitting manufacturer’s in the world, has immediate opportunities for representation. LESSO America is marketing PVC-DWV，PVC Sch40 and PVC-ABS plastic fittings, here in the US. We are currently interviewing manufacturer’s reps to fill open territories across the United States. Please contact victorlin@lessoamerica.com for further information. LESSO AMERICA, INC. Based in Corona, CA, LESSO AMERICA, INC. is a wholly owned subsidiary of China LESSO Group Holdings Limited. LESSO America absorbed decades of field experience in the plumbing and irrigation field from its listed parent, a leading player in the field. To sustain its flawless plastic injection-molded product line and sales network, LESSO Ameirca manufactures and delivers high-quality plastic fittings with the latest injection mold tools and technology through distribution centers from coast to coast. With 100% dedication and commitment, LESSO America is leveraging the inherited success of its mother company`s model to provide an outstanding customer experience for our clients.', 0);

-- --------------------------------------------------------

--
-- 表的结构 `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `thumb_img` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `company`
--

INSERT INTO `company` (`id`, `area`, `content`, `thumb_img`) VALUES
(1, 'America', 'LESSO AMERICA, INC.\r\nBased in Corona, CA, LESSO AMERICA, INC. is a wholly owned subsidiary of China LESSO Group Holdings Limited. LESSO America absorbed decades of field experience in the plumbing and irrigation field from its listed parent, a leading player in the field.To sustain its flawless plastic injection-molded product line and sales network, LESSO America manufactures and delivers high-quality plastic fittings with the latest injection mold tools and technology through distribution centers from coast to coast. With 100% dedication and commitment, LESSO America is leveraging the inherited success of its mother company’s model to provide an outstanding customer experience for our clients.\r\nQUALITY\r\nLESSO America ’s plastic fittings line is renowned worldwide for its superior quality, which complies with cNSFus and cUPC certifications, and exceeds the requirements of ASTM standards.\r\nREFERENTIAL STANDARDS(PVC DWV AND ABS DWV)\r\nASTM D 2466 Standard Specification for Poly(Vinyl Chloride) (PVC) Plastic Pipe Fittings, Schedule 40 ASTM D 2665 Standard Specification for Poly(Vinyl Chloride)(PVC) Plastic Drain, Waste, and Vent Pipe and Fittings ASTM D 2661 Standard Specification for Acrylonitrile-Butadiene-Styrene(ABS) Plastic Drain,Waste and Vent Pipe and Fittings', 'images/company/company2.png'),
(2, 'China', 'CHINA LESSO GROUP HOLDINGS LIMITED\r\nAs China’s largest plastic pipes and fittings manufacturer, China LESSO Group Holdings Limited (Hong Kong Stock Code: 2128) has built its long-lasting manufacturing reputation on a foundation of innovation, production advantages and exacting business ethics. China LESSO’s vast production experience and large in-house tooling capability enable us to provide high-quality products with competitive pricing. \r\nRanking among the top 3 of our kind in the world, we delivered more than 2 billion pounds of plastic pipes and fittings, and generated US$2 billion in revenue in 2013 alone. We are compliant with the same stringent inspection standards as US-made projects, and have demonstrated our commitment to the global service market through our network of 30 subsidiaries, including 25 manufacturing facilities in China, the USA and Canada. Above all, customer service excellence is the most integral part of China LESSO''s DNA. We understand the importance of logistics in serving our customers quickly and efficiently. For the last two decades, satisfying the ever-changing needs of our customers has been our steadfast formula for success.', 'images/company/company2.png');

-- --------------------------------------------------------

--
-- 表的结构 `contact_department`
--

CREATE TABLE IF NOT EXISTS `contact_department` (
  `id` int(11) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contact_department`
--

INSERT INTO `contact_department` (`id`, `department`) VALUES
(1, 'MANAGEMENT'),
(2, 'SALES');

-- --------------------------------------------------------

--
-- 表的结构 `contact_position`
--

CREATE TABLE IF NOT EXISTS `contact_position` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `info` varchar(255) NOT NULL,
  `cd_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contact_position`
--

INSERT INTO `contact_position` (`id`, `position`, `info`, `cd_id`) VALUES
(1, 'West and North East', '1Tom Carroll Regional Sales Mgr Email:stevewolfson@lessoamerica.com Direct Line:(951) 547-6810 Cell Phone:(949) 413-3064', 1),
(2, 'West and North East', '2Tom Carroll Regional Sales Mgr Email:stevewolfson@lessoamerica.com Direct Line:(951) 547-6810 Cell Phone:(949) 413-3064', 2),
(3, 'South East', '3Tom Carroll Regional Sales Mgr Email:stevewolfson@lessoamerica.com Direct Line:(951) 547-6810 Cell Phone:(949) 413-3064', 1),
(4, 'South East', '4Tom Carroll Regional Sales Mgr Email:stevewolfson@lessoamerica.com Direct Line:(951) 547-6810 Cell Phone:(949) 413-3064', 2),
(5, 'Pacific North West', '5Tom Carroll Regional Sales Mgr Email:stevewolfson@lessoamerica.com Direct Line:(951) 547-6810 Cell Phone:(949) 413-3064', 1),
(6, 'Pacific North West', '6Tom Carroll Regional Sales Mgr Email:stevewolfson@lessoamerica.com Direct Line:(951) 547-6810 Cell Phone:(949) 413-3064', 2);

-- --------------------------------------------------------

--
-- 表的结构 `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `href` varchar(50) NOT NULL,
  `imgSrc` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `download`
--

INSERT INTO `download` (`id`, `title`, `href`, `imgSrc`) VALUES
(1, 'Company Brochure', '#', 'images/button/download00.png'),
(2, 'Product Picture Album', '#', 'images/button/download01.png'),
(3, 'Price List', '#', 'images/button/download02.png'),
(4, 'Technical Manual', '#', 'images/button/download03.png'),
(5, 'Certification information', '#', 'images/button/download04.png'),
(6, 'More', '#', 'images/button/download05.png');

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `CellPhone` varchar(11) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `href` varchar(30) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nav`
--

INSERT INTO `nav` (`id`, `title`, `href`, `fid`) VALUES
(1, 'HOME', 'index', 0),
(2, 'COMPANY PROFILE', 'LESSO_Americal', 0),
(3, 'OUR BUSINESS', 'business', 0),
(4, 'DOWNLOAD', 'download', 0),
(5, 'CONTACT', 'contact', 0),
(6, 'LESSO Americal', 'LESSO_Americal', 2),
(7, 'China LESSO', 'LESSO_China', 2),
(8, 'Global Network', 'global', 2),
(9, 'Download', 'download', 4),
(10, 'Contact Us', 'contact', 5),
(11, 'Carerr', 'carerr', 5),
(12, 'Guestbook', 'guestbook', 5),
(13, 'SCH 40', 'productList', 3),
(14, 'PVC DWV', 'productList', 3),
(15, 'ABS DWV', 'productList', 3);

-- --------------------------------------------------------

--
-- 表的结构 `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `id` int(11) NOT NULL,
  `imgSrc` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `specifications` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `n_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_department`
--
ALTER TABLE `contact_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_position`
--
ALTER TABLE `contact_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_department`
--
ALTER TABLE `contact_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_position`
--
ALTER TABLE `contact_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
