-- Crear la base de datos
create database crud_app;

-- selecion de base de datos
use crud_app

-- Crear tabla de usuarios
create table usuarios(
    id int auto_increment prymary key   
    nombre varchar (100)not null,
    email varchar (100) not null,
    telefono varchar (15) not null,
)   