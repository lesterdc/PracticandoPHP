-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 01:27 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis_clientes`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `clientenombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `vehiculo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`no`, `id_cliente`, `clientenombre`,`vehiculo`,`estado`,`descripcion`) VALUES
(1, '1z', 'Juan Perez','Camaro', ' Dañado ','Ultimo cambio'),
(2, '1S', 'Martha Roldoz','Spartk', 'Casi reparado','Solo falta las llantas'),
(9, 'G-100', 'Maria Juana','Renaul Logan', ' Reparado','Cambio de aceite'),
(13, 'PP48', 'Marcos Pela', 'Pichirilo','Reparado','Cambio de llantas'),
(14, 'PP48', 'Ana Clemencia','Corsa', 'Dañado','cambio de motor y de llantas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
