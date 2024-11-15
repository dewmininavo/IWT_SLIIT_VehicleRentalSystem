
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";




-- Database: `GoGoCars`

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NAME_ON_CARD` varchar(255) NOT NULL,
  `CREDIT_CARD_NUMBER` int(16) NOT NULL,
  `EXP_MONTH_YEAR` varchar(50) NOT NULL,
  `CVV` int(3) NOT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`First_Name`, `Last_Name`, `Email`, `NAME_ON_CARD`, `CREDIT_CARD_NUMBER`, `EXP_MONTH_YEAR`, `CVV`, `ID`) VALUES
('Chathu', 'Navod', 'chathushkanavod11@gmail.com', 'navod', 2147483647, '2023-12', 122, 1),
('roxayor', 'bookspre', 'roxayor809@bookspre.com', 'roxayor', 2147483647, '2023-12', 545, 2),
('DNV Muthumukummara', 'Dineth Muthukumara', 'chathushkawithanage@gmail.com', 'abc', 2147483647, '2023-12', 123, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

