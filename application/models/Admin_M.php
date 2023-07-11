<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model {
    public function liste_regime()
    {
        $query = $this->db->get('regime');
        $result = $query->result();

        return $result;
    }
    public function liste_sport()
    {
        $query = $this->db->get('sport');
        $result = $query->result();

        return $result;
    }
}