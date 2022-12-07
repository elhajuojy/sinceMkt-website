-- Active: 1670403516212@@localhost@3306@sinemkt_store
CREATE TABLE Admin(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    login TEXT,
    email TEXT,
    name TEXT,
    password VARCHAR
) ;