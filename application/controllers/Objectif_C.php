<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_C extends CI_Controller {

   public function __construct()
	{
		parent::__construct();
		$this->load->model('Objectif_M');
   }

    //objectif
   public function objectif()
   {
      $this->load->model('Objectif_M');
      $data = array();
      $data['result_regime'] = $this->Objectif_M->calcul_regime();
      $data['result_sport'] = $this->Objectif_M->calcul_sport();

      $this->load->view('proposition', $data);
   }

}