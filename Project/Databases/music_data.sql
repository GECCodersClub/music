-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2017 at 10:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `songs` varchar(40) NOT NULL,
  `artist` varchar(40) DEFAULT NULL,
  `album` varchar(40) DEFAULT NULL,
  `genre` varchar(40) DEFAULT NULL,
  `bio` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`songs`, `artist`, `album`, `genre`, `bio`) VALUES
('Sheila Ki Jawani', 'Vishal Dadlani', 'Tees Maar Khan', 'Bollywood', 'Item Song'),
('I\'ll be there for you', 'Bon Jovi', 'Bon Jovi Best Hits', 'Rock', 'Love Song'),
('Humma Humma', 'AR Rehman', 'Ok Jannu!', 'Romantic', 'Love Song'),
('Gypsy', 'Dimitri Vegas', 'Gypsy', 'Rock', 'Rock'),
('Baby Doll', 'Kanika Kapoor', 'Ragini MMS 2', 'Bollywood', 'Item Song'),
('Shape Of You', 'Ed Sheeran', 'Divide', 'Pop', 'Famous');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
