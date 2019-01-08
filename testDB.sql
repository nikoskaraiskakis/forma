
CREATE TABLE `Users` (
  `User_Name` varchar(20) DEFAULT '/',
  `Pass` varchar(20) DEFAULT '/',
  `User_Type` varchar(20) DEFAULT '/',
  `User_ID` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Users` (`User_Name`, `Pass`, `User_Type`, `User_ID`) VALUES
('George', '1234', 'STUDENT', 1),
('JIM', '12345', 'STUDENT', 2);