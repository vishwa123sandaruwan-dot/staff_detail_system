-- SQL Script for Teacher Details System
-- Database: teacher_detail

CREATE DATABASE IF NOT EXISTS `teacher_detail`;
USE `teacher_detail`;

-- Table structure for table `admins`
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `admins`
-- Default login: admin / admin123
INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123')
ON DUPLICATE KEY UPDATE username=username;

-- Table structure for table `teachers`
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zone` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `census_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `appointment_type` varchar(100) DEFAULT NULL,
  `first_appointment` date DEFAULT NULL,
  `retirement_date` date DEFAULT NULL,
  `appointed_subject` varchar(255) DEFAULT NULL,
  `appointed_medium` varchar(50) DEFAULT NULL,
  `subjects_taught` text DEFAULT NULL,
  `teaching_grades` varchar(255) DEFAULT NULL,
  `subjects_medium` varchar(255) DEFAULT NULL,
  `exam_evaluation` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `highest_qualification` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_nic` varchar(20) DEFAULT NULL,
  `spouse_occupation` varchar(255) DEFAULT NULL,
  `spouse_workplace` varchar(255) DEFAULT NULL,
  `children_count` int(11) DEFAULT 0,
  `emergency_contact` varchar(20) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `medical_conditions` text DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL, -- Redundant but used in some files
  `department` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
