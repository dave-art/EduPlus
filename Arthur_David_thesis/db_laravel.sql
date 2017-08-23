-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 23, 2017 at 09:39 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('haaf.robert@gmail.com', 'a4e664a7d7e505f74a75a5f25f9ae1748ebeed32d737fbdd21ae668ffd739027', '2016-11-20 00:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignments`
--

CREATE TABLE `tbl_assignments` (
`assignments_id` int(4) unsigned NOT NULL,
  `assignments_name` varchar(50) NOT NULL,
  `assignments_file` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assignments`
--

INSERT INTO `tbl_assignments` (`assignments_id`, `assignments_name`, `assignments_file`) VALUES
(5, 'test', 'Test_Upload.pdf'),
(6, 'Nutrition Project 1 Rubric', 'Test_Upload.pdf'),
(7, 'Test Review', 'Test_Upload.pdf'),
(8, 'Project One', 'Test_Upload.pdf'),
(9, 'Oceans Review', 'Test_Upload.pdf'),
(10, 'picture test', 'Artboard 2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classes`
--

CREATE TABLE `tbl_classes` (
`classes_id` int(4) unsigned NOT NULL,
  `classes_name` varchar(50) NOT NULL,
  `classes_grade` varchar(25) NOT NULL,
  `classes_news` varchar(750) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_classes`
--

INSERT INTO `tbl_classes` (`classes_id`, `classes_name`, `classes_grade`, `classes_news`) VALUES
(1, 'Mrs. Laye''s Grade 5 Class 2016/17', 'Grade 5', 'Welcome everyone!'),
(2, 'Mr. Nathan''s Grade 8 Class 2016/17', 'Grade 8', ''),
(3, 'Mrs. Laye''s Grade 5 Class 2015/16', 'Grade 5', 'Welcome!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
`courses_id` int(4) unsigned NOT NULL,
  `courses_name` varchar(50) NOT NULL,
  `courses_news` varchar(750) NOT NULL,
  `courses_grades` varchar(25) NOT NULL,
  `courses_feedback` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`courses_id`, `courses_name`, `courses_news`, `courses_grades`, `courses_feedback`) VALUES
(1, 'Health', 'Welcome to grade 5 Health', '', ''),
(2, 'Geography', 'Welcome to grade 5 Geography', '', ''),
(3, 'Science', 'Welcome to grade 5 Science', '', ''),
(4, 'Math', 'Welcome to grade 5 Math', '', ''),
(5, 'History', 'Grade 8', '', ''),
(6, 'Geography', 'Grade 8', '', ''),
(7, 'Math', 'Grade 8', '', ''),
(8, 'Science', 'Grade 8', '', ''),
(9, 'French', 'Grade 8', '', ''),
(10, 'English', 'Grade 8', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventGeneral`
--

CREATE TABLE `tbl_eventGeneral` (
`generalEvent_id` int(4) unsigned NOT NULL,
  `generalEvent_name` varchar(50) NOT NULL,
  `generalEvent_post` varchar(750) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eventGeneral`
--

INSERT INTO `tbl_eventGeneral` (`generalEvent_id`, `generalEvent_name`, `generalEvent_post`) VALUES
(2, 'Field Trip Forms Due', 'Just a reminder to parents that field trip forms are due next Monday (March 13th) please sign them and have your children bring them into class for then, thank you!'),
(10, 'Welcome Class of 2017!', 'Welcome everyone, I hope you have a great year!'),
(11, 'Test', 'Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing '),
(12, 'Hello', 'Welcome to grade 8!'),
(13, 'HIstory Text - Note', 'Please reference this book, as we will be covering it in class soon - Anatomy of History, if parents would like to purchase this book you can do so here - https://www.amazon.com/anatomy-history-John-Herbert-Trueman/dp/B0006BXYEM'),
(15, 'Planting Trees', 'On Monday March 20th we will be outside all day planting trees as part of the school''s new environmental initiative, please bring sunscreen, a hat, and be ready to have fun!'),
(18, 'Medical Forms', 'Hello Everyone,\r\nMedical forms for students will be due soon, please have them filled out and ready to bring in as soon as possible as the deadline for these is April 19th.'),
(20, 'test', 'test'),
(22, 'Test', 'Testing123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eventWork`
--

CREATE TABLE `tbl_eventWork` (
`workEvent_id` int(4) unsigned NOT NULL,
  `workEvent_name` varchar(50) NOT NULL,
  `workEvent_date` date NOT NULL,
  `workEvent_complete` varchar(50) NOT NULL DEFAULT 'Incomplete'
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_eventWork`
--

INSERT INTO `tbl_eventWork` (`workEvent_id`, `workEvent_name`, `workEvent_date`, `workEvent_complete`) VALUES
(1, 'Nutrition Review #1', '2016-09-13', 'Incomplete'),
(2, 'Nutrition Test #1', '2016-09-20', 'Incomplete'),
(3, 'test', '2017-03-13', 'Incomplete'),
(4, 'TestProjectTwo', '2017-02-28', 'Incomplete'),
(5, 'TestProject', '2017-03-20', 'Incomplete'),
(6, 'test Health', '2017-03-07', 'Incomplete'),
(7, 'test Health', '2017-03-07', 'Incomplete'),
(8, 'Apple', '2017-03-27', 'Incomplete'),
(9, 'Apple', '2017-03-27', 'Incomplete'),
(10, 'Health Assignment #2', '2017-03-08', 'Incomplete'),
(11, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(12, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(13, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(14, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(15, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(16, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(17, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(18, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(19, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(20, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(21, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(22, 'Health Assignment #3', '2017-03-16', 'Incomplete'),
(23, 'Health Test #2', '2017-03-28', 'Incomplete'),
(24, 'Health Test #2', '2017-03-28', 'Incomplete'),
(25, 'Health Test #2', '2017-03-28', 'Incomplete'),
(26, 'Health Test #2', '2017-03-28', 'Incomplete'),
(27, 'Health Test #2', '2017-03-28', 'Incomplete'),
(28, 'Health Test #2', '2017-03-28', 'Incomplete'),
(29, 'Health Test #2', '2017-03-28', 'Incomplete'),
(30, 'Health Test #2', '2017-03-28', 'Incomplete'),
(31, 'Health Test #2', '2017-03-28', 'Incomplete'),
(32, 'Health Test #2', '2017-03-28', 'Incomplete'),
(33, 'Health Test #2', '2017-03-28', 'Incomplete'),
(36, 'Health Test #2', '2017-03-28', 'Incomplete'),
(76, 'Mountain Regions', '2017-02-26', 'Incomplete'),
(77, 'Countries Project #1', '2017-03-08', 'Incomplete'),
(78, 'Countries Project #2', '2017-03-29', 'Incomplete'),
(79, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(80, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(81, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(82, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(83, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(84, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(85, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(86, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(87, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(88, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(89, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(90, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(91, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(92, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(93, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(94, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(95, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(96, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(97, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(98, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(99, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(100, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(101, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(102, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(103, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(104, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(105, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(106, 'Oceans Project #1', '2017-03-05', 'Incomplete'),
(107, 'Science Test #1', '2016-09-08', 'Incomplete'),
(108, 'Climate Project #1', '2017-03-21', 'Incomplete'),
(109, 'Ecosystems Project #1 ', '2017-03-01', 'Incomplete'),
(111, 'Nutrition Test #1', '2017-03-03', 'Incomplete'),
(112, 'BEDMAS Review', '2017-01-28', 'Incomplete'),
(113, 'Nutrition Hmwk', '2017-04-12', 'Incomplete'),
(114, 'Math Test #1', '2017-04-02', 'Incomplete'),
(118, 'Health Assignment #1', '2017-03-01', 'Incomplete'),
(121, 'Final Test', '2017-03-21', 'Incomplete'),
(123, 'Healthy Living Test', '2017-04-10', 'Incomplete'),
(124, 'Nutrition Assignment #5', '2017-04-10', 'Incomplete'),
(125, 'Nutrition Assignment #1', '2017-02-01', 'Incomplete'),
(126, 'Nutrition Assignment #2', '2017-02-08', 'Incomplete'),
(127, 'Nutrition Assignment #3', '2017-03-01', 'Incomplete'),
(128, 'Nutrition Assignment #4', '2017-03-22', 'Incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
`feedback_id` int(4) unsigned NOT NULL,
  `feedback_subject` varchar(75) NOT NULL,
  `feedback_content` varchar(1000) NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_subject`, `feedback_content`, `feedback_date`) VALUES
(1, 'Math - Fractions', 'David has been doing very well in our fractions unit lately, but I am noticing he is having some trouble with dividing fractions. It might be helpful to go over this more at home, worksheets and guides can be found in the fractions unit in the course home', '2017-02-15'),
(2, 'In Class Issue', 'Marilyn currently spends too much time playing Criminal Case in class rather than focussing on her work, I would work with her at home on this issue.', '2017-03-28'),
(3, 'Health Test #1', 'Marilyn did a great job on her first Health Test! She scored 10/10! Great job!!!', '2017-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forms`
--

CREATE TABLE `tbl_forms` (
`form_id` int(4) unsigned NOT NULL,
  `forms_name` varchar(50) NOT NULL,
  `forms_file` varchar(50) NOT NULL,
  `forms_desc` varchar(750) NOT NULL,
  `forms_postDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forms`
--

INSERT INTO `tbl_forms` (`form_id`, `forms_name`, `forms_file`, `forms_desc`, `forms_postDate`) VALUES
(2, 'Test Form', 'Test_Upload.pdf', 'Test From Description', '2017-03-16'),
(3, 'Test Form', 'Test_Upload.pdf', 'Test From Description', '2017-03-16'),
(5, 'Field Trip Test', 'Test_Upload.pdf', 'Test Form Description', '2017-03-16'),
(13, 'Field Trip - Skating', '-test_form-.docx', 'Field trip forms - due My 21st', '2017-04-26'),
(14, 'Field Trip - Park', '-test_form-.docx', 'We will be going to the park on June 20th, please have forms filled out by June 1st and handed in to me!', '2017-06-01'),
(15, 'Medical', '-test_form-.docx', 'Start of year medical review form, please submit to me ASAP', '2016-09-05'),
(16, 'General', '-test_form-.docx', 'General information form, please have it filled out and handed in ASAP.', '2016-09-05'),
(17, 'Parent/Guardian', '-test_form-.docx', 'Standard parent/guardian form, please have it filled out with all valid information and handed in ASAP', '2016-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_classes_courses`
--

CREATE TABLE `tbl_l_classes_courses` (
`classes_courses_id` int(4) unsigned NOT NULL,
  `class_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_classes_courses`
--

INSERT INTO `tbl_l_classes_courses` (`classes_courses_id`, `class_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_classes_forms`
--

CREATE TABLE `tbl_l_classes_forms` (
`classes_forms_id` int(4) unsigned NOT NULL,
  `class_id` int(4) NOT NULL,
  `forms_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_classes_forms`
--

INSERT INTO `tbl_l_classes_forms` (`classes_forms_id`, `class_id`, `forms_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 5),
(4, 1, 6),
(5, 1, 7),
(6, 1, 8),
(7, 1, 9),
(8, 1, 10),
(9, 1, 11),
(10, 1, 12),
(11, 1, 13),
(12, 1, 14),
(13, 1, 15),
(14, 1, 16),
(15, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_classes_general`
--

CREATE TABLE `tbl_l_classes_general` (
`classes_general_id` int(4) unsigned NOT NULL,
  `class_id` int(4) NOT NULL,
  `general_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_classes_general`
--

INSERT INTO `tbl_l_classes_general` (`classes_general_id`, `class_id`, `general_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 1, 18),
(19, 1, 19),
(20, 1, 20),
(21, 1, 21),
(22, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_courses_completed`
--

CREATE TABLE `tbl_l_courses_completed` (
`courses_completed_id` int(4) unsigned NOT NULL,
  `courses_id` int(4) NOT NULL,
  `completed_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_courses_unfinished`
--

CREATE TABLE `tbl_l_courses_unfinished` (
`courses_unfinished_id` int(4) unsigned NOT NULL,
  `courses_id` int(4) NOT NULL,
  `unfinished_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_courses_work`
--

CREATE TABLE `tbl_l_courses_work` (
`courses_work_id` int(4) unsigned NOT NULL,
  `course_id` int(4) NOT NULL,
  `work_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_courses_work`
--

INSERT INTO `tbl_l_courses_work` (`courses_work_id`, `course_id`, `work_id`) VALUES
(77, 2, 77),
(79, 2, 79),
(80, 2, 80),
(81, 2, 81),
(82, 2, 82),
(83, 2, 83),
(84, 2, 84),
(85, 2, 85),
(86, 2, 86),
(87, 2, 87),
(88, 2, 88),
(89, 2, 89),
(90, 2, 90),
(91, 2, 91),
(92, 2, 92),
(98, 2, 98),
(99, 2, 99),
(100, 2, 100),
(101, 2, 101),
(102, 2, 102),
(103, 2, 103),
(104, 2, 104),
(105, 2, 105),
(106, 2, 106),
(107, 3, 107),
(108, 3, 108),
(109, 3, 109),
(112, 4, 112),
(124, 1, 124),
(125, 1, 125),
(126, 1, 126),
(127, 1, 127),
(128, 1, 128);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_studentsList`
--

CREATE TABLE `tbl_l_studentsList` (
`teachers_students_id` int(4) unsigned NOT NULL,
  `teachers_id` int(4) NOT NULL,
  `students_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_studentsList`
--

INSERT INTO `tbl_l_studentsList` (`teachers_students_id`, `teachers_id`, `students_id`) VALUES
(8, 2, 19),
(9, 9, 4),
(10, 9, 5),
(11, 9, 6),
(12, 9, 7),
(13, 9, 8),
(14, 9, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_units_assignments`
--

CREATE TABLE `tbl_l_units_assignments` (
`units_assignments_id` int(4) unsigned NOT NULL,
  `unit_id` int(4) NOT NULL,
  `assignment_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_units_assignments`
--

INSERT INTO `tbl_l_units_assignments` (`units_assignments_id`, `unit_id`, `assignment_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 2, 6),
(6, 13, 7),
(7, 1, 8),
(8, 16, 9),
(9, 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_units_courses`
--

CREATE TABLE `tbl_l_units_courses` (
`units_courses_id` int(4) unsigned NOT NULL,
  `unit_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_units_courses`
--

INSERT INTO `tbl_l_units_courses` (`units_courses_id`, `unit_id`, `course_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3),
(7, 7, 3),
(8, 8, 4),
(9, 9, 4),
(10, 10, 4),
(11, 11, 1),
(12, 12, 2),
(13, 13, 5),
(14, 14, 1),
(15, 15, 1),
(16, 16, 2),
(17, 17, 3),
(18, 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_assignments`
--

CREATE TABLE `tbl_l_users_assignments` (
`users_assignments_id` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `assignments_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_classes`
--

CREATE TABLE `tbl_l_users_classes` (
`users_classes_id` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `class_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_users_classes`
--

INSERT INTO `tbl_l_users_classes` (`users_classes_id`, `users_id`, `class_id`) VALUES
(1, 9, 1),
(2, 4, 1),
(3, 8, 1),
(4, 6, 1),
(5, 7, 1),
(6, 2, 2),
(7, 3, 2),
(8, 19, 2),
(12, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_courses`
--

CREATE TABLE `tbl_l_users_courses` (
`users_courses_id` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `courses_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_feedback`
--

CREATE TABLE `tbl_l_users_feedback` (
`users_feedback_id` int(4) unsigned NOT NULL,
  `comment_id` int(4) NOT NULL,
  `users_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_users_feedback`
--

INSERT INTO `tbl_l_users_feedback` (`users_feedback_id`, `comment_id`, `users_id`) VALUES
(1, 1, 8),
(2, 2, 20),
(3, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_questions`
--

CREATE TABLE `tbl_l_users_questions` (
`users_questions` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `question_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_users_questions`
--

INSERT INTO `tbl_l_users_questions` (`users_questions`, `users_id`, `question_id`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 8, 3),
(4, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_unfinished`
--

CREATE TABLE `tbl_l_users_unfinished` (
`users_unfinished_id` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `incomplete_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_users_unfinished`
--

INSERT INTO `tbl_l_users_unfinished` (`users_unfinished_id`, `users_id`, `incomplete_id`) VALUES
(1, 4, 2),
(2, 6, 2),
(3, 7, 2),
(4, 8, 1),
(5, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_l_users_work`
--

CREATE TABLE `tbl_l_users_work` (
`users_work_id` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `work_id` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_l_users_work`
--

INSERT INTO `tbl_l_users_work` (`users_work_id`, `users_id`, `work_id`) VALUES
(1, 5, 234),
(2, 0, 235),
(3, 1, 235),
(4, 0, 2),
(5, 1, 2),
(6, 0, 3),
(7, 1, 3),
(9, 0, 5),
(10, 1, 5),
(11, 2, 5),
(12, 3, 5),
(15, 0, 7),
(16, 1, 7),
(17, 2, 7),
(18, 3, 7),
(20, 1, 9),
(21, 1, 9),
(22, 1, 9),
(23, 1, 9),
(24, 1, 9),
(25, 1, 10),
(26, 1, 10),
(27, 1, 10),
(28, 1, 10),
(29, 1, 10),
(30, 1, 10),
(31, 1, 75),
(32, 1, 75),
(33, 1, 75),
(34, 1, 75),
(35, 1, 75),
(36, 1, 75),
(37, 6, 78),
(38, 6, 78),
(39, 6, 78),
(40, 6, 78),
(41, 6, 78),
(42, 6, 78),
(45, 6, 106),
(57, 6, 108),
(63, 6, 109),
(75, 6, 111),
(84, 20, 112),
(85, 4, 113),
(87, 6, 113),
(90, 20, 113),
(93, 6, 114),
(96, 20, 114),
(97, 4, 115),
(98, 5, 115),
(99, 6, 115),
(100, 7, 115),
(101, 8, 115),
(102, 20, 115),
(103, 4, 116),
(104, 5, 116),
(105, 6, 116),
(106, 7, 116),
(107, 8, 116),
(108, 20, 116),
(116, 5, 118),
(117, 6, 118),
(120, 20, 118),
(133, 4, 121),
(134, 5, 121),
(135, 6, 121),
(138, 20, 121),
(145, 4, 123),
(146, 5, 123),
(147, 6, 123),
(148, 7, 123),
(150, 20, 123),
(151, 4, 124),
(152, 5, 124),
(153, 6, 124),
(154, 7, 124),
(156, 20, 124),
(157, 4, 125),
(158, 5, 125),
(159, 6, 125),
(160, 7, 125),
(161, 8, 125),
(162, 20, 125),
(163, 4, 126),
(164, 5, 126),
(165, 6, 126),
(166, 7, 126),
(167, 8, 126),
(168, 20, 126),
(169, 4, 127),
(170, 5, 127),
(171, 6, 127),
(172, 7, 127),
(173, 8, 127),
(174, 20, 127),
(175, 4, 128),
(176, 5, 128),
(177, 6, 128),
(178, 7, 128),
(179, 8, 128),
(180, 20, 128);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

CREATE TABLE `tbl_messages` (
`messages_id` int(4) unsigned NOT NULL,
  `messages_subject` varchar(50) NOT NULL,
  `messages_from` varchar(50) NOT NULL,
  `messages_to` varchar(50) NOT NULL,
  `messages_type` varchar(50) NOT NULL,
  `messages_content` varchar(1000) NOT NULL,
  `messages_timeSent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
`questions_id` int(4) unsigned NOT NULL,
  `questions_subject` varchar(50) NOT NULL,
  `questions_content` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`questions_id`, `questions_subject`, `questions_content`) VALUES
(1, 'Math homework', 'Need help with the Math Homework from class Today'),
(2, 'Science Question', 'Need help with the Science Homework from class Today');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unfinishedWork`
--

CREATE TABLE `tbl_unfinishedWork` (
`unfinished_id` int(4) unsigned NOT NULL,
  `unfinished_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unfinishedWork`
--

INSERT INTO `tbl_unfinishedWork` (`unfinished_id`, `unfinished_name`) VALUES
(1, 'Completed'),
(2, 'Incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_units`
--

CREATE TABLE `tbl_units` (
`units_id` int(4) unsigned NOT NULL,
  `units_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_units`
--

INSERT INTO `tbl_units` (`units_id`, `units_name`) VALUES
(1, 'Body'),
(2, 'Nutrition'),
(3, 'Mountain Ranges'),
(4, 'Countries'),
(5, 'Chemistry'),
(6, 'Physics'),
(7, 'Biology'),
(8, 'Probability'),
(9, 'Division'),
(10, 'Fractions'),
(11, 'Healthy Living'),
(12, 'Cities'),
(13, 'Russian Revolution'),
(14, 'Healthy Lifestyle'),
(15, 'Food Pyramid'),
(16, 'Oceans'),
(17, 'Ecosystems'),
(18, 'Landforms');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
`id` int(8) unsigned NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'Robert', 'Haaf', 'rob@aol.com'),
(2, 'Joe', 'Blow', 'joe@aol.com'),
(4, 'Sally', 'Anderson', 'sally@aol.com'),
(7, 'Jane', 'Smith', 'jsmith@gmail.com'),
(15, 'Wendy', 'Billson', 'wendy@gamil.com'),
(16, 'vcvdvd', 'zvsdvsd', 'aaa@bbb.com'),
(17, 'qqqqq', 'wwww', 'qwer@aol.com'),
(18, 'bbbbb', 'eeeee', 'qwe@aol.com'),
(19, 'uuuuu', 'yyyyy', 'zxc@aol.com'),
(20, 'xxxxxxxxxxxxxxx', 'bbbbb', 'sss@aol.com'),
(21, 'xxxxxxxxxxxxxxx', 'qqqqqqqqqqq', 'sss@aol.com'),
(24, 'aaaaaaa', 'bbbbbb', 'ccccccc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_messages`
--

CREATE TABLE `tbl_users_messages` (
`users_messages_id` int(4) unsigned NOT NULL,
  `users_id` int(4) NOT NULL,
  `messages_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
`uploads_id` int(4) unsigned NOT NULL,
  `uploads_content` varchar(1000) NOT NULL,
  `uploads_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `admin` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'true', 'Mrs. Laye', 'test@test.com', '$2y$10$u1CjpBnAns7p.qvn9EZ3SerJmFaXbF92cGRVdeI2cFOnBQREGadqu', 'GexllZMegRjdEGwwy72I7h7F3QDrsDfibdQthpVdGCMOLAsYm4VopXD4efqw', '2017-02-06 03:41:45', '2017-03-07 11:02:54'),
(2, 'true', 'David Nathan', 'teacherTest2@test.com', '$2y$10$HrKPtcqK.q1m2ORcPcxfl.QfQ.k3OTGXk9J9EgiNqarvxFgxjgJmO', 'L1BYv0hYBctstl3a68iRcLlS9v2EHlSZcFJhwn6tjoREJf09rKxGacrQGTmN', '2017-02-06 04:23:56', '2017-03-17 08:45:19'),
(3, 'False', 'Chris Griffin', 'test3@testing.com', '$2y$10$moMIlG08Gmy1I5Ex2K66k.G896uD4aUSwCR9v25OWhpClUpR.7UY6', 'epMTtvdi2wUCXbC5W9Yeopmiq9f1OAuAt06FOfbkBQelrIoYaBGuGyWENTiI', '2017-02-06 04:27:24', '2017-02-06 04:27:29'),
(4, 'false', 'Mark Hamill', 'test4@test.com', '$2y$10$hyneOKGIB.XUDyrvrvtZ.e91NpmZC9m4ZDIb2x37pRa/jC6iRAdqS', 'XQU9RYUBvV8DA4oqLeMhC7vWL7CX0G3yAj4VFjhScgmb9Clzlnt8EcU4biQN', '2017-02-06 04:35:31', '2017-02-06 04:35:45'),
(5, 'false', 'Joe Swanson', 'test5@test.com', '$2y$10$n18VfgQUXy.nY0hIy5G0IuPuRZo7edA9xTLltugl3oFGCmWfKRSEG', 'MvX0bu9Qc4exTLm4oZls5dx5yieQ1PqvpSJaJIqSA0Q0zw5hkyRD0W0GgdAE', '2017-02-06 04:36:06', '2017-03-07 10:58:59'),
(6, 'false', 'Harrison Ford', 'test6@test.com', '$2y$10$ELXfVZdYT.2UFr.DTuOn1O3Sl/1bdq6YMl9VrIJy3UYKOb.NCjx6i', 'YfwcjrXkwLXgd9yxdn5v8KU8M3WtbfU64oxjuMy1FwHdXrUAUG8fkLLj4kI0', '2017-02-06 04:37:03', '2017-02-06 05:11:26'),
(7, 'false', 'Carrie Fisher', 'theBest@test.com', '$2y$10$Ov8WVUMYzV6OBS8SAIE1NudIBDTWl6KYBJGejS7VsHuaWjpb.wo7.', 'SUvgSL6gHtXOYywJ93iQDtIr1TrfTtw8rdIAJckp1nPN2xt2txDDzR1YXb6f', '2017-02-07 18:10:56', '2017-02-07 20:10:06'),
(8, 'false', 'David Arthur', 'david-arthur@rogers.com', '$2y$10$CTaeYFqAneMJamRGxUASuePcZ42ujgRdocy3H7c.iHryCzLJkLbza', '5C2NHEMQZQzeYdfyWBfchw7prB01yLMrzKDACasqxQDDwkIzoxJCl4cAZRoy', '2017-03-07 10:54:31', '2017-07-19 06:29:00'),
(9, 'true', 'Vanessa Laye', 'teacherTest@testing.ca', '$2y$10$QVA3Erx9.3yyygc04Yx/ouYmme9l5MEVJz/mgDvJL.AJdKQmoNtxm', 'DGbEqqwnA6PcLWuN3JvtVyU193qenT2ExsgmyS2qpf6NVAJn9TMztJ08U7Cs', '2017-03-07 10:55:18', '2017-07-19 14:04:39'),
(19, '2', 'Arthur Davidson', 'studentTest2@test.ca', '$2y$10$4889vaHxAHFzic.TCRrLeeaWxhWHGAqt1jZn57s1bLP7m3XgreNL.', 'jqpKUcDqbYUxKEbfW4UBP4GaksBR5u4MGXGC5PTmJ134AzBtYMUiTdsczzjF', '2017-03-13 09:19:35', '2017-03-19 08:19:01'),
(20, '2', 'Stewie Griffin', 'SGrif@test.ca', '$2y$10$q80JLDjN47ARIvmLXHNlve4dgYXBwv9v/K/s.4aU0K.DjHYdcwVwu', 'WDwJp4ESZD7g7hteKxouEUlwpJK0tFIF2O8QOjrNOGd6cEvp7iZPjj8BWegV', '2017-03-22 00:55:25', '2017-03-22 00:55:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_assignments`
--
ALTER TABLE `tbl_assignments`
 ADD PRIMARY KEY (`assignments_id`);

--
-- Indexes for table `tbl_classes`
--
ALTER TABLE `tbl_classes`
 ADD PRIMARY KEY (`classes_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
 ADD PRIMARY KEY (`courses_id`);

--
-- Indexes for table `tbl_eventGeneral`
--
ALTER TABLE `tbl_eventGeneral`
 ADD PRIMARY KEY (`generalEvent_id`);

--
-- Indexes for table `tbl_eventWork`
--
ALTER TABLE `tbl_eventWork`
 ADD PRIMARY KEY (`workEvent_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
 ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
 ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `tbl_l_classes_courses`
--
ALTER TABLE `tbl_l_classes_courses`
 ADD PRIMARY KEY (`classes_courses_id`);

--
-- Indexes for table `tbl_l_classes_forms`
--
ALTER TABLE `tbl_l_classes_forms`
 ADD PRIMARY KEY (`classes_forms_id`);

--
-- Indexes for table `tbl_l_classes_general`
--
ALTER TABLE `tbl_l_classes_general`
 ADD PRIMARY KEY (`classes_general_id`);

--
-- Indexes for table `tbl_l_courses_completed`
--
ALTER TABLE `tbl_l_courses_completed`
 ADD PRIMARY KEY (`courses_completed_id`);

--
-- Indexes for table `tbl_l_courses_unfinished`
--
ALTER TABLE `tbl_l_courses_unfinished`
 ADD PRIMARY KEY (`courses_unfinished_id`), ADD UNIQUE KEY `courses_unfinished_id` (`courses_unfinished_id`);

--
-- Indexes for table `tbl_l_courses_work`
--
ALTER TABLE `tbl_l_courses_work`
 ADD PRIMARY KEY (`courses_work_id`);

--
-- Indexes for table `tbl_l_studentsList`
--
ALTER TABLE `tbl_l_studentsList`
 ADD PRIMARY KEY (`teachers_students_id`);

--
-- Indexes for table `tbl_l_units_assignments`
--
ALTER TABLE `tbl_l_units_assignments`
 ADD PRIMARY KEY (`units_assignments_id`);

--
-- Indexes for table `tbl_l_units_courses`
--
ALTER TABLE `tbl_l_units_courses`
 ADD PRIMARY KEY (`units_courses_id`);

--
-- Indexes for table `tbl_l_users_assignments`
--
ALTER TABLE `tbl_l_users_assignments`
 ADD PRIMARY KEY (`users_assignments_id`);

--
-- Indexes for table `tbl_l_users_classes`
--
ALTER TABLE `tbl_l_users_classes`
 ADD PRIMARY KEY (`users_classes_id`);

--
-- Indexes for table `tbl_l_users_courses`
--
ALTER TABLE `tbl_l_users_courses`
 ADD PRIMARY KEY (`users_courses_id`), ADD UNIQUE KEY `users_courses_id` (`users_courses_id`);

--
-- Indexes for table `tbl_l_users_feedback`
--
ALTER TABLE `tbl_l_users_feedback`
 ADD PRIMARY KEY (`users_feedback_id`);

--
-- Indexes for table `tbl_l_users_questions`
--
ALTER TABLE `tbl_l_users_questions`
 ADD PRIMARY KEY (`users_questions`);

--
-- Indexes for table `tbl_l_users_unfinished`
--
ALTER TABLE `tbl_l_users_unfinished`
 ADD PRIMARY KEY (`users_unfinished_id`);

--
-- Indexes for table `tbl_l_users_work`
--
ALTER TABLE `tbl_l_users_work`
 ADD PRIMARY KEY (`users_work_id`);

--
-- Indexes for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
 ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
 ADD PRIMARY KEY (`questions_id`);

--
-- Indexes for table `tbl_unfinishedWork`
--
ALTER TABLE `tbl_unfinishedWork`
 ADD PRIMARY KEY (`unfinished_id`);

--
-- Indexes for table `tbl_units`
--
ALTER TABLE `tbl_units`
 ADD PRIMARY KEY (`units_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_messages`
--
ALTER TABLE `tbl_users_messages`
 ADD PRIMARY KEY (`users_messages_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
 ADD PRIMARY KEY (`uploads_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assignments`
--
ALTER TABLE `tbl_assignments`
MODIFY `assignments_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_classes`
--
ALTER TABLE `tbl_classes`
MODIFY `classes_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
MODIFY `courses_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_eventGeneral`
--
ALTER TABLE `tbl_eventGeneral`
MODIFY `generalEvent_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_eventWork`
--
ALTER TABLE `tbl_eventWork`
MODIFY `workEvent_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
MODIFY `feedback_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
MODIFY `form_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_l_classes_courses`
--
ALTER TABLE `tbl_l_classes_courses`
MODIFY `classes_courses_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_l_classes_forms`
--
ALTER TABLE `tbl_l_classes_forms`
MODIFY `classes_forms_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_l_classes_general`
--
ALTER TABLE `tbl_l_classes_general`
MODIFY `classes_general_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_l_courses_completed`
--
ALTER TABLE `tbl_l_courses_completed`
MODIFY `courses_completed_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_l_courses_unfinished`
--
ALTER TABLE `tbl_l_courses_unfinished`
MODIFY `courses_unfinished_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_l_courses_work`
--
ALTER TABLE `tbl_l_courses_work`
MODIFY `courses_work_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `tbl_l_studentsList`
--
ALTER TABLE `tbl_l_studentsList`
MODIFY `teachers_students_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_l_units_assignments`
--
ALTER TABLE `tbl_l_units_assignments`
MODIFY `units_assignments_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_l_units_courses`
--
ALTER TABLE `tbl_l_units_courses`
MODIFY `units_courses_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_l_users_assignments`
--
ALTER TABLE `tbl_l_users_assignments`
MODIFY `users_assignments_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_l_users_classes`
--
ALTER TABLE `tbl_l_users_classes`
MODIFY `users_classes_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_l_users_courses`
--
ALTER TABLE `tbl_l_users_courses`
MODIFY `users_courses_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_l_users_feedback`
--
ALTER TABLE `tbl_l_users_feedback`
MODIFY `users_feedback_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_l_users_questions`
--
ALTER TABLE `tbl_l_users_questions`
MODIFY `users_questions` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_l_users_unfinished`
--
ALTER TABLE `tbl_l_users_unfinished`
MODIFY `users_unfinished_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_l_users_work`
--
ALTER TABLE `tbl_l_users_work`
MODIFY `users_work_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `tbl_messages`
--
ALTER TABLE `tbl_messages`
MODIFY `messages_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
MODIFY `questions_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_unfinishedWork`
--
ALTER TABLE `tbl_unfinishedWork`
MODIFY `unfinished_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_units`
--
ALTER TABLE `tbl_units`
MODIFY `units_id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_users_messages`
--
ALTER TABLE `tbl_users_messages`
MODIFY `users_messages_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
MODIFY `uploads_id` int(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
