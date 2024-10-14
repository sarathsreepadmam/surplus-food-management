
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Address`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 5689784592, 'H-911, Vihar Soraj Nagar New Delhi-110011', 'admin@gmail.com', 'admin123', '2020-07-09 11:58:35');

-- --------------------------------------------------------


CREATE TABLE `tbldonors` (
  `ID` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mobile` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `mdesc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tbldonors` (`ID`, `name`, `CreationDate`, `mobile`, `city`, `area`, `address`, `type`, `specialist`, `mdesc`) VALUES
(3, 'Test2', '2023-03-06 11:06:16', '9942133944', 'Coimbatore', 'Ramnagar', 'ewfr', 'Old Age Home', NULL, 'asd');

-- --------------------------------------------------------


CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `type` int(5) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tbluser` (`ID`, `name`, `mobile`, `email`, `password`, `type`, `RegDate`) VALUES
(1, 'Test1', 9942133944, 'test@gmail.com', '123456', 1, '2023-03-06 08:28:07');


ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tbldonors`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `tbldonors`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

