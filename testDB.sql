
CREATE TABLE `BOOKS` (
  `book_name` varchar(100) NOT NULL,
  `book_writer` varchar(100) NOT NULL,
  `book_isbn` varchar(100) NOT NULL,
  `book_ekdoseis` varchar(100) NOT NULL,
  `book_subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `BOOKS` (`book_name`, `book_writer`, `book_isbn`, `book_ekdoseis`, `book_subject`) VALUES
('history of science', 'Trivizas', '1324526475642', 'penguin', 'science1'),
('calculus is fun', 'Rouvas', '1324526475232', 'penguin', 'math1'),
('WW2', 'Theodorakis', '1324526495642', 'penguin', 'history1');



CREATE TABLE `publishers` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `afm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `publishers` (`username`, `password`, `afm`, `email`, `companyname`) VALUES
('geroge123', '12345', '123456789', 'asd@asdq.com', 'asd'),
('asd123', '12345', '', 'asdad@awda.com', ''),
('asda123', '12345', '123456789', 'asd@asdq.com', 'asdasd');



CREATE TABLE `publisher_address` (
  `publishers` varchar(100) NOT NULL,
  `adresses` varchar(100) NOT NULL,
  `adress_numbers` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `publisher_address` (`publishers`, `adresses`, `adress_numbers`) VALUES
('penguin', 'kolokotroni', 2);



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
('asd1234', '12345', '', '', '', '', ''),
('asd12345', '123456', '', '', '', '', ''),
('asd34', '1234567', '', '', '', '', ''),
('asd', '', '', '', '', '', ''),
('', '', '', '', '', '', '');



CREATE TABLE `subjectsPERsemester` (
  `semester` int(100) NOT NULL,
  `subjects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `subjectsPERsemester` (`semester`, `subjects`) VALUES
(1, 'math1'),
(1, 'science1'),
(1, 'history1'),
(2, 'math2'),
(2, 'science2'),
(2, 'history2'),
(3, 'math3'),
(3, 'science3'),
(3, 'history3'),
(4, 'math4'),
(4, 'science4'),
(4, 'history4'),
(5, 'math5'),
(5, 'science5'),
(5, 'history5'),
(6, 'math6'),
(6, 'science6'),
(6, 'history6'),
(7, 'math7'),
(7, 'science7'),
(7, 'history7'),
(8, 'math8'),
(8, 'science8'),
(8, 'history8');


CREATE TABLE `submissions` (
  `submission_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `submissions` (`submission_id`, `username`, `book`, `pin`) VALUES
(1, 'asd1234', 'calculus is fun', '6156613'),
(2, 'asd1234', 'calculus is fun', '2629699'),
(2, 'asd1234', 'calculus is fun', '2629699');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `User_Name` varchar(20) DEFAULT '/',
  `Pass` varchar(20) DEFAULT '/',
  `User_Type` varchar(20) DEFAULT '/'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `Users` (`User_Name`, `Pass`, `User_Type`) VALUES
('geroge123', '12345', 'PUBLISHER'),
('asd123', '12345', 'PUBLISHER'),
('asd1234', '12345', 'STUDENT'),
('asd12345', '123456', 'STUDENT'),
('asda123', '12345', 'PUBLISHER'),
('asd34', '1234567', 'STUDENT'),
('asd', '', 'STUDENT'),
('', '', 'STUDENT');
COMMIT;

