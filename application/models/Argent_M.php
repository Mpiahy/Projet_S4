<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Argent_M extends CI_Model {
    public function getVola($id){

    $sql = "select * from portefeuille where idUtilisateur = %g ";
    $sql = sprintf($sql,$id);
    $query=$this->db->query($sql);
    $resultat=$query->row_array();        
    return $resultat;  
    }
    public function getUsers($id)
    {
        $sql="select * from users where id = %g ";
        $sql=sprintf($sql,$id);
        $query=$this->db->query($sql);
        $resultat=$query->row_array();        
        return $resultat;  
    }
    public function verification($code)
    {
        $sql = "SELECT * FROM code where nombre = %g";
        $sql=sprintf($sql,$code);
        $query=$this->db->query($sql);
        $resultat=$query->row_array();        
        return $resultat; 
    }
    public function insertion($id,$code,$valeur)
    {
        $sql = "INSERT INTO confirmation(idUtilisateur,code,valeur) values (%g,%g,%g)";
        $sql = sprintf($sql,$id,$code,$valeur);
        $this->db->query($sql);

    }
}
