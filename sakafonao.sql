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
 )engine = innoDB;
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('mana@gmail.com','1234','manasoa','homme',150,70,1);
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('mom@gmail.com','1444','mpiahy','homme' , 150,72,0);
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('aina@gmail.com','1122','aina','homme',170,80,0);
 INSERT INTO users (email,password,nom,genre,taille,poids,idCon) VALUES ('anjely@gmail.com','1122','angel','femme',160,50,0);

create table objectif (
    idObjectif int primary key ,
    nom varchar(40)
)engine = innoDB;
INSERT INTO objectif(idObjectif,nom) VALUES (1,'Mampihena');
INSERT INTO objectif(idObjectif,nom) VALUES (11,'Mampitombo');

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

create table sport 
(
    id int auto_increment primary key,
    nom_sport varchar(50),
    idObjectif int,
    frais int,
    duree int,
    calories INT ,
    FOREIGN KEY(idObjectif) REFERENCES objectif(idObjectif)
)engine = innoDB;

INSERT INTO sport (nom_sport, idObjectif, frais, duree, calories)
VALUES
    ('Football', 1, 200000, 60, 750),
    ('Basketball', 1, 50000, 50, 650),
    ('Volley-ball', 1, 125000, 40, 400),
    ('Hand-ball', 1, 150000, 52, 650),
    ('Petanque', 11, 50000, 20, 150),
    ('Golf', 11, 500000, 40, 400),
    ('Tennis de table', 1, 175000, 40, 300),
    ('Aikido', 11, 75000, 30, 500),
    ('Cyclisme', 11, 100000, 10, 700),
    ('Lancer de poids', 11, 75000, 40, 300),
    ('Natation', 1, 100000, 20, 550);

create table portefeuille
(
    id int not null primary key auto_increment ,
    idUtilisateur int ,
    vola int ,
    FOREIGN KEY (idUtilisateur) REFERENCES users(id)
)engine = innoDB;
INSERT INTO portefeuille (idUtilisateur,vola) VALUES (1,1000);
INSERT INTO portefeuille (idUtilisateur,vola) VALUES (2,5000);
create table code
(
    id int primary key auto_increment,
    nombre int,
    valeur int,
    status int 
)engine = innoDB;
INSERT INTO code(nombre,valeur,status) VALUES (4256,100000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4257,50000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4258,200000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4259,150000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4260,100000,1);
INSERT INTO code(nombre,valeur,status) VALUES (4261,80000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4262,120000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4263,250000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4264,500000,0);
INSERT INTO code(nombre,valeur,status) VALUES (4265,150000,0);


create table confirmation  
(
    id int PRIMARY KEY auto_increment,
    idUtilisateur int,
    code int ,
    valeur int ,
    FOREIGN KEY (idUtilisateur) REFERENCES users(id)
)engine = innoDB;
