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
      $data['resultat'] = $this->Objectif_M->calculer();

      $this->load->view('proposition', $data);
      
   }

}