-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 10:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `state`) VALUES
(1, 'amr essa', 'ali@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 0),
(7, 'ali ahmed', 'secek@mailinator.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `commity` varchar(255) NOT NULL,
  `season` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `old_member` tinyint(4) NOT NULL,
  `facebook` varchar(255) NOT NULL DEFAULT '0',
  `linkedIn` varchar(255) NOT NULL DEFAULT '0',
  `about` varchar(2000) NOT NULL,
  `college_year` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`id`, `name`, `email`, `password`, `birthday`, `phone`, `position`, `commity`, `season`, `img`, `old_member`, `facebook`, `linkedIn`, `about`, `college_year`, `college_name`) VALUES
(18, 'Maisie Dudley', 'gotexulilu@mailinator.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-04-18', 1537757, 'Head', 'Logistics', '2019 / 2020', '0', 0, 'ConsequatVeniamc', 'Etenimutearumsed', '  Sunt id nemo volupt  ', 4, 'Damon Johnson'),
(19, 'Ivory Wells', 'feguvopaxi@mailinator.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1987-07-20', 1217798, 'Vice Head', 'Logistics', '2020 / 2021', '415902_Contact us-bro.png', 0, 'Eteavoluptatedolo', 'PariaturDuisaliqu', ' Odit sunt vel nisi  ', 3, 'Jesse Justice'),
(20, 'Rose Nicholson', 'javahihequ@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '1972-03-23', 1491814, 'Head', 'HR', '2014 / 2015', '0', 0, 'Omnisvelsuscipite', 'Animsolutaeaadipi', 'Consequuntur anim qu', 3, 'George Maldonado'),
(21, 'Piper Whitley', 'puqe@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '2002-02-23', 1497365, 'Vice Head', 'FR', '2014 / 2015', '356885_unauthorized-person.png', 0, 'Nemoadipisicinget', 'Nullasintduislab', 'Ad occaecat molestia', 3, 'Alana Stokes'),
(22, 'Olympia Bauer', 'zidifexeta@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '1982-05-25', 1334158, 'Head', 'FR', '2014 / 2015', '0', 0, 'Eumrerumdeserunte', 'Voluptatemquieiusm', 'Iste porro id vel ea', 3, 'Paki Hendricks'),
(23, 'Kim Sims', 'xisejoraj@mailinator.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1986-09-28', 1914125, 'Vice Head', 'HR', '2010 / 2011', '832379_support-team.png', 0, 'Elitvelitoccaeca', 'Sitminimnumquamer', '   Ratione molestiae in   ', 3, 'Sara Hanson'),
(24, 'Troy Levine', 'maci@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '1975-07-19', 1593992, 'Vice Head', 'PR', '2014 / 2015', '933036_Contact us-bro.png', 0, 'Deseruntdebitisdes', 'Adutdoloradipisci', 'Et esse sit natus ', 3, 'Rhona Thomas'),
(25, 'waled', 'hejikewik@mailinator.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2002-01-16', 0, 'Head', 'Media', '2020 / 2021', '844291_WhatsApp Image 2021-07-13 at 11.55.12 PM.jpeg', 0, 'Excepturiofficiade', 'Oditloremenimiste', 'Error quia sed assum', 4, 'benha'),
(26, 'Sebastian Bright', 'hyqy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '1989-05-20', 1963452, 'Vice Head', 'Media', '2020 / 2021', '315841_WhatsApp Image 2021-07-13 at 11.55.12 PM.jpeg', 0, 'Existeenimexpedit', 'Deseruntconsectetur', 'Illo velit nulla do', 4, 'Thomas Banks'),
(27, 'Germaine Fry', 'nuty@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '2002-12-13', 1214794, 'Vice Head', 'scientific', '2020 / 2021', '484400_WhatsApp Image 2021-07-13 at 11.55.12 PM.jpeg', 0, 'Nonnonatquedelect', 'Voluptasquaeratsus', 'Voluptatem Reprehen', 4, 'Blossom Irwin'),
(28, 'Avye Wilkins', 'baqy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '2007-09-20', 1372578, 'Head', 'scientific', '2020 / 2021', '677968_WhatsApp Image 2021-07-13 at 11.55.12 PM.jpeg', 0, 'Evenietquiamolest', 'Sapientebeataesaep', 'Vero lorem et dolore', 4, 'Dahlia Meyers'),
(29, 'Neve Fisher', 'liduliku@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', '2014-10-10', 1889329, 'Head', 'PR', '2020 / 2021', '862592_WhatsApp Image 2021-07-13 at 11.55.12 PM.jpeg', 0, 'Quaeratfacilisaper', 'Quisfugitveladi', 'Repellendus Numquam', 4, 'Cassandra Dunn');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment-id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `msgfrom` varchar(255) NOT NULL,
  `msgto` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `msgfrom`, `msgto`, `name`, `msg`, `subject`, `time`) VALUES
(2, 'bupinig@mailinator.com', '', 'Kareem Hobbs', 'Quo Nam consequatur ', 'In velit nulla fugi', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `season`, `year`, `img`, `description`, `link`) VALUES
(7, 'Embedded Infinity War  1    ', 'Winter', '2020 / 2021', '0', '                                        Place: Misr Public Library\r\nInstructors: Kareem Sharqawy & Mira Zikra                                                                                                                                                                ', 'There is none yet '),
(13, 'Farrah Barber', 'Winter', '2014 / 2015', '0', 'Corporis veritatis i', 'Velit labore officii'),
(14, 'Barbara Sykes', 'Winter', '2014 / 2015', '0', 'Ut delectus facilis', 'Eveniet proident e'),
(15, 'Hollee Milesasdasd', 'Winter', '2014 / 2015', '0', 'Sapiente non laudant', 'Qui consectetur dolo'),
(16, 'amr mohamed eissa  ', 'Summer', '2012 / 2013', '80277_account.png', '                                        Ut iusto perspiciati                                        ', 'Quisquam ad nobis ut'),
(18, 'Bruce Mosley', 'Winter', '2014 / 2015', '287093_Contact us-bro.png', 'Voluptas eiusmod iur', 'Accusantium minus et'),
(19, 'asdasdasd ', 'Summer', '2011 / 2012', '253169_pexels-roxanne-shewchuk-2184177.jpg', '                                        Ipsam dolorum offici                                        ', 'Ut itaque quo et asp');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `commity` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `college-name` varchar(255) NOT NULL,
  `college-year` int(11) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '0',
  `old-member` tinyint(1) NOT NULL,
  `facebook` varchar(255) NOT NULL DEFAULT '0',
  `linkedIn` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `birthday`, `phone`, `commity`, `season`, `college-name`, `college-year`, `about`, `img`, `old-member`, `facebook`, `linkedIn`) VALUES
(16, 'Maxwell Trevino', 'danyjalyf@mailinator.com', '1973-07-28', 1845359, 'HR', '2009 / 2010', 'Cassady Beasley', 1, '     Nihil voluptate veri     ', '264799_wallpaperflare.com_wallpaper (1).jpg', 0, 'Quiaquisitprovide', 'Autemquisobcaecati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment-id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
