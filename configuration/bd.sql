create database cantina;
use cantina;

create table produto(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao VARCHAR(300) NOT NULL,
    preco TEXT NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    informacoes_nutricionais TEXT NOT NULL
);

create table cliente(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone INT(11) NOT NULL,
    numero_matricula INT(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

create table admin(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone INT(11) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

create table pedido(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id),
    FOREIGN KEY (id_produto) REFERENCES produto(id)
);