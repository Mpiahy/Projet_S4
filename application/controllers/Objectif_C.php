<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_C extends CI_Controller {

   public function __construct() {
		parent::__construct();
		$this->load->model('Objectif_M');
      $this->load->model('Accueil_M');
      $this->load->library('form_validation');
      $this->load->library('session');
		$this->load->model('Login_M');
	}

    //objectif
   public function objectif()
   {
      $this->load->model('Objectif_M');
      $data = array();
      $data['user'] = $this->session->user;
      $data['result_regime'] = $this->Objectif_M->calcul_regime();
      $data['result_sport'] = $this->Objectif_M->calcul_sport();
      $data['content'] = 'proposition';

      $this->load->view('template', $data);
   }

}