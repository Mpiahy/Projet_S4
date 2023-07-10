create database sakafonao;
use sakafonao;

 create table users 
 (
     id int primary key auto_increment,
     email varchar(50),
     password varchar(50),
     nom varchar(50),
     genre varchar(30),
     taille int,
     poids int
 )engine = innoDB;
 INSERT INTO users (id,email,password,nom,genre,taille,poids) VALUES (,'mana@gmail.com','1234','manasoa','masculin',150,70);
 INSERT INTO users (id,email,password,nom,genre,taille,poids) VALUES (,'mom@gmail.com','1444','mpiahy','masculin' , 150,72);
 INSERT INTO users (id,email,password,nom,genre,taille,poids) VALUES (,'aina@gmail.com','1122','aina','masculin',170,80);

drop database sakafonao; 

create table login(
    id int auto_increment primary key,
    email varchar(50),
    password varchar(50)
);

INSERT INTO login(id,email,password) VALUES (,'mana@gmail.com','1234');
INSERT INTO login(id,email,password) VALUES (,'mom@gmail.com','1444');

create table regime(
    id int auto_increment primary key,
    nom_regime varchar(50),
    prix int ,
    duree date
);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'LEGUME',2000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'PROTEINE',4000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'FRUITS',2000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'GLUCIDE',1000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'NOIX',2000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'Epinard',2000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'Poissons gras',4000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'Volaille',2000,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'Avocats',500,);
INSERT INTO regime(id,nom_regime,prix,duree) VALUES (,'Viande Rouge',3000,);

