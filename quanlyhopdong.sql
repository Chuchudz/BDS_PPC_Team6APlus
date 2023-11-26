-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 05:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyhopdong`
--

-- --------------------------------------------------------

--
-- Table structure for table `quanlyhopdong`
--

CREATE TABLE `quanlyhopdong` (
  `ID` varchar(50) NOT NULL,
  `Customer_Name` varchar(255) DEFAULT NULL,
  `Year_Of_Birth` int(11) DEFAULT NULL,
  `SSN` int(11) DEFAULT NULL,
  `Customer_Address` varchar(255) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Property_ID` varchar(50) NOT NULL,
  `Date_Of_Contract` date DEFAULT NULL,
  `Price` int(50) DEFAULT NULL,
  `Deposit` int(50) DEFAULT NULL,
  `Remain` int(50) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quanlyhopdong`
--

INSERT INTO `quanlyhopdong` (`ID`, `Customer_Name`, `Year_Of_Birth`, `SSN`, `Customer_Address`, `Mobile`, `Property_ID`, `Date_Of_Contract`, `Price`, `Deposit`, `Remain`, `Status`) VALUES
('HD23110001', 'Nguyen Van A', 2005, 212121, 'HANOI', 989483922, 'BDS0001', '2023-11-24', 5000000, 3000000, 2000000, 0),
('HD23110002', 'Nguyen Van B', 2005, 212121, 'HANOI', 989483922, 'BDS0002', '2023-11-23', 5000000, 3000000, 2000000, 1),
('HD23110003', 'Nguyen Van C', 2002, 212121, 'HANOI', 98948392, 'BDS0003', '2023-11-23', 5000000, 3000000, 2000000, 0);

--
-- Triggers `quanlyhopdong`
--
DELIMITER $$
CREATE TRIGGER `TG_quanlyhopdong_BEFORE_INSERT_AUTOCODE` BEFORE INSERT ON `quanlyhopdong` FOR EACH ROW BEGIN
    DECLARE NAMHT CHAR(2);
    DECLARE THANGHT CHAR(2);
    DECLARE MHD VARCHAR(50);
    DECLARE MAX_VAL INT;

    -- Lấy hai chữ số cuối của năm và tháng hiện tại
    SET NAMHT = RIGHT(YEAR(CURDATE()), 2);
    SET THANGHT = LPAD(MONTH(CURDATE()), 2, '0');

    -- Nếu bảng đã có dữ liệu, tăng giá trị MAX lên 1, ngược lại set MAX = 1
    SELECT IFNULL(MAX(CAST(RIGHT(ID, 4) AS SIGNED)), 0) + 1 INTO MAX_VAL FROM quanlyhopdong;

    -- Tạo chuỗi mã hợp đồng
    SET MHD = CONCAT('HD', NAMHT, THANGHT, LPAD(MAX_VAL, 4, '0'));

    -- Gán giá trị mới cho cột ID
    SET NEW.ID = MHD;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TG_quanlyhopdong_BEFORE_INSERT_AUTOCODE_Property` BEFORE INSERT ON `quanlyhopdong` FOR EACH ROW BEGIN
    DECLARE MHD VARCHAR(50);
    DECLARE MAX_VAL INT;

    -- Nếu bảng đã có dữ liệu, tăng giá trị MAX lên 1, ngược lại set MAX = 1
    SELECT IFNULL(MAX(CAST(RIGHT(Property_ID, 4) AS SIGNED)), 0) + 1 INTO MAX_VAL FROM quanlyhopdong;

    -- Tạo chuỗi mã hợp đồng
    SET MHD = CONCAT('BDS', LPAD(MAX_VAL, 4, '0'));

    -- Gán giá trị mới cho cột Property_ID
    SET NEW.Property_ID = MHD;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quanlyhopdong`
--
ALTER TABLE `quanlyhopdong`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
