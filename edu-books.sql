-- TOFFAH ATO KWAMENA ARKO
-- 10812592


CREATE DATABASE IF NOT EXISTS `edu-books` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `edu-books`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `b_author` varchar(255) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_download_link` varchar(255) NOT NULL,
  `b_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `b_author`, `b_title`, `b_download_link`, `b_category`) VALUES
(1, 'Ben Klemens', '21st Century C', 'https://drive.google.com/uc?export=download&id=1vODoRqZ4Stv2rAx2_pT5ZIDcepae9JG4', 'Information Technology'),
(2, 'Peter D. Hipson', 'Advanced C', 'https://drive.google.com/uc?export=download&id=1F2q_LPEB3NMD9WJ17tXYpf0u4v3W_ZP7', 'Information Technology'),
(5, 'Stephen Prata', 'C Primer Plus', 'https://drive.google.com/uc?export=download&id=1PXlZbpDU0j-XIS4EXQf8WvuTeg87xcbC', 'Information Technology'),
(10, 'Jesse Liberty', 'Sam\'s Teach Yourself C++ in 24 Hours', 'https://drive.google.com/uc?export=download&id=1YgXlJ7Zc884ssu87DVUJNGySQSrniAdW', 'Information Technology'),
(11, 'Jon Duckett', 'HTML & CSS- Design and Build Websites', 'https://drive.google.com/uc?export=download&id=1ywSO8Cy8wv0KaPyP1elaDjF-kqd8mibE', 'Information Technology'),
(12, 'Stack Overflow', 'Learning C# Language', 'https://drive.google.com/uc?export=download&id=1xFLX5k_SA5GzFFrHWm9gri37eFV31KNR', 'Information Technology'),
(13, 'Steve Oualline', 'Practical C++ Programming', 'https://drive.google.com/uc?export=download&id=1xb7noFms0U0JUsZ4QTFuKVru54eZUfdW', 'Information Technology'),
(14, 'Micheal Knapp', 'HTML and CSS Learn The Fundaments In 7 days', 'https://drive.google.com/uc?export=download&id=12Rz3C3ygsbOnPRuUaEalLIqepdT1kQ5D', 'Information Technology'),
(15, 'Stephen Prata', 'C++ Primer Plus', 'https://drive.google.com/uc?export=download&id=1OAQIUAS0EoT2SHuXRCFMehIlv20uPmWO', 'Information Technology'),
(17, 'Benjamin A. Pierce', 'Genetics: A Conceptual Approach', 'https://drive.google.com/uc?export=download&id=1xc6T2Wgr_SaDwY3YY-X68INayNKvdo6I', 'Biology'),
(18, 'Alberts', 'Molecular Biology of the Cell', 'https://drive.google.com/uc?export=download&id=1AMBS2QohkxP3RUMtMgtUw56nEpmAsNRk', 'Biology'),
(19, 'Jane Flint', 'Principles of Virology', 'https://drive.google.com/uc?export=download&id=1YEIl-zAXlHemKC2JQcTBfZJgaVE7Qna9', 'Biology'),
(20, 'Peter Atkins', 'Atkins’ Physical Chemistry', 'https://drive.google.com/uc?export=download&id=1zwTTCXvkuj_FhUYdXNNXCyXXRkf8ypt0', 'Chemistry'),
(21, 'Paula Yurkanis Bruice', 'Organic Chemistry', 'https://drive.google.com/uc?export=download&id=108eZR1PywG41Eul8wKnANEpbI3hhSJwG', 'Chemistry'),
(22, 'John P. Lowe', 'Quantum Chemistry', 'https://drive.google.com/uc?export=download&id=16QNzBexVpealEybjnwlyNlTBIcXP_4cj', 'Chemistry'),
(23, 'Hans C. Ohanian', 'Physics for Engineers and Scientists', 'https://drive.google.com/uc?export=download&id=1AU5m99sOyXiCfOqwuIMvJbY_xam9il1h', 'Physics'),
(24, 'Douglas C. Giancoli', 'Physics for Scientists & Engineers with Modern Physics ', 'https://drive.google.com/uc?export=download&id=1gaY6CtiTOaJX4NFZK_oZi44syZzluNQE', 'Physics'),
(25, 'Jearl Walker', 'Fundamentals of Physics', 'https://drive.google.com/uc?export=download&id=15r6JLxuJB_npZh8i7KQP04LgDfWvfIax', 'Physics'),
(26, 'Smithsonian', 'Timelines of History: The Ultimate Visual Guide To The Events That Shaped The World', 'https://drive.google.com/uc?export=download&id=1hWD-WxqHvrjX-G8wUr2QR3JOsAYP8Yew', 'History'),
(27, 'John Lewis Gaddis', 'The Landscape of History: How Historians Map the Past', 'https://drive.google.com/uc?export=download&id=1boNr-NRm5wU6zEjV2xpx5KrpNc_JAE9z', 'History'),
(28, 'DK', 'The History Book (Big Ideas Simply Explained)', 'https://drive.google.com/uc?export=download&id=1vcWVZ5hSk7qHsa9ZMXACiv6vD8ty8iaB', 'History'),
(29, 'Murray R. Spiegel', 'Schaum\'s Outlines - Theory and Problems of Advanced Calculus', 'https://drive.google.com/uc?export=download&id=17F4Q0oLTMYw07VdY62WJ1rEMdhe1imMl', 'Mathematics'),
(30, 'Silvanus P. Thompson', 'Calculus Made Easy', 'https://drive.google.com/uc?export=download&id=1DfgAb9fzyqgr_ZtZxvDdbhoZH2MlntD_', 'Mathematics'),
(31, 'K. F. Riley', 'Mathematical Methods for Physics and Engineering', 'https://drive.google.com/uc?export=download&id=160Z1v2irLvP7f8WCD-yX0Qu18tzE7HvF', 'Mathematics'),
(32, 'Ken Schultz', 'Ken Schultz\'s Field Guide to Saltwater Fish ', 'https://drive.google.com/uc?export=download&id=1gcn_ch0UnpL8u0VE4soNC1JB54BlA77d', 'Biology'),
(33, 'Ken Schultz', ' Ken Schultz\'s Field Guide to Freshwater Fish ', 'https://drive.google.com/uc?export=download&id=1y5vkOzXqOw87ydQH2PgRFhonR77z0BUH', 'Biology'),
(35, 'Robert M. Sapolsky', 'Behave The Biology of Humans at Our Best and Worst\r\n', 'https://drive.google.com/uc?export=download&id=1hehTcJ-Q9FM1nYQAy_k9ZBVq2XtK6qtZ', 'Biology'),
(36, 'Kevin Langford', 'Anatomy 101 From Muscles and Bones to Organs and Systems, Your Guide to How the Human Body Works', 'https://drive.google.com/uc?export=download&id=1NwMQKVwgm7P2efHgWrZjHrER_D9E0qm7', 'Biology'),
(37, 'Philip Ball', 'The Elements A Very Short Introduction', 'https://drive.google.com/uc?export=download&id=1AOj4M1vKbD2nDXtTPc5Lyf9_ILrhrYns', 'Chemistry'),
(38, 'Yuval Noah Harari', 'Homo Deus A Brief History of Tomorrow', 'https://drive.google.com/uc?export=download&id=1-N0x-8KVh4410CJXIXO36gSiSdrER5DR', 'History'),
(39, 'Paul Kleinman', 'Philosophy 101 From Plato and Socrates to Ethics and Metaphysics, an Essential Primer on the History of Thought ', 'https://drive.google.com/uc?export=download&id=1W2IuuzCgK9QnRg9NX_Cjo_J-JJh2rTZv', 'History'),
(40, 'Stephen Hawking', 'A Brief History of Time From Big Bang to Black Holes', 'https://drive.google.com/uc?export=download&id=1_Jio36Or9Zqmei0GOiWWyn8Zvk6UE7_I', 'History'),
(41, 'Yuval Noah Harari', 'Sapiens A Brief History of Humankind', 'https://drive.google.com/uc?export=download&id=1rTYKl07g_BuryO00Dw8Z_Y7sEUPWaGLD', 'History'),
(42, 'Amit Saha', 'Doing Math with Python', 'https://drive.google.com/uc?export=download&id=13k5Ztq6gpVVxEcPsEIkTEq3z1NP2oyHd', 'Mathematics'),
(43, 'Jearl Walker', 'Instructor\'s Solution Manual for Fundamentals of Physics', 'https://drive.google.com/uc?export=download&id=1zNdfoxb01oR01loVGAhT1_Hgou6ykUZo', 'Physics ');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `b_author` varchar(255) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `b_author`, `b_title`, `b_publisher`) VALUES
(1, 'Brandon Mull', 'Fablehaven', 'Penguin'),
(2, 'Steven Hawking ', 'Relative Physics', 'Penguin Books');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `email`, `username`, `password`) VALUES
('Frank', 'Brown', 'example2@gmail.com', 'BlackFrank', 'qwerty'),
('Ato', 'Toffah', 'example@gmail.com', 'AKA', 'password'),
('Sai', 'Ren', 'exccsd@exmail.com', 'esai', '1234'),
('Selorm ', 'K', 'gsdgvd@example.com', 'selorm123', '1234'),
('sly', 'fre', 're@gmail.com', 'yxw', '122'),
('Fang', 'Yuan', 'ri@gmail.com', 'HRDV', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_id` (`book_id`),
  ADD UNIQUE KEY `b_download_link` (`b_download_link`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD UNIQUE KEY `request_id` (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emai` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
