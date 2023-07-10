<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_M extends CI_Model {

    //affichier les regime 
    public function liste(){
        $query=$this->db->query('SELECT*FROM regime');
        return $query->result_array();
    }

    //calculer la depense selon le poids 
    
    public function calculer(){
        $query=$this->db->query('SELECT * FROM regime');
        $poids=$this->input->post('poids');
        
        $calcule=$query['poids'] * $query['duree'] / $poids ;
        $depense=$query['prix']*$calcule;
        

    }
}