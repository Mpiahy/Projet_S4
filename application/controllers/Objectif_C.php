<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_C extends CI_Controller {


    //objectis
     public function objetif(){
        $data=array();
        $data['resultat']=$this->objetif_M->calculer();
        $this->load->view('proposition',$data);
     }
}