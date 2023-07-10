<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_M extends CI_Model {
    
    //lister tous  les regime  

 public function liste(){
    $query=$this->db->query('SELECT*FROM regime ');
    return $query->result_array();

 }
  //supprimer regime 
  public function supprimer($id){
   $sql='DELETE FROM regime where id=%s';
   $sql=sprintf($sql,$this->db->escape($id));
   $query=$this->db->query($sql);
  }

  //modifier regime
  public function modife($nom_regime,$objectif,$prix,$duree){
   $sql='UPDATE regime set id=%s';
   $sql=sprintf($sql,$this->db->escape($nom_regime),$this->db->escape($objectif),$this->db->escape($prix),$this->db->escape($duree));
   $query=$this->db->query($sql);
  }

  //ajouter regime
  public function ajoute($nom_regime='',$objectif='',$prix='',$duree=''){
   $sql='INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES (%s,%s,%s,%s)';
   $sql=sprintf($sql,$this->db->escape($nom_regime),$this->db->escape($objectif),$this->db->escape($prix),$this->db->escape($duree));
   $query=$this->db->query($sql);

  }
  public function getRegime($critere)
  {
     $sql = "select * from regime where idObjectif = %";
  }
}