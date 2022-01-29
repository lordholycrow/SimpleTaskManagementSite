-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pm_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_descb` varchar(100) NOT NULL,
  `project_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_descb`, `project_date`) VALUES
(1, 'Project Number 1', '  Lorem ipsum dolor sit amet, consectetur adipisci', '2022-01-04'),
(2, 'Project Number 2', 'Sed mattis elementum nunc, a aliquet lacus venenat', '2022-01-04'),
(4, 'Project Number 4', '  Integer eleifend, augue sed efficitur pretium, l', '2022-01-04'),
(5, 'Project number 5', 'Pellentesque non rhoncus', '2022-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `task_short_descb` varchar(100) NOT NULL,
  `task_descb` varchar(500) NOT NULL,
  `task_date` date DEFAULT NULL,
  `is_it_done` bit(2) DEFAULT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_short_descb`, `task_descb`, `task_date`, `is_it_done`, `project_id`) VALUES
(23, 'Project Number 1 Task Number 3', 'Phasellus maximus lorem', 'Integer tristique, lorem vel ultrices aliquet, magna arcu semper ex, dignissim aliquet tortor odio nec lorem. Quisque quis diam eget massa mollis ultrices vitae sit amet urna. Curabitur vestibulum vit', '2022-01-04', b'11', 1),
(25, 'Project Number 1 Task Number 5', 'nec convallis ', 'it amet odio. Nullam euismod diam a mi imperdiet tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed posuere, lorem eu fringilla lacinia, odio justo sce', '2022-01-04', b'11', 1),
(26, 'Project Number 1 Task Number 6', 's sem nulla', ' Aenean sed dictum leo, vel vestibulum orci. Nullam auctor mauris quis libero tempus, nec gravida lorem accumsan. Maecenas in arcu mi. Integer rhoncus sagittis pharetra. Nam et vehicula tellus. Vestib', '2022-01-04', b'11', 1),
(29, 'Project Number 3 Task Number 1', 'Morbi fermentum', 'Vivamus venenatis egestas eros sed semper. Morbi fermentum, lorem at dapibus commodo, purus felis luctus lorem, tristique ullamcorper ex velit non velit. Quisque eleifend odio id vulputate sagittis. V', '2022-01-04', b'11', 3),
(30, 'Project Number 4 Task Number 1', 'Pellentesque pretium', 'Pellentesque pretium, magna sit amet dignissim lobortis, lectus sapien ultricies metus, sit amet facilisis lacus mi vel ligula. Maecenas fermentum viverra mauris in hendrerit. Vestibulum malesuada vul', '2022-01-04', b'11', 4),
(31, 'Project Number 5 Task Number 1', ' pharetra lorem', 'Quisque pharetra lorem et magna suscipit, quis finibus mi dictum. Vivamus feugiat accumsan sem dapibus lobortis. Duis auctor pulvinar dolor, et iaculis nisi tristique in. Ut non pharetra lectus, a tri', '2022-01-04', b'11', 5),
(33, 'random name', 'random namera', 'random namerandom namerandom namerandom namerandom namerandom namerandom namerandom name', '2022-01-04', b'11', 1),
(35, 'blalblblala', 'blalblblalablalblblalablalblblalablalblblala', 'blalblblalablalblblalablalblblalablalblblalablalblblalablalblblalablalblblalablalblblala', '2022-01-04', b'11', 18),
(38, 'asdasdas', 'asdasdasdasdas', 'asdasdasdasda', '2022-01-04', b'11', 1),
(39, 'Project Number 2 Task Number 2', 'asda', 'asddddddddddddddddddddddddddddddddddddddddddddddddd', '2022-01-04', b'11', 2),
(40, 'new task for us 1', 'new task for us 1new task for us 1new task for us 1', 'new task for us 1new task for us 1new task for us 1new task for us 1new task for us 1new task for us 1', '2022-01-04', b'11', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
