<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

    //FONCTION POUR LES REQUETES SQL


    // fonction login
    public function login($email='', $password='',$nom='',$genre='',$taille='',$poids=''){
        $sql='SELECT*FROM users WHERE email=%s and password=%s';
        $query=$this->db->query($sql);
        return $query->result_array();
    }

    
   


}
     
















