<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_C extends CI_Controller {

     public function objetif(){
        $data=$this->objetif_M->calculer($poids);
     }
}