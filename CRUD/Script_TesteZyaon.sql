CREATE DATABASE testetecnico;

USE testetecnico;

CREATE TABLE `usuarios` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nome` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`senha` varchar(255) NOT NULL,
`data_nasc` DATE NOT NULL,
PRIMARY KEY (`id`)
);

