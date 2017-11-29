-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 02:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morichbati_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone Number` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Venue ID` varchar(8) NOT NULL,
  `Venue Cater` tinyint(1) NOT NULL,
  `Catering ID` varchar(8) DEFAULT NULL,
  `Photographer ID` varchar(10) DEFAULT NULL,
  `Guest Number` int(10) NOT NULL,
  `Shopping Date` date NOT NULL,
  `Theme Name` varchar(20) DEFAULT NULL,
  `Expense` int(10) NOT NULL,
  `Services` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`ID`, `Name`, `Password`, `Phone Number`, `Email`, `Date`, `Venue ID`, `Venue Cater`, `Catering ID`, `Photographer ID`, `Guest Number`, `Shopping Date`, `Theme Name`, `Expense`, `Services`) VALUES
(3, 'Kashem', '617eb9cdc5dee39804ff0b7ea0047a4a', '01814909768', 'kashem@gmail.com', '2017-11-22', 'ABACUS01', 0, NULL, 'NIJOLCRT', 500, '0000-00-00', 'FLORAL', 0, NULL),
(4, 'Ali Rafe', 'c0ddbe3cb65819d8ff58938723fcaf0e', '01814909768', 'rafe@gmail.com', '2017-11-22', 'UTTCOM01', 1, NULL, 'WDDTMPLT', 800, '0000-00-00', 'FLORAL', 0, NULL),
(5, 'Rahim Khan', 'ffcb39775f49aeff1fac85e5980d3521', '01814909768', 'rahimkhan@gmail.com', '2017-11-22', 'THMSQR01', 1, NULL, 'WDDTMPLT', 900, '0000-00-00', 'CANDLE', 0, NULL),
(10, 'Moumita Asad', '932139ee548a57eccb49c31c37a7d5fd', '01814909768', 'moumita@gmail.com', '2017-11-22', 'SHNMLC01', 0, NULL, NULL, 1200, '0000-00-00', NULL, 0, NULL),
(11, 'Tanjina Akter', 'e90c5718ac514cfabda813ca8faa8911', '01814909768', 'tanjina21@gmail.com', '2017-11-22', 'RAOWCL01', 1, NULL, 'DRMWEAVE', 1500, '0000-00-00', 'FLORAL', 0, NULL),
(12, 'Raisa Khan', '4b8ed057e4f0960d8413e37060d4c175', '01814909768', 'raisa1@gmail.com', '2017-11-22', 'RAOWA01', 0, 'LABONNO', 'NIJOLCRT', 2500, '0000-00-00', 'CANDLE', 0, NULL),
(13, 'Tamanna khan', 'abe7477ac46eef3ec062c13aad00cacc', '01814909768', 'tamannakhan@gmail.com', '2017-11-22', 'PRIANK01', 1, NULL, 'NIJOLCRT', 500, '0000-00-00', 'TRAD', 0, NULL),
(14, 'Abir Mollah', '9ab209d66a9bf2250d7f56cc4b3b125d', '01814909768', 'am45@gmail.com', '2017-11-22', 'BRDOHS01', 0, 'MARJUK01', 'DRMWEAVE', 500, '0000-00-00', 'RURAL', 0, NULL),
(15, 'Rafed Foysal', 'd98776477ebff87bbad3a0d9254d7bc8', '01814909768', 'rafed5@gmail.com', '2017-11-22', 'BASCON01', 0, 'SUBESHA', 'WDDDIARY', 1500, '0000-00-00', 'CANDLE', 0, NULL),
(16, 'Nilu Mamun', '983b520dbf360ea27838aa4dab770d24', '01814909768', 'nmamum5@gmail.com', '2017-11-22', 'ABACUS01', 0, 'SUPRIYA', 'WDDDIARY', 2500, '0000-00-00', 'FLORAL', 0, NULL),
(17, 'Afrina Mahi', '99941a8015cd830b498cd9f0ddf4a500', '01814909768', 'mahi@gmail.com', '2017-11-22', 'ABACUS01', 1, NULL, 'WDDDIARY', 1500, '0000-00-00', 'TRAD', 0, NULL),
(18, 'Galeeb Mia', 'fcc829019057eb99d7319e639bce5028', '01814909768', 'galeeb@gmail.com', '2017-11-22', 'RAOWA01', 1, NULL, 'ISHRATAM', 1500, '0000-00-00', 'TRAD', 0, NULL),
(19, 'Rajib Ahmed', 'ceedaf94ac9610031ab5e582eaf36aba', '01814909768', 'rajib@gmail.com', '2017-11-22', 'RAOWA01', 0, 'MARJUK01', 'ISHRATAM', 1500, '0000-00-00', 'TRAD', 0, NULL),
(20, 'Shuvo Saha', 'dc88e49aa6fca0c4ebf1c359cd6b27e4', '01814909768', 'saha@gmail.com', '2017-11-22', 'SHNMLC01', 0, 'KHALIL', 'ISHRATAM', 900, '0000-00-00', 'CANDLE', 0, NULL),
(21, 'Imtiaz Alam', '7201dbe0965bb4cbbd40ea8a69a65968', '01814909768', 'imtiaz@gmail.com', '2017-11-22', 'UTTCOM01', 1, NULL, 'NIJOLCRT', 1900, '0000-00-00', 'RURAL', 0, NULL),
(22, 'Sanjida Bhuiyan', '501cc81c72e68c7d13d7e06d84130d81', '01814909768', 'sanjida@gmail.com', '2017-11-22', 'THMSQR01', 1, NULL, 'NIJOLCRT', 900, '0000-00-00', 'RURAL', 0, NULL),
(23, 'Satykai Kadir', '974345eee70f5cb1b03b802d100b35bc', '01814909768', 'satyaki@gmail.com', '2017-11-22', 'UTTCOM01', 1, NULL, 'WDDTMPLT', 1700, '0000-00-00', 'RURAL', 0, NULL),
(24, 'Sajed Ullah', 'eddcf9b4b3dbf333f83a522458720e1f', '01814909768', 'sajed@gmail.com', '2017-11-22', 'SHNKNJ01', 1, NULL, 'NIJOLCRT', 1900, '0000-00-00', 'FLORAL', 0, NULL),
(25, 'Rabbi Karim', 'b702d22b624670eeb449ae15c367f063', '01814909768', 'rabbi@gmail.com', '2017-11-22', 'UTTCOM01', 1, NULL, 'NIJOLCRT', 2000, '0000-00-00', 'RURAL', 0, NULL),
(26, 'Sayem Ali', '709ca0cd9eb443ba7bb7e3bb58e69706', '01814909768', 'sayem@gmail.com', '2017-11-22', 'ABACUS01', 1, NULL, 'NIJOLCRT', 1000, '0000-00-00', 'TRAD', 0, NULL),
(33, 'Potol2', '900150983cd24fb0d6963f7d28e17f72', '123', 's.f.huq11@gmail.com', '', 'PRIANK01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(37, 'Potol2', 'ec02c59dee6faaca3189bace969c22d3', '2q', 'bsse0732@iit.du.ac.bd', '02/23/2018', 'ABACUS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(38, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'aquibazmain123@gmail.com', '', 'SHNMLC01', 0, NULL, 'DRMWEAVE', 1500, '0000-00-00', 'FLORAL', 0, NULL),
(39, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'b@gmail.com', '', 'ABACUS01', 0, NULL, 'ISHRATAM', 500, '0000-00-00', NULL, 0, NULL),
(40, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'a@gmail.com', '', 'ABACUS01', 0, 'KHALIL', NULL, 500, '0000-00-00', NULL, 0, NULL),
(41, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'c@gmail.com', '', 'ABACUS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(42, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', '69@gmail.com', '', 'BRDOHS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(43, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'abcdddd@gmail.com', '', 'BRDOHS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(44, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'abc@gmail.comd', '', 'BRDOHS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(45, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'asddas@f', '', 'BRDOHS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(46, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', '1abc@gmail.com', '', 'BRDOHS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(48, 'Aquib Azmain', '8fa985e47a9d6f1bd3bbb75427442f6b', '01819664793', 'aquibazmain123@gmail.comw', '02/24/2018', 'BRDOHS01', 0, NULL, NULL, 500, '0000-00-00', NULL, 0, NULL),
(50, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', '1234@g', '02/27/2018', 'BRDOHS01', 0, 'LABONNO', 'DRMWEAVE', 500, '0000-00-00', NULL, 0, NULL),
(53, 'Morichbati Admin', 'b15f52c3b1518fd20a870b2a39d902ee', '01879182721', 'morichbatiadmin@gmail.com', '', 'ABACUS01', 0, NULL, NULL, 0, '0000-00-00', NULL, 0, NULL),
(54, 'Zarf', '900150983cd24fb0d6963f7d28e17f72', '01819664793', 'adaada@gmail.com', '02/27/2018', 'BRDOHS01', 0, 'SUBESHA', NULL, 2000, '0000-00-00', NULL, 0, NULL),
(55, 'Aquib Azmain', '35da272a34fb216670e69fc079888697', '01819664793', 'bsse0718@iit.du.ac.bd', '02/28/2018', 'BASCON01', 0, 'SUBESHA', 'NIJOLCRT', 2000, '0000-00-00', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicantinfo`
--

CREATE TABLE `applicantinfo` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL,
  `Date` varchar(200) DEFAULT NULL,
  `VenueCaterer` int(10) DEFAULT NULL,
  `Caterer` varchar(200) NOT NULL,
  `Photographer` varchar(200) NOT NULL,
  `Guest` varchar(200) NOT NULL,
  `ShoppingDate` varchar(200) NOT NULL,
  `Theme` varchar(200) NOT NULL,
  `Cost` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicantinfo`
--

INSERT INTO `applicantinfo` (`ID`, `Name`, `Email`, `Password`, `PhoneNumber`, `Venue`, `Date`, `VenueCaterer`, `Caterer`, `Photographer`, `Guest`, `ShoppingDate`, `Theme`, `Cost`) VALUES
(23, 'Aquib Azmain', 'aquibazmain123@gmail.com', 'iit123', '01819664793', 'Baridhara DOHS, Convention Centre', '0000-00-00', NULL, '', '', '', '0000-00-00', '', NULL),
(27, 'Aquib Azmain', 'aquibazmain123@gmail.com', '35da272a34fb216670e69fc079888697', '01771376043', 'Baridhara DOHS, Convention Centre', '02/26/2018', NULL, '', '', '', '', '', NULL),
(28, 'Aquib Azmain', 'aquibazmain123@gmail.com', '35da272a34fb216670e69fc079888697', '123445', 'Abacus Convention Center', '02/28/2018', NULL, '', '', '', '', '', NULL),
(29, 'Aquib Azmain', 'aquibazmain123@gmail.com', '35da272a34fb216670e69fc079888697', '877', 'Abacus Convention Center', '02/27/2018', NULL, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_service`
--

CREATE TABLE `applicant_service` (
  `ApplicantID` int(11) NOT NULL,
  `ServiceName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `ID` varchar(8) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Discount` double NOT NULL,
  `Rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`ID`, `Name`, `Address`, `Discount`, `Rating`) VALUES
('AZADPRDC', 'Azad Products', '55, Purana Paltan, Dhaka', 10, 0),
('CARTPRDC', 'Cartoon Products', 'New Market, Shop:319, Dhaka', 25, 0),
('IDEALPRD', 'Ideal Products', '55, Purana Paltan, Dhaka', 15, 0),
('ROYALPRD', 'Royal Products', 'House No:1, Road No:2, Sector:11 Uttara, \r\n Dhaka', 10, 0),
('UPHRPRDC', 'Upohar Products', '55, Purana Paltan, Dhaka', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `ID` varchar(8) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Min Price` int(10) NOT NULL,
  `Max Price` int(10) NOT NULL,
  `Rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`ID`, `Name`, `Min Price`, `Max Price`, `Rating`) VALUES
('KHALIL', 'Khalil and Sons Catering', 30000, 150000, 3.4),
('LABONNO', 'Labonno Caterers Ltd.', 70000, 200000, 3.9),
('MARJUK01', 'Marjuk Catering Service', 50000, 150000, 2.3),
('SUBESHA', 'Subesha Catering Service', 50000, 200000, 4.5),
('SUPRIYA', 'Supriya Caterers', 45000, 130000, 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `jeweller`
--

CREATE TABLE `jeweller` (
  `ID` varchar(8) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Discount` double NOT NULL,
  `Rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeweller`
--

INSERT INTO `jeweller` (`ID`, `Name`, `Address`, `Discount`, `Rating`) VALUES
('AESTHBD', 'Aesthetic Bangladesh Jewellery', 'Urban Centre Point, New Eskaton Road, Dhaka, Bangladesh', 15, 0),
('AMINJWL', 'Amin Jewellers', '7/10, Zarifa Dey Nai, Dhaka, Bangladesh', 15, 0),
('APANJWL', 'Apan Jewellers', '3,4, Simanto Square, 1205, Dhaka 1209, Bangladesh', 18, 0),
('DMNDWRLD', 'Diamond World', '68 Gulshan Avenue, Dhaka 1215, Bangladesh', 15, 0),
('DMNDWRLT', 'Diamond world limited', 'Rangs Nasim Square, Plot-275/D, Road-27 (Old), Rd No.16, Dhaka 1209, Bangladesh', 20, 0),
('RIPNWRLD', 'Ripon store', '1/3 Begum Bazar, Dhaka 1211, Bangladesh', 22, 0),
('ROYLDMND', 'Royal Diamond', '45 Gulshan Avenue,Navana Tower Shopping Mall,Shop no:11-12-13 (1st floor),Dhaka, Bangladesh', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `ID` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Rating` double NOT NULL,
  `Link` varchar(50) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`ID`, `Name`, `Rating`, `Link`, `Photo`) VALUES
('DRMWEAVE', 'Dream Weaver Photography', 0, 'zarifadeynai.com', 'dream.jpg'),
('ISHRATAM', 'Ishrat Amin Photography', 0, 'zarifadeynai.com', 'israt.jpg'),
('NIJOLCRT', 'Nijol creative photography', 0, 'zarifadeynai.com', 'nijol.jpg'),
('WDDDIARY', 'Wedding Diary Photography', 0, 'zarifadeynai.com', 'weddingDiary.jpg'),
('WDDTMPLT', 'Wedding Templates', 0, 'zarifadeynai.com', 'tem.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Name` varchar(50) NOT NULL,
  `MinPrice` int(10) NOT NULL,
  `MaxPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Name`, `MinPrice`, `MaxPrice`) VALUES
('Catering Service', 10000, 100000),
('Flower Decoration', 5000, 20000),
('Invitation Card Recommendations', 1000, 5000),
('Jeweller Recommendations', 1000, 10000),
('Palki & Horse Decoration', 10000, 20000),
('Photography & Cinematography', 25000, 150000),
('Shopping Guide', 10000, 20000),
('Theme', 10000, 100000),
('Venue', 25000, 1300000),
('Wedding Dessert Decoration', 10000, 30000),
('Wedding Entertainment', 10000, 30000),
('Wedding Music', 10000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `Name` varchar(20) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` int(10) NOT NULL,
  `Rating` double NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`Name`, `Description`, `Price`, `Rating`, `Photo`) VALUES
('CANDLE', 'candle', 200000, 4.35, 'candle.jpg'),
('FLORAL', 'Floral', 300000, 4.5, 'flora.jpg'),
('RURAL', 'rural', 300000, 4.23, 'rural.jpg'),
('TRAD', 'traditional', 200000, 4.75, 'traditional.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `ID` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Rating` double NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact Number` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Price` int(10) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Package Description` varchar(500) DEFAULT NULL,
  `Catering Min Price` int(10) NOT NULL,
  `Catering Max Price` int(10) NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`ID`, `Name`, `Rating`, `Address`, `Contact Number`, `Email`, `Price`, `Area`, `Package Description`, `Catering Min Price`, `Catering Max Price`, `Photo`) VALUES
('ABACUS01', 'Abacus Convention Center', 50, 'Paribag, Dhaka, Bangladesh', '01663215478', 'abacusConvention@gmail.com', 110000, 'Paribag', 'ABCD', 140000, 250000, 'abacus.jpg'),
('adad', 'asd', 0, 'asd', '23', 'sad', 2, 'asd', 'adsda', 12, 1212, 'images/14917038_878954122236191_5075692158572983805_o.jpg'),
('adadqw', 'asdwqq', 0, 'asd', '23', 'sad', 2, 'asd', 'adsda', 12, 1212, 'images_venue/14859666_878953848902885_1328581705829496896_o.jpg'),
('BASCON01', 'Bashundhara Convention Center', 30, 'Bashundhara Convention Center Road, Dhaka, Bangladesh', '01767679000', 'BashundharaCen@gmail.com', 120000, 'Bashundhara', 'ABCD', 500000, 850000, 'baridharabashundhara.jpg'),
('BRDOHS01', 'Baridhara DOHS, Convention Centre', 40, 'Baridhara DOHS Parishad, DOHS Baridhara, Dhaka, Bangladesh', '01766666876', 'baridharaDohs@gmail.com', 60000, 'Baridhara', 'ABCD', 420000, 750000, 'bashundharaDohsjpg.jpg'),
('PRIANK01', 'Priyanka Community Centre', 60, '52/1, Rd No. 3A, Dhanmondi, Dhaka, Bangladesh', '01632457809', 'priyankaCenter12345@gmail.com', 80000, 'Dhanmondi', 'ABCD', 304000, 520000, 'priyanka.jpg'),
('RAOWA01', 'Raowa Convention Hall', 0, 'Mohakhali DOHS 1206 Dhaka,Bangladesh', '01716598143', 'rawaconv@gmail.com', 150000, 'Mohakhali', 'ABCD', 750000, 1350000, 'RaowaConvention1.jpg'),
('RAOWCL01', 'Raowa Club', 0, 'DOHS Bypass, Dhaka 1212, Bangladesh', '01813344956', 'raowaClub123@gmail.com', 250000, 'Mohakhali', 'ABCD', 1600000, 6000000, 'raowaClub.jpg'),
('SHNKNJ01', 'Shena kunja', 0, 'Cantonment, Dhaka, Bangladesh', '01719090787', 'shena_kunja@gmail.com', 400000, 'Cantonment', 'ABCD', 1800000, 6000000, 'shenaKunja1.jpg'),
('SHNMLC01', 'Shena Malancha', 0, 'Naval Headquarters, Airport Road, Dhaka, Bangladesh', '01813344956', 'malanchaShena@gmail.com', 350000, 'Cantonment', 'ABCD', 1500000, 6000000, 'shenaMalancha.jpg'),
('THMSQR01', 'Thames Square', 0, '3rd-6th Floor, 754, Satmasjid Road, Dhaka 1209, Bangladesh', '01633880175', 'thamessquare34@gmail.com', 50000, 'Satmasjid Road', 'ABCD', 480000, 1080000, 'shenaKunja2.jpg'),
('UTTCOM01', 'Uttara Community Center', 0, 'House #20, Road #13/D, Uttara, Dhaka 1230, Bangladesh', '01943435590', 'uttaraCenter12345@gmail.com', 55000, 'Uttara', 'ABCD', 165000, 275000, 'uttara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `venue_date`
--

CREATE TABLE `venue_date` (
  `Date` date NOT NULL,
  `VenueID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_date`
--

INSERT INTO `venue_date` (`Date`, `VenueID`) VALUES
('2018-02-24', 'ABACUS01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Venue ID` (`Venue ID`),
  ADD KEY `Catering ID` (`Catering ID`),
  ADD KEY `Ph Package ID` (`Photographer ID`),
  ADD KEY `Theme ID` (`Theme Name`);

--
-- Indexes for table `applicantinfo`
--
ALTER TABLE `applicantinfo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`);

--
-- Indexes for table `applicant_service`
--
ALTER TABLE `applicant_service`
  ADD PRIMARY KEY (`ApplicantID`,`ServiceName`),
  ADD KEY `Applicant ID` (`ApplicantID`),
  ADD KEY `Service ID` (`ServiceName`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jeweller`
--
ALTER TABLE `jeweller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `venue_date`
--
ALTER TABLE `venue_date`
  ADD PRIMARY KEY (`Date`,`VenueID`),
  ADD KEY `Venue ID` (`VenueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `applicantinfo`
--
ALTER TABLE `applicantinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `applicant_service`
--
ALTER TABLE `applicant_service`
  MODIFY `ApplicantID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`Venue ID`) REFERENCES `venue` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_ibfk_2` FOREIGN KEY (`Catering ID`) REFERENCES `catering` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_ibfk_4` FOREIGN KEY (`Theme Name`) REFERENCES `theme` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_ibfk_5` FOREIGN KEY (`Photographer ID`) REFERENCES `photographer` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_service`
--
ALTER TABLE `applicant_service`
  ADD CONSTRAINT `applicant_service_ibfk_1` FOREIGN KEY (`ServiceName`) REFERENCES `service` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_service_ibfk_2` FOREIGN KEY (`ApplicantID`) REFERENCES `applicant` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `venue_date`
--
ALTER TABLE `venue_date`
  ADD CONSTRAINT `venue_date_ibfk_1` FOREIGN KEY (`VenueID`) REFERENCES `venue` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
