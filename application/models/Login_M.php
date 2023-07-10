<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

    //FONCTION POUR LES REQUETES SQL
    public function insert($email,$password,$nom,$genre,$taille,$poids)
    {
        $sql = "INSERT INTO  users(email,password,nom,genre,taille,poids) values (%s,%s,%s,%s,%d,%d)";
        $sql = sprintf($sql,$this->db->escape($email),$this->db->escape($password),$this->db->escape($nom),$this->db->escape($genre),$this->db->escape($taille),$this->db->escape($poids));
        $this->db->query($sql);

    }


    //fonction login
    public function login($email='', $password=''){
        $sql='SELECT*FROM users WHERE email=%s and password=%s';
        $query=$this->db->query($sql);
        return $query->result_array();
    }

   


}
     
















