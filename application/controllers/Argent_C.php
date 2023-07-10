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
        $id = $this->input->get('idUser');
        $resultat = array();
        $resultat['vola'] = $this->Argent_M->getVola($id);
        $code = $this->input->post('codeRecharge');
        $resultat = $this->Argent_M->verification($code);
        if($resultat['status'] == 0)
        {
            
            $resultat['vola'] = $resultat['vola']+$resultat['valeur'];
            $res = $resultat['vola'];
            $this->Argent_M->update($res);
         redirect('Argent_C/index');
        }else if($resultat['status'] == 1){
            echo "votre code est invalide";
            redirect('Argent_C/index');
            
        }

    }

}