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
)engine = innoDB;

INSERT INTO login(id,email,password) VALUES (,'mana@gmail.com','1234');
INSERT INTO login(id,email,password) VALUES (,'mom@gmail.com','1444');


create table regime(
    id int auto_increment primary key,
    nom_regime varchar(50),
    objectif int ,
    prix int ,
    duree int,
    FOREIGN KEY (objectif) REFERENCES objectif(idObjectif)
)engine = innoDB;
create table objectif (
    idObjectif int primary key ,
    nom varchar(40)
)engine = innoDB;
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('LEGUME',1,2000,5);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('PROTEINE',1,4000,4);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('FRUITS',1,2000,7);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('GLUCIDE',0,1000,6);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('NOIX',0,2000,15);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('Epinard',0,2000,20);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('Poissons gras',0,4000,10);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('Volaille',0,2000,7);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('Avocats',0,500,4);
INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES ('Viande Rouge',1,3000,6);

INSERT INTO objectif(idObjectif,nom) VALUES (1,'Mampihena');
INSERT INTO objectif(idObjectif,nom) VALUES (11,'Mampitombo');