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

    public function calcul_regime()
    {
        $choix = $this->input->post('choix');

        if ($choix === '11') {
            $this->db->where('objectif', 11);
        } elseif ($choix === '1') {
            $this->db->where('objectif', 1);
        } else {
            // Si aucun choix n'est sélectionné, vous pouvez spécifier une valeur par défaut ou décider du comportement à adopter
        }

        $query = $this->db->get('regime');
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
    public function calcul_sport()
    {
        $choix = $this->input->post('choix');

        if ($choix === '11') {
            $this->db->where('idObjectif', 11);   //augmenter
        } elseif ($choix === '1') {
            $this->db->where('idObjectif', 1);    //diminuer
        } else {
            // Si aucun choix n'est sélectionné, vous pouvez spécifier une valeur par défaut ou décider du comportement à adopter
        }

        $query = $this->db->get('sport');
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