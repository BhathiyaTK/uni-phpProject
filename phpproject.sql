-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2019 at 03:40 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_cars`
--

DROP TABLE IF EXISTS `new_cars`;
CREATE TABLE IF NOT EXISTS `new_cars` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_cars`
--

INSERT INTO `new_cars` (`id`, `name`, `price`, `transmission`, `fuel`, `mileage`, `location`, `image_path`) VALUES
(1, 'Range Rover Velar 2018', '24,500,000', 'Automatic', 'Petrol/Hybrid', '1,500', 'Panadura', 'images/newCars/card-img1.jpg'),
(2, 'Toyota Land Cruiser Prado 2019', '19,600,000', 'Automatic', 'Petrol', '16,000', 'Kalutara', 'images/newCars/card-img2.jpg'),
(3, 'Honda Civic Sport 2018', '7,250,000', 'Tiptronic', 'Petrol', '12,000', 'Moratuwa', 'images/newCars/card-img6.jpg'),
(4, 'Nissan Leaf X Grade 2019', '6,550,000', 'Automatic', 'Electricity', '6,500', 'Dehiwala', 'images/newCars/card-img7.jpg'),
(5, 'Toyota C-HR Hybrid 2018', '9,200,000', 'Automatic', 'Hybrid', '8,500', 'Kollupitiya', 'images/newCars/card-img5.jpg'),
(6, 'Nissan X-Trail 2018', '9,675,000 ', 'Automatic', 'Hybrid', '17,000', 'Pettah', 'images/newCars/card-img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `used_cars`
--

DROP TABLE IF EXISTS `used_cars`;
CREATE TABLE IF NOT EXISTS `used_cars` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_cars`
--

INSERT INTO `used_cars` (`id`, `name`, `price`, `transmission`, `fuel`, `mileage`, `location`, `image_path`) VALUES
(1, 'Honda Civic FD3', '3,275,000', 'Automatic', 'Petrol', '45,000', 'Kalutara', 'images/usedCars/card-img14.jpg'),
(2, 'Nissan Clipper', '2,400,000', 'Automatic', 'Petrol', '53,000', 'Kadawata', 'images/usedCars/card-img12.jpg'),
(3, 'Toyota Prius 2015', '4,650,000', 'Automatic', 'Hybrid', '80,000', 'Malabe', 'images/usedCars/card-img8.jpg'),
(4, 'Toyota Hiace 2016', '7,950,000', 'Manual', 'Diesel', '76,000', 'Ratmalana', 'images/usedCars/card-img9.jpg'),
(5, 'Yamaha FZ Y3', '139,900', 'Manual', 'Petrol', '30,000', 'Borella', 'images/usedCars/card-img10.jpg'),
(6, 'Subaru Forester 2015', '7,750,000', 'Automatic', 'Petrol', '38,000', 'Aluthgama', 'images/usedCars/card-img13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conf_password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `conf_password`) VALUES
(1, 'User', 'Default', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
