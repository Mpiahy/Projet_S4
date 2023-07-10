<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_C extends CI_Controller {


    //objectis
     public function objectif(){
        $data=array();
        $data['resultat']=$this->Objectif_M->calculer();

        $this->load->view('proposition',$data);
     }
}