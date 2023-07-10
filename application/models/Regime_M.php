<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_M extends CI_Model {
    
    //lister tous  les regime  

 public function liste(){
    $query=$this->db->query('SELECT*FROM regime ');
    return $query->result_array();

 }


}