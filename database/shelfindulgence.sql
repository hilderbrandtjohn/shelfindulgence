-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2021 at 05:03 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelfindulgence`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci,
  `book_price` decimal(6,2) NOT NULL,
  `seller_name` varchar(225) COLLATE latin1_general_ci DEFAULT NULL,
  `seller_contact` varchar(225) COLLATE latin1_general_ci DEFAULT NULL,
  `username` varchar(225) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`book_isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `seller_name`, `seller_contact`, `username`) VALUES
('1234', 'testing 30', 'buju', '20211119_233155.jpg', 'i love this thing', '50.00', 'Breaniah Ashley A', '0723456789', 'Hilderbrandtjohn'),
('6787', 'rtyy', 'ghjj', '20211119_235540.jpg', 'jkljklhfjkjhekwjh', '34.00', 'job', '1234', 'job'),
('978-0-321-94786-4', 'Learning Mobile App Development', 'Jakob Iversen, Michael Eierman', 'mobile_app.jpg', 'Now, one book can help you master mobile app development with both market-leading platforms: Apple\'s iOS and Google\'s Android. Perfect for both students and professionals, Learning Mobile App Development is the only tutorial with complete parallel coverage of both iOS and Android. With this guide, you can master either platform, or both - and gain a deeper understanding of the issues associated with developing mobile apps.\r\n\r\nYou\'ll develop an actual working app on both iOS and Android, mastering the entire mobile app development lifecycle, from planning through licensing and distribution.\r\n\r\nEach tutorial in this book has been carefully designed to support readers with widely varying backgrounds and has been extensively tested in live developer training courses. If you\'re new to iOS, you\'ll also find an easy, practical introduction to Objective-C, Apple\'s native language.', '20.00', 'John Hilderbrandt', ' 0707218138', 'Hilderbrandjohn'),
('978-0-7303-1484-4', 'Doing Good By Doing Good', 'Peter Baines', 'doing_good.jpg', 'Doing Good by Doing Good shows companies how to improve the bottom line by implementing an engaging, authentic, and business-enhancing program that helps staff and business thrive. International CSR consultant Peter Baines draws upon lessons learnt from the challenges faced in his career as a police officer, forensic investigator, and founder of Hands Across the Water to describe the Australian CSR landscape, and the factors that make up a program that benefits everyone involved. Case studies illustrate the real effect of CSR on both business and society, with clear guidance toward maximizing involvement, engaging all employees, and improving the bottom line. The case studies draw out the companies that are focusing on creating shared value in meeting the challenges of society whilst at the same time bringing strong economic returns.\r\n\r\nConsumers are now expecting that big businesses with ever-increasing profits give back to the community from which those profits arise. At the same time, shareholders are demanding their share and are happy to see dividends soar. Getting this right is a balancing act, and Doing Good by Doing Good helps companies delineate a plan of action for getting it done.', '20.00', 'John Hilderbrandt', '0707218138', 'Hilderbrandtjohn'),
('978-1-118-94924-5', 'Programmable Logic Controllers', 'Dag H. Hanssen', 'logic_program.jpg', 'Widely used across industrial and manufacturing automation, Programmable Logic Controllers (PLCs) perform a broad range of electromechanical tasks with multiple input and output arrangements, designed specifically to cope in severe environmental conditions such as automotive and chemical plants.Programmable Logic Controllers: A Practical Approach using CoDeSys is a hands-on guide to rapidly gain proficiency in the development and operation of PLCs based on the IEC 61131-3 standard. Using the freely-available* software tool CoDeSys, which is widely used in industrial design automation projects, the author takes a highly practical approach to PLC design using real-world examples. The design tool, CoDeSys, also features a built in simulator / soft PLC enabling the reader to undertake exercises and test the examples.', '20.00', 'John Hilderbrandt', '0707218138', ''),
('978-1-1180-2669-4', 'Professional JavaScript for Web Developers, 3rd Edition', 'Nicholas C. Zakas', 'pro_js.jpg', 'If you want to achieve JavaScript\'s full potential, it is critical to understand its nature, history, and limitations. To that end, this updated version of the bestseller by veteran author and JavaScript guru Nicholas C. Zakas covers JavaScript from its very beginning to the present-day incarnations including the DOM, Ajax, and HTML5. Zakas shows you how to extend this powerful language to meet specific needs and create dynamic user interfaces for the web that blur the line between desktop and internet. By the end of the book, you\'ll have a strong understanding of the significant advances in web development as they relate to JavaScript so that you can apply them to your next website.', '20.00', 'Faith Sang', '0723546543 ', ''),
('978-1-44937-019-0', 'Learning Web App Development', 'Semmy Purewal', 'web_app_dev.jpg', 'Grasp the fundamentals of web application development by building a simple database-backed app from scratch, using HTML, JavaScript, and other open source tools. Through hands-on tutorials, this practical guide shows inexperienced web app developers how to create a user interface, write a server, build client-server communication, and use a cloud-based service to deploy the application.\r\n\r\nEach chapter includes practice problems, full examples, and mental models of the development workflow. Ideal for a college-level course, this book helps you get started with web app development by providing you with a solid grounding in the process.', '20.00', 'Faith Sang', '0723546543 ', ''),
('978-1-44937-075-6', 'Beautiful JavaScript', 'Anton Kovalyov', 'beauty_js.jpg', 'JavaScript is arguably the most polarizing and misunderstood programming language in the world. Many have attempted to replace it as the language of the Web, but JavaScript has survived, evolved, and thrived. Why did a language created in such hurry succeed where others failed?\r\n\r\nThis guide gives you a rare glimpse into JavaScript from people intimately familiar with it. Chapters contributed by domain experts such as Jacob Thornton, Ariya Hidayat, and Sara Chipps show what they love about their favorite language - whether it\'s turning the most feared features into useful tools, or how JavaScript can be used for self-expression.', '20.00', 'Faith Sang ', '0723546543 ', ''),
('978-1-4571-0402-2', 'Professional ASP.NET 4 in C# and VB', 'Scott Hanselman', 'pro_asp4.jpg', 'ASP.NET is about making you as productive as possible when building fast and secure web applications. Each release of ASP.NET gets better and removes a lot of the tedious code that you previously needed to put in place, making common ASP.NET tasks easier. With this book, an unparalleled team of authors walks you through the full breadth of ASP.NET and the new and exciting capabilities of ASP.NET 4. The authors also show you how to maximize the abundance of features that ASP.NET offers to make your development process smoother and more efficient.', '20.00', 'Breaniah Ashley', '0714945545', ''),
('978-1-484216-40-8', 'Android Studio New Media Fundamentals', 'Wallace Jackson', 'android_studio.jpg', 'Android Studio New Media Fundamentals is a new media primer covering concepts central to multimedia production for Android including digital imagery, digital audio, digital video, digital illustration and 3D, using open source software packages such as GIMP, Audacity, Blender, and Inkscape. These professional software packages are used for this book because they are free for commercial use. The book builds on the foundational concepts of raster, vector, and waveform (audio), and gets more advanced as chapters progress, covering what new media assets are best for use with Android Studio as well as key factors regarding the data footprint optimization work process and why new media content and new media data optimization is so important.', '20.00', 'Breaniah Ashley ', '0714945545', ''),
('978-1-484217-26-9', 'C++ 14 Quick Syntax Reference, 2nd Edition', '	Mikael Olsson', 'c_14_quick.jpg', 'This updated handy quick C++ 14 guide is a condensed code and syntax reference based on the newly updated C++ 14 release of the popular programming language. It presents the essential C++ syntax in a well-organized format that can be used as a handy reference.\r\n\r\nYou won\'t find any technical jargon, bloated samples, drawn out history lessons, or witty stories in this book. What you will find is a language reference that is concise, to the point and highly accessible. The book is packed with useful information and is a must-have for any C++ programmer.\r\n\r\nIn the C++ 14 Quick Syntax Reference, Second Edition, you will find a concise reference to the C++ 14 language syntax. It has short, simple, and focused code examples. This book includes a well laid out table of contents and a comprehensive index allowing for easy review.', '20.00', 'Breaniah Ashley', '0714945545', ''),
('978-1-49192-706-9', 'C# 6.0 in a Nutshell, 6th Edition', 'Joseph Albahari, Ben Albahari', 'c_sharp_6.jpg', 'When you have questions about C# 6.0 or the .NET CLR and its core Framework assemblies, this bestselling guide has the answers you need. C# has become a language of unusual flexibility and breadth since its premiere in 2000, but this continual growth means there\'s still much more to learn.\r\n\r\nOrganized around concepts and use cases, this thoroughly updated sixth edition provides intermediate and advanced programmers with a concise map of C# and .NET knowledge. Dive in and discover why this Nutshell guide is considered the definitive reference on C#.', '20.00', 'Breaniah Ashley', '0714945545', '');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clubname` varchar(75) NOT NULL,
  `cstate` varchar(75) NOT NULL,
  `ccity` varchar(75) NOT NULL,
  `ctype` varchar(75) NOT NULL,
  `about` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clubname` (`clubname`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `clubname`, `cstate`, `ccity`, `ctype`, `about`) VALUES
