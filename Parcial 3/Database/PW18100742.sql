CREATE DATABASE PW18100742;

USE PW18100742;

CREATE TABLE Inicio(
MUsuario varchar(30),
Passsword varchar(30),
PRIMARY KEY(MUsuario)
);

INSERT INTO Inicio(MUsuario,Passsword) VALUES
('JulioJimenez', '123');

CREATE TABLE Form(
Name varchar(30),
Usuario varchar(30),
Email varchar(30),
Passsword varchar(30),
FOREIGN KEY(Usuario) REFERENCES Inicio(MUsuario)
);

INSERT INTO Form(Name,Usuario,Email,Passsword) 
VALUES('Juan Julio Barron Jimenez','JulioJimenez','juanjulio2000@live.com.mx','123');
