-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 07:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcaiwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `AnnouncementID` int(100) NOT NULL,
  `AnnouncementDate` date DEFAULT current_timestamp(),
  `AnnouncementTime` time DEFAULT current_timestamp(),
  `AnnouncementContent` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`AnnouncementID`, `AnnouncementDate`, `AnnouncementTime`, `AnnouncementContent`) VALUES
(4, '2020-04-13', '17:19:11', 'TEST 123 456');

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 8, 1, 'userid'),
(10, '000', 12, 1, 'ExerciseID'),
(12, '000', 34, 1, 'BLOGID'),
(13, '0', 5, 1, 'STUDENTID');

-- --------------------------------------------------------

--
-- Table structure for table `tblexercise`
--

CREATE TABLE `tblexercise` (
  `ExerciseID` int(11) NOT NULL,
  `LessonID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `ChoiceA` text NOT NULL,
  `ChoiceB` text NOT NULL,
  `ChoiceC` text NOT NULL,
  `ChoiceD` text NOT NULL,
  `Answer` varchar(90) NOT NULL,
  `ExercisesDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexercise`
--

INSERT INTO `tblexercise` (`ExerciseID`, `LessonID`, `Question`, `ChoiceA`, `ChoiceB`, `ChoiceC`, `ChoiceD`, `Answer`, `ExercisesDate`) VALUES
(202000011, 13, '1+1', '1 ', '2', '3', '4', '2', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbllesson`
--

CREATE TABLE `tbllesson` (
  `LessonID` int(11) NOT NULL,
  `LessonChapter` varchar(90) NOT NULL,
  `LessonTitle` varchar(90) NOT NULL,
  `FileLocation` text NOT NULL,
  `Category` varchar(90) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllesson`
--

INSERT INTO `tbllesson` (`LessonID`, `LessonChapter`, `LessonTitle`, `FileLocation`, `Category`, `Status`) VALUES
(13, '1', 'Test', 'files/CEILLI_New_Edition_Questions(English-Set_1).pdf', 'Docs', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tblscore`
--

CREATE TABLE `tblscore` (
  `ScoreID` int(11) NOT NULL,
  `LessonID` int(11) NOT NULL,
  `ExerciseID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `NoItems` int(11) NOT NULL DEFAULT 1,
  `Score` int(11) NOT NULL,
  `Submitted` tinyint(1) NOT NULL,
  `SubmittedOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblscore`
--

INSERT INTO `tblscore` (`ScoreID`, `LessonID`, `ExerciseID`, `StudentID`, `StudentName`, `NoItems`, `Score`, `Submitted`, `SubmittedOn`) VALUES
(20, 11, 20200006, 9, '', 1, 0, 1, '2020-04-14 00:39:27'),
(21, 12, 20200009, 9, '', 1, 1, 1, '2020-04-14 00:39:27'),
(22, 13, 202000011, 9, '', 1, 1, 1, '2020-04-14 00:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `StudentID` int(11) NOT NULL,
  `joined` date DEFAULT current_timestamp(),
  `Fname` varchar(90) NOT NULL,
  `Lname` varchar(90) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `ICNum` varchar(12) NOT NULL,
  `Age` int(2) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `MobileNo` varchar(90) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `BusinessType` varchar(30) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `FinishedModule` varchar(100) NOT NULL,
  `OKU` varchar(50) NOT NULL,
  `STUDUSERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL,
  `PROIMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`StudentID`, `joined`, `Fname`, `Lname`, `Gender`, `ICNum`, `Age`, `Address`, `MobileNo`, `Email`, `BusinessType`, `Occupation`, `FinishedModule`, `OKU`, `STUDUSERNAME`, `STUDPASS`, `PROIMAGE`) VALUES
(9, '2020-04-06', 'KENNETH CHIENG', 'SHAO KUI', 'Male', '971103136165', 23, 'ULU SG MERAH', '0165898245', 'test@gmail.com', 'GROCERY STORE', 'OWNER', 'Computer 101', 'NONE', 'ken', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'student_image/racc.PNG'),
(12, '2020-04-08', 'MCO ', 'EXTENDED', 'Male', '123124125363', 25, 'LOT 123', '124164712451', 'test@gmail.com', 'STORE', 'STOREKEEPER', '', '', 'kev', '4b938e38bde8bae37b3669d3b384cac4de62c979', 'student_image/2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentquestion`
--

CREATE TABLE `tblstudentquestion` (
  `SQID` int(11) NOT NULL,
  `ExerciseID` int(11) NOT NULL,
  `LessonID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Question` varchar(90) NOT NULL,
  `CA` varchar(90) NOT NULL,
  `CB` varchar(90) NOT NULL,
  `CC` varchar(90) NOT NULL,
  `CD` varchar(90) NOT NULL,
  `QA` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudentquestion`
--

INSERT INTO `tblstudentquestion` (`SQID`, `ExerciseID`, `LessonID`, `StudentID`, `Question`, `CA`, `CB`, `CC`, `CD`, `QA`) VALUES
(18, 202000011, 13, 9, '1+1', '1 ', '2', '3', '4', '2'),
(19, 202000011, 13, 12, '1+1', '1 ', '2', '3', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` int(11) NOT NULL,
  `NAME` varchar(90) NOT NULL,
  `UEMAIL` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`) VALUES
(1, 'Kenneth Chieng', 'ken', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tblworkstats`
--

CREATE TABLE `tblworkstats` (
  `No` int(100) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `COMPANY` varchar(30) NOT NULL,
  `COMADDRESS` varchar(50) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `DHired_Day` varchar(10) NOT NULL,
  `DHired_Month` varchar(10) NOT NULL,
  `DHired_Year` varchar(10) NOT NULL,
  `DQFR_Day` varchar(10) DEFAULT NULL,
  `DQFR_Month` varchar(10) DEFAULT NULL,
  `DQFR_Year` varchar(10) DEFAULT NULL,
  `ANNUALINCOME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblworkstats`
--

INSERT INTO `tblworkstats` (`No`, `StudentID`, `COMPANY`, `COMADDRESS`, `STATUS`, `DHired_Day`, `DHired_Month`, `DHired_Year`, `DQFR_Day`, `DQFR_Month`, `DQFR_Year`, `ANNUALINCOME`) VALUES
(3, 9, 'TEST', 'LOT123', 'Employed', '1', 'March', '2011', '', '', '', '123121'),
(4, 9, 'TEST2', 'LOT123', 'Employed', '4', 'February', '2012', '', '', '', 'RM 123'),
(5, 12, 'TEST', 'LOT 123', 'Quit', '4', 'March', '2009', '5', 'June', '2009', '123'),
(7, 12, 'TEST', '1245', 'Employed', '3', 'February', '2010', '', '', '', 'RM 214421'),
(8, 12, 'TEST 3', 'LOT 124125', 'Quit', '3', 'February', '2010', '4', 'February', '2011', 'RM 21432'),
(9, 9, 'TEST3', 'LOT 456', 'Retired', '18', 'October', '1994', '31', 'October', '2000', 'RM 43143'),
(10, 9, 'TEST4', 'LRG 123', 'Quit', '19', 'February', '1996', '3', 'March', '2011', 'RM 4343');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`AnnouncementID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblexercise`
--
ALTER TABLE `tblexercise`
  ADD PRIMARY KEY (`ExerciseID`);

--
-- Indexes for table `tbllesson`
--
ALTER TABLE `tbllesson`
  ADD PRIMARY KEY (`LessonID`);

--
-- Indexes for table `tblscore`
--
ALTER TABLE `tblscore`
  ADD PRIMARY KEY (`ScoreID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`StudentID`) USING BTREE;

--
-- Indexes for table `tblstudentquestion`
--
ALTER TABLE `tblstudentquestion`
  ADD PRIMARY KEY (`SQID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `tblworkstats`
--
ALTER TABLE `tblworkstats`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `AnnouncementID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblexercise`
--
ALTER TABLE `tblexercise`
  MODIFY `ExerciseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202000012;

--
-- AUTO_INCREMENT for table `tbllesson`
--
ALTER TABLE `tbllesson`
  MODIFY `LessonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblscore`
--
ALTER TABLE `tblscore`
  MODIFY `ScoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblstudentquestion`
--
ALTER TABLE `tblstudentquestion`
  MODIFY `SQID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblworkstats`
--
ALTER TABLE `tblworkstats`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
