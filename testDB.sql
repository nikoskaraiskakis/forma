
CREATE TABLE `publishers` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `afm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `Users` (
  `User_Name` varchar(20) DEFAULT '/',
  `Pass` varchar(20) DEFAULT '/',
  `User_Type` varchar(20) DEFAULT '/',
  `User_ID` int(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


