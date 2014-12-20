-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2014 at 11:31 AM
-- Server version: 1.0.15
-- PHP Version: 5.5.19-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `duniamotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `dm_brand`
--

CREATE TABLE IF NOT EXISTS `dm_brand` (
  `br_id` varchar(11) NOT NULL,
  `br_name` varchar(25) NOT NULL,
  `br_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`br_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm_brand`
--

INSERT INTO `dm_brand` (`br_id`, `br_name`, `br_desc`) VALUES
('APS', 'Alpinestar', 'Alpinestar'),
('DUC', 'DUCATI', 'The Ducati '),
('HND', 'HONDA', 'One Heart'),
('YMH', 'YAMAHA', 'Semakin Di Depan');

-- --------------------------------------------------------

--
-- Table structure for table `dm_category`
--

CREATE TABLE IF NOT EXISTS `dm_category` (
  `ct_id` varchar(25) NOT NULL,
  `ct_name` varchar(50) NOT NULL,
  `ct_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm_category`
--

INSERT INTO `dm_category` (`ct_id`, `ct_name`, `ct_desc`) VALUES
('ACS', 'Accesories', 'Accesories Dan Pernik'),
('CLO', 'Clothes', 'Clothes And Accesories');

-- --------------------------------------------------------

--
-- Table structure for table `dm_customer`
--

CREATE TABLE IF NOT EXISTS `dm_customer` (
  `cs_id` int(11) NOT NULL,
  `cs_name` varchar(35) NOT NULL,
  `cs_email` varchar(40) NOT NULL,
  `cs_password` varchar(50) NOT NULL,
  `cs_ktp` varchar(50) NOT NULL,
  `cs_addres` text NOT NULL,
  `cs_provinsi` varchar(35) NOT NULL,
  `cs_kota` varchar(45) NOT NULL,
  `cs_kecamatan` varchar(45) NOT NULL,
  `cs_kelurahan` varchar(45) NOT NULL,
  `cs_hp` varchar(20) NOT NULL,
  `cs_telp` varchar(24) DEFAULT NULL,
  `cs_desc` text,
  `cs_web` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm_customer`
--

INSERT INTO `dm_customer` (`cs_id`, `cs_name`, `cs_email`, `cs_password`, `cs_ktp`, `cs_addres`, `cs_provinsi`, `cs_kota`, `cs_kecamatan`, `cs_kelurahan`, `cs_hp`, `cs_telp`, `cs_desc`, `cs_web`) VALUES
(1, 'Marco Van Busten', 'marco@mail.com', '123456', '3200007657567456456455', 'Jl Latuharhari No 14', 'DKI JAKARTA', 'JAKARTA PUSAT', 'Menteng', 'Menteng', '08988423332', '08988423332', 'Nananna', 'jajarsoka5.net');

-- --------------------------------------------------------

--
-- Table structure for table `dm_departement`
--

CREATE TABLE IF NOT EXISTS `dm_departement` (
  `dp_id` int(11) NOT NULL,
  `dp_name` varchar(50) NOT NULL,
  UNIQUE KEY `dp_id` (`dp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_product`
--

CREATE TABLE IF NOT EXISTS `dm_product` (
  `pr_id` varchar(25) NOT NULL,
  `pr_brand` varchar(25) NOT NULL,
  `pr_sub_brand` varchar(25) NOT NULL,
  `pr_category` varchar(25) NOT NULL,
  `pr_name` varchar(50) NOT NULL,
  `pr_price` int(11) NOT NULL,
  `pr_stock` int(11) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm_product`
--

INSERT INTO `dm_product` (`pr_id`, `pr_brand`, `pr_sub_brand`, `pr_category`, `pr_name`, `pr_price`, `pr_stock`) VALUES
('P001', 'DUC', 'MONSTER', 'ACS', 'Handle Brake Monster', 1000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dm_sales`
--

CREATE TABLE IF NOT EXISTS `dm_sales` (
  `s_id` varchar(37) NOT NULL,
  `s_customer` varchar(55) NOT NULL,
  `s_input_date` datetime NOT NULL,
  `s_total_cost` int(11) NOT NULL,
  `s_total_payment` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_sales_det`
--

CREATE TABLE IF NOT EXISTS `dm_sales_det` (
  `sd_id` int(11) NOT NULL,
  `sd_sid` varchar(25) NOT NULL,
  `sd_prod` varchar(25) NOT NULL,
  `sd_qty` int(11) NOT NULL,
  `sd_total` int(11) NOT NULL,
  PRIMARY KEY (`sd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_sub_brand`
--

CREATE TABLE IF NOT EXISTS `dm_sub_brand` (
  `sb_id` int(11) NOT NULL AUTO_INCREMENT,
  `sb_code` varchar(25) NOT NULL,
  `sb_brand` varchar(25) NOT NULL,
  `sb_brand_name` varchar(25) NOT NULL,
  PRIMARY KEY (`sb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dm_sub_brand`
--

INSERT INTO `dm_sub_brand` (`sb_id`, `sb_code`, `sb_brand`, `sb_brand_name`) VALUES
(1, 'HND-CBR250', 'HND', 'CBR 250 '),
(2, 'MONSTER', 'DUC', 'Ducati Monster ');

-- --------------------------------------------------------

--
-- Table structure for table `dm_users`
--

CREATE TABLE IF NOT EXISTS `dm_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `userlevel` int(2) NOT NULL,
  `userlocation` varchar(25) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dm_users`
--

INSERT INTO `dm_users` (`userid`, `username`, `useremail`, `userpassword`, `userlevel`, `userlocation`) VALUES
(1, 'hansip', 'hansip@mail.com', 'd05ba879bccd0b902593d11228102491', 1, 'POS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
