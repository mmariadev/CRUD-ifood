CREATE DATABASE CRUD_Ifood;
USE CRUD_Ifood;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    email_cliente VARCHAR(100) NOT NULL,
    telefone_cliente VARCHAR(100) NOT NULL,
    endereco_cliente VARCHAR(100) NOT NULL
);

CREATE TABLE restaurante (
    id_restaurante INT AUTO_INCREMENT PRIMARY KEY,
    nome_restaurante VARCHAR(100) NOT NULL, 
    categoria_restaurante VARCHAR(100) NOT NULL, 
    telefone_restaurante VARCHAR(100) NOT NULL, 
    endereco_restaurante VARCHAR(100) NOT NULL
);

CREATE TABLE pedido (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    data_pedido DATE NOT NULL, 
    valor_pedido DECIMAL(10,2) NOT NULL,
    status_pedido ENUM('Em preparo','Finalizado','Recebido','Pendente'),
    id_cliente INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES cliente(id),
    id_restaurante INT NOT NULL,
    FOREIGN KEY (restaurante_id) REFERENCES restaurante(id)
);