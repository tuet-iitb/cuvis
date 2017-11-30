-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Apr 10, 2017 at 05:35 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `iknowitjuly2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

CREATE TABLE `chatters` (
  `name` varchar(30) NOT NULL,
  `seen` varchar(20) DEFAULT NULL,
  `group_id` varchar(4) DEFAULT NULL,
  `pswd` varchar(32) DEFAULT NULL,
  `rollnumber` varchar(20) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `conexpgroup` varchar(2) DEFAULT NULL,
  `isOnline` int(1) DEFAULT '0',
  `lastPageID` int(11) NOT NULL,
  `reflection1` text NOT NULL,
  `reflection2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`name`, `seen`, `group_id`, `pswd`, `rollnumber`, `fullname`, `conexpgroup`, `isOnline`, `lastPageID`, `reflection1`, `reflection2`) VALUES
('vins.shah1997@gmail.com', NULL, NULL, 'vinsshah', '5324', 'vins shah', NULL, 1, 0, '', ''),
('jhanvishah26@gmail.com', NULL, NULL, '26051997', '44', 'Jhanvi Shah', NULL, 0, 0, '', ''),
('nityamodha97@gmail.com', NULL, NULL, '70011015103', '70011015103', 'NITYA KAMLESH MODHA', NULL, 0, 0, '', ''),
('shitanshu', NULL, 'E10', '12345', '124380001', 'Shitanshu Mishra', NULL, 1, 0, 'yes*yes*5*5*5*sdasas*on*on*asDAsd', 'yes*yes*5*5*5*5*5*4*5*5*5*sdfsdf*5*5*5*5*asdfsd'),
('dakshparekh@rediffmail.com', NULL, NULL, '15101997', '36', 'Daksh Parekh', NULL, 0, 0, '', ''),
('backashhardik@gmail.com', NULL, NULL, 'hardik123', '38', 'Hardik Patel', NULL, 0, 0, '', ''),
('rusuumesh@gmail.com', NULL, 'E3', 'swaminarayan', '70011015145', 'Rushabh Patel', NULL, 0, 0, '', ''),
('harishchetty1997@gmail.com', NULL, NULL, 'roronoa123', '70011015095', 'Harish Chetty', NULL, 0, 0, '', ''),
('tanwardevwrat24@gmail.com', NULL, NULL, 'devwrat24', '70011015082', 'Devwrat Tanwar', NULL, 0, 0, '', ''),
('sharma.anuj7996@gmail.com', NULL, NULL, 'qwertyyy123', 'A061', 'Anuj Sharma', NULL, 0, 0, '', ''),
('svashi1997@gmail.com', NULL, NULL, '70011015089', '70011015089', 'Shivangi Vashi', NULL, 0, 0, '', ''),
('aksharshah13@gmail.com', NULL, NULL, 'aksharshah62', '70011015062', 'Akshar shah', NULL, 0, 0, '', ''),
('monit24218@gmail.com', NULL, 'E3', 'monitshah', 'A048', 'Monit Jayesh Shah', NULL, 1, 0, '', ''),
('jyotsna1330.jr@gmail.com', NULL, 'R1', 'j123', 'A041', 'Jyotsnamayee Ram', NULL, 0, 0, '', ''),
('shikhadshah112@gmail.com', NULL, NULL, 'dharmesh', 'A045', 'Shikha Shah', NULL, 1, 0, '', ''),
('aaronpaul76@gmail.com', NULL, 'E5', 'aaronpaul40', 'A040', 'Aaron Paul', NULL, 1, 0, '', ''),
('krwadia97@gmail.com', NULL, 'E5', 'Khushnum', 'A059', 'Khushnum Rohinton Wadia', NULL, 1, 0, '', ''),
('gyanu', NULL, 'E10', '12345', '12345', 'Vatsa', NULL, 1, 0, '', ''),
('parthkothare@gmail.com', NULL, NULL, 'parth28101997', '70011015099', 'Parth Kothare', NULL, 1, 0, '', ''),
('meetmandavia9@gmail.com', NULL, NULL, 'meet123', 'A025', 'Meet Ajay Mandavia', NULL, 1, 0, '', ''),
('testuser2', NULL, 'E5', '12345', '12345678', 'Mr. Test User', NULL, 0, 0, '', ''),
('testuser1', NULL, 'E5', '12345', '12345678', 'Mr. Test User1', NULL, 1, 0, '', ''),
('dolui.rahul@gmail.com', NULL, NULL, '12345', 'R12345', 'Rahul Dolui', NULL, 0, 0, '', ''),
('bari.r.kash@gmail.com', NULL, 'E2', 'mistake#1996', 'A065', 'kashyap bari', NULL, 0, 0, '', ''),
('anuragdeep4949@gmail.com', NULL, 'E2', 'anuragdeep4949', '144380002', 'Anurag Deep', NULL, 1, 0, '', ''),
('kkapilkk@gmail.com', NULL, 'E7', 'kkapilkk', '02', 'Kapil', NULL, 0, 0, '', ''),
('mdparekh97@gmail.com', NULL, 'E8', 'iitworkmilo', 'A035', 'Miloni Parekh', NULL, 1, 0, '', ''),
('kanishkjinnoni26@gmail.com', NULL, 'E4', 'mynameiskanishk11', 'A013', 'kanishk jinnoni', NULL, 1, 0, '', ''),
('damini.palrecha1421@gmail.com', NULL, 'E8', 'damini', '70011015134', 'Damini Palrecha', NULL, 1, 0, '', ''),
('ajit@gmail.com', NULL, NULL, '12345', 'shitanshu', 'Ajit Mahtre', NULL, 0, 0, '', ''),
('yash2998@gmail.com', NULL, NULL, 'Baba08yash', 'ABCD', 'YASH NIRANJAN SHIMPI', NULL, 1, 0, '', ''),
('angadgosain@gmail.com', NULL, NULL, 'omganesh25', 'abcd', 'Angad Gosain', NULL, 1, 0, '', ''),
('chintanc58@gmail.com', NULL, NULL, 'KJTC2262', '13101661', 'CHINTAN CHHEDA', NULL, 1, 0, '', ''),
('li@a.com', NULL, 'LI', '12345', '1234', 'Rohan', NULL, 0, 0, '', ''),
('tr@a.com', NULL, 'TR', '12345', '1234', 'Rahul', NULL, 0, 0, '', ''),
('cdarshil68@gmail.com', NULL, NULL, 'cdarshil68', '13101662', 'Darshil Dhiraj Chheda', NULL, 1, 0, '', ''),
('galarujul40@gmail.com', NULL, NULL, 'Rujul123.', '13101700', 'RUJUL JAYANTI GALA', NULL, 1, 0, '', ''),
('shahyashyash987@gmail.com', NULL, NULL, 'Shah28010860', '13101912', 'Shah Yash Mukesh', NULL, 1, 0, '', ''),
('riyajakhariya4@gmail.com', NULL, NULL, '12345', '13101741', 'Riya jayesh jakhariya', NULL, 0, 0, '', ''),
('sm@a.b', NULL, NULL, '12345', 'shitanshu', 'Gunjan', NULL, 0, 0, 'yes*yes*5*5*5*Test*on*on*on*Test2', 'yes*yes*5*4*5*5*5*5*5*4*5*Test Test*5*4*5*5*Testttttttt'),
('test1@iitb.in', NULL, NULL, '12345', 'rootKuchh bhi', 'test main', NULL, 1, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatters`
--
ALTER TABLE `chatters`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);
