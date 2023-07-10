<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_C extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('Regime_M');
		
	}

    //supprimer regime
    public function delete($id){
        $data=array();
        $data['suppprimer']=$this->Regime_M->supprimer($id);
        $this->load->view();
    }

    //ajouter regime

    public function ajouter(){
        $ajout=$this->Regime_M->ajoute($this->input->post('nom_regime'),$this->input->post('prix'),$this->input->post('duree'));
        $data['ajoute']=$ajout;
    }

    // modifier redime

    public function modifier(){
        $modife=$this->Regime_M->modifier($this->input->post('nom_regime'),$this->input->post('prix'),$this->input->post('duree'));
        $data['modifier']=$modife;
        

    }
    public function traitement()
    {
        $poids = $this->input->post('poids');
        $critere = $this->input->post('choix');
        
    }

}