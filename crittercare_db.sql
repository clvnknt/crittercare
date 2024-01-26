-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 10:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crittercare_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_user_details`
--

CREATE TABLE `additional_user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `spouse` varchar(255) DEFAULT NULL,
  `children_names` text DEFAULT NULL,
  `current_household_pets` text DEFAULT NULL,
  `visit_veterinarian` tinyint(1) DEFAULT NULL,
  `valid_id` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additional_user_details`
--

INSERT INTO `additional_user_details` (`id`, `province`, `city`, `postal_code`, `street`, `citizenship`, `occupation`, `spouse`, `children_names`, `current_household_pets`, `visit_veterinarian`, `valid_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Secondary School Teacher', 'Prof. Donato Kreiger', 'quas itaque eos', 'Consequatur quaerat dolore laborum natus debitis nesciunt.', 0, NULL, 1, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(2, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Reservation Agent OR Transportation Ticket Agent', 'Frieda Thompson', 'eum accusantium qui', 'Hic et sit iusto autem.', 1, NULL, 2, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(3, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Hunter and Trapper', 'Lyric DuBuque Sr.', 'vero eum omnis', 'Aut blanditiis sint est distinctio cupiditate.', 0, NULL, 3, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(4, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Film Laboratory Technician', 'Mr. Carmel McKenzie', 'tempore et tenetur', 'Sit eaque et nihil deserunt aliquam voluptatem.', 1, NULL, 4, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(5, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Medical Technician', 'Sammy Balistreri', 'autem autem qui', 'Libero error quidem aut.', 1, NULL, 5, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(6, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Aircraft Body Repairer', 'Bianka Reichert', 'sequi provident nihil', 'Cupiditate in odio similique dolore velit vel.', 1, NULL, 6, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(7, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Automotive Technician', 'Katlynn Ankunding', 'sapiente minus quam', 'Beatae nihil ratione dolorem laborum laboriosam consectetur aspernatur.', 1, NULL, 7, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(8, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Bindery Worker', 'Alysha Schmitt', 'similique nesciunt quidem', 'Doloribus ut reiciendis nemo sint maiores qui qui molestiae.', 1, NULL, 8, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(9, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Travel Clerk', 'Ms. Malvina Maggio PhD', 'quis ea nemo', 'Consequatur deserunt odio quia quisquam sunt.', 1, NULL, 9, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(10, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Microbiologist', 'Jayda Weimann', 'vel repellendus unde', 'Sed et est voluptatem.', 1, NULL, 10, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(11, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Motor Vehicle Inspector', 'Armando Bednar', 'accusantium incidunt expedita', 'Tenetur tenetur sint veniam esse laborum distinctio animi quisquam.', 0, NULL, 11, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(12, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Pesticide Sprayer', 'Miss Gloria Cummerata IV', 'vitae possimus nemo', 'Est quas ut voluptate.', 0, NULL, 12, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(13, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Government', 'Sarai Torp', 'consectetur ipsa aut', 'Dolor nisi excepturi neque.', 0, NULL, 13, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(14, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Sailor', 'Judson Prohaska PhD', 'magni cupiditate corrupti', 'Quas deleniti quia omnis rerum et exercitationem.', 0, NULL, 14, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(15, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Camera Repairer', 'Mr. Randall Morar PhD', 'rem perferendis saepe', 'Voluptates praesentium nemo consequatur est consequatur aliquid.', 0, NULL, 15, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(16, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Vocational Education Teacher', 'Mr. Ray Cronin MD', 'minima qui soluta', 'Eligendi ut consequatur et rerum omnis qui.', 0, NULL, 16, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(17, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Geological Data Technician', 'Dr. Ian Ondricka', 'necessitatibus reprehenderit rerum', 'Qui consequatur mollitia pariatur.', 0, NULL, 17, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(18, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Rotary Drill Operator', 'Ms. America Dooley', 'repellendus eaque quaerat', 'Dolores eaque quia repellendus sed qui.', 0, NULL, 18, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(19, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Operating Engineer', 'Kendrick Olson', 'commodi similique vel', 'Maxime earum dicta aperiam corporis quas quam recusandae.', 0, NULL, 19, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(20, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Life Science Technician', 'Mr. Jeromy Ziemann DVM', 'minima nostrum est', 'Quaerat sed incidunt ab eum sit.', 0, NULL, 20, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(21, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Government Property Inspector', 'Janie Kerluke', 'inventore dolores dolorum', 'Sint omnis tempora vel cum asperiores ad.', 1, NULL, 21, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(22, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Nuclear Medicine Technologist', 'Angus Brown', 'aliquid rerum voluptatibus', 'Distinctio explicabo minima eius ipsa provident aut.', 1, NULL, 22, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(23, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Bailiff', 'Raheem Flatley', 'quasi minus est', 'Aperiam quibusdam dolore non voluptas doloremque error sit.', 1, NULL, 23, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(24, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Hoist and Winch Operator', 'Katrina Crona', 'iste id quibusdam', 'Ullam possimus fugit fuga est.', 0, NULL, 24, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(25, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Accountant', 'Emie Prosacco', 'sunt non consectetur', 'Modi perspiciatis officia qui ad.', 0, NULL, 25, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(26, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Geologist', 'Mr. Isai Reichel IV', 'nulla totam occaecati', 'Soluta nisi velit vel quisquam mollitia in.', 0, NULL, 26, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(27, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Screen Printing Machine Operator', 'Cassandra Spinka MD', 'natus harum quia', 'Facilis eveniet vel error dignissimos.', 1, NULL, 27, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(28, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Radio and Television Announcer', 'Samantha Jenkins', 'modi et quod', 'Voluptates aut assumenda voluptatem optio amet.', 0, NULL, 28, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(29, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Electrical Power-Line Installer', 'Maurine Block', 'excepturi qui cumque', 'Maiores autem nemo laudantium delectus eos.', 1, NULL, 29, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(30, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Platemaker', 'Nia Gusikowski', 'dicta voluptas laboriosam', 'Itaque reiciendis nisi eos ut perspiciatis repudiandae consequatur.', 1, NULL, 30, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(31, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Medical Technician', 'Ms. Delores Christiansen', 'provident modi saepe', 'Placeat sunt quis qui natus veritatis iure.', 1, NULL, 31, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(32, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Press Machine Setter, Operator', 'Janessa Ziemann', 'commodi sapiente voluptatem', 'Maxime vel dicta dolorem eum eum qui itaque voluptates.', 0, NULL, 32, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(33, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Motorboat Mechanic', 'Ms. Pink Rosenbaum', 'qui voluptate molestias', 'Molestiae repellat ullam quo aut sit quia.', 0, NULL, 33, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(34, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Veterinarian', 'Lawson Grimes', 'laudantium et reiciendis', 'Suscipit et odit maiores reiciendis rerum.', 1, NULL, 34, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(35, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Fabric Pressers', 'Corrine Rolfson', 'nihil sint quod', 'Non aut non corporis qui.', 0, NULL, 35, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(36, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Vending Machine Servicer', 'Eloisa Gibson V', 'qui ex consequatur', 'Earum velit officiis rem delectus.', 0, NULL, 36, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(37, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Director Of Talent Acquisition', 'Leopold Douglas', 'dolorem eius voluptatem', 'Quod sapiente maiores voluptatem.', 1, NULL, 37, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(38, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Refrigeration Mechanic', 'Prof. Alexander Yundt', 'iure ex excepturi', 'Molestias quae rerum esse quas rerum dignissimos eligendi ipsum.', 1, NULL, 38, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(39, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Materials Engineer', 'Mr. Eric Schuster DDS', 'et ipsam labore', 'Illum assumenda aliquid nemo qui temporibus.', 0, NULL, 39, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(40, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Marriage and Family Therapist', 'Prof. Josefa White', 'esse libero sed', 'Distinctio sunt delectus qui hic sed asperiores.', 0, NULL, 40, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(41, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Stonemason', 'Prof. Cristobal Fadel III', 'ipsa accusamus rem', 'Tempora fugiat maxime saepe ut cum vel.', 1, NULL, 41, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(42, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Forest and Conservation Worker', 'Mr. Micah Leannon I', 'in tempore qui', 'Aut quia quos iste numquam repudiandae.', 0, NULL, 42, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(43, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Packer and Packager', 'Rocio Herman', 'quia et deleniti', 'Rerum ut voluptatum qui ipsa.', 0, NULL, 43, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(44, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Postsecondary Education Administrators', 'Timmothy Schimmel I', 'debitis doloribus incidunt', 'Dolore deleniti suscipit rerum quo recusandae aut.', 1, NULL, 44, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(45, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Biologist', 'Kaelyn Sipes', 'autem quis sunt', 'Voluptatum deserunt aut omnis reprehenderit natus repellendus pariatur esse.', 1, NULL, 45, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(46, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Decorator', 'Genoveva Moore', 'sit ab ducimus', 'Saepe quia quod laboriosam distinctio nesciunt quis.', 1, NULL, 46, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(47, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Waste Treatment Plant Operator', 'Mr. Reilly Rodriguez DVM', 'in voluptatem necessitatibus', 'Quaerat qui velit laudantium.', 1, NULL, 47, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(48, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Word Processors and Typist', 'Dr. Bell Bernhard DVM', 'omnis consequuntur molestiae', 'Voluptas qui reprehenderit dolores atque.', 1, NULL, 48, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(49, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Computer Software Engineer', 'Brittany Nienow', 'quod omnis aut', 'Neque asperiores esse quis eligendi nihil.', 1, NULL, 49, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(50, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Storage Manager OR Distribution Manager', 'Lambert Stokes', 'quibusdam dignissimos omnis', 'Sed quaerat praesentium adipisci excepturi.', 0, NULL, 50, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(51, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Biophysicist', 'Johanna Pfannerstill', 'dicta qui velit', 'Veritatis nostrum totam quis amet aperiam nihil ipsum.', 0, NULL, 51, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(52, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Computer Operator', 'Ms. Evalyn Quitzon', 'omnis est tempora', 'Facere asperiores voluptas odit ipsa.', 0, NULL, 52, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(53, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Engineering', 'Miss Coralie Cormier', 'ea suscipit eveniet', 'Beatae necessitatibus autem perspiciatis tempore voluptates nam.', 1, NULL, 53, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(54, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Wind Instrument Repairer', 'Nathanial Hauck', 'qui odit quae', 'Doloremque ut quos dolore vitae minus maiores.', 1, NULL, 54, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(55, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'HR Manager', 'Ronny Batz', 'veniam in voluptatum', 'Sunt adipisci qui pariatur rerum vero.', 1, NULL, 55, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(56, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Construction Equipment Operator', 'Keegan Crist', 'dolore ut accusamus', 'Qui repellat ipsam illum ut et.', 0, NULL, 56, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(57, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Librarian', 'Ernie Treutel I', 'qui occaecati molestias', 'Et quia quia et perspiciatis quas explicabo quam.', 0, NULL, 57, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(58, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Court Clerk', 'Esperanza Sanford', 'sequi ipsam dicta', 'Iusto repudiandae doloremque et rem voluptatem eum commodi.', 0, NULL, 58, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(59, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Detective', 'Cortney Tromp', 'velit ipsa voluptatem', 'Et molestiae voluptates temporibus voluptatem hic voluptas.', 1, NULL, 59, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(60, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Home Economics Teacher', 'Dr. Myron Tromp I', 'non nemo facilis', 'Et assumenda placeat quis vel.', 1, NULL, 60, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(61, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Personal Care Worker', 'Marilyne Konopelski', 'et reprehenderit consequatur', 'Ea impedit sit et quis quos molestiae eum delectus.', 0, NULL, 61, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(62, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Sales Manager', 'Dr. Freeman West', 'fugiat aut fuga', 'Rerum reiciendis aut consectetur.', 1, NULL, 62, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(63, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Radio and Television Announcer', 'Scotty Schmidt DDS', 'et a voluptas', 'Voluptatem voluptates dolor magnam velit ut.', 1, NULL, 63, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(64, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Dental Laboratory Technician', 'Frank Wolff', 'est blanditiis rerum', 'Qui sit ea sint.', 0, NULL, 64, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(65, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Fraud Investigator', 'Mr. Gennaro Kutch', 'voluptates architecto ut', 'Explicabo veniam culpa similique consectetur ut enim pariatur.', 0, NULL, 65, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(66, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Management Analyst', 'Hilton Schumm', 'dolorem numquam mollitia', 'Est aut adipisci doloribus eum ut quas.', 1, NULL, 66, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(67, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'RN', 'Johann Kiehn', 'laudantium aut vero', 'Sed eaque aspernatur explicabo autem necessitatibus corrupti.', 1, NULL, 67, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(68, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Administrative Support Supervisors', 'Eric Wuckert', 'ullam non earum', 'Suscipit veritatis inventore quas sed.', 1, NULL, 68, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(69, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Surveying Technician', 'Harley Hagenes', 'culpa in adipisci', 'Fuga omnis vero dolor minima.', 1, NULL, 69, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(70, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Travel Agent', 'Roberta West V', 'enim natus nesciunt', 'Iste libero id accusantium et.', 1, NULL, 70, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(71, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Train Crew', 'Myrtle Krajcik', 'voluptatem aut officiis', 'Sunt similique quam ut accusamus beatae doloribus.', 0, NULL, 71, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(72, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Taxi Drivers and Chauffeur', 'Edgardo Price', 'consequuntur enim est', 'Esse impedit aut fugiat veritatis harum qui rerum.', 0, NULL, 72, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(73, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Locksmith', 'Tavares Robel', 'voluptatum ut sed', 'Quia occaecati sit et consequatur omnis dolor.', 0, NULL, 73, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(74, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Merchandise Displayer OR Window Trimmer', 'Conor Block', 'molestias molestiae ad', 'Ratione et culpa dolores veniam voluptas at.', 1, NULL, 74, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(75, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'History Teacher', 'Alverta Murphy', 'et qui quo', 'Minima aperiam amet voluptatum nihil doloribus et tempora.', 0, NULL, 75, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(76, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Artist', 'Danny Waelchi Jr.', 'suscipit quia totam', 'Nihil qui aperiam voluptatem quis iure.', 1, NULL, 76, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(77, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Anthropology Teacher', 'Lillie Mills', 'voluptatem impedit harum', 'Sit qui eum sed aut.', 1, NULL, 77, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(78, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Recreational Vehicle Service Technician', 'Rylee Mayer', 'consequatur sunt doloremque', 'A sit temporibus ut.', 0, NULL, 78, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(79, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Cutting Machine Operator', 'Buster Schuster', 'quis nisi ut', 'Vitae dolores autem hic ut.', 0, NULL, 79, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(80, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Technical Program Manager', 'Zakary Schmeler IV', 'non rerum ab', 'Ut quia commodi vel dicta voluptates.', 0, NULL, 80, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(81, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Construction Driller', 'Nikolas Lynch', 'minus qui ut', 'Et quo quia iusto error sit ut.', 1, NULL, 81, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(82, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Social Work Teacher', 'Gabriella Fay', 'porro temporibus similique', 'Enim dolores praesentium eius non sit aut nulla.', 0, NULL, 82, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(83, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Surgical Technologist', 'Mabel Hirthe Sr.', 'eum ea molestias', 'Saepe et minus voluptate dolore ut rerum ut.', 1, NULL, 83, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(84, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Title Searcher', 'Weldon Jacobson IV', 'occaecati esse illo', 'In ut ipsa temporibus a consequatur harum.', 0, NULL, 84, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(85, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Organizational Development Manager', 'Prof. Bennie Kirlin', 'eius aut officia', 'Veniam a quia aut quae aut explicabo.', 1, NULL, 85, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(86, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Insulation Worker', 'Elfrieda Lebsack I', 'cum ea ut', 'Ab quia sed veniam hic est.', 0, NULL, 86, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(87, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Metal Fabricator', 'Dr. Winfield Bailey', 'nostrum et ullam', 'Sit qui velit doloremque non.', 0, NULL, 87, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(88, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Forming Machine Operator', 'Prof. German Reichert', 'vero vel et', 'Ea error molestiae laboriosam nam ut tenetur.', 0, NULL, 88, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(89, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Real Estate Sales Agent', 'Judge Murazik', 'molestiae quae beatae', 'Nemo in et architecto.', 0, NULL, 89, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(90, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Psychiatric Aide', 'Armand Cummings', 'animi voluptatibus consequatur', 'Suscipit et cumque veniam tempora.', 1, NULL, 90, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(91, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Private Sector Executive', 'Edgardo Skiles', 'dolor et harum', 'Dolorum at voluptatum dolores consectetur cumque quos.', 1, NULL, 91, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(92, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Home', 'Prof. Keven Labadie PhD', 'numquam nihil qui', 'Repellendus in ea totam et quisquam.', 0, NULL, 92, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(93, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Farmer', 'Prof. Vicente Considine', 'fugiat laboriosam qui', 'Sed sapiente omnis est qui.', 1, NULL, 93, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(94, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Carpenter Assembler and Repairer', 'Jovanny Goldner II', 'dolorum qui autem', 'Quos provident quaerat enim et ullam cupiditate.', 0, NULL, 94, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(95, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Travel Agent', 'Toney Gusikowski', 'sunt possimus architecto', 'Perspiciatis sed libero illo iste.', 1, NULL, 95, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(96, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Organizational Development Manager', 'Keagan Maggio', 'rerum nostrum molestiae', 'Fugit perferendis quod sed ullam nulla sequi voluptas.', 1, NULL, 96, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(97, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Office Machine and Cash Register Servicer', 'Rosamond Considine', 'suscipit eligendi sed', 'Quidem qui voluptatem quos explicabo.', 0, NULL, 97, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(98, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Database Administrator', 'Daryl Streich', 'veritatis qui adipisci', 'Eveniet dolor molestiae rem amet fuga nihil voluptatem.', 0, NULL, 98, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(99, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'CEO', 'Arnaldo Bernhard', 'error excepturi et', 'Quam magnam ea vel dolor laboriosam est non.', 1, NULL, 99, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(100, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Air Traffic Controller', 'Mr. Adrian Gerhold DVM', 'voluptatem alias dolores', 'Alias animi fuga possimus maiores.', 0, NULL, 100, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(101, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Camera Operator', 'Kian Hegmann', 'molestiae et tenetur', 'Provident excepturi vitae et quos et.', 0, NULL, 101, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(102, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Board Of Directors', 'Dr. Gerard Hyatt Jr.', 'quaerat sequi distinctio', 'Ratione sed autem aut.', 1, NULL, 102, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(103, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Life Scientists', 'Prof. Maximillian Cummerata PhD', 'laborum qui eos', 'Rem dolorum qui voluptates.', 1, NULL, 103, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(104, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Warehouse', 'Beryl Muller', 'quibusdam est nulla', 'Debitis quaerat voluptatum illum.', 1, NULL, 104, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(105, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Manager of Food Preparation', 'Sincere Koch', 'dolores voluptatem deleniti', 'Qui sint harum facere earum necessitatibus autem.', 0, NULL, 105, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(106, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Automotive Specialty Technician', 'Wilfredo Reilly', 'debitis est occaecati', 'Ullam rem error consequatur eaque accusantium consectetur.', 1, NULL, 106, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(107, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Elementary School Teacher', 'Anthony Borer', 'tenetur odit hic', 'Harum soluta et harum.', 0, NULL, 107, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(108, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Airfield Operations Specialist', 'Dr. Maribel Hudson Jr.', 'a placeat eius', 'Molestias a alias nihil odio esse.', 1, NULL, 108, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(109, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Office Clerk', 'Jaime Bergnaum', 'doloribus placeat unde', 'Et molestiae dicta esse necessitatibus.', 0, NULL, 109, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(110, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Professional Photographer', 'Mrs. Jeanie Dicki', 'voluptatem dolores minima', 'Magni a debitis sit recusandae omnis.', 1, NULL, 110, '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(111, 'Pampanga', 'Angeles', '2023', 'Sample St Blk 1 Lot 5', 'Filipino', 'Computer Specialist', 'Robbie Schiller', 'rerum error sunt', 'Blanditiis quaerat similique libero eos modi.', 1, NULL, 111, '2024-01-26 01:16:05', '2024-01-26 01:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `adoption_requests`
--

CREATE TABLE `adoption_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `reason` text NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adoption_status`
--

CREATE TABLE `adoption_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adoption_request_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approved','declined','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `severity` enum('Low','Medium','High') DEFAULT NULL,
  `type` enum('Dog','Cat','Others') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_types`
--

INSERT INTO `case_types` (`id`, `name`, `severity`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Unauthorized Dog Selling', 'Low', 'Dog', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(2, 'Unleashed Dogs in Public Spaces', 'Low', 'Dog', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(3, 'Missing Cat Identification', 'Low', 'Cat', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(4, 'Minor Cat Neglect', 'Low', 'Cat', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(5, 'Non-Emergency Dog Hoarding', 'Low', 'Others', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(6, 'Non-Emergency Cat Hoarding', 'Low', 'Others', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(7, 'Investigation of Dog Cruelty', 'Medium', 'Dog', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(8, 'Illegal Dog Breeding Operations', 'Medium', 'Dog', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(9, 'Inadequate Shelter for Cats', 'Medium', 'Cat', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(10, 'Cat Abandonment', 'Medium', 'Cat', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(11, 'Pet Theft for Resale (Dog)', 'Medium', 'Others', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(12, 'Pet Theft for Resale (Cat)', 'Medium', 'Others', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(13, 'Dog Cruelty', 'High', 'Dog', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(14, 'Emergency Dog Hoarding', 'High', 'Dog', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(15, 'Wildlife Trafficking (Cats)', 'High', 'Cat', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(16, 'Cat Fighting Rings', 'High', 'Cat', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(17, 'Large-Scale Puppy Mill Operations (Dog)', 'High', 'Others', '2024-01-26 01:16:05', '2024-01-26 01:16:05'),
(18, 'Large-Scale Kitten Mill Operations (Cat)', 'High', 'Others', '2024-01-26 01:16:05', '2024-01-26 01:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `demotions`
--

CREATE TABLE `demotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demoted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_06_100044_create_pets_table', 1),
(7, '2023_08_18_131500_create_additional_user_details_table', 1),
(8, '2023_08_20_120034_create_adoption_requests_table', 1),
(9, '2023_08_21_180955_create_adoption_status_table', 1),
(10, '2023_08_22_040434_create_missing_pets_table', 1),
(11, '2023_08_27_130144_create_case_types_table', 1),
(12, '2023_08_27_130531_create_reports_table', 1),
(13, '2023_09_11_114502_add_is_super_admin_to_users', 1),
(14, '2023_09_12_005326_create_demotions_table', 1),
(15, '2023_09_12_005326_create_promotions_table', 1),
(16, '2023_09_12_011539_add_promoted_at_to_promotions_table', 1),
(17, '2023_09_12_012915_add_demoted_at_to_demotions_table', 1),
(18, '2023_09_18_232526_create_pet_surrenders_table', 1),
(19, '2023_09_19_044540_create_feedbacks_table', 1),
(20, '2023_09_29_002620_create_pet_monitoring_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `missing_pets`
--

CREATE TABLE `missing_pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pet_name` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `type` enum('Dog','Cat') NOT NULL,
  `species` varchar(255) DEFAULT NULL,
  `age_years` smallint(5) UNSIGNED DEFAULT NULL,
  `age_months` tinyint(3) UNSIGNED DEFAULT NULL,
  `pictures` varchar(255) DEFAULT NULL,
  `notable_features` varchar(255) DEFAULT NULL,
  `last_seen_location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `contact_social_media` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `status` enum('pending','open','solved','cancelled') NOT NULL DEFAULT 'pending',
  `missing_since` date DEFAULT NULL,
  `date_found` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missing_pets`
--

INSERT INTO `missing_pets` (`id`, `user_id`, `pet_name`, `gender`, `type`, `species`, `age_years`, `age_months`, `pictures`, `notable_features`, `last_seen_location`, `description`, `contact_social_media`, `contact_phone`, `contact_email`, `status`, `missing_since`, `date_found`, `created_at`, `updated_at`) VALUES
(1, 96, 'Pet Name 1', 'Male', 'Cat', 'Species 1', 1, 5, NULL, 'Notable Features 1', 'Location 1', 'Description 1', 'Contact Social Media 1', 'Contact Phone 1', 'contact_email_1@example.com', 'pending', '2020-03-26', NULL, '2021-02-14 01:16:05', '2020-03-26 01:16:05'),
(2, 53, 'Pet Name 2', 'Male', 'Dog', 'Species 2', 5, 3, NULL, 'Notable Features 2', 'Location 2', 'Description 2', 'Contact Social Media 2', 'Contact Phone 2', 'contact_email_2@example.com', 'pending', '2020-08-26', NULL, '2022-01-03 01:16:05', '2020-08-26 01:16:05'),
(3, 8, 'Pet Name 3', 'Female', 'Cat', 'Species 3', 5, 3, NULL, 'Notable Features 3', 'Location 3', 'Description 3', 'Contact Social Media 3', 'Contact Phone 3', 'contact_email_3@example.com', 'pending', '2022-07-26', NULL, '2023-08-14 01:16:05', '2022-07-26 01:16:05'),
(4, 97, 'Pet Name 4', 'Female', 'Dog', 'Species 4', 1, 7, NULL, 'Notable Features 4', 'Location 4', 'Description 4', 'Contact Social Media 4', 'Contact Phone 4', 'contact_email_4@example.com', 'pending', '2020-09-26', NULL, '2023-04-12 01:16:05', '2020-09-26 01:16:05'),
(5, 57, 'Pet Name 5', 'Male', 'Cat', 'Species 5', 1, 11, NULL, 'Notable Features 5', 'Location 5', 'Description 5', 'Contact Social Media 5', 'Contact Phone 5', 'contact_email_5@example.com', 'pending', '2021-05-26', NULL, '2021-04-27 01:16:05', '2021-05-26 01:16:05'),
(6, 12, 'Pet Name 6', 'Female', 'Dog', 'Species 6', 2, 10, NULL, 'Notable Features 6', 'Location 6', 'Description 6', 'Contact Social Media 6', 'Contact Phone 6', 'contact_email_6@example.com', 'pending', '2020-05-26', NULL, '2021-06-21 01:16:05', '2020-05-26 01:16:05'),
(7, 108, 'Pet Name 7', 'Male', 'Dog', 'Species 7', 9, 8, NULL, 'Notable Features 7', 'Location 7', 'Description 7', 'Contact Social Media 7', 'Contact Phone 7', 'contact_email_7@example.com', 'pending', '2019-06-26', NULL, '2021-11-05 01:16:05', '2019-06-26 01:16:05'),
(8, 88, 'Pet Name 8', 'Male', 'Cat', 'Species 8', 1, 3, NULL, 'Notable Features 8', 'Location 8', 'Description 8', 'Contact Social Media 8', 'Contact Phone 8', 'contact_email_8@example.com', 'pending', '2022-07-26', NULL, '2022-09-19 01:16:05', '2022-07-26 01:16:05'),
(9, 16, 'Pet Name 9', 'Female', 'Dog', 'Species 9', 8, 10, NULL, 'Notable Features 9', 'Location 9', 'Description 9', 'Contact Social Media 9', 'Contact Phone 9', 'contact_email_9@example.com', 'pending', '2018-12-26', NULL, '2019-08-11 01:16:05', '2018-12-26 01:16:05'),
(10, 1, 'Pet Name 10', 'Female', 'Dog', 'Species 10', 10, 6, NULL, 'Notable Features 10', 'Location 10', 'Description 10', 'Contact Social Media 10', 'Contact Phone 10', 'contact_email_10@example.com', 'pending', '2022-10-26', NULL, '2023-01-01 01:16:05', '2022-10-26 01:16:05'),
(11, 63, 'Pet Name 11', 'Male', 'Cat', 'Species 11', 9, 10, NULL, 'Notable Features 11', 'Location 11', 'Description 11', 'Contact Social Media 11', 'Contact Phone 11', 'contact_email_11@example.com', 'pending', '2021-11-26', NULL, '2023-05-20 01:16:05', '2021-11-26 01:16:05'),
(12, 27, 'Pet Name 12', 'Female', 'Dog', 'Species 12', 5, 2, NULL, 'Notable Features 12', 'Location 12', 'Description 12', 'Contact Social Media 12', 'Contact Phone 12', 'contact_email_12@example.com', 'pending', '2019-12-26', NULL, '2023-06-14 01:16:05', '2019-12-26 01:16:05'),
(13, 65, 'Pet Name 13', 'Male', 'Cat', 'Species 13', 9, 7, NULL, 'Notable Features 13', 'Location 13', 'Description 13', 'Contact Social Media 13', 'Contact Phone 13', 'contact_email_13@example.com', 'pending', '2019-03-26', NULL, '2019-10-22 01:16:05', '2019-03-26 01:16:05'),
(14, 16, 'Pet Name 14', 'Female', 'Dog', 'Species 14', 9, 2, NULL, 'Notable Features 14', 'Location 14', 'Description 14', 'Contact Social Media 14', 'Contact Phone 14', 'contact_email_14@example.com', 'pending', '2018-09-26', NULL, '2019-09-20 01:16:05', '2018-09-26 01:16:05'),
(15, 8, 'Pet Name 15', 'Male', 'Dog', 'Species 15', 4, 12, NULL, 'Notable Features 15', 'Location 15', 'Description 15', 'Contact Social Media 15', 'Contact Phone 15', 'contact_email_15@example.com', 'pending', '2020-07-26', NULL, '2021-07-21 01:16:05', '2020-07-26 01:16:05'),
(16, 38, 'Pet Name 16', 'Male', 'Dog', 'Species 16', 7, 9, NULL, 'Notable Features 16', 'Location 16', 'Description 16', 'Contact Social Media 16', 'Contact Phone 16', 'contact_email_16@example.com', 'pending', '2018-09-26', NULL, '2021-02-19 01:16:05', '2018-09-26 01:16:05'),
(17, 2, 'Pet Name 17', 'Female', 'Dog', 'Species 17', 1, 8, NULL, 'Notable Features 17', 'Location 17', 'Description 17', 'Contact Social Media 17', 'Contact Phone 17', 'contact_email_17@example.com', 'pending', '2019-04-26', NULL, '2022-02-28 01:16:05', '2019-04-26 01:16:05'),
(18, 10, 'Pet Name 18', 'Female', 'Dog', 'Species 18', 7, 7, NULL, 'Notable Features 18', 'Location 18', 'Description 18', 'Contact Social Media 18', 'Contact Phone 18', 'contact_email_18@example.com', 'pending', '2023-01-26', NULL, '2023-01-31 01:16:05', '2023-01-26 01:16:05'),
(19, 82, 'Pet Name 19', 'Male', 'Dog', 'Species 19', 1, 6, NULL, 'Notable Features 19', 'Location 19', 'Description 19', 'Contact Social Media 19', 'Contact Phone 19', 'contact_email_19@example.com', 'pending', '2020-07-26', NULL, '2020-10-15 01:16:05', '2020-07-26 01:16:05'),
(20, 51, 'Pet Name 20', 'Female', 'Dog', 'Species 20', 2, 9, NULL, 'Notable Features 20', 'Location 20', 'Description 20', 'Contact Social Media 20', 'Contact Phone 20', 'contact_email_20@example.com', 'pending', '2021-01-26', NULL, '2022-09-27 01:16:05', '2021-01-26 01:16:05'),
(21, 109, 'Pet Name 21', 'Female', 'Cat', 'Species 21', 9, 5, NULL, 'Notable Features 21', 'Location 21', 'Description 21', 'Contact Social Media 21', 'Contact Phone 21', 'contact_email_21@example.com', 'pending', '2020-11-26', NULL, '2022-06-12 01:16:05', '2020-11-26 01:16:05'),
(22, 17, 'Pet Name 22', 'Female', 'Cat', 'Species 22', 4, 5, NULL, 'Notable Features 22', 'Location 22', 'Description 22', 'Contact Social Media 22', 'Contact Phone 22', 'contact_email_22@example.com', 'pending', '2020-05-26', NULL, '2022-08-09 01:16:05', '2020-05-26 01:16:05'),
(23, 79, 'Pet Name 23', 'Male', 'Cat', 'Species 23', 6, 1, NULL, 'Notable Features 23', 'Location 23', 'Description 23', 'Contact Social Media 23', 'Contact Phone 23', 'contact_email_23@example.com', 'pending', '2018-12-26', NULL, '2023-02-17 01:16:05', '2018-12-26 01:16:05'),
(24, 44, 'Pet Name 24', 'Female', 'Cat', 'Species 24', 3, 4, NULL, 'Notable Features 24', 'Location 24', 'Description 24', 'Contact Social Media 24', 'Contact Phone 24', 'contact_email_24@example.com', 'pending', '2020-01-26', NULL, '2023-08-24 01:16:05', '2020-01-26 01:16:05'),
(25, 48, 'Pet Name 25', 'Male', 'Cat', 'Species 25', 5, 7, NULL, 'Notable Features 25', 'Location 25', 'Description 25', 'Contact Social Media 25', 'Contact Phone 25', 'contact_email_25@example.com', 'pending', '2018-02-26', NULL, '2023-03-13 01:16:05', '2018-02-26 01:16:05'),
(26, 34, 'Pet Name 26', 'Female', 'Cat', 'Species 26', 1, 8, NULL, 'Notable Features 26', 'Location 26', 'Description 26', 'Contact Social Media 26', 'Contact Phone 26', 'contact_email_26@example.com', 'pending', '2018-10-26', NULL, '2019-04-01 01:16:05', '2018-10-26 01:16:05'),
(27, 58, 'Pet Name 27', 'Female', 'Cat', 'Species 27', 10, 6, NULL, 'Notable Features 27', 'Location 27', 'Description 27', 'Contact Social Media 27', 'Contact Phone 27', 'contact_email_27@example.com', 'pending', '2020-09-26', NULL, '2020-11-06 01:16:05', '2020-09-26 01:16:05'),
(28, 27, 'Pet Name 28', 'Female', 'Cat', 'Species 28', 5, 8, NULL, 'Notable Features 28', 'Location 28', 'Description 28', 'Contact Social Media 28', 'Contact Phone 28', 'contact_email_28@example.com', 'pending', '2020-06-26', NULL, '2020-04-17 01:16:05', '2020-06-26 01:16:05'),
(29, 70, 'Pet Name 29', 'Male', 'Dog', 'Species 29', 3, 9, NULL, 'Notable Features 29', 'Location 29', 'Description 29', 'Contact Social Media 29', 'Contact Phone 29', 'contact_email_29@example.com', 'pending', '2019-11-26', NULL, '2020-04-19 01:16:05', '2019-11-26 01:16:05'),
(30, 52, 'Pet Name 30', 'Female', 'Dog', 'Species 30', 3, 10, NULL, 'Notable Features 30', 'Location 30', 'Description 30', 'Contact Social Media 30', 'Contact Phone 30', 'contact_email_30@example.com', 'pending', '2021-04-26', NULL, '2021-12-03 01:16:05', '2021-04-26 01:16:05'),
(31, 1, 'Pet Name 31', 'Female', 'Cat', 'Species 31', 5, 6, NULL, 'Notable Features 31', 'Location 31', 'Description 31', 'Contact Social Media 31', 'Contact Phone 31', 'contact_email_31@example.com', 'pending', '2021-09-26', NULL, '2022-12-25 01:16:05', '2021-09-26 01:16:05'),
(32, 13, 'Pet Name 32', 'Male', 'Dog', 'Species 32', 5, 1, NULL, 'Notable Features 32', 'Location 32', 'Description 32', 'Contact Social Media 32', 'Contact Phone 32', 'contact_email_32@example.com', 'pending', '2019-07-26', NULL, '2023-03-23 01:16:05', '2019-07-26 01:16:05'),
(33, 24, 'Pet Name 33', 'Female', 'Cat', 'Species 33', 2, 7, NULL, 'Notable Features 33', 'Location 33', 'Description 33', 'Contact Social Media 33', 'Contact Phone 33', 'contact_email_33@example.com', 'pending', '2021-11-26', NULL, '2023-03-20 01:16:05', '2021-11-26 01:16:05'),
(34, 91, 'Pet Name 34', 'Male', 'Cat', 'Species 34', 8, 7, NULL, 'Notable Features 34', 'Location 34', 'Description 34', 'Contact Social Media 34', 'Contact Phone 34', 'contact_email_34@example.com', 'pending', '2019-01-26', NULL, '2022-04-18 01:16:05', '2019-01-26 01:16:05'),
(35, 107, 'Pet Name 35', 'Male', 'Dog', 'Species 35', 10, 12, NULL, 'Notable Features 35', 'Location 35', 'Description 35', 'Contact Social Media 35', 'Contact Phone 35', 'contact_email_35@example.com', 'pending', '2021-07-26', NULL, '2022-06-18 01:16:05', '2021-07-26 01:16:05'),
(36, 30, 'Pet Name 36', 'Male', 'Cat', 'Species 36', 1, 7, NULL, 'Notable Features 36', 'Location 36', 'Description 36', 'Contact Social Media 36', 'Contact Phone 36', 'contact_email_36@example.com', 'pending', '2022-06-26', NULL, '2022-07-01 01:16:05', '2022-06-26 01:16:05'),
(37, 33, 'Pet Name 37', 'Male', 'Dog', 'Species 37', 5, 6, NULL, 'Notable Features 37', 'Location 37', 'Description 37', 'Contact Social Media 37', 'Contact Phone 37', 'contact_email_37@example.com', 'pending', '2020-08-26', NULL, '2021-03-04 01:16:05', '2020-08-26 01:16:05'),
(38, 14, 'Pet Name 38', 'Female', 'Dog', 'Species 38', 4, 12, NULL, 'Notable Features 38', 'Location 38', 'Description 38', 'Contact Social Media 38', 'Contact Phone 38', 'contact_email_38@example.com', 'pending', '2019-09-26', NULL, '2023-01-21 01:16:05', '2019-09-26 01:16:05'),
(39, 86, 'Pet Name 39', 'Female', 'Cat', 'Species 39', 8, 4, NULL, 'Notable Features 39', 'Location 39', 'Description 39', 'Contact Social Media 39', 'Contact Phone 39', 'contact_email_39@example.com', 'pending', '2022-12-26', NULL, '2022-11-26 01:16:05', '2022-12-26 01:16:05'),
(40, 41, 'Pet Name 40', 'Male', 'Cat', 'Species 40', 6, 12, NULL, 'Notable Features 40', 'Location 40', 'Description 40', 'Contact Social Media 40', 'Contact Phone 40', 'contact_email_40@example.com', 'pending', '2019-02-26', NULL, '2020-09-23 01:16:05', '2019-02-26 01:16:05'),
(41, 35, 'Pet Name 41', 'Female', 'Cat', 'Species 41', 3, 12, NULL, 'Notable Features 41', 'Location 41', 'Description 41', 'Contact Social Media 41', 'Contact Phone 41', 'contact_email_41@example.com', 'pending', '2018-08-26', NULL, '2023-02-04 01:16:05', '2018-08-26 01:16:05'),
(42, 89, 'Pet Name 42', 'Male', 'Dog', 'Species 42', 1, 7, NULL, 'Notable Features 42', 'Location 42', 'Description 42', 'Contact Social Media 42', 'Contact Phone 42', 'contact_email_42@example.com', 'pending', '2019-11-26', NULL, '2020-12-26 01:16:05', '2019-11-26 01:16:05'),
(43, 27, 'Pet Name 43', 'Male', 'Dog', 'Species 43', 4, 4, NULL, 'Notable Features 43', 'Location 43', 'Description 43', 'Contact Social Media 43', 'Contact Phone 43', 'contact_email_43@example.com', 'pending', '2021-07-26', NULL, '2023-06-28 01:16:05', '2021-07-26 01:16:05'),
(44, 2, 'Pet Name 44', 'Female', 'Cat', 'Species 44', 5, 8, NULL, 'Notable Features 44', 'Location 44', 'Description 44', 'Contact Social Media 44', 'Contact Phone 44', 'contact_email_44@example.com', 'pending', '2018-06-26', NULL, '2022-02-16 01:16:05', '2018-06-26 01:16:05'),
(45, 64, 'Pet Name 45', 'Female', 'Dog', 'Species 45', 6, 1, NULL, 'Notable Features 45', 'Location 45', 'Description 45', 'Contact Social Media 45', 'Contact Phone 45', 'contact_email_45@example.com', 'pending', '2020-02-26', NULL, '2020-08-27 01:16:05', '2020-02-26 01:16:05'),
(46, 105, 'Pet Name 46', 'Female', 'Dog', 'Species 46', 3, 8, NULL, 'Notable Features 46', 'Location 46', 'Description 46', 'Contact Social Media 46', 'Contact Phone 46', 'contact_email_46@example.com', 'pending', '2020-11-26', NULL, '2020-06-24 01:16:05', '2020-11-26 01:16:05'),
(47, 11, 'Pet Name 47', 'Male', 'Dog', 'Species 47', 6, 7, NULL, 'Notable Features 47', 'Location 47', 'Description 47', 'Contact Social Media 47', 'Contact Phone 47', 'contact_email_47@example.com', 'pending', '2019-10-26', NULL, '2021-03-12 01:16:05', '2019-10-26 01:16:05'),
(48, 30, 'Pet Name 48', 'Female', 'Cat', 'Species 48', 9, 1, NULL, 'Notable Features 48', 'Location 48', 'Description 48', 'Contact Social Media 48', 'Contact Phone 48', 'contact_email_48@example.com', 'pending', '2021-11-26', NULL, '2023-02-05 01:16:05', '2021-11-26 01:16:05'),
(49, 9, 'Pet Name 49', 'Male', 'Cat', 'Species 49', 6, 12, NULL, 'Notable Features 49', 'Location 49', 'Description 49', 'Contact Social Media 49', 'Contact Phone 49', 'contact_email_49@example.com', 'pending', '2019-04-26', NULL, '2021-01-30 01:16:05', '2019-04-26 01:16:05'),
(50, 36, 'Pet Name 50', 'Female', 'Dog', 'Species 50', 2, 2, NULL, 'Notable Features 50', 'Location 50', 'Description 50', 'Contact Social Media 50', 'Contact Phone 50', 'contact_email_50@example.com', 'pending', '2019-03-26', NULL, '2021-07-01 01:16:05', '2019-03-26 01:16:05'),
(51, 28, 'Pet Name 1', 'Female', 'Cat', 'Species 1', 7, 11, NULL, 'Notable Features 1', 'Location 1', 'Description 1', 'Contact Social Media 1', 'Contact Phone 1', 'contact_email_1@example.com', 'solved', '2019-08-26', '2019-09-01', '2021-01-30 01:16:05', '2019-08-26 01:16:05'),
(52, 102, 'Pet Name 2', 'Male', 'Cat', 'Species 2', 9, 3, NULL, 'Notable Features 2', 'Location 2', 'Description 2', 'Contact Social Media 2', 'Contact Phone 2', 'contact_email_2@example.com', 'solved', '2022-04-26', '2022-05-10', '2022-10-21 01:16:05', '2022-04-26 01:16:05'),
(53, 75, 'Pet Name 3', 'Male', 'Dog', 'Species 3', 3, 11, NULL, 'Notable Features 3', 'Location 3', 'Description 3', 'Contact Social Media 3', 'Contact Phone 3', 'contact_email_3@example.com', 'solved', '2021-01-26', '2021-02-09', '2020-11-11 01:16:05', '2021-01-26 01:16:05'),
(54, 31, 'Pet Name 4', 'Female', 'Cat', 'Species 4', 9, 7, NULL, 'Notable Features 4', 'Location 4', 'Description 4', 'Contact Social Media 4', 'Contact Phone 4', 'contact_email_4@example.com', 'solved', '2021-10-26', '2021-11-21', '2022-09-26 01:16:05', '2021-10-26 01:16:05'),
(55, 105, 'Pet Name 5', 'Female', 'Dog', 'Species 5', 5, 7, NULL, 'Notable Features 5', 'Location 5', 'Description 5', 'Contact Social Media 5', 'Contact Phone 5', 'contact_email_5@example.com', 'solved', '2019-09-26', '2019-10-12', '2023-01-31 01:16:05', '2019-09-26 01:16:05'),
(56, 46, 'Pet Name 6', 'Female', 'Cat', 'Species 6', 1, 10, NULL, 'Notable Features 6', 'Location 6', 'Description 6', 'Contact Social Media 6', 'Contact Phone 6', 'contact_email_6@example.com', 'solved', '2020-12-26', '2021-01-14', '2021-10-19 01:16:05', '2020-12-26 01:16:05'),
(57, 13, 'Pet Name 7', 'Female', 'Dog', 'Species 7', 9, 6, NULL, 'Notable Features 7', 'Location 7', 'Description 7', 'Contact Social Media 7', 'Contact Phone 7', 'contact_email_7@example.com', 'solved', '2019-05-26', '2019-06-20', '2020-09-28 01:16:05', '2019-05-26 01:16:05'),
(58, 30, 'Pet Name 8', 'Male', 'Cat', 'Species 8', 5, 1, NULL, 'Notable Features 8', 'Location 8', 'Description 8', 'Contact Social Media 8', 'Contact Phone 8', 'contact_email_8@example.com', 'solved', '2019-05-26', '2019-06-22', '2023-07-18 01:16:05', '2019-05-26 01:16:05'),
(59, 50, 'Pet Name 9', 'Female', 'Cat', 'Species 9', 9, 10, NULL, 'Notable Features 9', 'Location 9', 'Description 9', 'Contact Social Media 9', 'Contact Phone 9', 'contact_email_9@example.com', 'solved', '2020-11-26', '2020-12-24', '2023-08-14 01:16:05', '2020-11-26 01:16:05'),
(60, 62, 'Pet Name 10', 'Male', 'Cat', 'Species 10', 6, 2, NULL, 'Notable Features 10', 'Location 10', 'Description 10', 'Contact Social Media 10', 'Contact Phone 10', 'contact_email_10@example.com', 'solved', '2019-03-26', '2019-04-24', '2019-07-27 01:16:05', '2019-03-26 01:16:05'),
(61, 73, 'Pet Name 11', 'Female', 'Dog', 'Species 11', 1, 8, NULL, 'Notable Features 11', 'Location 11', 'Description 11', 'Contact Social Media 11', 'Contact Phone 11', 'contact_email_11@example.com', 'solved', '2022-12-26', '2023-01-09', '2023-05-26 01:16:05', '2022-12-26 01:16:05'),
(62, 100, 'Pet Name 12', 'Female', 'Cat', 'Species 12', 9, 1, NULL, 'Notable Features 12', 'Location 12', 'Description 12', 'Contact Social Media 12', 'Contact Phone 12', 'contact_email_12@example.com', 'solved', '2019-09-26', '2019-10-03', '2023-02-22 01:16:05', '2019-09-26 01:16:05'),
(63, 85, 'Pet Name 13', 'Male', 'Cat', 'Species 13', 5, 10, NULL, 'Notable Features 13', 'Location 13', 'Description 13', 'Contact Social Media 13', 'Contact Phone 13', 'contact_email_13@example.com', 'solved', '2022-12-26', '2023-01-10', '2023-12-18 01:16:05', '2022-12-26 01:16:05'),
(64, 17, 'Pet Name 14', 'Male', 'Dog', 'Species 14', 1, 12, NULL, 'Notable Features 14', 'Location 14', 'Description 14', 'Contact Social Media 14', 'Contact Phone 14', 'contact_email_14@example.com', 'solved', '2021-01-26', '2021-02-08', '2021-02-10 01:16:05', '2021-01-26 01:16:05'),
(65, 26, 'Pet Name 15', 'Male', 'Dog', 'Species 15', 8, 9, NULL, 'Notable Features 15', 'Location 15', 'Description 15', 'Contact Social Media 15', 'Contact Phone 15', 'contact_email_15@example.com', 'solved', '2018-04-26', '2018-05-25', '2022-03-27 01:16:05', '2018-04-26 01:16:05'),
(66, 30, 'Pet Name 16', 'Female', 'Cat', 'Species 16', 7, 12, NULL, 'Notable Features 16', 'Location 16', 'Description 16', 'Contact Social Media 16', 'Contact Phone 16', 'contact_email_16@example.com', 'solved', '2021-12-26', '2022-01-18', '2022-10-07 01:16:05', '2021-12-26 01:16:05'),
(67, 91, 'Pet Name 17', 'Female', 'Cat', 'Species 17', 6, 10, NULL, 'Notable Features 17', 'Location 17', 'Description 17', 'Contact Social Media 17', 'Contact Phone 17', 'contact_email_17@example.com', 'solved', '2019-09-26', '2019-10-16', '2020-05-12 01:16:05', '2019-09-26 01:16:05'),
(68, 65, 'Pet Name 18', 'Male', 'Cat', 'Species 18', 7, 4, NULL, 'Notable Features 18', 'Location 18', 'Description 18', 'Contact Social Media 18', 'Contact Phone 18', 'contact_email_18@example.com', 'solved', '2022-12-26', '2023-01-12', '2023-10-17 01:16:05', '2022-12-26 01:16:05'),
(69, 99, 'Pet Name 19', 'Female', 'Cat', 'Species 19', 7, 4, NULL, 'Notable Features 19', 'Location 19', 'Description 19', 'Contact Social Media 19', 'Contact Phone 19', 'contact_email_19@example.com', 'solved', '2018-02-26', '2018-03-26', '2022-11-04 01:16:05', '2018-02-26 01:16:05'),
(70, 70, 'Pet Name 20', 'Male', 'Cat', 'Species 20', 9, 8, NULL, 'Notable Features 20', 'Location 20', 'Description 20', 'Contact Social Media 20', 'Contact Phone 20', 'contact_email_20@example.com', 'solved', '2021-12-26', '2022-01-18', '2023-02-05 01:16:05', '2021-12-26 01:16:05'),
(71, 6, 'Pet Name 21', 'Female', 'Dog', 'Species 21', 5, 11, NULL, 'Notable Features 21', 'Location 21', 'Description 21', 'Contact Social Media 21', 'Contact Phone 21', 'contact_email_21@example.com', 'solved', '2020-08-26', '2020-09-08', '2021-12-14 01:16:05', '2020-08-26 01:16:05'),
(72, 86, 'Pet Name 22', 'Female', 'Dog', 'Species 22', 10, 2, NULL, 'Notable Features 22', 'Location 22', 'Description 22', 'Contact Social Media 22', 'Contact Phone 22', 'contact_email_22@example.com', 'solved', '2019-05-26', '2019-05-27', '2022-10-06 01:16:05', '2019-05-26 01:16:05'),
(73, 96, 'Pet Name 23', 'Male', 'Cat', 'Species 23', 3, 10, NULL, 'Notable Features 23', 'Location 23', 'Description 23', 'Contact Social Media 23', 'Contact Phone 23', 'contact_email_23@example.com', 'solved', '2022-11-26', '2022-12-25', '2023-02-18 01:16:05', '2022-11-26 01:16:05'),
(74, 91, 'Pet Name 24', 'Female', 'Cat', 'Species 24', 8, 8, NULL, 'Notable Features 24', 'Location 24', 'Description 24', 'Contact Social Media 24', 'Contact Phone 24', 'contact_email_24@example.com', 'solved', '2021-01-26', '2021-01-31', '2021-01-19 01:16:05', '2021-01-26 01:16:05'),
(75, 59, 'Pet Name 25', 'Female', 'Dog', 'Species 25', 8, 12, NULL, 'Notable Features 25', 'Location 25', 'Description 25', 'Contact Social Media 25', 'Contact Phone 25', 'contact_email_25@example.com', 'solved', '2019-01-26', '2019-02-23', '2023-08-20 01:16:05', '2019-01-26 01:16:05'),
(76, 87, 'Pet Name 26', 'Female', 'Dog', 'Species 26', 10, 10, NULL, 'Notable Features 26', 'Location 26', 'Description 26', 'Contact Social Media 26', 'Contact Phone 26', 'contact_email_26@example.com', 'solved', '2021-03-26', '2021-04-18', '2022-06-08 01:16:05', '2021-03-26 01:16:05'),
(77, 24, 'Pet Name 27', 'Female', 'Cat', 'Species 27', 7, 1, NULL, 'Notable Features 27', 'Location 27', 'Description 27', 'Contact Social Media 27', 'Contact Phone 27', 'contact_email_27@example.com', 'solved', '2020-11-26', '2020-12-08', '2021-03-30 01:16:05', '2020-11-26 01:16:05'),
(78, 65, 'Pet Name 28', 'Male', 'Cat', 'Species 28', 7, 9, NULL, 'Notable Features 28', 'Location 28', 'Description 28', 'Contact Social Media 28', 'Contact Phone 28', 'contact_email_28@example.com', 'solved', '2020-05-26', '2020-06-08', '2020-10-16 01:16:05', '2020-05-26 01:16:05'),
(79, 96, 'Pet Name 29', 'Male', 'Cat', 'Species 29', 10, 7, NULL, 'Notable Features 29', 'Location 29', 'Description 29', 'Contact Social Media 29', 'Contact Phone 29', 'contact_email_29@example.com', 'solved', '2019-05-26', '2019-05-31', '2019-12-02 01:16:05', '2019-05-26 01:16:05'),
(80, 88, 'Pet Name 30', 'Male', 'Dog', 'Species 30', 2, 8, NULL, 'Notable Features 30', 'Location 30', 'Description 30', 'Contact Social Media 30', 'Contact Phone 30', 'contact_email_30@example.com', 'solved', '2019-04-26', '2019-05-14', '2018-12-27 01:16:05', '2019-04-26 01:16:05'),
(81, 11, 'Pet Name 31', 'Female', 'Cat', 'Species 31', 7, 10, NULL, 'Notable Features 31', 'Location 31', 'Description 31', 'Contact Social Media 31', 'Contact Phone 31', 'contact_email_31@example.com', 'solved', '2019-09-26', '2019-10-12', '2020-08-27 01:16:05', '2019-09-26 01:16:05'),
(82, 89, 'Pet Name 32', 'Female', 'Dog', 'Species 32', 6, 5, NULL, 'Notable Features 32', 'Location 32', 'Description 32', 'Contact Social Media 32', 'Contact Phone 32', 'contact_email_32@example.com', 'solved', '2019-12-26', '2019-12-31', '2020-08-03 01:16:05', '2019-12-26 01:16:05'),
(83, 35, 'Pet Name 33', 'Male', 'Dog', 'Species 33', 7, 7, NULL, 'Notable Features 33', 'Location 33', 'Description 33', 'Contact Social Media 33', 'Contact Phone 33', 'contact_email_33@example.com', 'solved', '2020-06-26', '2020-07-05', '2021-12-05 01:16:05', '2020-06-26 01:16:05'),
(84, 42, 'Pet Name 34', 'Female', 'Dog', 'Species 34', 1, 1, NULL, 'Notable Features 34', 'Location 34', 'Description 34', 'Contact Social Media 34', 'Contact Phone 34', 'contact_email_34@example.com', 'solved', '2021-09-26', '2021-09-30', '2022-06-27 01:16:05', '2021-09-26 01:16:05'),
(85, 22, 'Pet Name 35', 'Female', 'Dog', 'Species 35', 8, 10, NULL, 'Notable Features 35', 'Location 35', 'Description 35', 'Contact Social Media 35', 'Contact Phone 35', 'contact_email_35@example.com', 'solved', '2019-01-26', '2019-02-20', '2023-07-03 01:16:05', '2019-01-26 01:16:05'),
(86, 57, 'Pet Name 36', 'Male', 'Dog', 'Species 36', 7, 2, NULL, 'Notable Features 36', 'Location 36', 'Description 36', 'Contact Social Media 36', 'Contact Phone 36', 'contact_email_36@example.com', 'solved', '2018-07-26', '2018-08-07', '2019-07-19 01:16:05', '2018-07-26 01:16:05'),
(87, 43, 'Pet Name 37', 'Female', 'Dog', 'Species 37', 10, 1, NULL, 'Notable Features 37', 'Location 37', 'Description 37', 'Contact Social Media 37', 'Contact Phone 37', 'contact_email_37@example.com', 'solved', '2021-12-26', '2022-01-06', '2022-08-23 01:16:05', '2021-12-26 01:16:05'),
(88, 94, 'Pet Name 38', 'Female', 'Dog', 'Species 38', 4, 12, NULL, 'Notable Features 38', 'Location 38', 'Description 38', 'Contact Social Media 38', 'Contact Phone 38', 'contact_email_38@example.com', 'solved', '2022-09-26', '2022-09-28', '2022-12-18 01:16:05', '2022-09-26 01:16:05'),
(89, 12, 'Pet Name 39', 'Male', 'Cat', 'Species 39', 10, 9, NULL, 'Notable Features 39', 'Location 39', 'Description 39', 'Contact Social Media 39', 'Contact Phone 39', 'contact_email_39@example.com', 'solved', '2019-05-26', '2019-06-04', '2022-10-01 01:16:05', '2019-05-26 01:16:05'),
(90, 97, 'Pet Name 40', 'Female', 'Dog', 'Species 40', 2, 1, NULL, 'Notable Features 40', 'Location 40', 'Description 40', 'Contact Social Media 40', 'Contact Phone 40', 'contact_email_40@example.com', 'solved', '2021-03-26', '2021-04-03', '2023-05-13 01:16:05', '2021-03-26 01:16:05'),
(91, 57, 'Pet Name 41', 'Male', 'Cat', 'Species 41', 8, 11, NULL, 'Notable Features 41', 'Location 41', 'Description 41', 'Contact Social Media 41', 'Contact Phone 41', 'contact_email_41@example.com', 'solved', '2021-06-26', '2021-07-18', '2022-11-03 01:16:05', '2021-06-26 01:16:05'),
(92, 44, 'Pet Name 42', 'Female', 'Dog', 'Species 42', 1, 6, NULL, 'Notable Features 42', 'Location 42', 'Description 42', 'Contact Social Media 42', 'Contact Phone 42', 'contact_email_42@example.com', 'solved', '2018-09-26', '2018-09-30', '2023-03-11 01:16:05', '2018-09-26 01:16:05'),
(93, 74, 'Pet Name 43', 'Female', 'Cat', 'Species 43', 5, 8, NULL, 'Notable Features 43', 'Location 43', 'Description 43', 'Contact Social Media 43', 'Contact Phone 43', 'contact_email_43@example.com', 'solved', '2019-04-26', '2019-05-17', '2019-04-18 01:16:05', '2019-04-26 01:16:05'),
(94, 1, 'Pet Name 44', 'Male', 'Dog', 'Species 44', 7, 4, NULL, 'Notable Features 44', 'Location 44', 'Description 44', 'Contact Social Media 44', 'Contact Phone 44', 'contact_email_44@example.com', 'solved', '2022-04-26', '2022-05-17', '2023-06-02 01:16:05', '2022-04-26 01:16:05'),
(95, 75, 'Pet Name 45', 'Female', 'Dog', 'Species 45', 7, 2, NULL, 'Notable Features 45', 'Location 45', 'Description 45', 'Contact Social Media 45', 'Contact Phone 45', 'contact_email_45@example.com', 'solved', '2018-09-26', '2018-10-02', '2018-10-24 01:16:05', '2018-09-26 01:16:05'),
(96, 71, 'Pet Name 46', 'Female', 'Cat', 'Species 46', 1, 4, NULL, 'Notable Features 46', 'Location 46', 'Description 46', 'Contact Social Media 46', 'Contact Phone 46', 'contact_email_46@example.com', 'solved', '2021-04-26', '2021-05-16', '2022-08-08 01:16:05', '2021-04-26 01:16:05'),
(97, 98, 'Pet Name 47', 'Female', 'Cat', 'Species 47', 10, 2, NULL, 'Notable Features 47', 'Location 47', 'Description 47', 'Contact Social Media 47', 'Contact Phone 47', 'contact_email_47@example.com', 'solved', '2022-12-26', '2022-12-29', '2023-08-04 01:16:05', '2022-12-26 01:16:05'),
(98, 101, 'Pet Name 48', 'Female', 'Dog', 'Species 48', 10, 4, NULL, 'Notable Features 48', 'Location 48', 'Description 48', 'Contact Social Media 48', 'Contact Phone 48', 'contact_email_48@example.com', 'solved', '2021-04-26', '2021-05-20', '2021-06-16 01:16:05', '2021-04-26 01:16:05'),
(99, 80, 'Pet Name 49', 'Female', 'Cat', 'Species 49', 1, 12, NULL, 'Notable Features 49', 'Location 49', 'Description 49', 'Contact Social Media 49', 'Contact Phone 49', 'contact_email_49@example.com', 'solved', '2022-10-26', '2022-11-09', '2022-09-23 01:16:05', '2022-10-26 01:16:05'),
(100, 81, 'Pet Name 50', 'Male', 'Cat', 'Species 50', 6, 10, NULL, 'Notable Features 50', 'Location 50', 'Description 50', 'Contact Social Media 50', 'Contact Phone 50', 'contact_email_50@example.com', 'solved', '2018-03-26', '2018-04-20', '2023-05-31 01:16:05', '2018-03-26 01:16:05'),
(101, 80, 'Pet Name 1', 'Male', 'Cat', 'Species 1', 7, 3, NULL, 'Notable Features 1', 'Location 1', 'Description 1', 'Contact Social Media 1', 'Contact Phone 1', 'contact_email_1@example.com', 'open', '2019-03-26', NULL, '2023-07-31 01:16:05', '2019-03-26 01:16:05'),
(102, 16, 'Pet Name 2', 'Male', 'Cat', 'Species 2', 3, 1, NULL, 'Notable Features 2', 'Location 2', 'Description 2', 'Contact Social Media 2', 'Contact Phone 2', 'contact_email_2@example.com', 'open', '2022-09-26', NULL, '2023-05-27 01:16:05', '2022-09-26 01:16:05'),
(103, 80, 'Pet Name 3', 'Male', 'Cat', 'Species 3', 10, 11, NULL, 'Notable Features 3', 'Location 3', 'Description 3', 'Contact Social Media 3', 'Contact Phone 3', 'contact_email_3@example.com', 'open', '2019-05-26', NULL, '2022-09-17 01:16:05', '2019-05-26 01:16:05'),
(104, 93, 'Pet Name 4', 'Male', 'Cat', 'Species 4', 3, 3, NULL, 'Notable Features 4', 'Location 4', 'Description 4', 'Contact Social Media 4', 'Contact Phone 4', 'contact_email_4@example.com', 'open', '2021-02-26', NULL, '2021-12-13 01:16:05', '2021-02-26 01:16:05'),
(105, 51, 'Pet Name 5', 'Female', 'Dog', 'Species 5', 4, 9, NULL, 'Notable Features 5', 'Location 5', 'Description 5', 'Contact Social Media 5', 'Contact Phone 5', 'contact_email_5@example.com', 'open', '2018-08-26', NULL, '2022-12-10 01:16:05', '2018-08-26 01:16:05'),
(106, 45, 'Pet Name 6', 'Female', 'Dog', 'Species 6', 6, 2, NULL, 'Notable Features 6', 'Location 6', 'Description 6', 'Contact Social Media 6', 'Contact Phone 6', 'contact_email_6@example.com', 'open', '2020-10-26', NULL, '2023-09-28 01:16:05', '2020-10-26 01:16:05'),
(107, 15, 'Pet Name 7', 'Male', 'Dog', 'Species 7', 2, 9, NULL, 'Notable Features 7', 'Location 7', 'Description 7', 'Contact Social Media 7', 'Contact Phone 7', 'contact_email_7@example.com', 'open', '2018-05-26', NULL, '2018-09-02 01:16:05', '2018-05-26 01:16:05'),
(108, 67, 'Pet Name 8', 'Male', 'Dog', 'Species 8', 2, 7, NULL, 'Notable Features 8', 'Location 8', 'Description 8', 'Contact Social Media 8', 'Contact Phone 8', 'contact_email_8@example.com', 'open', '2018-05-26', NULL, '2020-08-30 01:16:05', '2018-05-26 01:16:05'),
(109, 48, 'Pet Name 9', 'Female', 'Cat', 'Species 9', 4, 12, NULL, 'Notable Features 9', 'Location 9', 'Description 9', 'Contact Social Media 9', 'Contact Phone 9', 'contact_email_9@example.com', 'open', '2021-10-26', NULL, '2021-10-25 01:16:05', '2021-10-26 01:16:05'),
(110, 55, 'Pet Name 10', 'Female', 'Dog', 'Species 10', 5, 12, NULL, 'Notable Features 10', 'Location 10', 'Description 10', 'Contact Social Media 10', 'Contact Phone 10', 'contact_email_10@example.com', 'open', '2022-04-26', NULL, '2022-09-18 01:16:05', '2022-04-26 01:16:05'),
(111, 40, 'Pet Name 11', 'Male', 'Cat', 'Species 11', 1, 10, NULL, 'Notable Features 11', 'Location 11', 'Description 11', 'Contact Social Media 11', 'Contact Phone 11', 'contact_email_11@example.com', 'open', '2018-03-26', NULL, '2023-07-21 01:16:05', '2018-03-26 01:16:05'),
(112, 91, 'Pet Name 12', 'Male', 'Dog', 'Species 12', 8, 11, NULL, 'Notable Features 12', 'Location 12', 'Description 12', 'Contact Social Media 12', 'Contact Phone 12', 'contact_email_12@example.com', 'open', '2021-06-26', NULL, '2021-11-04 01:16:05', '2021-06-26 01:16:05'),
(113, 99, 'Pet Name 13', 'Female', 'Cat', 'Species 13', 8, 9, NULL, 'Notable Features 13', 'Location 13', 'Description 13', 'Contact Social Media 13', 'Contact Phone 13', 'contact_email_13@example.com', 'open', '2022-06-26', NULL, '2023-08-14 01:16:05', '2022-06-26 01:16:05'),
(114, 48, 'Pet Name 14', 'Male', 'Dog', 'Species 14', 3, 9, NULL, 'Notable Features 14', 'Location 14', 'Description 14', 'Contact Social Media 14', 'Contact Phone 14', 'contact_email_14@example.com', 'open', '2023-01-26', NULL, '2023-05-06 01:16:05', '2023-01-26 01:16:05'),
(115, 22, 'Pet Name 15', 'Female', 'Cat', 'Species 15', 5, 4, NULL, 'Notable Features 15', 'Location 15', 'Description 15', 'Contact Social Media 15', 'Contact Phone 15', 'contact_email_15@example.com', 'open', '2018-08-26', NULL, '2023-09-18 01:16:05', '2018-08-26 01:16:05'),
(116, 102, 'Pet Name 16', 'Male', 'Dog', 'Species 16', 1, 8, NULL, 'Notable Features 16', 'Location 16', 'Description 16', 'Contact Social Media 16', 'Contact Phone 16', 'contact_email_16@example.com', 'open', '2019-08-26', NULL, '2019-11-21 01:16:05', '2019-08-26 01:16:05'),
(117, 29, 'Pet Name 17', 'Female', 'Cat', 'Species 17', 3, 6, NULL, 'Notable Features 17', 'Location 17', 'Description 17', 'Contact Social Media 17', 'Contact Phone 17', 'contact_email_17@example.com', 'open', '2022-11-26', NULL, '2022-06-20 01:16:05', '2022-11-26 01:16:05'),
(118, 109, 'Pet Name 18', 'Male', 'Cat', 'Species 18', 2, 12, NULL, 'Notable Features 18', 'Location 18', 'Description 18', 'Contact Social Media 18', 'Contact Phone 18', 'contact_email_18@example.com', 'open', '2021-05-26', NULL, '2023-08-28 01:16:05', '2021-05-26 01:16:05'),
(119, 40, 'Pet Name 19', 'Female', 'Dog', 'Species 19', 10, 11, NULL, 'Notable Features 19', 'Location 19', 'Description 19', 'Contact Social Media 19', 'Contact Phone 19', 'contact_email_19@example.com', 'open', '2020-07-26', NULL, '2021-03-22 01:16:05', '2020-07-26 01:16:05'),
(120, 67, 'Pet Name 20', 'Male', 'Dog', 'Species 20', 9, 3, NULL, 'Notable Features 20', 'Location 20', 'Description 20', 'Contact Social Media 20', 'Contact Phone 20', 'contact_email_20@example.com', 'open', '2021-02-26', NULL, '2021-03-30 01:16:05', '2021-02-26 01:16:05'),
(121, 68, 'Pet Name 21', 'Female', 'Dog', 'Species 21', 6, 5, NULL, 'Notable Features 21', 'Location 21', 'Description 21', 'Contact Social Media 21', 'Contact Phone 21', 'contact_email_21@example.com', 'open', '2021-08-26', NULL, '2023-05-23 01:16:05', '2021-08-26 01:16:05'),
(122, 33, 'Pet Name 22', 'Male', 'Dog', 'Species 22', 8, 3, NULL, 'Notable Features 22', 'Location 22', 'Description 22', 'Contact Social Media 22', 'Contact Phone 22', 'contact_email_22@example.com', 'open', '2021-08-26', NULL, '2022-02-03 01:16:05', '2021-08-26 01:16:05'),
(123, 58, 'Pet Name 23', 'Male', 'Cat', 'Species 23', 1, 5, NULL, 'Notable Features 23', 'Location 23', 'Description 23', 'Contact Social Media 23', 'Contact Phone 23', 'contact_email_23@example.com', 'open', '2020-10-26', NULL, '2023-09-16 01:16:05', '2020-10-26 01:16:05'),
(124, 8, 'Pet Name 24', 'Male', 'Dog', 'Species 24', 6, 7, NULL, 'Notable Features 24', 'Location 24', 'Description 24', 'Contact Social Media 24', 'Contact Phone 24', 'contact_email_24@example.com', 'open', '2021-05-26', NULL, '2023-09-16 01:16:05', '2021-05-26 01:16:05'),
(125, 80, 'Pet Name 25', 'Male', 'Cat', 'Species 25', 6, 5, NULL, 'Notable Features 25', 'Location 25', 'Description 25', 'Contact Social Media 25', 'Contact Phone 25', 'contact_email_25@example.com', 'open', '2019-10-26', NULL, '2023-06-12 01:16:05', '2019-10-26 01:16:05'),
(126, 37, 'Pet Name 26', 'Female', 'Dog', 'Species 26', 5, 10, NULL, 'Notable Features 26', 'Location 26', 'Description 26', 'Contact Social Media 26', 'Contact Phone 26', 'contact_email_26@example.com', 'open', '2022-11-26', NULL, '2022-06-30 01:16:05', '2022-11-26 01:16:05'),
(127, 84, 'Pet Name 27', 'Male', 'Dog', 'Species 27', 6, 7, NULL, 'Notable Features 27', 'Location 27', 'Description 27', 'Contact Social Media 27', 'Contact Phone 27', 'contact_email_27@example.com', 'open', '2019-11-26', NULL, '2022-10-18 01:16:05', '2019-11-26 01:16:05'),
(128, 103, 'Pet Name 28', 'Male', 'Dog', 'Species 28', 8, 12, NULL, 'Notable Features 28', 'Location 28', 'Description 28', 'Contact Social Media 28', 'Contact Phone 28', 'contact_email_28@example.com', 'open', '2018-08-26', NULL, '2020-05-20 01:16:05', '2018-08-26 01:16:05'),
(129, 81, 'Pet Name 29', 'Male', 'Cat', 'Species 29', 2, 7, NULL, 'Notable Features 29', 'Location 29', 'Description 29', 'Contact Social Media 29', 'Contact Phone 29', 'contact_email_29@example.com', 'open', '2023-01-26', NULL, '2023-03-16 01:16:05', '2023-01-26 01:16:05'),
(130, 8, 'Pet Name 30', 'Female', 'Cat', 'Species 30', 8, 5, NULL, 'Notable Features 30', 'Location 30', 'Description 30', 'Contact Social Media 30', 'Contact Phone 30', 'contact_email_30@example.com', 'open', '2020-05-26', NULL, '2021-07-16 01:16:05', '2020-05-26 01:16:05'),
(131, 100, 'Pet Name 31', 'Female', 'Dog', 'Species 31', 1, 5, NULL, 'Notable Features 31', 'Location 31', 'Description 31', 'Contact Social Media 31', 'Contact Phone 31', 'contact_email_31@example.com', 'open', '2020-08-26', NULL, '2020-03-02 01:16:05', '2020-08-26 01:16:05'),
(132, 104, 'Pet Name 32', 'Female', 'Cat', 'Species 32', 2, 7, NULL, 'Notable Features 32', 'Location 32', 'Description 32', 'Contact Social Media 32', 'Contact Phone 32', 'contact_email_32@example.com', 'open', '2019-03-26', NULL, '2023-01-08 01:16:05', '2019-03-26 01:16:05'),
(133, 79, 'Pet Name 33', 'Female', 'Cat', 'Species 33', 1, 5, NULL, 'Notable Features 33', 'Location 33', 'Description 33', 'Contact Social Media 33', 'Contact Phone 33', 'contact_email_33@example.com', 'open', '2022-09-26', NULL, '2022-07-31 01:16:05', '2022-09-26 01:16:05'),
(134, 83, 'Pet Name 34', 'Male', 'Dog', 'Species 34', 6, 10, NULL, 'Notable Features 34', 'Location 34', 'Description 34', 'Contact Social Media 34', 'Contact Phone 34', 'contact_email_34@example.com', 'open', '2021-10-26', NULL, '2023-05-07 01:16:05', '2021-10-26 01:16:05'),
(135, 82, 'Pet Name 35', 'Female', 'Cat', 'Species 35', 2, 8, NULL, 'Notable Features 35', 'Location 35', 'Description 35', 'Contact Social Media 35', 'Contact Phone 35', 'contact_email_35@example.com', 'open', '2022-05-26', NULL, '2022-04-04 01:16:05', '2022-05-26 01:16:05'),
(136, 88, 'Pet Name 36', 'Male', 'Cat', 'Species 36', 7, 5, NULL, 'Notable Features 36', 'Location 36', 'Description 36', 'Contact Social Media 36', 'Contact Phone 36', 'contact_email_36@example.com', 'open', '2019-01-26', NULL, '2020-02-27 01:16:05', '2019-01-26 01:16:05'),
(137, 98, 'Pet Name 37', 'Male', 'Dog', 'Species 37', 1, 10, NULL, 'Notable Features 37', 'Location 37', 'Description 37', 'Contact Social Media 37', 'Contact Phone 37', 'contact_email_37@example.com', 'open', '2018-02-26', NULL, '2019-04-27 01:16:05', '2018-02-26 01:16:05'),
(138, 48, 'Pet Name 38', 'Female', 'Dog', 'Species 38', 8, 2, NULL, 'Notable Features 38', 'Location 38', 'Description 38', 'Contact Social Media 38', 'Contact Phone 38', 'contact_email_38@example.com', 'open', '2020-10-26', NULL, '2022-07-28 01:16:05', '2020-10-26 01:16:05'),
(139, 22, 'Pet Name 39', 'Male', 'Dog', 'Species 39', 5, 8, NULL, 'Notable Features 39', 'Location 39', 'Description 39', 'Contact Social Media 39', 'Contact Phone 39', 'contact_email_39@example.com', 'open', '2022-10-26', NULL, '2023-05-10 01:16:05', '2022-10-26 01:16:05'),
(140, 25, 'Pet Name 40', 'Female', 'Dog', 'Species 40', 6, 12, NULL, 'Notable Features 40', 'Location 40', 'Description 40', 'Contact Social Media 40', 'Contact Phone 40', 'contact_email_40@example.com', 'open', '2020-07-26', NULL, '2020-10-30 01:16:05', '2020-07-26 01:16:05'),
(141, 72, 'Pet Name 41', 'Male', 'Cat', 'Species 41', 10, 7, NULL, 'Notable Features 41', 'Location 41', 'Description 41', 'Contact Social Media 41', 'Contact Phone 41', 'contact_email_41@example.com', 'open', '2018-02-26', NULL, '2018-05-19 01:16:05', '2018-02-26 01:16:05'),
(142, 71, 'Pet Name 42', 'Male', 'Dog', 'Species 42', 4, 10, NULL, 'Notable Features 42', 'Location 42', 'Description 42', 'Contact Social Media 42', 'Contact Phone 42', 'contact_email_42@example.com', 'open', '2018-10-26', NULL, '2022-03-23 01:16:05', '2018-10-26 01:16:05'),
(143, 25, 'Pet Name 43', 'Female', 'Cat', 'Species 43', 5, 6, NULL, 'Notable Features 43', 'Location 43', 'Description 43', 'Contact Social Media 43', 'Contact Phone 43', 'contact_email_43@example.com', 'open', '2020-04-26', NULL, '2020-05-26 01:16:05', '2020-04-26 01:16:05'),
(144, 74, 'Pet Name 44', 'Female', 'Dog', 'Species 44', 3, 6, NULL, 'Notable Features 44', 'Location 44', 'Description 44', 'Contact Social Media 44', 'Contact Phone 44', 'contact_email_44@example.com', 'open', '2020-04-26', NULL, '2020-06-02 01:16:05', '2020-04-26 01:16:05'),
(145, 70, 'Pet Name 45', 'Male', 'Dog', 'Species 45', 1, 9, NULL, 'Notable Features 45', 'Location 45', 'Description 45', 'Contact Social Media 45', 'Contact Phone 45', 'contact_email_45@example.com', 'open', '2020-03-26', NULL, '2021-11-04 01:16:05', '2020-03-26 01:16:05'),
(146, 41, 'Pet Name 46', 'Female', 'Cat', 'Species 46', 1, 9, NULL, 'Notable Features 46', 'Location 46', 'Description 46', 'Contact Social Media 46', 'Contact Phone 46', 'contact_email_46@example.com', 'open', '2022-03-26', NULL, '2023-06-14 01:16:05', '2022-03-26 01:16:05'),
(147, 86, 'Pet Name 47', 'Male', 'Dog', 'Species 47', 5, 7, NULL, 'Notable Features 47', 'Location 47', 'Description 47', 'Contact Social Media 47', 'Contact Phone 47', 'contact_email_47@example.com', 'open', '2022-04-26', NULL, '2023-03-15 01:16:05', '2022-04-26 01:16:05'),
(148, 36, 'Pet Name 48', 'Female', 'Cat', 'Species 48', 8, 4, NULL, 'Notable Features 48', 'Location 48', 'Description 48', 'Contact Social Media 48', 'Contact Phone 48', 'contact_email_48@example.com', 'open', '2022-09-26', NULL, '2023-02-11 01:16:05', '2022-09-26 01:16:05'),
(149, 111, 'Pet Name 49', 'Female', 'Cat', 'Species 49', 2, 12, NULL, 'Notable Features 49', 'Location 49', 'Description 49', 'Contact Social Media 49', 'Contact Phone 49', 'contact_email_49@example.com', 'open', '2022-07-26', NULL, '2022-10-10 01:16:05', '2022-07-26 01:16:05'),
(150, 76, 'Pet Name 50', 'Male', 'Dog', 'Species 50', 8, 11, NULL, 'Notable Features 50', 'Location 50', 'Description 50', 'Contact Social Media 50', 'Contact Phone 50', 'contact_email_50@example.com', 'open', '2021-01-26', NULL, '2022-05-07 01:16:05', '2021-01-26 01:16:05'),
(151, 90, 'Pet Name 1', 'Male', 'Cat', 'Species 1', 6, 4, NULL, 'Notable Features 1', 'Location 1', 'Description 1', 'Contact Social Media 1', 'Contact Phone 1', 'contact_email_1@example.com', 'cancelled', '2019-12-26', NULL, '2022-10-27 01:16:05', '2019-12-26 01:16:05'),
(152, 7, 'Pet Name 2', 'Female', 'Dog', 'Species 2', 5, 11, NULL, 'Notable Features 2', 'Location 2', 'Description 2', 'Contact Social Media 2', 'Contact Phone 2', 'contact_email_2@example.com', 'cancelled', '2022-11-26', NULL, '2023-06-01 01:16:05', '2022-11-26 01:16:05'),
(153, 67, 'Pet Name 3', 'Male', 'Cat', 'Species 3', 10, 5, NULL, 'Notable Features 3', 'Location 3', 'Description 3', 'Contact Social Media 3', 'Contact Phone 3', 'contact_email_3@example.com', 'cancelled', '2018-04-26', NULL, '2023-04-28 01:16:05', '2018-04-26 01:16:05'),
(154, 73, 'Pet Name 4', 'Male', 'Dog', 'Species 4', 5, 10, NULL, 'Notable Features 4', 'Location 4', 'Description 4', 'Contact Social Media 4', 'Contact Phone 4', 'contact_email_4@example.com', 'cancelled', '2019-03-26', NULL, '2020-07-30 01:16:05', '2019-03-26 01:16:05'),
(155, 10, 'Pet Name 5', 'Female', 'Cat', 'Species 5', 5, 10, NULL, 'Notable Features 5', 'Location 5', 'Description 5', 'Contact Social Media 5', 'Contact Phone 5', 'contact_email_5@example.com', 'cancelled', '2019-09-26', NULL, '2023-06-15 01:16:05', '2019-09-26 01:16:05'),
(156, 23, 'Pet Name 6', 'Female', 'Cat', 'Species 6', 10, 5, NULL, 'Notable Features 6', 'Location 6', 'Description 6', 'Contact Social Media 6', 'Contact Phone 6', 'contact_email_6@example.com', 'cancelled', '2021-07-26', NULL, '2023-04-18 01:16:05', '2021-07-26 01:16:05'),
(157, 13, 'Pet Name 7', 'Male', 'Cat', 'Species 7', 5, 4, NULL, 'Notable Features 7', 'Location 7', 'Description 7', 'Contact Social Media 7', 'Contact Phone 7', 'contact_email_7@example.com', 'cancelled', '2020-07-26', NULL, '2020-06-01 01:16:05', '2020-07-26 01:16:05'),
(158, 17, 'Pet Name 8', 'Male', 'Cat', 'Species 8', 1, 1, NULL, 'Notable Features 8', 'Location 8', 'Description 8', 'Contact Social Media 8', 'Contact Phone 8', 'contact_email_8@example.com', 'cancelled', '2020-10-26', NULL, '2022-05-01 01:16:05', '2020-10-26 01:16:05'),
(159, 26, 'Pet Name 9', 'Female', 'Dog', 'Species 9', 9, 3, NULL, 'Notable Features 9', 'Location 9', 'Description 9', 'Contact Social Media 9', 'Contact Phone 9', 'contact_email_9@example.com', 'cancelled', '2018-11-26', NULL, '2018-11-27 01:16:05', '2018-11-26 01:16:05'),
(160, 99, 'Pet Name 10', 'Female', 'Cat', 'Species 10', 1, 9, NULL, 'Notable Features 10', 'Location 10', 'Description 10', 'Contact Social Media 10', 'Contact Phone 10', 'contact_email_10@example.com', 'cancelled', '2018-04-26', NULL, '2021-09-05 01:16:05', '2018-04-26 01:16:05'),
(161, 75, 'Pet Name 11', 'Female', 'Cat', 'Species 11', 3, 2, NULL, 'Notable Features 11', 'Location 11', 'Description 11', 'Contact Social Media 11', 'Contact Phone 11', 'contact_email_11@example.com', 'cancelled', '2020-06-26', NULL, '2022-05-29 01:16:05', '2020-06-26 01:16:05'),
(162, 55, 'Pet Name 12', 'Male', 'Cat', 'Species 12', 1, 5, NULL, 'Notable Features 12', 'Location 12', 'Description 12', 'Contact Social Media 12', 'Contact Phone 12', 'contact_email_12@example.com', 'cancelled', '2019-01-26', NULL, '2022-07-04 01:16:05', '2019-01-26 01:16:05'),
(163, 79, 'Pet Name 13', 'Female', 'Cat', 'Species 13', 2, 3, NULL, 'Notable Features 13', 'Location 13', 'Description 13', 'Contact Social Media 13', 'Contact Phone 13', 'contact_email_13@example.com', 'cancelled', '2018-04-26', NULL, '2018-04-15 01:16:05', '2018-04-26 01:16:05'),
(164, 23, 'Pet Name 14', 'Male', 'Cat', 'Species 14', 3, 10, NULL, 'Notable Features 14', 'Location 14', 'Description 14', 'Contact Social Media 14', 'Contact Phone 14', 'contact_email_14@example.com', 'cancelled', '2022-09-26', NULL, '2023-05-04 01:16:05', '2022-09-26 01:16:05'),
(165, 94, 'Pet Name 15', 'Male', 'Dog', 'Species 15', 4, 9, NULL, 'Notable Features 15', 'Location 15', 'Description 15', 'Contact Social Media 15', 'Contact Phone 15', 'contact_email_15@example.com', 'cancelled', '2018-09-26', NULL, '2022-01-29 01:16:05', '2018-09-26 01:16:05'),
(166, 108, 'Pet Name 16', 'Male', 'Cat', 'Species 16', 9, 11, NULL, 'Notable Features 16', 'Location 16', 'Description 16', 'Contact Social Media 16', 'Contact Phone 16', 'contact_email_16@example.com', 'cancelled', '2018-06-26', NULL, '2023-01-22 01:16:05', '2018-06-26 01:16:05'),
(167, 93, 'Pet Name 17', 'Female', 'Cat', 'Species 17', 10, 7, NULL, 'Notable Features 17', 'Location 17', 'Description 17', 'Contact Social Media 17', 'Contact Phone 17', 'contact_email_17@example.com', 'cancelled', '2019-10-26', NULL, '2021-03-18 01:16:05', '2019-10-26 01:16:05'),
(168, 27, 'Pet Name 18', 'Female', 'Cat', 'Species 18', 2, 10, NULL, 'Notable Features 18', 'Location 18', 'Description 18', 'Contact Social Media 18', 'Contact Phone 18', 'contact_email_18@example.com', 'cancelled', '2019-07-26', NULL, '2020-06-14 01:16:05', '2019-07-26 01:16:05'),
(169, 69, 'Pet Name 19', 'Female', 'Dog', 'Species 19', 10, 11, NULL, 'Notable Features 19', 'Location 19', 'Description 19', 'Contact Social Media 19', 'Contact Phone 19', 'contact_email_19@example.com', 'cancelled', '2019-03-26', NULL, '2020-02-10 01:16:05', '2019-03-26 01:16:05'),
(170, 6, 'Pet Name 20', 'Female', 'Dog', 'Species 20', 2, 7, NULL, 'Notable Features 20', 'Location 20', 'Description 20', 'Contact Social Media 20', 'Contact Phone 20', 'contact_email_20@example.com', 'cancelled', '2019-06-26', NULL, '2023-11-07 01:16:05', '2019-06-26 01:16:05'),
(171, 42, 'Pet Name 21', 'Female', 'Dog', 'Species 21', 5, 12, NULL, 'Notable Features 21', 'Location 21', 'Description 21', 'Contact Social Media 21', 'Contact Phone 21', 'contact_email_21@example.com', 'cancelled', '2018-03-26', NULL, '2023-07-02 01:16:05', '2018-03-26 01:16:05'),
(172, 96, 'Pet Name 22', 'Female', 'Cat', 'Species 22', 9, 10, NULL, 'Notable Features 22', 'Location 22', 'Description 22', 'Contact Social Media 22', 'Contact Phone 22', 'contact_email_22@example.com', 'cancelled', '2019-03-26', NULL, '2020-10-30 01:16:05', '2019-03-26 01:16:05'),
(173, 33, 'Pet Name 23', 'Male', 'Dog', 'Species 23', 8, 5, NULL, 'Notable Features 23', 'Location 23', 'Description 23', 'Contact Social Media 23', 'Contact Phone 23', 'contact_email_23@example.com', 'cancelled', '2022-12-26', NULL, '2023-02-04 01:16:05', '2022-12-26 01:16:05'),
(174, 25, 'Pet Name 24', 'Female', 'Dog', 'Species 24', 9, 7, NULL, 'Notable Features 24', 'Location 24', 'Description 24', 'Contact Social Media 24', 'Contact Phone 24', 'contact_email_24@example.com', 'cancelled', '2022-06-26', NULL, '2022-11-11 01:16:05', '2022-06-26 01:16:05'),
(175, 22, 'Pet Name 25', 'Female', 'Dog', 'Species 25', 4, 1, NULL, 'Notable Features 25', 'Location 25', 'Description 25', 'Contact Social Media 25', 'Contact Phone 25', 'contact_email_25@example.com', 'cancelled', '2019-10-26', NULL, '2021-02-04 01:16:05', '2019-10-26 01:16:05'),
(176, 58, 'Pet Name 26', 'Female', 'Cat', 'Species 26', 10, 2, NULL, 'Notable Features 26', 'Location 26', 'Description 26', 'Contact Social Media 26', 'Contact Phone 26', 'contact_email_26@example.com', 'cancelled', '2022-01-26', NULL, '2022-04-14 01:16:05', '2022-01-26 01:16:05'),
(177, 101, 'Pet Name 27', 'Male', 'Dog', 'Species 27', 9, 4, NULL, 'Notable Features 27', 'Location 27', 'Description 27', 'Contact Social Media 27', 'Contact Phone 27', 'contact_email_27@example.com', 'cancelled', '2022-09-26', NULL, '2022-08-16 01:16:05', '2022-09-26 01:16:05'),
(178, 108, 'Pet Name 28', 'Male', 'Cat', 'Species 28', 10, 12, NULL, 'Notable Features 28', 'Location 28', 'Description 28', 'Contact Social Media 28', 'Contact Phone 28', 'contact_email_28@example.com', 'cancelled', '2018-12-26', NULL, '2020-06-22 01:16:05', '2018-12-26 01:16:05');
INSERT INTO `missing_pets` (`id`, `user_id`, `pet_name`, `gender`, `type`, `species`, `age_years`, `age_months`, `pictures`, `notable_features`, `last_seen_location`, `description`, `contact_social_media`, `contact_phone`, `contact_email`, `status`, `missing_since`, `date_found`, `created_at`, `updated_at`) VALUES
(179, 107, 'Pet Name 29', 'Female', 'Cat', 'Species 29', 5, 5, NULL, 'Notable Features 29', 'Location 29', 'Description 29', 'Contact Social Media 29', 'Contact Phone 29', 'contact_email_29@example.com', 'cancelled', '2020-11-26', NULL, '2022-06-26 01:16:05', '2020-11-26 01:16:05'),
(180, 5, 'Pet Name 30', 'Male', 'Cat', 'Species 30', 7, 10, NULL, 'Notable Features 30', 'Location 30', 'Description 30', 'Contact Social Media 30', 'Contact Phone 30', 'contact_email_30@example.com', 'cancelled', '2020-07-26', NULL, '2021-08-19 01:16:05', '2020-07-26 01:16:05'),
(181, 6, 'Pet Name 31', 'Male', 'Cat', 'Species 31', 4, 6, NULL, 'Notable Features 31', 'Location 31', 'Description 31', 'Contact Social Media 31', 'Contact Phone 31', 'contact_email_31@example.com', 'cancelled', '2019-07-26', NULL, '2021-08-22 01:16:05', '2019-07-26 01:16:05'),
(182, 63, 'Pet Name 32', 'Female', 'Cat', 'Species 32', 10, 7, NULL, 'Notable Features 32', 'Location 32', 'Description 32', 'Contact Social Media 32', 'Contact Phone 32', 'contact_email_32@example.com', 'cancelled', '2020-12-26', NULL, '2021-09-13 01:16:05', '2020-12-26 01:16:05'),
(183, 59, 'Pet Name 33', 'Male', 'Dog', 'Species 33', 3, 10, NULL, 'Notable Features 33', 'Location 33', 'Description 33', 'Contact Social Media 33', 'Contact Phone 33', 'contact_email_33@example.com', 'cancelled', '2022-11-26', NULL, '2023-03-22 01:16:05', '2022-11-26 01:16:05'),
(184, 81, 'Pet Name 34', 'Male', 'Dog', 'Species 34', 6, 4, NULL, 'Notable Features 34', 'Location 34', 'Description 34', 'Contact Social Media 34', 'Contact Phone 34', 'contact_email_34@example.com', 'cancelled', '2019-05-26', NULL, '2022-08-04 01:16:05', '2019-05-26 01:16:05'),
(185, 9, 'Pet Name 35', 'Female', 'Cat', 'Species 35', 6, 11, NULL, 'Notable Features 35', 'Location 35', 'Description 35', 'Contact Social Media 35', 'Contact Phone 35', 'contact_email_35@example.com', 'cancelled', '2021-01-26', NULL, '2023-07-14 01:16:05', '2021-01-26 01:16:05'),
(186, 15, 'Pet Name 36', 'Female', 'Cat', 'Species 36', 3, 8, NULL, 'Notable Features 36', 'Location 36', 'Description 36', 'Contact Social Media 36', 'Contact Phone 36', 'contact_email_36@example.com', 'cancelled', '2022-03-26', NULL, '2022-04-16 01:16:05', '2022-03-26 01:16:05'),
(187, 22, 'Pet Name 37', 'Female', 'Cat', 'Species 37', 9, 8, NULL, 'Notable Features 37', 'Location 37', 'Description 37', 'Contact Social Media 37', 'Contact Phone 37', 'contact_email_37@example.com', 'cancelled', '2018-09-26', NULL, '2021-01-03 01:16:05', '2018-09-26 01:16:05'),
(188, 78, 'Pet Name 38', 'Male', 'Cat', 'Species 38', 7, 4, NULL, 'Notable Features 38', 'Location 38', 'Description 38', 'Contact Social Media 38', 'Contact Phone 38', 'contact_email_38@example.com', 'cancelled', '2022-09-26', NULL, '2023-07-26 01:16:05', '2022-09-26 01:16:05'),
(189, 4, 'Pet Name 39', 'Female', 'Cat', 'Species 39', 2, 1, NULL, 'Notable Features 39', 'Location 39', 'Description 39', 'Contact Social Media 39', 'Contact Phone 39', 'contact_email_39@example.com', 'cancelled', '2022-11-26', NULL, '2023-01-10 01:16:05', '2022-11-26 01:16:05'),
(190, 91, 'Pet Name 40', 'Male', 'Dog', 'Species 40', 4, 8, NULL, 'Notable Features 40', 'Location 40', 'Description 40', 'Contact Social Media 40', 'Contact Phone 40', 'contact_email_40@example.com', 'cancelled', '2018-11-26', NULL, '2023-01-31 01:16:05', '2018-11-26 01:16:05'),
(191, 12, 'Pet Name 41', 'Male', 'Cat', 'Species 41', 3, 12, NULL, 'Notable Features 41', 'Location 41', 'Description 41', 'Contact Social Media 41', 'Contact Phone 41', 'contact_email_41@example.com', 'cancelled', '2020-03-26', NULL, '2022-10-29 01:16:05', '2020-03-26 01:16:05'),
(192, 60, 'Pet Name 42', 'Male', 'Dog', 'Species 42', 9, 1, NULL, 'Notable Features 42', 'Location 42', 'Description 42', 'Contact Social Media 42', 'Contact Phone 42', 'contact_email_42@example.com', 'cancelled', '2022-08-26', NULL, '2023-01-20 01:16:05', '2022-08-26 01:16:05'),
(193, 6, 'Pet Name 43', 'Male', 'Dog', 'Species 43', 9, 11, NULL, 'Notable Features 43', 'Location 43', 'Description 43', 'Contact Social Media 43', 'Contact Phone 43', 'contact_email_43@example.com', 'cancelled', '2020-04-26', NULL, '2022-02-16 01:16:05', '2020-04-26 01:16:05'),
(194, 43, 'Pet Name 44', 'Male', 'Cat', 'Species 44', 6, 8, NULL, 'Notable Features 44', 'Location 44', 'Description 44', 'Contact Social Media 44', 'Contact Phone 44', 'contact_email_44@example.com', 'cancelled', '2022-10-26', NULL, '2022-12-13 01:16:05', '2022-10-26 01:16:05'),
(195, 71, 'Pet Name 45', 'Female', 'Cat', 'Species 45', 6, 2, NULL, 'Notable Features 45', 'Location 45', 'Description 45', 'Contact Social Media 45', 'Contact Phone 45', 'contact_email_45@example.com', 'cancelled', '2021-05-26', NULL, '2022-05-26 01:16:05', '2021-05-26 01:16:05'),
(196, 28, 'Pet Name 46', 'Female', 'Dog', 'Species 46', 8, 9, NULL, 'Notable Features 46', 'Location 46', 'Description 46', 'Contact Social Media 46', 'Contact Phone 46', 'contact_email_46@example.com', 'cancelled', '2021-07-26', NULL, '2023-04-03 01:16:05', '2021-07-26 01:16:05'),
(197, 6, 'Pet Name 47', 'Male', 'Cat', 'Species 47', 4, 6, NULL, 'Notable Features 47', 'Location 47', 'Description 47', 'Contact Social Media 47', 'Contact Phone 47', 'contact_email_47@example.com', 'cancelled', '2018-02-26', NULL, '2022-12-08 01:16:05', '2018-02-26 01:16:05'),
(198, 111, 'Pet Name 48', 'Male', 'Cat', 'Species 48', 6, 1, NULL, 'Notable Features 48', 'Location 48', 'Description 48', 'Contact Social Media 48', 'Contact Phone 48', 'contact_email_48@example.com', 'cancelled', '2021-05-26', NULL, '2021-08-09 01:16:05', '2021-05-26 01:16:05'),
(199, 55, 'Pet Name 49', 'Female', 'Cat', 'Species 49', 3, 11, NULL, 'Notable Features 49', 'Location 49', 'Description 49', 'Contact Social Media 49', 'Contact Phone 49', 'contact_email_49@example.com', 'cancelled', '2018-11-26', NULL, '2019-07-16 01:16:05', '2018-11-26 01:16:05'),
(200, 56, 'Pet Name 50', 'Female', 'Dog', 'Species 50', 10, 5, NULL, 'Notable Features 50', 'Location 50', 'Description 50', 'Contact Social Media 50', 'Contact Phone 50', 'contact_email_50@example.com', 'cancelled', '2019-12-26', NULL, '2019-11-29 01:16:05', '2019-12-26 01:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `type` enum('Dog','Cat') NOT NULL DEFAULT 'Dog',
  `gender` enum('Male','Female') NOT NULL,
  `species` varchar(255) DEFAULT NULL,
  `age_years` smallint(5) UNSIGNED DEFAULT NULL,
  `age_months` tinyint(3) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `up_for_adoption` enum('Yes','No','Processing','Adopted') NOT NULL DEFAULT 'No',
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `pet_name`, `type`, `gender`, `species`, `age_years`, `age_months`, `description`, `up_for_adoption`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Noemy', 'Cat', 'Male', 'facilis', 12, 6, 'Nostrum ipsum sunt modi nam dolorem.', 'Yes', NULL, '2023-11-05 01:16:05', '2023-03-18 01:16:05'),
(2, 'Tina', 'Cat', 'Male', 'atque', 12, 1, 'Iure illo dolorem qui magni laborum.', 'Yes', NULL, '2023-09-07 01:16:05', '2023-05-27 01:16:05'),
(3, 'Mateo', 'Dog', 'Female', 'et', 6, 9, 'Eligendi inventore nulla dolorem distinctio non quo consequatur architecto.', 'Yes', NULL, '2023-03-12 01:16:05', '2023-10-10 01:16:05'),
(4, 'Sage', 'Cat', 'Male', 'odit', 8, 11, 'Omnis architecto eum dicta veniam eos natus.', 'Yes', NULL, '2023-11-18 01:16:05', '2023-11-18 01:16:05'),
(5, 'Sylvia', 'Cat', 'Male', 'tempora', 3, 8, 'Aliquam qui molestiae officia eum natus nobis et.', 'Yes', NULL, '2024-01-14 01:16:05', '2023-05-09 01:16:05'),
(6, 'Petra', 'Dog', 'Male', 'incidunt', 1, 2, 'Repellendus id quidem perferendis consectetur.', 'Yes', NULL, '2023-05-17 01:16:05', '2023-07-07 01:16:05'),
(7, 'Webster', 'Dog', 'Male', 'et', 12, 2, 'Quia qui et esse repudiandae.', 'Yes', NULL, '2023-06-12 01:16:05', '2023-08-09 01:16:05'),
(8, 'Nathanial', 'Dog', 'Male', 'similique', 8, 5, 'Aspernatur quo voluptatem et non voluptatem rerum et.', 'Yes', NULL, '2023-08-22 01:16:05', '2023-05-01 01:16:05'),
(9, 'Lexi', 'Dog', 'Male', 'soluta', 3, 9, 'Fugit deleniti quibusdam molestiae adipisci explicabo.', 'Yes', NULL, '2023-12-24 01:16:05', '2023-06-06 01:16:05'),
(10, 'Alexis', 'Cat', 'Female', 'ipsum', 14, 10, 'Sunt maxime illo a exercitationem.', 'Yes', NULL, '2023-11-15 01:16:05', '2024-01-04 01:16:05'),
(11, 'Otho', 'Dog', 'Female', 'illum', 4, 3, 'Similique nesciunt corrupti in natus.', 'Yes', NULL, '2023-04-17 01:16:05', '2023-09-23 01:16:05'),
(12, 'Keyshawn', 'Cat', 'Female', 'similique', 11, 3, 'In minima voluptates non qui delectus maiores.', 'Yes', NULL, '2023-11-19 01:16:05', '2023-02-09 01:16:05'),
(13, 'Lysanne', 'Dog', 'Female', 'ex', 3, 5, 'Ab et nostrum qui explicabo quae minima.', 'Yes', NULL, '2023-05-19 01:16:05', '2023-02-09 01:16:05'),
(14, 'Madison', 'Dog', 'Female', 'fugit', 11, 10, 'Architecto doloribus mollitia et iste.', 'Yes', NULL, '2023-01-27 01:16:05', '2023-03-07 01:16:05'),
(15, 'Abdullah', 'Cat', 'Male', 'cum', 11, 4, 'Quo illo doloribus cum commodi.', 'Yes', NULL, '2023-09-03 01:16:05', '2023-03-20 01:16:05'),
(16, 'Cecilia', 'Dog', 'Female', 'quisquam', 2, 4, 'Qui rerum necessitatibus tenetur rerum.', 'Yes', NULL, '2023-10-29 01:16:05', '2023-04-30 01:16:05'),
(17, 'Bertha', 'Cat', 'Male', 'molestiae', 10, 4, 'Dolor et temporibus consequatur in aut itaque.', 'Yes', NULL, '2023-08-30 01:16:05', '2023-05-17 01:16:05'),
(18, 'Olaf', 'Cat', 'Male', 'vero', 15, 0, 'Porro sunt deleniti atque assumenda placeat non.', 'Yes', NULL, '2024-01-09 01:16:05', '2023-04-03 01:16:05'),
(19, 'Nicolas', 'Dog', 'Male', 'et', 5, 3, 'Quaerat amet consequatur possimus excepturi voluptatibus maiores voluptate.', 'Yes', NULL, '2023-12-05 01:16:05', '2023-09-28 01:16:05'),
(20, 'Patience', 'Dog', 'Male', 'veniam', 10, 6, 'Quis a ut id odio.', 'Yes', NULL, '2023-07-20 01:16:05', '2023-08-09 01:16:05'),
(21, 'Connor', 'Dog', 'Female', 'ab', 1, 6, 'Hic nisi quaerat recusandae consequatur vel.', 'Yes', NULL, '2023-09-05 01:16:05', '2023-05-07 01:16:05'),
(22, 'Ceasar', 'Dog', 'Female', 'nihil', 15, 4, 'Iusto fugiat accusamus iste non omnis enim libero dolor.', 'Yes', NULL, '2023-08-18 01:16:05', '2023-02-02 01:16:05'),
(23, 'Kenya', 'Dog', 'Female', 'sapiente', 2, 2, 'Expedita occaecati provident unde sunt accusantium enim repellendus.', 'Yes', NULL, '2023-02-16 01:16:05', '2023-02-20 01:16:05'),
(24, 'Meagan', 'Dog', 'Male', 'quae', 12, 7, 'Voluptatum consectetur totam sed voluptas est.', 'Yes', NULL, '2023-07-29 01:16:05', '2023-12-18 01:16:05'),
(25, 'Ariane', 'Cat', 'Male', 'laudantium', 4, 9, 'Nulla aperiam et facilis fugit.', 'Yes', NULL, '2023-12-10 01:16:05', '2023-08-22 01:16:05'),
(26, 'Rey', 'Cat', 'Female', 'ut', 4, 10, 'Illo incidunt commodi magnam.', 'Yes', NULL, '2023-04-26 01:16:05', '2023-03-01 01:16:05'),
(27, 'Brenda', 'Cat', 'Female', 'temporibus', 9, 0, 'Eligendi laudantium optio labore id ea consequuntur quia.', 'Yes', NULL, '2023-11-30 01:16:05', '2023-09-26 01:16:05'),
(28, 'Shawn', 'Dog', 'Female', 'et', 7, 2, 'Quod quisquam vel adipisci corrupti voluptates inventore.', 'Yes', NULL, '2023-06-17 01:16:05', '2023-02-19 01:16:05'),
(29, 'Julie', 'Cat', 'Female', 'est', 9, 10, 'Rerum nihil aut odit ipsa nam alias rerum expedita.', 'Yes', NULL, '2023-08-27 01:16:05', '2023-08-26 01:16:05'),
(30, 'Clifford', 'Dog', 'Male', 'eaque', 3, 3, 'Cum cum quisquam totam expedita aperiam similique sed minima.', 'Yes', NULL, '2023-10-12 01:16:05', '2023-04-17 01:16:05'),
(31, 'Jerrell', 'Cat', 'Male', 'laboriosam', 6, 5, 'Atque ut quia ut distinctio velit.', 'Yes', NULL, '2023-12-10 01:16:05', '2023-02-10 01:16:05'),
(32, 'Elvis', 'Dog', 'Female', 'cum', 5, 11, 'Aut ea expedita facere vel possimus et in voluptatem.', 'Yes', NULL, '2023-11-12 01:16:05', '2023-08-25 01:16:05'),
(33, 'Clarissa', 'Dog', 'Female', 'suscipit', 6, 4, 'Dolorem consectetur labore veniam explicabo et.', 'Yes', NULL, '2023-05-31 01:16:05', '2023-08-04 01:16:05'),
(34, 'Ana', 'Cat', 'Female', 'reiciendis', 5, 1, 'Ut consequatur autem quis aut sapiente.', 'Yes', NULL, '2023-05-27 01:16:05', '2023-04-19 01:16:05'),
(35, 'Trent', 'Dog', 'Female', 'esse', 4, 4, 'Provident impedit porro totam cumque nobis incidunt nihil.', 'Yes', NULL, '2023-08-29 01:16:05', '2023-09-05 01:16:05'),
(36, 'Ubaldo', 'Dog', 'Male', 'maiores', 9, 2, 'Ab officiis sapiente ut consectetur similique id sit.', 'Yes', NULL, '2023-10-18 01:16:05', '2023-10-07 01:16:05'),
(37, 'Leonel', 'Cat', 'Female', 'et', 2, 3, 'Expedita facilis voluptatem est magni eveniet ipsam.', 'Yes', NULL, '2023-12-22 01:16:05', '2023-02-18 01:16:05'),
(38, 'Cortney', 'Dog', 'Female', 'non', 4, 7, 'Quibusdam ut quisquam voluptatibus iure asperiores vitae qui assumenda.', 'Yes', NULL, '2023-09-26 01:16:05', '2023-09-04 01:16:05'),
(39, 'Stephan', 'Dog', 'Male', 'voluptate', 12, 1, 'Delectus ipsum aspernatur corporis omnis.', 'Yes', NULL, '2023-07-13 01:16:05', '2024-01-21 01:16:05'),
(40, 'Pasquale', 'Dog', 'Male', 'velit', 11, 4, 'Officiis sed qui magni commodi autem asperiores sit.', 'Yes', NULL, '2023-04-13 01:16:05', '2024-01-05 01:16:05'),
(41, 'Orie', 'Cat', 'Male', 'placeat', 11, 5, 'Non optio omnis earum quis in.', 'Yes', NULL, '2023-03-29 01:16:05', '2023-02-25 01:16:05'),
(42, 'Lessie', 'Dog', 'Male', 'optio', 13, 10, 'Similique eligendi illum amet adipisci.', 'Yes', NULL, '2023-07-05 01:16:05', '2023-03-04 01:16:05'),
(43, 'Karen', 'Cat', 'Female', 'qui', 6, 3, 'Corrupti aut beatae natus autem repellendus.', 'Yes', NULL, '2023-05-16 01:16:05', '2023-09-22 01:16:05'),
(44, 'Hassie', 'Dog', 'Male', 'ad', 1, 11, 'Illo et vero modi.', 'Yes', NULL, '2023-08-25 01:16:05', '2023-07-15 01:16:05'),
(45, 'Cyrus', 'Dog', 'Female', 'tempora', 1, 0, 'Molestias est mollitia reiciendis nostrum.', 'Yes', NULL, '2023-05-06 01:16:05', '2023-03-23 01:16:05'),
(46, 'Destiney', 'Cat', 'Male', 'dignissimos', 11, 0, 'Et nemo ea ipsa dolor.', 'Yes', NULL, '2023-04-12 01:16:05', '2023-05-15 01:16:05'),
(47, 'Selmer', 'Cat', 'Male', 'beatae', 10, 4, 'Et quam qui fugiat aut voluptates.', 'Yes', NULL, '2023-05-25 01:16:05', '2023-08-13 01:16:05'),
(48, 'Otho', 'Dog', 'Male', 'hic', 14, 1, 'Aut aliquid mollitia quo id officia ipsum.', 'Yes', NULL, '2023-02-16 01:16:05', '2023-09-21 01:16:05'),
(49, 'Alexander', 'Cat', 'Male', 'odio', 3, 2, 'Voluptatem nemo et ad et labore.', 'Yes', NULL, '2023-03-24 01:16:05', '2024-01-02 01:16:05'),
(50, 'Vicky', 'Dog', 'Male', 'corrupti', 2, 4, 'Voluptas accusantium debitis unde ea culpa facilis quos.', 'Yes', NULL, '2024-01-13 01:16:05', '2023-07-25 01:16:05'),
(51, 'Kennith', 'Dog', 'Female', 'incidunt', 9, 4, 'Ea nihil sint ratione repellendus hic.', 'No', NULL, '2023-10-27 01:16:05', '2023-06-27 01:16:05'),
(52, 'Dustin', 'Dog', 'Female', 'non', 14, 2, 'Sint dolorem dolor aliquid maxime dolorum illo et accusamus.', 'No', NULL, '2023-05-18 01:16:05', '2023-06-12 01:16:05'),
(53, 'Edison', 'Dog', 'Male', 'sunt', 10, 3, 'Adipisci et et ducimus ad in et nihil.', 'No', NULL, '2023-06-30 01:16:05', '2023-10-15 01:16:05'),
(54, 'Syble', 'Dog', 'Male', 'animi', 9, 2, 'Voluptatum omnis commodi quod ipsum deserunt itaque est.', 'No', NULL, '2023-10-08 01:16:05', '2023-02-20 01:16:05'),
(55, 'Charley', 'Dog', 'Female', 'est', 7, 4, 'Aut illo itaque et consequatur in earum.', 'No', NULL, '2023-10-05 01:16:05', '2023-07-25 01:16:05'),
(56, 'Chase', 'Cat', 'Male', 'officiis', 4, 8, 'Sit facilis magnam nobis fugiat.', 'No', NULL, '2023-02-28 01:16:05', '2023-11-07 01:16:05'),
(57, 'Hipolito', 'Dog', 'Female', 'in', 11, 1, 'Nesciunt laudantium numquam veniam vero.', 'No', NULL, '2023-02-20 01:16:05', '2023-09-24 01:16:05'),
(58, 'Blaise', 'Dog', 'Female', 'nihil', 2, 5, 'Non sed fugiat consequatur eos consequatur in id.', 'No', NULL, '2023-12-08 01:16:05', '2023-04-02 01:16:05'),
(59, 'Lavonne', 'Cat', 'Male', 'molestiae', 6, 10, 'Sequi aperiam voluptatum eius laboriosam.', 'No', NULL, '2023-07-16 01:16:05', '2023-07-27 01:16:05'),
(60, 'Garry', 'Cat', 'Male', 'voluptatem', 8, 5, 'Fugit at consequatur earum tenetur.', 'No', NULL, '2023-11-17 01:16:05', '2023-02-15 01:16:05'),
(61, 'Berry', 'Cat', 'Female', 'ex', 2, 9, 'Dolor placeat quia ullam qui rerum culpa.', 'No', NULL, '2023-05-03 01:16:05', '2023-07-13 01:16:05'),
(62, 'Cullen', 'Cat', 'Female', 'porro', 10, 11, 'Distinctio omnis aliquid laborum tenetur voluptatum.', 'No', NULL, '2023-12-14 01:16:05', '2023-12-12 01:16:05'),
(63, 'Avery', 'Dog', 'Female', 'qui', 15, 0, 'Est molestias consequatur quisquam enim animi commodi.', 'No', NULL, '2023-04-27 01:16:05', '2023-09-10 01:16:05'),
(64, 'Gabriel', 'Dog', 'Male', 'ipsum', 4, 11, 'Voluptatem sit vero iure modi ducimus error.', 'No', NULL, '2023-02-18 01:16:05', '2023-03-21 01:16:05'),
(65, 'Wade', 'Dog', 'Female', 'laudantium', 3, 1, 'Distinctio odit officia dolores quia nihil sed.', 'No', NULL, '2023-10-05 01:16:05', '2023-02-21 01:16:05'),
(66, 'Geovany', 'Dog', 'Female', 'explicabo', 14, 11, 'Laborum rerum quas suscipit ut neque.', 'No', NULL, '2023-02-17 01:16:05', '2023-07-04 01:16:05'),
(67, 'Kaycee', 'Cat', 'Female', 'recusandae', 7, 3, 'Ipsa facilis repellendus est.', 'No', NULL, '2023-10-07 01:16:05', '2023-09-05 01:16:05'),
(68, 'Paolo', 'Cat', 'Male', 'commodi', 6, 7, 'Et et consectetur eveniet id velit.', 'No', NULL, '2023-06-27 01:16:05', '2023-04-03 01:16:05'),
(69, 'Elinore', 'Dog', 'Female', 'culpa', 12, 8, 'Ex quam voluptas alias temporibus.', 'No', NULL, '2024-01-02 01:16:05', '2023-02-05 01:16:05'),
(70, 'Assunta', 'Cat', 'Female', 'dignissimos', 6, 5, 'Sint amet rerum sed blanditiis in id dolore.', 'No', NULL, '2023-02-23 01:16:05', '2023-02-28 01:16:05'),
(71, 'Ariane', 'Dog', 'Female', 'iste', 13, 2, 'Rerum rerum tempora iure magni quibusdam.', 'No', NULL, '2023-10-25 01:16:05', '2023-05-17 01:16:05'),
(72, 'Travon', 'Cat', 'Female', 'nesciunt', 4, 0, 'Sunt explicabo deleniti omnis illo.', 'No', NULL, '2023-07-03 01:16:05', '2023-04-08 01:16:05'),
(73, 'Chase', 'Cat', 'Male', 'laudantium', 14, 1, 'Ipsam consectetur optio voluptatem quas porro quae.', 'No', NULL, '2023-09-09 01:16:05', '2023-12-17 01:16:05'),
(74, 'Reina', 'Cat', 'Female', 'nulla', 13, 1, 'Enim possimus libero quasi ratione.', 'No', NULL, '2023-10-04 01:16:05', '2023-02-16 01:16:05'),
(75, 'Theresa', 'Cat', 'Female', 'sunt', 13, 11, 'Dolore quia mollitia saepe sint velit eius et ipsum.', 'No', NULL, '2023-04-17 01:16:05', '2024-01-25 01:16:05'),
(76, 'Chloe', 'Cat', 'Male', 'at', 9, 8, 'Qui debitis porro delectus voluptatum sunt.', 'No', NULL, '2024-01-20 01:16:05', '2023-05-12 01:16:05'),
(77, 'Imani', 'Dog', 'Female', 'accusamus', 4, 6, 'In voluptatem adipisci cupiditate est qui aut.', 'No', NULL, '2023-08-01 01:16:05', '2023-10-01 01:16:05'),
(78, 'Astrid', 'Cat', 'Female', 'nobis', 5, 3, 'Quia eum natus omnis velit fuga dolor debitis iusto.', 'No', NULL, '2023-02-19 01:16:05', '2023-01-30 01:16:05'),
(79, 'Bethany', 'Dog', 'Female', 'blanditiis', 6, 2, 'Laboriosam et accusamus non sapiente aut aut.', 'No', NULL, '2023-05-22 01:16:05', '2023-08-26 01:16:05'),
(80, 'Bethel', 'Dog', 'Male', 'eos', 9, 6, 'Beatae laudantium magnam et velit.', 'No', NULL, '2023-08-22 01:16:05', '2023-05-26 01:16:05'),
(81, 'Odessa', 'Dog', 'Male', 'explicabo', 6, 1, 'Magni quia deserunt assumenda ducimus corporis architecto facere maiores.', 'No', NULL, '2023-04-11 01:16:05', '2023-04-02 01:16:05'),
(82, 'Elbert', 'Cat', 'Male', 'ex', 12, 5, 'Voluptas cum pariatur quisquam adipisci exercitationem.', 'No', NULL, '2023-09-23 01:16:05', '2023-08-26 01:16:05'),
(83, 'Freddie', 'Dog', 'Female', 'unde', 5, 11, 'Voluptas iusto ea ullam at.', 'No', NULL, '2023-11-23 01:16:05', '2023-10-27 01:16:05'),
(84, 'Hayden', 'Cat', 'Female', 'nisi', 6, 4, 'Voluptas sint magnam quisquam nam omnis voluptas sint.', 'No', NULL, '2023-12-07 01:16:05', '2023-05-04 01:16:05'),
(85, 'Dayton', 'Dog', 'Male', 'cum', 13, 3, 'Occaecati consequatur voluptas eveniet sed atque nobis sint.', 'No', NULL, '2023-10-14 01:16:05', '2023-08-09 01:16:05'),
(86, 'Verona', 'Cat', 'Male', 'veniam', 10, 6, 'Est optio molestiae explicabo neque voluptatibus odio.', 'No', NULL, '2023-11-10 01:16:05', '2023-07-21 01:16:05'),
(87, 'Joshuah', 'Cat', 'Female', 'cum', 4, 0, 'Dolorum temporibus aut dignissimos rerum et harum quia.', 'No', NULL, '2023-07-26 01:16:05', '2023-05-06 01:16:05'),
(88, 'Abdullah', 'Cat', 'Female', 'necessitatibus', 2, 8, 'Ipsum velit omnis blanditiis.', 'No', NULL, '2023-04-04 01:16:05', '2023-03-24 01:16:05'),
(89, 'Demond', 'Cat', 'Female', 'molestiae', 4, 7, 'Unde impedit ut optio ullam laborum aliquid rerum.', 'No', NULL, '2023-05-25 01:16:05', '2024-01-21 01:16:05'),
(90, 'Elvera', 'Dog', 'Male', 'voluptatem', 5, 3, 'Itaque nemo et excepturi recusandae.', 'No', NULL, '2023-07-19 01:16:05', '2023-02-26 01:16:05'),
(91, 'Noemie', 'Dog', 'Male', 'sint', 13, 10, 'Corporis cumque provident quia qui optio corrupti.', 'No', NULL, '2023-02-23 01:16:05', '2023-03-26 01:16:05'),
(92, 'Devante', 'Dog', 'Male', 'et', 5, 6, 'Quasi soluta architecto voluptas nulla.', 'No', NULL, '2023-08-16 01:16:05', '2024-01-11 01:16:05'),
(93, 'Judson', 'Cat', 'Male', 'iusto', 14, 7, 'Harum et praesentium nesciunt aut sapiente in sit.', 'No', NULL, '2023-06-30 01:16:05', '2023-12-12 01:16:05'),
(94, 'Sydnee', 'Cat', 'Female', 'recusandae', 6, 11, 'Harum placeat vitae occaecati vitae rerum sapiente praesentium officiis.', 'No', NULL, '2023-09-06 01:16:05', '2023-07-18 01:16:05'),
(95, 'Calista', 'Dog', 'Female', 'quidem', 10, 3, 'Nihil perferendis voluptates ipsum unde et non atque magnam.', 'No', NULL, '2023-04-09 01:16:05', '2024-01-23 01:16:05'),
(96, 'Jaquan', 'Cat', 'Female', 'mollitia', 10, 4, 'Harum eaque quia voluptates recusandae omnis voluptatibus perferendis.', 'No', NULL, '2023-08-11 01:16:05', '2023-10-01 01:16:05'),
(97, 'Marie', 'Dog', 'Female', 'molestiae', 5, 7, 'Explicabo qui cum odit reiciendis hic.', 'No', NULL, '2023-11-13 01:16:05', '2023-09-25 01:16:05'),
(98, 'Nicolas', 'Cat', 'Female', 'nobis', 12, 2, 'Corporis sed aut cumque veniam quia aut.', 'No', NULL, '2023-11-21 01:16:05', '2023-02-15 01:16:05'),
(99, 'Myrtis', 'Dog', 'Male', 'praesentium', 8, 11, 'Deserunt ab nulla deserunt et aperiam nam.', 'No', NULL, '2023-05-23 01:16:05', '2023-10-16 01:16:05'),
(100, 'Francesco', 'Dog', 'Male', 'consequatur', 15, 7, 'Fuga illum at optio sint dolor possimus quibusdam.', 'No', NULL, '2023-03-26 01:16:05', '2023-12-08 01:16:05'),
(101, 'Mozelle', 'Dog', 'Male', 'nesciunt', 14, 4, 'Aut voluptatum rem est maxime aut provident nisi.', 'Processing', NULL, '2023-11-14 01:16:05', '2023-12-28 01:16:05'),
(102, 'Prince', 'Cat', 'Male', 'soluta', 5, 5, 'Accusantium et vero deleniti hic quia aut maiores.', 'Processing', NULL, '2023-07-30 01:16:05', '2023-10-31 01:16:05'),
(103, 'Elmo', 'Cat', 'Female', 'voluptatem', 12, 8, 'Nihil ut id facere neque ut sunt.', 'Processing', NULL, '2023-03-06 01:16:05', '2023-03-04 01:16:05'),
(104, 'Neha', 'Cat', 'Male', 'quae', 15, 7, 'Assumenda hic animi ducimus non consequatur reprehenderit et.', 'Processing', NULL, '2023-09-01 01:16:05', '2023-05-20 01:16:05'),
(105, 'Rachelle', 'Dog', 'Female', 'sit', 5, 9, 'Quam temporibus deserunt rem repellendus in.', 'Processing', NULL, '2023-02-08 01:16:05', '2023-06-12 01:16:05'),
(106, 'Mervin', 'Cat', 'Female', 'cum', 6, 11, 'Ratione atque nemo enim pariatur laboriosam.', 'Processing', NULL, '2023-09-21 01:16:05', '2024-01-02 01:16:05'),
(107, 'Natalia', 'Cat', 'Female', 'eum', 4, 8, 'Dicta occaecati quae sit quo dolores.', 'Processing', NULL, '2023-05-08 01:16:05', '2023-07-11 01:16:05'),
(108, 'Brown', 'Dog', 'Female', 'laboriosam', 12, 2, 'Iure deleniti recusandae iusto est voluptatibus quibusdam libero.', 'Processing', NULL, '2023-03-07 01:16:05', '2023-03-07 01:16:05'),
(109, 'Bria', 'Dog', 'Female', 'repellat', 5, 11, 'Fuga perferendis ducimus consequuntur vel qui autem delectus saepe.', 'Processing', NULL, '2023-05-25 01:16:05', '2023-06-18 01:16:05'),
(110, 'Kattie', 'Dog', 'Male', 'libero', 1, 0, 'Facere iusto aut dolorem odit eveniet quo.', 'Processing', NULL, '2023-12-07 01:16:05', '2023-08-15 01:16:05'),
(111, 'Wilhelmine', 'Cat', 'Female', 'eos', 7, 11, 'Magnam non corporis distinctio cum.', 'Processing', NULL, '2023-07-01 01:16:05', '2023-11-20 01:16:05'),
(112, 'Norma', 'Dog', 'Male', 'quibusdam', 14, 10, 'Consequatur hic fugit facere tenetur dolor ut aperiam.', 'Processing', NULL, '2023-04-21 01:16:05', '2023-02-16 01:16:05'),
(113, 'Joesph', 'Cat', 'Male', 'quo', 1, 1, 'Cupiditate id dolor dolorem officia soluta laboriosam laboriosam.', 'Processing', NULL, '2023-02-09 01:16:05', '2024-01-24 01:16:05'),
(114, 'Damaris', 'Dog', 'Female', 'in', 2, 0, 'Est odio accusamus sit sunt eum iusto iusto.', 'Processing', NULL, '2023-10-14 01:16:05', '2023-11-30 01:16:05'),
(115, 'Elias', 'Cat', 'Female', 'et', 12, 5, 'Laudantium et esse dolor quia sapiente.', 'Processing', NULL, '2023-03-03 01:16:05', '2023-03-30 01:16:05'),
(116, 'Gene', 'Cat', 'Male', 'recusandae', 7, 10, 'Voluptatem consequuntur enim vero iusto quo enim.', 'Processing', NULL, '2023-02-28 01:16:05', '2023-04-05 01:16:05'),
(117, 'Maida', 'Cat', 'Male', 'et', 11, 8, 'Optio similique et qui natus.', 'Processing', NULL, '2023-06-01 01:16:05', '2023-05-12 01:16:05'),
(118, 'Kaelyn', 'Dog', 'Female', 'nemo', 9, 4, 'Aliquam odio natus minus tempore accusamus a.', 'Processing', NULL, '2023-10-01 01:16:05', '2023-09-10 01:16:05'),
(119, 'Rigoberto', 'Cat', 'Male', 'omnis', 8, 6, 'Nulla veniam et fuga magni ut dolores.', 'Processing', NULL, '2023-07-31 01:16:05', '2023-08-31 01:16:05'),
(120, 'Aliya', 'Dog', 'Female', 'tempore', 10, 7, 'Sit et ut quia voluptas.', 'Processing', NULL, '2023-05-01 01:16:05', '2023-06-22 01:16:05'),
(121, 'Spencer', 'Cat', 'Male', 'nihil', 11, 4, 'Eos deserunt reiciendis est a est veritatis.', 'Processing', NULL, '2023-04-09 01:16:05', '2024-01-16 01:16:05'),
(122, 'Travis', 'Dog', 'Male', 'distinctio', 3, 4, 'Delectus vel dolor qui.', 'Processing', NULL, '2023-05-31 01:16:05', '2023-02-06 01:16:05'),
(123, 'Betsy', 'Cat', 'Male', 'ipsum', 2, 8, 'Illum aut et temporibus aut est id.', 'Processing', NULL, '2023-06-19 01:16:05', '2023-06-23 01:16:05'),
(124, 'Chad', 'Cat', 'Male', 'aspernatur', 9, 1, 'Neque sit voluptas enim quaerat ut alias.', 'Processing', NULL, '2023-07-12 01:16:05', '2023-09-12 01:16:05'),
(125, 'Lambert', 'Dog', 'Male', 'quaerat', 7, 8, 'Minus recusandae amet aut voluptas.', 'Processing', NULL, '2023-02-13 01:16:05', '2024-01-12 01:16:05'),
(126, 'Angeline', 'Dog', 'Female', 'asperiores', 12, 7, 'Nam iure incidunt doloremque suscipit minima mollitia omnis.', 'Processing', NULL, '2023-08-12 01:16:05', '2023-12-20 01:16:05'),
(127, 'Emerson', 'Dog', 'Male', 'minus', 11, 11, 'Omnis earum minima voluptatem nihil nihil.', 'Processing', NULL, '2023-09-10 01:16:05', '2023-05-24 01:16:05'),
(128, 'Bernie', 'Dog', 'Male', 'placeat', 14, 9, 'Voluptatibus ad totam nulla qui facilis.', 'Processing', NULL, '2023-02-13 01:16:05', '2023-04-13 01:16:05'),
(129, 'Chase', 'Dog', 'Male', 'possimus', 5, 6, 'Quas reiciendis pariatur eius repellat sunt dolores vitae dolorem.', 'Processing', NULL, '2023-06-02 01:16:05', '2023-11-17 01:16:05'),
(130, 'Kaylah', 'Cat', 'Male', 'iste', 8, 4, 'Ea ratione ab expedita sed.', 'Processing', NULL, '2024-01-23 01:16:05', '2023-10-18 01:16:05'),
(131, 'Alycia', 'Cat', 'Male', 'explicabo', 1, 1, 'Quis dolores modi qui aut.', 'Processing', NULL, '2023-09-05 01:16:05', '2023-12-13 01:16:05'),
(132, 'Gladyce', 'Cat', 'Male', 'eius', 8, 9, 'Voluptatem quos at dolores enim.', 'Processing', NULL, '2023-11-09 01:16:05', '2023-09-11 01:16:05'),
(133, 'Bennie', 'Cat', 'Female', 'sapiente', 15, 6, 'Minima ratione et vero omnis rerum possimus.', 'Processing', NULL, '2023-07-04 01:16:05', '2023-10-28 01:16:05'),
(134, 'Walton', 'Cat', 'Male', 'quibusdam', 4, 5, 'Eum deserunt quia vel nihil fuga officiis reiciendis.', 'Processing', NULL, '2023-10-29 01:16:05', '2023-09-16 01:16:05'),
(135, 'Rebekah', 'Dog', 'Female', 'minus', 11, 7, 'Accusamus aliquam blanditiis minus sint atque veritatis quas.', 'Processing', NULL, '2023-05-29 01:16:05', '2023-11-24 01:16:05'),
(136, 'Ettie', 'Dog', 'Female', 'eaque', 11, 9, 'Beatae placeat error dolorem earum doloribus at consequuntur vitae.', 'Processing', NULL, '2023-12-23 01:16:05', '2023-08-18 01:16:05'),
(137, 'Ariane', 'Dog', 'Female', 'harum', 8, 5, 'Amet occaecati a cum quasi ut.', 'Processing', NULL, '2023-03-15 01:16:05', '2023-08-17 01:16:05'),
(138, 'Jaren', 'Dog', 'Male', 'fugiat', 2, 5, 'Optio culpa suscipit eveniet consectetur non dolor est.', 'Processing', NULL, '2023-09-27 01:16:05', '2023-03-25 01:16:05'),
(139, 'Marianne', 'Cat', 'Female', 'cupiditate', 8, 5, 'Soluta sunt harum beatae natus.', 'Processing', NULL, '2023-02-18 01:16:05', '2023-03-02 01:16:05'),
(140, 'Lisette', 'Cat', 'Female', 'omnis', 7, 7, 'Asperiores nesciunt praesentium ut sit nobis quod.', 'Processing', NULL, '2023-06-09 01:16:05', '2023-05-26 01:16:05'),
(141, 'Loma', 'Cat', 'Male', 'aperiam', 6, 4, 'Quam quia assumenda fuga et aut rerum.', 'Processing', NULL, '2023-04-05 01:16:05', '2023-08-26 01:16:05'),
(142, 'Jackeline', 'Dog', 'Female', 'harum', 4, 8, 'Voluptatem doloremque saepe velit in harum dolor quod autem.', 'Processing', NULL, '2024-01-17 01:16:05', '2023-10-06 01:16:05'),
(143, 'Violette', 'Dog', 'Female', 'qui', 4, 10, 'Excepturi cupiditate pariatur eos sed aliquid.', 'Processing', NULL, '2023-10-27 01:16:05', '2023-07-17 01:16:05'),
(144, 'Franz', 'Cat', 'Male', 'rerum', 15, 7, 'Fuga sint velit dolores nihil.', 'Processing', NULL, '2023-04-12 01:16:05', '2023-04-09 01:16:05'),
(145, 'Reece', 'Cat', 'Female', 'ut', 5, 7, 'Sed ea nam non sed ipsum.', 'Processing', NULL, '2023-12-24 01:16:05', '2023-04-06 01:16:05'),
(146, 'Ford', 'Dog', 'Male', 'provident', 7, 6, 'Eligendi modi repellat explicabo.', 'Processing', NULL, '2023-09-05 01:16:05', '2023-03-03 01:16:05'),
(147, 'Skye', 'Cat', 'Male', 'tenetur', 4, 2, 'Occaecati et et minima laboriosam ut rerum.', 'Processing', NULL, '2023-06-02 01:16:05', '2023-08-28 01:16:05'),
(148, 'America', 'Cat', 'Female', 'consectetur', 8, 9, 'Sint quia enim ratione laboriosam mollitia.', 'Processing', NULL, '2024-01-16 01:16:05', '2023-06-27 01:16:05'),
(149, 'Grover', 'Cat', 'Female', 'voluptas', 4, 9, 'Rerum magnam vitae et sunt.', 'Processing', NULL, '2023-06-26 01:16:05', '2023-11-30 01:16:05'),
(150, 'Pascale', 'Cat', 'Female', 'impedit', 1, 2, 'Veniam eaque qui quia voluptatem dignissimos est magni rerum.', 'Processing', NULL, '2024-01-04 01:16:05', '2023-08-10 01:16:05'),
(151, 'Viva', 'Dog', 'Male', 'et', 1, 11, 'Omnis quos voluptatem qui consequatur mollitia.', 'Adopted', NULL, '2023-05-13 01:16:05', '2023-06-22 01:16:05'),
(152, 'Francisco', 'Cat', 'Male', 'rerum', 15, 1, 'Error dolores porro consequatur et dolorum neque suscipit.', 'Adopted', NULL, '2023-03-25 01:16:05', '2023-06-21 01:16:05'),
(153, 'Cornell', 'Dog', 'Male', 'alias', 13, 9, 'Et cum hic nostrum ad ea aut voluptatem est.', 'Adopted', NULL, '2023-02-03 01:16:05', '2023-03-13 01:16:05'),
(154, 'Enid', 'Cat', 'Female', 'delectus', 12, 4, 'Provident unde voluptatum non sed quibusdam.', 'Adopted', NULL, '2024-01-13 01:16:05', '2023-02-28 01:16:05'),
(155, 'Lura', 'Dog', 'Male', 'ut', 7, 5, 'Et est doloribus atque aut cupiditate.', 'Adopted', NULL, '2023-10-24 01:16:05', '2023-10-07 01:16:05'),
(156, 'Theo', 'Dog', 'Female', 'eum', 9, 9, 'Sit aut sint voluptatem aut.', 'Adopted', NULL, '2023-06-04 01:16:05', '2023-08-24 01:16:05'),
(157, 'Cielo', 'Dog', 'Female', 'hic', 3, 11, 'Commodi ducimus odit omnis omnis sequi numquam cumque.', 'Adopted', NULL, '2024-01-22 01:16:05', '2023-06-24 01:16:05'),
(158, 'Briana', 'Cat', 'Male', 'aperiam', 15, 10, 'Excepturi id et ea quo.', 'Adopted', NULL, '2023-04-29 01:16:05', '2023-06-08 01:16:05'),
(159, 'Nelson', 'Cat', 'Female', 'quis', 5, 8, 'Officiis totam velit vero libero ab magni deserunt.', 'Adopted', NULL, '2023-06-21 01:16:05', '2023-03-11 01:16:05'),
(160, 'Hermann', 'Dog', 'Female', 'praesentium', 7, 1, 'Provident consequatur porro dolores est cum aut.', 'Adopted', NULL, '2023-10-22 01:16:05', '2024-01-04 01:16:05'),
(161, 'Yesenia', 'Dog', 'Female', 'veritatis', 1, 6, 'Beatae ut laborum alias excepturi nemo est.', 'Adopted', NULL, '2023-10-23 01:16:05', '2023-08-02 01:16:05'),
(162, 'Marisol', 'Dog', 'Male', 'laborum', 11, 10, 'Impedit expedita placeat aperiam nesciunt velit.', 'Adopted', NULL, '2023-11-03 01:16:05', '2023-02-12 01:16:05'),
(163, 'Morton', 'Dog', 'Female', 'vero', 4, 7, 'Voluptatibus repudiandae qui cum nesciunt non illum.', 'Adopted', NULL, '2023-07-14 01:16:05', '2023-12-31 01:16:05'),
(164, 'Franz', 'Cat', 'Male', 'dolor', 9, 0, 'Voluptas voluptatem molestiae corporis inventore eos.', 'Adopted', NULL, '2023-12-09 01:16:05', '2023-06-05 01:16:05'),
(165, 'Raymond', 'Cat', 'Female', 'in', 8, 5, 'Totam perspiciatis minima modi sequi et consectetur.', 'Adopted', NULL, '2023-09-28 01:16:05', '2023-11-18 01:16:05'),
(166, 'Zetta', 'Cat', 'Female', 'qui', 3, 6, 'Nesciunt dolorem corrupti nulla aut harum quasi.', 'Adopted', NULL, '2023-05-30 01:16:05', '2024-01-05 01:16:05'),
(167, 'Veda', 'Dog', 'Female', 'autem', 13, 10, 'Velit qui a voluptatibus.', 'Adopted', NULL, '2023-11-28 01:16:05', '2023-06-09 01:16:05'),
(168, 'Kathlyn', 'Cat', 'Female', 'consequatur', 7, 9, 'Voluptatem sed veritatis quae magni cumque.', 'Adopted', NULL, '2023-05-08 01:16:05', '2024-01-12 01:16:05'),
(169, 'Sherman', 'Cat', 'Female', 'sit', 6, 11, 'Minus amet odit placeat.', 'Adopted', NULL, '2023-03-03 01:16:05', '2023-07-14 01:16:05'),
(170, 'Reyes', 'Dog', 'Male', 'reprehenderit', 8, 11, 'Alias sapiente labore porro.', 'Adopted', NULL, '2023-11-16 01:16:05', '2023-09-26 01:16:05'),
(171, 'Jayson', 'Dog', 'Male', 'pariatur', 15, 4, 'Qui dignissimos voluptatem molestiae.', 'Adopted', NULL, '2023-06-15 01:16:05', '2023-04-13 01:16:05'),
(172, 'Marietta', 'Cat', 'Female', 'assumenda', 1, 6, 'Ullam autem quam et culpa et.', 'Adopted', NULL, '2023-12-28 01:16:05', '2023-09-25 01:16:05'),
(173, 'Dayne', 'Cat', 'Male', 'voluptas', 12, 6, 'Ea non tempora rerum quaerat dolores rerum.', 'Adopted', NULL, '2023-02-26 01:16:05', '2023-01-26 01:16:05'),
(174, 'Reed', 'Cat', 'Male', 'inventore', 8, 9, 'Dolorum id quia ea iure voluptatem quia optio.', 'Adopted', NULL, '2023-10-31 01:16:05', '2023-06-06 01:16:05'),
(175, 'Teresa', 'Cat', 'Male', 'et', 5, 11, 'Sunt sint id voluptates autem nesciunt facere ullam.', 'Adopted', NULL, '2023-09-25 01:16:05', '2023-07-19 01:16:05'),
(176, 'Fred', 'Cat', 'Female', 'dolorem', 14, 5, 'Voluptas dolore et id expedita eveniet.', 'Adopted', NULL, '2023-06-18 01:16:05', '2023-09-06 01:16:05'),
(177, 'Velda', 'Cat', 'Male', 'cum', 10, 1, 'Aspernatur aut ea aut.', 'Adopted', NULL, '2023-09-04 01:16:05', '2023-09-07 01:16:05'),
(178, 'Helena', 'Dog', 'Female', 'sit', 14, 0, 'Quam veritatis ut omnis aliquam.', 'Adopted', NULL, '2023-11-24 01:16:05', '2023-11-08 01:16:05'),
(179, 'Velva', 'Cat', 'Female', 'ab', 12, 0, 'Vel voluptate in voluptatem eum voluptatem deserunt doloribus.', 'Adopted', NULL, '2023-10-29 01:16:05', '2023-08-13 01:16:05'),
(180, 'Casimer', 'Cat', 'Male', 'aliquam', 4, 6, 'Rerum sint perspiciatis delectus rerum ratione autem provident.', 'Adopted', NULL, '2023-06-21 01:16:05', '2024-01-05 01:16:05'),
(181, 'Thad', 'Cat', 'Male', 'eum', 12, 1, 'Similique voluptatum ipsum pariatur assumenda voluptatem nisi.', 'Adopted', NULL, '2023-12-03 01:16:05', '2023-02-07 01:16:05'),
(182, 'Leonora', 'Cat', 'Male', 'veritatis', 11, 5, 'Placeat ex libero adipisci corrupti quasi soluta et.', 'Adopted', NULL, '2023-06-30 01:16:05', '2024-01-22 01:16:05'),
(183, 'Lyla', 'Dog', 'Male', 'expedita', 1, 2, 'Nam omnis officia dolor natus dignissimos ipsam.', 'Adopted', NULL, '2023-05-01 01:16:05', '2023-04-05 01:16:05'),
(184, 'Colt', 'Cat', 'Male', 'modi', 12, 10, 'Odit facilis iure vero veritatis.', 'Adopted', NULL, '2023-09-28 01:16:05', '2023-12-20 01:16:05'),
(185, 'Lillian', 'Cat', 'Female', 'officia', 5, 11, 'Soluta qui ducimus itaque dignissimos ut rem.', 'Adopted', NULL, '2023-09-10 01:16:05', '2023-06-16 01:16:05'),
(186, 'Maia', 'Cat', 'Male', 'cumque', 13, 8, 'Minus at accusamus aperiam qui fugit et accusamus.', 'Adopted', NULL, '2023-04-27 01:16:05', '2023-12-28 01:16:05'),
(187, 'Idell', 'Cat', 'Female', 'eaque', 6, 9, 'Quibusdam quae natus rerum dicta.', 'Adopted', NULL, '2023-09-04 01:16:05', '2023-03-29 01:16:05'),
(188, 'Carli', 'Dog', 'Male', 'impedit', 2, 5, 'Quia voluptate quasi iste accusantium.', 'Adopted', NULL, '2023-07-15 01:16:05', '2023-03-16 01:16:05'),
(189, 'Gunnar', 'Cat', 'Female', 'reprehenderit', 2, 0, 'Qui fugiat sequi voluptas cupiditate alias atque quisquam.', 'Adopted', NULL, '2023-06-15 01:16:05', '2023-04-10 01:16:05'),
(190, 'Buster', 'Cat', 'Male', 'consequatur', 13, 2, 'Ea reiciendis officiis quasi soluta expedita cupiditate adipisci.', 'Adopted', NULL, '2023-12-13 01:16:05', '2023-02-03 01:16:05'),
(191, 'Zaria', 'Cat', 'Male', 'iste', 10, 3, 'In modi ex deserunt consequatur ut perferendis ut.', 'Adopted', NULL, '2023-12-22 01:16:05', '2023-10-06 01:16:05'),
(192, 'Sallie', 'Cat', 'Female', 'quos', 9, 6, 'Nam minima incidunt accusamus reiciendis est nulla dolorum.', 'Adopted', NULL, '2023-10-08 01:16:05', '2023-05-05 01:16:05'),
(193, 'Maybell', 'Cat', 'Female', 'optio', 12, 9, 'Est aliquam officiis qui ipsum.', 'Adopted', NULL, '2023-02-25 01:16:05', '2023-05-04 01:16:05'),
(194, 'Ron', 'Dog', 'Male', 'quis', 6, 8, 'Ut odio quasi sed.', 'Adopted', NULL, '2023-07-30 01:16:05', '2023-11-20 01:16:05'),
(195, 'Tre', 'Cat', 'Male', 'voluptatem', 11, 8, 'Distinctio qui neque pariatur quasi adipisci perferendis animi voluptates.', 'Adopted', NULL, '2023-05-09 01:16:05', '2023-05-03 01:16:05'),
(196, 'Orval', 'Cat', 'Male', 'in', 13, 3, 'Id qui tempora repudiandae quis aut et.', 'Adopted', NULL, '2023-10-08 01:16:05', '2023-10-14 01:16:05'),
(197, 'Esperanza', 'Cat', 'Female', 'ut', 11, 10, 'Dolorum explicabo et quo ea.', 'Adopted', NULL, '2023-09-20 01:16:05', '2023-03-17 01:16:05'),
(198, 'Kameron', 'Dog', 'Male', 'praesentium', 11, 11, 'Velit ipsum magnam occaecati est modi.', 'Adopted', NULL, '2023-11-27 01:16:05', '2023-07-28 01:16:05'),
(199, 'Amiya', 'Cat', 'Female', 'maxime', 4, 3, 'Corrupti eum sunt voluptatem porro consectetur voluptatibus sint.', 'Adopted', NULL, '2024-01-19 01:16:05', '2023-12-26 01:16:05'),
(200, 'Margie', 'Cat', 'Female', 'sint', 15, 7, 'Eveniet et itaque id dolores.', 'Adopted', NULL, '2023-10-06 01:16:05', '2023-01-30 01:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `pet_monitoring`
--

CREATE TABLE `pet_monitoring` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `condition` enum('Good','Fair','Poor') NOT NULL DEFAULT 'Good',
  `status` enum('Monitoring','Stopped') NOT NULL DEFAULT 'Monitoring',
  `monitoring_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `note_added_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_surrenders`
--

CREATE TABLE `pet_surrenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_name` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL DEFAULT 'Pending',
  `surrender_date` date DEFAULT NULL,
  `age_years` smallint(5) UNSIGNED DEFAULT NULL,
  `age_months` tinyint(3) UNSIGNED DEFAULT NULL,
  `type` enum('Dog','Cat') NOT NULL DEFAULT 'Dog',
  `species` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `promoted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `case_type_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `status` enum('pending','acknowledged','solved','cancelled') NOT NULL DEFAULT 'pending',
  `picture` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `case_type_id`, `description`, `status`, `picture`, `video`, `created_at`, `updated_at`) VALUES
(1, 26, 5, 'Perferendis rerum voluptates qui consequatur sint distinctio.', 'pending', NULL, NULL, '2024-01-21 01:16:05', '2023-03-02 01:16:05'),
(2, 31, 1, 'Earum nemo explicabo consequatur qui quos voluptates occaecati.', 'pending', NULL, NULL, '2023-04-13 01:16:05', '2023-06-19 01:16:05'),
(3, 12, 2, 'Amet quisquam fugit reprehenderit architecto iure nulla.', 'cancelled', NULL, NULL, '2023-08-17 01:16:05', '2023-02-25 01:16:05'),
(4, 100, 3, 'Voluptate sapiente consequatur est.', 'solved', NULL, NULL, '2024-01-03 01:16:05', '2023-09-25 01:16:05'),
(5, 40, 5, 'Rerum sed aut voluptatibus eos consectetur molestias.', 'acknowledged', NULL, NULL, '2023-10-05 01:16:05', '2024-01-03 01:16:05'),
(6, 15, 2, 'Quasi magnam et quaerat totam odit autem.', 'acknowledged', NULL, NULL, '2023-08-15 01:16:05', '2023-03-22 01:16:05'),
(7, 96, 5, 'A recusandae hic possimus dignissimos.', 'pending', NULL, NULL, '2024-01-05 01:16:05', '2023-10-29 01:16:05'),
(8, 80, 5, 'Ducimus possimus dicta enim qui.', 'pending', NULL, NULL, '2023-03-24 01:16:05', '2023-07-06 01:16:05'),
(9, 76, 2, 'Ex dolor expedita non beatae ipsam.', 'cancelled', NULL, NULL, '2023-10-11 01:16:05', '2023-08-02 01:16:05'),
(10, 54, 4, 'Aliquam minus dolor qui.', 'solved', NULL, NULL, '2023-07-17 01:16:05', '2023-07-26 01:16:05'),
(11, 39, 5, 'Possimus aut fugit quod esse enim.', 'pending', NULL, NULL, '2023-10-04 01:16:05', '2023-02-22 01:16:05'),
(12, 39, 3, 'Voluptatibus dicta culpa sit possimus.', 'acknowledged', NULL, NULL, '2023-05-21 01:16:05', '2023-05-29 01:16:05'),
(13, 64, 1, 'Alias rerum eius quae iusto dicta.', 'solved', NULL, NULL, '2023-10-16 01:16:05', '2023-08-24 01:16:05'),
(14, 77, 2, 'Voluptatem unde eum architecto modi nesciunt animi.', 'solved', NULL, NULL, '2023-12-30 01:16:05', '2023-10-09 01:16:05'),
(15, 62, 2, 'Quia ab eos voluptas.', 'solved', NULL, NULL, '2023-03-12 01:16:05', '2023-09-08 01:16:05'),
(16, 37, 5, 'Omnis molestiae ex sunt sunt earum velit.', 'solved', NULL, NULL, '2023-04-07 01:16:05', '2023-03-22 01:16:05'),
(17, 11, 5, 'Aut adipisci sequi vitae officiis.', 'acknowledged', NULL, NULL, '2023-03-18 01:16:05', '2023-12-29 01:16:05'),
(18, 75, 5, 'Quia atque tempora id cumque reprehenderit dolores id.', 'pending', NULL, NULL, '2023-02-17 01:16:05', '2023-08-12 01:16:05'),
(19, 73, 2, 'Dolorum libero similique iusto minima ipsam.', 'acknowledged', NULL, NULL, '2023-02-13 01:16:05', '2023-01-27 01:16:05'),
(20, 19, 2, 'Et quas amet laborum ipsa ab.', 'acknowledged', NULL, NULL, '2023-01-27 01:16:05', '2023-12-15 01:16:05'),
(21, 75, 2, 'Amet provident unde atque sunt numquam placeat.', 'acknowledged', NULL, NULL, '2024-01-25 01:16:05', '2023-12-26 01:16:05'),
(22, 19, 5, 'Iusto earum et tenetur ut exercitationem eligendi veritatis.', 'acknowledged', NULL, NULL, '2023-03-09 01:16:05', '2023-04-14 01:16:05'),
(23, 55, 4, 'Vero maiores distinctio eum ullam labore.', 'pending', NULL, NULL, '2023-09-19 01:16:05', '2023-06-12 01:16:05'),
(24, 58, 3, 'Eum deserunt fugit et consequatur harum dolor.', 'acknowledged', NULL, NULL, '2023-09-17 01:16:05', '2023-05-03 01:16:05'),
(25, 1, 2, 'Delectus aliquid vel et rerum optio.', 'cancelled', NULL, NULL, '2023-08-19 01:16:05', '2023-05-04 01:16:05'),
(26, 10, 5, 'Aut ad veritatis ducimus sit est.', 'solved', NULL, NULL, '2024-01-07 01:16:05', '2023-03-06 01:16:05'),
(27, 92, 5, 'Aut ab aut quo nihil hic amet et.', 'acknowledged', NULL, NULL, '2023-10-21 01:16:05', '2024-01-02 01:16:05'),
(28, 22, 1, 'Ipsa sapiente dolorem necessitatibus.', 'pending', NULL, NULL, '2023-12-07 01:16:05', '2023-06-05 01:16:05'),
(29, 39, 5, 'Veniam eaque suscipit adipisci cumque est rerum voluptate.', 'cancelled', NULL, NULL, '2023-11-26 01:16:05', '2023-07-08 01:16:05'),
(30, 48, 1, 'At eligendi illo ea tenetur.', 'solved', NULL, NULL, '2023-06-27 01:16:05', '2023-07-28 01:16:05'),
(31, 44, 1, 'Quia et aperiam quia repudiandae eaque qui ipsam.', 'acknowledged', NULL, NULL, '2023-10-12 01:16:05', '2023-09-21 01:16:05'),
(32, 75, 1, 'Recusandae facilis aliquid facilis autem sed ducimus.', 'solved', NULL, NULL, '2023-09-18 01:16:05', '2023-08-31 01:16:05'),
(33, 6, 4, 'Ullam est veritatis blanditiis aliquam est iusto doloremque.', 'acknowledged', NULL, NULL, '2023-06-16 01:16:05', '2023-09-29 01:16:05'),
(34, 67, 5, 'Eligendi alias quam velit ipsam.', 'acknowledged', NULL, NULL, '2023-11-20 01:16:05', '2023-06-29 01:16:05'),
(35, 98, 1, 'Mollitia nostrum dolorem facere odio fugiat.', 'acknowledged', NULL, NULL, '2024-01-09 01:16:05', '2024-01-20 01:16:05'),
(36, 79, 3, 'In quasi exercitationem non ut voluptates provident ab laudantium.', 'solved', NULL, NULL, '2023-06-02 01:16:05', '2023-03-05 01:16:05'),
(37, 18, 3, 'Magnam et laborum quis quo.', 'pending', NULL, NULL, '2023-02-23 01:16:05', '2023-12-22 01:16:05'),
(38, 69, 5, 'Totam dolorum et porro sunt autem dolore.', 'acknowledged', NULL, NULL, '2023-02-01 01:16:05', '2023-04-22 01:16:05'),
(39, 16, 1, 'Qui nisi libero est dignissimos.', 'acknowledged', NULL, NULL, '2023-05-25 01:16:05', '2023-11-01 01:16:05'),
(40, 49, 3, 'Dolore deleniti recusandae deserunt voluptate impedit.', 'cancelled', NULL, NULL, '2023-05-24 01:16:05', '2023-05-28 01:16:05'),
(41, 8, 4, 'Explicabo aut odit voluptatibus veniam temporibus hic ipsam nesciunt.', 'solved', NULL, NULL, '2023-07-08 01:16:05', '2024-01-22 01:16:05'),
(42, 39, 2, 'Doloremque quisquam cum numquam ab recusandae.', 'cancelled', NULL, NULL, '2023-12-10 01:16:05', '2023-12-03 01:16:05'),
(43, 7, 1, 'Quae ut nihil culpa impedit in et libero.', 'cancelled', NULL, NULL, '2023-11-09 01:16:05', '2023-05-25 01:16:05'),
(44, 63, 4, 'Quam cumque explicabo qui qui perferendis.', 'acknowledged', NULL, NULL, '2023-10-04 01:16:05', '2023-05-25 01:16:05'),
(45, 90, 4, 'Quae commodi ut est voluptatem nulla doloribus.', 'pending', NULL, NULL, '2023-11-07 01:16:05', '2023-10-25 01:16:05'),
(46, 20, 3, 'Dolore minima ea fugiat sequi in enim.', 'solved', NULL, NULL, '2024-01-01 01:16:05', '2023-05-01 01:16:05'),
(47, 86, 4, 'Quam laudantium et ut quo quia omnis.', 'cancelled', NULL, NULL, '2023-07-03 01:16:05', '2024-01-25 01:16:05'),
(48, 88, 1, 'Et quibusdam ratione veritatis laborum vel quam.', 'solved', NULL, NULL, '2023-10-11 01:16:05', '2023-05-21 01:16:05'),
(49, 91, 3, 'Quia voluptate qui ducimus commodi veniam.', 'cancelled', NULL, NULL, '2023-04-21 01:16:05', '2023-01-30 01:16:05'),
(50, 81, 1, 'Sint tempora harum qui.', 'cancelled', NULL, NULL, '2023-11-07 01:16:05', '2023-12-22 01:16:05'),
(51, 63, 3, 'Expedita voluptatibus in nisi accusamus non ipsam exercitationem voluptatum.', 'solved', NULL, NULL, '2023-06-29 01:16:05', '2023-10-16 01:16:05'),
(52, 58, 3, 'Incidunt similique reiciendis ut molestiae sed expedita.', 'solved', NULL, NULL, '2023-03-24 01:16:05', '2023-06-12 01:16:05'),
(53, 45, 5, 'Et id odit veritatis sint sunt.', 'cancelled', NULL, NULL, '2023-05-31 01:16:05', '2023-04-14 01:16:05'),
(54, 35, 3, 'Quis ea voluptate dicta blanditiis.', 'solved', NULL, NULL, '2023-04-12 01:16:05', '2023-09-09 01:16:05'),
(55, 11, 4, 'Qui vel quia voluptates et voluptatem ullam.', 'cancelled', NULL, NULL, '2023-11-30 01:16:05', '2023-11-24 01:16:05'),
(56, 79, 1, 'Omnis nemo reprehenderit necessitatibus eum molestiae fugiat laborum.', 'acknowledged', NULL, NULL, '2023-02-10 01:16:05', '2023-07-20 01:16:05'),
(57, 56, 2, 'Qui nulla culpa dolorum ab iure id.', 'pending', NULL, NULL, '2023-04-27 01:16:05', '2023-06-15 01:16:05'),
(58, 99, 5, 'Perferendis quia veniam sunt quia animi et qui.', 'pending', NULL, NULL, '2023-03-03 01:16:05', '2023-11-20 01:16:05'),
(59, 18, 4, 'Et sed laudantium consequatur beatae aut ullam voluptas.', 'solved', NULL, NULL, '2023-05-15 01:16:05', '2023-05-04 01:16:05'),
(60, 17, 2, 'Quaerat vel modi nostrum praesentium doloremque.', 'acknowledged', NULL, NULL, '2024-01-05 01:16:05', '2024-01-25 01:16:05'),
(61, 74, 1, 'Non aut neque sit rerum labore.', 'solved', NULL, NULL, '2023-09-22 01:16:05', '2023-10-06 01:16:05'),
(62, 20, 2, 'Nulla laudantium necessitatibus vel nihil.', 'pending', NULL, NULL, '2023-11-04 01:16:05', '2023-09-26 01:16:05'),
(63, 19, 3, 'Reprehenderit voluptatem facilis autem exercitationem corrupti.', 'cancelled', NULL, NULL, '2023-03-07 01:16:05', '2023-07-27 01:16:05'),
(64, 11, 3, 'Totam aliquam ab vel.', 'acknowledged', NULL, NULL, '2023-12-29 01:16:05', '2023-05-01 01:16:05'),
(65, 49, 2, 'Consequatur autem non quia laborum velit.', 'acknowledged', NULL, NULL, '2023-05-06 01:16:05', '2023-08-12 01:16:05'),
(66, 71, 1, 'Omnis consequatur molestias eaque accusantium pariatur necessitatibus eius.', 'acknowledged', NULL, NULL, '2023-11-02 01:16:05', '2023-07-29 01:16:05'),
(67, 38, 1, 'Eaque veniam aut voluptatem nihil.', 'acknowledged', NULL, NULL, '2023-02-15 01:16:05', '2023-11-17 01:16:05'),
(68, 86, 2, 'Sint alias tenetur quia.', 'acknowledged', NULL, NULL, '2023-08-22 01:16:05', '2023-03-12 01:16:05'),
(69, 44, 3, 'Quo esse aut repudiandae enim esse.', 'pending', NULL, NULL, '2023-09-14 01:16:05', '2023-07-23 01:16:05'),
(70, 22, 2, 'Excepturi asperiores id nesciunt atque aut distinctio est.', 'pending', NULL, NULL, '2023-08-27 01:16:05', '2023-07-07 01:16:05'),
(71, 10, 2, 'Quae voluptas deleniti deserunt at voluptatem reiciendis sit ut.', 'pending', NULL, NULL, '2023-07-11 01:16:05', '2023-10-16 01:16:05'),
(72, 19, 1, 'Sit numquam unde id ad doloribus.', 'solved', NULL, NULL, '2023-08-05 01:16:05', '2023-04-09 01:16:05'),
(73, 8, 3, 'Enim eos quae et voluptas in voluptatem.', 'acknowledged', NULL, NULL, '2023-12-18 01:16:05', '2023-06-06 01:16:05'),
(74, 32, 5, 'Ut saepe tenetur et sapiente cum.', 'pending', NULL, NULL, '2023-02-22 01:16:05', '2023-10-27 01:16:05'),
(75, 8, 3, 'Nobis impedit libero aut maiores repellat molestias.', 'cancelled', NULL, NULL, '2023-12-24 01:16:05', '2024-01-13 01:16:05'),
(76, 85, 1, 'Sapiente ab illo rerum.', 'acknowledged', NULL, NULL, '2023-09-30 01:16:05', '2023-12-17 01:16:05'),
(77, 67, 4, 'Totam ut aliquam iusto voluptatem qui.', 'cancelled', NULL, NULL, '2023-03-22 01:16:05', '2023-10-27 01:16:05'),
(78, 44, 4, 'Eos vel perferendis architecto debitis repudiandae.', 'cancelled', NULL, NULL, '2023-04-03 01:16:05', '2023-02-24 01:16:05'),
(79, 90, 1, 'Perferendis ut officiis omnis mollitia eaque.', 'pending', NULL, NULL, '2024-01-21 01:16:05', '2023-06-20 01:16:05'),
(80, 73, 2, 'Est in animi nam placeat et.', 'pending', NULL, NULL, '2023-09-04 01:16:05', '2023-03-25 01:16:05'),
(81, 50, 4, 'Sed magnam ut autem dolor quia assumenda.', 'acknowledged', NULL, NULL, '2023-10-25 01:16:05', '2023-03-24 01:16:05'),
(82, 14, 3, 'Ut et quaerat rerum est recusandae et magnam.', 'acknowledged', NULL, NULL, '2023-07-25 01:16:05', '2023-06-12 01:16:05'),
(83, 7, 3, 'Ipsa aut vitae exercitationem inventore et architecto fugit quam.', 'acknowledged', NULL, NULL, '2023-04-22 01:16:05', '2023-10-29 01:16:05'),
(84, 38, 5, 'Nulla quaerat sapiente velit sed exercitationem dignissimos.', 'solved', NULL, NULL, '2023-05-09 01:16:05', '2023-05-18 01:16:05'),
(85, 79, 4, 'Vitae qui esse nemo quidem commodi quidem natus fuga.', 'solved', NULL, NULL, '2023-11-13 01:16:05', '2023-07-08 01:16:05'),
(86, 74, 3, 'Excepturi dolores sit corrupti quibusdam rem.', 'pending', NULL, NULL, '2023-06-24 01:16:05', '2023-11-22 01:16:05'),
(87, 99, 1, 'Totam vel iste illum voluptate soluta.', 'solved', NULL, NULL, '2023-08-19 01:16:05', '2023-10-29 01:16:05'),
(88, 36, 4, 'Vel dolore nobis vero cumque.', 'solved', NULL, NULL, '2023-02-21 01:16:05', '2023-05-03 01:16:05'),
(89, 17, 5, 'Deserunt reiciendis rerum placeat mollitia repellendus ut.', 'solved', NULL, NULL, '2023-09-22 01:16:05', '2023-03-11 01:16:05'),
(90, 7, 3, 'Porro repudiandae excepturi doloribus sit voluptatem natus est.', 'pending', NULL, NULL, '2023-07-03 01:16:05', '2023-11-03 01:16:05'),
(91, 17, 1, 'Reiciendis quibusdam dolore architecto adipisci exercitationem quod quibusdam quis.', 'acknowledged', NULL, NULL, '2023-05-25 01:16:05', '2023-10-02 01:16:05'),
(92, 89, 3, 'Possimus culpa fuga error repudiandae.', 'solved', NULL, NULL, '2023-03-27 01:16:05', '2023-07-23 01:16:05'),
(93, 19, 1, 'Totam perspiciatis nisi consectetur magnam adipisci iste ab.', 'solved', NULL, NULL, '2023-09-15 01:16:05', '2023-03-06 01:16:05'),
(94, 34, 1, 'Sunt repellat rerum sit quia error.', 'pending', NULL, NULL, '2023-11-25 01:16:05', '2023-08-09 01:16:05'),
(95, 54, 3, 'Molestias molestiae vero aut et et officia molestiae accusamus.', 'cancelled', NULL, NULL, '2023-12-30 01:16:05', '2023-07-26 01:16:05'),
(96, 100, 3, 'Corrupti porro ut quam sint est quidem repellendus ratione.', 'cancelled', NULL, NULL, '2023-04-14 01:16:05', '2023-08-23 01:16:05'),
(97, 35, 3, 'Assumenda distinctio voluptatem minus consequatur eum est placeat inventore.', 'acknowledged', NULL, NULL, '2023-08-26 01:16:05', '2023-12-11 01:16:05'),
(98, 96, 3, 'Consequatur cum tempora eum facere cum.', 'cancelled', NULL, NULL, '2023-10-08 01:16:05', '2023-04-12 01:16:05'),
(99, 41, 3, 'Distinctio repudiandae perferendis natus sunt vero odio.', 'pending', NULL, NULL, '2023-11-29 01:16:05', '2023-02-05 01:16:05'),
(100, 55, 5, 'Pariatur ducimus sit ullam quia.', 'acknowledged', NULL, NULL, '2024-01-12 01:16:05', '2023-11-17 01:16:05'),
(101, 91, 4, 'Aut qui blanditiis praesentium.', 'cancelled', NULL, NULL, '2023-12-16 01:16:05', '2023-10-28 01:16:05'),
(102, 66, 1, 'Dolor qui quas et quia officia explicabo.', 'acknowledged', NULL, NULL, '2023-06-27 01:16:05', '2023-11-30 01:16:05'),
(103, 49, 2, 'Sit eligendi saepe occaecati.', 'pending', NULL, NULL, '2023-10-21 01:16:05', '2023-08-30 01:16:05'),
(104, 76, 2, 'Nobis optio eos tenetur et nam odit nemo.', 'cancelled', NULL, NULL, '2023-11-02 01:16:05', '2023-05-11 01:16:05'),
(105, 31, 1, 'Hic tenetur non eum rem animi hic.', 'acknowledged', NULL, NULL, '2023-02-24 01:16:05', '2023-02-25 01:16:05'),
(106, 27, 3, 'Odit asperiores laboriosam odit sequi hic beatae.', 'pending', NULL, NULL, '2023-04-14 01:16:05', '2023-03-20 01:16:05'),
(107, 13, 3, 'Accusamus labore doloribus consequatur perferendis.', 'acknowledged', NULL, NULL, '2023-08-23 01:16:05', '2023-07-05 01:16:05'),
(108, 93, 2, 'Eos ullam rerum doloremque tenetur sed consequatur voluptatem.', 'acknowledged', NULL, NULL, '2023-06-02 01:16:05', '2023-02-22 01:16:05'),
(109, 99, 4, 'Qui vel laborum aut qui ad tempora reprehenderit.', 'cancelled', NULL, NULL, '2023-08-20 01:16:05', '2023-12-08 01:16:05'),
(110, 44, 2, 'Quia ut in nemo et quo odio et.', 'pending', NULL, NULL, '2023-06-28 01:16:05', '2023-05-14 01:16:05'),
(111, 40, 1, 'Consectetur quo vitae qui.', 'solved', NULL, NULL, '2023-03-10 01:16:05', '2023-12-06 01:16:05'),
(112, 48, 5, 'Sed quis perferendis eaque velit laudantium dolorum quo.', 'acknowledged', NULL, NULL, '2024-01-05 01:16:05', '2023-10-19 01:16:05'),
(113, 85, 3, 'Autem voluptatem natus quaerat sunt dolorum aut.', 'cancelled', NULL, NULL, '2023-11-17 01:16:05', '2023-02-24 01:16:05'),
(114, 19, 5, 'Porro nulla quibusdam eos.', 'pending', NULL, NULL, '2024-01-20 01:16:05', '2024-01-01 01:16:05'),
(115, 65, 3, 'Quas et et sunt voluptas magnam neque vero.', 'pending', NULL, NULL, '2024-01-02 01:16:05', '2023-04-13 01:16:05'),
(116, 49, 4, 'Dignissimos tempore impedit exercitationem explicabo minus non illo.', 'solved', NULL, NULL, '2023-02-24 01:16:05', '2023-08-13 01:16:05'),
(117, 40, 5, 'Veniam molestiae id deleniti necessitatibus quos laudantium.', 'acknowledged', NULL, NULL, '2023-09-17 01:16:05', '2023-09-18 01:16:05'),
(118, 64, 5, 'Debitis nemo molestiae illum reprehenderit quidem at.', 'pending', NULL, NULL, '2023-09-04 01:16:05', '2023-06-28 01:16:05'),
(119, 34, 2, 'Atque omnis deleniti illum id.', 'pending', NULL, NULL, '2023-03-31 01:16:05', '2023-04-18 01:16:05'),
(120, 84, 2, 'Quia dolor quia quibusdam sint veniam veniam.', 'pending', NULL, NULL, '2023-02-27 01:16:05', '2023-02-11 01:16:05'),
(121, 91, 2, 'Exercitationem et amet itaque.', 'cancelled', NULL, NULL, '2023-02-12 01:16:05', '2023-09-17 01:16:05'),
(122, 80, 3, 'Vero est soluta pariatur.', 'cancelled', NULL, NULL, '2023-03-03 01:16:05', '2023-03-05 01:16:05'),
(123, 18, 4, 'Ea voluptates ut non molestias est dignissimos omnis magnam.', 'solved', NULL, NULL, '2023-10-26 01:16:05', '2023-10-11 01:16:05'),
(124, 42, 1, 'Perspiciatis tempora incidunt ut nam quibusdam rerum.', 'pending', NULL, NULL, '2023-08-23 01:16:05', '2024-01-16 01:16:05'),
(125, 17, 2, 'Quia qui sapiente hic quod.', 'solved', NULL, NULL, '2024-01-18 01:16:05', '2023-04-24 01:16:05'),
(126, 88, 2, 'Quia animi incidunt aut ipsa numquam in.', 'acknowledged', NULL, NULL, '2023-07-18 01:16:05', '2023-05-10 01:16:05'),
(127, 47, 1, 'Id officia nobis blanditiis.', 'acknowledged', NULL, NULL, '2023-02-07 01:16:05', '2023-10-28 01:16:05'),
(128, 87, 1, 'Earum sunt minus id est necessitatibus aut neque.', 'cancelled', NULL, NULL, '2023-12-30 01:16:05', '2023-01-31 01:16:05'),
(129, 88, 3, 'Maxime repudiandae iusto ad dolorum reiciendis voluptatem eligendi et.', 'acknowledged', NULL, NULL, '2023-10-07 01:16:05', '2023-03-22 01:16:05'),
(130, 42, 5, 'Alias fugiat ab est aut necessitatibus consequatur.', 'acknowledged', NULL, NULL, '2023-06-26 01:16:05', '2023-08-15 01:16:05'),
(131, 93, 2, 'Cum hic assumenda perspiciatis dolorem.', 'pending', NULL, NULL, '2023-02-04 01:16:05', '2023-05-20 01:16:05'),
(132, 32, 4, 'Repellendus est repellat tempora accusamus perspiciatis sequi tenetur.', 'acknowledged', NULL, NULL, '2024-01-21 01:16:05', '2023-07-25 01:16:05'),
(133, 96, 5, 'Labore voluptatem animi consequuntur.', 'solved', NULL, NULL, '2023-11-18 01:16:05', '2023-04-27 01:16:05'),
(134, 96, 2, 'Numquam et ut suscipit et neque officia.', 'solved', NULL, NULL, '2023-05-05 01:16:05', '2023-11-15 01:16:05'),
(135, 6, 1, 'Omnis rem ab voluptatem molestias et exercitationem atque.', 'solved', NULL, NULL, '2023-07-23 01:16:05', '2023-01-29 01:16:05'),
(136, 86, 1, 'Eos aliquid ratione animi.', 'cancelled', NULL, NULL, '2023-01-27 01:16:05', '2023-05-14 01:16:05'),
(137, 38, 2, 'Aut non soluta dolorum.', 'pending', NULL, NULL, '2023-09-19 01:16:05', '2023-08-24 01:16:05'),
(138, 48, 4, 'Cum voluptatem consequatur non quis.', 'cancelled', NULL, NULL, '2023-11-19 01:16:05', '2023-02-28 01:16:05'),
(139, 23, 4, 'Ab officiis voluptatibus aut dolorum iste.', 'pending', NULL, NULL, '2023-11-01 01:16:05', '2023-05-14 01:16:05'),
(140, 86, 3, 'Mollitia dolorum dolores accusantium.', 'solved', NULL, NULL, '2023-09-21 01:16:05', '2023-10-30 01:16:05'),
(141, 49, 5, 'Voluptas harum necessitatibus eum.', 'acknowledged', NULL, NULL, '2024-01-24 01:16:05', '2023-07-13 01:16:05'),
(142, 43, 1, 'Unde commodi nulla quis.', 'acknowledged', NULL, NULL, '2023-02-18 01:16:05', '2023-04-14 01:16:05'),
(143, 98, 4, 'Est repudiandae ipsa amet et quis.', 'cancelled', NULL, NULL, '2023-12-21 01:16:05', '2023-12-11 01:16:05'),
(144, 35, 2, 'Ducimus magnam ab sunt libero mollitia repellendus est.', 'pending', NULL, NULL, '2023-09-08 01:16:05', '2023-08-17 01:16:05'),
(145, 45, 1, 'Est harum tenetur sunt expedita sequi aut.', 'pending', NULL, NULL, '2023-10-25 01:16:05', '2023-07-11 01:16:05'),
(146, 5, 4, 'Qui sapiente accusamus suscipit consequatur perferendis corporis.', 'cancelled', NULL, NULL, '2023-04-14 01:16:05', '2023-08-10 01:16:05'),
(147, 26, 2, 'Laboriosam impedit quod omnis.', 'cancelled', NULL, NULL, '2023-04-19 01:16:05', '2023-02-05 01:16:05'),
(148, 94, 2, 'Enim omnis molestias adipisci enim.', 'cancelled', NULL, NULL, '2023-11-19 01:16:05', '2023-02-16 01:16:05'),
(149, 45, 3, 'Consequatur perferendis esse quisquam dolorem molestiae vitae nemo.', 'pending', NULL, NULL, '2023-07-26 01:16:05', '2023-07-13 01:16:05'),
(150, 45, 4, 'Quia optio aut distinctio qui eos necessitatibus.', 'cancelled', NULL, NULL, '2023-05-13 01:16:05', '2023-10-10 01:16:05'),
(151, 16, 3, 'Qui dicta ut molestias et vero.', 'acknowledged', NULL, NULL, '2023-04-14 01:16:05', '2023-07-19 01:16:05'),
(152, 88, 4, 'Id blanditiis quis a velit atque et consequatur porro.', 'pending', NULL, NULL, '2023-06-19 01:16:05', '2023-09-11 01:16:05'),
(153, 86, 3, 'Id et modi quo et sunt quam eum et.', 'solved', NULL, NULL, '2023-09-02 01:16:05', '2023-06-11 01:16:05'),
(154, 97, 5, 'Eos eum quas qui temporibus omnis ea praesentium et.', 'solved', NULL, NULL, '2023-11-26 01:16:05', '2023-12-29 01:16:05'),
(155, 74, 3, 'Voluptas doloribus vero cupiditate vero et quos sed.', 'cancelled', NULL, NULL, '2023-07-31 01:16:05', '2023-02-04 01:16:05'),
(156, 35, 5, 'Repellat alias aspernatur sint ut.', 'solved', NULL, NULL, '2023-04-11 01:16:05', '2023-05-29 01:16:05'),
(157, 38, 3, 'Delectus facere dolor neque vitae autem.', 'acknowledged', NULL, NULL, '2023-02-03 01:16:05', '2023-05-21 01:16:05'),
(158, 39, 2, 'Soluta repellendus accusamus necessitatibus quasi.', 'pending', NULL, NULL, '2024-01-13 01:16:05', '2023-12-17 01:16:05'),
(159, 83, 1, 'Voluptatem magni amet molestias.', 'pending', NULL, NULL, '2023-10-13 01:16:05', '2023-10-27 01:16:05'),
(160, 91, 1, 'Non cum consequatur ut quo.', 'pending', NULL, NULL, '2023-01-29 01:16:05', '2023-02-10 01:16:05'),
(161, 33, 2, 'Ipsam voluptas odio maxime temporibus a ut.', 'acknowledged', NULL, NULL, '2023-07-29 01:16:05', '2023-03-25 01:16:05'),
(162, 4, 5, 'Eos in id molestiae mollitia dolores maiores.', 'cancelled', NULL, NULL, '2023-04-08 01:16:05', '2023-12-15 01:16:05'),
(163, 31, 2, 'Qui vel debitis delectus laudantium.', 'acknowledged', NULL, NULL, '2023-07-12 01:16:05', '2023-08-09 01:16:05'),
(164, 87, 1, 'Rem enim possimus exercitationem ut.', 'solved', NULL, NULL, '2023-11-08 01:16:05', '2023-11-11 01:16:05'),
(165, 41, 4, 'Ut molestias odio qui ut.', 'solved', NULL, NULL, '2023-07-22 01:16:05', '2024-01-21 01:16:05'),
(166, 74, 2, 'Sed consequuntur et ut cupiditate cupiditate non.', 'solved', NULL, NULL, '2023-08-14 01:16:05', '2023-04-16 01:16:05'),
(167, 57, 1, 'Voluptate dignissimos ratione et asperiores.', 'pending', NULL, NULL, '2023-09-24 01:16:05', '2023-11-02 01:16:05'),
(168, 76, 2, 'Provident molestias doloribus tempore eaque debitis.', 'pending', NULL, NULL, '2023-10-07 01:16:05', '2023-06-10 01:16:05'),
(169, 42, 4, 'Voluptatem saepe consequuntur quia quis consequatur officiis ea.', 'pending', NULL, NULL, '2023-02-12 01:16:05', '2024-01-08 01:16:05'),
(170, 60, 5, 'Officia omnis voluptatem laborum iusto repellat quia.', 'acknowledged', NULL, NULL, '2023-05-03 01:16:05', '2023-10-23 01:16:05'),
(171, 16, 2, 'Ipsam ad iure libero nemo et.', 'solved', NULL, NULL, '2023-09-20 01:16:05', '2023-12-18 01:16:05'),
(172, 5, 3, 'Quia sit qui dolor eos dolore voluptatem consequatur.', 'acknowledged', NULL, NULL, '2024-01-03 01:16:05', '2023-05-21 01:16:05'),
(173, 33, 1, 'Sunt ad neque veniam possimus pariatur.', 'pending', NULL, NULL, '2023-03-06 01:16:05', '2023-07-03 01:16:05'),
(174, 68, 2, 'Delectus sapiente quo est eum numquam ut ut.', 'acknowledged', NULL, NULL, '2023-04-27 01:16:05', '2023-11-18 01:16:05'),
(175, 85, 2, 'Mollitia eveniet iure et.', 'solved', NULL, NULL, '2023-10-23 01:16:05', '2023-09-13 01:16:05'),
(176, 3, 5, 'Tempore eveniet illo voluptates aut rerum aut.', 'acknowledged', NULL, NULL, '2023-08-14 01:16:05', '2023-03-26 01:16:05'),
(177, 65, 4, 'Quisquam voluptas doloribus doloremque doloremque.', 'cancelled', NULL, NULL, '2023-06-21 01:16:05', '2023-04-19 01:16:05'),
(178, 51, 5, 'A laboriosam sed vel dicta quam voluptatem sed.', 'solved', NULL, NULL, '2023-05-10 01:16:05', '2023-04-15 01:16:05'),
(179, 46, 1, 'Iusto quis non veniam ut officiis.', 'cancelled', NULL, NULL, '2023-07-27 01:16:05', '2023-11-08 01:16:05'),
(180, 91, 4, 'Praesentium omnis sunt corrupti odio ea iste.', 'acknowledged', NULL, NULL, '2023-03-08 01:16:05', '2023-06-18 01:16:05'),
(181, 65, 2, 'Nisi temporibus temporibus sed ipsa sunt voluptatem.', 'solved', NULL, NULL, '2023-12-13 01:16:05', '2023-11-15 01:16:05'),
(182, 28, 4, 'Deleniti quaerat incidunt quisquam.', 'pending', NULL, NULL, '2024-01-10 01:16:05', '2023-03-31 01:16:05'),
(183, 58, 3, 'Repellat nihil eos expedita dolores non molestiae quis.', 'cancelled', NULL, NULL, '2023-10-26 01:16:05', '2023-03-30 01:16:05'),
(184, 10, 5, 'Ut et minima accusamus deserunt.', 'acknowledged', NULL, NULL, '2023-08-25 01:16:05', '2023-12-18 01:16:05'),
(185, 4, 2, 'Ut dicta incidunt harum alias blanditiis.', 'pending', NULL, NULL, '2023-04-06 01:16:05', '2023-09-08 01:16:05'),
(186, 70, 1, 'Nesciunt non non velit magnam numquam non ex.', 'cancelled', NULL, NULL, '2023-10-31 01:16:05', '2023-02-06 01:16:05'),
(187, 40, 3, 'Officiis exercitationem magni id assumenda autem.', 'pending', NULL, NULL, '2023-03-20 01:16:05', '2023-12-10 01:16:05'),
(188, 91, 2, 'Illo dolorum occaecati necessitatibus aut et consequatur.', 'pending', NULL, NULL, '2023-12-03 01:16:05', '2023-11-04 01:16:05'),
(189, 58, 4, 'Voluptas voluptatem accusamus est eligendi et qui laborum.', 'solved', NULL, NULL, '2023-10-20 01:16:05', '2023-09-14 01:16:05'),
(190, 85, 4, 'Excepturi eligendi quas unde qui nihil.', 'solved', NULL, NULL, '2023-09-09 01:16:05', '2023-11-24 01:16:05'),
(191, 96, 2, 'Maiores numquam recusandae labore non eligendi praesentium quidem.', 'cancelled', NULL, NULL, '2023-11-03 01:16:05', '2023-02-05 01:16:05'),
(192, 56, 2, 'Animi sint iste nemo nostrum.', 'solved', NULL, NULL, '2023-05-21 01:16:05', '2023-08-26 01:16:05'),
(193, 12, 5, 'Sint alias ut autem perspiciatis facilis vel nihil eveniet.', 'cancelled', NULL, NULL, '2023-12-10 01:16:05', '2023-06-29 01:16:05'),
(194, 43, 3, 'Velit voluptatem quidem et ut.', 'pending', NULL, NULL, '2023-07-29 01:16:05', '2023-12-27 01:16:05'),
(195, 69, 4, 'Nulla dolore nisi laborum quae debitis laborum eum.', 'pending', NULL, NULL, '2023-05-08 01:16:05', '2023-03-10 01:16:05'),
(196, 18, 5, 'Voluptatum aliquid et deleniti iusto voluptas.', 'solved', NULL, NULL, '2023-11-04 01:16:05', '2023-09-26 01:16:05'),
(197, 99, 5, 'Architecto voluptatem quae ab corrupti explicabo veritatis amet aperiam.', 'pending', NULL, NULL, '2023-06-11 01:16:05', '2024-01-06 01:16:05'),
(198, 19, 1, 'Soluta et quibusdam unde ipsa doloremque sapiente.', 'solved', NULL, NULL, '2023-08-31 01:16:05', '2023-03-26 01:16:05'),
(199, 66, 1, 'Ducimus inventore sed nostrum voluptas sint.', 'cancelled', NULL, NULL, '2023-08-11 01:16:05', '2023-10-11 01:16:05'),
(200, 69, 5, 'Ad in illo modi eveniet amet ut.', 'pending', NULL, NULL, '2023-04-13 01:16:05', '2023-06-30 01:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isSuperAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `birthday`, `gender`, `email`, `phone_number`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`, `isSuperAdmin`) VALUES
(1, 'Calvin Kent', 'Pamandanan', 'superadmin', '2002-05-21', 'male', 'pamandanan.calvinkent@auf.edu.ph', NULL, '$2y$10$vULs9UpC44OIKWVoDbVCiOQ0o9TMHQvsZoWVZMDTZxF.h9DPA1fTa', 1, NULL, '2024-01-26 01:15:59', '2024-01-26 01:15:59', 1),
(2, 'Ron Russelle', 'Bangsil', 'admin', '2000-04-01', 'male', 'bangsil.ronrusselle@auf.edu.ph', NULL, '$2y$10$3kHVTgNUgFAlqdMJZiKz.OXX1pJCOlTugkTfg6BwIwCUawh4lanxi', 1, NULL, '2024-01-26 01:15:59', '2024-01-26 01:15:59', 0),
(3, 'Admin', '2', 'admin2', '1999-01-26', 'male', 'admin2@auf.edu.ph', NULL, '$2y$10$V5My6FNE346OF1ufGPonIuG1ywN4dIclJkZtbU7x5bCpbYJ8/KIea', 1, NULL, '2023-06-23 01:15:59', '2024-01-26 01:15:59', 0),
(4, 'Admin', '3', 'admin3', '1999-01-26', 'male', 'admin3@auf.edu.ph', NULL, '$2y$10$nYguTuCEHaHhbay7x90UxeMSna20Xvk1IHN7nZWO.WwTeRfAt9lcG', 1, NULL, '2023-12-23 01:15:59', '2024-01-26 01:15:59', 0),
(5, 'Admin', '4', 'admin4', '1999-01-26', 'male', 'admin4@auf.edu.ph', NULL, '$2y$10$Wct4CdosLzqOUyzxSYd83etV4Zq8.o0fvOYTZmpouSes.inPfw0NG', 1, NULL, '2023-04-30 01:15:59', '2024-01-26 01:15:59', 0),
(6, 'Admin', '5', 'admin5', '1999-01-26', 'male', 'admin5@auf.edu.ph', NULL, '$2y$10$9wAyEFSk3ijYTE9/S/0d.u/eNpsi2.jCgqQezkTWyacQeRwxM4vfK', 1, NULL, '2023-04-18 01:15:59', '2024-01-26 01:15:59', 0),
(7, 'Admin', '6', 'admin6', '1999-01-26', 'male', 'admin6@auf.edu.ph', NULL, '$2y$10$a9c0ZiJE39uvYRBVcsCDEOjzWgUNM6I0RS/U2aDik8qu7OSPwPd6G', 1, NULL, '2023-06-20 01:15:59', '2024-01-26 01:15:59', 0),
(8, 'Admin', '7', 'admin7', '1999-01-26', 'male', 'admin7@auf.edu.ph', NULL, '$2y$10$PWNe4NjeqS7eflNaPFFGj.UFBVveETakFKWHVYKCD62PY2VXEq3T.', 1, NULL, '2023-10-14 01:16:00', '2024-01-26 01:16:00', 0),
(9, 'Admin', '8', 'admin8', '1999-01-26', 'male', 'admin8@auf.edu.ph', NULL, '$2y$10$gc3S7AxqrVTE4cuyf955VORe1oRCt7MToDcM1BxjN4XtMtu2k4Ty6', 1, NULL, '2023-04-07 01:16:00', '2024-01-26 01:16:00', 0),
(10, 'Admin', '9', 'admin9', '1999-01-26', 'male', 'admin9@auf.edu.ph', NULL, '$2y$10$oNfC9h48Av2gLsD.KIEpxeaASkPct1jvNM7KH3YptdYZ8vDjPnHSa', 1, NULL, '2023-09-13 01:16:00', '2024-01-26 01:16:00', 0),
(11, 'Admin', '10', 'admin10', '1999-01-26', 'male', 'admin10@auf.edu.ph', NULL, '$2y$10$slCUShjLQHE25T5rE9SA/O/xTnGGFVzIsH7o/bBuJJRsOOMcOIspe', 1, NULL, '2023-05-21 01:16:00', '2024-01-26 01:16:00', 0),
(12, 'Jesel Aurvic', 'De Jesus', 'user1', '1999-01-26', 'male', 'dejesus.jeselaurvic@auf.edu.ph', '09420969929', '$2y$10$ycQThmIbGe44EkJgXPOuv./gP9hX3J7RIhj8BsegCrzDA/3ssS9bS', 0, NULL, '2023-11-11 01:16:00', '2024-01-26 01:16:00', 0),
(13, 'Tanya', 'Cummings', 'user2', '1999-01-26', 'male', 'user2@auf.edu.ph', '09896870609', '$2y$10$R4wo0AFci9jr/TB6VFILZuaz9iH1m/vBSWz3SjUT2T9ZL3CaV0Gz2', 0, NULL, '2023-06-13 01:16:00', '2024-01-26 01:16:00', 0),
(14, 'Columbus', 'Schneider', 'user3', '1999-01-26', 'male', 'user3@auf.edu.ph', '09486253590', '$2y$10$5eIpV2utME04Bu.11pxTK.DU4K7u2kdbLOCMlUO2kxsdbK3vslMgm', 0, NULL, '2023-09-21 01:16:00', '2024-01-26 01:16:00', 0),
(15, 'Dora', 'Hettinger', 'user4', '1999-01-26', 'male', 'user4@auf.edu.ph', '09334087479', '$2y$10$FUtunYv5SaQM6rWNi5PbSudQYqNm2WkyENWaSWSHW.cDS9sFKxyKy', 0, NULL, '2023-03-15 01:16:00', '2024-01-26 01:16:00', 0),
(16, 'Sanford', 'Pfeffer', 'user5', '1999-01-26', 'male', 'user5@auf.edu.ph', '09447976008', '$2y$10$daOCoCwg4bFylRrhtz9IT.T5/bDj076Gv3TjLBLqijCxQtpU2uIEK', 0, NULL, '2024-01-24 01:16:00', '2024-01-26 01:16:00', 0),
(17, 'Kenyatta', 'Hamill', 'user6', '1999-01-26', 'male', 'user6@auf.edu.ph', '09183465089', '$2y$10$ktw761JW42oj55xAfdKZiujQmUXauT6LAv4hqd/4kbO7prZwXtW2i', 0, NULL, '2023-10-27 01:16:00', '2024-01-26 01:16:00', 0),
(18, 'Johnpaul', 'Hane', 'user7', '1999-01-26', 'male', 'user7@auf.edu.ph', '09846717894', '$2y$10$mCsydJDlyfEENcQNLUV9jeeK1jXLjiGx8EGcMf3EAOjO8amEVZwn.', 0, NULL, '2023-03-28 01:16:00', '2024-01-26 01:16:00', 0),
(19, 'Kaylee', 'Lubowitz', 'user8', '1999-01-26', 'male', 'user8@auf.edu.ph', '09692583782', '$2y$10$o6LazkNe2msTqxsEeFdDpOA90STIVnuVYLv9bA6otgbbLsLUz0lR.', 0, NULL, '2024-01-24 01:16:00', '2024-01-26 01:16:00', 0),
(20, 'Wilton', 'Keebler', 'user9', '1999-01-26', 'male', 'user9@auf.edu.ph', '09329524808', '$2y$10$luAjXeSiOFYrG9gfoG05Ke91AZrB3MG7rmeiZMRWOQBe8jSuq5TTW', 0, NULL, '2023-07-26 01:16:00', '2024-01-26 01:16:00', 0),
(21, 'Samir', 'Stoltenberg', 'user10', '1999-01-26', 'male', 'user10@auf.edu.ph', '09200678757', '$2y$10$LInH85Ss7REoT/FUOKHkTe87LZqzyDk/c7zwOJZxSCJJ0ltSQknMO', 0, NULL, '2023-03-31 01:16:00', '2024-01-26 01:16:00', 0),
(22, 'Golda', 'Corkery', 'user11', '1999-01-26', 'male', 'user11@auf.edu.ph', '09392143399', '$2y$10$S2OSvJgI.kWwQhHNGRhj/elhrbB.n0HgOHFq8XHk4SpzZXbRw7CB.', 0, NULL, '2023-09-18 01:16:00', '2024-01-26 01:16:00', 0),
(23, 'Eudora', 'Cruickshank', 'user12', '1999-01-26', 'male', 'user12@auf.edu.ph', '09097675954', '$2y$10$Gcn/GxmebDcovKcgBxZBrehCHGCgzVm9k06f6EeAxMHS/OJwEZ6Nq', 0, NULL, '2023-03-10 01:16:00', '2024-01-26 01:16:00', 0),
(24, 'Sarai', 'Schamberger', 'user13', '1999-01-26', 'male', 'user13@auf.edu.ph', '09628394350', '$2y$10$FmzjzeBRl52yuZhgmRkXYOpe5kt9XghZ.v27hrp72PW.v9jFnPH16', 0, NULL, '2023-02-08 01:16:00', '2024-01-26 01:16:00', 0),
(25, 'Courtney', 'Rosenbaum', 'user14', '1999-01-26', 'male', 'user14@auf.edu.ph', '09457685670', '$2y$10$EC3gatSADZWjhqI01pAyF.aD1B3VsNo6MzMt8mfRyAlGBiMCcPmOS', 0, NULL, '2023-05-16 01:16:00', '2024-01-26 01:16:00', 0),
(26, 'Sally', 'Schaden', 'user15', '1999-01-26', 'male', 'user15@auf.edu.ph', '09415007595', '$2y$10$9/pm3qpDbDwYjadseUGxIOE4lKGsmRtnXRUiwRRbIGqcauoBKCrbG', 0, NULL, '2023-04-29 01:16:00', '2024-01-26 01:16:00', 0),
(27, 'Mark', 'Nader', 'user16', '1999-01-26', 'male', 'user16@auf.edu.ph', '09704751757', '$2y$10$VmUR85nJUSwYdK6Oa5G0heQniga7DTbqPYQeuiVNMIgRcFoQeGbWa', 0, NULL, '2023-02-09 01:16:01', '2024-01-26 01:16:01', 0),
(28, 'Queen', 'Lueilwitz', 'user17', '1999-01-26', 'male', 'user17@auf.edu.ph', '09286308171', '$2y$10$iSJYBATC0VEFkMhzdb4pB.304xupJuC8Q0lXGYymMGXv/WBGB6UFy', 0, NULL, '2023-12-23 01:16:01', '2024-01-26 01:16:01', 0),
(29, 'Wilford', 'Price', 'user18', '1999-01-26', 'male', 'user18@auf.edu.ph', '09389968192', '$2y$10$RJgyZi7unwQRdOLDjzMziOed/XLWpOerUGFE6Fq4FOHbXRiE6RHDK', 0, NULL, '2023-07-23 01:16:01', '2024-01-26 01:16:01', 0),
(30, 'Dina', 'Nitzsche', 'user19', '1999-01-26', 'male', 'user19@auf.edu.ph', '09007316629', '$2y$10$vgL8vWxy/uIaGJGLKCmGJeOWNXMrL9Y1zxKCkL2XIQqCQK3wY.4A2', 0, NULL, '2023-09-07 01:16:01', '2024-01-26 01:16:01', 0),
(31, 'Gussie', 'Wolf', 'user20', '1999-01-26', 'male', 'user20@auf.edu.ph', '09286416361', '$2y$10$TfPCc/UN4RHojj4krlTE6OfFUdPcfp86ZHSZUEnmO901tnQ51XIaO', 0, NULL, '2024-01-24 01:16:01', '2024-01-26 01:16:01', 0),
(32, 'Nakia', 'Carroll', 'user21', '1999-01-26', 'male', 'user21@auf.edu.ph', '09128467804', '$2y$10$7bLdyBzqL0.zuAewYJNj3.CcIGObNonL6hf3s7RyN7g/XI0adSaPm', 0, NULL, '2023-01-28 01:16:01', '2024-01-26 01:16:01', 0),
(33, 'Mariela', 'Trantow', 'user22', '1999-01-26', 'male', 'user22@auf.edu.ph', '09782176797', '$2y$10$qjY2DThA7PqdRs5uXgkDUOuuvUni19pPVYl4fyOgWKJ3VOmYHTZ7y', 0, NULL, '2023-06-27 01:16:01', '2024-01-26 01:16:01', 0),
(34, 'Jaren', 'Bechtelar', 'user23', '1999-01-26', 'male', 'user23@auf.edu.ph', '09613587483', '$2y$10$xfnmM0G6zm9uTZvaIBlNHOBhGkmtCFgNTG6pZpGxtCOfUWinP0BbC', 0, NULL, '2023-09-29 01:16:01', '2024-01-26 01:16:01', 0),
(35, 'Cordia', 'Thiel', 'user24', '1999-01-26', 'male', 'user24@auf.edu.ph', '09675153576', '$2y$10$WNsoms8KI4Xr8VyvaOZHTOrm9KV9P68bJA6xZoEUc4FnJ.CZcdZ/K', 0, NULL, '2023-10-17 01:16:01', '2024-01-26 01:16:01', 0),
(36, 'Morton', 'Graham', 'user25', '1999-01-26', 'male', 'user25@auf.edu.ph', '09699523462', '$2y$10$pk4wKaeI55sIgubQqP8W8eqj8fBRiSQoKE0y2taeof9SLAjb1CGqq', 0, NULL, '2023-09-30 01:16:01', '2024-01-26 01:16:01', 0),
(37, 'Kiel', 'Hirthe', 'user26', '1999-01-26', 'male', 'user26@auf.edu.ph', '09587059429', '$2y$10$afMv7R.2BDaAiuxQTcoexOR7HNpb8vHKIGmMotKR5iu8KbkicTDTi', 0, NULL, '2023-07-29 01:16:01', '2024-01-26 01:16:01', 0),
(38, 'Celine', 'Kshlerin', 'user27', '1999-01-26', 'male', 'user27@auf.edu.ph', '09431911085', '$2y$10$8QtJ7wz9hVHzrWJ5.HZwIeBIrvBsyyL4gbl/UVMyJTKljNSiAxCky', 0, NULL, '2023-05-22 01:16:01', '2024-01-26 01:16:01', 0),
(39, 'Hester', 'Treutel', 'user28', '1999-01-26', 'male', 'user28@auf.edu.ph', '09108212905', '$2y$10$Blc6.yKktMEBO.2rZXVPHOspecve.dE/W0AK/kUmzBdwclX/g2rDO', 0, NULL, '2023-12-26 01:16:01', '2024-01-26 01:16:01', 0),
(40, 'Stephany', 'Hudson', 'user29', '1999-01-26', 'male', 'user29@auf.edu.ph', '09158246826', '$2y$10$mcScT1FXw2BBHKkqdLQqXuU8.wBEE1FLe1YfrkAbU./C.j.yTP6kK', 0, NULL, '2023-06-13 01:16:01', '2024-01-26 01:16:01', 0),
(41, 'Caroline', 'Gibson', 'user30', '1999-01-26', 'male', 'user30@auf.edu.ph', '09684800190', '$2y$10$8px1KNg4e7.SgShDMPF9IucMkrBa5jZgcWCkjgo825IPGvy4s9TRC', 0, NULL, '2023-05-23 01:16:01', '2024-01-26 01:16:01', 0),
(42, 'Jodie', 'Collins', 'user31', '1999-01-26', 'male', 'user31@auf.edu.ph', '09996651106', '$2y$10$tot/UOTgBq/zxcDdbteJQeh0xvAte6SPDojZc3.0rKiaWk0q7QiY6', 0, NULL, '2023-06-29 01:16:01', '2024-01-26 01:16:01', 0),
(43, 'Rebecca', 'Gislason', 'user32', '1999-01-26', 'male', 'user32@auf.edu.ph', '09290746189', '$2y$10$zaTw6EP56tLqx.8X238r0ecgZN2hagYR7OiDC3EcBuZNwwZc1rhDm', 0, NULL, '2023-12-19 01:16:01', '2024-01-26 01:16:01', 0),
(44, 'Paula', 'Ebert', 'user33', '1999-01-26', 'male', 'user33@auf.edu.ph', '09516621785', '$2y$10$1HPgcE69yjFk5UD6fhnCaOqfs3LfaKrGko2maTMn33W77PvOUo/16', 0, NULL, '2023-04-28 01:16:01', '2024-01-26 01:16:01', 0),
(45, 'Nicholaus', 'Hauck', 'user34', '1999-01-26', 'male', 'user34@auf.edu.ph', '09144224324', '$2y$10$yIzogOoFXwflnvrjfssRdOMUyfjYndbp0xnrotk5zdMDQhRlhMhZC', 0, NULL, '2023-11-01 01:16:01', '2024-01-26 01:16:01', 0),
(46, 'Eudora', 'Kuvalis', 'user35', '1999-01-26', 'male', 'user35@auf.edu.ph', '09641183155', '$2y$10$HdXewHsA/JkgTmTYYDIwM.gWY0EjWf9/zN7pWC3EsoFU5Myi.9Hxi', 0, NULL, '2023-09-07 01:16:01', '2024-01-26 01:16:01', 0),
(47, 'Alexandrine', 'Hills', 'user36', '1999-01-26', 'male', 'user36@auf.edu.ph', '09426093696', '$2y$10$dMmikOaniaw1RBTvtY9mz.wRZ5POR7WJGXagcRHUEocMzigYcEX/W', 0, NULL, '2023-03-24 01:16:02', '2024-01-26 01:16:02', 0),
(48, 'Luz', 'Block', 'user37', '1999-01-26', 'male', 'user37@auf.edu.ph', '09844476108', '$2y$10$K1SUOJvfHsxbESc9lLmyauoJY8Te5mW1wQoKwRK5vcMpiE/rKFWs2', 0, NULL, '2023-04-24 01:16:02', '2024-01-26 01:16:02', 0),
(49, 'Grace', 'Cremin', 'user38', '1999-01-26', 'male', 'user38@auf.edu.ph', '09051523226', '$2y$10$XW3ancii0oSmUnCp62FI3OqyHXvIv82/l7N2KJqjndqQHanLWfHU6', 0, NULL, '2023-07-30 01:16:02', '2024-01-26 01:16:02', 0),
(50, 'Jewel', 'McGlynn', 'user39', '1999-01-26', 'male', 'user39@auf.edu.ph', '09197823753', '$2y$10$YsusPEt0nr./R8T6PRvaVuNNX26PEfsmVa4Vf/dgTD6RtBZ2fCyo.', 0, NULL, '2023-02-23 01:16:02', '2024-01-26 01:16:02', 0),
(51, 'Tobin', 'Herman', 'user40', '1999-01-26', 'male', 'user40@auf.edu.ph', '09794938078', '$2y$10$s07Ierkv0PnMmBrU00U9Hual/HpLJ5RMbnAA/lWEcKysL2IU2HBP2', 0, NULL, '2023-08-16 01:16:02', '2024-01-26 01:16:02', 0),
(52, 'Allison', 'Crooks', 'user41', '1999-01-26', 'male', 'user41@auf.edu.ph', '09806256462', '$2y$10$9A9smk1g6/29faeY5d4zHeLbO6Sx2U.EpDeyhjqOzy9mgP.nGCooC', 0, NULL, '2023-06-02 01:16:02', '2024-01-26 01:16:02', 0),
(53, 'Shaniya', 'Strosin', 'user42', '1999-01-26', 'male', 'user42@auf.edu.ph', '09159695512', '$2y$10$HNdayHssPfM5u09dzqokUee0lb5bsteS45hjq5HArjwfW/nbdF5..', 0, NULL, '2023-08-12 01:16:02', '2024-01-26 01:16:02', 0),
(54, 'Cordie', 'Osinski', 'user43', '1999-01-26', 'male', 'user43@auf.edu.ph', '09129612543', '$2y$10$dkdWdFrUOYhDyEx3c4DT5emKi2EDr0G0cVLCG.00iwYecG27UIBUa', 0, NULL, '2024-01-19 01:16:02', '2024-01-26 01:16:02', 0),
(55, 'Tremaine', 'Bernier', 'user44', '1999-01-26', 'male', 'user44@auf.edu.ph', '09938052510', '$2y$10$J4qEWv7kjUcgLY1gDkoJYOyyNn6EDR7qjzOjEHoqr2RuGB8biymgG', 0, NULL, '2023-04-29 01:16:02', '2024-01-26 01:16:02', 0),
(56, 'Brigitte', 'Sipes', 'user45', '1999-01-26', 'male', 'user45@auf.edu.ph', '09568106992', '$2y$10$RHBGCllfOm29DvU6RlLEpuPWoUN7YTRtkcrDHUK37ZREmfxny75FK', 0, NULL, '2023-10-31 01:16:02', '2024-01-26 01:16:02', 0),
(57, 'Julien', 'Koss', 'user46', '1999-01-26', 'male', 'user46@auf.edu.ph', '09778495055', '$2y$10$wK7Ps9sgIhLwM.5UX6Q4hOfEclOs7ONo.g7okQkb1DJ5lgjf63lM6', 0, NULL, '2023-06-20 01:16:02', '2024-01-26 01:16:02', 0),
(58, 'Carlee', 'McClure', 'user47', '1999-01-26', 'male', 'user47@auf.edu.ph', '09090853353', '$2y$10$EEpa4SRovgTjs5lMWDBsgur8UEDye3/ODdqB6k1RsZP.Y3Ch/HNgy', 0, NULL, '2023-11-25 01:16:02', '2024-01-26 01:16:02', 0),
(59, 'Nasir', 'Morissette', 'user48', '1999-01-26', 'male', 'user48@auf.edu.ph', '09777197069', '$2y$10$tA2q98CtrKcqCT1ykyCBs.mbhvODsh6EJ21094FZOEwtF2diimlqO', 0, NULL, '2023-11-15 01:16:02', '2024-01-26 01:16:02', 0),
(60, 'Dejuan', 'Erdman', 'user49', '1999-01-26', 'male', 'user49@auf.edu.ph', '09434449630', '$2y$10$TvNR/0YxTaCbQkDhOEakFeLxp1HVtf0FCFkxrosBpKN90xeqm79V.', 0, NULL, '2023-09-15 01:16:02', '2024-01-26 01:16:02', 0),
(61, 'Gracie', 'Turcotte', 'user50', '1999-01-26', 'male', 'user50@auf.edu.ph', '09039324295', '$2y$10$dPO8fTzhzgW9nOSvYboUdeKP16yEghSvN4uTWt2zy1sRArp./3Ls2', 0, NULL, '2024-01-10 01:16:02', '2024-01-26 01:16:02', 0),
(62, 'Tracy', 'Prohaska', 'user51', '1999-01-26', 'male', 'user51@auf.edu.ph', '09380970276', '$2y$10$eHnMGDHlkFFIUOx3.Sn2nelLD/8j4jGL4yPgL7cy2GgvK9U9fxeS6', 0, NULL, '2023-07-02 01:16:02', '2024-01-26 01:16:02', 0),
(63, 'Howard', 'Lubowitz', 'user52', '1999-01-26', 'male', 'user52@auf.edu.ph', '09752065921', '$2y$10$HGLHBGINtXTBkuMN6mBsve4w1.gH.VERcuKuGkg9H0fJOTo4YWt0S', 0, NULL, '2023-11-19 01:16:02', '2024-01-26 01:16:02', 0),
(64, 'Lennie', 'Abernathy', 'user53', '1999-01-26', 'male', 'user53@auf.edu.ph', '09012951676', '$2y$10$bwmWmPVdfz.NPRDOrD4A1.pQP9/IaXd.nghOY98eKH8DHfVY1iTBi', 0, NULL, '2024-01-22 01:16:02', '2024-01-26 01:16:02', 0),
(65, 'Jaydon', 'Hudson', 'user54', '1999-01-26', 'male', 'user54@auf.edu.ph', '09903300300', '$2y$10$dp.Q4pJdc9DCsU1EEA6FOeMmzE.nCqBLE.9PcmKI7HdEWDWHKnnKq', 0, NULL, '2023-09-30 01:16:02', '2024-01-26 01:16:02', 0),
(66, 'Leland', 'Rempel', 'user55', '1999-01-26', 'male', 'user55@auf.edu.ph', '09967194036', '$2y$10$V8iBRAN4buhBz2DDfmJT/enNfQDz0xGlHIWx1ro5Mcp0UQ6uU.zU.', 0, NULL, '2023-12-19 01:16:03', '2024-01-26 01:16:03', 0),
(67, 'Nyah', 'Kling', 'user56', '1999-01-26', 'male', 'user56@auf.edu.ph', '09351335134', '$2y$10$PC.fDcdk8KL3rDRosJEzX.1h49ZGaxHdv4GCxJA74hPeUjWpqpDVW', 0, NULL, '2023-05-28 01:16:03', '2024-01-26 01:16:03', 0),
(68, 'Amira', 'Konopelski', 'user57', '1999-01-26', 'male', 'user57@auf.edu.ph', '09346461743', '$2y$10$fpjNgrmx9wI0/K.ds4OMBu5KEJryyQ5wKeGoYSU1YjPlP/ZKCZBcW', 0, NULL, '2023-08-04 01:16:03', '2024-01-26 01:16:03', 0),
(69, 'Ahmad', 'Watsica', 'user58', '1999-01-26', 'male', 'user58@auf.edu.ph', '09170252094', '$2y$10$KWIS5rMMs3cRDuwGMJ7qOORqfcVhLuLMsm2TWq6ayq71C/ibi1nTi', 0, NULL, '2023-04-12 01:16:03', '2024-01-26 01:16:03', 0),
(70, 'Kailyn', 'Schmitt', 'user59', '1999-01-26', 'male', 'user59@auf.edu.ph', '09585135681', '$2y$10$TLtxaiTvYArGwtDldHsQIuYQ0aIabvqOscNxNTOVA9j3kxNYnWiHe', 0, NULL, '2023-08-26 01:16:03', '2024-01-26 01:16:03', 0),
(71, 'Steve', 'Schaden', 'user60', '1999-01-26', 'male', 'user60@auf.edu.ph', '09260870820', '$2y$10$V9GKkaj2obd4LxFcuK9vHOg/mMFTPfwmRTYA1TKrBtBja5LzGhGz2', 0, NULL, '2024-01-20 01:16:03', '2024-01-26 01:16:03', 0),
(72, 'Jordane', 'Kulas', 'user61', '1999-01-26', 'male', 'user61@auf.edu.ph', '09520749393', '$2y$10$Of1OwT8N9puF4g1lpp1OoO6cTB7jAuEyIn8510u3OVfGhc9N0VG5O', 0, NULL, '2023-02-06 01:16:03', '2024-01-26 01:16:03', 0),
(73, 'Nellie', 'Goyette', 'user62', '1999-01-26', 'male', 'user62@auf.edu.ph', '09214778121', '$2y$10$aGy.cD17cqsU.4kIhaMszucWWfjNW0YmGL8OO38BVfu4ugOKecSUK', 0, NULL, '2023-09-20 01:16:03', '2024-01-26 01:16:03', 0),
(74, 'Karen', 'Marvin', 'user63', '1999-01-26', 'male', 'user63@auf.edu.ph', '09312502125', '$2y$10$5qiyr70aVRlJmtsLhhIoJ./jdWwcYYKa3wSZ3SlGW709dgQ8TlBte', 0, NULL, '2023-04-10 01:16:03', '2024-01-26 01:16:03', 0),
(75, 'Rhiannon', 'Tromp', 'user64', '1999-01-26', 'male', 'user64@auf.edu.ph', '09256201444', '$2y$10$vhcmcLVBIENw1TV.7H5JRO9MC9b7lmNA.Kz/Snhlz1HrKbB4wkjPO', 0, NULL, '2023-11-21 01:16:03', '2024-01-26 01:16:03', 0),
(76, 'Polly', 'Ondricka', 'user65', '1999-01-26', 'male', 'user65@auf.edu.ph', '09522829291', '$2y$10$5DL4nsDdmijzkF2W1kj5ieU6aSWa3TJO3XW/iYu0MvU4eP07xjzhK', 0, NULL, '2023-05-12 01:16:03', '2024-01-26 01:16:03', 0),
(77, 'Sydney', 'Gutkowski', 'user66', '1999-01-26', 'male', 'user66@auf.edu.ph', '09755845708', '$2y$10$/08qScqHibkyCYmcVgYDcucoPEJw6tZ7Snt6DgFqiwye.NhH.smqW', 0, NULL, '2023-02-26 01:16:03', '2024-01-26 01:16:03', 0),
(78, 'Colt', 'Armstrong', 'user67', '1999-01-26', 'male', 'user67@auf.edu.ph', '09493901011', '$2y$10$zIgqMTf08svS9fd6ptegE.AoF9KR6mY1wGFfjdeNAPDhG.kVcGq8q', 0, NULL, '2023-04-12 01:16:03', '2024-01-26 01:16:03', 0),
(79, 'Russel', 'Schneider', 'user68', '1999-01-26', 'male', 'user68@auf.edu.ph', '09160483591', '$2y$10$xQdZZsOJtL4IkJIofUmL0.0aTKsWwhNjoK3olX8GbkOKf5v.whHWi', 0, NULL, '2023-11-15 01:16:03', '2024-01-26 01:16:03', 0),
(80, 'Ashlee', 'Kuphal', 'user69', '1999-01-26', 'male', 'user69@auf.edu.ph', '09580436290', '$2y$10$i8AIDuOoCHlO/tJRjLIE0.XMlTB9Q8nH297T3Sh22B9DVhUKx6DLS', 0, NULL, '2023-06-28 01:16:03', '2024-01-26 01:16:03', 0),
(81, 'Fiona', 'Renner', 'user70', '1999-01-26', 'male', 'user70@auf.edu.ph', '09522143844', '$2y$10$Q0tpfzMEE8/sa4HoPSPaTu9q/znU7QUuQniNri3S9MhoVimn5bq8e', 0, NULL, '2023-10-15 01:16:03', '2024-01-26 01:16:03', 0),
(82, 'Roy', 'Schultz', 'user71', '1999-01-26', 'male', 'user71@auf.edu.ph', '09152681569', '$2y$10$72weriJs1aTWlFViOo1PkudLEsAHobzVx2M/DMMSM.HWb1BxuBmRe', 0, NULL, '2023-09-22 01:16:03', '2024-01-26 01:16:03', 0),
(83, 'Marta', 'Schuppe', 'user72', '1999-01-26', 'male', 'user72@auf.edu.ph', '09370711709', '$2y$10$M64Iv7Cv.e8uRXan5s88Me2Ue05CXxH.zMOmC/Xah9KeAaD/vRHCm', 0, NULL, '2023-02-11 01:16:03', '2024-01-26 01:16:03', 0),
(84, 'Mia', 'Corwin', 'user73', '1999-01-26', 'male', 'user73@auf.edu.ph', '09473744060', '$2y$10$PFrldM6tMDkfR8nZwIElkelD/QeZTZoCZPEzqTBlsaibW1pub3JVG', 0, NULL, '2023-10-26 01:16:03', '2024-01-26 01:16:03', 0),
(85, 'Albertha', 'Jakubowski', 'user74', '1999-01-26', 'male', 'user74@auf.edu.ph', '09971897439', '$2y$10$3wBGYSLaJ7ewhwRAvKI35eQqS72GCnb5GcCyBR/rU0J2bJnF0NKSO', 0, NULL, '2023-06-20 01:16:03', '2024-01-26 01:16:03', 0),
(86, 'Jovany', 'Goyette', 'user75', '1999-01-26', 'male', 'user75@auf.edu.ph', '09430298454', '$2y$10$/Vo27ODWG6Jxak3gmzRZ7usnCBY.IRyg1KErjzRlPtCz71h6Z5vai', 0, NULL, '2023-07-27 01:16:04', '2024-01-26 01:16:04', 0),
(87, 'Lonie', 'Wilderman', 'user76', '1999-01-26', 'male', 'user76@auf.edu.ph', '09793632285', '$2y$10$cKJbp3Ulf4Fbr8qfUDq5yOjtYyqlUhcLmDU20CQa0nI8JGXXLv2XK', 0, NULL, '2023-11-06 01:16:04', '2024-01-26 01:16:04', 0),
(88, 'Fae', 'Keeling', 'user77', '1999-01-26', 'male', 'user77@auf.edu.ph', '09572356147', '$2y$10$csoG.05sYLCrPCtSCfAIYuaM2NgNUepFH8UwuLiKOFuhcnFal2uw6', 0, NULL, '2023-12-27 01:16:04', '2024-01-26 01:16:04', 0),
(89, 'Bert', 'Cummerata', 'user78', '1999-01-26', 'male', 'user78@auf.edu.ph', '09071536604', '$2y$10$mgJ8tHdBhYJ0I17KLfWRgu.5RruhbKAKrhswadg5GJ70D.cQCIxJK', 0, NULL, '2023-01-28 01:16:04', '2024-01-26 01:16:04', 0),
(90, 'Ulises', 'VonRueden', 'user79', '1999-01-26', 'male', 'user79@auf.edu.ph', '09309224333', '$2y$10$8R7iY1P95PWVE.DkBvPMeur.T1FuxiZ6xEKwEGMF1NRxl/p/9o6.S', 0, NULL, '2023-07-24 01:16:04', '2024-01-26 01:16:04', 0),
(91, 'Audra', 'Howell', 'user80', '1999-01-26', 'male', 'user80@auf.edu.ph', '09071875255', '$2y$10$WTKPGb67pqusvvLzNMjkwO4awdWUwZINdMnEVO7vpTA.bk4pukDsq', 0, NULL, '2023-08-14 01:16:04', '2024-01-26 01:16:04', 0),
(92, 'Romaine', 'Quigley', 'user81', '1999-01-26', 'male', 'user81@auf.edu.ph', '09023369964', '$2y$10$y64DDr7Fkk/1tkLQyi/RFOOzLGmM4SF5XH4MK9688inAb5LGCKmmy', 0, NULL, '2023-04-03 01:16:04', '2024-01-26 01:16:04', 0),
(93, 'Laura', 'Paucek', 'user82', '1999-01-26', 'male', 'user82@auf.edu.ph', '09856626627', '$2y$10$I4oZ6eH/1xtB.7PJxvVrRewjR497/8mDlq5z.cz3GhG34I3H6myDC', 0, NULL, '2024-01-20 01:16:04', '2024-01-26 01:16:04', 0),
(94, 'Luna', 'Toy', 'user83', '1999-01-26', 'male', 'user83@auf.edu.ph', '09186648829', '$2y$10$TWkFPv1D9zDzn/PQK4/EpOvGOIFV/QD9eWDZHVAonjanomot8zkpa', 0, NULL, '2023-01-30 01:16:04', '2024-01-26 01:16:04', 0),
(95, 'Octavia', 'Gerhold', 'user84', '1999-01-26', 'male', 'user84@auf.edu.ph', '09045819358', '$2y$10$LGKgky6oJx0L7rp6ncVS0upGDd4u5CxE9dttq.qNqwUHSbm/BaD/m', 0, NULL, '2023-11-15 01:16:04', '2024-01-26 01:16:04', 0),
(96, 'Eunice', 'Feeney', 'user85', '1999-01-26', 'male', 'user85@auf.edu.ph', '09169604016', '$2y$10$oH5UnEXP.QLhKebejc2cz.S20PkmgT2gRzbo.FLLPU0zJKTcsTmGi', 0, NULL, '2023-02-26 01:16:04', '2024-01-26 01:16:04', 0),
(97, 'Jaclyn', 'Schmitt', 'user86', '1999-01-26', 'male', 'user86@auf.edu.ph', '09355468218', '$2y$10$r46yxZuZcnXVftD1Npa5ne3giBGBX2C7UM7k.86pV2XiZVW4HXa7y', 0, NULL, '2023-06-17 01:16:04', '2024-01-26 01:16:04', 0),
(98, 'Salma', 'Funk', 'user87', '1999-01-26', 'male', 'user87@auf.edu.ph', '09583216887', '$2y$10$vNEQiMcHaPIDezP/dbD5VO7e9CHyOnMbUr2ifY54ZV3d5Wuf8IscO', 0, NULL, '2023-05-26 01:16:04', '2024-01-26 01:16:04', 0),
(99, 'Allene', 'Greenfelder', 'user88', '1999-01-26', 'male', 'user88@auf.edu.ph', '09084519955', '$2y$10$e/CZqB58bv/v4h6foBIRUeNFTgwHLkeyOHUPzPfVA4a9M2VTlCvpa', 0, NULL, '2024-01-21 01:16:04', '2024-01-26 01:16:04', 0),
(100, 'Micah', 'Wolff', 'user89', '1999-01-26', 'male', 'user89@auf.edu.ph', '09438307835', '$2y$10$daN4zhtIc9/crGv3Nhz81ePkBz7.i7IfOIO5nwGyGKr2DAanneotO', 0, NULL, '2023-07-01 01:16:04', '2024-01-26 01:16:04', 0),
(101, 'Anahi', 'Murazik', 'user90', '1999-01-26', 'male', 'user90@auf.edu.ph', '09199258354', '$2y$10$gSnlOx/8mpyNxxYorfJKOOLmisdZLKSM160sVFsj/4Cq.sA7K4VYe', 0, NULL, '2024-01-08 01:16:04', '2024-01-26 01:16:04', 0),
(102, 'Dominic', 'Williamson', 'user91', '1999-01-26', 'male', 'user91@auf.edu.ph', '09081743238', '$2y$10$.dSFyiYzpEZU3xwDWhauyuUnMkxlwrQclwJcFYSmHsqJYJ5eOWQWu', 0, NULL, '2024-01-06 01:16:04', '2024-01-26 01:16:04', 0),
(103, 'Heaven', 'Torp', 'user92', '1999-01-26', 'male', 'user92@auf.edu.ph', '09771196505', '$2y$10$Zj1y1ClroM5Tgf.fyLzyDOOgiuI6NF9tZSMUR9qhf9WJ92l6kfaYm', 0, NULL, '2023-06-01 01:16:04', '2024-01-26 01:16:04', 0),
(104, 'Bridget', 'O\'Hara', 'user93', '1999-01-26', 'male', 'user93@auf.edu.ph', '09338785537', '$2y$10$OrsLNubT1BAUwHnkuC2p2OHm20Ag26khJiyKgE4s8xiDitE3HLNzq', 0, NULL, '2023-07-16 01:16:04', '2024-01-26 01:16:04', 0),
(105, 'Kaylie', 'Kassulke', 'user94', '1999-01-26', 'male', 'user94@auf.edu.ph', '09284542293', '$2y$10$Bd9Jg.4ctKf6LHJ9cE1GFOjdlPh.AhkAHqCav6x4KGuIzHMH8KD36', 0, NULL, '2023-02-03 01:16:05', '2024-01-26 01:16:05', 0),
(106, 'Kaycee', 'Kuhlman', 'user95', '1999-01-26', 'male', 'user95@auf.edu.ph', '09399415473', '$2y$10$VUdSvY/axC.KUy77iewFWey51N6A5mbo.uu2RpVfd.kb/xF1FOLOy', 0, NULL, '2023-08-07 01:16:05', '2024-01-26 01:16:05', 0),
(107, 'Alisha', 'Nicolas', 'user96', '1999-01-26', 'male', 'user96@auf.edu.ph', '09896789523', '$2y$10$QaRDYvZe4gRRFn6hrbZCjuYEdo4YaqCKDokOSjn/AzASFbA5villO', 0, NULL, '2023-09-05 01:16:05', '2024-01-26 01:16:05', 0),
(108, 'Marcos', 'Gislason', 'user97', '1999-01-26', 'male', 'user97@auf.edu.ph', '09792023976', '$2y$10$Do4Kr/weo7gSM5JWyHTAXOnYFn/upHJ.WZ5ZWLzIKVUotOn2Jt/LC', 0, NULL, '2023-05-25 01:16:05', '2024-01-26 01:16:05', 0),
(109, 'Irving', 'Mertz', 'user98', '1999-01-26', 'male', 'user98@auf.edu.ph', '09900553737', '$2y$10$kdfjN26ezyF6usObLxTkE.cbLnbkATJUV0.8qEIO0AWIYu9KJ3KMm', 0, NULL, '2023-08-25 01:16:05', '2024-01-26 01:16:05', 0),
(110, 'Lorine', 'McDermott', 'user99', '1999-01-26', 'male', 'user99@auf.edu.ph', '09839370497', '$2y$10$SYjSk8CRYwUx8xNqOuezru6AdumuhSgmlW/bSWdKpUO1o1ESf6jIu', 0, NULL, '2023-04-02 01:16:05', '2024-01-26 01:16:05', 0),
(111, 'Eliseo', 'Labadie', 'user100', '1999-01-26', 'male', 'user100@auf.edu.ph', '09420350367', '$2y$10$/nzAT6w8y42Yh17RyTxHb.cqpl5aEMXyGQvqAT5QlZphKXgQ37JyG', 0, NULL, '2024-01-11 01:16:05', '2024-01-26 01:16:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_user_details`
--
ALTER TABLE `additional_user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `additional_user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `adoption_requests`
--
ALTER TABLE `adoption_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adoption_requests_user_id_foreign` (`user_id`),
  ADD KEY `adoption_requests_pet_id_foreign` (`pet_id`);

--
-- Indexes for table `adoption_status`
--
ALTER TABLE `adoption_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adoption_status_adoption_request_id_foreign` (`adoption_request_id`);

--
-- Indexes for table `case_types`
--
ALTER TABLE `case_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demotions`
--
ALTER TABLE `demotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demotions_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedbacks_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing_pets`
--
ALTER TABLE `missing_pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `missing_pets_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_monitoring`
--
ALTER TABLE `pet_monitoring`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_monitoring_pet_id_foreign` (`pet_id`),
  ADD KEY `pet_monitoring_monitoring_user_id_foreign` (`monitoring_user_id`);

--
-- Indexes for table `pet_surrenders`
--
ALTER TABLE `pet_surrenders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_surrenders_user_id_foreign` (`user_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_user_id_foreign` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`),
  ADD KEY `reports_case_type_id_foreign` (`case_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_user_details`
--
ALTER TABLE `additional_user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `adoption_requests`
--
ALTER TABLE `adoption_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adoption_status`
--
ALTER TABLE `adoption_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_types`
--
ALTER TABLE `case_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `demotions`
--
ALTER TABLE `demotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `missing_pets`
--
ALTER TABLE `missing_pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `pet_monitoring`
--
ALTER TABLE `pet_monitoring`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_surrenders`
--
ALTER TABLE `pet_surrenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_user_details`
--
ALTER TABLE `additional_user_details`
  ADD CONSTRAINT `additional_user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `adoption_requests`
--
ALTER TABLE `adoption_requests`
  ADD CONSTRAINT `adoption_requests_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `adoption_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `adoption_status`
--
ALTER TABLE `adoption_status`
  ADD CONSTRAINT `adoption_status_adoption_request_id_foreign` FOREIGN KEY (`adoption_request_id`) REFERENCES `adoption_requests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `demotions`
--
ALTER TABLE `demotions`
  ADD CONSTRAINT `demotions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `missing_pets`
--
ALTER TABLE `missing_pets`
  ADD CONSTRAINT `missing_pets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pet_monitoring`
--
ALTER TABLE `pet_monitoring`
  ADD CONSTRAINT `pet_monitoring_monitoring_user_id_foreign` FOREIGN KEY (`monitoring_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `pet_monitoring_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pet_surrenders`
--
ALTER TABLE `pet_surrenders`
  ADD CONSTRAINT `pet_surrenders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_case_type_id_foreign` FOREIGN KEY (`case_type_id`) REFERENCES `case_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
