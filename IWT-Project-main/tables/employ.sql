

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


-- Database: `GoGoCars`

----------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`firstname`, `lastname`, `email`, `username`, `password`, `id`) VALUES
('Chathushka', 'Navod', 'chathushkanavod11@gmail.com', 'emp-navod', '1234', 11),
('Gagana', 'Yushan', 'gagana@gmail.com', 'emp-gagana', '1234', 12),
('Yashitha', 'Ranod', 'yashitha@gmail.com', 'emp-ranod', '1234', 13),
('Ayani', 'Jayaweera', 'ayani@gmail.com', 'emp-ayani', '1234', 14),
('Hashini', 'Tharushika', 'hashini@gmail.com', 'emp-hashini', '1234', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employ`
--
ALTER TABLE `employ`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

