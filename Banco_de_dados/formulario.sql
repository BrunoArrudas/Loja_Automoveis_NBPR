CREATE DATABASE loja_nbpr

USE loja_nbpr

CREATE TABLE IF NOT EXISTS tbl_formulario (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50),
email VARCHAR(50),
celular VARCHAR(50),
cidade VARCHAR(30),
estado VARCHAR(2),

);