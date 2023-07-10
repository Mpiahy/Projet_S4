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
        $sql="select * from users where email='%s' and password='%s' ";
        $sql=sprintf($sql,$email,$password);
        $query=$this->db->query($sql);
        $resultat=$query->row_array();        
        return $resultat;  
    }


    //fonction login
    public function login($email='', $password=''){
        $sql='SELECT*FROM users WHERE email=%s and password=%s';
        $query=$this->db->query($sql);
        return $query->result_array();
    }

   


}
     
















