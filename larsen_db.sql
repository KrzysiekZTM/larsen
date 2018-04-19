-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 06:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larsen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `first_name`, `last_name`, `position`) VALUES
(1, 'Jens ', 'Larsen', 'Art Director & Partner');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `job_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `job_description`) VALUES
(1, 'Interships', 'Convince us with your talent. Contact our polish office.'),
(2, 'Back End Developer', 'Convince us with your talent. Contact us. We&#39;re always keen to see new illustrators work.'),
(3, '3D Artist', 'Convince us with your talent. Contact us. We&#39;re always keen to see new  illustrators work ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Branding'),
(2, 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email`
--

CREATE TABLE `contact_email` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_email`
--

INSERT INTO `contact_email` (`id`, `email`) VALUES
(1, 'studio@larsenjorgensen.com'),
(2, 'poland@larsenjorgensen.com'),
(3, 'ireland@larsenjorgensen.com'),
(4, 'norway@larsenjorgensen.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `Country`) VALUES
(1, 'New business'),
(2, 'Lodz, Poland'),
(3, 'Trondheim, Norway'),
(4, 'Applications'),
(5, 'London, United Kingdom'),
(6, 'Beiging, China'),
(7, 'Worldwide');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info_email`
--

CREATE TABLE `contact_info_email` (
  `id` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info_email`
--

INSERT INTO `contact_info_email` (`id`, `info_id`, `email_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info_phones`
--

CREATE TABLE `contact_info_phones` (
  `id` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `phone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info_phones`
--

INSERT INTO `contact_info_phones` (`id`, `info_id`, `phone_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_phones`
--

CREATE TABLE `contact_phones` (
  `id` int(11) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_phones`
--

INSERT INTO `contact_phones` (`id`, `number`) VALUES
(1, '+48 601 208 314');

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

CREATE TABLE `db_users` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text,
  `publish_date` date NOT NULL,
  `lead_text` text NOT NULL,
  `first_text_section` text NOT NULL,
  `second_text_section` text NOT NULL,
  `third_text_section` text NOT NULL,
  `featured_img` varchar(50) NOT NULL,
  `first_img` varchar(50) NOT NULL,
  `second_img` varchar(50) NOT NULL,
  `third_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `publish_date`, `lead_text`, `first_text_section`, `second_text_section`, `third_text_section`, `featured_img`, `first_img`, `second_img`, `third_img`) VALUES
(7, 'Updating the<br>Hansoft brand.', '2018-04-13', 'Over the last decade Hansoft has grown to become a global leader in the agile software space with companies around the world using their tools to collaborate as they transition to agile enterprises.', 'As long as there was only one product (Hansoft) it made sense to use the same name for the company, but as Favro was added to the line-up, using the name Hansoft for both the company and their enterprise application proved confusing to the customers. On top of that the Hansoft logotype also looked somewhat left behind next to Favroâ€™s more vibrant and colorful brand.\r\n<br /><br />\r\nTo sort out the naming confusion Hansoft decided to keep the name Hansoft for the company and to call the enterprise product Hansoft A3. This way the company Hansoft offered two products: Hansoft A3 and Favro. Following this decision we were approached to update both logotypes to clearly separate the two from each other.\r\n<br /><br />\r\nThe old brand consisted of an icon and a custom wordmark together. Since the icon was heavily associated with the application, whereas the wordmark felt more corporate, we decided it was time to separate the two. Our new solution was to keep the icon for the application and the wordmark for the company, but to update both of them for the years to come.', 'To sort out the naming confusion Hansoft decided to keep the name Hansoft for the company and to call the enterprise product Hansoft A3. This way the company Hansoft offered two products: Hansoft A3 and Favro. Following this decision we were approached to update both logotypes to clearly separate the two from each other.\r\n<br /><br />\r\nThe old brand consisted of an icon and a custom wordmark together. Since the icon was heavily associated with the application, whereas the wordmark felt more corporate, we decided it was time to separate the two. Our new solution was to keep the icon for the application and the wordmark for the company, but to update both of them for the years to come.', 'To sort out the naming confusion Hansoft decided to keep the name Hansoft for the company and to call the enterprise product Hansoft A3. This way the company Hansoft offered two products: Hansoft A3 and Favro. Following this decision we were approached to update both logotypes to clearly separate the two from each other.', 'project-bg-4.jpg', 'cowork.jpg', 'for_money.jpg', 'project-bg-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_authors`
--

CREATE TABLE `news_authors` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_authors`
--

INSERT INTO `news_authors` (`id`, `news_id`, `author_id`) VALUES
(5, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Krzysiek', 'krzychu1');

-- --------------------------------------------------------

--
-- Table structure for table `users_role_bridge`
--

CREATE TABLE `users_role_bridge` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_role_bridge`
--

INSERT INTO `users_role_bridge` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `color` varchar(7) NOT NULL,
  `title` text NOT NULL,
  `short_dsc` text NOT NULL,
  `lead_text` text NOT NULL,
  `main_img` varchar(50) NOT NULL,
  `main_img_vert` varchar(20) NOT NULL,
  `description_1` text NOT NULL,
  `description_2` text NOT NULL,
  `img_half_1` varchar(50) NOT NULL,
  `img_half_2` varchar(50) NOT NULL,
  `img_4` varchar(50) NOT NULL,
  `img_5` varchar(50) NOT NULL,
  `img_6` varchar(50) NOT NULL,
  `img_7` varchar(50) NOT NULL,
  `img_8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `color`, `title`, `short_dsc`, `lead_text`, `main_img`, `main_img_vert`, `description_1`, `description_2`, `img_half_1`, `img_half_2`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`) VALUES
