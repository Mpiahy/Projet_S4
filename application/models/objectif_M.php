<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_M extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //affichier les regime 
    public function liste(){
        $query=$this->db->query('SELECT*FROM regime');
        return $query->result_array();
    }

    //calculer la depense selon le poids 

    public function calculer()
    {
        $query = $this->db->get('regime');
        $result = $query->result(); // Récupérer tous les résultats

        $poids = $this->input->post('poids');

        $depenses = array();
        foreach ($result as $row) {
            $calcule = $row->poids * $row->duree / $poids;
            $depense = $row->prix * $calcule;
            $row->calcule = $calcule;
            $row->depense = $depense;
            $depenses[] = $row;
        }

        return $depenses;
    }

}