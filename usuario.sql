create database phpinicial;
use phpinicial;

CREATE TABLE IF NOT EXISTS usuario (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario varchar(255) NOT NULL,
    clave varchar(255) NOT NULL,
    nombre varchar(255) NOT NULL,
    apellido varchar(255) NOT NULL,
    edad INT (10),
    email varchar(255) NOT NULL,
    sitio_web varchar(255)

)