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
        $data = array();
        $data['user'] = $this->session->user;
        $data['content'] = 'Accueil';
        $this->load->view('template', $data);
    }
}