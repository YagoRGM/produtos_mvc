CREATE DATABASE IF NOT EXISTS produtos_mvc CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE produtos_mvc;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(50) NOT NULL
);
