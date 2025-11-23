CREATE DATABASE biblioteca_jogos;

USE biblioteca_jogos;

CREATE TABLE jogos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    plataforma VARCHAR(100) NOT NULL,
    ano INT NOT NULL,
    descricao TEXT
);
