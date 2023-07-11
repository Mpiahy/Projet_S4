<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_M extends CI_Model {
    
    //lister tous  les regime  

 public function getListe(){
    $query=$this->db->query("SELECT*FROM regime");
    $resultat = $query->result_array();
    return $resultat;
 }
  //supprimer regime 
  public function supprimer($id){
   $sql='DELETE FROM regime where id=%s';
   $sql=sprintf($sql,$id);
   $query=$this->db->query($sql);
  }

  //modifier regime
  public function modife($nom_regime,$objectif,$prix,$duree){
   $sql='UPDATE regime set nom_regime =%s, objectif=%g ,prix = %g , duree = %g';
   $sql=sprintf($sql,$this->db->escape($nom_regime),$objectif,$prix,$duree);
   $query=$this->db->query($sql);
  }

  //ajouter regime
  public function ajoute($nom_regime='',$objectif='',$prix='',$duree=''){
   $sql='INSERT INTO regime(nom_regime,objectif,prix,duree) VALUES (%s,%s,%s,%s)';
   $sql=sprintf($sql,$this->db->escape($nom_regime),$objectif,$prix,$duree);
   $query=$this->db->query($sql);

  }

}