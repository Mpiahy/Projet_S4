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
    frais int ,
    duree int ,
    FOREIGN KEY(idObjectif) REFERENCES objectif(idObjectif)
)engine = innoDB;

INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Football',1,40000,30); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Basketball',1,10000,25); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Volley-ball',1,25000,20); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Hand-ball',1,30000,26); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Petanque',11,10000,10); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Golf',11,100000,20); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Tennis de table',1,35000,20); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Aikido',11,15000,15); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Cyclisme',11,20000,5); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Lance de poids',11,15000,20); 
INSERT INTO sport (nom_sport,idObjectif,frais,duree) VALUES ('Natation',1,20000,10); 

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