<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Argent_C extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Argent_M');
		$this->load->model('Login_M');
        $this->load->model('Accueil_M');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data = array();
        $data['user'] = $this->session->user;

        // Utiliser $userID comme argument pour getVola()
        $data['vola'] = $this->Argent_M->getVola(2);

        $data['content'] = 'porte_feuille';
        $this->load->view('template', $data);

    }
    public function traitement()
    {
        $resultat = array();
        $id = $this->input->post('id');
        $code = $this->input->post('codeRecharge');
        $resultat['id'] = $this->Argent_M->getVola($id);
        $resultat = $this->Argent_M->verification($code);
        if ($resultat['nombre'] == $code) {
            $code = $resultat['nombre'];
            $valeur = $resultat['valeur'];
            $this->Argent_M->insertion($id, $code, $valeur);
            redirect('Argent_C/index');
        } else {
            $message = "Votre code est invalide";
            $this->session->set_flashdata('error', $message);
            redirect('Argent_C/index');
        }
    }

}