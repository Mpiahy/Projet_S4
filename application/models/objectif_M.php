<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_M extends CI_Model {

    //affichier les regime 
    public function liste(){
        $query=$this->db->query('SELECT*FROM regime');
        return $query->result_array();
    }

    //calculer la depense selon le poids 
    
    public function calculer($poids=''){
        $query=$this->db->query('SELECT * FROM regime');
        $data=$this->db->query('SELECT * FROM objectif ');
        
        $calcule=$query['poids'] * $query['duree'] / $poids ;
        $depense=$query['prix']*$calcule;
        
        //inserer regime_users(nom_regime,prix,dure,poids)
        
        $insertQuery = "INSERT INTO regime_users (nom_regime, poids, duree,prix ) 
        VALUES ('".$data['nom_regime']."', '".$data['poids']."',   '".$calcule."', '".$depense."')";

        $this->db->query($insertQuery);

    }
}