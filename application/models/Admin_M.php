<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model {

    public function regime(){
       $query= $this->db->query('SELECT*FROM regime');
       return $query->result();
    
    }
    public function sport(){
        $query=$this->db->query('SELECT*FROM sport');
        return $query->result();
    }
}