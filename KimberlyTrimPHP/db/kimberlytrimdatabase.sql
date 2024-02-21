/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kimberlytrimdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--
GRANT SELECT, INSERT, DELETE, UPDATE
ON kimberlytrimdatabase*
TO kimberlytrim@localhost
IDENTIFIED BY 'kimberlytrimpass';

CREATE TABLE `book_info` (
  `Customer_id` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Check_In` date NOT NULL,
  `Check_Out` date NOT NULL,
  `Room_id` int(11) NOT NULL,
  `Number_of_Adult` int(11) NOT NULL,
  `Number_of_Child` int(11) NOT NULL,
  `Number_of_Room` int(11) NOT NULL,
  `Comment` text NOT NULL,
  `State` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`Customer_id`, `First_Name`, `Last_Name`, `Check_In`, `Check_Out`, `Room_id`, `Number_of_Adult`, `Number_of_Child`, `Number_of_Room`, `Comment`, `State`) VALUES
(29, 'Kimberly', 'Trim', '2021-11-17', '2021-11-27', 7, 1, 0, 2, '', 'Checked In'),
(32, 'Joseph', 'Biden', '2021-12-01', '2021-12-12', 1, 2, 0, 2, '', 'Canceled'),
(51, 'Janet', 'Madison', '2021-10-30', '2021-10-31', 7, 2, 0, 2, '', 'Checked out'),
(52, 'Samantha', 'Jackson', '2021-11-22', '2021-11-23', 6, 1, 1, 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `Customer_id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Street` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`Customer_id`, `Title`, `First_Name`, `Last_Name`, `Street`, `City`, `State`) VALUES
(29, 'Ms.', 'Kimberly', 'Trim', '1 Normal Road', 'Montclair', 'NJ'),
(32, 'Mr.', 'Joseph', 'Biden', '1600 Pennsylvania Ave', 'Washington', 'DC'),
(51, 'Mrs.', 'Janet', 'Madison', '99 Main Street', 'New York', 'NY'),
(52, 'Mrs.', 'Samantha', 'Jackson', '1 Main Street', 'New York', 'NY');

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `Room_id` int(11) NOT NULL,
  `Room_name` text NOT NULL,
  `Price` float NOT NULL,
  `Available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`Room_id`, `Room_name`, `Price`, `Available`) VALUES
(1, 'SOHO ROOM', 279.95, 17),
(2, 'MANHATTAN ROOM', 434.1, 15),
(3, 'LIBERTY SUITE', 199, 3),
(4, 'BARCLAY SUITE', 878.05, 4),
(5, 'HUDSON ROOM', 199.99, 10),
(6, 'OCULUS SUITE', 1092.03, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`Room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `Room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
