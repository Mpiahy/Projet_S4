<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_C extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('Regime_M');
		
	}
    public function liste_regime()
    {
        $data = array();
        $data['nom_regime'] = $this->Regime_M->getListe();
        $this->$load->view('admin',$data);
    }
    //supprimer regime
    public function delete($id){
        $data=array();
        $data['suppprimer']=$this->Regime_M->supprimer($id);
        $this->load->view('admin',$data);
    }
    
    //ajouter regime
    
    public function ajouter(){
        $nom = $this->input->post('nom_regime');
        $objectif = $this->input->post('objectif');
        $prix = $this->input->post('prix');
        $duree = $this->input->post('duree');
        $ajout=$this->Regime_M->ajoute($nom,$objectif,$prix,$duree);
        $data['ajoute']=$ajout;
        $this->load->view('admin',$data);
    }
    
    // modifier redime

    public function modifier(){
        $nom = $this->input->post('nom_regime');
        $objectif = $this->input->post('objectif');
         $prix =   $this->input->post('prix');
         $duree  = $this->input->post('duree');
        $this->Regime_M->modifier($nom,$objectif,$prix,$duree);
        
        $this->load->view('admin');


    }
    public function traitement()
    {
        $poids = $this->input->post('poids');
        $critere = $this->input->post('choix');
    }

}