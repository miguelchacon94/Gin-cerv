SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `usuario` (
  `nombre_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL )
   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombre_usuario`);

  INSERT INTO `usuario` (`nombre_usuario`, `password`, `nombre`, `email`, `tipo`) VALUES
('miguel', '1234', 'Miguel Chacon', 'miguel@prueba.com', 'administrador');

CREATE USER 'miguel' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON * . * TO 'miguel';
FLUSH PRIVILEGES;

CREATE USER 'generico_cerveza' IDENTIFIED BY '';
GRANT SELECT ON gin_cerv.cerveza TO 'generico_cerveza';

CREATE TABLE `cerveza` (
  `id_cerveza` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
 `lugar` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `opinion` varchar(1000) COLLATE utf8_spanish_ci 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id_cerveza`);
   INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `tipo`, `lugar`, `opinion`) VALUES
('1', 'Mahou', 'Rubia', 'Madrid, España', 'Ninguna');

CREATE TABLE `vino` (
  `id_vino` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `year` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
 `lugar` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `opinion` varchar(1000) COLLATE utf8_spanish_ci 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `vino`
  ADD PRIMARY KEY (`id_vino`);

   INSERT INTO `vino` (`id_vino`, `nombre`, `tipo`, `year`, `lugar`,`opinion`) VALUES
('1', 'Protos', 'Blanco', '2016','Rioja' , 'Sin comentarios');

 CREATE TABLE `licor` (
  `id_licor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clasifiocacion` varchar(30) COLLATE utf8_spanish_ci,
 `lugar` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `opinion` varchar(100) COLLATE utf8_spanish_ci ,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

 ALTER TABLE `licor`
  ADD PRIMARY KEY (`id_licor`);

   CREATE TABLE `otro` (
  `id_otro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `subtipo` varchar(30) COLLATE utf8_spanish_ci,
  `opinion` varchar(1000) COLLATE utf8_spanish_ci 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
    ALTER TABLE `otro`
  ADD PRIMARY KEY (`id_otro`);


 CREATE TABLE `comentario` (
  `id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_bebida` varchar(30) COLLATE utf8_spanish_ci,
  `tipo_bebida` varchar(30) COLLATE utf8_spanish_ci 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
    ALTER TABLE `otro`
  ADD PRIMARY KEY (`id_otro`);

