CREATE DATABASE formularioDB;

USE formularioDB;

CREATE TABLE candidatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    genero VARCHAR(10) NOT NULL,
    data_nascimento DATE NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    estado VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL
);