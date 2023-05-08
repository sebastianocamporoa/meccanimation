CREATE DATABASE meccanimation;

use meccanimation;

CREATE TABLE usuarios (
  ID int(11) NOT NULL AUTO_INCREMENT,
  Cedula varchar(20) UNIQUE,
  Nombre varchar(50),
  Ciudad varchar(50),
  Puntos int(11),
  FechaPrimerIngreso date DEFAULT NULL,
  FechaUltimoIngreso date,
  PRIMARY KEY (ID)
);