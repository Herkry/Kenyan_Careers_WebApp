-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 10:09 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenyan_careers_webapp_db`
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
  `appPassword` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articleratings`
--

CREATE TABLE `articleratings` (
  `articleRatingId` int(11) NOT NULL,
  `articleComment` text,
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
  `articleBody` longtext,
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
  `cvReq1` text,
  `cvReq2` text,
  `cvGenerationDate` date DEFAULT NULL,
  `jobAppId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `empId` int(11) NOT NULL,
  `empName` varchar(30) DEFAULT NULL,
  `empEmail` varchar(30) DEFAULT NULL,
  `empPhone` int(11) DEFAULT NULL,
  `empAddress` varchar(30) DEFAULT NULL,
  `empPassword` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `jobAppId` int(11) NOT NULL,
  `jobAppStatus` varchar(30) DEFAULT NULL,
  `jobAppCV` text,
  `appId` int(11) DEFAULT NULL,
  `jobId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobrequirements`
--

CREATE TABLE `jobrequirements` (
  `jobReqId` int(11) NOT NULL,
  `jobReqDescr` text,
  `jobId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `jobName` varchar(30) DEFAULT NULL,
  `jodDescr` text,
  `jobSalary` double DEFAULT NULL,
  `empId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`jobAppId`),
  ADD KEY `appId` (`appId`),
  ADD KEY `jobId` (`jobId`);

--
-- Indexes for table `jobrequirements`
--
ALTER TABLE `jobrequirements`
  ADD PRIMARY KEY (`jobReqId`),
  ADD KEY `jobId` (`jobId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`),
  ADD KEY `empId` (`empId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicantpastjobs`
--
ALTER TABLE `applicantpastjobs`
  ADD CONSTRAINT `applicantpastjobs_ibfk_1` FOREIGN KEY (`jobAppId`) REFERENCES `jobapplications` (`jobAppId`);

--
-- Constraints for table `applicantqualifications`
--
ALTER TABLE `applicantqualifications`
  ADD CONSTRAINT `applicantqualifications_ibfk_1` FOREIGN KEY (`jobAppId`) REFERENCES `jobapplications` (`jobAppId`);

--
-- Constraints for table `articleratings`
--
ALTER TABLE `articleratings`
  ADD CONSTRAINT `articleratings_ibfk_1` FOREIGN KEY (`articleId`) REFERENCES `articles` (`articleId`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`bloggerId`) REFERENCES `bloggers` (`bloggerId`);

--
-- Constraints for table `cvs`
--
ALTER TABLE `cvs`
  ADD CONSTRAINT `cvs_ibfk_1` FOREIGN KEY (`jobAppId`) REFERENCES `jobapplications` (`jobAppId`);

--
-- Constraints for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD CONSTRAINT `jobapplications_ibfk_1` FOREIGN KEY (`appId`) REFERENCES `applicants` (`appId`),
  ADD CONSTRAINT `jobapplications_ibfk_2` FOREIGN KEY (`jobId`) REFERENCES `jobs` (`jobId`);

--
-- Constraints for table `jobrequirements`
--
ALTER TABLE `jobrequirements`
  ADD CONSTRAINT `jobrequirements_ibfk_1` FOREIGN KEY (`jobId`) REFERENCES `jobs` (`jobId`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`empId`) REFERENCES `employers` (`empId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
