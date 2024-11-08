-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2024 a las 04:50:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritodecompras`
--

CREATE TABLE `carritodecompras` (
  `CarritoID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesdepedido`
--

CREATE TABLE `detallesdepedido` (
  `DetalleID` int(11) NOT NULL,
  `PedidoID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `PrecioUnitario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialdecompras`
--

CREATE TABLE `historialdecompras` (
  `HistorialID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `PedidoID` int(11) DEFAULT NULL,
  `FechaCompra` datetime NOT NULL,
  `MontoTotal` decimal(10,2) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `PedidoID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `FechaPedido` datetime DEFAULT current_timestamp(),
  `Estado` varchar(50) DEFAULT NULL,
  `Total` decimal(10,2) DEFAULT NULL,
  `DireccionEnvio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ProductoID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `ImagenURL` varchar(200) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ProductoID`, `Nombre`, `Descripcion`, `Precio`, `Stock`, `ImagenURL`, `Categoria`) VALUES
(1, 'Easysmx X15 Pc Controller - Enhanced Wireless Bluetooth', 'Producto IMPORTADO***\r\n\r\nContenido:\r\nEasySMX X15 PC Controller - Enhanced Wireless Bluetooth Controller with Hall Joysticks/Hall Triggers/RGB Lighting - No Stick Drift, No Dead Zone - Work for Windows', 1859.76, 10, 'https://http2.mlstatic.com/D_NQ_NP_2X_815055-MLM78230808185_082024-F.webp', 'CONTROLES'),
(2, 'Easysmx 9110 Control Inalámbrico Joystick Para Pc Windows 7/8/10/11/12/android/ps3/TV Negro Mando de', 'Descripción\n\n1. Gran compatibilidad: el controlador de juego inalámbrico funciona con PC,Nintendo Switch y PS3, Android, Vista, Steam, Steam Deck. Atención: para los dispositivos Android, debe Andro', 594.00, 10, 'https://http2.mlstatic.com/D_NQ_NP_2X_651458-MLU78044276268_082024-F.webp', 'CONTROLES'),
(3, 'Control Inalámbrico Xbox Series S/x/one Ghost Cipher Blanco', 'Descubre misterios con el Control inalámbrico Xbox: Edición especial Ghost Cipher, con un diseño transparente, un interior plateado, detalles metálicos y mucho más. Mira a través de la carcasa superio', 1797.00, 10, 'https://http2.mlstatic.com/D_NQ_NP_2X_777382-MLA79575971452_102024-F.webp', 'CONTROLES'),
(4, 'Control Para Xbox One Alambrico Serie Xs Solo Por Usb.', 'Acerca de este artículo\r\nCon licencia oficial para Xbox\r\nDos motores de vibración\r\nConector de auriculares estéreo de 3,5 mm\r\nCable USB extraíble de 3 metros (10 pies)\r\n\r\nPowerA es una marca líder rec', 798.00, 10, 'https://http2.mlstatic.com/D_NQ_NP_2X_859120-MLM49360268909_032022-F.webp', 'CONTROLES'),
(5, 'Control joystick ACCO Brands PowerA Enhanced Wired Controller for Xbox One black', 'PowerA es una marca líder reconocida por la venta de accesorios para videojuegos, productos accesibles y bien diseñados. Caracterizada por una fuerte pasión hacia los juegos, tiene la misión de brinda', 799.00, 10, 'https://http2.mlstatic.com/D_NQ_NP_2X_999677-MLA47584033298_092021-F.webp', 'CONTROLES'),
(6, 'Call of Duty: Black Ops 6 - PS5 - PlayStation 5 - Cross Gen Bundle Edition Edition', 'Desarrollado por Treyarch y Raven, Call of Duty: Black Ops 6 es un thriller de acción y espionaje ambientado a principios de la década de los 90, un período de transición e inestabilidad política, mar', 1439.00, 10, 'https://m.media-amazon.com/images/I/81jpm4X7VlL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(7, 'Super Mario Party™ Jamboree con 3 meses de Nintendo Switch Online.', 'Únete a la más reciente entrega de Mario Party, toda una fiesta de siete tableros y más de 110 minijuegos Desde una carrera en un carrusel hasta jugar minigolf con los controles por movimiento, esta f', 1.00, 10, 'https://m.media-amazon.com/images/I/81MrRa8u2iL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(8, 'Silent Hill 2 para PlayStation 5 (PS5)', 'Adopta el papel de James Sunderland y adéntrate en el pueblo casi desértico de Silent Hill en este esperado remake del clásico de 2001. Atraído a este misterioso lugar por una carta de su esposa, fall', 1214.00, 10, 'https://m.media-amazon.com/images/I/71E3B-85r1L._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(9, 'EA SPORTS FC 25 - PS5', 'EA SPORTS FC™ 25 te ofrece más formas de ganar para el club. Forma equipo con amistades en tus modos favoritos con el nuevo Rush 5 vs. 5 y lidera a tu club hacia la victoria gracias a FC IQ, que te of', 959.40, 10, 'https://m.media-amazon.com/images/I/61NMvH0W-UL._AC_SL1000_.jpg', 'VIDEOJUEGOS'),
(10, 'Dragon Ball: Sparking! ZERO (PS5)', 'DRAGON BALL: Sparking! ZERO lleva a un nuevo nivel el legendario estilo de juego de la serie Budokai Tenkaichi. Aprende a dominar a diversos personajes jugables, cada uno con sus habilidades, transfor', 1698.99, 10, 'https://m.media-amazon.com/images/I/81QsM5cNn5L._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(11, 'Alan Wake II Deluxe Edition - Playstation 5', 'Una serie de asesinatos rituales amenaza Bright Falls, una pequeña comunidad rodeada por la naturaleza en la costa noroeste del Pacífico. Saga Anderson, una agente del FBI veterana con fama de resolve', 1709.10, 10, 'https://m.media-amazon.com/images/I/71tbW3letAL._AC_SL1280_.jpg', 'VIDEOJUEGOS'),
(12, 'Horizon Zero Dawn Complete Edition PlayStation HITS (PS4)', 'Horizon Zero Dawn an exhilarating new action role playing game exclusively for the PlayStation 4 system, developed by the award winning Guerrilla Games, creators of PlayStation\'s venerated Killzone fr', 740.14, 10, 'https://m.media-amazon.com/images/I/81DXz-lWkSL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(13, 'Super Mario Bros. Wonder para Nintendo Switch', 'Encuentra maravillas en la siguiente evolución de las aventuras de Mario El estilo de juego clásico de desplazamiento lateral de los juegos de Mario será toda una locura con la adición de la Flor Mara', 890.00, 10, 'https://m.media-amazon.com/images/I/71n+VqkywjL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(14, 'Mario Kart 8 Deluxe - Standard Edition - Nintendo Switch', 'Gracias a Nintendo Switch, los aficionados pueden disfrutar de la versión definitiva de Mario Kart 8 donde quieran y cuando quieran, incluso en partidas multijugador local para hasta ocho pilotos. Los', 910.00, 10, 'https://m.media-amazon.com/images/I/81iJG2js5-S._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(15, 'The Legend of Zelda: Tears of the Kingdom - Nintendo Switch.', 'Una épica aventura a través de la superficie y los cielos de Hyrule te espera en el juego The Legend of Zelda™: Tears of the Kingdom para la consola Nintendo Switch™. Esta aventura será tuya para expe', 999.52, 10, 'https://m.media-amazon.com/images/I/71glcphYY0L._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(16, 'Resident Evil 4 para PS5 - Resident Evil Edition.', 'Resident Evil 4 se une a Leon S. Kennedy seis años después de sus infernales experiencias en el desastre biológico de Raccoon City. Su determinación inigualable hizo que lo reclutaran como agente que ', 1189.00, 10, 'https://m.media-amazon.com/images/I/71Ky9iGTYpL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(17, 'Super Smash Bros. Ultimate - Standard Edition - Nintendo Switch.', 'Luchadores y mundos de juego legendarios chocan en el enfrentamiento definitivo: ¡una nueva entrada en la serie Super Smash Bros. para el sistema Nintendo Switch ! Nuevos luchadores, como Inkling de l', 872.24, 10, 'https://m.media-amazon.com/images/I/81qzH0RY3DS._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(18, 'LEGO Star Wars: La Saga Skywalker - Nintendo Switch - Standard Edition.', 'La galaxia es tuya en LEGO Star Wars: The Skywalker Saga. En este nuevo juego para consolas, los jugadores podrán vivir momentos memorables y acción sin parar de las nueve películas de la saga de Skyw', 799.00, 10, 'https://m.media-amazon.com/images/I/81i3zoecPzL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(19, 'Trinity Trigger - Standalone Edition - Nintendo Switch', 'Step into the world of Trinity Trigger, an all-new action role-playing game combining the look and feel of iconic RPGs of the ‘90s with a modern emphasis on fast-paced, customizable combat. As Cyan, a', 570.07, 10, 'https://m.media-amazon.com/images/I/81jozzhG9EL._AC_SL1500_.jpg', 'VIDEOJUEGOS'),
(20, 'Control Inalámbrico Xbox– Pulse Red - Standard Edition', 'Experience the modernized design of the Xbox Wireless Controller in Pulse Red, featuring sculpted surfaces and refined geometry for enhanced comfort during gameplay with battery usage up to 40hours.St', 1151.00, 10, 'https://m.media-amazon.com/images/I/61P9Y9Oo+lL._AC_SL1500_.jpg', 'CONTROLES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superusuarios`
--

CREATE TABLE `superusuarios` (
  `SuperUsuarioID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `TarjetaID` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `NumeroTarjeta` varchar(100) NOT NULL,
  `NombreTitular` varchar(100) NOT NULL,
  `FechaExpiracion` date NOT NULL,
  `CVV` varchar(4) NOT NULL,
  `TipoTarjeta` varchar(50) DEFAULT NULL,
  `FechaRegistro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioID`, `Nombre`, `Correo`, `Contrasena`, `Direccion`, `Telefono`) VALUES
(1, 'Maximiliano', 'max@dominio.com', '12345678', 'San Francisco', '9817517178'),
(5, 'Mario Segovia', 'mario@dominio.com', '$2y$10$ZvZKif3bm84g/N/OyTyUmu7bTf2xIlGOmuPTdjha06m7wZJ.mZlum', 'Campeche', '987654321'),
(7, 'Maximiliano', 'maxi@dominio.com', '$2y$10$B5gjVIEIZ0jWnCBL/UlNeOQ0z47DVmc51qzZycruvcZVNDsJkczXq', 'San Francisco', '987654321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritodecompras`
--
ALTER TABLE `carritodecompras`
  ADD PRIMARY KEY (`CarritoID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- Indices de la tabla `detallesdepedido`
--
ALTER TABLE `detallesdepedido`
  ADD PRIMARY KEY (`DetalleID`),
  ADD KEY `PedidoID` (`PedidoID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- Indices de la tabla `historialdecompras`
--
ALTER TABLE `historialdecompras`
  ADD PRIMARY KEY (`HistorialID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `PedidoID` (`PedidoID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`PedidoID`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ProductoID`);

--
-- Indices de la tabla `superusuarios`
--
ALTER TABLE `superusuarios`
  ADD PRIMARY KEY (`SuperUsuarioID`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`TarjetaID`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritodecompras`
--
ALTER TABLE `carritodecompras`
  MODIFY `CarritoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallesdepedido`
--
ALTER TABLE `detallesdepedido`
  MODIFY `DetalleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historialdecompras`
--
ALTER TABLE `historialdecompras`
  MODIFY `HistorialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `PedidoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `superusuarios`
--
ALTER TABLE `superusuarios`
  MODIFY `SuperUsuarioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `TarjetaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carritodecompras`
--
ALTER TABLE `carritodecompras`
  ADD CONSTRAINT `carritodecompras_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`UsuarioID`),
  ADD CONSTRAINT `carritodecompras_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ProductoID`);

--
-- Filtros para la tabla `detallesdepedido`
--
ALTER TABLE `detallesdepedido`
  ADD CONSTRAINT `detallesdepedido_ibfk_1` FOREIGN KEY (`PedidoID`) REFERENCES `pedidos` (`PedidoID`),
  ADD CONSTRAINT `detallesdepedido_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ProductoID`);

--
-- Filtros para la tabla `historialdecompras`
--
ALTER TABLE `historialdecompras`
  ADD CONSTRAINT `historialdecompras_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`UsuarioID`) ON DELETE CASCADE,
  ADD CONSTRAINT `historialdecompras_ibfk_2` FOREIGN KEY (`PedidoID`) REFERENCES `pedidos` (`PedidoID`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`UsuarioID`);

--
-- Filtros para la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`UsuarioID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
