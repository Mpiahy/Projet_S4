create database sakafonao;
use sakafonao;

 create table users 
 (
     id int primary key auto_increment,
     email varchar(50),
     password varchar(50),
     nom varchar(50),
     genre varchar(30),
     taille double,
     poids double
 )engine = innoDB;
 INSERT INTO users (id,email,password,nom,genre,taille,poids) VALUES (,'mana@gmail.com','1234','manasoa','masculin',150,70);
 INSERT INTO users (id,email,password,nom,genre,taille,poids) VALUES (,'mom@gmail.com','1444','mpiahy','masculin' , 150,72);
 INSERT INTO users (id,email,password,nom,genre,taille,poids) VALUES (,'aina@gmail.com','1122','aina','masculin',170,80);

drop database sakafonao; 

