-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 06:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iknowitjuly2016`
--
CREATE DATABASE IF NOT EXISTS `iknowitjuly2016` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `iknowitjuly2016`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_status`
--

CREATE TABLE IF NOT EXISTS `activity_status` (
  `group_strength` int(2) DEFAULT NULL,
  `completed_count` int(2) DEFAULT NULL,
  `group_id` varchar(4) NOT NULL,
  `phase_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_status`
--

INSERT INTO `activity_status` (`group_strength`, `completed_count`, `group_id`, `phase_id`) VALUES
(2, 1, 'A1', 'p0'),
(2, 1, 'A1', 'p0');

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

CREATE TABLE IF NOT EXISTS `chatters` (
  `name` varchar(30) NOT NULL,
  `seen` varchar(20) DEFAULT NULL,
  `group_id` varchar(4) DEFAULT NULL,
  `pswd` varchar(32) DEFAULT NULL,
  `rollnumber` varchar(20) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `conexpgroup` varchar(2) DEFAULT NULL,
  `isOnline` int(1) DEFAULT '0',
  PRIMARY KEY (`name`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`name`, `seen`, `group_id`, `pswd`, `rollnumber`, `fullname`, `conexpgroup`, `isOnline`) VALUES
('vins.shah1997@gmail.com', NULL, NULL, 'vinsshah', '5324', 'vins shah', NULL, 0),
('jhanvishah26@gmail.com', NULL, NULL, '26051997', '44', 'Jhanvi Shah', NULL, 0),
('nityamodha97@gmail.com', NULL, NULL, '70011015103', '70011015103', 'NITYA KAMLESH MODHA', NULL, 0),
('shitanshu', NULL, 'E10', '12345', '124380001', 'Shitanshu Mishra', NULL, 0),
('dakshparekh@rediffmail.com', NULL, NULL, '15101997', '36', 'Daksh Parekh', NULL, 0),
('backashhardik@gmail.com', NULL, NULL, 'hardik123', '38', 'Hardik Patel', NULL, 0),
('rusuumesh@gmail.com', NULL, 'E3', 'swaminarayan', '70011015145', 'Rushabh Patel', NULL, 0),
('harishchetty1997@gmail.com', NULL, NULL, 'roronoa123', '70011015095', 'Harish Chetty', NULL, 0),
('tanwardevwrat24@gmail.com', NULL, NULL, 'devwrat24', '70011015082', 'Devwrat Tanwar', NULL, 0),
('sharma.anuj7996@gmail.com', NULL, NULL, 'qwertyyy123', 'A061', 'Anuj Sharma', NULL, 0),
('svashi1997@gmail.com', NULL, NULL, '70011015089', '70011015089', 'Shivangi Vashi', NULL, 0),
('aksharshah13@gmail.com', NULL, NULL, 'aksharshah62', '70011015062', 'Akshar shah', NULL, 0),
('monit24218@gmail.com', NULL, 'E3', 'monitshah', 'A048', 'Monit Jayesh Shah', NULL, 1),
('jyotsna1330.jr@gmail.com', NULL, 'E4', 'j123', 'A041', 'Jyotsnamayee Ram', NULL, 0),
('shikhadshah112@gmail.com', NULL, NULL, 'dharmesh', 'A045', 'Shikha Shah', NULL, 1),
('aaronpaul76@gmail.com', NULL, 'E5', 'aaronpaul40', 'A040', 'Aaron Paul', NULL, 1),
('krwadia97@gmail.com', NULL, 'E5', 'Khushnum', 'A059', 'Khushnum Rohinton Wadia', NULL, 1),
('gyanu', NULL, 'E10', '12345', '12345', 'Vatsa', NULL, 1),
('parthkothare@gmail.com', NULL, NULL, 'parth28101997', '70011015099', 'Parth Kothare', NULL, 1),
('meetmandavia9@gmail.com', NULL, NULL, 'meet123', 'A025', 'Meet Ajay Mandavia', NULL, 1),
('testuser2', NULL, 'E5', '12345', '12345678', 'Mr. Test User', NULL, 0),
('testuser1', NULL, 'E5', '12345', '12345678', 'Mr. Test User1', NULL, 1),
('dolui.rahul@gmail.com', NULL, NULL, '12345', 'R12345', 'Rahul Dolui', NULL, 0),
('bari.r.kash@gmail.com', NULL, 'E2', 'mistake#1996', 'A065', 'kashyap bari', NULL, 0),
('anuragdeep4949@gmail.com', NULL, 'E2', 'anuragdeep4949', '144380002', 'Anurag Deep', NULL, 1),
('kkapilkk@gmail.com', NULL, 'E7', 'kkapilkk', '02', 'Kapil', NULL, 0),
('mdparekh97@gmail.com', NULL, 'E8', 'iitworkmilo', 'A035', 'Miloni Parekh', NULL, 1),
('kanishkjinnoni26@gmail.com', NULL, 'E4', 'mynameiskanishk11', 'A013', 'kanishk jinnoni', NULL, 1),
('damini.palrecha1421@gmail.com', NULL, 'E8', 'damini', '70011015134', 'Damini Palrecha', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `discstatus`
--

CREATE TABLE IF NOT EXISTS `discstatus` (
  `group_id` varchar(4) NOT NULL,
  `currentQID` int(11) NOT NULL,
  `currentQNumber` int(11) NOT NULL,
  `nextFlag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussionstatus`
--

CREATE TABLE IF NOT EXISTS `discussionstatus` (
  `groupID` varchar(4) NOT NULL,
  `nextFlag` int(3) NOT NULL DEFAULT '0',
  `currentQNum` int(3) NOT NULL DEFAULT '0',
  `currentQID` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussionstatus`
--

INSERT INTO `discussionstatus` (`groupID`, `nextFlag`, `currentQNum`, `currentQID`) VALUES
('E0', 0, 1, 0),
('E4', 0, 1, 605);

-- --------------------------------------------------------

--
-- Table structure for table `discussion_phase`
--

CREATE TABLE IF NOT EXISTS `discussion_phase` (
  `phase_id` varchar(2) NOT NULL DEFAULT '',
  `phase_des` tinytext,
  `control_des` tinytext,
  PRIMARY KEY (`phase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_phase`
--

INSERT INTO `discussion_phase` (`phase_id`, `phase_des`, `control_des`) VALUES
('p0', 'Watch the video carefully. For this you are getting time double to the length of the video.\r\n\r\nAny time within this period you can play-pause the video and use the notepad below anytime to make notes and jot down your points/queries/ questions.', 'Video (lesson 1) is enabled. Notepad box is enabled. Others are disabled'),
('p1', 'For next 20 minutes, use the handouts and take ideas about different exploratory questioning categories and generate your own exploratory questions.\r\n\r\nOnce you generate a question you can also tag the question with appropriate categories.\r\n\r\nOne question', 'Video (lesson 1) is enabled. question input box, question tagging area are enabled. Others are disabled'),
('p2', 'Select question(s) which you think your partner has tagged incorrectly. Press next once you think that you have tagged incorrectly. ', 'Checkboxes for Question list. Rest is disabled.'),
('p3', 'Both of you, discuss with your partner what according to you the correct tag(s) of the questions should be.\r\n\r\n', 'Enable chat.');

-- --------------------------------------------------------

--
-- Table structure for table `implphases`
--

CREATE TABLE IF NOT EXISTS `implphases` (
  `expcon` varchar(2) NOT NULL,
  `actphase` int(11) NOT NULL,
  PRIMARY KEY (`expcon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `implphases`
--

INSERT INTO `implphases` (`expcon`, `actphase`) VALUES
('c1', 0),
('e1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `intructorsconfig`
--

CREATE TABLE IF NOT EXISTS `intructorsconfig` (
  `maxNQDiscuss` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intructorsconfig`
--

INSERT INTO `intructorsconfig` (`maxNQDiscuss`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `msg`, `posted`) VALUES
('Ram', 'Hi ', '2015-10-07 15:02:35'),
('Ram', 'How are you?', '2015-10-07 15:02:39'),
('Shyam', 'Hi Ram', '2015-10-07 15:03:00'),
('Shyam', 'I am Good', '2015-10-07 15:03:03'),
('Shyam', 'How are you?', '2015-10-07 15:03:33'),
('Ram', 'I am good', '2015-10-07 15:03:41'),
('Ajit', 'heieeee', '2015-10-07 15:09:19'),
('Shyam', 'Hi', '2015-10-07 15:09:25'),
('Ajit', 'Banana', '2015-10-07 15:09:25'),
('Shyam', 'How are you?', '2015-10-07 15:09:28'),
('Ajit', 'Yum Yum', '2015-10-07 15:09:31'),
('Shyam', 'Welcome to this chat net', '2015-10-07 15:09:35'),
('Shyam', 'Sahi hai', '2015-10-07 15:09:56'),
('Ram', 'hi', '2015-10-07 15:12:32'),
('Ram', 'how are you?', '2015-10-07 15:12:37'),
('Ram', 'Hi', '2015-10-07 15:12:57'),
('Ram', 'Kya haal hai?', '2015-10-07 15:13:04'),
('Ram', 'jhaskdasd', '2015-10-07 15:13:10'),
('Ram', 'Keep it on', '2015-10-07 15:20:14'),
('Ram', 'hi', '2015-10-07 15:22:55'),
('Ram', 'Refresh the screen', '2015-10-07 15:23:02'),
('Ram', 'Ctrl+Shift+R', '2015-10-07 15:23:11'),
('Ram', '@Ajit', '2015-10-07 15:23:17'),
('Ajit', 'hi ram''', '2015-10-07 15:24:06'),
('Ajit', 'how r U?', '2015-10-07 15:24:12'),
('Ram', 'Hi', '2015-10-07 15:24:14'),
('Shitanshu', 'hi', '2015-10-07 15:24:38'),
('Shitanshu', 'haha', '2015-10-07 15:30:48'),
('Ajit', 'Ram', '2015-10-07 15:32:43'),
('Ajit', 'Ram', '2015-10-07 15:32:45'),
('Shitanshu', 'Hi', '2015-10-07 16:20:00'),
('Ram', 'hi', '2015-10-08 09:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `noteID` int(11) NOT NULL AUTO_INCREMENT,
  `noteText` text NOT NULL,
  `stuName` varchar(30) NOT NULL,
  `subTime` datetime NOT NULL,
  PRIMARY KEY (`noteID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteID`, `noteText`, `stuName`, `subTime`) VALUES
(1, '\n#[13:46:45]: ffffggh\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\n#[14:23:59]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\nmmmmmm\n#[14:26:02]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\nmmmmmm\n#[14:26:41]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\nmmmmmm\n#[16:47:00]: wer\n#[16:47:03]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\n#[14:23:59]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\nmmmmmm\r\n#[14:26:02]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\nmmmmmm\r\n#[14:26:41]: #[13:46:45]: ffffggh\r\n#[14:23:22]: #[13:46:45]: ffffgghnnbnvnv\r\nmmmmmmwerwer\r\n#[16:47:00]: wer\n#[4:56:24]: jmgmhbn\n#[8:06:30]: 9okokoko', 'Ram', '2015-10-29 13:36:30'),
(2, '\n#[14:23:44]: #[13:55:45]: Ajit''s notes....', 'Ajit', '2015-10-25 19:53:44'),
(3, '\n#[14:24:43]: jhhgjhgjg\n#[14:24:47]: #[14:24:43]: jhhgjhgjgbnnvnbvbn', 'ajit007', '2015-10-25 19:54:47'),
(4, '\n#[21:06:23]: dfs\n#[21:13:29]: dfs', 'shitanshu@iitb.ac.in', '2015-10-28 02:43:29'),
(5, '\n#[9:40:32]: stores value of itself and stores the address of other memory block\n#[9:43:35]: #[9:40:32]: stores value of itself and stores the address of other memory block\r\nArray stores value as one contigous block one after the another\r\nwhereas using linked list we can store the value in memory block randomly and can point the address of any other memory block', 'kavinderrawal@yahoo.com', '2015-10-28 15:13:35'),
(6, '\n#[9:41:37]: struct node', 'negiaditya57@gmail.com', '2015-10-28 15:11:37'),
(7, '\n#[9:42:25]: struct node\r\n{int data;\r\nnode* next;}\r\n\r\n\r\nhead:start\r\nlast:null\r\nacess to element:t====n\r\n\r\nwhen an element is deleted from a linked list it will be still present in memory\r\nthere may be some extra commands to delete that occupied block of memory\n#[9:42:41]: #[9:42:25]: struct node\r\n{int data;\r\nnode* next;}\r\n\r\n\r\nhead:start\r\nlast:null\r\nacess to element:t====n\r\n\r\nwhen an element is deleted from a linked list it will be still present in memory block\r\nthere may be some extra commands to delete that occupied block of memory', 'nikhilsinghbisht21@gmail.com', '2015-10-28 15:12:41'),
(8, '\n#[9:42:52]: why we use linker\n#[9:43:01]: #[9:42:52]: why we use linker\n#[8:48:50]: a is called ancester of b\r\nb is called desedent of a', 'vinitpanwar289@gmail.com', '2015-10-29 14:18:50'),
(9, '\n#[9:43:33]: improve the buffering speed\n#[9:44:40]: struct node\r\n{ int data;\r\n Node* next;\r\n}', 'ritikbhardwaj9911@gmail.com', '2015-10-28 15:14:40'),
(10, '\n#[9:43:46]: doubt about array,,, does not an address skip 2 digits for addressing next address in memory.like\r\nint a[10];  if a[0] address=200  then won''t a[1]address =202.', 'hameer.dhandu70@gmail.com', '2015-10-28 15:13:46'),
(11, '\n#[9:44:15]: 1ST NODE IS ADDRESS OF THE  HEAD NODE\r\nLAST ONE IS NULL \r\nINT DATA// 4 BYTES IN FREE SPACE\r\nNODE NEXT//4 BYTES\n#[9:49:20]: WE START FROM LEFT TO RIGHT HORIZONTALLY \r\nFROM 201 202..\r\nONE PART IS FREE ANOTHER IS ALLOCATED\r\nALBERT TO MEMORY MANAGER\r\nINT X; ASSIGNED ANY DATA IN 4 BYTES\r\nINTEGER IS OF 4 BITES IN ARRAY\r\n201+3*6\r\n1ST NODE IS ADDRESS OF THE  HEAD NODE\r\nLAST ONE IS NULL \r\nINT DATA// 4 BYTES IN FREE SPACE\r\nNODE NEXT//4 BYTES', 'ashishanand055@gmail.com', '2015-10-28 15:19:20'),
(12, '\n#[9:45:00]: Linked list is useful and should be preferred over array.\r\nstruct node\r\n{int data;\r\nnode* next;\r\n}\r\nWe can easily delete and insert in linked list but it''s complicated in array.\r\nTime taken to access list is proportional to n.\r\n\r\n\n#[9:46:22]: #[9:45:00]: Linked list is useful and should be preferred over array.\r\nstruct node\r\n{int data;\r\nnode* next;\r\n}\r\nWe can easily delete and insert in linked list but it''s complicated in array.\r\nTime taken to access list is proportional to n.\r\nAddress of head node gives the access to the complete list.\r\n\r\n\n#[9:46:46]: \r\n\r\n\r\n#[9:46:22]: #[9:45:00]: Linked list is useful and should be preferred over array.\r\nstruct node\r\n{int data;\r\nnode* next;\r\n}\r\nWe can easily delete and insert in linked list but it''s complicated in array.\r\nTime taken to access list is proportional to n.\r\nAddress of head node gives the access to the complete list.\r\n\r\n', 'krn0136@hotmail.com', '2015-10-28 15:16:46'),
(13, '\n#[9:45:53]: Queries\r\nQ1. What is purpose of Linked List?\r\nQ2. what is need to introduce Linked List?\\\r\nQ3. What is Struct Node?\n#[9:48:25]: #[9:45:53]: Queries\r\nQ1. What is purpose of Linked List?\r\nQ2. what is need to introduce Linked List?\r\nQ3. What is Struct Node?\r\nLinked List is very important in doing programming.', 'guptashubham0301@gmail.com', '2015-10-28 15:18:25'),
(14, '\n#[9:46:04]: linked list arrays some limitations story to memory each byte of memory address 200 ans so on memeory is cruial source memeory manager one guy albert build application store some data in high level language store integer variable give 4 bytes of memory.\r\n\r\narray= continuos group of elements.\r\nsometimes it waste the memeory.\r\nso we need linked list.\r\nwe will fill data between any two data because every elements in this have two parts-:\r\n1.STORE THE DATA.\r\n2.STORE THE ADDRESS OF THE VARIABLE.\r\n\r\n \n#[9:46:20]: #[9:46:04]: linked list arrays some limitations story to memory each byte of memory address 200 ans so on memeory is cruial source memeory manager one guy albert build application store some data in high level language store integer variable give 4 bytes of memory.\r\n\r\narray= continuos group of elements.\r\nsometimes it waste the memeory.\r\nso we need linked list.\r\nwe will fill data between any two data because every elements in this have two parts-:\r\n1.STORE THE DATA.\r\n2.STORE THE ADDRESS OF THE VARIABLE.\r\n\r\n ', 'kartik.jaswal0001@gmail.com', '2015-10-28 15:16:20'),
(15, '\n#[9:46:11]: introduction to linked list\n#[8:28:44]: bye bye\r\n\n#[8:32:15]: b\r\n\n#[8:32:24]: #[9:46:11]: introduction to linked list\r\n#[8:28:44]: bye bye\r\n', 'sagarsawhney2014@gmail.com', '2015-10-29 14:02:24'),
(16, '\n#[9:46:17]: struct node\r\n{\r\nint data;\r\nnode*data;\r\n}\r\n//doubted code\r\n\r\n\n#[9:47:23]: #[9:46:17]: struct node\r\n{\r\nint data;\r\nnode* next;\r\n}\r\n//doubted code\r\n\r\n\n#[9:47:25]: #[9:46:17]: struct node\r\n{\r\nint data;\r\nnode*data;\r\n}\r\n//doubted code\r\n\r\n\r\n#[9:47:23]: #[9:46:17]: struct node\r\n{\r\nint data;\r\nnode* next;\r\n}\r\n//doubted code\r\n\r\n', 'aditya.singhh01@gmail.com', '2015-10-28 15:17:25'),
(17, '\n#[9:46:20]: #advantage of linked list\r\n1) we can insert any variable in between\r\n2)less memory consumption\r\n\r\n#disadvantage of linked lists\r\n1) more time consumption as more the no of n \r\n   t is directly proportional to n\r\n\r\n#disadvantage of arrays\r\n1) more momory consumption\r\n2) we cant insert any variable in between as it is continuous\n#[9:46:47]: struct node\r\n{\r\nint data;\r\nnode* next;\r\n}\n#[9:49:48]: memory is used to store the data which is given by the user.\r\npointer is used to store the address of next value.\r\n', '', '2015-10-28 15:19:48'),
(18, '\n#[9:46:33]: Linked lists\r\nsupposed storage for integer value is 4 bytes in a memory allocation\r\nwhile array stores data in a contagneous memory allocation\r\nlinked lists always used to enter the value in between the array using node \r\naddress is stored\r\n', 'beyondordinary3@gmail.com', '2015-10-28 15:16:33'),
(19, '\n#[9:46:33]: linked list is useful in case where less space in memory is available.\r\nit takes more time to access to an element using linked list as compared to array.\r\nstruct node\r\n{ int data;\r\n node* next;\r\n}\r\n\r\ninsertion of data is easy in linked list as compared to array\n#[9:46:38]: #[9:46:33]: linked list is useful in case where less space in memory is available.\r\nit takes more time to access to an element using linked list as compared to array.\r\nstruct node\r\n{ int data;\r\n node* next;\r\n}\r\n\r\ninsertion of data is easy in linked list as compared to array', 'ved.prakash744@gmail.com', '2015-10-28 15:16:38'),
(20, '\n#[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\n#[9:47:05]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\n#[9:47:35]: #[9:46:47]:  array uses large memory space \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:05]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\n#[9:47:48]: #[9:46:47]:  array uses large memory space \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:05]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\n#[9:48:10]: #[9:46:47]:  array use large memory space\r\n \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:05]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:35]: #[9:46:47]:  array uses large memory space \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:05]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:48]: #[9:46:47]:  array uses large memory space \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:47:05]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:58]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n\r\n#[9:46:53]: #[9:46:47]:  array limitations- \r\neg: memory is crucial resource\r\n    memory manager , manage memory\r\n    u can ask for memory in HLL to manager\r\n    TO ACCESS any thing in array it will take constant time\r\n    to avoid making new array, we can use linked list(data str.)\r\n    to link diff.block (diff. location)- we will use memory address \r\nnode= int variable + pointer variable\r\nhead node-give access to complete list.\r\nlast node linking address is "null".\r\n\r\n\r\ngud things of link list-*no extra use of memory\r\n                        *we can free nodes when we want\r\n', 'tanmays321@gmail.com', '2015-10-28 15:18:10'),
(21, '\n#[9:47:00]: 1.each byte of memory has an address.\r\n2. memory is resource and program need it.\r\n3.memory manger keep track of memory allocations.\r\n4.can talk to memory manager in high level like c.\r\n5.it assign the memory as per data type and give address to it.\r\n6.if you want to store 4 values of integer like array int a[4] it allocates 8 memory.\r\n7.irrespective of size of array an application can acces an array in any canstant time.\r\n8.if you want to extend you array if already declared earlier .. can be done by giving new size and block and privious data is copied into new array.\r\n9.but this sometimes waste memory... but this can be overcome by using "LINKED LIST " data type.\r\n10.it ask memory for one unit of datatype seprately.\r\n11.but higher probabilty is that he will not get adjacent memory. i.e disjoint memory\r\n12. but we can link this set we need to store some extra information by dividing it into two.\r\n11.where one part store the address of next block and value in other half..\r\n12. 0 can be used to end the link.\r\n13. struct can be used to store data and one more field to store address in it.. so it ask for node from memory manger.\r\n14.struct node\r\n{int data\r\nnode * next\r\n}\r\n15. address of the head node gives us access of the complete list.\r\n16.unlike in case of array we could calculte the adrress but here we get the address by previous guy and so on.\r\n17. there is no extra use of memory in linked list.\n#[9:47:31]: #[9:47:00]: 1.each byte of memory has an address.\r\n2. memory is resource and program need it.\r\n3.memory manger keep track of memory allocations.\r\n4.can talk to memory manager in high level like c.\r\n5.it assign the memory as per data type and give address to it.\r\n6.if you want to store 4 values of integer like array int a[4] it allocates 8 memory.\r\n7.irrespective of size of array an application can acces an array in any canstant time.\r\n8.if you want to extend you array if already declared earlier .. can be done by giving new size and block and privious data is copied into new array.\r\n9.but this sometimes waste memory... but this can be overcome by using "LINKED LIST " data type.\r\n10.it ask memory for one unit of datatype seprately.\r\n11.but higher probabilty is that he will not get adjacent memory. i.e disjoint memory\r\n12. but we can link this set we need to store some extra information by dividing it into two.\r\n11.where one part store the address of next block and value in other half..\r\n12. 0 can be used to end the link.\r\n13. struct can be used to store data and one more field to store address in it.. so it ask for node from memory manger.\r\n14.struct node\r\n{int data\r\nnode * next\r\n}\r\n15. address of the head node gives us access of the complete list.\r\n16.unlike in case of array we could calculte the adrress but here we get the address by previous guy and so on.\r\n17. there is no extra use of memory in linked list.\n#[10:23:43]: 1.each byte of memory has an address.\r\n2. memory is resource and program need it.\r\n3.memory manger keep track of memory allocations.\r\n4.can talk to memory manager in high level like c.\r\n5.it assign the memory as per data type and give address to it.\r\n6.if you want to store 4 values of integer like array int a[4] it allocates 8 memory.\r\n7.irrespective of size of array an application can acces an array in any canstant time.\r\n8.if you want to extend you array if already declared earlier .. can be done by giving new size and block and privious data is copied into new array.\r\n9.but this sometimes waste memory... but this can be overcome by using "LINKED LIST " data type.\r\n10.it ask memory for one unit of datatype seprately.\r\n11.but higher probabilty is that he will not get adjacent memory. i.e disjoint memory\r\n12. but we can link this set we need to store some extra information by dividing it into two.\r\n11.where one part store the address of next block and value in other half..\r\n12. 0 can be used to end the link.\r\n13. struct can be used to store data and one more field to store address in it.. so it ask for node from memory manger.\r\n14.struct nodess\r\n{int data\r\nnode * next\r\n}\r\n15. address of the head node gives us access of the complete list.\r\n16.unlike in case of array we could calculte the adrress but here we get the address by previous guy and so on.', 'ash_', '2015-10-28 15:53:43'),
(22, '\n#[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\n#[9:47:18]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\n#[9:47:34]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n#[9:47:18]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\n#[9:48:10]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n\r\n\n#[9:48:23]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n#[9:47:18]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n#[9:47:34]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n#[9:47:18]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n#[9:48:10]: #[9:47:14]: Notes:\r\nTo create a Node in linked list\r\nStruct Node\r\n{\r\nint data     // 4 Bytes memory to store data part in linked list \r\nnode* next   // 4 Bytes Memory to store memory location of next node in linked list\r\n}\r\n\r\n\r\n\r\n\r\nQuestions:\r\n1   Is continuous memory same as contiguous memory?\r\n2   Why linked list does not provide Contiguous memory even when there is free memory adjacent to the occupied memory?\r\n\r\n\r\n', 'ditiansm2015@gmail.com', '2015-10-28 15:18:23'),
(23, '\n#[9:47:15]: eg:memory is crucial resource\r\nmemory manager,manager memory\r\nu can ask for memory in hll to memory\r\nto ascess any thing in array it will take constant time\r\nto avoid making new array,we can use linked list\r\nto link diff.block(diff.location)-we will ues memory address\r\nnode=int variable+pointer variable\n#[9:47:51]: #[9:47:15]: eg:memory is crucial resource\r\nmemory manager,manager memory\r\nu can ask for memory in hll to memory\r\nto ascess any thing in array it will take constant time\r\nto avoid making new array,we can use linked list\r\nto link diff.block(diff.location)-we will ues memory address\r\nnode=int variable+pointer variable\n#[9:47:56]: #[9:47:15]: eg:memory is crucial resource\r\nmemory manager,manager memory\r\nu can ask for memory in hll to memory\r\nto ascess any thing in array it will take constant time\r\nto avoid making new array,we can use linked list\r\nto link diff.block(diff.location)-we will ues memory address\r\nnode=int variable+pointer variable\r\n#[9:47:51]: #[9:47:15]: eg:memory is crucial resource\r\nmemory manager,manager memory\r\nu can ask for memory in hll to memory\r\nto ascess any thing in array it will take constant time\r\nto avoid making new array,we can use linked list\r\nto link diff.block(diff.location)-we will ues memory address\r\nnode=int variable+pointer variable\n#[10:10:47]: #[9:47:15]: eg:memory is crucial resource\r\nmemory manager,manager memory\r\nu can ask for memory in hll to memory\r\nto ascess any thing in array it will take constant time\r\nto avoid making new array,we can use linked list\r\nto link diff.block(diff.location)-we will ues memory address\r\nnode=int variable+pointer variable', 'ckumar06526@gmail.com', '2015-10-28 15:40:47'),
(24, '\n#[9:47:17]: When we store data separately without using array then why memory manager dont stores data in series with the data stored previously?\n#[9:47:37]: #[9:47:17]: When we store data separately without using array, why memory manager dont stores data in series with the data stored previously?', 'goelt56@gmail.com', '2015-10-28 15:17:37'),
(25, '\n#[9:47:31]: Struct data\r\n{int data;\r\nNode* next;}', 'aayushsirohi30@gmail.com', '2015-10-28 15:17:31'),
(26, '\n#[9:47:59]: advantages\r\n1) less memory consumption\r\n2) we can insert any variable in between\r\ndisadvantages\r\n1) more time consumption\r\nfor node:-\r\nstruct node\r\n{\r\nint data;\r\nnode* next;\r\n}', 'rausn222@gmail.com', '2015-10-28 15:17:59');
INSERT INTO `notes` (`noteID`, `noteText`, `stuName`, `subTime`) VALUES
(27, '\n#[9:48:28]: struct node\r\n{\r\nint data;\r\nnode* next;\r\n}\r\nmemory manager\r\nmemory\r\nno linked data for new insertion\r\neverytime to delete chain\r\narray to be shifted but linked list not\r\nno extra use of memory\r\nonly use of memory for giving adress\r\nmemory adress\r\nvariable has adress\r\nint takes 4 bytes\r\nmeans 4 spaces in memory\r\narray has a specific size whereas node can be extended\r\ninterlinking is possible only in node\r\nhead node is the main starting point of node\r\nnode can added anywhere in between \r\nless disadvantages of node and more uses', 'guptakanav20@gmail.com', '2015-10-28 15:18:28'),
(28, '\n#[9:48:33]: ALL APPLICATIONS NEED MEMORY.\r\nMEMORY MANAGER KEEP THE TRACK OF WHAT PART OF THE MEMORY IS FREE AND WHAT IS ALLOCATED. \r\nFOR AN ARRAY MEMORY MANAGER GIVE ADJACENT MEMORY LOCATION', 'kumarananyajha@gmail.com', '2015-10-28 15:18:33'),
(29, '\n#[9:48:33]: Can i store the two variables having the same address in the memory ?\n#[10:30:15]: uyiuyuiyo\n#[10:30:24]: #[9:48:33]: Can i store the two variables having the same address in the memory ?\r\n#[10:30:15]: uyiuyuiyo', 'atulyadavkharwal@gmail.com', '2015-10-28 16:00:24'),
(30, '\n#[9:48:35]: linked list\r\nmemeory manager:look at the memory ,how much is free and how much is allocated.\r\narray:contonous graoup of the elements.\r\nsometimes it wastes the memory.\r\nso we need link list.\r\nwe add or delete data between any two successive data because every element in this have two parts \r\n1.store the data\r\n2.store the address of other variable,which linked the data.\r\ndisadvantage:time taken by compiler is much more than in case of array,we cannot calculate the address of the node of the linked list.\r\n\r\n\n#[9:49:06]: #[9:48:35]: linked list\r\nmemeory manager:look at the memory ,how much is free and how much is allocated.\r\narray:contonous graoup of the elements.\r\nsometimes it wastes the memory.\r\nso we need link list.\r\nwe add or delete data between any two successive data because every element in this have two parts \r\n1.store the data\r\n2.store the address of other variable,which linked the data.\r\ndisadvantage:time taken by compiler is much more than in case of array,we cannot calculate the address of the node of the linked list.\r\n\r\n', 'karanagarwal569@gmail.com', '2015-10-28 15:19:06'),
(31, '\n#[9:48:37]: struct node\r\n{\r\n    int data;\r\n    node* next\r\n}\r\n\r\nwith the element,pointer is used to point to the location pf other element.\r\nlast element pointer stores 0,which ends the list\r\n\r\nTime taken to access elements is directly proportional to number of elements.\r\nO(n).\r\n\r\nto insert an element the pointer of element just before it has to be given the address of new element and the new element is given the address of element which was at its place.', 'theabhaypandeyji@gmail.com', '2015-10-28 15:18:37'),
(32, '\n#[9:48:40]: to store new data having same address\n#[9:48:57]: #[9:48:40]: to store new data having same address', 'akms1997@gmail.com', '2015-10-28 15:18:57'),
(33, '\n#[9:48:43]: INT TAKES 4 BYTES\r\nA[1] TAKES 4 BYTES\r\nA[4] TAKES 16 BYTES\r\nA[20] TAKES 80 BYTES\r\n\r\nT(TIME TO ACCESS NEXT ELEMENT)IS PROPORTIONAL TO LIST OF NODE(N)\r\n\r\nSTRUCT NODE\r\n{\r\nINT DATA;\r\nNODE*NEXT;}\r\n\r\nFIRST AND LAST NODE IS CALLED HEAD NODE AND LAST NODE RESPECTIVELY\r\n\r\nA NODE HAS TWO BLOCKS.... FIRST IN WHICH IT STORES THE DATA AND THE OTHER IN WHICH IT STORES THE LOCATION OF NEXT NODE\r\n', 'atulkumr074@gmail.com', '2015-10-28 15:18:43'),
(34, '\n#[9:48:45]: concepts\r\nstruct node\r\n{\r\nint data;//4 bytes\r\nnode*next;//4 bytes\r\n}\r\n\r\naccess to elements,T is directly proportional to the no. of integer datatypes used.\r\nadress of the head node gives us the adress of the complete list.\n#[9:48:48]: #[9:48:45]: concepts\r\nstruct node\r\n{\r\nint data;//4 bytes\r\nnode*next;//4 bytes\r\n}\r\n\r\naccess to elements,T is directly proportional to the no. of integer datatypes used.\r\nadress of the head node gives us the adress of the complete list.', 'aditigoyal100@gmail.com', '2015-10-28 15:18:48'),
(35, '\n#[9:48:46]: Each memory location in computer has its address.\r\nVariable is provided a memory.\r\nArrays are contiguous blocks of memory whose size is to be defined at the time of initialization.\r\nLinked list is a better substitute of memory storage in handling.\r\n\r\nStruct node{\r\nint data;\r\nnode* next;\r\n}\r\n ', 'itsvasu2907@gmail.com', '2015-10-28 15:18:46'),
(36, '\n#[9:48:46]: arrays are used to store data continiously\r\narrays size once defined cannot be extended\r\nstruct is more suitable than array to store the values in which first value refers to the data and another to its address which gets linked to other values\n#[9:48:57]: #[9:48:46]: arrays are used to store data continiously\r\narrays size once defined cannot be extended\r\nstruct is more suitable than array to store the values in which first value refers to the data and another to its address which gets linked to other values', 'bineetabhatt.44@gmail.com', '2015-10-28 15:18:57'),
(37, '\n#[9:48:46]: Arrays use up extra memory.If we have to enter an extra value in an array we will have to create a new array which would use up extra memory.If we declare an array of larger size just to be safe that would also end up causing extra usage of memory.\r\nLinked lists save memory.We can enter any value as and when required.By pointing to the address of the next node we can easily link the data values.Extra memory is not used up as the memory is allocated only when an extra value is to be stored.The head points the value of the first value which marks the start of the linked list.The address of the last node is given as 0 to mark the ed of the list.\r\nLinked list has a disadvantage that while traversing it we cannot jump to a value directly like in arrays.The control goes to every value and eventually ends up at the desired point. \n#[9:48:57]: #[9:48:46]: Arrays use up extra memory.If we have to enter an extra value in an array we will have to create a new array which would use up extra memory.If we declare an array of larger size just to be safe that would also end up causing extra usage of memory.\r\nLinked lists save memory.We can enter any value as and when required.By pointing to the address of the next node we can easily link the data values.Extra memory is not used up as the memory is allocated only when an extra value is to be stored.The head points the value of the first value which marks the start of the linked list.The address of the last node is given as 0 to mark the ed of the list.\r\nLinked list has a disadvantage that while traversing it we cannot jump to a value directly like in arrays.The control goes to every value and eventually ends up at the desired point. \n#[9:49:00]: #[9:48:46]: Arrays use up extra memory.If we have to enter an extra value in an array we will have to create a new array which would use up extra memory.If we declare an array of larger size just to be safe that would also end up causing extra usage of memory.\r\nLinked lists save memory.We can enter any value as and when required.By pointing to the address of the next node we can easily link the data values.Extra memory is not used up as the memory is allocated only when an extra value is to be stored.The head points the value of the first value which marks the start of the linked list.The address of the last node is given as 0 to mark the ed of the list.\r\nLinked list has a disadvantage that while traversing it we cannot jump to a value directly like in arrays.The control goes to every value and eventually ends up at the desired point. \r\n#[9:48:57]: #[9:48:46]: Arrays use up extra memory.If we have to enter an extra value in an array we will have to create a new array which would use up extra memory.If we declare an array of larger size just to be safe that would also end up causing extra usage of memory.\r\nLinked lists save memory.We can enter any value as and when required.By pointing to the address of the next node we can easily link the data values.Extra memory is not used up as the memory is allocated only when an extra value is to be stored.The head points the value of the first value which marks the start of the linked list.The address of the last node is given as 0 to mark the ed of the list.\r\nLinked list has a disadvantage that while traversing it we cannot jump to a value directly like in arrays.The control goes to every value and eventually ends up at the desired point. ', 'rlakhera2596@gmail.com', '2015-10-28 15:19:00'),
(38, '\n#[9:48:47]: Array is contiguous memmory location.\r\ninteger-4 bytes.\r\nmemmory manager-keep track of how much memmory is free and how much is used.It also assign memmory.\r\nto link this block together we have to stores the address of the next value.\r\nlink list\r\ntwo parts \r\n1-data\r\n2-address of next value \r\naddress of the head node gives us the access of complete list.', 'opchoubey222@gmail.com', '2015-10-28 15:18:47'),
(39, '\n#[9:48:48]: array \r\n  all the values are stored in contiguous memory. \r\n  time taken to access a element is const irrespective of size of an array.\r\n  only address of zeroth element is needed\r\n  address of nth element =base add+n*4\r\n \r\n  ', 'mkholia96@gmail.com', '2015-10-28 15:18:48'),
(40, '\n#[9:48:48]: 1.crutial resource\r\n2.memory manager\r\n3.4 bytes\r\n4.constant time\r\n5.extentiom-adjacent\r\n6.data structure\r\n7.1 element at a time\r\n8.pointer-insert next value\r\n9.2 field -for data nd address\r\n10.non contigeous nodes\r\n11.head node-1 access to cmplte list\r\n12.acess to elemnt is directly proportional to n \r\n13.array to insert smthng\r\n14.linked list cncept\r\n15.array always stored in memory', 'aatish01raj023@gmail.com', '2015-10-28 15:18:48'),
(41, '\n#[9:48:48]: memory manager- allocates us memory\r\narray-constant time to access any element\r\narray- large contigious block of memory\r\nnode-seperate requsts-disjoint non contigious \r\ncan link the blocks by giving address of the next block\r\n0-invaild address ,marks the end of list\r\nhead node address gives access to whole list\r\ntime proprotion to n\r\nnode-less wastage of memory in comparision 2 array\r\nnode-takes more time to execute in comparision 2 array \r\n\r\n', 'aniketkumar.ray@gmail.com', '2015-10-28 15:18:48'),
(42, '\n#[9:48:52]: linked list same like the array but requires less time and is like the treasure hunt \r\narray requires more time for expand of memory\r\n\r\n\r\n\r\n\r\n\r\n\r\nwhy linked list do not allocate adjacent memory ', 'vsu98866@gmail.com', '2015-10-28 15:18:52'),
(43, '\n#[9:48:53]: to find the position of new node we just have to enter the memory in which we have we have stored the node.  \r\ninteger takes a memory of 4 bytes.\r\n', 'akshatrana2707@gmail.com', '2015-10-28 15:18:53'),
(44, '\n#[9:49:00]: linked list- facilitates memory allocation and esy insertion of elements.\r\novercomes the drawbacks of array\r\nelement stores value of data as well as adress of next element', 'bharadwajn1997@gmail.com', '2015-10-28 15:19:00'),
(45, '\n#[9:49:01]: linked list helps to remove the problem of arrays\n#[9:49:11]: #[9:49:01]: linked list helps to remove the problem of arrays', 'apoorvajn5@gmail.com', '2015-10-28 15:19:11'),
(46, '\n#[9:49:02]: 1. Syntax\r\nStruct Node\r\n{\r\nint data;\r\nnode* next\r\n}\r\n\r\n2. T is d.proportional to number of elements(n). O(n)\r\n3. To insert or delete an element O(n)\n#[9:49:05]: #[9:49:02]: 1. Syntax\r\nStruct Node\r\n{\r\nint data;\r\nnode* next\r\n}\r\n\r\n2. T is d.proportional to number of elements(n). O(n)\r\n3. To insert or delete an element O(n)\n#[9:49:09]: #[9:49:02]: 1. Syntax\r\nStruct Node\r\n{\r\nint data;\r\nnode* next\r\n}\r\n\r\n2. T is d.proportional to number of elements(n). O(n)\r\n3. To insert or delete an element O(n)\r\n#[9:49:05]: #[9:49:02]: 1. Syntax\r\nStruct Node\r\n{\r\nint data;\r\nnode* next\r\n}\r\n\r\n2. T is d.proportional to number of elements(n). O(n)\r\n3. To insert or delete an element O(n)', 'Alokkr@live.com', '2015-10-28 15:19:09'),
(47, '\n#[9:49:05]: each byte has an adderess.\r\nmemory manager keeps track of what part of memory is free.\r\nmemory is resource and program needs it.\r\ncan talk to manager track a memory location.\r\nit assign the memory as per the data type,and give adderess to it.\r\n', 'sanya sharma', '2015-10-28 15:19:05'),
(48, '\n#[9:49:07]: advantages of linked list:\r\n1. less memory consumption.\r\n2. we can insert any variable in between.\n#[9:50:33]: #[9:49:07]: advantages of linked list:\r\n1. less memory consumption.\r\n2. we can insert any variable in between.', 'rawatshivangi23@yahoo.com', '2015-10-28 15:20:33'),
(49, '\n#[9:49:14]: int x;\r\nx=8;\r\nint a[4]\r\naccess elements t is directly proportional to the no.of integer datatype 0(n)\r\nintersection=0(n)\r\n\n#[9:49:18]: #[9:49:14]: int x;\r\nx=8;\r\nint a[4]\r\naccess elements t is directly proportional to the no.of integer datatype 0(n)\r\nintersection=0(n)\r\n', 'sanyamgupta1221@gmail.com', '2015-10-28 15:19:18'),
(50, '\n#[9:49:20]: struct node\r\n{\r\nint data;\r\nnode*next;\r\n}\r\n//how the pointer to node is created?\r\n\r\nfirst node gives the idea of complete list so that is known as head node.\r\naddress of the head node give saccess of linked node.', 'vickyjane3390@gmail.com', '2015-10-28 15:19:20'),
(51, '\n#[9:49:22]: arrays r cpntgaios block of memory\r\n 4 bits', 'pranutakantrar@yahoo.com', '2015-10-28 15:19:22'),
(52, '\n#[9:49:38]: for giving particular position to data in a memory we can use array by occupying\n#[9:49:54]: #[9:49:38]: for giving particular position to data in a memory we can use array by occupying', 'singhiswi@gmail.com', '2015-10-28 15:19:54'),
(53, '\n#[9:49:51]: memo manager \r\nalbert want to store data \r\nwant store interger variable x\r\nint- 4 bytes ,typical architecture\r\naddress of the block of the memo is the address of the first byt of the memo\r\n assign - 217  ,, want enter 8\r\nalber want 4 byte - 16 byte\r\n\r\n201+3*4=213\r\n\r\nagain allocate - 224\r\nsolution - data structure\r\nint data - 4 bytes\r\nnode* next - 4 byte\r\n\r\n1st node - head node --access of complete list\r\n\r\n204 6 217 5 310 10 232 4 242 2 252 3 null \r\naccess to element ; t == n \r\ninsertion 0(n)\r\nnot use of extra memo \r\nfree \n#[9:49:57]: #[9:49:51]: memo manager \r\nalbert want to store data \r\nwant store interger variable x\r\nint- 4 bytes ,typical architecture\r\naddress of the block of the memo is the address of the first byt of the memo\r\n assign - 217  ,, want enter 8\r\nalber want 4 byte - 16 byte\r\n\r\n201+3*4=213\r\n\r\nagain allocate - 224\r\nsolution - data structure\r\nint data - 4 bytes\r\nnode* next - 4 byte\r\n\r\n1st node - head node --access of complete list\r\n\r\n204 6 217 5 310 10 232 4 242 2 252 3 null \r\naccess to element ; t == n \r\ninsertion 0(n)\r\nnot use of extra memo \r\nfree ', 'rajeshbesic.280@gmail.com', '2015-10-28 15:19:57'),
(54, '\n#[9:54:16]: what i learned is that linked list is basically much efficient than array as in array we have to select a particular size and every time if we had to add an element we need to make another array of greater size.\r\nThis is very time consuming and our memory also get lost.Though array have a constant time with respect to linked list.\r\nLinked list is much easy way to collect a data and make a link between them. ', 'vishwasdeepakmehra09@yahoo.in', '2015-10-28 15:24:16'),
(55, '\n#[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\n\n#[10:34:46]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\n\n#[10:37:05]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\n\r\n#[10:34:46]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\nhow does the register allocates the memory in data structure linked list\r\n\n#[10:38:02]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\n\r\n#[10:34:46]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\n\r\n#[10:37:05]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\n\r\n#[10:34:46]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:30:42]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\n#[10:32:53]: #[10:30:12]: how can we bring the concept of data structure linked list in the arrays?\r\nis it necessary to give the last address i.e null in the data structure linked list?\r\nhow does the register allocates the memory in data structure linked list\r\n', 'kumari.hunny@gmail.com', '2015-10-28 16:08:02'),
(56, '\n#[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:20]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:29]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:20]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:39]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:20]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:29]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:20]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array\n#[10:34:12]: #[10:34:00]: why we use link when we use array\n#[10:34:09]: #[10:34:00]: why we use link when we use array', 'vishalsim9598@gmail.com', '2015-10-28 16:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `qcategory`
--

CREATE TABLE IF NOT EXISTS `qcategory` (
  `catID` int(2) NOT NULL,
  `catName` varchar(20) NOT NULL,
  `catDes` varchar(350) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qcategory`
--

INSERT INTO `qcategory` (`catID`, `catName`, `catDes`) VALUES
(1, 'Apply', 'Questioning aims at employing concept(s) from seed knowledge to create an “application” from prior known knowledge.'),
(2, 'Organize', 'Questioning aims at obtaining an structural organisation of multiple instances of the seed concept. The structural arrangement comes from prior experience.'),
(3, 'Probe', 'Questioning aims at using prior knowledge to get more insight of the seed knowledge.'),
(4, 'Compare', 'Questioning aims at unfolding associations between prior knowledge and seed knowledge with an objective to compare or contrast their concepts.'),
(5, 'Connect', 'Questioning aims at associating the seed knowledge to some prior knowledge from same domain, from other domains, or from real life, with NO intention of contrasting them.'),
(6, 'Vary', 'Questioning aims at modifying/varying component(s), attribute(s), or part(s) of the seed to unfold the variants of the seed concepts.'),
(7, 'Implement', 'Questioning aims at inquiring about operations/procedures that can be performed on the seed knowledge to achieve a goal state related to the seed.'),
(8, 'OTHER', 'There could be other possible types of exporatory questions. Feel free to consider others if you are convinced.'),
(9, 'Clarify', 'Questioning aims at clarifying doubts. Need reiteration of the content that has been explicitly been taught in the seed lecture. Its not at all exploratory.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `qgid`
--
CREATE TABLE IF NOT EXISTS `qgid` (
`qID` int(11)
,`qText` text
,`stuName` varchar(30)
,`subTime` datetime
,`Apply` tinyint(1)
,`Organize` tinyint(1)
,`Vary` tinyint(1)
,`Probe` tinyint(1)
,`Connect` tinyint(1)
,`Compare` tinyint(1)
,`Implement` tinyint(1)
,`OTHER` tinyint(1)
,`Clarify` tinyint(1)
,`partnerComment` text
,`isDebatable` tinyint(1)
,`isdebated` tinyint(1)
,`KIType` varchar(20)
,`partnerComment2` text
,`phase` int(1)
,`name` varchar(30)
,`seen` varchar(20)
,`group_id` varchar(4)
,`pswd` varchar(32)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `qidgid`
--
CREATE TABLE IF NOT EXISTS `qidgid` (
`qID` int(11)
,`qText` text
,`stuName` varchar(30)
,`subTime` datetime
,`Apply` tinyint(1)
,`Organize` tinyint(1)
,`Vary` tinyint(1)
,`Probe` tinyint(1)
,`Connect` tinyint(1)
,`Compare` tinyint(1)
,`Implement` tinyint(1)
,`OTHER` tinyint(1)
,`Clarify` tinyint(1)
,`partnerComment` text
,`isDebatable` tinyint(1)
,`name` varchar(30)
,`seen` varchar(20)
,`group_id` varchar(4)
,`pswd` varchar(32)
);
-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qID` int(11) NOT NULL AUTO_INCREMENT,
  `qText` text NOT NULL,
  `stuName` varchar(30) NOT NULL,
  `subTime` datetime NOT NULL,
  `Apply` tinyint(1) DEFAULT '0',
  `Organize` tinyint(1) DEFAULT '0',
  `Vary` tinyint(1) DEFAULT '0',
  `Probe` tinyint(1) DEFAULT '0',
  `Connect` tinyint(1) DEFAULT '0',
  `Compare` tinyint(1) DEFAULT '0',
  `Implement` tinyint(1) DEFAULT '0',
  `OTHER` tinyint(1) DEFAULT '0',
  `Clarify` tinyint(1) DEFAULT '0',
  `partnerComment` text,
  `isDebatable` tinyint(1) DEFAULT '0',
  `isdebated` tinyint(1) NOT NULL,
  `KIType` varchar(20) NOT NULL,
  `partnerComment2` text NOT NULL,
  `refinedQuestion` text NOT NULL,
  `phase` int(1) NOT NULL,
  PRIMARY KEY (`qID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=683 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qID`, `qText`, `stuName`, `subTime`, `Apply`, `Organize`, `Vary`, `Probe`, `Connect`, `Compare`, `Implement`, `OTHER`, `Clarify`, `partnerComment`, `isDebatable`, `isdebated`, `KIType`, `partnerComment2`, `refinedQuestion`, `phase`) VALUES
(477, 'with no joint memory allocation in linked list, what advantages do we get over the joint location allocation if we have a known set of values ?\n', 'vins.shah1997@gmail.com', '2016-07-29 12:45:44', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 1, 0, '', '', '', 0),
(479, 'with one extra memory allocation to each value, wont the linked list take more time to execute and slower than normal allocation\r\n', 'vins.shah1997@gmail.com', '2016-07-29 12:55:53', 0, 0, 0, 1, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(480, 'if i have a fix values to be stored in the memory, with no further addition to the storage, why would i use linked list storage then ?\r\n', 'vins.shah1997@gmail.com', '2016-07-29 12:57:49', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(481, 'What is dynamic list?\r\n', 'jhanvishah26@gmail.com', '2016-07-29 12:58:41', 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(482, 'Why does the memory manager allot the value of the variable randomly?\r\n', 'jhanvishah26@gmail.com', '2016-07-29 12:58:57', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(483, 'How big can the number allotted to the variable be?\r\n', 'jhanvishah26@gmail.com', '2016-07-29 12:59:35', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'where is it associated with any of the ideas that you know ?', 1, 0, '', '', '', 0),
(484, 'Time constraint is better for linked list or array?\r\n', 'jhanvishah26@gmail.com', '2016-07-29 13:00:53', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 1, 0, '', '', '', 0),
(485, 'linear allocation is simpler whereas tree allocation is hierarchial...wont this make it complicated ? ', 'vins.shah1997@gmail.com', '2016-07-29 15:07:42', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(487, 'instead of shifting the array x, why did memory manager shifted the big array a; it would have been easier to shift x right?\r\neasy to shift small than heavy, always. ', 'backashhardik@gmail.com', '2016-07-31 11:05:39', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(488, 'why not the next consecutive memory ? ', 'dakshparekh@rediffmail.com', '2016-07-31 11:20:48', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(489, 'why linked list when array is solving the purpose though memory constraints are there but linked list is using twice the memory ', 'dakshparekh@rediffmail.com', '2016-07-31 11:22:05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'memory constraints are there, here time plays an important role, for long memory requirement the memory manager might not be able to give the consecutive memory, so you either have to displace the array memory(which very big memory already)\r\nand also search for big space for extension of the memory, so here linked list come ', 1, 0, '', '', '', 0),
(490, 'why do  we need linked list whereas we can create a main node which points towards all the other node?\r\nIn here the time complexity would also reduced though the memory requirement would be the same, in other words its efficient.', 'backashhardik@gmail.com', '2016-07-31 11:23:35', 1, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(491, 'in array the insertion and deletion of array can be done easily for the user though  is not easy in linked list the complexity increases for the user to take care of the memory address as well as the memory where it is stored!!', 'dakshparekh@rediffmail.com', '2016-07-31 11:25:09', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(492, 'imagine linked list like a normal book, its of pages around 1000. if want a page 600 to be opened, we tend to open it from the middle so it get easy to traverse, can we do it like that in linked list to reduce traversing time?', 'backashhardik@gmail.com', '2016-07-31 11:29:00', 0, 0, 1, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(496, 'Why didnt albert declare the array as A[] instead of A[4]?', 'nityamodha97@gmail.com', '2016-08-03 14:04:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(498, 'What will happen if from the above example, ''6'' is stored at 204 and 5 is stored at 207?\r\nHow will linked list exist in this scenario?', 'nityamodha97@gmail.com', '2016-08-03 14:10:11', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(499, 'What if the space between number 6 and number 5 is not more than 4?\r\nIn this case, can we store the address of next number in other place? ', 'rusuumesh@gmail.com', '2016-08-03 14:17:44', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(500, 'What we can do with the space between number 4 and number 2?(two byte space will be unused because we can''t store any integer in 2 byte space.)', 'rusuumesh@gmail.com', '2016-08-03 14:20:59', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(501, 'Can we compare a tree with a linked list?\r\nAre they similar by any means?', 'nityamodha97@gmail.com', '2016-08-03 15:10:20', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(502, 'Can we represent a connection with arrow in graph?', 'rusuumesh@gmail.com', '2016-08-03 15:11:40', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(503, 'What is the difference between <=> and - ?   ', 'rusuumesh@gmail.com', '2016-08-03 15:16:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(504, 'Let us consider unweighted graph, in this all the edges have weight 1, but if we calculate the distance from city A to D, Route A, B, C, D will be 3 units.\r\nRoute A, E, D will have 2 units,\r\nBut this discrepancy contradicts the nature of unweighted graphs.\r\nSo can we choose any route in an unweighted graph?', 'nityamodha97@gmail.com', '2016-08-03 15:27:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(505, 'How a social network is an undirected graph? (If i want suggestions foe more friends and i have only tow friends then suggestions will be more from the freind who have more friends.. response is there.)  ', 'rusuumesh@gmail.com', '2016-08-03 15:29:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(506, 'in an organisational hierarchy in the video,if bill reports to both tom and rama at the organisation,how will the structure work?', 'harishchetty1997@gmail.com', '2016-08-06 11:28:35', 1, 0, 0, 1, 0, 0, 0, 0, 0, 'Should come under Operate', 1, 0, '', '', '', 0),
(507, 'What is a recursive data structure?\r\n', 'tanwardevwrat24@gmail.com', '2016-08-06 11:33:45', 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(508, 'what if the node 10 points towards the memory location of 11,the tree is invalid,but in that scenario what would happen,for eg: 10 and 11 are both work for a company but 11 reports to 7 as well as 10 ?', 'harishchetty1997@gmail.com', '2016-08-06 11:38:47', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(509, 'how can we reduce the time complexity in a tree(recursive) data structure?', 'harishchetty1997@gmail.com', '2016-08-06 11:45:55', 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Should come under Operate', 1, 0, '', '', '', 0),
(510, 'How are the concepts of depth and height useful in company''s data?\r\nany other example for it.', 'tanwardevwrat24@gmail.com', '2016-08-06 11:47:13', 0, 0, 1, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(511, 'How are trees used in Trie?', 'tanwardevwrat24@gmail.com', '2016-08-06 11:49:17', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(512, 'Data Structures apart from Linear Data Structures', 'tanwardevwrat24@gmail.com', '2016-08-06 12:41:18', 1, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(513, 'Why do we use tree data structure, if we have a wider version i.e Graph data structure?', 'harishchetty1997@gmail.com', '2016-08-06 12:59:11', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(514, 'How to convert a tree data structure to a graph?', 'tanwardevwrat24@gmail.com', '2016-08-06 12:59:57', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(515, 'All trees are graphs, Condition for a graph to be a tree?', 'tanwardevwrat24@gmail.com', '2016-08-06 13:00:58', 0, 0, 0, 0, 0, 0, 0, 1, 0, 'This is a clarification type.', 1, 0, '', '', '', 0),
(516, 'Why are binary trees the most common type of trees used ?', 'svashi1997@gmail.com', '2016-08-08 14:28:44', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(517, 'How efficient is tree data structure when compared to Linear data structures such as Stack and queue with respect to time and space complexity?', 'aksharshah13@gmail.com', '2016-08-08 14:32:35', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(518, 'can a tree data structure be used for something other than when there''s a hierarchy?', 'svashi1997@gmail.com', '2016-08-08 14:33:36', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Associate-Since we are comparing different  relations between the data', 1, 1, '', '', '', 0),
(519, 'how can the tree data structure be modified to fit in every scenario, not just when there''s a hierarchy?', 'svashi1997@gmail.com', '2016-08-08 14:34:40', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Apply-we have to think of all possible ways to apply tree even when data is not hierarchical.', 1, 0, '', '', '', 0),
(520, 'in whicih scenario would the tree data structure prove to be less efficient ', 'svashi1997@gmail.com', '2016-08-08 14:38:10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'operate-we will be comparing efficiency  of different operations.', 1, 0, '', '', '', 0),
(521, 'Are there any other data structures which can handle hierarchical data in a better manner where searching,sorting or any such operation is quicker?', 'aksharshah13@gmail.com', '2016-08-08 14:38:35', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'This question does not talk about the procedure which he has a prior knowledge of which can be used, ie it does not talk about how it can be done. The question only asks if there are other data structures.', 1, 0, '', '', '', 0),
(522, 'Are there alternate ways to traverse in a tree apart from using address stored at each node?', 'aksharshah13@gmail.com', '2016-08-08 14:41:05', 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Only asks whether there are other ways. Does not ask which particular way can be applied to this data structure.', 1, 0, '', '', '', 0),
(523, 'how well would this method of data storage work for big data?', 'svashi1997@gmail.com', '2016-08-08 14:42:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(524, 'On what basis is a starting location picked while traversing  a graph?', 'aksharshah13@gmail.com', '2016-08-08 16:54:47', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(525, 'Is there a starting point in a graph', 'svashi1997@gmail.com', '2016-08-08 16:59:03', 0, 0, 0, 0, 0, 0, 0, 1, 1, 'operate-since starting location is required for operations', 1, 0, '', '', '', 0),
(526, 'how can we add a new node and connect it to the existing nodes\r\n', 'svashi1997@gmail.com', '2016-08-08 17:00:10', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(527, 'In what way deletion of a node will affect the graph?', 'aksharshah13@gmail.com', '2016-08-08 17:00:29', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(528, 'can new relations be created within existing nodes?', 'svashi1997@gmail.com', '2016-08-08 17:01:03', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(529, 'How would a graph arrange objects/nodes when there is hierarchy', 'svashi1997@gmail.com', '2016-08-08 17:03:45', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(530, 'Can graphs be better at organising data than trees?If so how', 'svashi1997@gmail.com', '2016-08-08 17:04:37', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(531, 'what are the advantages of using graph over tree?', 'aksharshah13@gmail.com', '2016-08-08 17:05:55', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(532, 'Do i need to know the total number of nodes before making a graph', 'svashi1997@gmail.com', '2016-08-08 17:08:17', 0, 0, 0, 0, 0, 0, 0, 1, 0, NULL, 0, 0, '', '', '', 0),
(533, 'is it possible to have multiple roots?', 'sharma.anuj7996@gmail.com', '2016-08-10 13:51:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(534, 'how is storing data in an array different than storing data in a queue?', 'jyotsna1330.jr@gmail.com', '2016-08-10 13:52:26', 1, 0, 0, 1, 0, 0, 0, 0, 0, 'it is associating but not apply!', 1, 0, '', '', '', 0),
(535, 'if we have 2 trees, say root A and root B and we want to link both of the trees from the roots, so we link root A with root B, and since we can have only 1 root, will any of these roots become a parent or something else or it is invalid to link roots?', 'sharma.anuj7996@gmail.com', '2016-08-10 14:05:04', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(536, 'As Binary tree is the simplest having nodes with maximum of 2 children, what is the highest possible limit of children, if any, a node can have?', 'sharma.anuj7996@gmail.com', '2016-08-10 14:18:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(537, 'Isn''t storing data using tree structure little complicated ? Suppose  there are 5 levels in a tree and and someone makes a mistake in level 2 so subsequently rest all levels are also inserted wrong, so to rectify it is deleting the rest levels and rectify mistake and make it again is the only option or is there any other method to rectify it?', 'jyotsna1330.jr@gmail.com', '2016-08-10 14:19:11', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'clarification! cannot be associate as it is related to anything!', 1, 0, '', '', '', 0),
(538, 'In the tree example, Steve(CTO) has 3 direct reports, that is, Lee, Bob and Ella. Can all of these 3 have the same designation or all different or mixed?', 'sharma.anuj7996@gmail.com', '2016-08-10 14:27:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(539, 'Are naturally hierarchical data stored into trees automatically, for file system, i.e. is it like a predefined function which can be used on other systems also or does each system needs to have its own unique tree algorithm?', 'sharma.anuj7996@gmail.com', '2016-08-10 14:46:24', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(540, 'how can storing data in tree structure be memory efficient? ', 'jyotsna1330.jr@gmail.com', '2016-08-10 14:50:12', 1, 0, 0, 0, 0, 0, 0, 1, 0, 'clarification!', 1, 0, '', '', '', 0),
(541, 'suppose a node has 3 subnodes and out of the three subsides one has subsides so if we r reducing it to a binary tree how will we arrange it? Will we ignore a node ?', 'jyotsna1330.jr@gmail.com', '2016-08-10 14:52:16', 0, 0, 1, 1, 0, 0, 0, 0, 0, 'not associate!', 1, 0, '', '', '', 0),
(542, 'in a graph a single node can have multiple connections and edges wont it be complicated to figure it out which two nodes are interrelated?', 'jyotsna1330.jr@gmail.com', '2016-08-10 16:14:39', 1, 0, 0, 0, 0, 0, 0, 1, 1, 'not apply!', 1, 0, '', '', '', 0),
(543, 'is it possible to have uneven number of vertices and edges, i.e. can we create a one sided edge?', 'sharma.anuj7996@gmail.com', '2016-08-10 16:16:06', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(544, 'Is it possible to change a directed edge into an undirected edge and vice versa?', 'sharma.anuj7996@gmail.com', '2016-08-10 16:17:02', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(545, 'If in the facebook example if one friend is a friend of other so eventually both of them are interrelated so their connections is directional so why they have represented it with non directional lines?', 'jyotsna1330.jr@gmail.com', '2016-08-10 16:23:20', 0, 0, 1, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(546, 'In the social network example, the task was to suggest friends to Rama but since Zahir and Arun were not really connected to him or his friends, can we  still suggest their names to Rama?', 'sharma.anuj7996@gmail.com', '2016-08-10 16:23:39', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(547, 'In the www example they said page p has a link for page Q in it so it is represented by a directional arrow and they have mentioned that there is no way to reach back to page p but we can go back to page p by pressing the back button so isnt it related that way?', 'jyotsna1330.jr@gmail.com', '2016-08-10 16:28:51', 0, 0, 0, 1, 0, 0, 0, 0, 1, 'apply! not associate', 1, 0, '', '', '', 0),
(548, 'In the world wide web example, Page P was directed to Page Q, but Page Q was not directed to page P and hence said that there is no link from page Q to P but if i press ''back'' then I''m taken to the previous page, then is this a directed or undirected system?', 'sharma.anuj7996@gmail.com', '2016-08-10 16:28:53', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(554, 'why is the link unidirectional?', 'monit24218@gmail.com', '2016-08-12 13:46:58', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'this question is not about clarification because there was no explanation given on why the link is directional', 1, 0, 'apply', '', '', 0),
(555, 'is there any relation possible between 7 and 6 or 6 and 11?', 'shikhadshah112@gmail.com', '2016-08-12 13:49:03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'according to me this question is a clarification and not exploratory', 1, 0, '', '', '', 0),
(556, 'what is recursive data structure?', 'monit24218@gmail.com', '2016-08-12 13:49:57', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(557, 'why are the links unidirectional?', 'shikhadshah112@gmail.com', '2016-08-12 13:50:07', 0, 0, 1, 0, 0, 0, 0, 0, 0, 'also Associate - i think the doubt arises on the prior knowledge of D-linklist.', 1, 0, '', '', '', 0),
(558, 'why is tree a recursive data structure?', 'shikhadshah112@gmail.com', '2016-08-12 13:56:51', 0, 0, 1, 0, 0, 0, 0, 1, 0, 'calrification type question', 1, 0, '', '', '', 0),
(559, 'is it possible for one child to have more than one parent?', 'shikhadshah112@gmail.com', '2016-08-12 13:59:17', 1, 0, 0, 1, 0, 0, 0, 1, 0, 'other type question', 1, 0, '', '', '', 0),
(560, 'can a tree have depth?', 'shikhadshah112@gmail.com', '2016-08-12 14:02:43', 0, 0, 1, 0, 0, 0, 0, 0, 0, 'clarification because the depth of the tree is same as height and it is quite clear logically .', 1, 0, '', '', '', 0),
(561, 'can a tree have depth?', 'shikhadshah112@gmail.com', '2016-08-12 14:02:50', 1, 0, 0, 1, 0, 0, 0, 0, 0, 'clarification because the depth of the tree is same as height and it is quite clear logically.', 1, 0, '', '', '', 0),
(562, 'what is the difference between tree and graphs as data structures?', 'shikhadshah112@gmail.com', '2016-08-12 15:06:36', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'clarification - difference is clearly stated in the vidoe', 1, 0, '', '', '', 0),
(563, 'why is an ordered pair important?\r\n', 'shikhadshah112@gmail.com', '2016-08-12 15:10:20', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'operate', 1, 0, '', '', '', 0),
(564, 'why do we have directed edges only in a tree but not in a graph?', 'shikhadshah112@gmail.com', '2016-08-12 15:13:32', 0, 0, 1, 0, 0, 0, 0, 0, 0, 'deep', 1, 0, '', '', '', 0),
(565, 'how is tree a kind of graph', 'monit24218@gmail.com', '2016-08-12 15:14:13', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'ugjhjjj', 1, 0, '', '', '', 0),
(566, 'why is the ordered pair u,v different from v,u?', 'shikhadshah112@gmail.com', '2016-08-12 15:16:55', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'clarification - the reason is given', 1, 0, '', '', '', 0),
(567, 'is a graph like a family tree\r\n', 'monit24218@gmail.com', '2016-08-12 15:17:45', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(568, 'what kinds of graphs have both directed and undirected edges?', 'shikhadshah112@gmail.com', '2016-08-12 15:18:23', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'operate', 1, 0, '', '', '', 0),
(569, 'what is web crawling', 'monit24218@gmail.com', '2016-08-12 15:22:35', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'this question is not associative its applicative', 1, 0, '', '', '', 0),
(570, 'why cant the pages on the world wide web be undirectional?', 'shikhadshah112@gmail.com', '2016-08-12 15:22:58', 0, 0, 0, 0, 0, 0, 0, 0, 1, 'apply - its related to an example', 1, 0, '', '', '', 0),
(571, 'can a graph be both directed as well as undirected?', 'monit24218@gmail.com', '2016-08-12 15:24:04', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'this is clarification because this was talked about in the video', 1, 0, '', '', '', 0),
(572, 'are there any other types of weights?', 'shikhadshah112@gmail.com', '2016-08-12 15:28:03', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'Some Some Comment', 1, 0, 'apply', '', '', 0),
(573, 'how can we draw an undirected graph as directed?', 'shikhadshah112@gmail.com', '2016-08-12 15:29:45', 0, 0, 0, 0, 0, 0, 0, 1, 0, 'operate - related to immplementation', 1, 0, '', '', '', 0),
(579, 'Why is it unidirectional ?', 'krwadia97@gmail.com', '2016-08-13 11:59:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(580, 'what do you mean by self similar manner?\r\n', 'aaronpaul76@gmail.com', '2016-08-13 12:03:19', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(581, 'If there are sub-trees , are there sub-roots too? ', 'krwadia97@gmail.com', '2016-08-13 12:15:16', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(582, 'depth of a tree is the number of edges from root to x and height of tree is also the number of edges from root to the end...aren''t they the same?\r\n', 'aaronpaul76@gmail.com', '2016-08-13 12:15:38', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(583, 'in what way are pointers used in linked list?', 'aaronpaul76@gmail.com', '2016-08-13 12:19:26', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(584, 'What are dynamically created nodes ?', 'krwadia97@gmail.com', '2016-08-13 12:19:49', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(585, 'what do you mean by dynamically created nodes ?', 'aaronpaul76@gmail.com', '2016-08-13 12:20:29', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(586, 'How is the cost of operations affected by trees?', 'krwadia97@gmail.com', '2016-08-13 12:21:43', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(587, 'How is a dictionary an application?\r\n', 'krwadia97@gmail.com', '2016-08-13 12:24:29', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(588, 'Don''t graphs happen to be same as trees without a root ?', 'krwadia97@gmail.com', '2016-08-13 13:18:54', 0, 0, 0, 1, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(589, 'Doesn''t this end up linking unrelated data?', 'krwadia97@gmail.com', '2016-08-13 13:28:52', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(590, 'At what level do they stop suggesting depending on the links in the social networking sites because after a point the data will have not much connection with the suggested links (it''ll all become too messed up)  ', 'krwadia97@gmail.com', '2016-08-13 13:32:38', 0, 0, 1, 0, 0, 0, 0, 1, 0, NULL, 0, 0, '', '', '', 0),
(591, 'in weighted graph while taking the kilometers into consideration we cannot rely on kilometers because other factors like traffic or the condition of the roads have to be taken into considerration..so how to come up with that?', 'aaronpaul76@gmail.com', '2016-08-13 13:33:16', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(604, 'how is a tree structure different from a family? ', 'meetmandavia9@gmail.com', '2016-08-14 10:54:57', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(605, 'Can a link list be modified and converted into a tree structure\r\n', 'parthkothare@gmail.com', '2016-08-14 10:58:22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'i think it belongs to operate because he is suggesting an alternate application.', 1, 0, '', '', '', 0),
(606, 'Is this data type of tree used by websites for user to search anything using some key words?', 'meetmandavia9@gmail.com', '2016-08-14 11:08:10', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(607, 'How is a tree used in storing data onto a hard disk\r\n', 'parthkothare@gmail.com', '2016-08-14 11:11:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'also associate.', 1, 0, '', '', '', 0),
(608, ' why is it not possible for a child to have multiple parents in terms of data type tree?', 'meetmandavia9@gmail.com', '2016-08-14 11:13:02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'should be added to clarifying.', 1, 0, '', '', '', 0),
(609, 'How fast is searching in a tree compared to other data strucutres', 'parthkothare@gmail.com', '2016-08-14 11:16:19', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(610, 'why is tree know as a recursive data structure\r\n', 'parthkothare@gmail.com', '2016-08-14 11:18:38', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(611, 'why is the depth and height of the node not same\r\n', 'parthkothare@gmail.com', '2016-08-14 11:23:12', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(612, 'My test Question?', 'shitanshu', '2016-08-14 11:23:19', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'associate', '', '', 0),
(613, 'how can we convert this logic into a code\r\n', 'parthkothare@gmail.com', '2016-08-14 11:27:37', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(614, 'instead of a directed graph can we use a linked list?', 'meetmandavia9@gmail.com', '2016-08-14 12:27:29', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Apply is apt for this', 1, 0, '', '', '', 0),
(615, 'In which is the traversing time quicker \r\nTress?\r\nGraphs?', 'parthkothare@gmail.com', '2016-08-14 12:27:40', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(616, 'search engines use graph system, they have a main web page from where the process begins then how is it not a root node?', 'meetmandavia9@gmail.com', '2016-08-14 12:29:03', 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(617, 'is it possible for a directed graph to end at a node having no further links?', 'meetmandavia9@gmail.com', '2016-08-14 12:34:05', 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(618, 'Can graphs be used in databases for storing two or more types of data having some connection\r\n', 'parthkothare@gmail.com', '2016-08-14 12:35:51', 1, 0, 0, 0, 0, 0, 0, 0, 0, 'i think it also belongs to operate', 1, 0, '', '', '', 0),
(619, 'can web crawling be used for any other data type traversing?', 'meetmandavia9@gmail.com', '2016-08-14 12:36:00', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(620, 'is hyperlinking of pages in a webiste similar to how a graph works', 'parthkothare@gmail.com', '2016-08-14 12:39:03', 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(621, 'Are graph nodes also divided into two parts where one contains info and the other pointer', 'parthkothare@gmail.com', '2016-08-14 12:40:25', 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(622, 'What is web crawling and is it similar to traversing an array', 'parthkothare@gmail.com', '2016-08-14 12:50:03', 0, 0, 0, 1, 0, 0, 0, 1, 0, 'i think it belongs to clarify as well. ', 1, 0, '', '', '', 0),
(623, 'can this graph system be used in providing a huge electricity network in a city?', 'meetmandavia9@gmail.com', '2016-08-14 14:06:35', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'apply', '', '', 0),
(624, 'Can graphs be used to create a database for a university or college', 'parthkothare@gmail.com', '2016-08-14 14:06:36', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'apply', '', '', 0),
(634, 'What is the difference between array and linked list?', 'testuser2', '2016-08-15 10:50:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'à¤¯à¥‡ à¤®à¥‡à¤°à¥€ à¤Ÿà¤¿à¤ªà¥à¤ªà¥œà¥€ à¤¹à¥ˆà¥¤ ', 0, 0, 'apply', '', 'yeh mera ppt hai', 0),
(635, 'à¤¯à¥‡ à¤®à¥‡à¤°à¤¾ à¤ªà¥à¤°à¤¶à¥à¤¨ à¤¹à¥ˆ?', 'testuser1', '2016-08-15 10:50:51', 0, 0, 0, 0, 0, 0, 0, 0, 0, 'yeh mera utar hai', 0, 0, 'apply', '', 'à¤¯à¥‡ à¤®à¥‡à¤°à¤¾ à¤ à¥€à¤• à¤•à¤¿à¤¯à¤¾ à¤¹à¥à¤† à¤ªà¥à¤°à¤¶à¥à¤¨ à¤¹à¥ˆ...', 0),
(636, 'test', 'testuser2', '2016-08-15 12:04:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(639, 'My Question?', 'gyanu', '2016-08-16 20:33:56', 1, 0, 1, 0, 0, 0, 0, 0, 0, 'My comment, my criticism!!', 1, 0, '', '', '', 0),
(640, 'can a tree start as a linear data structure(array) first and then branch out ?', 'bari.r.kash@gmail.com', '2016-08-17 13:42:04', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(641, 'so if 2 and 3 are children of 1 are they aware about each other or is it only known by the parent?', 'bari.r.kash@gmail.com', '2016-08-17 13:50:11', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(642, 'so any node in the whole tree will have at least one same ancestor (root)?\r\n', 'bari.r.kash@gmail.com', '2016-08-17 13:57:16', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(643, 'so a node without any child node (leaf node) can be called subtree?', 'bari.r.kash@gmail.com', '2016-08-17 13:59:50', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(644, 'in which category Linear or non linear data structures would Multidimentional array fit ?', 'bari.r.kash@gmail.com', '2016-08-17 14:53:53', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(645, 'do i really have to care about mathematics of graphs while implementing graphs ?', 'bari.r.kash@gmail.com', '2016-08-17 15:01:36', 0, 0, 1, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(646, 'so is there like no root node ? if so where does one start a graph from?', 'bari.r.kash@gmail.com', '2016-08-17 15:03:01', 0, 0, 1, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(647, 'cant a 2 way directed edge be written as a undirected edge?', 'bari.r.kash@gmail.com', '2016-08-17 15:11:54', 0, 0, 1, 1, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(648, 'would you say following someone on instagram would be an example of undirected graph?\r\n', 'bari.r.kash@gmail.com', '2016-08-17 15:14:22', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, 0, '', '', '', 0),
(649, 'can graphs be used for gps navigation and other map applications ?', 'bari.r.kash@gmail.com', '2016-08-17 15:20:32', 1, 0, 1, 0, 0, 0, 0, 0, 0, 'deep', 1, 0, '', '', '', 0),
(650, 'When mishraji will get married?', 'anuragdeep4949@gmail.com', '2016-08-24 21:19:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(651, 'deep meaning', 'anuragdeep4949@gmail.com', '2016-08-24 21:26:15', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(652, 'ojo', 'anuragdeep4949@gmail.com', '2016-08-24 21:39:05', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(653, 'aa', 'anuragdeep4949@gmail.com', '2016-08-24 21:39:37', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(654, 'explanation of logical model\r\n', 'damini.palrecha1421@gmail.com', '2016-09-04 12:16:01', 1, 0, 0, 0, 0, 0, 0, 1, 0, NULL, 0, 0, '', '', '', 0),
(655, 'What exactly is Recursion in trees and how is it helpful in storing the data?', 'mdparekh97@gmail.com', '2016-09-04 12:30:33', 0, 0, 0, 0, 0, 0, 0, 0, 1, 'other tag should be opted and operate', 1, 0, '', '', '', 0),
(656, 'recursive data structure , how???', 'damini.palrecha1421@gmail.com', '2016-09-04 12:30:35', 1, 0, 1, 0, 0, 0, 0, 1, 0, NULL, 0, 0, '', '', '', 0),
(657, 'self similar manner ,how???', 'damini.palrecha1421@gmail.com', '2016-09-04 12:33:09', 1, 0, 1, 0, 0, 0, 0, 1, 0, 'This should be under clarify or operate as it is asking how is it self similar.', 1, 0, '', '', '', 0),
(658, 'naturally heirarchial data ..?', 'damini.palrecha1421@gmail.com', '2016-09-04 12:41:13', 0, 0, 0, 1, 0, 0, 0, 1, 0, 'This should be categorized as clarify because it is asking what is naturally hierarchical data and not comparing it with any idea she already knows. ', 1, 0, '', '', '', 0),
(659, 'Is it possible that a graph is directed as well as undirected? if yes what do you call such graphs?', 'mdparekh97@gmail.com', '2016-09-04 14:21:19', 0, 0, 1, 0, 0, 0, 0, 1, 0, 'associate', 1, 0, '', '', '', 0),
(660, 'graphs are ordered pair but told that directed are ordered pair but not undirected..and shown graph is undirected .. how ??? explanation.', 'damini.palrecha1421@gmail.com', '2016-09-04 14:25:56', 0, 0, 0, 1, 0, 0, 0, 1, 0, 'This should be a clarify type question because she has doubt the content that has been explained in the video.', 1, 0, '', '', '', 0),
(661, 'can linear and non-linear data structures be combined to store the data? Example: array or stack with graphs.', 'mdparekh97@gmail.com', '2016-09-04 14:35:29', 0, 0, 0, 1, 0, 0, 0, 0, 0, 'how to apply and then implement them too.', 1, 0, '', '', '', 0),
(662, 'what if there is one person who is answerable to 2 people ( 2 roots) ?', 'kanishkjinnoni26@gmail.com', '2016-09-05 12:09:23', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(663, 'in trees is it possible to show relations of nodes at the same level?\r\n', 'kanishkjinnoni26@gmail.com', '2016-09-05 12:11:27', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(664, 'what if one node has relationship with 2 or more hierarchy level?', 'kanishkjinnoni26@gmail.com', '2016-09-05 12:13:59', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(665, 'what if i have to find a date ? will it not be the most complicated one as we will need the hierarchy level knowledge of that tree?', 'kanishkjinnoni26@gmail.com', '2016-09-05 12:18:43', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(666, 'does tree occupy more memory as it stores address of chil nodes?', 'kanishkjinnoni26@gmail.com', '2016-09-05 12:23:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(667, 'looking at the diagram of graph it not that easy to understand by a user not knowing this. isn''t this complexity of graph makes its application very restricted?  ', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:02:33', 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL, 0, 0, '', '', '', 0),
(668, 'searching in a graph is much more complicated to any other data structures.\r\ndata is not organised, shouldn''t for better use of it it should be organised? ', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:04:37', 1, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(669, 'graph is just a link list with multiple links?', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:05:07', 0, 0, 1, 1, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(670, 'inserting and deleting data will be a great problem here! what can be done to improve that?', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:08:14', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(671, 'doesn''t storing every coordinate bring complexity and memory wastage?', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:14:32', 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(672, 'how can i search i have no knowledge of graph ?', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:15:37', 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(673, 'to make graphs showing relationships in diagram become difficult is there any particular way of doing so?', 'kanishkjinnoni26@gmail.com', '2016-09-05 13:21:06', 1, 0, 1, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(674, 'assd', 'shitanshu', '2016-09-20 13:52:41', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(675, 'assd', 'shitanshu', '2016-09-20 14:23:43', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(676, 'assd', 'shitanshu', '2016-09-20 14:25:02', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(677, 'assd', 'shitanshu', '2016-09-20 14:36:04', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(678, 'assd', 'shitanshu', '2016-09-20 14:36:15', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(679, 'What is meant by tree', 'shitanshu', '2016-09-23 11:38:56', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(680, 'test q?', 'shitanshu', '2016-12-27 13:56:39', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(681, 'Question', 'shitanshu', '2017-01-30 17:27:48', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0),
(682, 'dhamaka', 'shitanshu', '2017-01-30 17:32:04', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reflections`
--

CREATE TABLE IF NOT EXISTS `reflections` (
  `refID` int(11) NOT NULL,
  `stuName` varchar(40) NOT NULL,
  `refQ1` varchar(100) NOT NULL,
  `refQ2` varchar(100) NOT NULL,
  `refQ3` varchar(100) NOT NULL,
  `refQ4` varchar(100) NOT NULL,
  `refQ5` varchar(100) NOT NULL,
  `refQ6` varchar(100) NOT NULL,
  `refQ7` varchar(100) NOT NULL,
  `refQ8` varchar(100) NOT NULL,
  `refQ9` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sessionID` bigint(1) NOT NULL,
  PRIMARY KEY (`sessionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`sessionID`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `skillmeter`
--

CREATE TABLE IF NOT EXISTS `skillmeter` (
  `phpFileName` varchar(50) NOT NULL,
  `imageFileName` varchar(50) NOT NULL,
  PRIMARY KEY (`phpFileName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillmeter`
--

INSERT INTO `skillmeter` (`phpFileName`, `imageFileName`) VALUES
('page111.php', 'skill-level-1.png'),
('page222.php', 'skill-level-6.png'),
('page3-2.php', 'skill-level-7.png'),
('page3.php', 'skill-level-3.png'),
('page5-2.php', 'skill-level-8.png'),
('page5.php', 'skill-level-4.png'),
('pageSlide-1.php', 'skill-level-0.png'),
('pageslide-2-2.php', 'skill-level-6.png'),
('pageslide-2.php', 'skill-level-2.png'),
('postRef2-2.php', 'skill-level-11.png'),
('postRef2.php', 'skill-level-6.png'),
('ref-2-2.php', 'skill-level-5.png'),
('ref2-3.php', 'skill-level-9.png');

-- --------------------------------------------------------

--
-- Structure for view `qgid`
--
DROP TABLE IF EXISTS `qgid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qgid` AS select `questions`.`qID` AS `qID`,`questions`.`qText` AS `qText`,`questions`.`stuName` AS `stuName`,`questions`.`subTime` AS `subTime`,`questions`.`Apply` AS `Apply`,`questions`.`Organize` AS `Organize`,`questions`.`Vary` AS `Vary`,`questions`.`Probe` AS `Probe`,`questions`.`Connect` AS `Connect`,`questions`.`Compare` AS `Compare`,`questions`.`Implement` AS `Implement`,`questions`.`OTHER` AS `OTHER`,`questions`.`Clarify` AS `Clarify`,`questions`.`partnerComment` AS `partnerComment`,`questions`.`isDebatable` AS `isDebatable`,`questions`.`isdebated` AS `isdebated`,`questions`.`KIType` AS `KIType`,`questions`.`partnerComment2` AS `partnerComment2`,`questions`.`phase` AS `phase`,`chatters`.`name` AS `name`,`chatters`.`seen` AS `seen`,`chatters`.`group_id` AS `group_id`,`chatters`.`pswd` AS `pswd` from (`questions` join `chatters` on((`questions`.`stuName` = `chatters`.`name`)));

-- --------------------------------------------------------

--
-- Structure for view `qidgid`
--
DROP TABLE IF EXISTS `qidgid`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qidgid` AS select `questions`.`qID` AS `qID`,`questions`.`qText` AS `qText`,`questions`.`stuName` AS `stuName`,`questions`.`subTime` AS `subTime`,`questions`.`Apply` AS `Apply`,`questions`.`Organize` AS `Organize`,`questions`.`Vary` AS `Vary`,`questions`.`Probe` AS `Probe`,`questions`.`Connect` AS `Connect`,`questions`.`Compare` AS `Compare`,`questions`.`Implement` AS `Implement`,`questions`.`OTHER` AS `OTHER`,`questions`.`Clarify` AS `Clarify`,`questions`.`partnerComment` AS `partnerComment`,`questions`.`isDebatable` AS `isDebatable`,`chatters`.`name` AS `name`,`chatters`.`seen` AS `seen`,`chatters`.`group_id` AS `group_id`,`chatters`.`pswd` AS `pswd` from (`questions` join `chatters` on((`questions`.`stuName` = `chatters`.`name`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
