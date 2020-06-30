-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 02:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenyan_careers_webapp_db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicantpastjobs`
--

CREATE TABLE `applicantpastjobs` (
  `appPastJobId` int(11) NOT NULL,
  `appPastJobName` varchar(30) DEFAULT NULL,
  `appPastJobYears` double DEFAULT NULL,
  `jobAppId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicantqualifications`
--

CREATE TABLE `applicantqualifications` (
  `appQualId` int(11) NOT NULL,
  `appQualName` varchar(30) DEFAULT NULL,
  `appQualInstitution` varchar(30) DEFAULT NULL,
  `jobAppId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `appId` int(11) NOT NULL,
  `appFname` varchar(30) DEFAULT NULL,
  `appLname` varchar(30) DEFAULT NULL,
  `appDOB` date DEFAULT NULL,
  `appEmail` varchar(30) DEFAULT NULL,
  `appPhone` int(11) DEFAULT NULL,
  `appAddress` varchar(30) DEFAULT NULL,
  `appPassword` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articleratings`
--

CREATE TABLE `articleratings` (
  `articleRatingId` int(11) NOT NULL,
  `articleComment` text DEFAULT NULL,
  `articleRating` double DEFAULT NULL,
  `articleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleId` int(11) NOT NULL,
  `articleTitle` varchar(30) DEFAULT NULL,
  `articleBody` longtext DEFAULT NULL,
  `articleStatus` varchar(30) DEFAULT NULL,
  `bloggerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloggers`
--

CREATE TABLE `bloggers` (
  `bloggerId` int(11) NOT NULL,
  `bloggerFname` varchar(30) DEFAULT NULL,
  `bloggerLname` varchar(30) DEFAULT NULL,
  `bloggerEmail` varchar(30) DEFAULT NULL,
  `bloggerPhone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `cvId` int(11) NOT NULL,
  `cvReq1` text DEFAULT NULL,
  `cvReq2` text DEFAULT NULL,
  `cvGenerationDate` date DEFAULT NULL,
  `jobAppId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `emp_id` int(11) NOT NULL,
  `emp_logo` blob NOT NULL,
  `emp_category` varchar(30) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `emp_location` varchar(30) NOT NULL,
  `emp_address` varchar(10) NOT NULL,
  `emp_url` varchar(30) NOT NULL,
  `emp_password` varchar(500) NOT NULL,
  `emp_verification` varchar(500) DEFAULT NULL,
  `emp_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `JobApplications`
--

CREATE TABLE `JobApplications` (
  `jobAppId` int(11) NOT NULL,
  `jobAppStatus` varchar(30) DEFAULT NULL,
  `jobAppCV` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `JobApplications`
--

INSERT INTO `JobApplications` (`jobAppId`, `jobAppStatus`, `jobAppCV`) VALUES
(1, 'pending', 'eric');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `jobName` varchar(255) NOT NULL,
  `jodDescr` varchar(255) DEFAULT NULL,
  `jobSalary` int(250) DEFAULT NULL,
  `Requirements` varchar(255) DEFAULT NULL,
  `jobLocation` varchar(255) DEFAULT NULL,
  `jobCategory` varchar(255) DEFAULT NULL,
  `jobClosingDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobName`, `jodDescr`, `jobSalary`, `Requirements`, `jobLocation`, `jobCategory`, `jobClosingDate`) VALUES
(10, 'programmer', 'programming', 283343, 'Degree in IT', 'Nairobi', 'Full time', '2020-06-22'),
(11, 'cleaner', 'cleaner', 234234, 'degree', 'Nairobi', 'part time', '2020-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(12, 'Eric', 'Aganze', 'eric@gmail.com', 12, '2020-06-17 08:27:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Vacancies`
--

CREATE TABLE `Vacancies` (
  `id` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Responsibilities` varchar(100) NOT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `Salary` int(100) NOT NULL,
  `Application_Criteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vacancies`
--

INSERT INTO `Vacancies` (`id`, `Category`, `Duration`, `Position`, `Responsibilities`, `Qualifications`, `Salary`, `Application_Criteria`) VALUES
(8, 'dfdf', 'fdfdf', 'dfd', 'df', 'd', 244, 'efeef'),
(11, 'cxvxvx', 'xcvxvxc', 'cvxcv', 'xcvxcv', 'xcv', 9, 'xcxcvx'),
(14, 'asa', 'asa', 'sasas', 'asas', 'ddsadsda', 33, 'was'),
(17, 'idsdbsib', 'asasdihsidhsdhsui', 'sasasdsihudisuhd', 'cbdjcbdsbdhbs', 'sdbshdbshdb', 33, 'wasdsidnsdn'),
(19, 'idsdbsib', 'asasdihsidhsdhsui', 'sasasdsihudisuhd', 'fgvhbjck,', 'wdsdsd\r\nsd\r\nsd\r\nsd\r\nsd\r\nsd\r\nsds\r\nsdsd', 33, 'wasdsidnsdn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicantpastjobs`
--
ALTER TABLE `applicantpastjobs`
  ADD PRIMARY KEY (`appPastJobId`),
  ADD KEY `jobAppId` (`jobAppId`);

--
-- Indexes for table `applicantqualifications`
--
ALTER TABLE `applicantqualifications`
  ADD PRIMARY KEY (`appQualId`),
  ADD KEY `jobAppId` (`jobAppId`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`appId`);

--
-- Indexes for table `articleratings`
--
ALTER TABLE `articleratings`
  ADD PRIMARY KEY (`articleRatingId`),
  ADD KEY `articleId` (`articleId`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleId`),
  ADD KEY `bloggerId` (`bloggerId`);

--
-- Indexes for table `bloggers`
--
ALTER TABLE `bloggers`
  ADD PRIMARY KEY (`bloggerId`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`cvId`),
  ADD KEY `jobAppId` (`jobAppId`);

--
-- Indexes for table `JobApplications`
--
ALTER TABLE `JobApplications`
  ADD PRIMARY KEY (`jobAppId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vacancies`
--
ALTER TABLE `Vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `JobApplications`
--
ALTER TABLE `JobApplications`
  MODIFY `jobAppId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Vacancies`
--
ALTER TABLE `Vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
