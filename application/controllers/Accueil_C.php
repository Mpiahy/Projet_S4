<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_C extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Accueil_M');
		$this->load->library('form_validation');
		$this->load->library('session');
       
    }
    public function index()
    {
        $session_data = $this->Accueil_C->get_session_data();
        $data = array();
        $data['id'] = $this->Accueil_M->getUsers($session_data);
        $this->load->view('accueil',$data);
    }
}