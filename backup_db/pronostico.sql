-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 03:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pronostico`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `ci_cliente` bigint(20) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ci_cliente`, `nombres`, `apellidos`, `direccion`, `telefono`) VALUES
(9857154, 'Ismael', 'Vargas', 'Av. Valle', 4587859),
(5412547, 'rodrigo', 'loras', 'Av. Muciel', 4582158),
(5925154, 'Arturo', 'Torrez', 'Av Montesori', 79585444),
(2514889, 'Kiwi', 'Laddy', 'Av. Murillo SC', 79645888),
(9587487, 'Charly', 'Garcia', 'Av. Lula', 79655447),
(79844785, 'Karime', 'Miller', 'Av. America', 76665999);

-- --------------------------------------------------------

--
-- Table structure for table `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detalle`
--

INSERT INTO `detalle` (`id_venta`, `id_producto`, `cantidad`) VALUES
(12, 7, 10),
(12, 8, 20),
(12, 9, 30),
(12, 11, 40),
(12, 12, 50),
(12, 13, 10),
(12, 14, 20),
(12, 15, 30),
(12, 16, 40),
(12, 17, 25),
(12, 21, 20),
(12, 20, 27),
(12, 19, 33),
(12, 18, 10),
(13, 7, 28),
(13, 8, 28),
(13, 9, 28),
(13, 11, 28),
(13, 12, 28),
(13, 21, 15),
(13, 20, 15),
(13, 19, 15),
(13, 18, 15),
(13, 17, 13),
(13, 15, 13),
(13, 14, 13),
(13, 13, 13),
(14, 7, 10),
(14, 8, 10),
(14, 9, 10),
(14, 11, 10),
(14, 12, 10),
(14, 13, 10),
(14, 14, 10),
(14, 15, 10),
(14, 16, 10),
(14, 17, 10),
(14, 18, 30),
(14, 19, 30),
(14, 20, 30),
(14, 21, 30),
(15, 7, 8),
(15, 8, 8),
(15, 9, 8),
(15, 11, 8),
(15, 12, 8),
(15, 13, 8),
(15, 14, 8),
(15, 15, 8),
(15, 17, 8),
(15, 18, 8),
(15, 19, 8),
(15, 20, 5),
(15, 21, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `medida` decimal(10,0) NOT NULL,
  `fecha_pedido` text NOT NULL,
  `fecha_entrega` text NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `tipo` text NOT NULL,
  `medida` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` text NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `tipo`, `medida`, `stock`, `precio`) VALUES
(7, 'Tubo HDPE One', 'HDPE', 10, 944, '100'),
(8, 'Tubo HDPE Two', 'HDPE', 20, 934, '200'),
(9, 'Tubo HDPE Three', 'HDPE', 30, 924, '300'),
(11, 'Tubo HDPE Four', 'HDPE', 40, 914, '400'),
(12, 'Tubo HDPE Five', 'HDPE', 50, 904, '500'),
(13, 'Tubo SDR One', 'SDR', 10, 959, '100'),
(14, 'Tubo SDR Two', 'SDR', 20, 949, '200'),
(15, 'Tubo SDR Three', 'SDR', 30, 939, '300'),
(16, 'Tubo SDR Five', 'SDR', 50, 950, '500'),
(17, 'Tubo UF One', 'UF', 10, 944, '100'),
(18, 'Tubo UF Two', 'UF', 20, 937, '200'),
(19, 'Tubo UF Three', 'UF', 30, 914, '300'),
(20, 'Tubo UF Four', 'UF', 40, 923, '400'),
(21, 'Tubo UF Five', 'UF', 50, 930, '500');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ci_usuario` bigint(20) NOT NULL,
  `contrasena` text NOT NULL,
  `tipo` text NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `fechanacimiento` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ci_usuario`, `contrasena`, `tipo`, `nombres`, `apellidos`, `fechanacimiento`, `direccion`, `telefono`, `email`) VALUES
(5928001, '5928001', 'Administrador', 'Admin', 'Admin', '1995-01-01', 'Av. Blanco Galindo', 7965454, 'Admin@gmail.com'),
(5928002, '5928002', 'Vendedor', 'Vendedor', 'Vendedor', '1996-12-19', 'Av. Muyurina 451', 76458547, 'Vendedor@gmail.com'),
(5928003, '5928003', 'Productor', 'Productor', 'Productor', '1996-12-11', 'Av. Lolo 5830', 76485695, 'Productor@gmail.com'),
(5854545, 'secret123', 'Administrador', 'Enzo', 'Marzo', '1996-12-11', 'Av. Heroinas 452', 78854515, 'Enzo@gmail.com'),
(5914563, 'Easton ', 'Vendedor', 'Eastos', 'Muller', '1996-10-10', 'Av. Muplas', 76451587, 'Muller@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `ci_cliente` bigint(20) NOT NULL,
  `ci_usuario` bigint(20) NOT NULL,
  `fecha_venta` text NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id_venta`, `ci_cliente`, `ci_usuario`, `fecha_venta`) VALUES
(12, 9857154, 7593633, '15/03/2012'),
(13, 5412547, 7593633, '15/03/2012'),
(14, 5925154, 7593633, '15/08/2015'),
(15, 2514889, 7593633, '15/08/2015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
