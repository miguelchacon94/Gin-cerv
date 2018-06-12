-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2018 a las 12:17:07
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gin_cerv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `id_cerveza` int(30) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `opinion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `tipo`, `lugar`, `opinion`) VALUES
(1, 'Mahou', 'Pilsen de Baja fermentacion', 'Madrid, España', 'Esta cerveza posee una graduacion (porcentaje de alcohol) del 5,5, un sabor suave y color claro. Posee gran popularidad por su gran calidad y precio.'),
(2, 'Alhambra', 'Lager', 'Andalucia', 'Esta cerveza ha sido elaborada con materias primas 100% naturales y es de entre todos los productos de la marca Alhambra el simbolo de pureza y elegancia. Alhambra es una lager de baja fermentacion de intenso aroma a malta y a lupulo que se caracteriza por un sabor suave al paladar. Tiene una graduacion de 5,4 de alcohol y se la reconoce por su envoltura en blanco y oro.'),
(3, 'Franziskaner', 'Cerveza de Trigo', 'Alemania', 'Esta cerveza posee una graduacion (porcentaje de alcohol) del 5, suave y agradecida en cuanto a graduacion alcohólica, lo que nos permitiro tomar dos si es preciso sin que se nos suba a la cabeza. Por sus caracteristicas especiales habremos de tener mucho cuidado si queremos saborearla bien, y es que en el caso de esta cerveza, como en todas las de trigo, es muy importante el modo de servirla. Tanto que incluso viene detallado en la contraetiqueta de la cerveza. Para ello habremos de servir 2/3 del liquido con el vaso inclinado para que la cerveza golpee el lateral del cristal, agitar la botella con movimientos rotatorios antes de seguir sirviendo el tercio restante, y entonces echar el resto con el vaso en vertical. Es muy importante tambien el vaso. El de la Franziskaner es un vaso alto, de cristal grueso y culo recio, estrecho en parte de abajo y más ancho por la parte de la boca. Tiene su sentido como ya os hemos mencionado en otra ocasión. Y es que cada cervecera busca aquella forma de vaso que permita obtener de su cerveza sus mejores características. En el caso de esta cerveza, permite obtener una espuma mucho más duradera y sobre todo, permite expandir mejor el intenso aroma que tiene.'),
(4, 'Estrella Galicia', 'Lager Especial', 'Galicia', 'Esta cerveza posee una graduacion (porcentaje de alcohol) del 5,5. El sabor y aroma de esta cerveza resalta el sabor de la cebada y de la malta tostada para evocar los sabores de los frutos secos.'),
(5, 'Cruzcampo', 'Pilsen', 'Sevilla', 'Esta cerveza posee una graduación (porcentaje de alcohol) del 4,8. La Cruzcampo ha generado odios, rencores y, al mismo tiempo, amores incontrolados que han cuestionado cuál es su calidad y que, popularmente, la han llegado a catalogar como “la peor cerveza de España”. Para contrarrestarlo, algunos andaluces han creado una coraza en torno a su cerveza que llega en ocasiones hasta el extremismo. Quizás esos anuncios de la cervecera sevillana que relacionaban la bebida con el sur sean los responsables de crear forofos demasiado fanáticos que sean capaces de matar por defenderla.'),
(6, 'Paulaner', 'Tio Ale alemana', 'Alemania', 'Esta cerveza posee una graduación (porcentaje de alcohol) del 5,5. Es una cerveza de estilo de trigo alemana, turbia de color dorado con una tonalidad blanquecina profunda que inunda todo el vaso. Presenta en su servicio una espuma blanca marfil de consistencia ligera pero persistente que sobrepasa los límites del borde del vaso manteniéndose firme hasta el final por la vivacidad manifiesta de esta cerveza. Su aroma a especia de clavo inunda toda la nariz, marcando su carácter. Su paso de boca resulta muy agradable por el excelente balance de dulce de pan, amargor herbáceo y volátiles procedentes de una fermentación alta generosa y la presencia de levadura, que aporta gran cantidad de vitaminas, minerales y proteínas que redondean su sabor. Al final es una cerveza muy seca que te refresca profundamente, dejando un recuerdo chispeante frutal a guindas duradero en boca.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licor`
--

