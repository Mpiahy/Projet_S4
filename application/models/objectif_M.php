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
        $choix = $this->input->post('choix');

        $this->db->select('r.*, s.nom_sport, s.frais as prix');
        $this->db->from('regime r');
        $this->db->join('objectif o', 'o.idObjectif = r.objectif');
        $this->db->join('sport s', 's.idObjectif = o.idObjectif');
        if ($choix === '11' || $choix === '1') {
            $this->db->where('r.objectif', $choix);
        }

        $query = $this->db->get();
        $result = $query->result();

        $poids_voulu = $this->input->post('poids');

        $depenses = array();
        foreach ($result as $row) {
            $calcule = $row->poids * $row->duree / $poids_voulu;

            // Conversion en jours et heures
            $jours = floor($calcule);
            $heures = round(($calcule - $jours) * 24);

            $depense = $row->prix * $calcule; // Utilisation de l'alias "prix" pour le calcul de la dépense

            if ($jours > 1) {
                $row->calcule = $jours . ' jrs et ' . $heures . ' hr';
            } elseif ($jours == 1) {
                $row->calcule = $jours . ' jr et ' . $heures . ' hr';
            } else {
                $row->calcule = $heures . ' hr';
            }

            $row->depense = $depense;
            $depenses[] = $row;
        }

        return $depenses;
    }







}