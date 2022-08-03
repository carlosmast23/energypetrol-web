-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 04:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) NOT NULL,
  `titulo` varchar(256) DEFAULT NULL,
  `subtitulo` varchar(256) DEFAULT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  `link` varchar(512) DEFAULT NULL,
  `imagen` varchar(512) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `subtitulo`, `descripcion`, `link`, `imagen`, `orden`) VALUES
(10, 'Integradores de Tecnología', 'Innovando desde 1998', 'Energypetrol ha venido desarrollando soluciones integrales desde hace más de dos décadas, ', 'http://www.energypetrol.net', 'upload5d83b91a3f067.jpg', 4),
(12, 'EnergyPetrol', 'Trabajamos con miras al desarrollo', '', 'http://www.energypetrol.net/index.php/welcome/nosotros', 'upload5d83e7cba03b2.jpg', 6),
(13, 'Usted sabe qué quiere hacer', 'NOSOTROS SABEMOS CÓMO HACERLO', '', 'http://www.energypetrol.net/index.php/welcome/videos', 'upload5d83e89296514.jpg', 5),
(14, 'Teletrabajo', 'Energypetrol S.A.', '', '', 'upload5e84caad732b5.png', 2),
(21, 'Energypetrol S.A.', 'Trabajamos con miras al desarrollo', '', 'http://www.energypetrol.net/index.php/welcome/nosotros	', 'upload5e87bba25f3df.jpg', 3),
(22, 'Energypetrol S.A.', 'Adelante', 'La economía de nuestro país depende de nuestro trabajo y esfuerzo, </br>gracias a todos los héroes que siguen trabajando duro dentro de campo, </br>lejos de sus familias durante esta emergencia sanitaria.', 'http://www.energypetrol.net', 'upload5e87bdc4db494.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) NOT NULL,
  `categoria_producto_id` bigint(20) NOT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `imagen` varchar(512) DEFAULT NULL,
  `archivo_descarga` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `categoria_producto_id`, `nombre`, `descripcion`, `imagen`, `archivo_descarga`) VALUES