(1, '#b1a79e', 'Updating the<Br>Hansoft brand', 'Formbar is a Norwegian glass studio producing handblown tableware, high-end interior products, and glass art.', 'Formbar is a Norwegian glass studio producing handblown tableware, high-end interior products, and glass art. Pulling inspiration from the glass blowing process, Formbar’s logo reflects the organic form and imperfections of glass itself. ', 'case_studies_formbar_1.jpg', 'project-bg-1.jpg', 'To sort out the naming confusion Hansoft decided to keep the name Hansoft for the company and to call the enterprise product Hansoft A3. This way the company Hansoft offered two products: Hansoft A3 and Favro. Following this decision we were approached to update both logotypes to clearly separate the two from each other.<br><br>The old brand consisted of an icon and a custom wordmark together. Since the icon was heavily associated with the application, whereas the wordmark felt more corporate, we decided it was time to separate the two. Our new solution was to keep the icon for the application and the wordmark for the company, but to update both of them for the years to come\r\n', 'To sort out the naming confusion Hansoft decided to keep the name Hansoft for the company and to call the enterprise product Hansoft A3. This way the company Hansoft offered two products: Hansoft A3 and Favro. Following this decision we were approached to update both logotypes to clearly separate the two from each other.\r\n', 'case_studies_formbar_3.png', 'case_studies_formbar_2.jpg', 'case_studies_formbar_4.png', 'case_studies_formbar_5.png', 'case_studies_formbar_6.jpg', 'case_studies_formbar_7.png', 'case_studies_formbar_8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `works_author`
--

CREATE TABLE `works_author` (
  `id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works_author`
--

INSERT INTO `works_author` (`id`, `work_id`, `author_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `works_categories`
--

CREATE TABLE `works_categories` (
  `id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works_categories`
--

INSERT INTO `works_categories` (`id`, `work_id`, `category_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_email`
--
ALTER TABLE `contact_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info_email`
--
ALTER TABLE `contact_info_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info_phones`
--
ALTER TABLE `contact_info_phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_phones`
--
ALTER TABLE `contact_phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_authors`
--
ALTER TABLE `news_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_role_bridge`
--
ALTER TABLE `users_role_bridge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_author`
--
ALTER TABLE `works_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_categories`
--
ALTER TABLE `works_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_email`
--
ALTER TABLE `contact_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_info_email`
--
ALTER TABLE `contact_info_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_info_phones`
--
ALTER TABLE `contact_info_phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_phones`
--
ALTER TABLE `contact_phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_authors`
--
ALTER TABLE `news_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_role_bridge`
--
ALTER TABLE `users_role_bridge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works_author`
--
ALTER TABLE `works_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works_categories`
--
ALTER TABLE `works_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
