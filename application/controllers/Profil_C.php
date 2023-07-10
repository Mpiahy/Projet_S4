<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_C extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_M');
		$this->load->library('form_validation');
		$this->load->library('session');
       
    }
  
}