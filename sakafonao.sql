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
     poids int,
     idCon int  not null
 );
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('mana@gmail.com','1234','manasoa','masculin',150,70,1);
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('mom@gmail.com','1444','mpiahy','masculin' , 150,72,0);
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('aina@gmail.com','1122','aina','masculin',170,80,0);

create table objectif (
    idObjectif int primary key ,
    nom varchar(40)
)engine = innoDB;

create table regime(
    id int auto_increment primary key,
    nom_regime varchar(50),
    objectif int ,
    prix int ,
    duree int,
    poids int,
    FOREIGN KEY (objectif) REFERENCES objectif(idObjectif)
)engine = innoDB;

create table regime_users (
    nom_regime varchar(50),
    prix int ,
    duree int,
    poids int
)engine = innoDB;
INSERT INTO objectif(idObjectif,nom) VALUES (1,'Mampihena');
INSERT INTO objectif(idObjectif,nom) VALUES (11,'Mampitombo');

INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('LEGUME',1,2000,5,1);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('PROTEINE',1,4000,4,2);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('FRUITS',1,2000,7,3);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('GLUCIDE',11,1000,6,4);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('NOIX',11,2000,15,3);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('Epinard',11,2000,20,2);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('Poissons gras',11,4000,10,1);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('Volaille',11,2000,7,1);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('Avocats',11,500,4,5);
INSERT INTO regime(nom_regime,objectif,prix,duree,poids) VALUES ('Viande Rouge',1,3000,6,6);