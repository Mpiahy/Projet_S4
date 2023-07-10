<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

    //FONCTION POUR LES REQUETES SQL
    public function insert($email,$password,$nom,$genre,$taille,$poids)
    {
        $sql = "INSERT INTO  users(email,password,nom,genre,taille,poids) values (%s,%s,%s,%s,%g,%g)";
        $sql = sprintf($sql,$this->db->escape($email),$this->db->escape($password),$this->db->escape($nom),$this->db->escape($genre),$taille,$poids);
        $this->db->query($sql);

    }
    public function getUsers($email,$password)
    {
        $resultat=array(); 
        $sql="select id from users where email='%s' and password='%s' ";
        $sql=sprintf($sql,$email,$password);
        $query=$this->db->query($sql);
        $resultat=$query->row_array();        
        return $resultat;  
    }

}
     
















