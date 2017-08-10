-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2017 at 09:31 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_codebee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cb_company`
--

CREATE TABLE `cb_company` (
  `comp_id` int(11) NOT NULL,
  `comp_identity` varchar(100) NOT NULL,
  `comp_name` varchar(150) NOT NULL,
  `comp_address` varchar(150) NOT NULL,
  `comp_status` int(50) NOT NULL,
  `comp_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_company`
--

INSERT INTO `cb_company` (`comp_id`, `comp_identity`, `comp_name`, `comp_address`, `comp_status`, `comp_timestamp`) VALUES
(1, '', 'asdasd', '', 0, '2017-08-10 08:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `cb_contact`
--

CREATE TABLE `cb_contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(150) NOT NULL,
  `cont_status` varchar(50) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `cont_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_contact`
--

INSERT INTO `cb_contact` (`cont_id`, `cont_name`, `cont_status`, `comp_id`, `cont_timestamp`) VALUES
(1, 'จอนห์ สมิท', 'active', 1, '2017-07-07 07:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `cb_email`
--

CREATE TABLE `cb_email` (
  `email_id` int(11) NOT NULL,
  `email_address` varchar(150) NOT NULL,
  `email_status` varchar(50) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `email_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_email`
--

INSERT INTO `cb_email` (`email_id`, `email_address`, `email_status`, `cont_id`, `email_timestamp`) VALUES
(1, 'john_smith@gmail.co.th', 'active', 1, '2017-07-07 07:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `cb_invoice`
--

CREATE TABLE `cb_invoice` (
  `inv_id` int(11) NOT NULL,
  `inv_no` varchar(100) NOT NULL,
  `inv_file_path` varchar(150) NOT NULL,
  `inv_file_receipt` varchar(150) NOT NULL,
  `inv_status` varchar(50) NOT NULL,
  `quo_id` int(11) NOT NULL,
  `inv_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_member`
--

CREATE TABLE `cb_member` (
  `member_id` int(11) NOT NULL,
  `member_uid` varchar(200) NOT NULL,
  `member_email` varchar(150) NOT NULL,
  `member_password` varchar(200) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_type` varchar(50) NOT NULL,
  `member_image` varchar(200) NOT NULL,
  `member_status` varchar(50) NOT NULL,
  `member_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_member`
--

INSERT INTO `cb_member` (`member_id`, `member_uid`, `member_email`, `member_password`, `member_name`, `member_type`, `member_image`, `member_status`, `member_timestamp`) VALUES
(1, '0', 'admin_ss@gmail.com', 'admin_ss', 'ss', 'superadmin', '', 'active', '2017-06-28 02:50:47'),
(2, '0', 'admin_ize@gmail.com', 'admin_ize', 'ize', 'superadmin', '', 'active', '2017-06-28 02:52:33'),
(3, '0', 'admin@a', 'admin', 'admin', 'admin', '', 'active', '2017-08-07 08:21:38'),
(4, '0', '2elation.z@gmail.com', 'admin', 'sarawut', 'admin', '', 'active', '2017-08-08 02:31:54'),
(5, '0', 'sacha@gmail.com', 'sacha', 'sacha', 'superadmin', 'uploads/fd9825d504e5184ff54fe58cae2f4623.jpg', 'active', '2017-08-08 03:35:19'),
(6, '0', 'nisha.ns@gmail.com', 'nisha', 'nisha', 'member', 'uploads/6838081e69588abb8b6d74cb98395364.jpg', 'unactive', '2017-08-08 06:04:06'),
(13, '1614231051921348', 'iamizeland@gmail.com', '', 'Taneeya Natepomarat', 'superadmin', 'http://graph.facebook.com/1614231051921348/picture?type=normal', 'active', '2017-08-10 07:32:56'),
(14, '10209668579207055', '2elation.z@gmail.com', '', 'Sarawut Ekakool', 'superadmin', 'http://graph.facebook.com/10209668579207055/picture?type=normal', 'active', '2017-08-10 07:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `cb_quotation`
--

CREATE TABLE `cb_quotation` (
  `quo_id` int(11) NOT NULL,
  `quo_no` varchar(50) NOT NULL,
  `quo_file_path` varchar(200) NOT NULL,
  `quo_description` longtext NOT NULL,
  `quo_status` varchar(50) NOT NULL,
  `quo_type_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `quo_date` date NOT NULL,
  `quo_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_quotation_type`
--

CREATE TABLE `cb_quotation_type` (
  `quo_type_id` int(11) NOT NULL,
  `quo_type_name` varchar(100) NOT NULL,
  `quo_type_status` varchar(50) NOT NULL,
  `quo_type_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_quotation_update`
--

CREATE TABLE `cb_quotation_update` (
  `quo_update_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `quo_id` int(11) NOT NULL,
  `quo_update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_quo_cont`
--

CREATE TABLE `cb_quo_cont` (
  `quo_cont_id` int(11) NOT NULL,
  `quo_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `quo_cont_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_telephone`
--

CREATE TABLE `cb_telephone` (
  `tel_id` int(11) NOT NULL,
  `tel_number` varchar(100) NOT NULL,
  `tel_status` varchar(50) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `tel_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cd_document`
--

CREATE TABLE `cd_document` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `doc_file` varchar(150) NOT NULL,
  `quo_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `doc_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_contact`
-- (See below for the actual view)
--
CREATE TABLE `v_contact` (
`cont_name` varchar(150)
,`email_address` varchar(150)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_test`
-- (See below for the actual view)
--
CREATE TABLE `v_test` (
`cont_name` varchar(150)
);

-- --------------------------------------------------------

--
-- Structure for view `v_contact`
--
DROP TABLE IF EXISTS `v_contact`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_contact`  AS  (select `ct`.`cont_name` AS `cont_name`,`em`.`email_address` AS `email_address` from (`cb_contact` `ct` join `cb_email` `em` on((`ct`.`cont_id` = `em`.`cont_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_test`
--
DROP TABLE IF EXISTS `v_test`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_test`  AS  select `cb_contact`.`cont_name` AS `cont_name` from `cb_contact` union select `cb_email`.`email_address` AS `email_address` from `cb_email` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cb_company`
--
ALTER TABLE `cb_company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `cb_contact`
--
ALTER TABLE `cb_contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `cb_email`
--
ALTER TABLE `cb_email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `cb_invoice`
--
ALTER TABLE `cb_invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `cb_member`
--
ALTER TABLE `cb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `cb_quotation`
--
ALTER TABLE `cb_quotation`
  ADD PRIMARY KEY (`quo_id`);

--
-- Indexes for table `cb_quotation_type`
--
ALTER TABLE `cb_quotation_type`
  ADD PRIMARY KEY (`quo_type_id`);

--
-- Indexes for table `cb_quotation_update`
--
ALTER TABLE `cb_quotation_update`
  ADD PRIMARY KEY (`quo_update_id`);

--
-- Indexes for table `cb_quo_cont`
--
ALTER TABLE `cb_quo_cont`
  ADD PRIMARY KEY (`quo_cont_id`);

--
-- Indexes for table `cb_telephone`
--
ALTER TABLE `cb_telephone`
  ADD PRIMARY KEY (`tel_id`);

--
-- Indexes for table `cd_document`
--
ALTER TABLE `cd_document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cb_company`
--
ALTER TABLE `cb_company`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cb_contact`
--
ALTER TABLE `cb_contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cb_email`
--
ALTER TABLE `cb_email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cb_invoice`
--
ALTER TABLE `cb_invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_member`
--
ALTER TABLE `cb_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cb_quotation`
--
ALTER TABLE `cb_quotation`
  MODIFY `quo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_quotation_type`
--
ALTER TABLE `cb_quotation_type`
  MODIFY `quo_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_quotation_update`
--
ALTER TABLE `cb_quotation_update`
  MODIFY `quo_update_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_quo_cont`
--
ALTER TABLE `cb_quo_cont`
  MODIFY `quo_cont_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_telephone`
--
ALTER TABLE `cb_telephone`
  MODIFY `tel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cd_document`
--
ALTER TABLE `cd_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
