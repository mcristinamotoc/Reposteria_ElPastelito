-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2021 a las 20:14:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `REPOSTERIA_ONLINE`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ADMIN`
--

CREATE TABLE `ADMIN` (
  `ID_ADMIN` int(20) NOT NULL,
  `NOMBRE_COMPLETO` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ADMIN`
--

INSERT INTO `ADMIN` (`ID_ADMIN`, `NOMBRE_COMPLETO`, `EMAIL`, `PASSWORD`, `FECHA`) VALUES
(1, 'Maria Cristina Motoc', 'mcristinamotoc@gmail.com', '123', '2021-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CATEGORIAS`
--

CREATE TABLE `CATEGORIAS` (
  `ID_CATEGORIA` int(20) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CATEGORIAS`
--

INSERT INTO `CATEGORIAS` (`ID_CATEGORIA`, `NOMBRE`) VALUES
(1, 'Tartas Personalizadas Creativas'),
(2, 'Galletas Creativas'),
(3, 'Cupcakes'),
(4, 'Donuts');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTOS`
--

CREATE TABLE `PRODUCTOS` (
  `ID_PRODUCTO` int(20) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(500) NOT NULL,
  `PRECIO` varchar(20) NOT NULL,
  `URL_FOTO` varchar(500) NOT NULL,
  `CATEGORIA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PRODUCTOS`
--

INSERT INTO `PRODUCTOS` (`ID_PRODUCTO`, `NOMBRE`, `DESCRIPCION`, `PRECIO`, `URL_FOTO`, `CATEGORIA_ID`) VALUES
(1, 'Cupcakes Infantiles', 'Si deseas una cupcake original o de fondant para cualquier evento, no dudes en contactarnos.\r\nEl precio puede variar en función de las opciones escogidas. \r\nUna docena. ', '15.00', 'cupcakes-kids.jpg', 3),
(2, 'Cupcakes Personalizadas', 'Sorprende de la forma más original, dulce y divertidas.Si deseas una cupcake original o de fondant para cualquier evento,personalizadas según el tema de la fiesta.\r\nEl precio puede variar en función de la opción escogida. Una docena. ', '20.00', 'cupcake-berry.jpg', 3),
(3, 'Cupcakes Sin Azúcar', 'Riquísimos muffins de avena sin azúcar. Unas magdalenas esponjosas, más saludables, ¡y deliciosas! Una docena. ', '15.00', 'cupcakes_avena.jpg', 3),
(4, 'Cupcakes Saladas', 'Es el momento para darle el toque \"salado\" al mundo de los cupcakes y muffins. Cupcakes de champiñones con jamón, aguacate y salmón, vegetarianas, también opciones para celíacos. \r\nUna docena. ', '18.00', 'cupcakes_salada.jpg', 3),
(5, 'Galletas Creativas y Personalizadas', 'Celebra aniversarios y cumpleaños de pequeños y grandes. Galletas de cumpleaños personalizadas según el tema de la fiesta.\r\nEl precio puede variar en función de la opción escogida. \r\nUna docena. ', '18.00', 'cookie_simple.jpg', 2),
(6, 'Galletas Sin Azúcar', 'Galletas de ingredientes saludables y opciones veganas. \r\nEncuéntralas de espelta, de avena, integrales, con fibra, de chocolate, de avellanas. \r\nUna docena.', '12.00', 'cookie_NoSugar.jpg', 2),
(7, 'Galletas Decoradas', 'Ya tenemos listos los nuevos modelos de impresiones comestibles para galletas de boda. \r\nVan personalizados,como siempre están disponibles en papel de azúcar, oblea y chocotransfer.\r\nEl precio puede variar en función de la opción escogida. \r\nUna docena. ', '22.00', 'cookie_decoration.jpg', 2),
(8, 'Surtido Donuts', 'Buenos Ingredientes + Pasión + Conocimiento = Donuts Increíbles!\r\nUna docena de mini donuts. ', '14.00', 'pexels-donuts.jpg', 4),
(9, 'Vegan Donuts', 'Nuestras donuts veganos son igual de buenos que los normales pero sin productos de origen animal. Aptos por gente con intolerancias a huevo o lácteos.\r\nUna docena de mini donuts. ', '16.00', 'donuts_varios.jpg', 4),
(10, 'Tartas Personalizadas', 'Si todo sabor dulce es sinónimo de felicidad… ¿qué decir de las tartas personalizadas?Es cierto que las tartas fondant suelen protagonizar más bien eventos y ocasiones especiales, aunque a veces la mejor ocasión para regalar repostería artesana puede ser cualquier día.', '90.00', 'cake-theme.jpg', 1),
(11, 'Tarta Aniversario ', 'Nuestras tartas personalizadas son originales y deliciosas a la misma vez. Utilizamos ingredientes 100% naturales. \r\nEn nuestro amplio catálogo de pasteles decorados puedes encontrar tartas para toda clase de ocasiones. Pasteles para bodas, cumpleaños infantiles, bautizos, primera comunión, y empresas. ', '78.00', 'cake_valentine.jpg', 1),
(12, 'Donuts Cumpleaños', 'Pack 12 unidades Sabores Variados.El sabor, diseño y colores de los donuts pueden variar, de acuerdo con la disponibilidad en el momento de la entrega.\r\nLa foto es indicativa. No se entregarán necesariamente, los mismos colores o sabores', '18.00', 'Donuts-cumple-1.jpg', 4),
(13, 'Tarta Chocolate Love', 'Esta tarta personalizada consta de un bizcocho base de chocolate, con una ganache 70% de cacao. Se trata de un postre elegante capaz de saciar las expectativas de los invitados más exigentes.\r\nEsta tarta y su decoración son personalizables para cumplir con las necesidades de cada evento. \r\n¡La felicidad está en un trozo de tarta!', '60.00', 'cake_chocolate.jpg', 1),
(14, 'Tarta Cumpleaños', 'Un cumpleaños bien merece una tarta personalizada original y única. Se elaboran con fondant o crema de mantequilla con el diseño que más te guste y con el más delicioso bizcocho y relleno. Cualquier personalización es posible, de hacer el momento más dulce nos encargamos nosotros.\r\n\r\n', '75.00', 'cake_varios.jpg', 1),
(15, 'Tarta Sin Azúcar', 'Tartas de ingredientes saludables y opciones veganas. Encuéntralas de espelta, de avena, integrales, con fibra, de chocolate, de avellanas.\r\nExiste la versión saludable sin edulcorantes añadidos y consiguiendo el mismo sabor. ¿Cómo? Recurriendo a alimentos con azúcar natural como son los dátiles o canela', '50.00', 'cake_NoSugar.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `ID_USUARIO` int(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PASSWORD2` varchar(50) NOT NULL,
  `NOMBRE_COMPLETO` varchar(100) NOT NULL,
  `DIRECCION` varchar(200) NOT NULL,
  `CODIGO_POSTAL` int(10) NOT NULL,
  `CIUDAD` varchar(20) NOT NULL,
  `PROVINCIA` varchar(20) NOT NULL,
  `TELEFONO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`ID_USUARIO`, `EMAIL`, `PASSWORD`, `PASSWORD2`, `NOMBRE_COMPLETO`, `DIRECCION`, `CODIGO_POSTAL`, `CIUDAD`, `PROVINCIA`, `TELEFONO`) VALUES
(32, 'vio@gmail.com', '123', '123', 'Viorica', 'C/ SANTS, Nº 1,', 8014, 'Barcelona', 'Barcelona', 687677089),
(35, 'mg@gmail.com', '123', '123', 'Michelle', 'C/ SANTS, Nº 1,', 8014, 'Barcelona', 'Barcelona', 687677089);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indices de la tabla `CATEGORIAS`
--
ALTER TABLE `CATEGORIAS`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `CATEGORIA_ID` (`CATEGORIA_ID`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `ID_ADMIN` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `CATEGORIAS`
--
ALTER TABLE `CATEGORIAS`
  MODIFY `ID_CATEGORIA` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  MODIFY `ID_PRODUCTO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  MODIFY `ID_USUARIO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`CATEGORIA_ID`) REFERENCES `CATEGORIAS` (`ID_CATEGORIA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