(1, 'the brave', 'Nairobi', 'Nairobi', 'multipleread', 'The brave is a book discussion club where we discuss books and how they affect us .we are currently reading Goth.I look forward to a fruitful engagement with all of you.'),
(2, 'grimes', 'kisumu', 'kisumu', 'singleread', NULL),
(3, 'wonderland', 'nairobi', 'nairobi', 'autherled', NULL),
(4, 'forever wonders', 'Nairobi', 'ngong', 'multipleread', NULL),
(5, 'the bald', 'Nairobi', 'Donhom', 'multipleread', NULL),
(6, 'the greatest', 'Nairobi', 'Loresho', 'multipleread', NULL),
(7, 'midnight train', 'Nairobi', 'Nairobi', 'multipleread', 'steady rocking on the midnight train'),
(8, 'this', 'Nairobi', 'Donhom', 'multipleread', 'This is my club'),
(9, 'Children of Thanos', 'Nairobi', 'Nairobi', 'multipleread', 'This is a dedication to the greatest warrior who has ever lived.');

-- --------------------------------------------------------

--
-- Table structure for table `creading`
--

DROP TABLE IF EXISTS `creading`;
CREATE TABLE IF NOT EXISTS `creading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `startdate` date NOT NULL,
  `finishdate` date NOT NULL,
  `note` varchar(225) NOT NULL,
  `clubname` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creading`