CREATE TABLE `licor` (
  `id_licor` int(30) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` text COLLATE utf8_spanish_ci,
  `lugar` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `opinion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `licor`
--

INSERT INTO `licor` (`id_licor`, `nombre`, `tipo`, `clasificacion`, `lugar`, `opinion`) VALUES
(1, 'Sipsmith', 'Ginebra', NULL, 'Londres', 'Ginebra artesanal de gran calidad que huye de finuras, con un gran potencial.'),
(2, 'Absolut', 'Vodka Blanco', 'Vodka Blanco', 'Rusia', 'Absolut Vodka se hace exclusivamente a partir de ingredientes naturales y, a diferencia de lo que ocurre con muchos otros vodkas, no contiene azúcar añadido. Absolut es, de hecho, tan puro como puede ser el vodka. Aún así, la pureza tiene un sabor: rico, con cuerpo y complejo, pero suave y maduro con el carácter distintivo del grano de trigo, seguido de un toque a frutas secas.'),
(3, 'Jagermeister', 'Licor de hierbas', 'Licor de Hierbas', 'Alemania', 'El auge de Jägermeister ha coincidido con la crisis. Los jóvenes han puesto en duda lo políticamente correcto. Dejan de confiar en la gente que gobierna y en cómo les tratan las empresas. Hemos hecho las cosas de manera distinta. Somos transgresores y nos ven como un amigo en conciertos y fiestas”, apunta Vicens Bisbal, embajador de la marca en España. Estados Unidos es el principal mercado, seguido por Alemania, Reino Unido e Italia, pero España es el más reciente.Pero por el camino hubo baches.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro`
--

CREATE TABLE `otro` (
  `id_otro` int(30) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `subtipo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `opinion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre_usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre_usuario`, `password`, `nombre`, `email`, `tipo`) VALUES
('Miguelchacon', '$2y$12$/rNnXAiaJy.UBv9U9ZhJuOFsGZMfSjbjH/kavsIQe./4HfSHDxxg6', 'Miguel Chacon', 'miguel@prueba.com', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vino`
--

CREATE TABLE `vino` (
  `id_vino` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `year` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `opinion` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vino`
--

INSERT INTO `vino` (`id_vino`, `nombre`, `tipo`, `year`, `lugar`, `opinion`) VALUES
('1', 'Protos', 'Blanco', '2016', 'Rioja', 'Blanco, de color claro, con tonos oro,muy expresivo y afrutado en la nariz con taninos vivos en la boca y gran estructura. Como si te digo que unos vampiros leperos de buena familia lo recolectaron sólo en noches de apareamiento del cernícalo real mientras escuchan el Chiquetete. Acto seguido se fermenta en barricas de tungsteno construidas por glamurosos enanos carlistas con crestas de colores. Te lo vas a creer igual.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `id` int(11) NOT NULL,
  `ciudad` text COLLATE utf8_spanish_ci,
  `pais` text COLLATE utf8_spanish_ci,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id_cerveza`);

--
-- Indices de la tabla `licor`
--
ALTER TABLE `licor`
  ADD PRIMARY KEY (`id_licor`);

--
-- Indices de la tabla `otro`
--
ALTER TABLE `otro`
  ADD PRIMARY KEY (`id_otro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombre_usuario`);

--
-- Indices de la tabla `vino`
--
ALTER TABLE `vino`
  ADD PRIMARY KEY (`id_vino`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `id_cerveza` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `licor`
--
ALTER TABLE `licor`
  MODIFY `id_licor` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `otro`
--
ALTER TABLE `otro`
  MODIFY `id_otro` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
