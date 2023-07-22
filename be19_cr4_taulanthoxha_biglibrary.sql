-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2023 at 12:40 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be19_cr4_taulanthoxha_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be19_cr4_taulanthoxha_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `be19_cr4_taulanthoxha_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isbn` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author_last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `publisher_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `reserved` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `author_first_name`, `author_last_name`, `image`, `short_description`, `type`, `publisher_name`, `publisher_address`, `publish_date`, `reserved`) VALUES
(2, 'ISBN003', '1984', 'George', 'Orwell', '64bba476bcb9b.jpg', 'A dystopian novel exploring totalitarianism, surveillance, and the dangers of an oppressive government.', 'Book', 'Signet Classics', '456 Oak Avenue, City, Country', '1949-06-08', '0'),
(4, 'ISBN005', 'Pride and Prejudice', 'Jane', 'Austen', '64bba51e95f8d.jpg', 'A beloved romantic novel exploring themes of class, marriage, and social manners in Regency-era England.', 'Book', 'Penguin Classics', '555 Maple Avenue, City, Country', '1813-01-28', '0'),
(6, 'ISBN007', 'Harry Potter and the Philosopher', 'J.K.', 'Rowling', 'harry.jpg', 'The first book in the immensely popular fantasy series about a young wizard&#039;s adventures at Hogwarts School of Witchcraft and Wizardry.', 'Type', 'Bloomsbury Publishing', '456 Cedar Road, City, Country', '1997-06-26', '0'),
(7, 'ISBN008', 'The Catcher in the Rye', 'J.D.', 'Salinger', 'rye.jpg', 'A coming-of-age novel that has become a modern classic, following the rebellious teenager Holden Caulfield\'s journey of self-discovery in New York City.', 'Book', 'Little, Brown and Company', '789 Oak Street, City, Country', '1951-07-16', '0'),
(9, 'ISBN010', 'The Hobbit', 'J.R.R.', 'Tolkien', 'hobbit.jpg', 'The enchanting adventure of Bilbo Baggins as he joins a group of dwarves to reclaim their homeland from the dragon Smaug.', 'Book', 'George Allen & Unwin', '567 Pine Street, City, Country', '1937-09-21', '0'),
(11, 'ISBN001', 'To Kill a Mockingbird', 'Harper', 'Lee', 'mockingbird.jpg', 'A classic novel set in the American South during the 1930s, dealing with themes of racial injustice, moral growth, and compassion.', 'CD', 'HarperCollins', '123 Main Street, City, Country', '1960-07-11', '0'),
(12, 'ISBN005', 'The Great Gatsby', 'F. Scott', 'Fitzgerald', 'greatg.jpg', 'A classic novel set in the Roaring Twenties, examining the elusive American Dream and the excesses of the Jazz Age.', 'Book', 'Scribner', '87 Birch Lane, City, Country', '1925-04-10', '0'),
(13, 'ISBN009', 'Moby-Dick', 'Herman', 'Melville', 'moby.jpg', 'An epic tale of Captain Ahab\'s obsessive pursuit of the elusive white whale, exploring themes of revenge, fate, and human nature.', 'CD', 'Harper & Brothers', '234 Walnut Avenue, City, Country', '1851-10-18', ''),
(14, 'ISBN010', 'The Da Vinci Code', 'Dan', 'Brown', 'davinci.jpg', 'A thrilling mystery novel that follows symbologist Robert Langdon as he unravels hidden secrets and religious mysteries in search of the Holy Grail.', 'Book', 'Doubleday', '123 Elm Avenue, City, Country', '2003-03-18', ''),
(15, 'ISBN012', 'The Lord of the Rings', 'J.R.R.', 'Tolkien', 'lords.jpg', ' A high-fantasy epic that follows the quest to destroy the One Ring, set in the richly imagined world of Middle-earth.', 'Mardan Place', 'Houghton Mifflin', '789 Elm Street, City, Country', '1954-07-29', ''),
(16, 'ISBN013', 'Beloved', 'Toni', 'Morrison', 'beloved.jpg', 'A powerful novel exploring the legacy of slavery and its impact on the human spirit.', 'Type', 'Vintage Books', 'New York, USA', '1987-09-15', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
