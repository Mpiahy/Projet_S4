<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_M extends CI_Model {
public function getUsers($id)
{
    $sql="select * from users where id = %g ";
    $sql=sprintf($sql,$id);
    $query=$this->db->query($sql);
    $resultat=$query->row_array();        
    return $resultat; 
}
}