(16, 1, 'OKONITE', 'Cable de Potencia, Control e Instrumentación', 'upload5d4088fc9dca6.jpg', ''),
(17, 1, 'DETRONICS', 'Equipos y sistemas de detección de fuego y gas', 'fire1.png', ''),
(18, 1, 'HAWKE', 'Terminales para Cable ½” – 1 ½”', 'upload5d40899b2c6b8.jpg', ''),
(19, 1, 'FEDERAL SIGNAL', 'Señalizacion para áreas Clasificadas e Industriales', 'upload5d4089b6e7825.jpg', ''),
(20, 1, 'HOFFMAN', 'Tableros para aplicaciones eléctricas', 'upload5d4089e20dc65.jpg', ''),
(21, 8, 'ejemplo marca', 'nada', 'upload5d4822afe2c28.jpg', ''),
(22, 8, '3m', 'Empalmes', 'upload5d5417e78759f.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `clave` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria_producto`
--

INSERT INTO `categoria_producto` (`id`, `nombre`, `descripcion`, `orden`, `email`, `clave`) VALUES
(8, 'Mecánica', 'Línea Mecánica', 2, 'energypetrol@energypetrol.net', ''),
(9, 'Eléctrica', 'Línea Eléctrica', 3, 'edison_lopez@energypetrol.net', '');

-- --------------------------------------------------------

--
-- Table structure for table `nuestros_clientes`
--

CREATE TABLE `nuestros_clientes` (
  `id` bigint(20) NOT NULL,
  `imagen` varchar(128) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nuestros_clientes`
--

INSERT INTO `nuestros_clientes` (`id`, `imagen`, `orden`) VALUES
(10, 'upload5d41d8d356789.png', 1),
(11, 'upload5d41d8de028b1.png', 2),
(12, 'upload5d41e9e5c7500.png', 3),
(13, 'upload5d41e9feb7dc1.png', 4),
(14, 'upload5d41ea11f0b95.png', 5),
(15, 'upload5d41ea2a002d0.png', 6),
(16, 'upload5d41ea3ce7284.png', 7),
(17, 'upload5d41ea4dbbbb7.png', 8),
(18, 'upload5d41ea6305eec.png', 9),
(19, 'upload5d41ea7127a52.png', 10),
(20, 'upload5d41ea7f3e0b7.png', 11),
(21, 'upload5d41ea919aee2.png', 12),
(22, 'upload5d41eaa0c68b4.png', 13);

-- --------------------------------------------------------

--
-- Table structure for table `parametro`
--

CREATE TABLE `parametro` (
  `id` bigint(20) NOT NULL,
  `clave` varchar(200) DEFAULT NULL,
  `valor` varchar(2000) DEFAULT NULL,
  `idioma` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parametro`
--

INSERT INTO `parametro` (`id`, `clave`, `valor`, `idioma`) VALUES
(1, 'correo', 'energypetrol@energypetrol.net', 'e'),
(2, 'telefono', '2923064', 'e'),
(3, 'facebook', 'https://www.facebook.com/Energypetrol-145534425528789/timeline/', 'e'),
(4, 'twiter', 'https://twitter.com/energypetrolsa', 'e'),
(5, 'google', 'https://plus.google.com/+EnergypetrolSAQuito/posts?hl=en', 'e'),
(6, 'linkedin', 'https://www.linkedin.com/company/2102171?trk=vsrp_companies_cluster_name&trkInfo=VSRPsearchId%3A532734351441906917241%2CVSRPtargetId%3A2102171%2CVSRPcmpt%3Acompanies_cluster', 'e'),
(7, 'pie_pagina', 'ENERGYPETROL', 'e'),
(8, 'proyecto_anio', 'upload5e7a2c897c71b.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) NOT NULL,
  `contenido_html` varchar(2000) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `titulo_lateral1` varchar(100) DEFAULT NULL,
  `descripcion_lateral1` varchar(500) DEFAULT NULL,
  `titulo_lateral2` varchar(100) DEFAULT NULL,
  `descripcion_lateral2` varchar(500) DEFAULT NULL,
  `titulo_lateral3` varchar(100) DEFAULT NULL,
  `descripcion_lateral3` varchar(500) DEFAULT NULL,
  `imagen_principal` varchar(400) DEFAULT NULL,
  `titulo1` varchar(100) DEFAULT NULL,
  `descripcion1` varchar(2000) DEFAULT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producto_detalle`
--

CREATE TABLE `producto_detalle` (
  `id` bigint(20) NOT NULL,
  `producto_id` bigint(20) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto_detalle`
--

INSERT INTO `producto_detalle` (`id`, `producto_id`, `titulo`, `descripcion`, `imagen`, `link`) VALUES
(1, 1, 'producto 1', 'algo mas para ver como funciona', 'producto1.jpg', 'www.ejemplo2.com'),
(2, 1, 'producto otros', 'otra cosa mas', 'producto2.jpg', 'www.google.com'),
(3, 1, 'nuevo prod', 'asdkaskd', 'producto1.jpg', 'www.mas.com');

-- --------------------------------------------------------

--
-- Table structure for table `producto_venta`
--

CREATE TABLE `producto_venta` (
  `id` bigint(20) NOT NULL,
  `categoria_id` bigint(20) DEFAULT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `imagen` varchar(256) DEFAULT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto_venta`
--

INSERT INTO `producto_venta` (`id`, `categoria_id`, `nombre`, `descripcion`, `imagen`, `orden`) VALUES
(7, 22, 'Empalme', 'editado', 'upload5d54188d2e596.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE `proyecto` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `imagen` varchar(128) DEFAULT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `descripcion`, `imagen`, `orden`) VALUES
(12, 'ELÉCTRICO', 'Planta de inyección de agua - Montaje y conexiona de equipos eléctricos', 'upload5e7a43603aea0.jpeg', 3),
(13, 'MECÁNICO', 'Planta de inyección de agua - Montaje y Conexionado Mecánico', 'upload5e7a2b5f0c8a4.jpg', 1),
(14, 'FIRE AND GAS', 'Mantenimiento de los Sistemas de Alarma para Repsol – Bloque 16 NPF y SPF', 'upload5e7a43fd2643b.jpg', 4),
(19, 'INSTRUMENTACIÓN ', 'Planta de inyección de agua - Intrumentación & Control', 'upload5e7a2c2859757.jpg', 2),
(21, 'Cuartos Eléctricos', 'Cuartos Eléctricos Baker Hughes B43', 'upload5d41e832cba86.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `member_id`) VALUES
(7, 1, 1, 2),
(8, 2, 1, 2),
(9, 5, 1, 2),
(10, 4, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category`, `name`, `code`, `image`, `price`) VALUES
(1, 'Electronics', '3D Camera', '3DcAM01', 'product/camera.jpg', 1500.00),
(2, 'Electronics', 'External Hard Drive', 'USB02', 'product/external-hard-drive.jpg', 800.00),
(3, 'Clothing', 'Wrist Watch', 'wristWear03', 'product/watch.jpg', 300.00),
(4, 'SCI', 'Fire detector', 'firedet01', 'product/firedet01.jpg', 2000.00),
(5, 'Mechanic', 'Valve', 'valve01', 'product/valve01.jpg', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `nick` varchar(128) NOT NULL,
  `clave` varchar(128) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nick`, `clave`, `estado`) VALUES
('carlos', '1234', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) NOT NULL,
  `url` varchar(1024) DEFAULT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`, `titulo`, `orden`) VALUES
(18, 'https://player.vimeo.com/video/139358120', 'Unidades ACT contruidas por Energypetrol ', 6),
(19, 'https://player.vimeo.com/video/139349833', 'Separador Trif&aacute;sico Horizontal 24000 BPD', 2),
(20, 'https://player.vimeo.com/video/139344238', 'Instalaciones CDT Energypetrol', 3),
(22, 'https://player.vimeo.com/video/40022695', 'INTELLIGENT PIPELINES PROJECTS', 4),
(23, 'https://player.vimeo.com/video/40019257', 'PROYECTO OLEODUCTOS INTELIGENTES', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuestros_clientes`
--
ALTER TABLE `nuestros_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parametro`
--
ALTER TABLE `parametro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto_detalle`
--
ALTER TABLE `producto_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto_venta`
--
ALTER TABLE `producto_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categoria_producto`
--
ALTER TABLE `categoria_producto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nuestros_clientes`
--
ALTER TABLE `nuestros_clientes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parametro`
--
ALTER TABLE `parametro`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producto_venta`
--
ALTER TABLE `producto_venta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
