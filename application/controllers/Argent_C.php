<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Argent_C extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Argent_M');
		$this->load->model('Login_M');

       
    }
    public function index($idUser)
    {
      
        
        $data = array();
        $data['vola'] = $this->Argent_M->getVola($idUser);
        $data['id']= $this->Argent_M->getUsers($idUser);
         $this->load->view('porte_feuille',$data);
    }
    public function traitement()
    {
        $id = $this->input->post('idUs');
        $resultat = array();
        $code = $this->input->post('codeRecharge');
        $resultat = $this->Argent_M->verification($code);
        if($resultat['status'] == 0)
        {
            $this->Argent_M->insertion(1,$resultat['code'],$resultat['valeur']);
            $this->load->view('accueil');
        }else if($resultat['status'] == 1){
            echo "votre code est invalide";
            $this->load->view('accueil',$data);
            
        }

    }

}