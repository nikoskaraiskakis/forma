

CREATE TABLE `BOOKS` (
  `book_name` varchar(100) NOT NULL,
  `book_writer` varchar(100) NOT NULL,
  `book_isbn` varchar(100) NOT NULL,
  `book_ekdoseis` varchar(100) NOT NULL,
  `book_subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `BOOKS` (`book_name`, `book_writer`, `book_isbn`, `book_ekdoseis`, `book_subject`) VALUES
('forma', 'asd', 'asd', 'asd', 'math');



CREATE TABLE `publishers` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `afm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `publishers` (`username`, `password`, `afm`, `email`, `companyname`) VALUES
('geroge123', '12345', '123456789', 'asd@asdq.com', 'asd'),
('asd123', '12345', '', 'asdad@awda.com', '');



CREATE TABLE `students` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `am` varchar(100) NOT NULL,
  `uni` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `students` (`username`, `password`, `email`, `am`, `uni`, `firstname`, `lastname`) VALUES
('asd1234', '12345', '', '', '', '', '');




CREATE TABLE `subjectsPERsemester` (
  `semester` int(100) NOT NULL,
  `subjects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `subjectsPERsemester` (`semester`, `subjects`) VALUES
(1, 'math'),
(1, 'geography'),
(2, 'science');



CREATE TABLE `submissions` (
  `submission_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `submissions` (`submission_id`, `username`, `book`) VALUES
(1, 'asd1234', 'forma'),
(1, 'asd1234', 'forma'),
(1, 'asd1234', 'forma'),
(2, 'asd1234', 'forma'),
(2, 'asd1234', 'forma'),
(2, 'asd1234', 'forma'),
(3, 'asd1234', 'forma');



CREATE TABLE `Users` (
  `User_Name` varchar(20) DEFAULT '/',
  `Pass` varchar(20) DEFAULT '/',
  `User_Type` varchar(20) DEFAULT '/'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `Users` (`User_Name`, `Pass`, `User_Type`) VALUES
('geroge123', '12345', 'PUBLISHER'),
('asd123', '12345', 'PUBLISHER'),
('asd1234', '12345', 'STUDENT');
COMMIT;
