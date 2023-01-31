-- Active: 1675154731798@@127.0.0.1@3306@sinemkt_store

DROP DATABASE IF EXISTS sinemkt_store;
CREATE  DATABASE sinemkt_store;

--Query 🚀
USE sinemkt_store;

CREATE TABLE Admin(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    login VARCHAR(255),
    email VARCHAR(255),
    name VARCHAR(255),
    password VARCHAR(255),
    role VARCHAR(255)
) ;

INSERT INTO Admin (login, email, name, password, role) VALUES ('admin', 'admin', 'admin', 'admin', 'admin');


DROP TABLE IF EXISTS Products;

CREATE TABLE Products (  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    title VARCHAR(255),
    description VARCHAR(255),
    price  FLOAT,
    image VARCHAR(255)
) ;


-- SELECT * from products;