-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2024 a las 06:17:36
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
(1, 'Easysmx X15 Pc Controller - Enhanced Wireless Bluetooth', 'Producto IMPORTADO***\r\n\r\nContenido:\r\nEasySMX X15 PC Controller - Enhanced Wireless Bluetooth Controller with Hall Joysticks/Hall Triggers/RGB Lighting - No Stick Drift, No Dead Zone - Work for Windows', 1859.76, 10, 'img_bd/ControlEasysmx.webp', 'CONTROLES'),
(2, 'Easysmx 9110 Control Inalámbrico Joystick Para Pc Windows 7/8/10/11/12/android/ps3/TV Negro Mando de', 'Descripción\n\n1. Gran compatibilidad: el controlador de juego inalámbrico funciona con PC,Nintendo Switch y PS3, Android, Vista, Steam, Steam Deck. Atención: para los dispositivos Android, debe Andro', 594.00, 10, 'img_bd/ControlEasysmx9110.webp', 'CONTROLES'),
(3, 'Control Inalámbrico Xbox Series S/x/one Ghost Cipher Blanco', 'Descubre misterios con el Control inalámbrico Xbox: Edición especial Ghost Cipher, con un diseño transparente, un interior plateado, detalles metálicos y mucho más. Mira a través de la carcasa superio', 1797.00, 10, 'img_bd/ControlXboxGhost.webp', 'CONTROLES'),
(4, 'Control Para Xbox One Alambrico Serie Xs Solo Por Usb.', 'Acerca de este artículo\nCon licencia oficial para Xbox\nDos motores de vibración\nConector de auriculares estéreo de 3,5 mm\nCable USB extraíble de 3 metros (10 pies)\n\nPowerA es una marca líder rec', 798.00, 10, 'img_bd/ControlXbox.jpg', 'CONTROLES'),
(5, 'Control joystick ACCO Brands PowerA Enhanced Wired Controller for Xbox One black', 'PowerA es una marca líder reconocida por la venta de accesorios para videojuegos, productos accesibles y bien diseñados. Caracterizada por una fuerte pasión hacia los juegos, tiene la misión de brinda', 799.00, 10, 'img_bd/ControlAccoBlack.webp', 'CONTROLES'),
(6, 'Call of Duty: Black Ops 6 - PS5 - PlayStation 5 - Cross Gen Bundle Edition Edition', 'Desarrollado por Treyarch y Raven, Call of Duty: Black Ops 6 es un thriller de acción y espionaje ambientado a principios de la década de los 90, un período de transición e inestabilidad política, mar', 1439.00, 10, 'img_bd/VideojuegoCOD.jpg', 'VIDEOJUEGOS'),
(7, 'Super Mario Party™ Jamboree con 3 meses de Nintendo Switch Online.', 'Únete a la más reciente entrega de Mario Party, toda una fiesta de siete tableros y más de 110 minijuegos Desde una carrera en un carrusel hasta jugar minigolf con los controles por movimiento, esta f', 1.00, 10, 'img_bd/VideojuegoJamboree.jpg', 'VIDEOJUEGOS'),
(8, 'Silent Hill 2 para PlayStation 5 (PS5)', 'Adopta el papel de James Sunderland y adéntrate en el pueblo casi desértico de Silent Hill en este esperado remake del clásico de 2001. Atraído a este misterioso lugar por una carta de su esposa, fall', 1214.00, 10, 'img_bd/VideojuegoSilentHill2.jpg', 'VIDEOJUEGOS'),
(9, 'EA SPORTS FC 25 - PS5', 'EA SPORTS FC™ 25 te ofrece más formas de ganar para el club. Forma equipo con amistades en tus modos favoritos con el nuevo Rush 5 vs. 5 y lidera a tu club hacia la victoria gracias a FC IQ, que te of', 959.40, 10, 'img_bd/VideojuegoFC25.jpg', 'VIDEOJUEGOS'),
(10, 'Dragon Ball: Sparking! ZERO (PS5)', 'DRAGON BALL: Sparking! ZERO lleva a un nuevo nivel el legendario estilo de juego de la serie Budokai Tenkaichi. Aprende a dominar a diversos personajes jugables, cada uno con sus habilidades, transfor', 1698.99, 10, 'img_bd/VideojuegoDragonBall.jpg', 'VIDEOJUEGOS'),
(11, 'Alan Wake II Deluxe Edition - Playstation 5', 'Una serie de asesinatos rituales amenaza Bright Falls, una pequeña comunidad rodeada por la naturaleza en la costa noroeste del Pacífico. Saga Anderson, una agente del FBI veterana con fama de resolve', 1709.10, 10, 'img_bd/VideojuegoAlanWake2.jpg', 'VIDEOJUEGOS'),
(12, 'Horizon Zero Dawn Complete Edition PlayStation HITS (PS4)', 'Horizon Zero Dawn an exhilarating new action role playing game exclusively for the PlayStation 4 system, developed by the award winning Guerrilla Games, creators of PlayStation\'s venerated Killzone fr', 740.14, 10, 'img_bd/VideojuegoHorizonZero.jpg', 'VIDEOJUEGOS'),
(13, 'Super Mario Bros. Wonder para Nintendo Switch', 'Encuentra maravillas en la siguiente evolución de las aventuras de Mario El estilo de juego clásico de desplazamiento lateral de los juegos de Mario será toda una locura con la adición de la Flor Mara', 890.00, 10, 'img_bd/VideojuegoMarioWonder.jpg', 'VIDEOJUEGOS'),
(14, 'Mario Kart 8 Deluxe - Standard Edition - Nintendo Switch', 'Gracias a Nintendo Switch, los aficionados pueden disfrutar de la versión definitiva de Mario Kart 8 donde quieran y cuando quieran, incluso en partidas multijugador local para hasta ocho pilotos. Los', 910.00, 10, 'img_bd/VideojuegoMarioKart8.jpg', 'VIDEOJUEGOS'),
(15, 'The Legend of Zelda: Tears of the Kingdom - Nintendo Switch.', 'Una épica aventura a través de la superficie y los cielos de Hyrule te espera en el juego The Legend of Zelda™: Tears of the Kingdom para la consola Nintendo Switch™. Esta aventura será tuya para expe', 999.52, 10, 'img_bd/VideojuegoZelda.jpg', 'VIDEOJUEGOS'),
(16, 'Resident Evil 4 para PS5 - Resident Evil Edition.', 'Resident Evil 4 se une a Leon S. Kennedy seis años después de sus infernales experiencias en el desastre biológico de Raccoon City. Su determinación inigualable hizo que lo reclutaran como agente que ', 1189.00, 10, 'img_bd/VideojuegoRE4.jpg', 'VIDEOJUEGOS'),
(17, 'Super Smash Bros. Ultimate - Standard Edition - Nintendo Switch.', 'Luchadores y mundos de juego legendarios chocan en el enfrentamiento definitivo: ¡una nueva entrada en la serie Super Smash Bros. para el sistema Nintendo Switch ! Nuevos luchadores, como Inkling de l', 872.24, 10, 'img_bd/VideojuegoSmashU.jpg', 'VIDEOJUEGOS'),
(18, 'LEGO Star Wars: La Saga Skywalker - Nintendo Switch - Standard Edition.', 'La galaxia es tuya en LEGO Star Wars: The Skywalker Saga. En este nuevo juego para consolas, los jugadores podrán vivir momentos memorables y acción sin parar de las nueve películas de la saga de Skyw', 799.00, 10, 'img_bd/VideojuegoLegoSW.jpg', 'VIDEOJUEGOS'),
(19, 'Trinity Trigger - Standalone Edition - Nintendo Switch', 'Step into the world of Trinity Trigger, an all-new action role-playing game combining the look and feel of iconic RPGs of the ‘90s with a modern emphasis on fast-paced, customizable combat. As Cyan, a', 570.07, 10, 'img_bd/VideojuegosTrinityTrigger.jpg', 'VIDEOJUEGOS'),
(20, 'Control Inalámbrico Xbox– Pulse Red - Standard Edition', 'Experience the modernized design of the Xbox Wireless Controller in Pulse Red, featuring sculpted surfaces and refined geometry for enhanced comfort during gameplay with battery usage up to 40hours.St', 1151.00, 10, 'img_bd/ControlXboxRed.jpg', 'CONTROLES'),
(25, 'Xbox Consola Series S digital de 512 GB - Robot White - Nacional Edition', 'Experimenta la velocidad y el rendimiento de una consola totalmente digital de próxima generación a un precio accesible. Empieza con una biblioteca instantánea de más de 100 juegos de alta calidad, in', 6550.00, 10, 'img_bd/ConsolaXboxS.jpg', 'CONSOLAS'),
(26, 'Xbox Series X 1TB Consola - Versión Internacional', 'Este producto es de alta calidad y fácil de usar para todos.Este producto ofrece un gran entretenimiento para sus usuarios.', 11474.00, 10, 'img_bd/ConsolaXboxX.jpg', 'CONSOLAS'),
(27, 'Nintendo Consola Switch Neon 32GB Version 1.1 - Standard Edition Importado', 'Este producto es de gran calidad y este producto puede ser un buen entretenimiento para todos. También puede ser un gran regalo para sus seres queridos.', 5199.00, 10, 'img_bd/ConsolaSwitch.jpg', 'CONSOLAS'),
(28, 'PlayStation®5 (Modelo Slim) - Pack con 2 Juegos - Digital', 'Explora dos increíbles títulos de PlayStation con el paquete consola PlayStation 5: Ratchet & Clank: Rift Apart y Returnal. Experimente una carga ultrarrápida con un SSD de velocidad ultra alta, una i', 7622.27, 10, 'img_bd/ConsolaPS5.jpg', 'CONSOLAS'),
(29, 'Consola PlayStation 5 Pro Slim 2 TB\r\n', 'Superresolución espectral PlayStation (PSSR)\r\nObtén una claridad de imagen supernítida en tu TV 4K gracias a la resolución mejorada con IA para jugar en ultraalta definición con un nivel de detalle as', 19299.00, 5, 'img_bd/ConsolaPS5Pro.webp', 'CONSOLAS'),
(30, 'Call of Duty: Vanguard - Standard Edition - Xbox One\r\n', 'Este es un combate de la Segunda Guerra Mundial como nunca antes. Sea testigo de los orígenes de las Fuerzas Especiales mientras desempeña un papel fundamental y cambia la faz de la historia, formando', 549.00, 5, 'img_bd/VideojuegoCODVanguard.jpg', 'VIDEOJUEGOS'),
(31, 'Halo Infinite - Xbox Series X & Xbox One', 'Cuando toda esperanza se pierde y el destino de la humanidad cuelga en el equilibrio, el Jefe Maestro está listo para enfrentar al enemigo más despiadado que haya enfrentado. La legendaria serie Halo ', 649.00, 4, 'img_bd/VideojuegoHaloInfinite.jpg', 'VIDEOJUEGOS'),
(32, 'TF2 – Parent - Xbox One Standard Edition', 'Plataforma :Xbox One |  Edición:Standard Product Description Pilot and Titan unite as never before in Respawn Entertainment’s highly anticipated Titanfall 2. Experience a single player campaign that e', 275.00, 4, 'img_bd/VideojuegoTitanfall2.jpg', 'VIDEOJUEGOS'),
(33, 'Gears 5 – Xbox One', 'GEARS 5', 409.00, 2, 'img_bd/VideojuegoGears5.jpg', 'VIDEOJUEGOS'),
(34, 'Cuphead para Nintendo Switch', 'Cuphead es un juego de acción clásico estilo \"dispara y corre\" que se centra en combates contra el jefe. Inspirado en los dibujos animados de los años 30, los aspectos visual y sonoro están diseñados ', 664.00, 5, 'img_bd/VideojuegoCuphead.jpg', 'VIDEOJUEGOS'),
(35, 'Hollow Knight (Nintendo Switch)', 'Aventúrate en un hermoso mundo arruinado de insectos y héroes. Debajo de la ciudad de Dirtmouth se desvanece un antiguo reino olvidado. Muchos están dibujados debajo de la superficie buscando riquezas', 399.00, 4, 'img_bd/VideojuegoHollow.jpg', 'VIDEOJUEGOS'),
(36, 'Kirby and the Forgotten Land - Standard Edition - Nintendo Switch', 'Únete a Kirby en una travesía inolvidable a través de un misterioso mundo en esta encantadora aventura de plataformas en 3D. Toma control de la bola rosada conocida como Kirby y muévete con libertad e', 799.00, 5, 'img_bd/VideojuegoKirby.jpg', 'VIDEOJUEGOS'),
(37, 'Luigi\'s Mansion 3 - Standard Edition - Nintendo Switch', 'Las vacaciones de ensueño de Luigi se convierten en una pesadilla fantasmal! Después de recibir una invitación a un hotel de lujo, Luigi se embarca en unas vacaciones de ensueño en compañía de Mario y', 799.00, 5, 'img_bd/VideojuegoLuigi.jpg', 'VIDEOJUEGOS'),
(38, 'Resident Evil Triple Pack Nintendo Switch - Standard Edition - Nintendo Switch', '¡Juega tres de los juegos más llenos de acción del universo Resident Evil con Resident Evil 4, Resident Evil 5 y Resident Evil 6 disponibles juntos en el paquete triple Resident Evil en Nintendo Switc', 927.00, 5, 'img_bd/VideojuegoRETriple.jpg', 'VIDEOJUEGOS'),
(39, 'Metroid Prime Remastered - Nintendo Switch', 'Colócate detrás del visor de la cazarrecompensas intergaláctica Samus Aran en esta aclamada aventura con perspectiva de primera persona Ponte las botas de Samus Aran mientras navegas por los sinuosos ', 928.00, 4, 'img_bd/VideojuegoMetroidP.jpg', 'VIDEOJUEGOS'),
(40, 'Resident Evil Village Gold Nla', 'Resident Evil Village Gold Nla', 597.00, 4, 'img_bd/VideojuegoREVillage.jpg', 'VIDEOJUEGOS'),
(41, 'Terminator: Resistance Enhanced PS5', 'Terminator: Resistance Enhanced PS5', 609.00, 4, 'img_bd/VideojuegoTerminator.jpg', 'VIDEOJUEGOS'),
(42, 'Metal Gear Solid: Master Collection Vol. 1 - PlayStation 5', 'Metal Gear Solid: Master Collection Vol. 1 - PlayStation 5', 799.00, 2, 'img_bd/VideojuegoMetalGear1.jpg', 'VIDEOJUEGOS'),
(43, 'ASSASSIN\'S CREED MIRAGE - STANDARD EDITION, PLAYSTATION 5', 'ASSASSIN\'S CREED MIRAGE - STANDARD EDITION, PLAYSTATION 5', 549.00, 4, 'img_bd/VideojuegoACMirage.jpg', 'VIDEOJUEGOS'),
(44, 'Black Myth Wukong PS5', 'Black Myth Wukong PS5', 1699.00, 4, 'img_bd/VideojuegoWukong.jpg', 'VIDEOJUEGOS'),
(45, 'The Plucky Squire - PlayStation 5', 'The Plucky Squire - PlayStation 5', 899.00, 4, 'img_bd/VideojuegosPlucky.jpg', 'VIDEOJUEGOS'),
(46, 'OIVO - Cargador PS5, Cargador para Control PS5,Cargador Dualsense PS5 con Adaptador AC Rápido para P', 'OIVO - Cargador PS5, Cargador para Control PS5,Cargador Dualsense PS5 con Adaptador AC Rápido para Playstation 5,Estación de Carga PS5 con Base Antideslizante e Indicadores LED', 469.00, 4, 'img_bd/AccesorioCargadorPS5.jpg', 'ACCESORIOS'),
(47, 'Estación de Carga Nacon Bigben para Playstation PS5 y PS5 Slim', 'Estación de Carga Nacon Bigben para Playstation PS5 y PS5 Slim', 499.99, 4, 'img_bd/AccesorioEstacionCargaNacon.jpg', 'ACCESORIOS'),
(48, 'TicEaik 2 Piezas Mica Compatible PlayStation Portal, 8 Pulgadas, Mica Protector de Pantalla de Vidri', 'TicEaik 2 Piezas Mica Compatible PlayStation Portal, 8 Pulgadas, Mica Protector de Pantalla de Vidrio Templado, con Kit de Fácil Instalación, Transparente Ultra HD, Anti-Arañazos,Antihuellas, Sin Burb', 189.00, 10, 'img_bd/AccesorioMicaPS.jpg', 'ACCESORIOS'),
(49, 'Base Enfriadora y Recarga control Compatible Xbox Series S incluye 2 baterías recargables', 'Base Enfriadora y Recarga control Compatible Xbox Series S incluye 2 baterías recargables', 529.00, 5, 'img_bd/AccesorioBaseXboxS.jpg', 'ACCESORIOS'),
(50, 'Maidea - Tapones antipolvo para Xbox Series S, 7 piezas de silicona para polvo y 4 piezas de malla d', 'Maidea - Tapones antipolvo para Xbox Series S, 7 piezas de silicona para polvo y 4 piezas de malla de PVC, USB, HDMI, LAN, interfaz de driver de CD, cubierta antipolvo, enchufe a prueba de polvo', 189.00, 10, 'img_bd/AccesorioTaponesXboxS.jpg', 'ACCESORIOS'),
(51, 'JDGPOKOO Soporte de Pared con Ventilador para Xbox Serie X, Kit de Soporte de Pared 4 en 1 para Xbox', 'JDGPOKOO Soporte de Pared con Ventilador para Xbox Serie X, Kit de Soporte de Pared 4 en 1 para Xbox Serie X, Ventilador de 3 Velocidades de Bajo Ruido con Tira de Luz RGB e Interruptor Táctil, 3 USB', 798.00, 5, 'img_bd/AccesoriosSoporteXboxX.jpg', 'ACCESORIOS'),
(52, 'Dust Cover para Xbox Series X, LSHSXPX Kit de Protección Contra El Polvo para Xbox Series X, Accesor', 'Dust Cover para Xbox Series X, LSHSXPX Kit de Protección Contra El Polvo para Xbox Series X, Accesorios Xbox Series X con 8 Tapones de Silicona y 4 Mallas de PVC', 199.00, 10, 'img_bd/AccesorioProteccionXboxX.jpg', 'ACCESORIOS'),
(53, 'VOICEPTT Estuche Kit de Accesorios Nintendo Switch OLED 21 en 1, Funda de Viaje, 2 Protector de Pant', 'VOICEPTT Estuche Kit de Accesorios Nintendo Switch OLED 21 en 1, Funda de Viaje, 2 Protector de Pantalla Vidrio, Carcasa Transparente, Joy-con Pulgar Grips, 8 Tapas para Joystick, Cable USB, Caja de t', 299.00, 5, 'img_bd/AccesorioEstucheSwitch.jpg', 'ACCESORIOS'),
(54, '25 en 1 Kit de Funda para Nintendo Switch OLED, Accesorios para Nintendo Switch OLED, 6 fundas para ', '25 en 1 Kit de Funda para Nintendo Switch OLED, Accesorios para Nintendo Switch OLED, 6 fundas para agarre de pulgar, 6 fundas para Joy-Con, 1 caja para tarjeta de juego, un soporte, un cable de datos', 269.00, 4, 'img_bd/AccesorioFundaSwitch.jpg', 'ACCESORIOS'),
(55, 'Funda para Nintendo Switch OLED Portátil, Estuche de Transporte para Nintendo Switch, Protector Case', 'Funda para Nintendo Switch OLED Portátil, Estuche de Transporte para Nintendo Switch, Protector Case Nintendo Switch Accesorios Impermeable, Compartimentos para Cartuchos, Cables, Joy-Con Rojo', 299.00, 4, 'img_bd/AccesorioFundaRojaSwitch.jpg', 'ACCESORIOS'),
(56, 'MOYAC Protector Transparente para Nintendo (Versión OLED), Ligero, Cómodo de Sostener, Resistente al', 'MOYAC Protector Transparente para Nintendo (Versión OLED), Ligero, Cómodo de Sostener, Resistente al Desgaste, Amortiguador, Resistente a los Arañazos', 239.00, 5, 'img_bd/AccesorioProtectorSwitch.jpg', 'ACCESORIOS'),
(57, 'Control inalámbrico DualSense - Fortnite Edición Limitada', 'Control inalámbrico DualSense - Fortnite Edición Limitada', 1999.00, 4, 'img_bd/ControlPSFortnite.jpg', 'CONTROLES'),
(58, 'Control inalámbrico DualSense® – Chroma Indigo', 'Control inalámbrico DualSense® – Chroma Indigo', 4.00, 1799, 'img_bd/ControlPS5Indigo.jpg', 'CONTROLES'),
(59, 'Control inalámbrico DualSense® – Chroma Pearl', 'Control inalámbrico DualSense® – Chroma Pearl', 1799.00, 4, 'img_bd/ControlPS5Pearl.jpg', 'CONTROLES'),
(60, 'Nintendo Switch Pro Controller - The Legend of Zelda: Tears of the Kingdom Edition (Importado de Nin', 'Nintendo Switch Pro Controller - The Legend of Zelda: Tears of the Kingdom Edition (Importado de Nintendo Japón)', 1344.00, 4, 'img_bd/ControlSwitchZelda.jpg', 'CONTROLES'),
(61, 'Control Switch Inalambrico Compatible con Switch/OLED/Lite, FUNLAB Pro Controller Switch Inalámbrico', 'Control Switch Inalambrico Compatible con Switch/OLED/Lite, FUNLAB Pro Controller Switch Inalámbrico, Firefly Mando Switch Bluetooth con 7 LED Colores/Botones Traseros/NFC/Control de Movimiento- Negro', 899.00, 4, 'img_bd/ControlSwitchFUNLAB.jpg', 'CONTROLES'),
(62, 'Control Switch Inalambrico Compatible con Switch/OLED/Lite, FUNLAB Pro Controller Switch Inalámbrico', 'Control Switch Inalambrico Compatible con Switch/OLED/Lite, FUNLAB Pro Controller Switch Inalámbrico, Firefly Mando Switch Bluetooth con 7 LED Colores/Botones Traseros/Turbo/Control de Movimiento - Ma', 799.00, 4, 'img_bd/ControlSwitchFirefly.jpg', 'CONTROLES');

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
(7, 'Maximiliano', 'maxi@dominio.com', '$2y$10$B5gjVIEIZ0jWnCBL/UlNeOQ0z47DVmc51qzZycruvcZVNDsJkczXq', 'San Francisco', '987654321'),
(8, 'Max', 'max1@dominio.com', '$2y$10$nfRr2mcGaPqcUPQnSNe.Z.GPuzoLGnJboF5z4QJiAo/I8.ljzPAC.', NULL, '1234567890');

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
  MODIFY `ProductoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
