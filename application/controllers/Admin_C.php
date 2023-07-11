<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_M');
		$this->load->model('Regime_M');
       
	}
	public function index()
	{
            
		$data = array();
		// définition des données variables du template
		$data['title'] = 'Admin';
		$data['description'] = 'Web Application pour controller son régime alimentaire';
		$data['keywords'] = 'regime, aliment, saine';
		$data['autor'] = 'Aina, Manasoa, Mpiahy';

		$this->load->view('admin', $data);
	}
	public function affiche()
   {
      $this->load->model('Objectif_M');
      $data = array();
      $data['data'] = $this->Objectif_M->calculer();

      $this->load->view('admin', $result);
      
   }
   public function liste_regime()
   {
	   $data = array();
	   $data['nom_regime'] = $this->Regime_M->getListe();
	   $this->load->view('admin',$data);
   }

}
