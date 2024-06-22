CREATE DATABASE loja_nbpr;

USE loja_nbpr;

CREATE TABLE IF NOT EXISTS info_carros (
id INT AUTO_INCREMENT PRIMARY KEY,
imagem_carro VARCHAR(20),
modelo_carro VARCHAR(20),
ano VARCHAR(10),
cidade VARCHAR(50),
kilometragem VARCHAR(20),
motorizacao VARCHAR(20),
cambio VARCHAR(20),
carroceria VARCHAR(20),
combustivel VARCHAR(20),
cor VARCHAR(20),
descricao_opcionais VARCHAR(50),
informacao VARCHAR(50),
email VARCHAR(50),
telefone VARCHAR(50)

);