--

INSERT INTO `creading` (`id`, `book`, `author`, `startdate`, `finishdate`, `note`, `clubname`) VALUES
(1, '48 laws of power', 'robert greene', '2021-12-08', '2021-12-15', 'we will do chapter to chapter analysis', 'the brave');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `msg` text NOT NULL,
  `clubname` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`, `clubname`) VALUES
(21, 'Hilderbrandtjohn', 'hi', 'this'),
(22, 'job', 'hi', 'this'),
(23, 'job', 'hi there', 'this'),
(20, 'Hilderbrandtjohn', 'buld', 'wonderland'),
(19, 'Hilderbrandtjohn', 'great', 'wonderland'),
(18, 'Hilderbrandtjohn', 'buloks', 'wonderland'),
(17, 'Hilderbrandtjohn', 'g', 'wonderland');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(225) NOT NULL,
  `meetingdate` date NOT NULL,
  `meetingtime` time NOT NULL,
  `meetinglink` varchar(225) NOT NULL,
  `meetinglocation` varchar(75) NOT NULL,
  `clubname` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `bookname`, `meetingdate`, `meetingtime`, `meetinglink`, `meetinglocation`, `clubname`) VALUES
(6, 'The prophecy', '2021-12-16', '02:51:00', 'https://www.google.com', 'online', 'the brave'),
(7, 'the game', '2021-12-24', '23:09:00', 'https://www.google.com', 'online', 'midnight train'),
(8, 'Alibaba and the 40 thieves', '2021-12-09', '15:44:00', 'https://www.google.com', 'online', 'this');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `clubname` varchar(75) NOT NULL,
  `cstate` varchar(75) NOT NULL,
  `ccity` varchar(75) NOT NULL,
  `ctype` varchar(75) NOT NULL,
  `member_type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `clubname`, `cstate`, `ccity`, `ctype`, `member_type`) VALUES
(1, 'johndoe', 'the brave', 'Nairobi', 'Nairobi', 'multipleread', 1),
(2, 'johndoe', 'forever wonders', 'Nairobi', 'ngong', 'multipleread', 1),
(3, 'Hilderbrandtjohn', 'wonderland', 'nairobi', 'nairobi', 'autherled', 1),
(4, 'johndoe', 'the bald', 'Nairobi', 'Donhom', 'multipleread', 1),
(5, 'johndoe', 'the greatest', 'Nairobi', 'Loresho', 'multipleread', 1),
(6, 'johndoe', 'wonderland', 'nairobi', 'nairobi', 'autherled', 2),
(8, 'Hilderbrandtjohn', 'the brave', 'Nairobi', 'Nairobi', 'multipleread', 2),
(10, 'jay', 'the brave', 'Nairobi', 'Nairobi', 'multipleread', 2),
(11, 'jay', 'midnight train', 'Nairobi', 'Nairobi', 'multipleread', 1),
(12, 'roselukes', 'the brave', 'Nairobi', 'Nairobi', 'multipleread', 2),
(13, 'Hilderbrandtjohn', 'this', 'Nairobi', 'Donhom', 'multipleread', 1),
(14, 'job', 'this', 'Nairobi', 'Donhom', 'multipleread', 2),
(15, 'hallowe', 'Children of Thanos', 'Nairobi', 'Nairobi', 'multipleread', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `state`, `city`, `password`) VALUES
(1, 'johndoe@gmail.com', 'Hilderbrandtjohn', 'kisumu', 'bondo', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'johndoe@gmail.com', 'johndoe', 'kisumu', 'bondo', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'jaywolf5180@gmail.com', 'jay', 'Nairobi ', 'Mbagathi', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'roselukes@gmail.com', 'roselukes', 'Nairobi', 'Nairobi', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'jay@gmail.com', 'job', 'Nairobi', 'Nairobi', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'hallowe@gmail.com', 'hallowe', 'Nairobi', 'Nairobi', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Admin@gmail.com', 'Admin', 'Nairobi', 'Nairobi', 'e3afed0047b08059d0fada10f400c1e5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
