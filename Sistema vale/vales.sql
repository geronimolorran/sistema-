CREATE DATABASE vales2;
USE vales2;

CREATE TABLE vales (
    id_vale INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    descricao TEXT NOT NULL,
    data_vale DATE NOT NULL,
    valor VARCHAR(20) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);