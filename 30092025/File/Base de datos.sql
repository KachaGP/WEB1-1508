-- Crear la base de datos
create database crud_app;

-- Selecion de base de datos
use crud_app;

-- Crear tabla de usuarios
create table usuarios(
    id int auto_increment primary key,
    nombre varchar (100)not null,
    email varchar (100) not null,
    telefono varchar (15) not null
);

INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('1', 'Andres', 'Kachaflas90@gmail.com', '5584319742');
INSERT INTO `crud_app`.`usuarios` (`id`, `nombre`, `email`, `telefono`) VALUES ('2', 'aaron', 'aaron32@gmail.com', '5548950375');