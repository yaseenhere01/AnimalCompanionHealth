-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2024 at 11:55 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `disease` varchar(150) NOT NULL,
  `symptoms` varchar(150) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `process` varchar(255) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `name`, `disease`, `symptoms`, `treatment`, `process`, `doctor`) VALUES
(36, 'Parrots ', 'Psittacosis (Parrot Fever)', 'Symptoms: Respiratory issues, fever, lethargy.', 'Treatment: Antibiotics such as doxycycline; supportive care is also recommended. Beak and Feather Disease (PBFD)', 'After Check-up', 'Dr. James Anderson'),
(37, 'Anacondas', 'Snake Fungal Disease', 'Symptoms: Skin lesions, abnormal shedding, lethargy.', 'Treatment: Antifungal treatments and supportive care; maintaining clean habitats helps prevent recurrence. Paramyxovirus', 'After Check-up', 'Dr. Michael Thompson'),
(38, 'Dogs', 'Canine Parvovirus', 'Symptoms: Severe gastrointestinal distress, vomiting, diarrhea.', 'Treatment: No specific antiviral treatment; supportive care with fluids, electrolytes, and antibiotics is crucial. Vaccination prevents infection.', 'After Check-up', 'Dr. Ava Wilson'),
(39, 'Cats', 'Feline Leukemia Virus (FeLV)', 'Symptoms: Weight loss, anemia, susceptibility to infections.', 'Treatment: No cure; supportive care and antiviral medications can help manage symptoms. Vaccination can prevent infection.', 'After Check-up', 'Dr. Elijah Davis'),
(40, 'Goldfish', 'Ichthyophthirius (Ich)', 'Symptoms: White cysts on skin and gills, abnormal behavior.', 'Treatment: Antiparasitic treatments and raising water temperature can help; proper aquarium maintenance is crucial for prevention.', 'After Check-up', 'Dr. Noah Lewis'),
(41, 'Rabbits', 'Myxomatosis', 'Symptoms: Swelling, eye discharge, skin lesions.', 'Treatment: No cure; supportive care and vaccination are crucial for prevention. Rabbit Hemorrhagic Disease (RHD)', 'After Check-up', 'Dr. Emily Green'),
(42, 'Turtles', 'Shell Rot', 'Symptoms: Soft, damaged shell with foul odor.', 'Treatment: Antiseptic treatments and improving habitat conditions; regular shell inspections are important for early detection.', 'After Check-up', 'Dr. Aiden Walker'),
(34, 'Elephants', 'Tuberculosis (TB)', 'Symptoms: Coughing, weight loss, respiratory issues.', 'Treatment: Antibiotics and extended treatment periods; strict hygiene and isolation are crucial to prevent transmission.', 'After Check-up', 'Dr. Laura Bennett'),
(35, 'Monkeys', 'Hepatitis B', 'Symptoms: Jaundice, abdominal pain, chronic liver disease.', 'Treatment: Antiviral medications and liver monitoring; vaccines available for prevention. Simian Immunodeficiency Virus (SIV)', 'After Check-up', 'Dr. Isabella Martinez'),
(33, 'Tigers', 'Feline Immunodeficiency Virus (FIV)', 'Symptoms: Weight loss, dental issues, chronic infections.', 'Treatment: No cure; supportive care, antiviral medications, and managing secondary infections can improve quality of life.', 'After Check-up', 'Dr. Olivia James');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
CREATE TABLE IF NOT EXISTS `appoinment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `health` varchar(200) NOT NULL,
  `number` varchar(15) NOT NULL,
  `message` varchar(254) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `email`, `dob`, `health`, `number`, `message`, `status`) VALUES
(3, 'SUBHAN', 'subhan2309d@aptechgdn.net', '2024-08-01', 'virus', '03102523495', 'salam', 'canceled'),
(4, 'tahir', 'tahir@gmail.com', '2024-08-29', 'virus', '03102523495', 'salam', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(254) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `message` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `address`, `gender`, `message`) VALUES
(1, 'bilal', 'subhan2309d@aptechgdn.net', '03102523495', 'shamma palace', 'male', 'hi'),
(2, 'Yaseen Hashmani', 'shahzaib2309d@aptechgdn.net', '03102523495', 'hagsffs', 'male', 'salam');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `d_name` varchar(40) NOT NULL,
  `d_email` varchar(40) NOT NULL,
  `d_phone` bigint NOT NULL,
  `image` varchar(255) NOT NULL,
  `speciality` varchar(60) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_name`, `d_email`, `d_phone`, `image`, `speciality`) VALUES
(34, 'Dr. Olivia James', 'olivia@gmail.com', 321111, 'doctor 4.png', 'Veterinary Dermatologist. '),
(35, 'Dr. Aiden Walker', 'walker@gmail.com', 321111, 'doctor 3.png', 'Veterinary Dentist.'),
(32, 'Dr. Michael', 'michael@gmail.com', 321111, 'doctor 13.jpg', 'Veterinary Surgeon.'),
(33, 'Dr. Bennett', 'bennett@gmail.com', 321, 'doctor 2.jpg', 'Veterinary General.'),
(36, 'Dr. Martinez', 'martinez@gmail.com', 312, 'doctor 7.png', 'Veterinary Cardiologist.'),
(37, 'Dr. Elijah', 'elijah@gmail.com', 321, 'doctor 8.png', 'Veterinary Oncologist.'),
(38, 'Dr. Ava', 'ava@gmail.com', 321222, 'doctor 5.png', 'Veterinary Neurologist. '),
(39, 'Dr. Noah', 'noah@gmail.com', 331, 'doctor 9.png', 'Veterinary Ophthalmologist. '),
(40, 'Dr. Sophia', 'sophia@gmail.com', 312, 'doctor 6.png', 'Veterinary Internal Medicine Specialist. '),
(41, 'Dr. Liam', 'liam@gmail.com', 321, 'doctor 10.png', 'Veterinary Behaviorist. '),
(42, 'Dr. Emily', 'emily@gmail.com', 312, 'doctor_12-removebg-preview.png', 'Veterinary  Specialist. '),
(44, 'Dr. James', 'james@gmail.com', 312, 'doctor 14.png', 'Veterinary Nutritionist. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` tinyint(1) DEFAULT (0),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `dob`, `image`, `role`) VALUES
(1, 'Yaseen', 'yaseen2309d@aptechgdn.net', '25f9e794323b453885f5181f1b624d0b', '2024-08-02', 'png', 1),
(2, 'SUBHAN', 'subhan2309d@aptechgdn.net', '25f9e794323b453885f5181f1b624d0b', '2024-08-13', 'dr2.jfif', 0),
(3, 'bilal', 'bilal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-21', '1651769794429.jpg', 0),
(4, 'MISS AQSA', 'aqsa@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-29', '1651769794429.jpg', 0),
(5, 'ali', 'ali@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-31', 'IMG_20220120_001215_929.jpg', 0),
(6, 'veer', 'veer@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-29', 'home 10.jpg', 0),
(7, 'tahir', 'tahir@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-22', 'about.PNG', 0),
(8, 'popat', 'popat@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-18', 'Capture home.PNG', 0),
(9, 'furqan', 'furqan@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-18', 'Capture home.PNG', 0),
(10, 'rouf', 'rouf@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-30', 'about2.PNG', 0),
(11, 'hamza', 'hamza@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-22', 'Capture5.PNG', 0),
(12, 'Yasir', 'yasir@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2024-08-15', '1651683633961.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
