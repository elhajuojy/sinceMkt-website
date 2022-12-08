-- Active: 1670403516212@@localhost@3306@sinemkt_store

--Query 🚀
CREATE TABLE Admin(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    login TEXT,
    email TEXT,
    name TEXT,
    password VARCHAR,
    role TEXT
) ;



CREATE TABLE Product(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    title TEXT,
    description TEXT,
    price FLOAT,
    image TEXT,
) ;

SELECT * from products;