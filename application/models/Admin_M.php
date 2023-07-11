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
    public function liste_confirmation()
    {
        $query = $this->db->get('confirmation');
        $result = $query->result();

        return $result;
    }

    public function delete_confirmation($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('confirmation');
    }

    public function update_code($id)
    {
        $data = array(
            'status' => 1
        );
        $this->db->where('id', $id);
        $this->db->update('code', $data);
    }

    public function addition_vola($id,$vola)
    {
        $this->db->select('vola');
        $this->db->where('idUtilisateur', $id);
        $query = $this->db->get('portefeuille');
        $row = $query->row();

        if ($row) {
            $val = $row->valeur;

            $this->db->set('vola', $val+ $vola, FALSE);
            $this->db->update('portefeuille');
        }
    }
}